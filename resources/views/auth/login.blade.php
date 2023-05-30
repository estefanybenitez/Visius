@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body"> --}}
                    <body class="p-3 m-0 border-0 bd-example">
                        <section class="h-100 gradient-form fondo" style="background-color: black;">
                        <div class="container py-5 h-100">
                          <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-xl-10">
                              <div class="card rounded-3 text-black">
                                <div class="row g-0">
                                  <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">
                                      <div class="text-center">
                                        <h4 class="mt-1 mb-5 pb-1">LOG IN</h4>
                                      </div>


                    {{-- inicio form --}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-outline mb-4">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3text-center pt-1 mb-5 pb-">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="ctext-center pt-1 mb-5 pb-1">
                                <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
{{-- bostrap --}}

                      
            

                    </form>
                    {{-- fin form --}}

                {{-- </div>
            </div>
        </div>
    </div>
</div> --}}

</div>
</div>
<div class="col-lg-6 d-flex align-items-center gradient-custom-2">
  <div class="px-3 py-4 p-md-5 mx-md-4">
    {{-- <img src="../imgs/logo3.PNG" class="logo">  --}}
    <img src="...../imgs/logo3.PNG" class="logo"> 

  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</body>


@endsection
