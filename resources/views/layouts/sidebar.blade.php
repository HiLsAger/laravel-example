<div class=" position-relative col-4 flex-grow-1" style="max-width: 280px">
<div class="d-flex flex-column flex-shrink-0 p-3 bg-white w-100 position-sticky top-0 left-0" style="height: 100vh">
    <a href="/" class="d-flex align-items-center me-md-auto link-dark text-decoration-none">
      <span class="fs-5">{{ __('messages.sidebar') }}</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="{{ url('/home') }}" class="nav-link {{ request()->is('home') ? 'active' : 'link-dark' }}" aria-current="page">
            <i class="bi bi-house-door"></i>
            {{ __('menu.home') }}
        </a>
      </li>
      <li>
        <a href="{{ url('/group') }}" class="nav-link {{ request()->is('group') ? 'active' : 'link-dark' }}">
            <i class="bi bi-people"></i>
            {{ __('menu.group')}}
        </a>
      </li>
    </ul>
    <hr>
    <div class="d-flex align-items-center justify-content-between">
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
          {{ Auth::user()->name }}
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser">
          <li>
              <a class="dropdown-item" href="{{ route('profile', ['id' => auth()->user()->id]) }}">
                  {{ __('messages.my_profile') }}
              </a>
          </li>
          <li><hr class="dropdown-divider"></li>
          <li>            
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  {{ __('messages.logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </li>
        </ul>
      </div>
      <div class="dropdown">
        <a href="#" class="btn border-0 p-0 position-relative" id="dropdownNotification" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-bell"></i>
          <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
            <span class="visually-hidden"></span>
          </span>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownNotification">
          <notification-component/>
        </ul>
      </div>
    </div>
  </div>
</div>