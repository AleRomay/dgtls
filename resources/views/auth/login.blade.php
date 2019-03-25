@extends('layouts.auth')
@section('content')
<!-- CONTENT
	================================================== -->
   
                    
<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-md-5 col-xl-4 my-5">
			<!-- Heading -->
			<h1 class="display-4 text-center mb-3">
				{{ __('Login') }} en {{ config('app.name', 'Laravel') }}
			</h1>
			<!-- Subheading -->
			<p class="text-muted text-center mb-5">
				Free access to our dashboard.
			</p>
			<!-- Form -->
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<!-- Email address -->
				<div class="form-group">
					<div class="row">
						<div class="col">
							<!-- Label -->
							<label>{{ __('E-Mail Address') }}</label>
						</div>
						<div class="col-auto">
							<!-- Help text -->
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
								<label class="form-check-label form-text small text-muted" for="remember">
								{{ __('Remember Me') }}
								</label>
							</div>
						</div>
					</div>
					<!-- Input -->
					<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
				 	@if ($errors->has('email'))
					<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
				</div>
				<!-- Password -->
				<div class="form-group">
					<div class="row">
						<div class="col">
							<!-- Label -->
							<label>{{ __('Password') }}</label>
						</div>
						<div class="col-auto">
							<!-- Help text -->
							@if (Route::has('password.request'))
							<a href="{{ route('password.request') }}" class="form-text small text-muted">
							{{ __('Forgot Your Password?') }}
							</a>
							@endif
						</div>
					</div>
					<!-- / .row -->
					<!-- Input group -->
					<div class="input-group input-group-merge">
						<!-- Input -->
						<input id="password" type="password" class="form-control  form-control-appended{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
						@if ($errors->has('password'))
						<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
						<!-- Icon -->
						<div class="input-group-append">
							<span class="input-group-text">
							<i class="fe fe-eye"></i>
							</span>
						</div>
					</div>
				</div>
				<!-- Submit -->
				<button  type="submit" class="btn btn-lg btn-block btn-primary mb-3">
				{{ __('Login') }}
				</button>
				<!-- Link -->
				<div class="text-center">
					<small class="text-muted text-center">
					{{ __('Don\'t have an account yet?') }} <a href="{{ route('register') }}">{{ __('Register') }}</a>.
					</small>
				</div>
			</form>
		</div>
	</div>
	<!-- / .row -->
</div>
<!-- / .container -->
<!--
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">{{ __('Login') }}</div>
	
	                <div class="card-body">
	                    <form method="POST" action="{{ route('login') }}">
	                        @csrf
	
	                        <div class="form-group row">
	                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
	
	                            <div class="col-md-6">
	                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
	
	                                @if ($errors->has('email'))
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>
	
	                        <div class="form-group row">
	                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
	
	                            <div class="col-md-6">
	                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
	
	                                @if ($errors->has('password'))
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>
	
	                        <div class="form-group row">
	                            <div class="col-md-6 offset-md-4">
	                                <div class="form-check">
	                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
	
	                                    <label class="form-check-label" for="remember">
	                                        {{ __('Remember Me') }}
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	
	                        <div class="form-group row mb-0">
	                            <div class="col-md-8 offset-md-4">
	                                <button type="submit" class="btn btn-primary">
	                                    {{ __('Login') }}
	                                </button>
	
	                                @if (Route::has('password.request'))
	                                    <a class="btn btn-link" href="{{ route('password.request') }}">
	                                        {{ __('Forgot Your Password?') }}
	                                    </a>
	                                @endif
	                            </div>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>-->
@endsection