document.addEventListener('DOMContentLoaded', function() {
    // Initialize pie chart for cropping patterns
    const ctx = document.getElementById('cropPatternChart').getContext('2d');
    const cropPatternChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Wheat', 'Corn', 'Soybeans', 'Cotton', 'Other'],
            datasets: [{
                data: [25, 30, 20, 15, 10],
                backgroundColor: [
                    '#28a745',
                    '#ffc107',
                    '#fd7e14',
                    '#17a2b8',
                    '#6c757d'
                ],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right',
                    labels: {
                        boxWidth: 12,
                        padding: 20,
                        font: {
                            size: 14
                        }
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.label + ': ' + context.raw + '%';
                        }
                    }
                }
            }
        }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});