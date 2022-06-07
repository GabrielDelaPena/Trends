@extends('admin.dashboard.app')

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
            <!-- Nog JS nodig-->
            <div class="sidebar-user-name" id="naam">Hier komt de naam </div>
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
            <i class='bx bx-menu-alt-right'></i>
        </div>
        <div class="main-title">
            dashboard
        </div>
    </div>
    <div class="d-flex justify-content-start">
        <div class="h-50 d-inline-block w-50 p-3" id="right_login">
            <h3 class="text-center mt-3">Add an admin</h3>
            <form action="{{ route('newAdmin.store') }}" method="post">
                @csrf
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputName1">Name</label>
                    <input name="name" type="text" class="form-control @error('name')border border-danger @enderror" id="exampleInputPassword1" placeholder="Name" value="{{old('name')}}">

                    @error('name')
                    <div class="alert-danger" style="background: #FFFFFF;">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control @error('name')border border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" value="{{old('email')}}">

                    @error('email')
                    <div class="alert-danger" style="background: #FFFFFF;">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control @error('name')border border-danger @enderror" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputPassword1">Password Confirmation</label>
                    <input name="password_confirmation" type="password" class="form-control @error('name')border border-danger @enderror" id="exampleInputPassword1" placeholder="Repeat your password">

                    @error('password')
                    <div class="alert-danger" style="background: #FFFFFF;">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark" id="space">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->
@endsection