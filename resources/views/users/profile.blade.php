@extends('layouts.app')

@section('content')

<h1>id: {{ $user->id }} のプロフィール編集</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
            
                <div class="form-group">
                    {!! Form::label('name', '名前:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('birth_ymd', '生年月日:') !!}
                    {!! Form::text('birth_ymd', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('profile', 'プロフィール:') !!}
                    {!! Form::text('profile', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection