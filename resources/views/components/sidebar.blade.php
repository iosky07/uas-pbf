
    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="#">E-ticle</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="nav-item dropdown">
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
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route('index-suggestion') }}" class="nav-link"><i class="fas fa-eye-dropper"></i> <span>Kritik dan Saran</span></a>
                </li>

            </ul>
        </aside>
    </div>
