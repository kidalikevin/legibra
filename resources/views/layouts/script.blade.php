
  @if(Request::url() == 'http://localhost/legibra/dashboard2/public/login')

  @elseif(Request::url() == 'http://localhost/legibra/dashboard2/public/register')
  
  @else

  <script type="text/javascript">
    $(document).ready(function(){
     Highcharts.chart('myfirstchart', {
      chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
      },
      title: {
        text: 'Patience population'
      },
      tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
      },
      plotOptions: {
        pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          dataLabels: {
            enabled: true,
            format: '<b>{point.name}k</b>: {point.percentage:.1f} %',
            style: {
              color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
          }
        }
      },
      series: [{
        name: 'Gender',
        colorByPoint: true,
        data: [{
          name: 'Female',
          y: {{ $female_count/100 }}
        },{
          name: 'Male',
          y: {{ $male_count/100 }}
        }]
      }]
    });
   });
 </script>
 <script type="text/javascript">
  $(document).ready(function(){
    Highcharts.chart('orderss', {

      title: {
        text: 'Year Stats, 2016-2019'
      },

      subtitle: {
        text: 'Source: LGB'
      },

      yAxis: {
        title: {
          text: 'Number of Orders'
        }
      },
      plotOptions: {
        series: {
          pointStart: 2014
        }
      },

      series: [{
        name: 'Pharmacy orders',
        data: [0, 0, {{ $orders_2016 }}, {{ $orders_2017 }}]
      }]

    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    Highcharts.chart('death_graph', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Death Rate'
      },
      xAxis: {
        categories: [2015, 2016, 2017]
      },
      yAxis: {
        min: 0,
        title: {
          text: 'No of deaths'
        },
        stackLabels: {
          enabled: true,
          style: {
            fontWeight: 'bold',
            color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
          }
        }
      },

      tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
      },
      plotOptions: {
        column: {
          stacking: 'normal',
          dataLabels: {
            enabled: true,
            color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
          }
        }
      },
      series: [{
        name: 'Death',
        data: [{{ $death_2015 }}, {{ $death_2016 }}, {{ $death_2017 }}]
      }]
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    Highcharts.chart('birth_graph', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Birth Rate'
      },
      xAxis: {
        categories: [2015, 2016, 2017]
      },
      yAxis: {
        min: 0,
        title: {
          text: 'No of birth'
        },
        stackLabels: {
          enabled: true,
          style: {
            fontWeight: 'bold',
            color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
          }
        }
      },
      
      tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
      },
      plotOptions: {
        column: {
          stacking: 'normal',
          dataLabels: {
            enabled: true,
            color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
          }
        }
      },
      series: [{
        name: 'Birth',
        data: [{{ $birth_2015 }}, {{ $birth_2016 }}, {{ $birth_2017 }}]
      }]
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    Highcharts.chart('operation', {
      chart: {
        type: 'area'
      },
      title: {
        text: 'Male and Female Operation Stats'
      },
      subtitle: {
        text: 'Source: LGB</a>'
      },
      xAxis: {
        allowDecimals: false,
        labels: {
          formatter: function () {
                return this.value; // clean, unformatted number for year
              }
            }
          },
          yAxis: {
            title: {
              text: 'No of operation'
            },
            labels: {
              formatter: function () {
                return this.value + 'P';
              }
            }
          },
          tooltip: {
            pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>Operation in {point.x}'
          },
          plotOptions: {
            area: {
              pointStart: 2012,
              marker: {
                enabled: false,
                symbol: 'circle',
                radius: 2,
                states: {
                  hover: {
                    enabled: true
                  }
                }
              }
            }
          },
          series: [{
            name: 'Male',
            data: [0, 0, 0, {{ $male_2015 }}, {{ $male_2016 }}, {{ $male_2017 }}]
          }, {
            name: 'Female',
            data: [0, 0, 0, {{ $female_2015 }},  {{ $female_2016 }},  {{ $female_2017 }}]
          }]
        });
  });
</script>

@endif