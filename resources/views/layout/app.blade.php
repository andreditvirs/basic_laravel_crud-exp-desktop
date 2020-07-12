<!DOCTYPE html>
<html lang="en">
<head>
<title>{{config('app.name', 'LSAPP')}}</title>
<!-- composer require laravelcollective/html (run command di composer agar bisa menggunakan class HTML di laravel 7)-->
{{HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css')}}
</head>
<body>
    @yield('content')
</body>
</html>