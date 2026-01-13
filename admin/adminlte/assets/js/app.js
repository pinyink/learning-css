$(document).ready(function () {

    const animationSpeed = 200;
    const mobileBreakpoint = 992;

    function isMobile() {
        return $(window).width() < mobileBreakpoint;
    }

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

    // Toggle button
    $('#toggleSidebar').on('click', function () {
        if ($('#sidebar').hasClass('collapsed')) {
            openSidebar();
        } else {
            closeSidebar();
        }
    });

    // Klik overlay → tutup sidebar
    $('#sidebarOverlay').on('click', function () {
        closeSidebar();
    });

    // Responsive handler
    function handleResponsiveSidebar() {
        if (isMobile()) {
            closeSidebar();
        } else {
            $('#sidebar').removeClass('collapsed');
            $('#sidebarOverlay').hide();
        }
    }

    handleResponsiveSidebar();
    $(window).on('resize', handleResponsiveSidebar);

    // Treeview toggle (AMAN)
    $('.treeview-toggle').on('click', function (e) {
        e.preventDefault();

        let parent = $(this).parent('.treeview');
        $('.treeview-menu').stop(true, true);

        $('.treeview.open').not(parent).each(function () {
            $(this)
                .removeClass('open')
                .children('.treeview-menu')
                .slideUp(animationSpeed);
        });

        if (parent.hasClass('open')) {
            parent
                .removeClass('open')
                .children('.treeview-menu')
                .slideUp(animationSpeed);
        } else {
            parent
                .addClass('open')
                .children('.treeview-menu')
                .slideDown(animationSpeed);
        }
    });

    $('#userDropdownToggle').on('click', function (e) {
        e.stopPropagation();
        $('#userDropdown').toggleClass('show');
    });

    // Klik di luar → tutup
    $(document).on('click', function () {
        $('#userDropdown').removeClass('show');
    });

    // Klik di dalam dropdown tidak menutup
    $('#userDropdown').on('click', function (e) {
        e.stopPropagation();
    });

    $('#notifToggle').on('click', function (e) {
        e.stopPropagation();
        $('#notifDropdown').toggleClass('show');
        $('#userDropdown').removeClass('show');
    });

    $(document).on('click', function () {
        $('#notifDropdown').removeClass('show');
        $('#userDropdown').removeClass('show');
    });

    $('#notifDropdown').on('click', function (e) {
        e.stopPropagation();
    });

});

// =======================
// DARK MODE TOGGLE
// =======================
const themeToggle = $('#themeToggle');
const html = $('html');

function setTheme(theme) {
    html.addClass('theme-transition');

    html.attr('data-theme', theme);
    localStorage.setItem('theme', theme);

    themeToggle.find('i')
        .toggleClass('bi-moon', theme === 'light')
        .toggleClass('bi-sun', theme === 'dark');

    // Remove class after animation
    setTimeout(() => {
        html.removeClass('theme-transition');
    }, 300);
}


// Load theme
const savedTheme = localStorage.getItem('theme') || 'light';
setTheme(savedTheme);

// Toggle
themeToggle.on('click', function () {
    const current = html.attr('data-theme');
    setTheme(current === 'dark' ? 'light' : 'dark');
});