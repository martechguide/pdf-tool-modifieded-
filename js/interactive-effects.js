// Interactive Effects JavaScript

document.addEventListener('DOMContentLoaded', function() {

    // Add loading screen
    const loadingOverlay = document.createElement('div');
    loadingOverlay.className = 'loading-overlay';
    loadingOverlay.innerHTML = '<div class="loader"></div>';
    document.body.appendChild(loadingOverlay);

    // Hide loading screen after page loads
    window.addEventListener('load', function() {
        setTimeout(() => {
            loadingOverlay.classList.add('hidden');
            setTimeout(() => {
                loadingOverlay.remove();
            }, 500);
        }, 1000);
    });

    // Reveal animations on scroll
    const revealElements = document.querySelectorAll('.reveal, .tools__item, .infounit');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                entry.target.style.animationDelay = '0s';
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => {
        el.classList.add('reveal');
        revealObserver.observe(el);
    });

    // Add interactive classes to buttons
    const buttons = document.querySelectorAll('.btn, button');
    buttons.forEach(btn => {
        btn.classList.add('btn-interactive', 'ripple', 'magnetic');
    });

    // Add page transition effect
    document.body.classList.add('page-transition');

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add floating action button
    const fab = document.createElement('a');
    fab.href = '#';
    fab.className = 'fab';
    fab.innerHTML = '↑';
    fab.title = 'Back to Top';
    fab.style.display = 'none';
    document.body.appendChild(fab);

    // Show/hide FAB based on scroll position
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            fab.style.display = 'flex';
        } else {
            fab.style.display = 'none';
        }
    });

    fab.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Add magnetic effect to interactive elements
    document.querySelectorAll('.magnetic').forEach(el => {
        el.addEventListener('mouseenter', function() {
            this.style.transition = 'transform 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
        });

        el.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            this.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px) scale(1.05)`;
        });

        el.addEventListener('mouseleave', function() {
            this.style.transform = 'translate(0px, 0px) scale(1)';
        });
    });

    // Add parallax effect to hero section
    const hero = document.querySelector('.bg-main-1');
    if (hero) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallax = scrolled * 0.5;
            hero.style.transform = `translateY(${parallax}px)`;
        });
    }

    // Add typing effect to main title
    const typingElement = document.querySelector('.typing-animation');
    if (typingElement) {
        const text = typingElement.textContent;
        typingElement.textContent = '';

        setTimeout(() => {
            let i = 0;
            const typeInterval = setInterval(() => {
                if (i < text.length) {
                    typingElement.textContent += text.charAt(i);
                    i++;
                } else {
                    clearInterval(typeInterval);
                    typingElement.classList.add('glow-text');
                }
            }, 100);
        }, 1500);
    }

    // Add hover sound effects (optional)
    const hoverSound = new Audio('data:audio/wav;base64,UklGRnoGAABXQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+L');

    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            // Uncomment if you want sound effects
            // hoverSound.currentTime = 0;
            // hoverSound.play().catch(() => {});
        });
    });

    // Initialize animations for tools
    const tools = document.querySelectorAll('.tools__item');
    tools.forEach((tool, index) => {
        tool.style.animationDelay = `${index * 0.1}s`;

        // Add click effect
        tool.addEventListener('click', function() {
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
        });
    });

    // Add dynamic gradient background
    const gradientBg = document.querySelector('.bg-main-1');
    if (gradientBg) {
        let gradientAngle = 135;
        setInterval(() => {
            gradientAngle += 1;
            if (gradientAngle > 225) gradientAngle = 135;
            gradientBg.style.background = `linear-gradient(${gradientAngle}deg, #E5322D 0%, #ff6b35 50%, #E5322D 100%)`;
        }, 100);
    }
});

// Performance optimization: Debounce scroll events
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Apply debounce to scroll events
const debouncedScroll = debounce(() => {
    // Scroll-based animations here
}, 10);

window.addEventListener('scroll', debouncedScroll);

// Interactive Effects for PDF HUB
document.addEventListener('DOMContentLoaded', function() {
    // Fixed JavaScript - ensure all functions have proper syntax
    console.log('Interactive effects loaded');

    // Add smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add hover effects for tool items
    document.querySelectorAll('.tools__item').forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0 10px 25px rgba(28, 98, 230, 0.2)';
        });

        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
        });
    });

    // Add loading animation
    window.addEventListener('load', function() {
        const loader = document.querySelector('.loading-overlay');
        if (loader) {
            loader.classList.add('hidden');
        }
    });
});

// Interactive effects for website elements
document.addEventListener('DOMContentLoaded', function() {
    // Add smooth scroll for navigation links
    const navLinks = document.querySelectorAll('a[href^="#"]');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add hover effects to cards
    const cards = document.querySelectorAll('.stat-card, .tools__item');

    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.2)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '';
        });
    });
});

// Icon positioning controller
function adjustIconPositions() {
    const icons = document.querySelectorAll('.file-icon, .tools__item__icon');
    const backgroundTexts = document.querySelectorAll('.background-text, .tools__item h3');

    icons.forEach((icon, index) => {
        // Ensure icons are properly positioned
        icon.style.position = 'relative';
        icon.style.zIndex = '10';
        icon.style.display = 'block';
    });

    backgroundTexts.forEach((text, index) => {
        // Ensure background text is visible
        text.style.position = 'relative';
        text.style.zIndex = '5';
        text.style.opacity = '1';
    });
}

// Call positioning function when page loads
document.addEventListener('DOMContentLoaded', adjustIconPositions);