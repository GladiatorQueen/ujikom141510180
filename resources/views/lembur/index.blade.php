@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
    <br>
    <br>
    <br>
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading"> <center><h3>Lembur Pegawai</h3></center></div>  
				@if (Auth::user()->permission == "Super Admin" || Auth::user()->permission == "Keuangan")
                <div class="panel-body">
                    <center><a href="{{route('lembur_pegawai.create')}}" class="btn btn-success">Tambah Data</a></center>
                    <center>{{$lp->links()}}</center>
                @endif
	<br>
	<br>
	<table class="table table-bordered">
		<thead>
			<tr class="bg-info">
				<th>No</th>
				<th>Kode Lembur Id</th>
				<th>Nama Pegawai</th>
				<th>Jumlah Jam</th>
				<th colspan="3"><center>Action</center></th>
			</tr>
		</thead>
		@php
		$no = 1;
		@endphp
		@foreach($lp as $data)
		<tbody>
			<td>{{$no++}}</td>
			<td>{{$data->Kategori_lembur->kode_lembur}}
			<td>{{$data->Pegawai->User->name}}</td>
			<td>{{$data->jumlah_jam}}</td>
			@if (Auth::user()->permission == "Super Admin" || Auth::user()->permission == "Keuangan")
			<td><center><a href="{{route('lembur_pegawai.edit', $data->id)}}" class="btn btn-warning"><li class="mdi mdi-lg mdi-pencil"></li></a></center></td>
				<td><center>
					<form method="POST" action="{{route('lembur_pegawai.destroy', $data->id)}}">
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