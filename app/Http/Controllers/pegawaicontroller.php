<?php

namespace App\Http\Controllers;


use Request;
use App\Pegawai;
use App\Jabatan;
use App\Golongan;
use App\Kategori_lembur;
use App\User;
use File;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Input;

class pegawaicontroller extends Controller
{
    use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('superAdmin');
        $this->middleware('Keuangan');
    }
    public function index()
    {
        //
        $pegawai = Pegawai::paginate(5);
        $golongan = golongan::all();
        $jabatan = jabatan::all();
        return view('pegawai.index', compact('pegawai','golongan','jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jb = jabatan::all();
        $gol = golongan::all();
        return view('pegawai.create', compact('jb','gol','user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
        $peg = array (
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|min:6|confirmed',
                    'nip'=>'required|unique:pegawais',
                    'jabatan_id'=>'required',
                    'golongan_id'=>'required',
                    'photo'=>'required',
            );
        $pesan = array(
            'nip.unique' => 'Maaf Sudah Ada',
            'jabatan_id.required' =>'Harus Diisi broo',
            'golongan_id.required' =>'Harus Diisi broo',
            'photo.required' =>'Harus Diisi broo',
            );
        

        $validation = Validator::make(Request::all(), $peg, $pesan);
        if($validation->fails())
        {
            return redirect('pegawai/create')->withErrors($validation)->withInput();
        }

            $user =  new User ;
            $user ->name=Input::get('name');
            $user ->email=Input::get('email');
            $user ->password=bcrypt(Input::get('password'));
            $user ->permission=Input::get('permission');
            $user->save();

        // $file = $request->file('photo');
        // $destinationPath = public_path().'/gambar';     
        // $filename = str_random(6).'_'.$file->getClientOriginalName();
        // $uploadSuccess= $file->move($destinationPath, $filename);

        if(Input::hasFile('photo'))
        {
            //mengambil file yg di up
            $uploaded_photo = Input::file('photo');
            //mengambil extension file
            $extension = $uploaded_photo->getClientOriginalExtension();
            //membuat nama file random berikut estension
            $filename = md5(time()) . '.' . $extension;
            //menyimpan cover ke folder public/gambar
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'gambar';
            $uploaded_photo->move($destinationPath, $filename);
            //mmengisi field cover di var dgn file nam yg baru dibuat

            $tambah = new Pegawai;
            $tambah->nip =Request::get('nip');
            $tambah->user_id = $user->id;
            $tambah->jabatan_id = Request::get('jabatan_id');
            $tambah->golongan_id = Request::get('golongan_id');
            $tambah->photo = $filename;
            $tambah->save();
        }

        $kl = Kategori_lembur::where('jabatan_id', $tambah->jabatan_id)->where('golongan_id', $tambah->golongan_id)->first();
        if(isset($kl))
        {
            return redirect('pegawai');
        }
        else
        {
            $kategori_lembur = new Kategori_lembur;
            $kategori_lembur->jabatan_id=$tambah->jabatan_id;
            $kategori_lembur->golongan_id=$tambah->golongan_id;
            $tanggal = date('dmy');
            $kategori_lembur->kode_lembur="KodeLem".$tanggal."-".$tambah->jabatan_id."-".$tambah->golongan_id;
            $kategori_lembur->besaran_uang=0;
            $kategori_lembur->save();
            return redirect('pegawai');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::all();
        $jab = Jabatan::all();
        $gol = Golongan::all();
        $pegawai = Pegawai::find($id);
        return view('pegawai.read', compact('pegawai','user','jab','gol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $peg = Pegawai::find($id);
        $jab = Jabatan::all();
        $gol = Golongan::all();
        $user=User::all();
        return view('pegawai.edit', compact('peg','jab','gol','user'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $old_pegawai = Pegawai::where('id', $id)->first();

       $old_email = User::where('id', $old_pegawai->user_id)->first()->email;

       $data = Request::all();

       $validati = ([

           'name' => 'required|max:255',

           'email' => 'required|email|max:255|unique:users',

           'nip'=>'required|unique:pegawai',

           'jabatan_id' => 'required',

           'golongan_id' => 'required',

           'photo' => 'required',

           ]);

       if ($old_email==$data['email']) 

       {

           $validati['email'] = '';

           $data['email'] = $old_email;

       }

       if (Input::file() == null)

       {

           $validati['photo'] = '';

       }

       if ($data['nip']==$old_pegawai['nip'])

       {

           $validati['nip'] = '';

       }

       else

       {

           $validati['nip'] = 'required|unique:pegawai';

       }



       $validation = Validator::make(Request::all(), $validati);



       if ($validation->fails()) {

           return redirect('pegawai/'.$id.'/edit')->withErrors($validation)->withInput();

       }



       $user = User::where('id', $old_pegawai->user_id)->first()->update([

           'name' => $data['name'],

           'email' => $data['email'],

           ]);

       $user = User::where('id', $old_pegawai->user_id)->first();

       



       if (Input::file()==null)

       {

           $data['photo'] = $old_pegawai->photo;



       }

       else

       {

           $file = Input::file('photo');
 
           $destination_path = public_path().'/assets/image';

           $filename = $user->name.'_'.$file->getClientOriginalName();

           $uploadSuccess = $file->move($destination_path,$filename);

           $data['photo'] = $filename;

       }



       pegawai::where('id', $id)->first()->update([

           'nip' => $data['nip'],

           'jabatan_id' => $data['jabatan_id'],

           'golongan_id' => $data['golongan_id'],

           'photo' => $data['photo'],

           ]);

       return redirect('pegawai');


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Pegawai::find($id)->delete();
        return redirect('pegawai');
    }
}
