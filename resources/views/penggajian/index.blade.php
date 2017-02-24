@extends('layouts.app')
@section('content')

<div id="page-wrapper">
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Penggajian</h1>

            <div class="row">
                <a href="{{url('penggajian/create')}}"> <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                    <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>Tambah Data </b>
                        </div>
                </div></a>



        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
            
        @php
        $no=1 ;
        @endphp

        @foreach($penggajian as $datapenggajian)

        @php
         ;
        @endphp

        <div class="col-md-6">
        <center>

 
                        <center><img src="assets/images/users/avatar-3.jpg" alt="user" class="thumb-sm img-circle" /></center>
                        </th>
                        <h3>{{$datapenggajian->tunjangan_pegawai->pegawai->User->name}}</h3>
                        <h4>{{$datapenggajian->tunjangan_pegawai->pegawai->nip}}</h4>

                        <h5><b>
                        @if($datapenggajian->tanggal_pengambilan == ""&&$datapenggajian->status_pengambilan == "0")
                            Gaji Belum Diambil
                        <a class="btn btn-success col-md-2" href="{{route('penggajian.edit',$datapenggajian->id)}}">Ambil Gaji </a>
                        
                        @elseif($datapenggajian->tanggal_pengambilan == ""||$datapenggajian->status_pengambilan == "0")

                            Gaji Belum Diambil

                            <br>

                            <br>

                            

                          <center> <b>  <a class="btn btn-success col-md-12" href="{{route('penggajian.edit',$datapenggajian->id)}}">Ambil Gaji </a></b></center>

                            <br>

                            <br>

                            <br>



                             

                        

                        @else

                            Gaji Sudah Diambil Pada {{$datapenggajian->tanggal_pengambilan}}

                        @endif</b></h5>

                        <h5>Jumlah Jam lembur Anda {{$datapenggajian->jumlah_jam_lembur}} jam</h5>
                        <h5>Gaji Lembur Anda Sebesar Rp.  {{$datapenggajian->jumlah_uang_lembur}} </h5>
                        <h5>Gaji Pokok Sebesar Rp. {{$datapenggajian->gaji_pokok}}</h5>
                        <h5>Mendapat Tunjangan Sebesar Rp.  {{$datapenggajian->tunjangan_pegawai->tunjangan->besaran_uang}}</h5>
                        <h5>Jadi Total Gaji Anda Adalah Rp.  {{$datapenggajian->total_gaji}}</h5>


                        <a class="btn btn-success col-md-2" href="{{route('penggajian.show',$datapenggajian->id)}}">Lihat </a>

                        <form method="POST" action=" {{route('penggajian.destroy', $datapenggajian->id)}} ">

                        {{csrf_field()}}

                        <input type="hidden" name="_method" value="DELETE">

                        <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">

                        </form>

                      

                     

                    

                                

                        </center>

                        </div> 

                        @endforeach

                        

                    </table>

                                    </div>



                                </div>



                            </div>

                            <!-- /.row -->

                        </div>

                        <!-- /.panel-body -->

                    </div>

                    <!--End simple table example -->



                </div>

                </div>



            </div>



                            </div>

                        </div>



                    </div>

                    <!--End Chat Panel Example-->

                </div>

            </div>

            

        </div>

        <!-- end page-wrapper -->



    </div>



@endsection