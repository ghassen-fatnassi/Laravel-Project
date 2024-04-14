window.Apex = {
    dataLabels: {
      enabled: false
    }
  };


  var main1="#66503e";
  var main2="#101919";
  var primary1="#b89072";
  var primary2="#ccb191";
  var secondary1="#e1dbd3";
  var secondary2="#faf7f5";
  var other1="#ec7a2f";
  var other2="#adaaab";

  
  var spark1 = {
    chart: {
      id: 'spark1',
      group: 'sparks',
      type: 'line',
      height: 100,
      sparkline: {
        enabled: true
      },
      dropShadow: {
        enabled: true,
        top: 1,
        left: 1,
        blur: 2,
        opacity: 0.2,
      }
    },
    series: [{
      data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21]
    }],
    stroke: {
      curve: 'smooth'
    },
    markers: {
      size: 0
    },
    grid: {
      padding: {
        top: 20,
        bottom: 10,
        left: 110
      }
    },
    colors: ['#fff'],
    tooltip: {
      x: {
        show: false
      },
      y: {
        title: {
          formatter: function formatter(val) {
            return '';
          }
        }
      }
    }
  }
  
  var spark2 = {
    chart: {
      id: 'spark2',
      group: 'sparks',
      type: 'line',
      height: 100,
      sparkline: {
        enabled: true
      },
      dropShadow: {
        enabled: true,
        top: 1,
        left: 1,
        blur: 2,
        opacity: 0.2,
      }
    },
    series: [{
      data: [12, 14, 2, 47, 32, 44, 14, 55, 41, 69]
    }],
    stroke: {
      curve: 'smooth'
    },
    grid: {
      padding: {
        top: 20,
        bottom: 10,
        left: 110
      }
    },
    markers: {
      size: 0
    },
    colors: ['#fff'],
    tooltip: {
      x: {
        show: false
      },
      y: {
        title: {
          formatter: function formatter(val) {
            return '';
          }
        }
      }
    }
  }
  
  var spark3 = {
    chart: {
      id: 'spark3',
      group: 'sparks',
      type: 'line',
      height: 100,
      sparkline: {
        enabled: true
      },
      dropShadow: {
        enabled: true,
        top: 1,
        left: 1,
        blur: 2,
        opacity: 0.2,
      }
    },
    series: [{
      data: [47, 45, 74, 32, 56, 31, 44, 33, 45, 19]
    }],
    stroke: {
      curve: 'smooth'
    },
    markers: {
      size: 0
    },
    grid: {
      padding: {
        top: 20,
        bottom: 10,
        left: 110
      }
    },
    colors: ['#fff'],
    xaxis: {
      crosshairs: {
        width: 1
      },
    },
    tooltip: {
      x: {
        show: false
      },
      y: {
        title: {
          formatter: function formatter(val) {
            return '';
          }
        }
      }
    }
  }
  
  var spark4 = {
    chart: {
      id: 'spark4',
      group: 'sparks',
      type: 'line',
      height: 100,
      sparkline: {
        enabled: true
      },
      dropShadow: {
        enabled: true,
        top: 1,
        left: 1,
        blur: 2,
        opacity: 0.2,
      }
    },
    series: [{
      data: [15, 75, 47, 65, 14, 32, 19, 54, 44, 61]
    }],
    stroke: {
      curve: 'smooth'
    },
    markers: {
      size: 0
    },
    grid: {
      padding: {
        top: 20,
        bottom: 10,
        left: 110
      }
    },
    colors: ['#fff'],
    xaxis: {
      crosshairs: {
        width: 1
      },
    },
    tooltip: {
      x: {
        show: false
      },
      y: {
        title: {
          formatter: function formatter(val) {
            return '';
          }
        }
      }
    }
  }
  
  new ApexCharts(document.querySelector("#spark1"), spark1).render();
  new ApexCharts(document.querySelector("#spark2"), spark2).render();
  new ApexCharts(document.querySelector("#spark3"), spark3).render();
  new ApexCharts(document.querySelector("#spark4"), spark4).render();
  
  
  var options = {
    chart: {
      type: "area",
      height: 330,
      foreColor: "#999",
      stacked: false,
      dropShadow: {
        enabled: true,
        enabledSeries: [0],
        top: -2,
        left: 2,
        blur: 5,
        opacity: 0.06
      }
    },
    colors: [other2, other1],
    stroke: {
      curve: "smooth",
      width: 3
    },
    dataLabels: {
      enabled: false
    },
    series: [{
      name: 'FOLLOWERS',
      data: generateDayWiseTimeSeries(0, 31)
    }, {
      name: 'READERS',
      data: generateDayWiseTimeSeries(1, 31)
    }],
    markers: {
      size: 0,
      strokeColor: "#fff",
      strokeWidth: 3,
      strokeOpacity: 1,
      fillOpacity: 1,
      hover: {
        size: 6
      }
    },
    xaxis: {
      type: "datetime",
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      }
    },
    yaxis: {
      labels: {
        offsetX: 14,
        offsetY: -5
      },
      tooltip: {
        enabled: true
      }
    },
    grid: {
      padding: {
        left: -5,
        right: 5
      }
    },
    tooltip: {
      x: {
        format: "dd MMM yyyy"
      },
    },
    legend: {
      position: 'top',
      horizontalAlign: 'left'
    },
    fill: {
      type: "solid",
      fillOpacity:1
    }
  };
  
  var chart = new ApexCharts(document.querySelector("#bar"), options);
  
  chart.render();
  function generateDayWiseTimeSeries(s, count) {
    var values = [[
      2,3,8,7,22,16,23,7,100,100,100,100,10,4,15,2,6,2,5,4,3,10,9,29,19,25,9,12,7,19,7,19 //32

    ], [
      2,3,8,7,22,16,23,7,11,5,12,5,10,4,15,2,6,2,5,4,3,10,9,29,19,25,9,12,7,19,7,19 //32
    ]];
    var i = 0;
    var series = [];
    var currentDate = new Date();

    // Subtract one month
    currentDate.setMonth(currentDate.getMonth() - 1);
    
    // Handling case where current month is January
    if (currentDate.getMonth() === 11) {
        // If the current month after subtracting one month is January,
        // set the date to December 31st of the previous year
        currentDate.setFullYear(currentDate.getFullYear() - 1);
        currentDate.setMonth(11); // Set the month to December
    }
    var x=currentDate.getTime();
    while (i < count) {
      series.push([x, values[s][i]]);
      x += 86400000;
      i++;
    }
    return series;
  }
  
  var optionsRadar={
    series: [
      {
        name: 'Your Reads',
        data: [200, 200, 300, 200],
      },
      {
        name: 'People Reads from your articles',
        data: [15, 120, 140, 200],
      }
  ],
    chart: {
    height: 333,
    type: 'radar',
  },
  plotOptions: {
    radar: {
      size: 120,
      polygons: {
        strokeColors: '#e9e9e9',
        fill: {
          colors: ['#f8f8f8', '#fff']
        }
      }
    }
  },
  title: {
    text: ''
  },
  colors: [other2,other1],
  markers: {
    size: 4,
    colors: ['#fff'],
    strokeColor: [other2,other1],
    strokeWidth: 2,
  },
  tooltip: {
    y: {
      formatter: function(val) {
        return val
      }
    }
  },
  xaxis: {
    categories: ['Programming', 'AI', 'Cyber-Sec','ML']
  },
  yaxis: {
    tickAmount: 7,
    labels: {
      formatter: function(val, i) {
        if (i % 2 === 0) {
          return val
        } else {
          return ''
        }
      }
    }
  }
  };
  
  
  var chartRadar = new ApexCharts(document.querySelector('#CategoryRadar'), optionsRadar);
  chartRadar.render().then(function () {});
  
  var optionsHeatMap = {
    chart: {
      type: 'heatmap',
      height: 330,
      width: '100%'
    },
    series: [//this type for chart can contain any values , it just scales the number like this xi=xi/max ,and gives the colors accordingly 
    {
      name: "M 1",
      data: [
        { x: 'd1', y: 22 },
        { x: '', y: 25 },
        { x: '', y: 18 },
        { x: '', y: 28 },
        { x: '', y: 35 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: 'd10', y: 30 },
        { x: '', y: 27 },
        { x: '', y: 33 },
        { x: '', y: 17 },
        { x: '', y: 22 },
        { x: '', y: 31 },
        { x: '', y: 26 },
        { x: '', y: 24 },
        { x: '', y: 19 },
        { x: '', y: 23 },
        { x: 'd20', y: 16 },
        { x: '', y: 21 },
        { x: '', y: 34 },
        { x: '', y: 15 },
        { x: '', y: 37 },
        { x: '', y: 28 },
        { x: '', y: 36 },
        { x: '', y: 29 },
        { x: '', y: 18 },
        { x: '', y: 27 },
        { x: 'd30', y: 32 }
      ]
    },    
    {
      name: "",
      data: [
        { x: 'd1', y: 22 },
        { x: '', y: 25 },
        { x: '', y: 18 },
        { x: '', y: 28 },
        { x: '', y: 35 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: 'd10', y: 30 },
        { x: '', y: 27 },
        { x: '', y: 33 },
        { x: '', y: 17 },
        { x: '', y: 22 },
        { x: '', y: 31 },
        { x: '', y: 26 },
        { x: '', y: 24 },
        { x: '', y: 19 },
        { x: '', y: 23 },
        { x: 'd20', y: 16 },
        { x: '', y: 21 },
        { x: '', y: 34 },
        { x: '', y: 15 },
        { x: '', y: 37 },
        { x: '', y: 28 },
        { x: '', y: 36 },
        { x: '', y: 29 },
        { x: '', y: 18 },
        { x: '', y: 27 },
        { x: 'd30', y: 32 }
      ]
    },    
    {
      name: "",
      data: [
        { x: 'd1', y: 22 },
        { x: '', y: 25 },
        { x: '', y: 18 },
        { x: '', y: 28 },
        { x: '', y: 35 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: 'd10', y: 30 },
        { x: '', y: 27 },
        { x: '', y: 33 },
        { x: '', y: 17 },
        { x: '', y: 22 },
        { x: '', y: 31 },
        { x: '', y: 26 },
        { x: '', y: 24 },
        { x: '', y: 19 },
        { x: '', y: 23 },
        { x: 'd20', y: 16 },
        { x: '', y: 21 },
        { x: '', y: 34 },
        { x: '', y: 15 },
        { x: '', y: 37 },
        { x: '', y: 28 },
        { x: '', y: 36 },
        { x: '', y: 29 },
        { x: '', y: 18 },
        { x: '', y: 27 },
        { x: 'd30', y: 32 }
      ]
    },    
    {
      name: "",
      data: [
        { x: 'd1', y: 22 },
        { x: '', y: 25 },
        { x: '', y: 18 },
        { x: '', y: 28 },
        { x: '', y: 35 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: 'd10', y: 30 },
        { x: '', y: 27 },
        { x: '', y: 33 },
        { x: '', y: 17 },
        { x: '', y: 22 },
        { x: '', y: 31 },
        { x: '', y: 26 },
        { x: '', y: 24 },
        { x: '', y: 19 },
        { x: '', y: 23 },
        { x: 'd20', y: 16 },
        { x: '', y: 21 },
        { x: '', y: 34 },
        { x: '', y: 15 },
        { x: '', y: 37 },
        { x: '', y: 28 },
        { x: '', y: 36 },
        { x: '', y: 29 },
        { x: '', y: 18 },
        { x: '', y: 27 },
        { x: 'd30', y: 32 }
      ]
    },    
    {
      name: "",
      data: [
        { x: 'd1', y: 22 },
        { x: '', y: 25 },
        { x: '', y: 18 },
        { x: '', y: 28 },
        { x: '', y: 35 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: 'd10', y: 30 },
        { x: '', y: 27 },
        { x: '', y: 33 },
        { x: '', y: 17 },
        { x: '', y: 22 },
        { x: '', y: 31 },
        { x: '', y: 26 },
        { x: '', y: 24 },
        { x: '', y: 19 },
        { x: '', y: 23 },
        { x: 'd20', y: 16 },
        { x: '', y: 21 },
        { x: '', y: 34 },
        { x: '', y: 15 },
        { x: '', y: 37 },
        { x: '', y: 28 },
        { x: '', y: 36 },
        { x: '', y: 29 },
        { x: '', y: 18 },
        { x: '', y: 27 },
        { x: 'd30', y: 32 }
      ]
    },    
    {
      name: "",
      data: [
        { x: 'd1', y: 22 },
        { x: '', y: 25 },
        { x: '', y: 18 },
        { x: '', y: 28 },
        { x: '', y: 35 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: 'd10', y: 30 },
        { x: '', y: 27 },
        { x: '', y: 33 },
        { x: '', y: 17 },
        { x: '', y: 22 },
        { x: '', y: 31 },
        { x: '', y: 26 },
        { x: '', y: 24 },
        { x: '', y: 19 },
        { x: '', y: 23 },
        { x: 'd20', y: 16 },
        { x: '', y: 21 },
        { x: '', y: 34 },
        { x: '', y: 15 },
        { x: '', y: 37 },
        { x: '', y: 28 },
        { x: '', y: 36 },
        { x: '', y: 29 },
        { x: '', y: 18 },
        { x: '', y: 27 },
        { x: 'd30', y: 32 }
      ]
    },    
    {
      name: "",
      data: [
        { x: 'd1', y: 22 },
        { x: '', y: 25 },
        { x: '', y: 18 },
        { x: '', y: 28 },
        { x: '', y: 35 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: 'd10', y: 30 },
        { x: '', y: 27 },
        { x: '', y: 33 },
        { x: '', y: 17 },
        { x: '', y: 22 },
        { x: '', y: 31 },
        { x: '', y: 26 },
        { x: '', y: 24 },
        { x: '', y: 19 },
        { x: '', y: 23 },
        { x: 'd20', y: 16 },
        { x: '', y: 21 },
        { x: '', y: 34 },
        { x: '', y: 15 },
        { x: '', y: 37 },
        { x: '', y: 28 },
        { x: '', y: 36 },
        { x: '', y: 29 },
        { x: '', y: 18 },
        { x: '', y: 27 },
        { x: 'd30', y: 32 }
      ]
    },    
    {
      name: "",
      data: [
        { x: 'd1', y: 22 },
        { x: '', y: 25 },
        { x: '', y: 18 },
        { x: '', y: 28 },
        { x: '', y: 35 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: 'd10', y: 30 },
        { x: '', y: 27 },
        { x: '', y: 33 },
        { x: '', y: 17 },
        { x: '', y: 22 },
        { x: '', y: 31 },
        { x: '', y: 26 },
        { x: '', y: 24 },
        { x: '', y: 19 },
        { x: '', y: 23 },
        { x: 'd20', y: 16 },
        { x: '', y: 21 },
        { x: '', y: 34 },
        { x: '', y: 15 },
        { x: '', y: 37 },
        { x: '', y: 28 },
        { x: '', y: 36 },
        { x: '', y: 29 },
        { x: '', y: 18 },
        { x: '', y: 27 },
        { x: 'd30', y: 32 }
      ]
    },    
    {
      name: "",
      data: [
        { x: 'd1', y: 22 },
        { x: '', y: 25 },
        { x: '', y: 18 },
        { x: '', y: 28 },
        { x: '', y: 35 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: 'd10', y: 30 },
        { x: '', y: 27 },
        { x: '', y: 33 },
        { x: '', y: 17 },
        { x: '', y: 22 },
        { x: '', y: 31 },
        { x: '', y: 26 },
        { x: '', y: 24 },
        { x: '', y: 19 },
        { x: '', y: 23 },
        { x: 'd20', y: 16 },
        { x: '', y: 21 },
        { x: '', y: 34 },
        { x: '', y: 15 },
        { x: '', y: 37 },
        { x: '', y: 28 },
        { x: '', y: 36 },
        { x: '', y: 29 },
        { x: '', y: 18 },
        { x: '', y: 27 },
        { x: 'd30', y: 32 }
      ]
    },    
    {
      name: "",
      data: [
        { x: 'd1', y: 22 },
        { x: '', y: 25 },
        { x: '', y: 18 },
        { x: '', y: 28 },
        { x: '', y: 35 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: 'd10', y: 30 },
        { x: '', y: 27 },
        { x: '', y: 33 },
        { x: '', y: 17 },
        { x: '', y: 22 },
        { x: '', y: 31 },
        { x: '', y: 26 },
        { x: '', y: 24 },
        { x: '', y: 19 },
        { x: '', y: 23 },
        { x: 'd20', y: 16 },
        { x: '', y: 21 },
        { x: '', y: 34 },
        { x: '', y: 15 },
        { x: '', y: 37 },
        { x: '', y: 28 },
        { x: '', y: 36 },
        { x: '', y: 29 },
        { x: '', y: 18 },
        { x: '', y: 27 },
        { x: 'd30', y: 32 }
      ]
    },    
    {
      name: "",
      data: [
        { x: 'd1', y: 22 },
        { x: '', y: 25 },
        { x: '', y: 18 },
        { x: '', y: 28 },
        { x: '', y: 35 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: 'd10', y: 30 },
        { x: '', y: 27 },
        { x: '', y: 33 },
        { x: '', y: 17 },
        { x: '', y: 22 },
        { x: '', y: 31 },
        { x: '', y: 26 },
        { x: '', y: 24 },
        { x: '', y: 19 },
        { x: '', y: 23 },
        { x: 'd20', y: 16 },
        { x: '', y: 21 },
        { x: '', y: 34 },
        { x: '', y: 15 },
        { x: '', y: 37 },
        { x: '', y: 28 },
        { x: '', y: 36 },
        { x: '', y: 29 },
        { x: '', y: 18 },
        { x: '', y: 27 },
        { x: 'd30', y: 32 }
      ]
    },    
    {
      name: "M 12",
      data: [
        { x: 'd1', y: 22 },
        { x: '', y: 25 },
        { x: '', y: 18 },
        { x: '', y: 28 },
        { x: '', y: 35 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: '', y: 20 },
        { x: 'd10', y: 30 },
        { x: '', y: 27 },
        { x: '', y: 33 },
        { x: '', y: 17 },
        { x: '', y: 22 },
        { x: '', y: 31 },
        { x: '', y: 26 },
        { x: '', y: 24 },
        { x: '', y: 19 },
        { x: '', y: 23 },
        { x: 'd20', y: 16 },
        { x: '', y: 21 },
        { x: '', y: 34 },
        { x: '', y: 15 },
        { x: '', y: 37 },
        { x: '', y: 28 },
        { x: '', y: 36 },
        { x: '', y: 29 },
        { x: '', y: 18 },
        { x: '', y: 27 },
        { x: 'd30', y: 32 }
      ]
    }
    ],
    dataLabels: {
      enabled: false
    },
    colors: [other1],
    title: {
      text: ''
    }
  }
  
  var chartMap = new ApexCharts(document.querySelector("#HeatMap"), optionsHeatMap);
  chartMap.render();
  
  var main1="#66503e";
  var main2="#101919";
  var primary1="#b89072";
  var primary2="#ccb191";
  var secondary1="#e1dbd3";
  var secondary2="#faf7f5";
  var other="#ec7a2f";





