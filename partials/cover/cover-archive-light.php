
<section class="bg-primary-alt header-inner o-hidden">
  <div class="container">
    <div class="row my-3">
      <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Welcome</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?php $archive_title; ?></li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row py-6 text-center justify-content-center align-items-center">
      <div class="col-xl-8 col-lg-10">
        <h1 class="display-4"><?php echo $archive_title; ?></h1>
        <p class="lead mb-0"><?php echo $archive_subtitle; ?></p>
      </div>
    </div>
  </div>
  <div class="decoration-wrapper d-none d-md-block">
    <div class="decoration left middle-y scale-2" data-jarallax-element="100">
      <img class="bg-primary" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/decorations/deco-dots-4.svg" alt="deco-dots-4 decoration" data-inject-svg />
    </div>
    <div class="decoration bottom right scale-2" data-jarallax-element="100 100">
      <img class="bg-primary-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/decorations/deco-blob-6.svg" alt="deco-blob-6 decoration" data-inject-svg />
    </div>
  </div>
  <div class="divider">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dividers/divider-1.svg" alt="graphical divider" data-inject-svg />
  </div>
</section>
