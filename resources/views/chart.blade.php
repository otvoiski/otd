<canvas id="myChart" width="400" height="400"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Jar", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
        datasets: [{
            label: 'TENDÊNCIAS DE DESPESAS',
            data: @yield('chart-valor'),
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(54, 140, 255, 0.2)',
                'rgba(0, 0, 0, 0.2)',
                'rgba(255, 141, 230, 0.2)',
                'rgba(31, 121, 19, 0.2)',
                'rgba(158, 76, 28, 0.2)',
                'rgba(81, 158, 153, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(54, 140, 255, 1)',
                'rgba(0, 0, 0, 1)',
                'rgba(255, 141, 230, 1)',
                'rgba(31, 121, 19, 1)',
                'rgba(158, 76, 28, 1)',
                'rgba(81, 158, 153, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
