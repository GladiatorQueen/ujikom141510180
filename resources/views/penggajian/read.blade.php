                            @extends('layouts.app')



                            @section('content')















                            <table class="table table-striped table-hover table-bordered">



                            <div class="col-md-12">

                            <center>





                            <h3>{{$datapenggajian->tunjangan_pegawai->pegawai->User->name}}</h3>

                            <h4>{{$datapenggajian->tunjangan_pegawai->pegawai->nip}}</h4>

                            <b>@if($datapenggajian->tanggal_pengambilan == ""&&$datapenggajian->status_pengambilan == "0")

                            Gaji Belum Diambil

                            @elseif($datapenggajian->tanggal_pengambilan == ""||$datapenggajian->status_pengambilan == "0")

                            Gaji Belum Diambil

                            @else

                            Gaji Sudah Diambil Pada {{$datapenggajian->tanggal_pengambilan}}

                            @endif</b>

                            <h5>Gaji Lembur Sebesar Rp.{{$datapenggajian->jumlah_uang_lembur}} ,Gaji Pokok Sebesar Rp.{{$datapenggajian->gaji_pokok}} ,Mendapat Tunjangan Sebesar Rp.{{$datapenggajian->tunjangan_pegawai->tunjangan->besaran_uang}} ,Jadi Total Gaji Rp.{{$datapenggajian->total_gaji}}







                            </h5>

                            @if(Auth::user()->permession=='Admin'||Auth::user()->permession=='Hrd')

                            <a class="btn btn-primary col-md-12" href="{{url('penggajian')}}">Kembali</a>

                            @elseif(Auth::user()->permession=='Pegawai')

                            <a class="btn btn-primary col-md-12" href="{{url('/')}}">Kembali</a>

                            @endif   

                            </center>

                            </div> 



                            </table>

                            </div>



                            </div>

                            </div>

                            </div>

                            </div>

                            </div>                   

                            </div>

                            </div>                    

                            </div>

                            @endsection