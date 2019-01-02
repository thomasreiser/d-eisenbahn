////////////////////////////////////////////////////////
// Zoigl-Termine
////////////////////////////////////////////////////////
window.appointments = {
  /* REIHENFOLGE EINHALTEN! */
  2018: [
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
  ],
  2019: [
    [2019, 1, 4],
    [2019, 1, 5],
    [2019, 1, 6, 'Stirk trinken'],
    [2019, 1, 7],

    [2019, 2, 1],
    [2019, 2, 2],
    [2019, 2, 3],
    [2019, 2, 4],

    [2019, 3, 1, 'Kappenabend'],
    [2019, 3, 8],
    [2019, 3, 9],
    [2019, 3, 10],
    [2019, 3, 11],
    [2019, 3, 19, 'Josefifeier'],

    [2019, 4, 12],
    [2019, 4, 13],
    [2019, 4, 14],
    [2019, 4, 15],

    [2019, 5, 17],
    [2019, 5, 18],
    [2019, 5, 19],
    [2019, 5, 20],

    [2019, 6, 21],
    [2019, 6, 22],
    [2019, 6, 23],
    [2019, 6, 24],

    [2019, 7, 19],
    [2019, 7, 20],
    [2019, 7, 21],
    [2019, 7, 22],

    [2019, 8, 16],
    [2019, 8, 17],
    [2019, 8, 18],
    [2019, 8, 19],

    [2019, 9, 13],
    [2019, 9, 14],
    [2019, 9, 15],
    [2019, 9, 16],

    [2019, 10, 4],
    [2019, 10, 5],
    [2019, 10, 6],
    [2019, 10, 7],
    [2019, 10, 27, 'Vohenstraußer Kirwa'],
    [2019, 10, 28, 'Vohenstraußer Kirwa'],

    [2019, 11, 15],
    [2019, 11, 16],
    [2019, 11, 17],
    [2019, 11, 18],

    [2019, 12, 27],
    [2019, 12, 28],
    [2019, 12, 29],
    [2019, 12, 30]
  ]
};

$(function() {
  var now = new Date();
  var currentYear = Math.max(now.getFullYear(), 2018);

  var lastAppointmentThisYear = (window.appointments[currentYear] || []).slice(-1).pop();
  if (lastAppointmentThisYear && (lastAppointmentThisYear[1] < now.getMonth + 1 ||
      (lastAppointmentThisYear[1] === now.getMonth() + 1 && lastAppointmentThisYear[2] < now.getDate()))) {
    currentYear++;
  }

  var nextYear = currentYear + 1;
  var yearShift = nextYear in window.appointments;
  var $calendar = $('#calendar');
  for (var year = currentYear; year <= nextYear; year++) {
    var app = window.appointments[year];
    if (!Array.isArray(app))
      continue;

    if (typeof $.prototype.calendar === 'function') {
      var $cal = $('<div />').attr('id', 'calendar-' + year);
      $calendar.append($cal);
      $cal.calendar({
        showHeaders: true,
        startYear: year,
        minYear: year,
        maxYear: year,
        boostrapVersion: 4,
        l10n: {
          jan: "Januar" + (yearShift ? (' ' + year) : ''),
          feb: "Februar" + (yearShift ? (' ' + year) : ''),
          mar: "März" + (yearShift ? (' ' + year) : ''),
          apr: "April" + (yearShift ? (' ' + year) : ''),
          may: "Mai" + (yearShift ? (' ' + year) : ''),
          jun: "Juni" + (yearShift ? (' ' + year) : ''),
          jul: "Juli" + (yearShift ? (' ' + year) : ''),
          aug: "August" + (yearShift ? (' ' + year) : ''),
          sep: "September" + (yearShift ? (' ' + year) : ''),
          oct: "Oktober" + (yearShift ? (' ' + year) : ''),
          nov: "November" + (yearShift ? (' ' + year) : ''),
          dec: "Dezember" + (yearShift ? (' ' + year) : ''),
          mn: "Mo",
          tu: "Di",
          we: 'Mi',
          th: 'Do',
          fr: 'Fr',
          sa: 'Sa',
          su: 'So'
        }
      });

      app.forEach(function(item, index, array) {
        var clazz;
        var data;
        if (item.length > 3 && typeof item[3] === 'string') {
          clazz = 'zoigl-special';
          data = item[3];
        }
        $cal.calendar('appendText', '<div class="zoigl-termin-txt"></div>', item[0], item[1], item[2], 'zoigl-termin', clazz, data);
      });
    }
  }


  $('.zoigl-special').tooltip();
});
