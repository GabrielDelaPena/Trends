@extends('admin.dashboard.app')

@section('title', 'Dashboard')

@section('content')
<!-- SIDEBAR -->
<div class="sidebar">
    <div class="sidebar-logo">
        <a href="{{route('admin.index')}}">
            <img src="{{URL('photos/admin/Logo.png')}}" alt="t'Festivallogo">
        </a>
        <div style="margin-left: 10px;">
            t'Festival
        </div>
        <div class="sidebar-close" id="sidebar-close">
            <i class='bx bx-left-arrow-alt'></i>
        </div>
    </div>
    <div class="sidebar-user">
        <div class="sidebar-user-info">
            <div class="sidebar-user-name" id="naam" name="name">{{ $user->name }}</div>
        </div>
        <button class="btn btn-outline">
            <i class='bx bx-log-out bx-flip-horizontal'></i>
        </button>
    </div>

    <!-- SIDEBAR MENU -->
    <ul class="sidebar-menu">
        <li>
            <a href="{{route('admin.index')}}" class="active" style="text-decoration: none; color:black;">
                <i class='material-icons'>home</i>
                <span>dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{route('sales.index')}}" style="text-decoration: none; color:black;">
                <i class='material-icons'>shopping_bag</i>
                <span>sales</span>
            </a>
        </li>
        <li>
            <a href="{{ route('analytics.index') }}" style="text-decoration: none; color:black;">
                <i class='material-icons'>analytics</i>
                <span>analytics</span>
            </a>
        </li>
        <div class="space"></div>
        <li>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="btn d-flex justify-content-center align-items-center">
                    <i class='material-icons'>logout</i> 
                    <span>Logout</span>
                </button>
            </form>
        </li>
        <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->

<!-- MAIN CONTENT -->
<div class="main">
    <div class="main-header">
        <div class="mobile-toggle" id="mobile-toggle">
            <i class='material-icons'>menu</i>
        </div>
        <div class="main-title">
            dashboard
        </div>
    </div>
    <div class="main-content">
        <div class="row">
            <div class="col-3 col-md-5 col-sm-6">
                <div class="box box-hover">
                    <div class="counter">
                        <div class="counter-title">
                            Add an admin
                        </div>
                        <div class="counter-info">
                            <i class='material-icons' style="text-decoration: none; color:black;">account_circle</i>
                            <button type="button" class="btn btn-dark">
                                <a class="nav-link" id="sign_up" href="{{ route('newAdmin.index') }}" style="text-decoration: none; color:white;">Next
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 col-md-7 col-sm-12">
                <div class="box box-hover">
                    <div class="counter">
                        <div class="counter-title">
                            Customers registerd
                        </div>
                        <div class="counter-info">
                            <i class='material-icons' style="text-decoration: none; color:black;">account_circle</i>
                            <button type="button" class="btn btn-dark">
                                <a class="nav-link" id="sign_up" href="{{route('analytics.index')}}" style="text-decoration: none; color:white;">See
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 col-md-6 col-sm-12">
                <div class="box box-hover">
                    <!-- COUNTER -->
                    <div class="counter">
                        <div class="counter-title">
                            total profits
                        </div>
                        <div class="counter-info">
                            <div class="counter-count">
                            € {{ $total }}
                            </div>
                            <button type="button" class="btn btn-dark">
                                <a class="nav-link" id="sign_up" href="#" style="text-decoration: none; color:white;">See
                                </a>
                            </button>
                        </div>
                    </div>
                    <!-- END COUNTER -->
                </div>
            </div>
            <div class="col-3 col-md-6 col-sm-12">
                <div class="box box-hover">
                    <!-- COUNTER -->
                    <div class="counter">
                        <div class="counter-title">
                            total tickets sold
                        </div>
                        <div class="counter-info">
                            <div class="counter-count" id="ticketTotal">
                            {{ $customers->count() }}
                            </div>
                            <button type="button" class="btn btn-dark">
                                <a class="nav-link" id="sign_up" href="{{route('sales.index')}}" style="text-decoration: none; color:white;">See
                                </a>
                            </button>
                        </div>
                    </div>
                    <!-- END COUNTER -->
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <!-- ORDERS TABLE -->
                <div class="box">
                    <div class="box-header">
                        Admins registerd
                    </div>
                    <div class="box-body overflow-scroll">
                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td name='id'>{{$user->id}}</td>
                                    <td name='name'>{{$user->name}}</td>
                                    <td name='email'>{{$user->email}}</td>
                                    <td name='created_at'>{{$user->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END ORDERS TABLE -->
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->
@endsection