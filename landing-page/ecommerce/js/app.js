// ── Clone desktop filter to mobile offcanvas ──
document.addEventListener('DOMContentLoaded', function () {
    var desktopFilter = document.getElementById('filterDesktop');
    var mobileContent = document.getElementById('mobileFilterContent');
    if (desktopFilter && mobileContent) {
        var clone = desktopFilter.cloneNode(true);
        clone.id = 'mobileFilterClone';
        clone.classList.remove('desktop');
        // Remove any IDs inside to avoid duplicates
        clone.querySelectorAll('[id]').forEach(function (el) {
            el.id = 'm_' + el.id;
        });
        mobileContent.appendChild(clone);
    }

    // ── Price range display ──
    var priceRange = document.getElementById('priceRange');
    if (priceRange) {
        priceRange.addEventListener('input', function () {
            var val = this.value;
            var minText = this.closest('.filter-group').querySelector('.price-range-value:first-child');
            var maxText = this.closest('.filter-group').querySelector('.price-range-value:last-child');
            if (minText) minText.textContent = 'Rp ' + (val * 500000).toLocaleString('id-ID');
            if (maxText) maxText.textContent = 'Rp ' + (50e6).toLocaleString('id-ID');
        });
    }

    // ── Color swatch click ──
    document.querySelectorAll('.color-swatch').forEach(function (swatch) {
        swatch.addEventListener('click', function () {
            this.classList.toggle('active');
        });
    });
});