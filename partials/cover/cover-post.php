<div class="article-progress" data-sticky="below-nav">
  <progress class="reading-position" value="0"></progress>
  <div class="article-progress-wrapper">
    <div class="container">
      <div class="row">
        <div class="col py-2">
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex">
              <div class="text-small text-muted mr-1">Reading:</div>
              <div class="text-small">Navigating the complexity of change aversion</div>
            </div>
            <div class="d-flex align-items-center">
              <span class="text-small text-muted">Share:</span>
              <div class="d-flex ml-1">
                <a href="#" class="mx-1 btn btn-sm btn-round btn-primary">
                  <img class="icon" src="assets/img/icons/social/twitter.svg" alt="twitter social icon" data-inject-svg />
                </a>
                <a href="#" class="mx-1 btn btn-sm btn-round btn-primary">
                  <img class="icon" src="assets/img/icons/social/linkedin.svg" alt="linkedin social icon" data-inject-svg />
                </a>
                <a href="#" class="mx-1 btn btn-sm btn-round btn-primary">
                  <img class="icon" src="assets/img/icons/social/facebook.svg" alt="facebook social icon" data-inject-svg />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="bg-dark text-light overlay" data-overlay>
  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image" class="bg-image opacity-50">
  <div class="container pt-6">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-xl-8">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Welcome</a>
              </li>
              <?php
              # Get the Category Information
              $categories = get_the_category();

              if ( ! empty( $categories ) ) {
                echo '<li class="breadcrumb-item">';
                  echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">'. esc_html( $categories[0]->name ) . '</a>';
                echo '</li>';
              }
              ?>
            </ol>
          </nav>
          <span class="badge bg-primary-alt text-primary">
            <i class="fa fa-fw fa-heart"></i>
            21
          </span>
        </div>
        <h1><?php the_title(); ?></h1>
        <div class="d-flex align-items-center">
          <a href="<?php echo esc_url( get_the_author_meta( 'user_url' ) ); ?>">
            <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="<?php echo get_the_author_meta( 'nickname' ); ?>" class="avatar mr-2">
          </a>
          <div>
            <div>by <a href="<?php echo esc_url( get_the_author_meta( 'user_url' ) ); ?>"><?php echo get_the_author_meta( 'nickname' ); ?></a>
            </div>
            <div class="text-small text-muted">30th October</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
