@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <br>

        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading"> <center><h3>Jabatan</h3></center></div>  
                
                <br>
                <div class="form-group"><center>
                    <form action="{{url('jabatan')}}/?nama_jabatan=nama_jabatan">
                    <input type="text" name="nama_jabatan" placeholder="Sarch"></form>
                </center></div>
		<br>
		<br>
	<table class="table table-bordered">
		<thead>
			<tr class="bg-info">
				<th>No</th>
				<th>Kode Jabatan</th>
				<th>Nama Jabatan</th>
				<th>Besaraan Uang</th>
				<th colspan="3"><center>Action</center></th>
			</tr>
		</thead>
		@php
		$no = 1;
		@endphp
		@foreach($jabatan as $data)
		<tbody>
			<tr>
				
				<td>{{$no++}}</td>
				<td>{{$data->kode_jabatan}}</td>
				<td>{{$data->nama_jabatan}}</td>
				<?php $data->besaran_uang=number_format($data->besaran_uang,2,',','.'); ?>
				<td>Rp.{{$data->besaran_uang}}</td>
				@if (Auth::user()->permission == "Super Admin" || Auth::user()->permission == "Hrd")
				<td><center><a href="{{route('jabatan.edit', $data->id)}}" class="btn btn-warning"><li class="mdi mdi-lg mdi-pencil"></li></a></center></td>
				<td><center>
					<form method="POST" action="{{route('jabatan.destroy', $data->id)}}">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="DELETE">
					<button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus Data?');"><i class="mdi mdi-delete"></i></button>
					</form>
				</center></td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
	@if (Auth::user()->permission == "Super Admin" || Auth::user()->permission == "Hrd")
	<div class="panel-body">
                <center><a href="{{route('jabatan.create')}}" class="btn  btn-success">Tambah Data</a></center>
	{{$jabatan->links()}}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
