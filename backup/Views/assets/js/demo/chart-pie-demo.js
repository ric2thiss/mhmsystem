// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';


// End point : http://localhost/mental-health-management-system/api/chart?barangay_id=
let pie_chart;

function fetchChartCategory(id) {
  return fetch(`http://localhost/mental-health-management-system/api/category?barangay_id=${id}`)
    .then(res => {
      if (!res.ok) {
        throw new Error(res.statusText);
      }
      return res.json();
    })
    .then(data => {
      const arr = data.map(item => item.case_count); // Simplified array creation
      console.log("Categories :" + arr)
      updateChartCategory(arr);
    })
    .catch(error => {
      console.error('Error fetching data:', error);
    });
}

function updateChartCategory(data) {
  const ctx = document.getElementById("myPieChart");
  if (!ctx) {
    console.error("Chart container (myPieChart) not found.");
    return;
  }
  if (pie_chart) {
    pie_chart.destroy(); // Destroy existing chart to avoid duplication
  }

  pie_chart = new Chart(ctx, {
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
}



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

  function fetch_demographic_chart(id) {
    return fetch(`http://localhost/mental-health-management-system/api/demographics?barangay_id=${id}`)
      .then(res => {
        if (!res.ok) {
          throw new Error(res.statusText);
        }
        return res.json();
      })
      .then(data => {
        const arr = data.map(item => item.gender_count);
        let under_age = data.filter(item => item.min_age < 18).length;
        arr.push(under_age)
        update_fetch_demographic_chart(arr);
      })
      .catch(error => {
        console.error('Error fetching demographic chart data:', error);
      });
  }

  let dgchart; // Global variable for the chart instance

  function update_fetch_demographic_chart(data) {
    const demographicChart = document.getElementById("demographicChart");
    if (!demographicChart) {
      console.error("Chart container (demographicChart) not found.");
      return;
    }

    // Destroy existing chart instance if it exists
    if (dgchart) {
      dgchart.destroy();
    }

    // Create a new chart
    dgchart = new Chart(demographicChart, {
      type: 'bar',
      data: {
        labels: [
          'Men',
          'Women',
          'Under 18 years old'
        ],
        datasets: [{
          label: 'Count',
          data: data,
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
  }


  function produce_demographic_chart_data(){
    return fetch('http://localhost/mental-health-management-system/api/demographics')
    .then(res=>{
      if(!res.ok){
        console.log("Not ok");
        throw new Error(res.statusText);
      }
      return res.json();
    })
    .then(data => {
      const arr = [];
      let under_age = 0;

      console.log(data);

      data.forEach(item => {
        arr.push(item.gender_count);

        if (item.min_age < 18) {
          under_age++;
        }
      });

      arr.push(under_age);

      return arr; 
    })
    
  }
  produce_demographic_chart_data().then(data => {
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
          label: ['Count'],
          data: data,
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
  })

