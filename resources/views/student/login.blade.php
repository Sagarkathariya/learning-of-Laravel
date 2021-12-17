@extends('welcome')
@section('content')
<nav class="mb-3">
@include('header')
</nav>
<form action="" onsubmit="myClick()" method="POST" class="m-auto col-4 mt-2">
		
	<div class="form-floating mb-3">
		<input type="email"  name="name" class="form-control"
			placeholder="Email / username"> <label for="floatingInput">Username</label>
			</div>
	<div class="form-floating mb-3">
		<input type="password" class="form-control" name="email" 
			placeholder="Email"> <label for="floatingInput">Password</label>
	</div>
   

<p>Have an account?<a class="btn btn-secondary" href="">&nbsp;Login</a></p>
<input type="submit" name="btnSubmit" class="btn btn-primary"/>


<footer style="margin-top: 16.64%;">
@include('footer')
</footer>
@endsection