<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">COBACOBI RESTO</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RB</a>
        </div>
        <ul class="sidebar-menu">
            <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                <a href="{{ url('dashboard-general-dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class='{{ Request::is('categories') ? 'active' : '' }}'>
                <a href="{{ route('categories.index') }}" class="nav-link"><i class="fa-solid fa-table-list"></i><span>Categories</span></a>
            </li>
            <li class='{{ Request::is('products') ? 'active' : '' }}'>
                <a href="{{ route('products.index') }}" class="nav-link"><i class="fa-solid fa-table-columns"></i><span>Products</span></a>
            </li>
            <li class='{{ Request::is('users') ? 'active' : '' }}'>
                <a href="{{ route('users.index') }}" class="nav-link"><i class="fa-solid fa-user-group"></i></i><span>Users</span></a>
            </li>
        </ul>
</div>
