<!DOCTYPE html>
<html lang="en">
<head>
<title>Blade Template</title>
<!-- composer require laravelcollective/html (run command di composer agar bisa menggunakan class HTML di laravel 7)-->
{{HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css')}}
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Blade Template Laravel</h1>
        <p>@yield('content')</p>
        <p><a href="#" class="btn btn-primary btn-lg">
            Learn More &raquo;</a>
        </p>
    </div>
</div>
</body>
</html>