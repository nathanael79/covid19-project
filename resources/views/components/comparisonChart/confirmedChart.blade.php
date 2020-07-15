<div class="row" id="chart1">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h3>Confirmed data history</h3>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-footer">
                <div>
                    <canvas id="confirmedChart" style="height:20%; width:80%"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@push('footer-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script>

    var ctx2 = document.getElementById('confirmedChart').getContext('2d');
    var ctx = canvas.getContext('2d');

    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: 'Confirmed',
                borderColor: "#f82649",
                pointBorderColor: "#f82649",
                pointBackgroundColor: "#f82649",
                pointHoverBackgroundColor: "#f82649",
                pointHoverBorderColor: "#f82649",
                pointBorderWidth: 3,
                pointHoverRadius: 3,
                pointHoverBorderWidth: 1,
                pointRadius: 2,
                fill: false,
                borderWidth: 3,
                data: [65, 59, 80, 81, 56, 55, 40,33,60,55,30,78],
            },
            {
                label: 'Confirmed2',
                borderColor: "#f82649",
                pointBorderColor: "#f82649",
                pointBackgroundColor: "#f82649",
                pointHoverBackgroundColor: "#f82649",
                pointHoverBorderColor: "#f82649",
                pointBorderWidth: 3,
                pointHoverRadius: 3,
                pointHoverBorderWidth: 1,
                pointRadius: 2,
                fill: false,
                borderWidth: 3,
                data: [10, 20, 60, 95, 64, 78, 90,22,70,40,70,89],
            }
            ]
        },
        options: {
            tooltips: {
                intersect: false
            },
            legend: {
                display: false,
                position: "bottom"
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontColor: "rgba(0,0,0,0.5)",
                        fontStyle: "bold",
                        beginAtZero: true,
                        maxTicksLimit: 5,
                        padding: 20
                    },
                    gridLines: {
                        drawTicks: false,
                        display: false
                    }
                    }],
                xAxes: [{
                    type: "time",
                    time: {
                        unit: "day"
                    },
                    gridLines: {
                        zeroLineColor: "transparent"},
                    ticks: {
                        padding: 20,
                        fontColor: "rgba(0,0,0,0.5)",
                        fontStyle: "bold",
                    },
                }]
            }
        }
    });
</script>
@endpush