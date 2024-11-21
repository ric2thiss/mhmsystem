// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';
function produce_case_category_chart() {
  return fetch('http://localhost/mental-health-management-system/api/category')
    .then(res => {
      if (!res.ok) {
        throw new Error(res.statusText);
      }
      return res.json(); 
    })
    .then(datas => {
      const arr = [];
      let counts = 0;
      datas.forEach(data => {
        arr.push(data.case_count);
        counts += data.case_count;
      });
      // console.log(counts); 
      return arr; 
    })
    .catch(error => {
      console.error('There was an error!', error);
      return []; 
    });
}

produce_case_category_chart().then(data => {
  const ctx = document.getElementById("myPieChart");
  if (!ctx) {
    console.error("Chart container (myPieChart) not found.");
    return;
  }

  const myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Mental Illness", "Mental Problem", "Mental Disorder"],
      datasets: [{
        data: data,
        backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
        hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
        hoverBorderColor: "rgba(234, 236, 244, 1)",
      }],
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
      },
      legend: {
        display: false,
      },
      cutoutPercentage: 80,
    },
  });
}).catch(error => {
  console.error("Error creating the chart:", error);
});



// Pie Chart Example


var demographicChart = document.getElementById("demographicChart");
var dgchart = new Chart(demographicChart, {
  type: 'bar',
  data: {
    labels: [
      'Men',
      'Women',
      'Under 18 yeard old'
    ],
    datasets: [{
      label: ['# of Men'],
      data: [12, 19, 3],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      borderWidth: 1,
      borderColor: "rgba(78, 115, 223, 1)",
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
