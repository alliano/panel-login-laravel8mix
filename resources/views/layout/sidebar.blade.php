<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('assets/img/sidebar-2.jpg') }}">
      <div class="logo"><a href="" class="simple-text logo-normal" onclick="event.preventDefault();">
         <h3>AllianoAdmin</h3>
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/home">
              <!-- <i class="material-icons">dashboard</i> -->
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/Myapi">
              <!-- <i class="material-icons">person</i> -->
              <p>My API</p>
            </a>
          <li class="nav-item ">
            <a class="nav-link" href="/About">
              <!-- <i class="material-icons">notifications</i> -->
              <p>About</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/laravel">
              <!-- <i class="material-icons">notifications</i> -->
              <p>laravel</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" >
              <!-- <i class="material-icons">notifications</i>  -->
              <p>Logout</p>
            </a>
            <form action="{{ route('logout') }}" id="logout-form" name="logout-form" method="post">@csrf</form>
          </li>
        </ul>
      </div>
    </div>