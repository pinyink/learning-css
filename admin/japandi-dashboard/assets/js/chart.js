// chart.js
document.addEventListener('DOMContentLoaded', function () {
    const textColor = '#8A8A8A';
    const gridColor = 'rgba(230, 227, 222, 0.5)'; // Border color
    
    // Line Chart
    const lineCtx = document.getElementById('lineChart');
    if (lineCtx) {
        new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Visitor',
                    data: [300, 450, 400, 600, 800, 750, 900],
                    borderColor: '#5B7F72', // Primary
                    backgroundColor: 'rgba(91, 127, 114, 0.1)',
                    fill: true,
                    tension: 0.4,
                    borderWidth: 2,
                    pointBackgroundColor: '#5B7F72',
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: { color: gridColor },
                        ticks: { color: textColor }
                    },
                    x: {
                        grid: { display: false },
                        ticks: { color: textColor }
                    }
                }
            }
        });
    }

    // Doughnut Chart
    const doughnutCtx = document.getElementById('doughnutChart');
    if (doughnutCtx) {
        new Chart(doughnutCtx, {
            type: 'doughnut',
            data: {
                labels: ['Admin', 'Editor', 'User'],
                datasets: [{
                    data: [12, 19, 69],
                    backgroundColor: ['#5B7F72', '#D4A65A', '#8FA89A'], // Primary, Warning, Secondary
                    borderWidth: 0,
                }]
            },
            options: {
                responsive: true,
                cutout: '70%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: { color: textColor, padding: 20, font: { family: 'Inter' } }
                    }
                }
            }
        });
    }
});