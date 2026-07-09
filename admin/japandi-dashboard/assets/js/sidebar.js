// sidebar.js
 $(document).ready(function() {
    const sidebar = $('#sidebar');
    const mainContent = $('#mainContent');
    const toggleBtn = $('#sidebarToggle');

    toggleBtn.on('click', function() {
        if ($(window).width() < 992) {
            // Mobile behavior (Offcanvas)
            sidebar.toggleClass('show');
        } else {
            // Desktop behavior (Mini sidebar)
            sidebar.toggleClass('mini');
            mainContent.toggleClass('expanded');
        }
    });

    // Tutup sidebar mobile saat klik di luar
    $(document).on('click', function(e) {
        if ($(window).width() < 992) {
            if (!$(e.target).closest('#sidebar').length && !$(e.target).closest('#sidebarToggle').length) {
                sidebar.removeClass('show');
            }
        }
    });
});