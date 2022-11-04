
// DATA CHART BELONG TO hresoures PAGE

  var div = document.getElementById("team_leader");
  var team_leader = div.textContent;

  var div2 = document.getElementById("mailers");
  var mailers = div2.textContent;
  
  var div3 = document.getElementById("offer_manager");
  var offer_manager = div3.textContent;
  
  var div4 = document.getElementById("securite");
  var securite = div4.textContent;
  
  var div5 = document.getElementById("count_it");
  var count_it = div5.textContent;




const labels = [
    'TeamLeader',
    'Mailers',
    'Offer Manager',
    'securite',
    'IT TEAM'
  ];

  //Data 
  const data = {
    labels: labels,
    datasets: [{
      label: 'Employes Data',
      data: [team_leader, mailers, offer_manager, securite, count_it],
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
  const config = {
    type: 'doughnut',
    data: data,
    options: {  
      responsive: true,
      maintainAspectRatio: false
  }
  };

  //View
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

 
