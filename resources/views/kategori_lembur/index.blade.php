@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
    <br>
    <br>
    <br>
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading"> <center><h3>Kategori Lembur</h3></center></div>  
				@if (Auth::user()->permission == "Super Admin" || Auth::user()->permission == "Keuangan")
                <div class="panel-body">
                    <center><a href="{{route('kategori_lembur.create')}}" class="btn btn-success">Tambah Data</a></center>
                    <center>{{$kl->links()}}</center>
                @endif
	<br>
	<br>
	<table class="table table-bordered">
		<thead>
			<tr class="bg-info">
				<th>No</th>
				<th>Kode Lembur</th>
				<th>Nama Jabatan</th>
				<th>Nama Golongan</th>
				<th>Besaran Uang</th>
				<th colspan="3"><center>Action</center></th>
			</tr>
		</thead>
		@php
		$no = 1;
		@endphp
		@foreach($kl as $data)
		<tbody>
			<td>{{$no++}}</td>
			<td>{{$data->kode_lembur}}</td>
			<td>{{$data->Jabatan->nama_jabatan}}</td>
			<td>{{$data->Golongan->nama_golongan}}</td>
			<?php $data->besaran_uang=number_format($data->besaran_uang,2,',','.'); ?>
			<td>Rp.{{$data->besaran_uang}}</td>
			@if (Auth::user()->permission == "Super Admin" || Auth::user()->permission == "Keuangan")
			<td><center><a href="{{route('kategori_lembur.edit', $data->id)}}" class="btn btn-warning"><li class="mdi mdi-lg mdi-pencil"></li></a></center></td>
				<td><center>
					<form method="POST" action="{{route('kategori_lembur.destroy', $data->id)}}">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="DELETE">
					<button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus Data?');"><i class="mdi mdi-delete"></i></button>
					</form>
			@endif
		</tbody>
		@endforeach
		</table>
	</div>
	</div>
	</div>
</div>
</div>
@endsection