const dismissAll = document.getElementById('dismiss-all');
const dismissBtns = Array.from(document.querySelectorAll('.dismiss-notification'));

const notificationCards = document.querySelectorAll('.notification-card');

dismissBtns.forEach(btn => {
  btn.addEventListener('click', function(e){
    e.preventDefault;
    var parent = e.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
    parent.classList.add('display-none');
  })
});

dismissAll.addEventListener('click', function(e){
  e.preventDefault;
  notificationCards.forEach(card => {
    card.classList.add('display-none');
  });
  const row = document.querySelector('.notification-container');
  const message = document.createElement('h4');
  message.classList.add('text-center');
  message.innerHTML = 'All caught up!';
  row.appendChild(message);
})

// Function to display selected image
function previewImage(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#image-preview').html('<img src="' + e.target.result + '" class="img-fluid">');
      }
      reader.readAsDataURL(input.files[0]);
  }
}

$(document).ready(function () {
  // Preview image on file input change
  $('#customFile').change(function () {
      previewImage(this);
      $('#upload-feedback').removeClass('d-none').addClass('d-block');
  });

  // Remove photo button functionality
  $('#remove-photo').click(function () {
      $('#customFile').val('');
      $('#image-preview').html('<i class="fas fa-fw fa-user position-absolute top-50 start-50 translate-middle text-secondary"></i>');
      $('#upload-feedback').removeClass('d-block').addClass('d-none');
  });
});
