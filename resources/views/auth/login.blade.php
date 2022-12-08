@extends('layouts.auth')

@section('content')
<style>
    .back{
       background-color: linear-gradient(to right, rgba(63, 30, 30, 0), rgb(92, 59, 12));
       width: 100%px;
    }
   </style>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
            <h1 class="text-center" style="color: white">Java Facts, Quiz And Trivia</h1>
            
            <br />
            <div class="panel panel-default back">
                
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong></strong> IVALID LOGIN INFO!
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <label>
                                    <input type="checkbox"
                                           name="remember">Remember me
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary">
                                    Login
                                </button>
                                <a href="{{ route('auth.register') }}"
                                        class="btn btn-default">
                                    Register
                                </a>
                                <br>
                                 <br>
                                <br>
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
         </div>
    </div>
@endsection
