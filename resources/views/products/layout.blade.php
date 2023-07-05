<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Dashboard</title>
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
<ul class="navbar-nav">
    <li class="nav-item">
    <a href="#" class="nav-link">home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link">contact</a>
    </li>
</ul>
</nav>

<ul class="nav flex-column row">
    <li class="nav-item ">
        <a class="nav-link active" aria-current="page" href="{{route('products.index')}}">Products</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Admins</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Users</a>
    </li>
</ul>




<div class="container">
    @yield('content')
</div>



</body>
</html>
