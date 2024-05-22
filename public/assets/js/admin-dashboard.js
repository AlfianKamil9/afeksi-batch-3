const dummyData = {
    2021: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'],
        datasets: [{
                label: 'User Lama',
                data: [1200, 1400, 1100, 1800, 1300, 900, 1500, 2000, 1300, 1200, 900, 800],
                backgroundColor: 'rgba(35, 61, 255, 1)',
                borderWidth: 1
            },
            {
                label: 'User Baru',
                data: [1000, 800, 1500, 700, 1200, 1600, 1100, 900, 1400, 1500, 1300, 1700],
                backgroundColor: 'rgba(255, 211, 78, 1)',
                borderWidth: 1
            }
        ]
    },
    2022: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'],
        datasets: [{
                label: 'User Lama',
                data: [1400, 1600, 1300, 2000, 1500, 1100, 1700, 2200, 1500, 1400, 1100, 900],
                backgroundColor: 'rgba(35, 61, 255, 1)',
                borderWidth: 1
            },
            {
                label: 'User Baru',
                data: [1200, 1000, 1700, 900, 1400, 1800, 1300, 1100, 1600, 1700, 1500, 1900],
                backgroundColor: 'rgba(255, 211, 78, 1)',
                borderWidth: 1
            }
        ]
    },
    2023: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'],
        datasets: [{
                label: 'User Lama',
                data: [2000, 2500, 1500, 3000, 2000, 1000, 2500, 3000, 1500, 2000, 1500, 1000],
                backgroundColor: 'rgba(35, 61, 255, 1)',
                borderWidth: 1
            },
            {
                label: 'User Baru',
                data: [1500, 1000, 3000, 1000, 2500, 3000, 2000, 1500, 2000, 2500, 2000, 3000],
                backgroundColor: 'rgba(255, 211, 78, 1)',
                borderWidth: 1
            }
        ]
    },
    2024: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'],
        datasets: [{
                label: 'User Lama',
                data: [2200, 2600, 1700, 3100, 2100, 1200, 2700, 3200, 1700, 2200, 1700, 1200],
                backgroundColor: 'rgba(35, 61, 255, 1)',
                borderWidth: 1
            },
            {
                label: 'User Baru',
                data: [1700, 1200, 3200, 1100, 2700, 3200, 2200, 1700, 2200, 2700, 2200, 3200],
                backgroundColor: 'rgba(255, 211, 78, 1)',
                borderWidth: 1
            }
        ]
    }
};

const ctx = document.getElementById('userChart').getContext('2d');
let userChart = new Chart(ctx, {
    type: 'bar',
    data: dummyData[2023],
    options: {
        responsive: true,
        scales: {
            x: {
                grid: {
                    display: false
                },
                ticks: {
                    color: '#000000'
                }
            },
            y: {
                beginAtZero: true,
                max: 4000,
                ticks: {
                    stepSize: 1000
                },
                grid: {
                    color: '#BDBDBD',
                    borderColor: '#000000',
                    borderWidth: 3
                }
            }
        },
        plugins: {
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    color: '#000000',
                    usePointStyle: true,
                    pointStyle: 'rect',
                    boxWidth: 10,
                    boxHeight: 10
                }
            }
        },
        backgroundColor: 'white',
        elements: {
            bar: {
                borderRadius: {
                    topLeft: 8,
                    topRight: 8
                }
            }
        }
    }
});

function updateChart(year) {
    userChart.data = dummyData[year];
    userChart.update();
}

const dummyTransactionData = {
    '24Jam': {
        success: 68,
        pending: 32
    },
    '7Hari': {
        success: 450,
        pending: 150
    }
};

const getTransactionChartData = (data) => ({
    labels: [`Transaksi Sukses ${data.success}/${data.success + data.pending}`,
        `Transaksi Pending ${data.pending}/${data.success + data.pending}`
    ],
    datasets: [{
        data: [data.success, data.pending],
        backgroundColor: ['rgba(35, 61, 255, 1)', 'rgba(255, 211, 78, 1)'],
    }]
});

const createCenterTextPlugin = () => ({
    id: 'centerText',
    beforeDraw: (chart) => {
        const {
            ctx,
            chartArea: {
                top,
                bottom,
                left,
                right
            }
        } = chart;
        ctx.save();
        ctx.font = '500 24px Rubik';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillStyle = '#000';
        const total = chart.$centerText || '0';
        ctx.fillText(total, (left + right) / 2, (top + bottom) / 2 - 10);
        ctx.font = '500 16px Rubik';
        ctx.fillText('Total Transaksi', (left + right) / 2, (top + bottom) / 2 + 20);
        ctx.restore();
    }
});

let transactionChartConfig = {
    type: 'doughnut',
    data: getTransactionChartData(dummyTransactionData['24Jam']),
    options: {
        cutout: '50%',
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    color: '#000000',
                    usePointStyle: true,
                    pointStyle: 'rect',
                    boxWidth: 10,
                    boxHeight: 10
                }
            },
            tooltip: {
                enabled: true
            },
        }
    },
    plugins: [createCenterTextPlugin(dummyTransactionData['24Jam'].success + dummyTransactionData['24Jam']
        .pending)]
};

const transactionChartCtx = document.getElementById('transactionChart').getContext('2d');
let transactionChart = new Chart(transactionChartCtx, transactionChartConfig);

let activeButton = null;

function updateTransactionChart(period) {
    if (activeButton) {
        activeButton.classList.remove('active');
    }

    const currentButton = document.getElementById(`btn${period}`);
    currentButton.classList.add('active');
    activeButton = currentButton;

    const data = dummyTransactionData[period];
    const totalTransactions = data.success + data.pending;
    transactionChart.data = getTransactionChartData(data);
    transactionChart.$centerText = totalTransactions.toString();
    transactionChart.update();
}

document.getElementById('btn24Jam').classList.add('active');
activeButton = document.getElementById('btn24Jam');

updateTransactionChart('24Jam');
