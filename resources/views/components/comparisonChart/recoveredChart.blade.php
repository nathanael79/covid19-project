<div class="row" id="chart1">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h3>Perbandingan Kasus Konfirmasi Sembuh COVID-19 Pada 2 Negara</h3>
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
                    <canvas id="recoveredChart" style="height:200px; width:80%"></canvas>
            </div>
        </div>
    </div>
</div>

@push('footer-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script>
@isset($mainHistoryData)
    var historyData = {!! json_encode($getMainHistoryData) !!}
    var comparedData = {!! json_encode($getComparedHistoryData) !!}
    var ctx = document.getElementById('recoveredChart').getContext('2d');
    
    console.log(historyData);
    console.log(comparedData);
    console.log(historyData.map(item => {
                const d = new Date(item.Date)
                return `${d.getDay()}-${d.getMonth()}`}))
    console.log(comparedData.map(item => {
                const d = new Date(item.Date)
                return `${d.getDay()}-${d.getMonth()}`}))
    console.log(historyData.map(item => item.Recovered))
    console.log(comparedData.map(item => item.Recovered))

    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            datasets: [{
                label: `${historyData[0].Country} Recovered`,
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
                data: historyData.map(item => ({t: new Date(item.Date), y: item.Recovered})),
            },
            {
                label: `${comparedData[0].Country} Recovered`,
                borderColor: "#63121f",
                pointBorderColor: "#63121f",
                pointBackgroundColor: "#63121f",
                pointHoverBackgroundColor: "#63121f",
                pointHoverBorderColor: "#63121f",
                pointBorderWidth: 3,
                pointHoverRadius: 3,
                pointHoverBorderWidth: 1,
                pointRadius: 2,
                fill: false,
                borderWidth: 3,
                data: comparedData.map(item => ({t: new Date(item.Date), y: item.Recovered})),
            },
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
@endisset
</script>
@endpush