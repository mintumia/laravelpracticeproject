<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Page</title>
    <link rel="stylesheet" href="{{asset('plugins')}}/bootstrap5/bootstrap.min.css">
</head>
<body class="container-fluid">

<h2>Hellow ss</h2>
<form action="{{url('testcomp')}}" method="post">
    @csrf
<div class="container">
    <x-MintuTestComp type="text" name="name" id="name" class="form-control" label="Full Name : "/>
    <x-MintuTestComp type="email" name="email" id="email" class="form-control" label="Email Address : "/>
    <x-MintuTestComp type="date" name="bdate" id="bdate" class="form-control" label="Date of Birth : "/>
    <x-MintuTestComp type="submit" name="submit" id="submit" class="w-100 btn-success rounded text-center" label=""/>

</div>
</form>

<script src="{{asset('plugins')}}/bootstrap5/bootstrap.min.js"></script>
</body>
</html>
