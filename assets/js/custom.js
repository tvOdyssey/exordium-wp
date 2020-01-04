function updateAboutNavbar () {
  mainNavbar = $('#mainNavbar');
  mainNavbarHeight = mainNavbar.height() + 31.625; // not sure why but we gotta add that 31.625

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
