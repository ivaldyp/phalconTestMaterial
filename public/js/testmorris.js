new Morris.Line({
  element: 'myfirstchart',
  data: [
    { year: '2014-12', value: 3.42 },
    { year: '2015-06', value: 3.14 },
    { year: '2015-12', value: 3.45 },
    { year: '2016-06', value: 3.3 },
    { year: '2016-12', value: 3.79 },
    { year: '2017-06', value: 3.64 },
    { year: '2017-12', value: 3.68 },
  ],
  xkey: 'year',
  ykeys: ['value'],
  ymax: 4,
  ymix: 0,
  labels: ['Value']
});