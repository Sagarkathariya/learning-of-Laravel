@extends('welcome')
@section('content')
	<form action="{{route('student.store')}}" onsubmit="return myClick()" method="POST" class="m-auto col-4 mt-2">
		@csrf
	<div class="form-floating mb-3">
		<input type="text"  name="name" class="form-control"
			placeholder="Name"> <label for="floatingInput">Name</label>
			</div>
	<div class="form-floating mb-3">
		<input type="email" class="form-control" name="email" 
			placeholder="Email"> <label for="floatingInput">Email
			address</label>
	</div>
    <div class="form-floating mb-3">
		<input type="text" class="form-control" name="address"
			placeholder="Address"> <label for="floatingInput">Address</label>
	</div>

	<div class="form-floating mb-3">
		<input type="text" class="form-control" name="contact"
			placeholder="Address"> <label for="floatingInput">Contact</label>
	</div>
	<div class="form-floating mb-3">
		<input class="datepicker form-control" name="dob"
			placeholder="Address"> <label for="floatingInput">Date of Birth</label>
	</div>

<!-- <p>Have an account?<a class="btn btn-secondary" href="{{ url('student.login') }}">&nbsp;Login</a></p> -->
<input type="submit" name="btnSubmit" class="btn btn-primary"/>

</button>
<script type="text/javascript" src="resources/js/jquery-3.5.1.js"></script>
<script src="resources/js/nepali.datepicker.v3.5.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(".datepicker").nepaliDatePicker();
</script>
	</form>
@endsection
