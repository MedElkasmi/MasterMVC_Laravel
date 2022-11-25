// DATA CHART BELONG TO hresoures PAGE? LOOK UP
// *********************************************


const Salary = [
  '2018',
  '2019',
  '2020',
  '2021',
  '2022'
];

//Data 
const SalaryData = {
  labels: Salary,
  datasets: [{
    label: 'Salary System Tracking Data',
    data: [3000, 4000, 5000, 6000, 7000, 8000],
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
const SalaryConfig = {
  type: 'line',
  data: SalaryData,
  options: {  
    responsive: true,
    maintainAspectRatio: false
}
};

//View
const SalaryChart = new Chart(
  document.getElementById('SalaryChart'),
  SalaryConfig
);