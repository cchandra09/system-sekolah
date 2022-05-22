<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">GAKKOU</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">GK</a>
      </div>
      <ul class="sidebar-menu">
        @if (Auth::user()->role == 'Admin' || Auth::user()->role == 'Operator')
          <li class="menu-header">Dashboard</li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Master Data</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Master Data</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('teacher.index')}}">Data Guru</a></li>
            </ul>
          </li>
        @endif
      </ul>
    </aside>
</div>