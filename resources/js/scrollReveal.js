function initReveals() {
    var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var hasObserver = 'IntersectionObserver' in window;

    var elements = document.querySelectorAll('.reveal:not(.visible)');

    if (prefersReduced || !hasObserver) {
        elements.forEach(function (el) {
            el.classList.add('visible');
        });
        return;
    }

    elements.forEach(function (el) {
        el.classList.add('reveal-pending');
    });

    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.remove('reveal-pending');
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    elements.forEach(function (el) {
        observer.observe(el);
    });
}

document.addEventListener('DOMContentLoaded', function () {
    initReveals();
});

window.initReveals = initReveals;
