@extends('layouts.app')

@section('content')

<br>

<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">Update Data Pegawai</div>

                <div class="panel-body">

    {!! Form::model($peg,['method'=>'PATCH','route'=>['pegawai.update',$peg->id],'enctype'=>'multipart/form-data']) !!}

    <div class="form-group {{ $errors->has('nip') ? ' has-error' : '' }}">

        {!! Form::label('NIP', 'NIP:') !!}

        {!! Form::text('nip',null,['class'=>'form-control']) !!}

        @if ($errors->has('nip'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('nip') }}</strong>

                                    </span>

                                @endif

    </div>

    <div class="form-group">

    {!! Form::label('Name', 'Name:') !!}

                                <input id="name" type="text" class="form-control" name="name" value="{{ $peg->User->name }}">



                                @if ($errors->has('name'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('name') }}</strong>

                                    </span>

                                @endif

            </div>

            <div class="form-group">

    {!! Form::label('Email', 'Email:') !!}

                                <input id="email" type="email" class="form-control" name="email" value="{{ $peg->User->email }}">



                                @if ($errors->has('email'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('email') }}</strong>

                                    </span>

                                @endif

            </div>

    <div class="form-group">

                                {!! Form::label('Permission', 'Permission:') !!}

                                <input id="permission" type="text" class="form-control" name="permission" value="{{ $peg->User->permission }}">



                                @if ($errors->has('email'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('email') }}</strong>

                                    </span>

                                @endif

            </div>

    <div class="form-group {{ $errors->has('jabatan_id') ? ' has-error' : '' }}">

        {!! Form::label('Kode Jabatan', 'Kode Jabatan:') !!}

        <select  name="jabatan_id" class="form-control">

                                   <option value="">Silahkan Pilih Kode Jabatan</option>

                                        @foreach($jab as $a)

                                        <option value="{!! $a->id !!}">Kode : {!! $a->kode_jabatan !!} Jabatan : {!! $a->nama_jabatan !!}</option>

                                        @endforeach

                                    </select>

                                @if ($errors->has('jabatan_id'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('jabatan_id') }}</strong>

                                    </span>

                                @endif

    </div>

        <div class="form-group {{ $errors->has('golongan_id') ? ' has-error' : '' }}">

        {!! Form::label('Kode Jabatan', 'Kode Jabatan:') !!}

        <select  name="golongan_id" class="form-control">

                                   <option value="">Silahkan Pilih Kode Jabatan</option>

                                        @foreach($gol as $a)

                                        <option value="{!! $a->id !!}">Kode : {!! $a->kode_golongan !!} Jabatan : {!! $a->nama_golongan !!}</option>

                                        @endforeach

                                    </select>

                                @if ($errors->has('golongan_id'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('golongan_id') }}</strong>

                                    </span>

                                @endif

    </div>

       

    

    <div class="form-group {{ $errors->has('photo') ? ' has-error' : '' }}">

        {!! Form::label('Foto', 'Foto:') !!}

        {!! Form::file('photo',null,['class'=>'form-control']) !!}

        @if ($errors->has('photo'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('photo') }}</strong>

                                    </span>

                                @endif

    </div>

                 <div class="form-group">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary form control']) !!}
                        {!! Form::close() !!}
                        </div>

                </div>

    </div>

    </div>

    </div>

    </div>

    </div>


@stop