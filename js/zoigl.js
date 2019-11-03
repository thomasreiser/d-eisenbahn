window.addEventListener('DOMContentLoaded', function() {
  'use strict';

  // Start page BG image carousel
  var startImages = $('#start-images');
  if (startImages) {
    $('#legal').appendTo('#start-containers');

    if ($.fn.owlCarousel) {
      startImages.owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        items: 1,
        center: true,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 15000,
        animateOut: 'fadeOut'
      });
    } else {
      $('.owl-carousel').css('display', 'block');
      startImages.find('.owl-lazy:not(:first)').remove();
      var owlLazy = startImages.find('.owl-lazy');
      owlLazy.css('background-image', 'url(' + owlLazy.attr('data-src') + ')');
    }
  }

  // Enable tooltips
  $('[title]').tooltip();

  // Google Analytics Opt-Out
  var gaDisabled = window[gaDisableStr];
  if (typeof gaDisabled !== 'boolean') {
    var $okayButton = $('<button type="button" class="btn btn-secondary ml-3 mt-2" data-dismiss="alert" aria-label="Verstanden">🍪 Verstanden</button>');
    $okayButton.click(function() {
      document.cookie = gaDisableStr + '=false; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
      window[gaDisableStr] = false;
      $('#eu-banner').remove();
    });

    var $disallowButton = $('<button type="button" class="btn btn-link mt-2" data-dismiss="alert" aria-label="Deaktivieren">Deaktivieren</button>');
    $disallowButton.click(function() {
      document.cookie = gaDisableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
      window[gaDisableStr] = true;
      $('#eu-banner').remove();
    });

    $('.deactivateGa').click(function() {
      document.cookie = gaDisableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
      window[gaDisableStr] = true;
      $('#eu-banner').remove();
      alert('Das Tracking wurde für Sie deaktiviert.');
    });

    var $banner = $(
        '<div id="eu-banner" class="alert alert-dark alert-dismissible text-center mb-0 px-1 text-white" role="alert"><small class="d-block d-xl-inline">' +
        'Diese Webseite verwendet Cookies und andere Technologien, um Ihnen ein angenehmeres Surfen zu ermöglichen. <a href="/datenschutz">Klicken Sie hier</a> für mehr Details.' +
        '</small></div>'
    );
    $banner.append($disallowButton);
    $banner.append($okayButton);

    $('body').append($banner);
  }
});