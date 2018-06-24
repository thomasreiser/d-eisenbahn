////////////////////////////////////////////////////////
// Zoigl-Termine
////////////////////////////////////////////////////////
window.appointments = [
  /* REIHENFOLGE EINHALTEN! */
  [2018, 8, 3],
  [2018, 8, 4],
  [2018, 8, 5],
  [2018, 8, 6],

  [2018, 8, 24],
  [2018, 8, 25],
  [2018, 8, 26],
  [2018, 8, 27],

  [2018, 9, 14],
  [2018, 9, 15],
  [2018, 9, 16],
  [2018, 9, 17],

  [2018, 10, 12],
  [2018, 10, 13],
  [2018, 10, 14],
  [2018, 10, 15],

  [2018, 10, 28],
  [2018, 10, 29],

  [2018, 11, 9],
  [2018, 11, 10],
  [2018, 11, 11],
  [2018, 11, 12],

  [2018, 12, 7],
  [2018, 12, 8],
  [2018, 12, 9],
  [2018, 12, 10]
];

$(function() {
  if (typeof $.prototype.calendar === 'function') {
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

    window.appointments.forEach(function(item, index, array) {
      $calendar.calendar('appendText', '<div class="zoigl-termin-txt"></div>', item[0], item[1], item[2], 'zoigl-termin');
    });
  }
});
