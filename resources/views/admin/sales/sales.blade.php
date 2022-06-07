@extends('admin.sales.app')

@section('title', 'Sales')

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
            <a href="{{route('sales.index')}}" style="text-decoration: none; color:black;" class="active">
                <i class='material-icons'>shopping_bag</i>
                <span>sales</span>
            </a>
        </li>
        <li>
            <a href="{{route('analytics.index')}}" style="text-decoration: none; color:black;">
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
            Sales
        </div>
    </div>

    <div class="row">
        <div class="col-11" style="margin-top: 50px; margin-left:15px;">
            <!-- ORDERS TABLE -->
            <div class="box">
                <div class="box-header">
                    Customers registerd
                </div>
                <div class="box-body overflow-scroll">
                    <table>
                        <thead>
                            <tr>
                                <th>Tickettypes</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                            @if( $customer->ticket == "2")
                            <tr>
                                <td name='ld'>Laundry Day</td>
                                <td name="created_at">{{$customer->created_at}}</td>
                            </tr>
                            @elseif ($customer->ticket == "1")
                            <tr>
                                <td name='pp'>PukkelPop</td>
                                <td name="created_at">{{$customer->created_at}}</td>
                            </tr>
                            @else
                            <tr>
                                <td name='td'>Tommorowland</td>
                                <td name="created_at">{{$customer->created_at}}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END ORDERS TABLE -->
        </div>
    </div>

    <div class="d-flex">
        <div class="col-3 col-md-6 col-sm-12">
            <div class="box box-hover">
                <div class="counter">
                    <div class="counter-title">
                        total tickets sold
                    </div>
                    <div class="counter-info d-flex justify-content-end">
                        <div class="counter-count" id="ticketTotal">
                            {{ $customers->count() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3 col-md-6 col-sm-12">
            <div class="box box-hover">
                <div class="counter">
                    <div class="counter-title">
                        total profits
                    </div>
                    <div class="counter-info d-flex justify-content-end">
                        <div class="counter-count">
                            € {{ $total }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->
@endsection