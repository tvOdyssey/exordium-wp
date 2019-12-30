<div class="navbar-container bg-theme-dark">
  <nav class="navbar navbar-expand-lg navbar-dark bg-theme-dark" data-sticky="top">
    <div class="container">
      <a class="navbar-brand fade-page" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php get_template_part('partials/logo/logo-header'); ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fal fa-bars icon navbar-toggler-open"></i>
        <i class="fal fa-times icon navbar-toggler-close"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
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
        <a href="#" class="btn btn-theme ml-lg-3">Download</a>
      </div>
    </div>
  </nav>
</div>

<!-- about navbar -->
<div class="collapse navdropdownpanel" id="aboutNavItem">
  <div class="dropdown-tab bg-theme-dark text-light border-bottom">
    <div class="container py-4" data-dropdown-content>
      <div class="row">
        <div class="col-lg col-md-6 mb-3 mb-lg-0">
          <h5>General</h5>
          <div>
            <a class="dropdown-item fade-page" href="#">Locations</a>
            <a class="dropdown-item fade-page" href="#">Network Status</a>
          </div>
        </div>
        <div class="col-lg col-md-6 mb-3 mb-lg-0">
          <h5>Resources</h5>
          <div>
            <a class="dropdown-item fade-page" href="#">Reasons for a VPN</a>
            <a class="dropdown-item fade-page" href="#">Tutorials</a>
            <a class="dropdown-item fade-page" href="#">Documentation</a>
          </div>
        </div>
        <div class="col-lg col-md-6 mb-3 mb-lg-0">
          <h5>Blog</h5>
          <div>
            <a class="dropdown-item fade-page" href="#">Why Odyssey?</a>
            <a class="dropdown-item fade-page" href="#">Browsing Anonymously</a>
            <a class="dropdown-item fade-page" href="#">Public Security</a>
            <a class="dropdown-item fade-page" href="#">Data Theft</a>
            <a class="dropdown-item fade-page" href="#">Hiding Your Real Location</a>
          </div>
        </div>
        <div class="col-lg col-md-6 mb-3 mb-lg-0">
          <h5>Company</h5>
          <div><a class="dropdown-item fade-page" href="#">About Us</a>
            <a class="dropdown-item fade-page" href="#">Our Team</a>
            <a class="dropdown-item fade-page" href="#">Service Reviews</a>
            <a class="dropdown-item fade-page" href="#">Jobs at Odyssey</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
