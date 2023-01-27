<!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="" class="app-brand-link">
              <!-- Start Logo -->
              <span class="app-brand-logo demo">
                <img src="<?= base_url('assets/img/profile/sch.jpg') ?>" style="width: 50px">
              </span>
              <!-- End -->
              <span class="app-brand-text menu-text ms-2">HR-Management</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Admin</span>
            </li>
            <li class="menu-item active">
              <a href="<?= base_url('admin'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>


            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">User</span>
            </li>

            <li class="menu-item">
              <a href="<?= base_url('user'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Profile</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?= base_url('user/edit'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-edit"></i>
                <div data-i18n="Analytics">Edit Profile</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-lock"></i>
                <div data-i18n="Analytics">Change Password</div>
              </a>
            </li>

            
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Menu</span></li>
            <li class="menu-item">
              <a
                href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->