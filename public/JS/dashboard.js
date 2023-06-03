// SIDEBAR TOGGLE

var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar() {
  if(!sidebarOpen) {
    sidebar.classList.add("sidebar-responsive");
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if(sidebarOpen) {
    sidebar.classList.remove("sidebar-responsive");
    sidebarOpen = false;
  }
}



// ---------- CHARTS ----------

// BAR CHART
var barChartOptions = {
  series: [{
    data: [8500, 6800, 10000, 13900, 8200]
  }],
  chart: {
    type: 'bar',
    height: 350,
    toolbar: {
      show: false
    },
  },
  colors: [
    "#246dec",
    "#246dec",
    "#246dec",
    "#246dec",
    "#246dec"
  ],
  plotOptions: {
    bar: {
      distributed: true,
      borderRadius: 4,
      horizontal: false,
      columnWidth: '40%',
    }
  },
  dataLabels: {
    enabled: false
  },
  legend: {
    show: false
  },
  xaxis: {
    categories: ["GTRadial", "Giti", "GT Gajah Tunggal", "IRC Tire", "Zeneos"],
  },
  yaxis: {
    title: {
      text: "Sold"
    }
  }
};

var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
barChart.render();


// AREA CHART
var areaChartOptions = {
  series: [{
    name: 'Inventories',
    data: [11000, 4800, 7000, 8880, 9500]
  }, {
    name: 'Purchase Orders',
    data: [9600, 4400, 6900, 6800, 8000]
  }],
  chart: {
    height: 350,
    type: 'area',
    toolbar: {
      show: false,
    },
  },
  colors: ["#003366", "#246dec"],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: 'smooth'
  },
  labels: ["2019", "2020", "2021", "2022", "2023"],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        text: 'Inventories',
      },
    },
    {
      opposite: true,
      title: {
        text: 'Purchase Orders',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
  }
};

var areaChart = new ApexCharts(document.querySelector("#area-chart"), areaChartOptions);
areaChart.render();