<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container p-0">

      <a class="navbar-brand fw-bold" href="/">Arjun</a>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

              <ul class="navbar-nav">
                @guest
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#about">About Me</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#projects">Projects</a>
                    </li>
                  </ul>
                </div>
                @else
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Selamat Datang, <strong>{{ Auth::user()->name }}</strong>
                  <img class="img-profile rounded-circle border" src="img/pondo.png" width="30">
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                    <li>
                      <a class="dropdown-item" href="/dashboard"><i class="fas fa-fw fa-home mr-2 text-gray-400"></i>Dashboard</a>
                    </li>

                    <div class="dropdown-divider"></div>

                    <li>
                      <a class="dropdown-item" href="/myProfile"><i class="fas fa-user fa-fw mr-2 text-gray-400"></i>Profile</a>
                    </li>

                    <div class="dropdown-divider"></div>

                    <li>
                      <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-sign-out-alt fa-fw mr-2 text-gray-400"></i>Logout
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- Logout Modal-->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Logout</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Anda Yakin Mau Keluar?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cencel</button>
                        <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
                      </div>
                    </div>
                  </div>
                </div>
                @endguest
              </ul>
            </div>

    </div>
  </nav>
