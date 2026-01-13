/* =========================================================
   GLOBAL VARIABLE
========================================================= */
let visitorChart;
let userChart;

const animationSpeed = 200;
const mobileBreakpoint = 992;

/* =========================================================
   HELPER
========================================================= */
function isMobile() {
    return $(window).width() < mobileBreakpoint;
}

function cssVar(name) {
    return getComputedStyle(document.documentElement)
        .getPropertyValue(name)
        .trim();
}

/* =========================================================
   SIDEBAR
========================================================= */
function closeSidebar() {
    $('#sidebar').addClass('collapsed');
    $('#sidebarOverlay').fadeOut(200);

    $('.treeview.open')
        .removeClass('open')
        .children('.treeview-menu')
        .hide();
}

function openSidebar() {
    $('#sidebar').removeClass('collapsed');

    if (isMobile()) {
        $('#sidebarOverlay').fadeIn(200);
    }
}

function handleResponsiveSidebar() {
    if (isMobile()) {
        closeSidebar();
    } else {
        $('#sidebar').removeClass('collapsed');
        $('#sidebarOverlay').hide();
    }
}

/* =========================================================
   CHART THEME UPDATE
========================================================= */
function updateChartsTheme() {
    if (!visitorChart || !userChart) return;

    visitorChart.options.scales.x.ticks.color = cssVar('--color-text-muted');
    visitorChart.options.scales.y.ticks.color = cssVar('--color-text-muted');
    visitorChart.options.scales.y.grid.color = cssVar('--color-border');
    visitorChart.update();

    userChart.options.plugins.legend.labels.color = cssVar('--color-text');
    userChart.update();
}

/* =========================================================
   DARK MODE
========================================================= */
const themeToggle = $('#themeToggle');
const html = $('html');

function setTheme(theme) {
    html.addClass('theme-transition');

    html.attr('data-theme', theme);
    localStorage.setItem('theme', theme);

    themeToggle.find('i')
        .toggleClass('bi-moon', theme === 'light')
        .toggleClass('bi-sun', theme === 'dark');

    setTimeout(() => {
        html.removeClass('theme-transition');
    }, 300);

    updateChartsTheme();
}

/* =========================================================
   COUNT UP
========================================================= */
function animateCountUp(el) {
    const target = parseInt(el.dataset.count, 10);
    const duration = parseInt(el.dataset.duration || 1000, 10);
    const startTime = performance.now();

    function easeOutCubic(t) {
        return 1 - Math.pow(1 - t, 3);
    }

    function update(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const eased = easeOutCubic(progress);

        el.textContent = Math.floor(eased * target).toLocaleString();

        if (progress < 1) {
            requestAnimationFrame(update);
        } else {
            el.textContent = target.toLocaleString();
        }
    }

    requestAnimationFrame(update);
}

/* =========================================================
   DOCUMENT READY
========================================================= */
$(document).ready(function () {

    handleResponsiveSidebar();
    $(window).on('resize', handleResponsiveSidebar);

    // Toggle sidebar
    $('#toggleSidebar').on('click', function () {
        $('#sidebar').hasClass('collapsed') ?
            openSidebar() :
            closeSidebar();
    });

    $('#sidebarOverlay').on('click', closeSidebar);

    // Treeview
    $('.treeview-toggle').on('click', function (e) {
        e.preventDefault();

        const parent = $(this).parent('.treeview');

        $('.treeview.open').not(parent).each(function () {
            $(this)
                .removeClass('open')
                .children('.treeview-menu')
                .slideUp(animationSpeed);
        });

        parent.toggleClass('open')
            .children('.treeview-menu')
            .slideToggle(animationSpeed);
    });

    // User dropdown
    $('#userDropdownToggle').on('click', function (e) {
        e.stopPropagation();
        $('#userDropdown').toggleClass('show');
        $('#notifDropdown').removeClass('show');
    });

    // Notification dropdown
    $('#notifToggle').on('click', function (e) {
        e.stopPropagation();
        $('#notifDropdown').toggleClass('show');
        $('#userDropdown').removeClass('show');
    });

    // Click outside
    $(document).on('click', function () {
        $('#userDropdown, #notifDropdown').removeClass('show');
    });

    $('#userDropdown, #notifDropdown').on('click', function (e) {
        e.stopPropagation();
    });

    // Count up
    document.querySelectorAll('.stat-value[data-count]')
        .forEach(el => animateCountUp(el));

});

/* =========================================================
   LOAD THEME
========================================================= */
const savedTheme = localStorage.getItem('theme') || 'light';
setTheme(savedTheme);

themeToggle.on('click', function () {
    setTheme(html.attr('data-theme') === 'dark' ? 'light' : 'dark');
});

/* =========================================================
   CHART INIT
========================================================= */
visitorChart = new Chart(
    document.getElementById('visitorChart'), {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                data: [120, 190, 150, 220, 280, 240, 300],
                borderColor: cssVar('--color-primary'),
                backgroundColor: cssVar('--color-primary-soft'),
                fill: true,
                tension: 0.4,
                pointRadius: 4
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                x: {
                    ticks: {
                        color: cssVar('--color-text-muted')
                    }
                },
                y: {
                    ticks: {
                        color: cssVar('--color-text-muted')
                    },
                    grid: {
                        color: cssVar('--color-border')
                    }
                }
            }
        }
    }
);

userChart = new Chart(
    document.getElementById('userChart'), {
        type: 'doughnut',
        data: {
            labels: ['Admin', 'Editor', 'User'],
            datasets: [{
                data: [5, 12, 83],
                backgroundColor: [
                    cssVar('--color-primary'),
                    '#22c55e',
                    '#f59e0b'
                ],
                borderWidth: 0
            }]
        },
        options: {
            cutout: '70%',
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        color: cssVar('--color-text'),
                        padding: 12
                    }
                }
            }
        }
    }
);

updateChartsTheme();