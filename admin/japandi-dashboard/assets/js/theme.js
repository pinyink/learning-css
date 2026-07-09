// theme.js
(function() {
    const htmlElement = document.documentElement;
    const themeToggleBtn = document.getElementById('themeToggle');

    // Cek preferensi tersimpan di Local Storage
    const savedTheme = localStorage.getItem('theme') || 'light';
    htmlElement.setAttribute('data-bs-theme', savedTheme);
    updateThemeIcon(savedTheme);

    // Event listener untuk tombol toggle
    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', function() {
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            
            htmlElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateThemeIcon(newTheme);
        });
    }

    function updateThemeIcon(theme) {
        if (themeToggleBtn) {
            const icon = themeToggleBtn.querySelector('i');
            if (theme === 'dark') {
                icon.classList.remove('bi-moon-stars-fill');
                icon.classList.add('bi-sun-fill');
            } else {
                icon.classList.remove('bi-sun-fill');
                icon.classList.add('bi-moon-stars-fill');
            }
        }
    }
})();