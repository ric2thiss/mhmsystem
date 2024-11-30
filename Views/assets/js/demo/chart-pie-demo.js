// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';


// End point : http://localhost/mental-health-management-system/api/chart?barangay_id=
let pie_chart;

function fetchChartCategory(id) {
  return fetch(`/mental-health-management-system/api/category?get=filter&barangay_id=${id}`)
    .then(res => {
      if (!res.ok) {
        throw new Error(res.statusText);
      }
      return res.json();
    })
    .then(datas => {
      const {data} = datas
      const category_name = data.map(item => item.case_category_name)
      const case_count = data.map(item => item.case_count); // Simplified array creation
      // const barangay = data.map(item => item.barangay_name)
      
      // console.log(barangay)
      updateChartCategory({category_name, case_count});
    })
    .catch(error => {
      console.error('Error fetching data:', error);
    });
}

function updateChartCategory(data) {
  const ctx = document.getElementById("myPieCategoryChart");
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
        data: data.case_count,
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

fetchChartCategory(1);



// General Case Category Chart
function produce_case_category_chart() {
  return fetch('/mental-health-management-system/api/category?get=all')
    .then(res => {
      if (!res.ok) {
        throw new Error(res.statusText);
      }
      return res.json(); 
    })
    .then(datas => {
      
      const { data } = datas;

      let label = [];
      let datanumbers = [];

      data.forEach(item => {
        label.push(item.case_category_name);
        datanumbers.push(item.case_count);
      });

      return { label, datanumbers };
    })
    .catch(error => {
      console.error('There was an error!', error);
      return { label: [], datanumbers: [] };  // Return empty arrays on error
    });
}

const category_indicators = document.getElementById("category-indicators");
let colorIndicator = '';

produce_case_category_chart().then(data => {

  // Loop through the labels and dynamically create indicators
  category_indicators.innerHTML = '';
  data.label.forEach(item => {
    if(item == "Mental Illness"){
      colorIndicator = "text-primary";
    }else if(item == "Mental Problem"){
      colorIndicator = "text-success";
    }else{
      colorIndicator = "text-info";
    }
    category_indicators.innerHTML += `<span class="mr-2">
                                        <i class="fas fa-circle ${colorIndicator}"></i> ${item}
                                    </span>`;
  });

  const ctx = document.getElementById("myPieChart");
  if (!ctx) {
    console.error("Chart container (myPieChart) not found.");
    return;
  }

  const myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: data.label,
      datasets: [{
        data: data.datanumbers,
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




// // Pie Chart Example

//   function fetch_demographic_chart(id) {
//     return fetch(`http://localhost/mental-health-management-system/api/demographics?barangay_id=${id}`)
//       .then(res => {
//         if (!res.ok) {
//           throw new Error(res.statusText);
//         }
//         return res.json();
//       })
//       .then(data => {
//         const arr = data.map(item => item.gender_count);
//         let under_age = data.filter(item => item.min_age < 18).length;
//         arr.push(under_age)
//         update_fetch_demographic_chart(arr);
//       })
//       .catch(error => {
//         console.error('Error fetching demographic chart data:', error);
//       });
//   }

//   let dgchart; // Global variable for the chart instance

//   function update_fetch_demographic_chart(data) {
//     const demographicChart = document.getElementById("demographicChart");
//     if (!demographicChart) {
//       console.error("Chart container (demographicChart) not found.");
//       return;
//     }

//     // Destroy existing chart instance if it exists
//     if (dgchart) {
//       dgchart.destroy();
//     }

//     // Create a new chart
//     dgchart = new Chart(demographicChart, {
//       type: 'bar',
//       data: {
//         labels: [
//           'Men',
//           'Women',
//           'Under 18 years old'
//         ],
//         datasets: [{
//           label: 'Count',
//           data: data,
//           backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
//           borderWidth: 1,
//           borderColor: "rgba(78, 115, 223, 1)",
//         }]
//       },
//       options: {
//         scales: {
//           y: {
//             beginAtZero: true
//           }
//         }
//       }
//     });
//   }


// Pie Chart Example

function fetch_demographic_chart(month) {
  return fetch(`/mental-health-management-system/api/demographic?get=filter&month=${month}`)
    .then(res => {
      if (!res.ok) {
        throw new Error(res.statusText);
      }
      return res.json();
    })
    .then(datas => {
      const {data} = datas
      const gender = data.map(item => item.gender)
      const gender_count = data.map(item => item.gender_count)
      
      // const arr = data.map(item => item.gender_count);
      // let under_age = data.filter(item => item.min_age < 18).length;
      // arr.push(under_age)
      update_fetch_demographic_chart({gender, gender_count, month});
    })
    .catch(error => {
      console.error('Error fetching demographic chart data:', error);
    });
}

let dgchart; // Global variable for the chart instance

function update_fetch_demographic_chart(data) {
  var demographicChart = document.getElementById("demographicChart");
  var dgchart = new Chart(demographicChart, {
    type: 'bar',
    data: {
      // labels: [
      //   'Men',
      //   'Women',
      //   'Under 18 yeard old'
      // ],
        labels: data.gender,
      datasets: [{
        label: data.month,
        data: data.gender_count,
        backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
        borderWidth: 1,
        borderColor: "rgba(78, 115, 223, 1)",
      }]
    },
    options: {
      scales: {
        y: {
          // beginAtZero: false
        }
      }
    }
  });
}




  // http://localhost/mental-health-management-system/api/demographics
  function produce_demographic_chart_data(){
    return fetch('/mental-health-management-system/api/demographic?get=all')
    .then(res=>{
      if(!res.ok){
        console.log("Not ok");
        throw new Error(res.statusText);
      }
      return res.json();
    })
    .then(datas => {
      const {data} = datas
      const gender = data.map(item => item.gender)
      const gender_count = data.map(item => item.gender_count)
      // const arr = [];
      // let under_age = 0;

      // console.log(data);

      // data.forEach(item => {
      //   arr.push(item.gender_count);

      //   if (item.min_age < 18) {
      //     under_age++;
      //   }
      // });

      // arr.push(under_age);

      return {gender, gender_count}; 
    })
    
  }
  produce_demographic_chart_data().then(data => {
    var demographicChart = document.getElementById("demographicChart");
    var dgchart = new Chart(demographicChart, {
      type: 'bar',
      data: {
        // labels: [
        //   'Men',
        //   'Women',
        //   'Under 18 yeard old'
        // ],
          labels: data.gender,
        datasets: [{
          label: ['Count'],
          data: data.gender_count,
          backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
          borderWidth: 1,
          borderColor: "rgba(78, 115, 223, 1)",
        }]
      },
      options: {
        scales: {
          y: {
            // beginAtZero: false
          }
        }
      }
    });
  })


  let agechart; // Global variable for the chart instance

  function ageDemoographiccChart(){
    fetch('/mental-health-management-system/api/age?get=all')
      .then(response => response.json())
      .then(datas => {
        const {data} = datas;
        const label = data.map(item => item.age_group);
        const group_count = data.map(item => item.group_count);
  
        produce_age_chart(label, group_count);
      });
  }
  
  function produce_age_chart(label, group_count) {
    var ageDemoographiccChart = document.getElementById("ageDemoographiccChart");
    agechart = new Chart(ageDemoographiccChart, {
      type: 'bar',
      data: {
        labels: label,
        datasets: [{
          label: 'Group Count',
          data: group_count,
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
  ageDemoographiccChart();