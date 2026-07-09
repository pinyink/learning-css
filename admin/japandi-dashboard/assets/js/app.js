// app.js
// File ini untuk inisialisasi plugin tambahan seperti Select2, Datepicker, dll
document.addEventListener('DOMContentLoaded', function() {
    console.log("Japandi Dashboard Loaded Successfully.");
    
    // Initialize Tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });
});