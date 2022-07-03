
  <header class="p-3 bg-light text-white shadow-sm">
    <div class="container">
      <div
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none justify-content-center px-3">
          <img src="{{asset('storage/asset-images/logo_v2.png')}}" width="40" role="img" alt="">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-secondary {{($title === "Home") ? 'text-dark' : 'text-secondary' }}" style="font-family: 'Roboto', sans-serif; font-size: 16px">Home</a></li>
          <li><a href="/Games" class="nav-link px-2 text-secondary {{($title === "Games") ? 'text-dark' : 'text-secondary' }}" style="font-family: 'Roboto', sans-serif; font-size: 16px">Games</a></li>
          <li><a href="/News" class="nav-link px-2 text-secondary {{($title === "News") ? 'text-dark' : 'text-secondary' }}" style="font-family: 'Roboto', sans-serif; font-size: 16px">News</a></li>
          <li><a href="/Community" class="nav-link px-2  {{($title === "Community") ? 'text-dark' : 'text-secondary' }}" style="font-family: 'Roboto', sans-serif;">Community</a></li>
        </ul>
        <div class="dropdown">
          {{-- {{dd(session()->all())}} --}}
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"
          >
            <img
              src="{{ asset('storage/' . session()->get('profileImage')) }}"
              alt="mdo"
              width="32"
              height="32"
              class="rounded-circle"
            />
          </a>
          <ul
            class="dropdown-menu text-small"
            aria-labelledby="dropdownUser1"
          > 
            <li><a class="dropdown-item" href="/Profile" style="font-family: 'Roboto', sans-serif;">Profile</a></li>
            @if (session()->get('userType') == 'member')
              <li><a class="dropdown-item" href="/CreatorStudio/Overview" style="font-family: 'Roboto', sans-serif;">Creator Studio</a></li>
            @else
              <li><a class="dropdown-item" href="/AppManagement/Overview" style="font-family: 'Roboto', sans-serif;">App Management</a></li>
            @endif
            <li>
              <hr class="dropdown-divider" />
            </li>
            <form action="/Logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item btn btn-secondary" style="font-family: 'Roboto', sans-serif;">
                    Sing Out
                </button>
            </form>
          </ul>
        </div>
      </div>
    </div>
  </header>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->