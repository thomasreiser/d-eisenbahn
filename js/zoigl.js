////////////////////////////////////////////////////////
// d'Eisenbahn code
////////////////////////////////////////////////////////
$(function() {
  // Automatically shrink header
  var $header = $('#header');
  var shrinkHeader = function() {
    if ($header.offset().top > 60) {
      $header.addClass('shrinked');
    } else {
      $header.removeClass('shrinked');
    }
  };
  shrinkHeader();
  $(window).scroll(shrinkHeader);

  // Enable CSS transitions after page load
  setTimeout(function()
  {
    $('body').removeClass('no-transition');
  }, 2000);

  // Google Analytics Opt-Out
  var gaDisabled = window[gaDisableStr];
  if (typeof gaDisabled !== 'boolean') {
    var $okayButton = $('<button type="button" class="btn btn-success btn-xs ml-3 mt-2 mt-xl-0"data-dismiss="alert" aria-label="Verstanden">🍪 Verstanden</button>');
    $okayButton.click(function() {
      document.cookie = gaDisableStr + '=false; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
      window[gaDisableStr] = false;
      $('#eu-banner').remove();
    });

    var $disallowButton = $('<button type="button" class="btn btn-default btn-xs2 mt-2" data-dismiss="alert" aria-label="Deaktivieren">Deaktivieren</button>');
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
        '<div id="eu-banner" class="alert alert-success alert-dismissible text-center mb-0 px-1" role="alert"><small class="d-block d-xl-inline">' +
        'Diese Webseite verwendet Cookies und andere Technologien, um Ihnen ein angenehmeres Surfen zu ermöglichen. <a href="/datenschutz">Klicken Sie hier</a> für mehr Details.' +
        '</small></div>'
    );
    $banner.append($disallowButton);
    $banner.append($okayButton);

    $('body').append($banner);
  }
});
