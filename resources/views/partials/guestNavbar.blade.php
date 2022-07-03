  <header class="p-3 bg-light text-white shadow-sm">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none px-3">
          <img src="{{asset('storage/asset-images/logo_v2.png')}}" width="40" role="img" alt="">
        </a>

        <ul class="nav col col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-secondary {{($title === "Home") ? 'text-dark' : 'text-secondary' }}" style="font-family: 'Roboto', sans-serif; font-size: 16px">Home</a></li>
          <li><a href="/Games" class="nav-link px-2 text-secondary {{($title === "Games") ? 'text-dark' : 'text-secondary' }}" style="font-family: 'Roboto', sans-serif; font-size: 16px">Games</a></li>
          <li><a href="/News" class="nav-link px-2 text-secondary {{($title === "News") ? 'text-dark' : 'text-secondary' }}" style="font-family: 'Roboto', sans-serif; font-size: 16px">News</a></li>
          <li>
            <a href="/Community" class="nav-link px-2  {{($title === "Community") ? 'text-dark' : 'text-secondary' }}" style="font-family: 'Roboto', sans-serif;">Community</a>
          </li>
          
        </ul>
        <a href="/Login" class="nav-link px-2 text-secondary {{($title === "Login") ? 'text-dark' : 'text-secondary' }}" style="font-family: 'Roboto', sans-serif;">Log in</a>
      </div>
    </div>
  </header>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
