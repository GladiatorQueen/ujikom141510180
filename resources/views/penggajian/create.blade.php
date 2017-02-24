                @extends('layouts.app')
                @section('content')
    <div id="page-wrapper">
        <div class="row">
            <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Penggajian</h1>
        </div>
            <!--End Page Header -->
    </div>

                <div class="row">
                <!--quick info section -->
                {{--   <a href=""> <div class="col-lg-3">
                <div class="alert alert-danger text-center">
                <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>Tambah Data </b>
                </div>
                </div></a> --}}
                <!--end quick info section -->
                </div>

                <div class="row">
                <div class="col-lg-8">
                <!--Area chart example -->
                </div>

                <!--End area chart example -->
                <!--Simple table example -->
                <div class="panel panel-primary">
                <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i>tabel

                <div class="pull-right">
                </div>

                <div class="btn-group">
                </div>

                </div>



                <div class="panel-body">
                <div class="row">
                <div class="col-lg-12">
                <div class="table-responsive">
                <div class="container">
                <div class="row">
                <div class="col-md-8 col-md-offset-2">
                <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/penggajian') }}"   enctype="multipart/form-data">
                {!! csrf_field() !!}

                <table  class="table" >

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-md-12">
                <label for="Jabatan">Nama Pegawai</label>

                <div>
                @if(isset($error))
                Penggajian Sudah Ada!
                @endif
                </div>

                <select class="col-md-6 form-control" name="tunjangan_pegawai_id">
                @foreach($tunjangan as $datatunjangan)

                <option  value="{{$datatunjangan->id}}" >{{$datatunjangan->pegawai->User->name}}</option>

                @endforeach
                </select>
                <tr>
                <input type="hidden" name="status_pengambilan" value="0">

                <td  class="btn btn-danger">  <input type="submit" value="Tambah" class="btn btn-success"></input></td>

                </tr>
                </table>
                </div>
                </div>
                </div>
                @endsection