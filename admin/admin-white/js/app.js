// Sidebar toggle
function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('show');
    document.getElementById('sidebarOverlay').classList.toggle('show');
}

// Dropdown panels (inbox / notifications)
function toggleDropdown(e, id) {
    e.stopPropagation();
    const el = document.getElementById(id);
    if (!el) return;
    const isOpen = el.classList.contains('show');
    // close all panels
    document.querySelectorAll('.dropdown-panel').forEach(p => p.classList.remove('show'));
    if (!isOpen) el.classList.add('show');
}
// Profile dropdown
function toggleProfileDropdown(e) {
    e.stopPropagation();
    document.getElementById('profileDropdown').classList.toggle('show');
}
document.addEventListener('click', function() {
    document.querySelectorAll('.dropdown-panel').forEach(p => p.classList.remove('show'));
    const dd = document.getElementById('profileDropdown');
    if (dd) dd.classList.remove('show');
});

// Mini Donut
new Chart(document.getElementById('miniDonut'), {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [75, 25],
            backgroundColor: ['#007BFF', '#e9ecef'],
            borderWidth: 0
        }]
    },
    options: {
        responsive: true, maintainAspectRatio: false,
        cutout: '70%',
        plugins: { legend: { display: false }, tooltip: { enabled: false } }
    }
});

// Analytics Area Chart
const analyticsCtx = document.getElementById('analyticsChart').getContext('2d');
const gradient = analyticsCtx.createLinearGradient(0, 0, 0, 260);
gradient.addColorStop(0, 'rgba(0,123,255,0.25)');
gradient.addColorStop(1, 'rgba(0,123,255,0.01)');

new Chart(analyticsCtx, {
    type: 'line',
    data: {
        labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug'],
        datasets: [{
            label: 'Revenue',
            data: [2800, 3200, 2900, 3800, 4500, 4100, 4800, 5200],
            borderColor: '#007BFF',
            backgroundColor: gradient,
            fill: true,
            tension: 0.4,
            pointBackgroundColor: '#007BFF',
            pointBorderColor: '#fff',
            pointBorderWidth: 2,
            pointRadius: 5,
            pointHoverRadius: 7
        }]
    },
    options: {
        responsive: true, maintainAspectRatio: false,
        plugins: {
            legend: { display: false },
            tooltip: {
                backgroundColor: '#007BFF',
                titleFont: { family: 'Inter', size: 12 },
                bodyFont: { family: 'Inter', size: 12 },
                padding: 10,
                cornerRadius: 8,
                callbacks: {
                    label: ctx => '+19% — $' + ctx.parsed.y.toLocaleString()
                }
            }
        },
        scales: {
            x: {
                grid: { display: false },
                ticks: { font: { family: 'Inter', size: 11 }, color: '#adb5bd' }
            },
            y: {
                grid: { color: '#f0f0f0' },
                ticks: {
                    font: { family: 'Inter', size: 11 }, color: '#adb5bd',
                    callback: v => '$' + (v/1000).toFixed(0) + 'K'
                },
                min: 0, max: 6000
            }
        }
    }
});

// Performance Gauge (half doughnut)
const gaugeCtx = document.getElementById('performanceGauge').getContext('2d');
new Chart(gaugeCtx, {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [17.9, 82.1],
            backgroundColor: ['#007BFF', '#e9ecef'],
            borderWidth: 0
        }]
    },
    options: {
        responsive: true, maintainAspectRatio: false,
        rotation: -90,
        circumference: 180,
        cutout: '75%',
        plugins: { legend: { display: false }, tooltip: { enabled: false } }
    }
});

// Heatmap
const heatmapData = [
    [2,1,0,3,4,5,3,2,1,0,2,3],
    [1,0,1,2,4,5,4,3,2,1,1,2],
    [0,1,2,3,5,4,3,2,1,0,0,1]
];
const levels = ['','l1','l2','l3','l4','l5'];
const days = ['Mon','Tue','Wed'];
const grid = document.getElementById('heatmapGrid');
days.forEach((day, di) => {
    const row = document.createElement('div');
    row.className = 'd-flex mb-1';
    row.innerHTML = `<div class="heatmap-label" style="width:32px;line-height:22px;">${day}</div>`;
    const cells = document.createElement('div');
    cells.className = 'heatmap';
    cells.style.flex = '1';
    heatmapData[di].forEach(v => {
        const cell = document.createElement('div');
        cell.className = 'heatmap-cell ' + (levels[v] || '');
        cells.appendChild(cell);
    });
    row.appendChild(cells);
    grid.appendChild(row);
});