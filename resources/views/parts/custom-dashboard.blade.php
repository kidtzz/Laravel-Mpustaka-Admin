<!-- chart -->
<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
    var userData = <?php echo json_encode($userData)?>;

    Highcharts.chart("container-table", {
        title: {
            text: "Profile Statistic",
            align: "left",
        },
        subtitle: {
            text: "Jumlah pengunjung manggala-pustaka",
        },
        xAxis: {
            categories: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ],
        },
        yAxis: {
            title: {
                text: "Jumlah Pengunjung",
            },
        },
        legend: {
            layout: "vertical",
            align: "right",
            verticalAlign: "middle",
        },
        plotOptions: {
            series: {
                allowPointSelect: true,
            },
        },
        series: [
            {
                name: "Pengunjung",
                data: userData,
            },
        ],
        responsive: {
            rules: [
                {
                    condition: {
                        maxWidth: 500,
                    },
                    chartOptions: {
                        legend: {
                            layout: "horizontal",
                            align: "center",
                            verticalAlign: "bottom",
                        },
                    },
                },
            ],
        },
    });
</script>
