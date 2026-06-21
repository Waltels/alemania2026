<nav class="navbar">
  <div class="navbar-content">

    <div class="logo-mini-wrapper">
      <img src="{{ url('build/images/logo-mini-light.png') }}" class="logo-mini logo-mini-light" alt="logo">
      <img src="{{ url('build/images/logo-mini-dark.png') }}" class="logo-mini logo-mini-dark" alt="logo">
    </div>


    <ul class="navbar-nav">
 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-lucide="bell"></i>
          <div class="indicator">
            <div class="circle"></div>
          </div>
        </a>
        <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
          <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
            <p>6 New Notifications</p>
            <a href="javascript:;" class="text-secondary">Clear all</a>
          </div>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="w-30px h-30px ms-1 rounded-circle" src="{{ url('https://placehold.co/30x30') }}" alt="profile">
        </a>
        <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
          <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
            <div class="mb-3">
              <img class="w-80px h-80px rounded-circle" src="{{ url('https://placehold.co/80x80') }}" alt="">
            </div>
            @auth
            <div class="text-center">
              <p class="fs-16px fw-bolder">{{auth()->user()->name}}</p>
              <p class="fs-12px text-secondary">{{auth()->user()->email}}</p>
            </div>
            @else
            <div class="text-center">
              <p class="fs-16px fw-bolder"></p>
              <p class="fs-12px text-secondary"></p>
            </div>
            @endif
          </div>
          <ul class="list-unstyled p-1">
            <li>
              <a href="{{ url('/general/profile') }}" class="dropdown-item py-2 text-body ms-0">
                <i class="me-2 icon-md" data-lucide="user"></i>
                <span>Profile</span>
              </a>
            </li>
            <li>
              <a href="javascript:;" class="dropdown-item py-2 text-body ms-0">
                <i class="me-2 icon-md" data-lucide="edit"></i>
                <span>Edit Profile</span>
              </a>
            </li>
            <li>
              <a href="javascript:;" class="dropdown-item py-2 text-body ms-0">
                <i class="me-2 icon-md" data-lucide="repeat"></i>
                <span>Switch User</span>
              </a>
            </li>
            <li>
              <form method="POST" action="{{route('logout')}}" class="inline">
                @csrf
                  <button type="submit" class="dropdown-item"><i class="me-2 icon-md" data-lucide="log-out"></i> Salir</button>
              </form>
            </li>
          </ul>
        </div>
      </li>
    </ul>

    <a href="#" class="sidebar-toggler">
      <i data-lucide="menu"></i>
    </a>

  </div>
</nav>