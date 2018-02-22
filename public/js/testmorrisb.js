new Morris.Line({
  element: 'chartmorristest1',
  data: [
    { year: '2014-12', IPS: 3.42 },
    { year: '2015-06', IPS: 3.14 },
    { year: '2015-12', IPS: 3.45 },
    { year: '2016-06', IPS: 3.3 },
    { year: '2016-12', IPS: 3.79 },
    { year: '2017-06', IPS: 3.64 },
    { year: '2017-12', IPS: 3.68 },
  ],
  xkey: 'year',
  ykeys: ['IPS'],
  labels: ['IPS'],
  ymax: 4,
  ymin: 2
  
});