
    <header>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><img src="{{ asset('frontend/assets/images/a (29).png') }}" class="img-fluid" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link btn" href="#">Explore</a>
                      </li>
                      <li class="nav-item">
                        <form class="d-flex">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>

                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{ route('login') }}" tabindex="-1" aria-disabled="true">Log In</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link btn btn-business " href="{{ route('register') }}" tabindex="-1" aria-disabled="true">Join Free</a>
                      </li>
                    </ul>

                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>
