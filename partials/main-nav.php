<?php
  if (has_nav_menu( 'primary-menu-left' )) {
    wp_nav_menu( array(
      'theme_location' => 'primary-menu-left',
      'container' => false,
      'menu_class' => 'navbar-nav'
      )
    );
  } else {
?>
<div class="py-2 py-lg-0">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-fw fa-home"></i>
        Welcome
      </a>
    </li>
    <!-- mobile only version -->
    <li class="nav-item d-xs-block d-lg-none">
      <a href="#" class="nav-link">
        <i class="far fa-fw fa-users"></i>
        About
      </a>
    </li>
    <!-- desktop only version -->
    <li class="nav-item d-none d-lg-block">
      <a href="#" class="nav-link" data-toggle="collapse" data-target="#aboutNavItem" aria-controls="aboutNavItem" aria-expanded="false" aria-label="About">
        <i class="far fa-fw fa-users"></i>
        About
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-fw fa-comments"></i>
        Contact
      </a>
    </li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">
        <i class="far fa-fw fa-question-circle"></i>
        Support
      </a>
      <div class="dropdown-menu row">
        <div class="col-auto px-0" data-dropdown-content>
          <div class="bg-white rounded border shadow-lg o-hidden">
            <div class="p-3">
              <h6 class="mb-0">Support</h6>
            </div>
            <div class="list-group list-group-flush">
              <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-3">
                <i class="fa icon icon-md fa-fw fa-file-alt"></i>
                <div class="text-body ml-3">
                  <span>Documentation</span>
                  <div class="text-small text-muted">Get all the information you need</div>
                </div>
              </a>
              <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-3">
                <i class="fa icon icon-md fa-fw fa-comment-alt"></i>
                <div class="text-body ml-3">
                  <span>Looking for answers?</span>
                  <div class="text-small text-muted">Get support</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-fw fa-user-circle"></i>
        Members
      </a>
    </li>
  </ul>
</div>
<?php
  }

  if (has_nav_menu( 'primary-menu-right' )) {
    wp_nav_menu( array(
      'theme_location' => 'primary-menu-right',
      'container' => false,
      'menu_class' => 'nav justify-content-center'
      )
    );
  } else {
?>
<a href="#" class="btn btn-theme ml-lg-3">Download</a>
<?php
  }

?>
