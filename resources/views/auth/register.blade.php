@extends('layouts.app')
@section('title', 'Register')
@section('content')
<section id="welcome">
    <div class="welcome-text">
        <div class="container">
            <h1>Sign up for your free trial !</h1>
        </div>
    </div>
    <div class="form-content">
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left registration-form">
                <form class="form-horizontal" method="POST" action="{{ route('registration') }}">
                {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('userType') ? ' has-error' : '' }} form-fields">
                        <label for="userType" class="col-md-4 control-label">User Type</label>
                        <div class="col-md-12">
                            <select class="form-control" name="userType">
                                <option>Select Option</option>
                                <option value="ST">Student</option>
                                <option value="IT">Instructor</option>
                            </select>

                            @if ($errors->has('userType'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('userType') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }} form-fields">
                        <label for="firstName" class="col-md-4 control-label">First Name</label>                
                        <div class="col-md-12">                    
                             <input id="firstName" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}" required autofocus>
                            @if ($errors->has('firstName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('firstName') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }} form-fields">
                        <label for="lastName" class="col-md-4 control-label">Last Name</label>                
                        <div class="col-md-12">                    
                             <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" required autofocus>
                            @if ($errors->has('lastName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastName') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-fields">
                        <label for="email" class="col-md-4 control-label">Email</label>                
                        <div class="col-md-12">                    
                             <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-fields">
                        <label for="password" class="col-md-4 control-label">Password</label>                
                        <div class="col-md-12">                    
                             <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required autofocus>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group form-fields">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }} form-fields">
                        <label for="language" class="col-md-4 control-label">Language</label>
                        <div class="col-md-12">
                            <select class="form-control" name="language">
                                @foreach($lang as $lan)
                                    @if($lan->language == 'English')
                                    <option value="{{ $lan->id }}" selected="selected">{{ $lan->language }}</option>
                                    @else
                                    <option value="{{ $lan->id }}">{{ $lan->language }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has('language'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('language') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group form-fields">
                        <div class="col-md-12 col-md-offset-4">
                            <input type="submit" value="START LEARNING!">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>  
</div>
</section>

@endsection
