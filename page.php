<?php

# Include default page header
get_header();

# Include the header file
if ( is_front_page() ) {
  get_template_part('partials/nav/nav-home');
} else {
  get_template_part('partials/nav/nav-page');
}

# Page Content
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    if ( is_front_page() ) {
      get_template_part('partials/nav/nav-home');
      the_content();
    } else {
      # Block for featured image
      if ( has_post_thumbnail() ) {
        get_template_part('partials/nav/nav-page-transparent');
?>
<section class="bg-dark text-light header-inner p-0 jarallax o-hidden" data-overlay data-jarallax data-speed="0.2" style="padding-top: 73px !important;">
  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image" class="jarallax-img opacity-30">
  <div class="container py-0 layer-2">
    <div class="row my-3">
      <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row my-4 my-md-6" data-aos="fade-up">
      <div class="col-lg-9 col-xl-8">
        <h1 class="display-4"><?php the_title(); ?></h1>
        <p class="lead mb-0"><?php the_subtitle(); ?></p>
      </div>
    </div>
  </div>
  <div class="decoration-wrapper">
    <div class="decoration bottom right d-none d-md-block" data-jarallax-element="100 100">
      <img class="bg-primary-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/decorations/deco-blob-1.svg" alt="deco-blob-1 decoration" data-inject-svg />
    </div>
  </div>
  <div class="divider flip-x">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dividers/divider-1.svg" alt="graphical divider" data-inject-svg />
  </div>
</section>
<?php
      } else {
        get_template_part('partials/nav/nav-page-light');
?>
<section class="bg-primary-alt header-inner o-hidden">
      <div class="container">
        <div class="row my-3">
          <div class="col">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Pages</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Pricing Plans</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row py-6 text-center justify-content-center align-items-center">
          <div class="col-xl-8 col-lg-10">
            <h1 class="display-4"><?php the_title(); ?></h1>
            <p class="lead mb-0"><?php the_subtitle(); ?></p>
          </div>
        </div>
      </div>
      <div class="decoration-wrapper d-none d-md-block">
        <div class="decoration left middle-y scale-2" data-jarallax-element="100" style="z-index: 0; transform: translate3d(0px, 33.5817px, 0px);">
          <svg xmlns="http://www.w3.org/2000/svg" width="81" height="99" viewBox="0 0 81 99" fill="none" class="injected-svg bg-primary" data-src="assets/img/decorations/deco-dots-4.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<path d="M16.512 39.034C15.694 39.503 14.793 39.858 14.094 40.452C12.276 41.993 10.356 43.475 8.82596 45.278C6.21296 48.36 6.58998 51.078 9.57798 54.153C10.094 54.685 10.955 54.907 11.685 55.194C12.044 55.337 12.476 55.28 12.867 55.352C15.017 55.748 15.705 56.688 15.555 59.035C11.016 60.872 7.36398 59.407 4.22098 55.993C2.15998 53.756 0.741962 51.231 0.661962 48.11C0.632962 46.994 0.790977 45.962 1.37098 44.914C3.54698 40.972 6.52296 37.87 10.412 35.592C11.707 34.833 13.039 34.918 14.351 35.188C15.306 35.385 15.997 36.129 16.206 37.163C16.34 37.815 16.422 38.479 16.512 39.034Z" fill="black"></path>
<path d="M15.697 74.223C12.558 75.928 10.693 78.761 9.33598 81.818C7.54498 85.852 9.06098 90.272 14.078 90.917C14.887 91.021 15.717 91.46 16.394 91.946C17.511 92.749 17.462 92.817 17.347 94.582C14.38 95.921 11.482 95.849 8.72196 94.045C7.45596 93.218 6.21997 92.335 5.04597 91.382C1.89797 88.829 0.949985 81.801 2.99699 78.751C4.01799 77.23 4.76297 75.515 5.83497 74.034C7.72997 71.419 10.22 70.101 13.702 71.617C14.943 72.155 15.049 73.297 15.697 74.223Z" fill="black"></path>
<path d="M78.5449 75.006C76.3729 74.601 75.3419 76.242 74.1429 77.555C72.8619 78.959 72.1569 80.623 72.2269 82.559C72.3869 87.028 74.3889 90.526 78.0839 92.942C79.2399 93.698 79.3539 94.837 80.1699 95.958C79.5739 95.958 79.1369 95.825 78.8579 95.978C76.0829 97.503 74.0079 96.236 72.0439 94.367C70.2509 92.66 68.4229 91.002 67.2859 88.732C66.0829 86.332 65.3249 83.839 65.5929 81.135C66.0289 76.765 68.6159 73.762 71.8999 71.146C73.3389 70 74.8039 70.028 76.3999 70.414C77.5559 70.692 78.1069 71.489 78.2359 72.637C78.3159 73.379 78.4279 74.121 78.5449 75.006Z" fill="black"></path>
<path d="M50.3418 83.795C47.8708 83.591 45.2398 83.449 42.7048 84.279C41.0388 88.606 42.7048 93.074 46.9178 95.201C48.1448 95.82 49.0408 96.512 49.3608 98.029C48.3408 98.302 47.3058 98.584 46.2688 98.859C45.2998 99.118 44.3958 98.97 43.4818 98.543C37.4038 95.701 33.8938 88.395 35.5428 81.908C35.7188 81.217 36.0308 80.558 36.2988 79.892C36.6208 79.089 37.2028 78.615 38.0698 78.451C41.0778 77.885 44.0858 77.664 47.1268 78.22C48.5698 78.485 49.5718 79.389 50.4468 80.41C51.2928 81.396 51.4728 82.543 50.3418 83.795Z" fill="black"></path>
<path d="M78.367 7.67896C76.728 7.85196 75.308 8.00099 73.888 8.15199C72.019 8.34999 70.921 9.27497 70.372 11.176C69.458 14.353 69.804 17.353 71.183 20.254C71.49 20.9 72.251 21.386 72.896 21.802C74.689 22.958 76.613 23.942 77.738 26.096C75.463 27.089 73.3 27.21 71.023 26.032C65.492 23.173 63.347 18.18 63.968 12.031C64.157 10.158 64.874 8.31997 65.493 6.51597C66.048 4.90197 67.288 3.77699 68.946 3.48899C70.899 3.14999 72.905 3.07497 74.891 2.98597C75.942 2.93897 76.723 3.57297 77.149 4.50397C77.604 5.49397 77.938 6.53796 78.367 7.67896Z" fill="black"></path>
<path d="M45.898 11.393C44.492 10.616 44.472 10.618 43.916 11.645C42.529 14.197 42.822 16.754 44.828 18.882C45.478 19.571 46.219 20.213 47.016 20.72C48.481 21.652 49.954 22.528 50.192 24.534C49.585 24.68 48.784 24.712 48.153 25.056C46.801 25.793 45.633 25.606 44.323 24.907C41.643 23.479 39.428 21.542 37.858 18.984C36.092 16.107 35.942 12.919 36.899 9.745C37.524 7.676 39.237 6.54302 41.2 5.90702C42.944 5.34102 44.739 4.91199 46.532 4.51999C48.641 4.05999 50.067 4.95502 50.714 7.04902C50.923 7.72402 51.066 8.42101 51.304 9.36701C50.204 9.76101 49.103 10.138 48.017 10.549C47.292 10.823 46.589 11.147 45.876 11.449L45.898 11.393Z" fill="black"></path>
<path d="M19.6431 5.52198C18.6041 5.46998 17.909 5.46799 17.219 5.39399C15.08 5.16299 13.449 6.00099 12.369 7.80299C11.473 9.29899 10.721 10.88 9.90007 12.434C10.222 12.967 10.517 13.344 10.697 13.77C11.25 15.085 12.349 15.408 13.611 15.439C14.166 15.452 14.722 15.377 15.279 15.369C17.363 15.334 18.3261 16.139 18.6771 18.216C18.7301 18.522 18.7101 18.839 18.7241 19.13C13.6791 21.07 8.77708 19.623 5.57808 16.217C4.24008 14.791 3.58807 12.961 3.85307 10.912C4.19307 8.30596 5.33908 6.02299 6.79408 3.91099C7.83508 2.39799 9.59309 1.80197 11.2391 1.23597C12.4271 0.826969 13.739 0.693967 15.007 0.614967C17.064 0.485967 18.028 1.20798 18.757 3.16498C19.018 3.86498 19.2811 4.56298 19.6431 5.52198Z" fill="black"></path>
<path d="M44.8359 43.951C44.5839 44.067 44.4469 44.168 44.2969 44.193C40.0179 44.92 39.9039 48.017 41.3909 51.291C42.1799 53.03 43.8169 54.395 45.1229 55.884C45.5369 56.354 46.0839 56.738 46.6349 57.048C48.2289 57.946 49.4869 59.055 49.4079 61.244C48.3509 61.41 47.1399 61.677 45.9199 61.754C45.4219 61.787 44.8589 61.477 44.3909 61.209C40.5649 59.016 37.5139 55.98 35.4109 52.143C33.4579 48.585 33.1489 44.837 35.5809 41.295C36.9579 39.289 39.1669 38.775 41.4309 38.563C42.2079 38.49 42.7529 38.969 43.1599 39.637C43.9489 40.933 44.6229 42.266 44.8359 43.951Z" fill="black"></path>
<path d="M76.0799 56.7771C73.8919 57.3361 71.6839 57.078 69.5139 56.634C67.7349 56.269 66.5409 54.89 65.9769 53.335C64.9499 50.503 63.8829 47.5892 63.5389 44.6272C63.0189 40.1442 65.2439 37.073 70.0369 36.672C70.5139 36.632 70.9939 36.615 71.4709 36.621C74.4729 36.654 75.3849 37.559 75.6639 40.847C74.8769 40.847 74.0979 40.84 73.3179 40.848C70.7069 40.875 69.2299 42.4121 69.6129 44.9371C69.9199 46.9721 70.4179 48.985 70.9449 50.978C71.2749 52.235 72.1329 52.87 73.5349 53.043C76.1739 53.373 76.5329 54.0101 76.0799 56.7771Z" fill="black"></path>
</svg>
        <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"><div style="position: fixed;"></div></div></div>
        <div class="decoration bottom right scale-2" data-jarallax-element="100 100" style="z-index: 0; transform: translate3d(18.2985px, 18.2985px, 0px);">
          <svg xmlns="http://www.w3.org/2000/svg" width="156" height="159" viewBox="0 0 156 159" fill="none" class="injected-svg bg-primary-2" data-src="assets/img/decorations/deco-blob-6.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<path d="M6.81116 60.239C7.31116 59.53 7.90115 58.866 8.29715 58.102C9.43415 55.902 10.3812 53.598 11.6092 51.453C13.1932 48.69 14.9122 45.997 16.6932 43.356C18.3842 40.847 20.0892 38.319 22.0472 36.02C25.1492 32.374 28.3672 28.812 31.7232 25.398C34.7972 22.272 38.0242 19.28 41.3582 16.433C43.7172 14.419 46.3642 12.738 48.8912 10.924C49.6492 10.38 50.4442 9.88499 51.1212 9.20899C48.9962 9.30999 47.5602 10.816 45.6132 11.487C46.3102 10.867 46.9252 10.1 47.7182 9.65199C53.0772 6.62599 58.4682 3.65297 64.3722 1.78297C64.6632 1.69097 64.9792 1.68298 65.3472 1.78398C61.4882 4.32098 56.8802 5.36497 52.4762 8.12397C53.4332 8.24397 53.8862 8.44497 54.2032 8.31397C55.2362 7.89097 56.2172 7.34298 57.2212 6.84998C61.5302 4.73198 66.0322 3.12597 70.5492 1.51597C75.3952 -0.21203 80.2012 -0.0660178 85.1602 0.659982C90.6312 1.46198 95.9592 2.81399 101.281 4.24699C104.906 5.22299 108.551 6.12599 112.158 7.16099C119.318 9.21199 125.765 12.666 131.603 17.269C133.171 18.506 134.644 19.869 136.234 21.079C139.023 23.201 141.045 25.948 142.882 28.872C143.304 29.543 143.841 30.143 144.345 30.761C146.118 32.939 147.763 35.196 148.761 37.853C150.111 41.439 151.693 44.959 152.738 48.632C154.287 54.083 155.381 59.643 155.406 65.374C155.429 70.735 155.285 76.08 154.351 81.364C153.31 87.28 151.794 93.055 149.023 98.452C146.984 102.422 145.482 106.722 143.068 110.435C138.359 117.674 132.839 124.309 126.634 130.373C122.089 134.814 117.114 138.648 111.763 142.037C109.872 143.234 107.956 144.412 106.181 145.769C101.13 149.627 95.3472 151.865 89.3352 153.644C87.6492 154.143 85.9952 154.743 84.3272 155.294C80.0542 156.71 75.6202 157.37 71.1822 157.952C68.4962 158.305 65.7742 158.411 63.0652 158.568C61.8111 158.64 60.5692 158.815 59.3172 158.163C58.7452 157.863 57.8312 158.217 56.9132 158.286C56.9032 157.451 57.0182 156.724 56.8522 156.069C56.6962 155.451 56.2432 154.909 55.9202 154.333C55.7602 154.427 55.6022 154.522 55.4432 154.616C55.6312 154.897 55.8812 155.155 55.9942 155.462C56.6292 157.196 55.7071 158.462 53.9202 158.04C51.1252 157.38 48.3652 156.538 45.6392 155.631C38.8642 153.374 32.9892 149.534 27.6022 144.944C23.8932 141.784 20.2392 138.51 17.3172 134.581C14.7902 131.185 12.4282 127.657 10.1592 124.083C8.62215 121.661 7.25515 119.114 6.01315 116.527C3.74915 111.816 2.49715 106.763 1.40215 101.681C0.914148 99.42 0.586152 97.123 0.256152 94.834C-0.335848 90.729 0.344149 86.719 1.26215 82.731C1.88915 80.005 2.38715 77.247 3.09015 74.541C4.13315 70.524 5.31716 66.544 6.41216 62.54C6.61716 61.786 6.68315 60.994 6.81415 60.22L6.81116 60.239ZM53.1272 59.27C53.1371 58.631 53.2292 58.354 53.1292 58.196C52.0742 56.511 51.9511 54.618 51.6702 52.711C51.1842 49.408 50.4282 46.143 49.7562 42.868C49.4862 41.549 49.1742 40.236 48.8182 38.938C48.6722 38.405 48.3592 37.917 47.9432 37.025C47.5972 37.766 47.4332 38.024 47.3512 38.305C46.8142 40.154 47.5872 41.872 47.9332 43.626C48.2551 45.262 48.8242 46.862 49.0172 48.51C49.4612 52.297 50.6861 55.757 53.1272 59.27ZM41.8812 37.513C41.3242 35.125 40.8502 32.713 40.1802 30.357C39.7642 28.899 38.9572 27.64 36.9772 27.715C37.3772 28.959 37.8622 30.049 38.0592 31.188C38.2742 32.433 38.1762 33.729 38.2992 34.995C38.4062 36.082 38.6332 37.157 38.9042 38.838C39.7622 37.256 40.5662 36.609 41.8812 37.513ZM94.7522 133.431C93.7322 132.085 92.1702 131.551 90.7132 131.127C89.8932 130.889 88.9552 131.037 88.0222 130.67C86.6612 130.133 85.1432 129.984 83.6861 129.713C83.5241 129.682 83.3111 129.92 83.1242 130.033C83.9382 131.465 83.9442 131.449 85.3372 131.939C87.7841 132.8 90.2222 133.685 92.7652 134.596C93.3121 134.274 94.0042 133.869 94.7522 133.431ZM32.2682 58.123C32.1082 58.191 31.9462 58.26 31.7862 58.328C32.1002 59.032 32.4152 59.737 32.7272 60.441C32.8702 60.381 33.0122 60.321 33.1532 60.26C32.8572 59.548 32.5622 58.835 32.2682 58.123Z" fill="black"></path>
</svg>
        <div id="jarallax-container-1" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"><div style="position: fixed;"></div></div></div>
      </div>
      <div class="divider">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="96px" viewBox="0 0 100 100" version="1.1" preserveAspectRatio="none" class="injected-svg" data-src="assets/img/dividers/divider-1.svg">
     <path d="M0,0 C40,33 66,52 75,52 C83,52 92,33 100,0 L100,100 L0,100 L0,0 Z"></path>
</svg>
      </div>
    </section>
<?php
      }

      the_content();
      }
    endwhile;
else :
    // When no posts are found, output this text.
    _e( 'Sorry, no posts matched your criteria.' );
endif;
wp_reset_postdata();

# Footer
get_footer();
