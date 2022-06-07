@extends('layouts.app')

@section('content')

<div  class="container">
    <div   class="row justify-content-center">
        <div   class="col-md-8">
            <div style="background-color:	#F0FFF0;"  class="card">
               <h1><strong><div style="color:black; padding-left:300px;" class="card-header">{{ __('Login/Register') }}</div></strong></h1> 

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="color:black;" for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail  ') }}</label>

                            <div class="col-md-6">
                                <input style="width:300px;"  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="color:black;" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input  style="width:300px;"    id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')  
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button  style="width:300px; background-color:	#00008B;" type="submit" class="btn btn-primary">
                                  <strong>  {{ __('Login') }} </strong>
                                </button>
   
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label   class="form-check-label" for="remember">
                                        {{ __('Remenber Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div   class="container">
    <div  class="row justify-content-center">
        <div class="col-md-8">
            <div style="background-color:	#F0FFF0;" class="card">
                <strong><a style="padding-left:320px;  color:black;" href="http://127.0.0.1:8000/register">Create a new account?</a></strong>
                <div class="form-group row mb-0">
                            <div  class="col-md-8 offset-md-4">
                                <button  href="http://127.0.0.1:8000/register"  style="width:300px;  color:#00008B; background-color:#F0FFF0;"   class="btn btn-primary">
                                  <strong>  {{ __('Create Account') }} </strong>
                                </button>
                                 
                            </div>
                        </div>
                      
</div>
</div>
</div>
</div>
@endsection
