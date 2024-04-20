<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
      
        <div class="info-container ">
            <div class="name " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                {{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }} </div>
            <div class=" btn-group user-helper-dropdown"> <i class="material-icons" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true" role="button"> keyboard_arrow_down </i>
                <ul class="dropdown-menu pull-right">

                    <li><a href="{{ route('logout') }}"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            @if (Auth::user()->is_admin === 1)
                <li class="header">MAIN NAVIGATION</li>
                <li><a href="{{ route('admin.dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span> </a>
                </li>
                <li class="open"><a href="{{ route('admin.mobil') }}"><i class="zmdi zmdi-blogger"></i><span>Data
                            Mobil</span>
                    </a></li>
                <li><a href="{{ route('admin.transaksi') }}"><i class="zmdi zmdi-plus-circle"></i><span>Transaksi</span>
                    </a></li>
                <li><a href="{{ route('customer') }}"><i class="zmdi zmdi-sort-amount-desc"></i><span>Customer</span>
                    </a>
                </li>
            @else
                <li class="header">MAIN NAVIGATION</li>
                <li><a href="{{ route('admin.dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span> </a>
                </li>
                <li class="open"><a href="{{ route('user.sewa') }}"><i class="zmdi zmdi-blogger"></i><span>Sewa
                            Mobil</span>
                    </a></li>
                <li class="open"><a href="{{ route('user.kembali') }}"><i
                            class="zmdi zmdi-blogger"></i><span>Kembalikan
                            Mobil</span>
                    </a></li>
            @endif
            {{-- <li><a href="blog-grid.html"><i class="zmdi zmdi-grid"></i><span>Blog Grid</span> </a></li>
            <li><a href="blog-details.html"><i class="zmdi zmdi-label-alt"></i><span>Blog Single</span> </a></li> --}}
        </ul>
    </div>
    <!-- #Menu -->
</aside>
       