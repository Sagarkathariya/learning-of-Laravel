<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
	crossorigin="anonymous">

	<!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdn.tutorialjinni.com/mdbootstrap/4.20.0/css/mdb.css" />
<title>Colleg Information System</title>
</head>
<body>
<nav class="">
@include('header')
</nav>


<div class=" row" style="width:100%;">

<div class="d-flex flex-column flex-shrink-0 text-white bg-dark col-2 ">
    @include('login')
  </div>


  <div class="float-left col-9 ml-2">
@yield('content')
</div>

</div>


<footer style="margin-top: 16.64%;">
@include('footer')
</footer>


</body>
</html>
