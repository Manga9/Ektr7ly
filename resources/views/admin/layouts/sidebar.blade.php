<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset ('../admin/images/male-avatar.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
        </div>
      </div>

      <ul class="sidebar-menu">
        <li>
            <a href="{{route('dashboard')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{route('admins.index')}}">
                <i class="fa fa-cogs"></i> <span>Admins</span>
            </a>
        </li>
        <li>
            <a href="{{route('members.index')}}">
                <i class="fa fa-users"></i> <span>Members</span>
            </a>
        </li>
        <li>
            <a href="{{route('categories.index')}}">
                <i class="fa fa-tags"></i> <span>Categories</span>
            </a>
        </li>
        <li>
            <a href="{{route('movies.index')}}">
                <i class="fa fa-users"></i> <span>Movies</span>
            </a>
        </li>
      </ul>
    </section>
</aside>

