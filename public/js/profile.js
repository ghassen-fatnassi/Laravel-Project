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
      enabled: false // This disables the tooltips, if you don't want them
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
      enabled: false // This disables the tooltips, if you don't want them
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
      enabled: false // This disables the tooltips, if you don't want them
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
      enabled: false // This disables the tooltips, if you don't want them
    }
  }
  
  new ApexCharts(document.querySelector("#spark1"), spark1).render();
  new ApexCharts(document.querySelector("#spark2"), spark2).render();
  new ApexCharts(document.querySelector("#spark3"), spark3).render();
  new ApexCharts(document.querySelector("#spark4"), spark4).render();
  
  



  // Create a new array to store the view counts
  var viewCounts = [];
  
  // Create a map to quickly look up view counts by date
  var viewCountsMap = {};
  //getting the curve data structure
  var curve=dashboard['curve'];

  // Iterate over the curve array and populate the viewCountsMap
  curve.forEach(function(item) {
    viewCountsMap[item.view_date] = item.views_count;
  });
  
  // Iterate over the range of dates you're interested in (in this case, 30 days)
  for (var i = 0; i < 32; i++) {
      // Calculate the date for each day in the past 30 days
    var currentDate = new Date();
    currentDate.setDate(currentDate.getDate() - i);
    var dateString = currentDate.toISOString().split('T')[0]; // Get the date in YYYY-MM-DD format
  
      // If the view count exists for the current date, push it to the viewCounts array
      // Otherwise, push 0
    if (viewCountsMap[dateString] !== undefined) {
      viewCounts.unshift(viewCountsMap[dateString]);
    } else {
      viewCounts.unshift(0);
    }
  }
  
  // Ensure the viewCounts array has exactly 30 elements
  while (viewCounts.length < 32) {
      viewCounts.unshift(0);
  }

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
      data: generateDayWiseTimeSeries(31,viewCounts)
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
      labels: {
        offsetX: 15,
        offsetY: 0
      },
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
        offsetY: 0
      },
      tooltip: {
        enabled: true
      }
    },
    grid: {
      padding: {
        left: 20,
        right: 0
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
  
    // Assuming curve is your array of objects containing view_date and views_count
  


  
  chart.render();

  function generateDayWiseTimeSeries(count,viewCounts) {
    var values = viewCounts;//30
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
      series.push([x, values[i]]);
      x += 86400000;
      i++;
    }
    return series;
  }

  var your_reads={};
  your_reads["programming-web-mobile"]=0;
  your_reads["artificial-intelligence"]=0;
  your_reads["cyber-security"]=0;
  your_reads["machine-learning"]=0;
  var people_reads={};
  people_reads["programming-web-mobile"]=0;
  people_reads["artificial-intelligence"]=0;
  people_reads["cyber-security"]=0;
  people_reads["machine-learning"]=0;

  back_your_reads=dashboard['spider']['user_reads'];
  back_people_reads=dashboard['spider']['user_readers'];

  for (var i = 0; i < back_people_reads.length; i++) {
    var reader = back_people_reads[i];
    var category = reader.category;
    var viewsCount = reader.views_count;
    people_reads[category]=viewsCount;
  }


  for (var i = 0; i < back_your_reads.length; i++) {
    var reader = back_your_reads[i];
    var category = reader.category;
    var articlesCount = reader.articles_count;
    your_reads[category]=articlesCount;
  }

  var optionsRadar={
    series: [
      {
        name: 'Your Reads',
        data: [your_reads["programming-web-mobile"],your_reads["artificial-intelligence"],your_reads["cyber-security"], your_reads["machine-learning"]],
      },
      {
        name: 'People Reads from your articles',
        data: [people_reads["programming-web-mobile"],people_reads["artificial-intelligence"],people_reads["cyber-security"], people_reads["machine-learning"]],
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
  


    // Assuming heatmapData is your array of login counts per day
  var heatmapData =dashboard['heatmap'];
  
  // Initialize an empty object to store login counts for each day
  var loginCounts = {};
  
  // Iterate over heatmapData to populate loginCounts object
  heatmapData.forEach(item => {
    loginCounts[item.login_date] = item.login_count;
  });

  const monthMap = {
    1 : 'Jan',
    2 : 'Feb',
    3 : 'Mar',
    4 : 'Apr',
    5 : 'May',
    6 : 'Jun',
    7 : 'Jul',
    8 : 'Aug',
    9 : 'Sep',
    10: 'Oct',
    11: 'Nov',
    12: 'Dec'
  };
  function daysInFebruary(year) {
    return isLeapYear(year) ? 29 : 28;
  }
  var curryear=new Date().getFullYear();
  function isLeapYear(year) {
    return (year % 4 === 0 && year % 100 !== 0) || (year % 400 === 0);
  }
  const limit = {
    1: 31,  // January
    2: daysInFebruary(curryear),  // February (assuming non-leap year)
    3: 31,  // March
    4: 30,  // April
    5: 31,  // May
    6: 30,  // June
    7: 31,  // July
    8: 31,  // August
    9: 30,  // September
    10: 31, // October
    11: 30, // November
    12: 31  // December
  };
  // Initialize an empty array to store the final heatmap data
  var heatmapChartData = [];

  // Loop through each month and day to generate heatmap data
  for (var month = 1; month <= 12; month++) {
    var monthData=[]
    for (var day = 1; day <= limit[month]; day++) {
        // Format month and day with leading zeros
        var formattedMonth = month < 10 ? '0' + month : month;
        var formattedDay = day < 10 ? '0' + day : day;
        // Generate date string in 'YYYY-MM-DD' format
        var currentDate = curryear +'-' + formattedMonth + '-' + formattedDay;
  
        // Check if loginCounts has data for the current date
        var loginCount = loginCounts[currentDate] || 0;
  
        // Create an object representing the data for each day
        var dayData = { x: 'd' + day==31 ? '':day, y: loginCount };
  
        // Add the day data to the array
        monthData.push(dayData);
    }
    heatmapChartData.push({name:monthMap[month],data:monthData})
  }
  

  var optionsHeatMap = {
    chart: {
      type: 'heatmap',
      height: 330,
      width: '100%'
    },
    series:heatmapChartData,
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
      $('#image-preview').html('<i class="bx bxs-user"></i>');
      $('#upload-feedback').removeClass('d-block').addClass('d-none');
  });
});
