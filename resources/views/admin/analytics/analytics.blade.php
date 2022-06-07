@extends('admin.analytics.app')

@section('title', 'Analytics')

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
            <div class="sidebar-user-name" id="name" name="name">{{auth()->user()->name}}</div>
        </div>
        <button class="btn btn-outline">
            <i class='bx bx-log-out bx-flip-horizontal'></i>
        </button>
    </div>

    <!-- SIDEBAR MENU -->
    <ul class="sidebar-menu">
        <li>
            <a href="{{route('admin.index')}}" style="text-decoration: none; color:black;">
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
            <a href="{{route('analytics.index')}}" style="text-decoration: none; color:black;" class="active">
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
            <i class='bx bx-menu-alt-right'></i>
        </div>
        <div class="main-title">
            Analytics
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <!-- ORDERS TABLE -->
            <div class="box">
                <div class="box-header">
                    Customers registerd
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
                            @foreach($customers as $customer)
                            <tr>
                                <td name='id'>{{ $customer->id }}</td>
                                <td name='name'>{{ $customer->voornaam }} {{ $customer->famillienaam }}</td>
                                <td name='email'>{{ $customer->email }}</td>
                                <td name='created_at'>{{ $customer->created_at }}</td>
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
<!-- END MAIN CONTENT -->


@endsection