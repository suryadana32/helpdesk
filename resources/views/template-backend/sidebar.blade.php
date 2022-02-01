<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">ADMIN PANEL</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">ADMIN</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active">
              <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-layer-group"></i><span>Category</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{  route('category.index')  }}">List Category</a></li>
                <li><a class="nav-link" href="index.html">Deleted Category</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-sticky-note"></i><span>Posts</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{  route('posts.index')  }}">List Posts</a></li>
                <li><a class="nav-link" href="{{  route('posts.deleted')  }}">Deleted Posts</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-tag"></i><span>Tags</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{  route('tags.index')  }}">List Tags</a></li>
                <li><a class="nav-link" href="index.html">Deleted Tags</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-cogs"></i><span>Settings</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{  route('tags.index')  }}">User Settings</a></li>
                <li><a class="nav-link" href="index.html">Date Settings</a></li>
                <li><a class="nav-link" href="index.html">Slugs</a></li>
                <li><a class="nav-link" href="index.html">Admin Settings</a></li>
                <li><a class="nav-link" href="index.html">Create User</a></li>
              </ul>
            </li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>        </aside>
      </div>