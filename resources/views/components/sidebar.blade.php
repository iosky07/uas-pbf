
    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="#">Stisla</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li>
                    <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                </li>
                <li class="menu-header">Starter</li>
                <li class="nav-item dropdown">
<<<<<<< Updated upstream
                    <a href="/" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard User</span></a>
                </li>
                <li class="menu-header">Manajemen</li>
                <li class="nav-item dropdown">
                    <a href="{{ route('manage-users.index') }}" class="nav-link"><i class="fas fa-users"></i><span>User</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route('articles.index') }}" class="nav-link"><i class="fas fa-file"></i> <span>Artikel</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route('comments.index') }}" class="nav-link"><i class="fas fa-comments"></i> <span>Komentar</span></a>
=======
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>User</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{route('articles.index')}}">Data Artikel</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Artikel</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{route('articles.index')}}">Data Artikel</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Kritik & Saran</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{route('articles.index')}}">Data Artikel</a></li>
                    </ul>
>>>>>>> Stashed changes
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route('suggestions.index') }}" class="nav-link"><i class="fas fa-eye-dropper"></i> <span>Kritik dan Saran</span></a>
                </li>

            </ul>
        </aside>
    </div>
