<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.dashboard') ? 'collapsed' : '' }}" href="{{ route('admin.dashboard') }}">
                <span>Dashboard</span>
            </a>
        </li>



        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.admins.*') ? 'collapsed' : '' }}" href="{{ route('admin.admins.index') }}">
                <span>Admis</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.users.*') ? 'collapsed' : '' }}" href="{{ route('admin.users.index') }}">
                <span>Users</span>
            </a>
        </li>



        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.products.*') ? 'collapsed' : '' }}" href="{{ route('admin.products.index') }}">
                <span>Products</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.brands.*') ? 'collapsed' : '' }}" href="{{ route('admin.brands.index') }}">
                <span>Brands</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ !Route::is('admin.categories.*') ? 'collapsed' : '' }}" href="{{ route('admin.categories.index') }}">
                <span>Categories</span>
            </a>
        </li>

    </ul>

</aside>
