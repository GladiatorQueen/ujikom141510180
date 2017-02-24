@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
    <br>
    <br>
    <br>
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading"> <center><h3>Tunjangan Pegawai</h3></center></div>  

                <div class="panel-body">
                    <center><a href="{{route('tunjangan_pegawai.create')}}" class="btn btn-success">Tambah Data</a></center>
                    <center>{{$tp->links()}}</center>
	<br>
	<br>
	<table class="table table-bordered">
		<thead>
			<tr class="bg-info">
				<th>No</th>
				<th>Kode Tunjangan Id</th>
				<th>Nama Pegawai</th>
				<th colspan="3"><center>Action</center></th>
			</tr>
		</thead>
		@php
		$no = 1;
		@endphp
		@foreach($tp as $data)
		<tbody>
			<td>{{$no++}}</td>
			<td>{{$data->Tunjangan->kode_tunjangan}}</td>
			<td>{{$data->Pegawai->User->name}}</td>
			<td><center><a href="{{route('tunjangan_pegawai.edit', $data->id)}}" class="btn btn-warning"><li class="mdi mdi-lg mdi-pencil"></li></a></center></td>
				<td><center>
					<form method="POST" action="{{route('tunjangan_pegawai.destroy', $data->id)}}">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="DELETE">
					<button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus Data?');"><i class="mdi mdi-delete"></i></button>
					</form>
		</tbody>
		@endforeach
		</table>
	</div>
</div>
</div>
</div>
</div>

@endsection