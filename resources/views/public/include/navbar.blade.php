<section id="header">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100 pt-2 pb-2">
    <div class="container-xl">
      <!-- Logo -->
      <img src="{{ asset('assest1/image/icons-svg/logo.svg') }}" class="brand-img me-2" alt="Easy Plates Logo" style="width: 90px; height: 90px;" />

      
      <!-- Mobile Toggle Button -->
      <button class="navbar-toggler offcanvas-nav-btn ms-auto me-3" type="button">
        <img src="assest1/image/icons-svg/list.svg" width="40" height="40" alt="Open TemplateOnweb website menu"/>
      </button>
      
      <!-- Offcanvas Menu -->
      <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
        <div class="offcanvas-header shadow">
          <a class="d-flex logo" href="home">
            <img src="assest1/image/icons-svg/logo.svg" class="brand-img me-2" alt="Easy Plates Logo" style="width: 90px; height: 90px;" />		
          </a>
          <img src="assest1/image/icons-svg/x.svg" width="40" height="40" class="ms-auto" data-bs-dismiss="offcanvas" aria-label="Close" alt="Close TemplateOnweb website menu"/>
        </div>
        
        <div class="offcanvas-body pt-0 align-items-center">
          <!-- Main Navigation -->
          <ul class="navbar-nav align-items-lg-center ms-auto">
            <li class="nav-item"> 
              <a class="nav-link dropdown-toggle active fs-4 ps-0" href="home" title="Visit home page">
                <i class="bi bi-house"></i>
              </a>
            </li>
            
            <li class="nav-item"> 
              <a class="nav-link dropdown-toggle" href="about" title="About Us">
                About Us
              </a>
            </li>
            
            <li class="nav-item"> 
              <a class="nav-link dropdown-toggle" href="recipe" title="Recipes">
                Recipes
              </a>
            </li>

            <li class="nav-item"> 
              <a class="nav-link dropdown-toggle" href="faq" title="FAQs">
                Faqs
              </a>
            </li>
            
            <li class="nav-item"> 
              <a class="nav-link dropdown-toggle" href="contact" title="Contact Us">
                Contact Us
              </a>
            </li>
          </ul>
          
          <!-- Right Side Navigation -->
          <ul class="navbar-nav align-items-lg-center ms-auto nav_right">
            <!-- Search Dropdown -->
            <li class="nav-item dropdown">
              <a class="dropdown-toggle nav_hide nav-link fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-search"></i>
              </a>
              <ul class="dropdown-menu drop_search p-3 shadow" aria-labelledby="navbarDropdown">
                <form class="navbar-form" role="search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Keyword">
                    <span class="input-group-btn">
                      <button class="btn btn-primary bg_red border-0 rounded-0 p-2 px-3" type="button">
                        <i class="bi bi-search"></i>
                      </button>
                    </span>
                  </div>
                </form>
              </ul>
            </li>

            <!-- Shopping Cart Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle drop_togn nav_hide fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-cart"></i>
              </a>
              <ul class="dropdown-menu drop_cart shadow rounded-0" aria-labelledby="navbarDropdown">
                <li>
                  <div class="drop_1i row">
                    <div class="col-md-6 col-6">
                      <div class="drop_1il"><h5>2 ITEMS</h5></div>
                    </div>
                    <div class="col-md-6 col-6">
                      <div class="drop_1il text-end"><h5><a href="cart">VIEW CART</a></h5></div>
                    </div>
                  </div>
                  
                  <div class="drop_1i1 row">
                    <div class="col-md-6 col-6">
                      <div class="drop_1i1l"><h6><a href="#">Nulla Quis</a> <br> <span class="d-inline-block mt-1 font_14">1x - $89.00</span></h6></div>
                    </div>
                    <div class="col-md-4 col-4">
                      <div class="drop_1i1r"><a href="#"><img src="assest1/image/17.jpg" class="img-fluid" alt="abc"></a></div>
                    </div>
                    <div class="col-md-2 col-2">
                      <div class="drop_1i1l text-end"><h6> <span><i class="bi-trash"></i></span></h6></div>
                    </div>
                  </div>
                  
                  <div class="drop_1i1 row">
                    <div class="col-md-6 col-6">
                      <div class="drop_1i1l"><h6><a href="#">Eget Nulla</a> <br> <span class="d-inline-block mt-1 font_14">1x - $49.00</span></h6></div>
                    </div>
                    <div class="col-md-4 col-4">
                      <div class="drop_1i1r"><a href="#"><img src="assest1/image/19.jpg" class="img-fluid" alt="abc"></a></div>
                    </div>
                    <div class="col-md-2 col-2">
                      <div class="drop_1i1l text-end"><h6> <span><i class="bi-trash"></i></span></h6></div>
                    </div>
                  </div>
                  
                  <div class="drop_1i2 row">
                    <div class="col-md-6 col-6">
                      <div class="drop_1il"><h5>TOTAL</h5></div>
                    </div>
                    <div class="col-md-6 col-6">
                      <div class="drop_1il text-end"><h5>$142.00</h5></div>
                    </div>
                  </div>
                  
                  <div class="drop_1i3 text-center row">
                    <div class="col-md-12 col-12">
                      <ul class="mb-0 family_1">
                        <li class="d-inline-block mx-1"><a class="button px-3 pt-2 pb-2" href="#">View Order</a></li>
                        <li class="d-inline-block mx-1"><a class="button button_1 px-3 pb-2 pt-2" href="checkout">Checkout</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </li>

            <!-- User Login Dropdown -->
            @include('public.layout.login')
            
          </ul>
        </div>
      </div>    
    </div>
  </nav>
</section>