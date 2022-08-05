@extends('layouts.admin.register')

@section('text')
<form action="#" class="signin-form" method="POST" action="{{ route('register') }}">
                     @csrf
                     <div class="form-group mb-3">
									<label class="label" for="username">Name</label>
									<input type="text" class="form-control" name="name" placeholder="name" required>
								</div>

								<div class="form-group mb-3">
									<label class="label" for="username">Username</label>
									<input type="text" class="form-control" name="username" placeholder="Username" required>
								</div>

                                <div class="form-group mb-3">
									<label class="label" for="username">Address</label>
									<input type="text" class="form-control" name="address" placeholder="address" required>
								</div>

                                <div class="form-group mb-3">
									<label class="label" for="username">Email</label>
									<input type="email" class="form-control" name="email" placeholder="email" required>
								</div>

                                <div class="form-group mb-3">
									<label class="label" for="username">Phone</label>
									<input type="text" class="form-control" name="phone" placeholder="phone" required>
								</div>

								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>

                                <div class="form-group mb-3">
									<label class="label" for="password">Confirm Password</label>
									<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
								</div>

								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Register</button>
								</div>
							</form>
@endsection
