function updateAboutNavbar () {
  mainNavbar = $('#mainNavbar');
  mainNavbarHeight = mainNavbar.height();
  // 31.625 is the size of thr wp-admin bar

  aboutNavbar = $('#aboutNavbar');
  aboutNavbar.css({ top: mainNavbarHeight + 'px' });

  console.log('sized');
}

// Where should the about nav be at load?
$( document ).ready(function() {
  updateAboutNavbar();
});

// Where should the about nav be after window resize?
$( window ).resize(function() {
  updateAboutNavbar();
});
