@extends('layouts.admin.master')

@section('text')
<form action="#" class="signin-form" method="POST" action="{{ route('login') }}">
                     @csrf
								<div class="form-group mb-3">
									<label class="label" for="username">Username</label>
									<input type="text" class="form-control" name="username" placeholder="Username" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
										In</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="{{ route('password.request') }}">Forgot Password</a>
									</div>
								</div>
							</form>
							<p class="text-center">Not a member? <a data-toggle="tab" href="register.blade.php">Sign Up</a></p>
@endsection
