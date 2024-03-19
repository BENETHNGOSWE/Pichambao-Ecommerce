<aside class="sidebar-nav-wrapper">
  <div class="navbar-logo">
    <a href="index.html">
      <!-- <img src="assets/images/logo/logo.svg" alt="logo" /> -->
      <h2>Dashboard</h2>
    </a>
  </div>
  <nav class="sidebar-nav">
    <ul>
      <li class="nav-item nav-item-has-children">
        <a href="{{ route('dashboard')}}" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.74999 18.3333C12.2376 18.3333 15.1364 15.8128 15.7244 12.4941C15.8448 11.8143 15.2737 11.25 14.5833 11.25H9.99999C9.30966 11.25 8.74999 10.6903 8.74999 10V5.41666C8.74999 4.7263 8.18563 4.15512 7.50586 4.27556C4.18711 4.86357 1.66666 7.76243 1.66666 11.25C1.66666 15.162 4.83797 18.3333 8.74999 18.3333Z" />
              <path d="M17.0833 10C17.7737 10 18.3432 9.43708 18.2408 8.75433C17.7005 5.14918 14.8508 2.29947 11.2457 1.75912C10.5629 1.6568 10 2.2263 10 2.91665V9.16666C10 9.62691 10.3731 10 10.8333 10H17.0833Z" />
            </svg>
          </span>
          <span class="text">Dashboard</span>
        </a>

      </li>

      <li class="nav-item nav-item-has-children">
        <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_06" aria-controls="ddmenu_06" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.125 3.33337C13.125 2.9882 12.8452 2.70837 12.5 2.70837C12.1548 2.70837 11.875 2.9882 11.875 3.33337V5.83337H8.125V3.33337C8.125 2.9882 7.84518 2.70837 7.5 2.70837C7.15482 2.70837 6.875 2.9882 6.875 3.33337V5.83337H6.66667C5.74619 5.83337 5 6.57957 5 7.50004V10C5 12.3012 6.86548 14.1667 9.16667 14.1667H9.375V18.3334C9.375 18.6785 9.65483 18.9584 10 18.9584C10.3452 18.9584 10.625 18.6785 10.625 18.3334V14.1667H10.8333C13.1345 14.1667 15 12.3012 15 10V7.50004C15 6.57957 14.2538 5.83337 13.3333 5.83337H13.125V3.33337Z" />
            </svg>
          </span>
          <span class="text"> Company Products</span>
        </a>
        <ul id="ddmenu_06" class="collapse dropdown-nav">
          <li>
            <a href="{{ route ('products.create')}}">
              <span class="text">
                Create
              </span>
            </a>
          </li>
          <li>
            <a href="{{{ route('products.list')}}}">
              <span class="text">
                Product List
              </span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item nav-item-has-children">
        <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_77" aria-controls="ddmenu_77" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.125 3.33337C13.125 2.9882 12.8452 2.70837 12.5 2.70837C12.1548 2.70837 11.875 2.9882 11.875 3.33337V5.83337H8.125V3.33337C8.125 2.9882 7.84518 2.70837 7.5 2.70837C7.15482 2.70837 6.875 2.9882 6.875 3.33337V5.83337H6.66667C5.74619 5.83337 5 6.57957 5 7.50004V10C5 12.3012 6.86548 14.1667 9.16667 14.1667H9.375V18.3334C9.375 18.6785 9.65483 18.9584 10 18.9584C10.3452 18.9584 10.625 18.6785 10.625 18.3334V14.1667H10.8333C13.1345 14.1667 15 12.3012 15 10V7.50004C15 6.57957 14.2538 5.83337 13.3333 5.83337H13.125V3.33337Z" />
            </svg>
          </span>
          <span class="text"> Products</span>
        </a>
        <ul id="ddmenu_77" class="collapse dropdown-nav">
          <li>
            <a href="{{ route ('featured.createfeatured')}}">
              <span class="text">
                Create
              </span>
            </a>
          </li>
          <li>
            <a href="{{{ route('indexproduct')}}}">
              <span class="text">
                Product List
              </span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item nav-item-has-children">
        <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_02" aria-controls="ddmenu_02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.125 3.33337C13.125 2.9882 12.8452 2.70837 12.5 2.70837C12.1548 2.70837 11.875 2.9882 11.875 3.33337V5.83337H8.125V3.33337C8.125 2.9882 7.84518 2.70837 7.5 2.70837C7.15482 2.70837 6.875 2.9882 6.875 3.33337V5.83337H6.66667C5.74619 5.83337 5 6.57957 5 7.50004V10C5 12.3012 6.86548 14.1667 9.16667 14.1667H9.375V18.3334C9.375 18.6785 9.65483 18.9584 10 18.9584C10.3452 18.9584 10.625 18.6785 10.625 18.3334V14.1667H10.8333C13.1345 14.1667 15 12.3012 15 10V7.50004C15 6.57957 14.2538 5.83337 13.3333 5.83337H13.125V3.33337Z" />
            </svg>
          </span>
          <span class="text"> Product Category</span>
        </a>
        <ul id="ddmenu_02" class="collapse dropdown-nav">
          <li>
            <a href="{{ route ('categories.createcategory')}}">
              <span class="text">
                Create
              </span>
            </a>
          </li>
          <li>
            <a href="{{{ route('categories.list')}}}">
              <span class="text">
                Category List
              </span>
            </a>
          </li>
        </ul>
      </li>

      <span class="divider">
        <hr />
        <h6>Company Assets</h6><hr>
      </span>
      <li class="nav-item nav-item-has-children">
        <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_01" aria-controls="ddmenu_01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.125 3.33337C13.125 2.9882 12.8452 2.70837 12.5 2.70837C12.1548 2.70837 11.875 2.9882 11.875 3.33337V5.83337H8.125V3.33337C8.125 2.9882 7.84518 2.70837 7.5 2.70837C7.15482 2.70837 6.875 2.9882 6.875 3.33337V5.83337H6.66667C5.74619 5.83337 5 6.57957 5 7.50004V10C5 12.3012 6.86548 14.1667 9.16667 14.1667H9.375V18.3334C9.375 18.6785 9.65483 18.9584 10 18.9584C10.3452 18.9584 10.625 18.6785 10.625 18.3334V14.1667H10.8333C13.1345 14.1667 15 12.3012 15 10V7.50004C15 6.57957 14.2538 5.83337 13.3333 5.83337H13.125V3.33337Z" />
            </svg>
          </span>
          <span class="text"> Materials </span>
        </a>
        <ul id="ddmenu_01" class="collapse dropdown-nav">
          <li>
            <a href="{{ route('materials.create')}}">
              <span class="text">
                Create
              </span>
            </a>
          </li>
          <li>
            <a href="{{ route('materials.list')}}">
              <span class="text">
                Materials List
              </span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item nav-item-has-children">
        <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_00" aria-controls="ddmenu_00" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.125 3.33337C13.125 2.9882 12.8452 2.70837 12.5 2.70837C12.1548 2.70837 11.875 2.9882 11.875 3.33337V5.83337H8.125V3.33337C8.125 2.9882 7.84518 2.70837 7.5 2.70837C7.15482 2.70837 6.875 2.9882 6.875 3.33337V5.83337H6.66667C5.74619 5.83337 5 6.57957 5 7.50004V10C5 12.3012 6.86548 14.1667 9.16667 14.1667H9.375V18.3334C9.375 18.6785 9.65483 18.9584 10 18.9584C10.3452 18.9584 10.625 18.6785 10.625 18.3334V14.1667H10.8333C13.1345 14.1667 15 12.3012 15 10V7.50004C15 6.57957 14.2538 5.83337 13.3333 5.83337H13.125V3.33337Z" />
            </svg>
          </span>
          <span class="text"> Orders </span>
        </a>
        <ul id="ddmenu_00" class="collapse dropdown-nav">
          <li>
            <a href="{{ route('orders.create')}}">
              <span class="text">
                Create
              </span>
            </a>
          </li>
          <li>
            <a href="{{ route('orders.list')}}">
              <span class="text">
                Orders List
              </span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item nav-item-has-children">
        <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_05" aria-controls="ddmenu_05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.125 3.33337C13.125 2.9882 12.8452 2.70837 12.5 2.70837C12.1548 2.70837 11.875 2.9882 11.875 3.33337V5.83337H8.125V3.33337C8.125 2.9882 7.84518 2.70837 7.5 2.70837C7.15482 2.70837 6.875 2.9882 6.875 3.33337V5.83337H6.66667C5.74619 5.83337 5 6.57957 5 7.50004V10C5 12.3012 6.86548 14.1667 9.16667 14.1667H9.375V18.3334C9.375 18.6785 9.65483 18.9584 10 18.9584C10.3452 18.9584 10.625 18.6785 10.625 18.3334V14.1667H10.8333C13.1345 14.1667 15 12.3012 15 10V7.50004C15 6.57957 14.2538 5.83337 13.3333 5.83337H13.125V3.33337Z" />
            </svg>
          </span>
          <span class="text"> Debtors </span>
        </a>
        <ul id="ddmenu_05" class="collapse dropdown-nav">
          <li>
            <a href="{{ route('debtors.create')}}">
              <span class="text">
                Create
              </span>
            </a>
          </li>
          <li>
            <a href="{{ route('debtors.list')}}">
              <span class="text">
                Debtors List
              </span>
            </a>
          </li>
        </ul>
      </li>
      <span class="divider">
        <hr />
        <h6>Profile</h6><hr>
      </span>

      <li class="nav-item">
        <a href="{{ route ('featured.createfeatured')}}">
          <span class="icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.49999 3.33333C2.03976 3.33333 1.66666 3.70643 1.66666 4.16666V7.49999C1.66666 7.96023 2.03976 8.33333 2.49999 8.33333H5.83332C6.29356 8.33333 6.66666 7.96023 6.66666 7.49999V4.16666C6.66666 3.70643 6.29356 3.33333 5.83332 3.33333H2.49999Z" />
              <path d="M2.49999 11.6667C2.03976 11.6667 1.66666 12.0398 1.66666 12.5V15.8333C1.66666 16.2936 2.03976 16.6667 2.49999 16.6667H5.83332C6.29356 16.6667 6.66666 16.2936 6.66666 15.8333V12.5C6.66666 12.0398 6.29356 11.6667 5.83332 11.6667H2.49999Z" />
              <path d="M8.33334 4.16667C8.33334 3.8215 8.61318 3.54167 8.95834 3.54167H17.7083C18.0535 3.54167 18.3333 3.8215 18.3333 4.16667C18.3333 4.51185 18.0535 4.79167 17.7083 4.79167H8.95834C8.61318 4.79167 8.33334 4.51185 8.33334 4.16667Z" />
              <path d="M8.33334 7.5C8.33334 7.15483 8.61318 6.875 8.95834 6.875H14.7917C15.1368 6.875 15.4167 7.15483 15.4167 7.5C15.4167 7.84517 15.1368 8.125 14.7917 8.125H8.95834C8.61318 8.125 8.33334 7.84517 8.33334 7.5Z" />
              <path d="M8.95834 11.875C8.61318 11.875 8.33334 12.1548 8.33334 12.5C8.33334 12.8452 8.61318 13.125 8.95834 13.125H17.7083C18.0535 13.125 18.3333 12.8452 18.3333 12.5C18.3333 12.1548 18.0535 11.875 17.7083 11.875H8.95834Z" />
              <path d="M8.95834 15.2083C8.61318 15.2083 8.33334 15.4882 8.33334 15.8333C8.33334 16.1785 8.61318 16.4583 8.95834 16.4583H14.7917C15.1368 16.4583 15.4167 16.1785 15.4167 15.8333C15.4167 15.4882 15.1368 15.2083 14.7917 15.2083H8.95834Z" />
            </svg>
          </span>
          <span class="text">
            Profile
          </span>
        </a>
      </li>
      <span class="divider">
        <hr />
      </span>

    </ul>
  </nav>
</aside>
<div class="overlay"></div>