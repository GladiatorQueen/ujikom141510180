<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penggajian extends Model
{
	protected $table = 'penggajians';
    protected $fillable = array('tunjangan_pegawai_id','jumlah_jam_lembur','jumlah_uang_lembur','gaji_pokok','total_gaji','tanggal_pengambilan','status_pengambilan','petugas_penerima','created_at','updated_at');
    protected $visible = array('tunjangan_pegawai_id','jumlah_jam_lembur','jumlah_uang_lembur','gaji_pokok','total_gaji','tanggal_pengambilan','status_pengambilan','petugas_penerima','created_at','updated_at');
    protected $nullable = array('tanggal_pengambilan', 'status_pengambilan','petugas_penerima');
    public $timestamps = true;

    public function tunjangan_pegawai()
    {
    	return $this->belongsTo('App\Tunjangan_pegawai','tunjangan_pegawai_id');
    }
    //
}
