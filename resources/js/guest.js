import * as bootstrap from 'bootstrap';

/**
 * Smooth scroll for anchor links with offset for fixed navbar
 */
document.addEventListener('DOMContentLoaded', () => {
    const NAVBAR_OFFSET = 80;

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const offsetTop = target.getBoundingClientRect().top + window.pageYOffset - NAVBAR_OFFSET;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth',
                });
                // Close mobile navbar when link is clicked
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                    const bsCollapse = bootstrap.Collapse?.getInstance(navbarCollapse);
                    if (bsCollapse) bsCollapse.hide();
                }
            }
        });
    });

    /**
     * Active nav link based on scroll position
     */
    const sections = document.querySelectorAll('section[id], footer[id]');
    if (sections.length > 0) {
        const navLinks = document.querySelectorAll('.navbar .nav-link[data-section], .navbar .nav-link.dropdown-toggle');
        const dropdownItems = document.querySelectorAll('.navbar .nav-link-dropdown');

        function updateActiveNav() {
            let currentSection = '';
            const scrollY = window.pageYOffset + NAVBAR_OFFSET;

            sections.forEach((section) => {
                const id = section.getAttribute('id');
                if (!id) return;
                const top = section.offsetTop;
                const height = section.offsetHeight;
                if (scrollY >= top && scrollY < top + height) {
                    currentSection = id;
                }
            });

            if (scrollY < 150) {
                currentSection = currentSection || 'home';
            }

            navLinks.forEach((link) => {
                const section = link.getAttribute('data-section') || link.getAttribute('data-nav-section');
                if (!section) return;

                let isActive = false;
                if (section === 'home') {
                    isActive = ['home', 'home-2'].includes(currentSection);
                } else {
                    isActive = section === currentSection;
                }
                link.classList.toggle('active', isActive);
            });

            dropdownItems.forEach((item) => {
                const section = item.getAttribute('data-section');
                if (section) {
                    item.classList.toggle('active', section === currentSection);
                }
            });
        }

        window.addEventListener('scroll', updateActiveNav);
        updateActiveNav();
    }

    /**
     * Scroll to top button
     */
    const scrollToTopBtn = document.getElementById('scrollToTop');
    if (scrollToTopBtn) {
        window.addEventListener('scroll', () => {
            scrollToTopBtn.classList.toggle('show', window.pageYOffset > 300);
        });

        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
});
