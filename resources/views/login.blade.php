@extends('application')
@section('title', 'Login')

@section('content')
    <div class="account-top-bar">
        <div class="container">
            <div class="logo">
                <a href="javascript:void(0)" title=""><i class="fa fa-bullseye"></i> CRM</a>
            </div>
        </div>
    </div>

    <div id="login" class="container">
        <br />
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Login into CRM</h1>
        {!! Form::open(array('url' => 'login')) !!}
            <div class="row">
                <div class="feild col-md-12">
                    <input type="text" name="name" placeholder="Username" />
                </div>
                <div class="feild col-md-12">
                    <input type="password" name="password" placeholder="Password" />
                </div>
                <div class="feild col-md-12">
                    {{ Form::submit('Submit!') }}
                </div>
            </div>
        {!! Form::close() !!}
    </div>

@endsection