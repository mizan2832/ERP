<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">

        <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->


      <!-- Layouts -->
      <li class="menu-item {{ Route::currentRouteNamed('buyer') || Route::currentRouteNamed('supplier')  ? 'show' : '' }}">
        <a href="{{ route('admin.account.index') }}" class="menu-link ">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">User Account</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">Page Permission</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">Module Management</div>
        </a>
      </li>


      <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Layouts">Log Report</div>
          </a>

          <ul class="menu-sub">
            <li class="menu-item">
              <a href="layouts-without-menu.html" class="menu-link">
                <div data-i18n="Without menu">Login History</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="layouts-without-navbar.html" class="menu-link">
                <div data-i18n="Without navbar">Activities History</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="layouts-without-navbar.html" class="menu-link">
                <div data-i18n="Without navbar">Active Login History</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="layouts-without-navbar.html" class="menu-link">
                <div data-i18n="Without navbar">User Permission Report</div>
              </a>
            </li>
          </ul>
      </li>
      <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Layouts">Menu Management</div>
          </a>

          <ul class="menu-sub">
            <li class="menu-item">
              <a href="{{ route('admin.mastermenu') }}" class="menu-link">
                <div data-i18n="Without menu">Master Menu</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('admin.submenu') }}" class="menu-link">
                <div data-i18n="Without navbar">Sub Menu</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('admin.subchildmenu') }}" class="menu-link">
                <div data-i18n="Without navbar">Sub child menu</div>
              </a>
            </li>
          </ul>
      </li>


    </ul>
  </aside>
