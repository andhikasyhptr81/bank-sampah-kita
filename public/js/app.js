// Hamburger menu toggle
const hamburger = document.getElementById('hamburger');
const navLinks  = document.querySelector('.nav-links');

if (hamburger && navLinks) {
    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('open');
    });
    // Close on nav link click
    navLinks.querySelectorAll('a').forEach(a => {
        a.addEventListener('click', () => navLinks.classList.remove('open'));
    });
}

// Smooth reveal on scroll
const revealEls = document.querySelectorAll(
    '.program-card, .price-row, .step-item, .stat-item'
);

const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
            entry.target.style.transition =
                `opacity 0.45s ease ${entry.target.dataset.delay || 0}ms,
                 transform 0.45s ease ${entry.target.dataset.delay || 0}ms`;
            entry.target.style.opacity  = '1';
            entry.target.style.transform = 'translateY(0)';
            revealObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.12 });

revealEls.forEach((el, i) => {
    el.style.opacity   = '0';
    el.style.transform = 'translateY(20px)';
    // Stagger per group
    const siblings = [...el.parentElement.children];
    el.dataset.delay = siblings.indexOf(el) * 90;
    revealObserver.observe(el);
});

// Navbar scroll shadow
const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    navbar.style.boxShadow = window.scrollY > 10
        ? '0 2px 16px rgba(0,0,0,0.08)'
        : 'none';
});
