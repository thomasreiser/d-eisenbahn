////////////////////////////////////////////////////////
// Zoigl-Termine
////////////////////////////////////////////////////////
$(function() {
  var $calendar = $('#calendar');
  $calendar.calendar({
    showHeaders: true,
    startYear: 2018,
    minYear: 2018,
    maxYear: 2018,
    boostrapVersion: 4,
    l10n: {
      jan: "Januar",
      feb: "Februar",
      mar: "März",
      apr: "April",
      may: "Mai",
      jun: "Juni",
      jul: "Juli",
      aug: "August",
      sep: "September",
      oct: "Oktober",
      nov: "November",
      dec: "Dezember",
      mn: "Mo",
      tu: "Di",
      we: 'Mi',
      th: 'Do',
      fr: 'Fr',
      sa: 'Sa',
      su: 'So'
    }
  });

  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 7, 13, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 7, 14, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 7, 15, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 7, 16, 'zoigl-termin');

  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 8, 24, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 8, 25, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 8, 26, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 8, 27, 'zoigl-termin');

  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 9, 14, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 9, 15, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 9, 16, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 9, 17, 'zoigl-termin');

  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 10, 12, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 10, 13, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 10, 14, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 10, 15, 'zoigl-termin');

  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 11, 9, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 11, 10, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 11, 11, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 11, 12, 'zoigl-termin');

  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 12, 7, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 12, 8, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 12, 9, 'zoigl-termin');
  $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', 2018, 12, 10, 'zoigl-termin');
});
