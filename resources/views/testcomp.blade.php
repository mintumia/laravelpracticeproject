<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Page</title>
    {{--<link rel="stylesheet" href="{{asset('plugins')}}/bootstrap5/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{asset('plugins')}}/tailwindcss/main.css">
</head>
<body class="container-fluid">

<h2>Hellow ss</h2>
<form action="{{url('testcomp')}}" method="post">
    @csrf
<div class="container flex-wrap items-center justify-center w-full bg-red-50 text-left p-3 space-x-3">
    <x-MintuTestComp type="text" name="name" id="name" class="w-full space-x-3  border border-2 border-purple-600 rounded-lg shadow shadow-md shadow-gray-500" label="Full Name : "/>

    <x-MintuTestComp type="email" name="email" id="email" class="w-full space-x-3  border border-2 border-purple-600 rounded-lg shadow shadow-md shadow-gray-500" label="Email Address : "/>
    <x-MintuTestComp type="date" name="bdate" id="bdate" class="w-full space-x-3  border border-2 border-purple-600 rounded-lg shadow shadow-md shadow-gray-500" label="Date of Birth : "/>
    <x-MintuTestComp type="submit" name="submit" id="submit" class="w-full mt-4 p-2 space-x-3 bg-purple-700 text-gray-100 border border-2 border-purple-600 rounded-lg shadow shadow-md shadow-gray-500" label=""/>

</div>
</form>

{{--<script src="{{asset('plugins')}}/bootstrap5/bootstrap.min.js"></script>--}}
</body>
</html>
