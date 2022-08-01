<header class="header" id="header">
    <nav class="nav container">
      <a href="{{ url('/') }}" class="nav__logo">
        <img
          src="{{ asset('frontend/assets/img/logo-black.png') }}"
          alt="Dr.Farm"
          class="nav__logo-icon"
        />Dr.Farm
      </a>
      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <div class="search" id="search-bar">
              <input
                type="search"
                name="search"
                id="search"
                class="search__home"
                placeholder="جستجو ..."
              />
              <button class="submit"><i class="ri-search-line"></i></button>
            </div>
          </li>
          <li class="nav__item">
            <a href="#home" class="nav__link">خانه</a>
          </li>
          <li class="nav__item">
            <a href="./saved.html" class="nav__link">ذخیره</a>
          </li>
          <li class="nav__item">
            <a href="#products" class="nav__link">گیاهان</a>
          </li>
          <li class="nav__item">
            <a href="#faqs" class="nav__link">سوالات</a>
          </li>
          <li class="nav__item">
            <a href="./profile.html" class="nav__link">ارتباط</a>
          </li>
        </ul>
        <div class="nav__close" id="nav-close">
          <i class="ri-close-line"></i>
        </div>
      </div>
      <div class="nav__btns">
        <!-- <i class="ri-user-3-line cart"></i> -->

        @auth
        <a class="navicon" href="{{ route('login') }}" 
        ><i class="ri-user-follow-line cart"></i></a>
        @else
        <a class="navicon" href="{{ route('login') }}" 
        ><i class="ri-user-unfollow-line cart"></i
      ></a>
        @endauth
        
        <div class="number">0</div>
        <a class="navicon" href="./shoppingcart.html" 
          ><i class="ri-shopping-bag-line cart"></i
        ></a>
        <i class="ri-moon-line change-theme" id="theme-button"></i>
        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-menu-3-line"></i>
        </div>
      </div>
    </nav>
  </header>