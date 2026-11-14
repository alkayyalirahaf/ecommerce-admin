<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Commerce Admin | @yield('title')</title>
     @vite(['resources/css/app.css'])
</head>


<body>


<div class="dashboard-layout">

    <aside class="sidebar">
        <nav>
        <a href="{{ route('dashboard')}}">Dashboard</a> 
        <a href="{{ route('users') }}">Users</a> 
        <a href="{{ route('sellers') }}">Sellers</a> 
        <a href="{{ route('categories') }}">Categories</a> 
        <a href="{{ route('products') }}">Products</a>
        <a href="{{ route('orders') }}">Orders</a> 
        <a href="{{ route('orderitems') }}">Order Items</a> 
        </nav>
  
    </aside>


    <main class="main-content">
        @yield('content') <!-- Child views will be injected here -->
    </main>

</div>



</body>
</html>