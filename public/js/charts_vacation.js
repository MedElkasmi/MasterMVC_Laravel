 // DATA CHART BELONG TO hresoures PAGE? LOOK UP
  // *********************************************


  const vacation = [
    'user 1',
    'user 2',
    'user 3',
    'user 4',
  ];

  //Data 
  const VacationData = {
    labels: vacation,
    datasets: [{
      label: 'Vacation Data',
      data: [15, 10, 5, 2],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
    ],
    borderWidth: 1
    }]
  };

  //config
const VacationConfig = {
    type: 'bar',
    data: VacationData,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  //View
  const VacationChart = new Chart(
    document.getElementById('VacationChart'),
    VacationConfig
  );