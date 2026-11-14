
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="dashboard-header">
        <h1>Dashboard</h1>
        <p>Overview of your e-commerce store</p>
    </div>

    <!-- Summary Cards -->
    <section class="summary-cards">

        <div class="summary-card">
            <h3>Users</h3>
            <p>{{ $usersCount ?? 0 }}</p>
        </div>

        <div class="summary-card">
            <h3>Sellers</h3>
            <p>{{ $sellersCount ?? 0 }}</p>
        </div>

        <div class="summary-card">
            <h3>Categories</h3>
            <p>{{ $categoriesCount ?? 0 }}</p>
        </div>

        <div class="summary-card">
            <h3>Products</h3>
            <p>{{ $productsCount ?? 0 }}</p>
        </div>

        <div class="summary-card">
            <h3>Orders</h3>
            <p>{{ $ordersCount ?? 0 }}</p>
        </div>

        <div class="summary-card">
            <h3>Order Items</h3>
            <p>{{ $orderItemsCount ?? 0 }}</p>
        </div>

    </section>

    <!-- Total Revenue -->
    <section class="revenue-section">
        <h2>Total Revenue</h2>
        <p>{{ $totalRevenue ?? 0 }} JD</p>
    </section>

    <!-- Recent Orders -->
    <section class="recent-orders">
        <h2>Recent Orders</h2>

        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>
                @forelse($recentOrders ?? [] as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->total }} JD</td>
                    </tr>
                  @empty
                    <tr>
                        <td colspan="4">No recent orders found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>

@endsection
