<div id="post-header" class="post-header"></div>

<div class="modern-hero">
    <div class="hero-background">
        <div class="gradient-overlay"></div>
    </div>

    <div class="container hero-container">
        <div class="row align-items-center min-vh-70">
            <!-- Left Side (Text Content) -->
            <div class="col-lg-6 col-md-6 hero-content">
                <div class="content-wrapper">
                    <div class="hero-badge">
                        <span class="badge-icon">🚀</span>
                        <span>Trusted by 1M+ Users Worldwide</span>
                    </div>

                    <h1 class="hero-title">
                        <span class="brand-highlight">PDF HUB</span><br>
                        <span class="title-main">All-in-One</span><br>
                        <span class="title-gradient">Online PDF Tools</span>
                    </h1>

                    <p class="hero-description">
                        Every tool you need to use PDFs, at your fingertips. All are 100% FREE and easy to use! 
                        <strong>Merge, split, compress, convert, rotate, unlock and watermark PDFs</strong> with just a few clicks.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="hero-cta">
                        <a href="#pdf-tools" class="btn btn-primary btn-lg">
                            <i class="ico ico--tools"></i>
                            Start Converting Now
                        </a>
                        <a href="/about" class="btn btn-outline btn-lg">
                            Learn More
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="trust-indicators">
                        <div class="trust-item">
                            <span class="trust-icon">🔒</span>
                            <span>100% Secure</span>
                        </div>
                        <div class="trust-item">
                            <span class="trust-icon">⚡</span>
                            <span>Lightning Fast</span>
                        </div>
                        <div class="trust-item">
                            <span class="trust-icon">🆓</span>
                            <span>Always Free</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side (Stats Only) -->
            <div class="col-lg-6 col-md-6 hero-visual">
                <div class="visual-container">
                    <!-- Stats Cards Only -->
                    <div class="stats-grid-center">
                        <div class="stat-card animate-counter">
                            <div class="stat-number" data-count="100">0</div>
                            <div class="stat-label">Tools Available</div>
                        </div>
                        <div class="stat-card animate-counter">
                            <div class="stat-number" data-count="100">0</div>
                            <div class="stat-label">% Free</div>
                        </div>
                        <div class="stat-card animate-counter">
                            <div class="stat-number" data-count="1000000">0</div>
                            <div class="stat-label">Files Processed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Modern Hero Styles */
.modern-hero {
    position: relative;
    min-height: 80vh;
    display: flex;
    align-items: center;
    overflow: hidden;
    background: linear-gradient(135deg, #1c62e6 0%, #2d73ff 50%, #1c62e6 100%);
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
}

.gradient-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(28, 98, 230, 0.9) 0%, rgba(45, 115, 255, 0.8) 100%);
}



.hero-container {
    position: relative;
    z-index: 10;
    padding: 80px 0;
}

.min-vh-70 {
    min-height: 70vh;
}

/* Hero Content */
.hero-content {
    color: white;
    padding-right: 30px;
}

.content-wrapper {
    max-width: 600px;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 50px;
    padding: 12px 20px;
    margin-bottom: 25px;
    font-size: 0.9rem;
    font-weight: 500;
    animation: fadeInUp 0.8s ease-out;
}

.badge-icon {
    margin-right: 10px;
    font-size: 1.2rem;
}

.hero-title {
    font-family: "Poppins", sans-serif;
    font-weight: 800;
    font-size: clamp(2.5rem, 5vw, 4rem);
    line-height: 1.1;
    margin-bottom: 25px;
    animation: fadeInUp 0.8s ease-out 0.2s both;
}

.brand-highlight {
    color: #ffeb3b;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.title-main {
    color: white;
    display: block;
}

.title-gradient {
    background: linear-gradient(45deg, #fff, #ffeb3b, #fff);
    background-size: 200% 200%;
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textShine 3s ease-in-out infinite;
    display: block;
}

@keyframes textShine {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.hero-description {
    font-size: 1.2rem;
    line-height: 1.6;
    margin-bottom: 35px;
    color: rgba(255, 255, 255, 0.95);
    animation: fadeInUp 0.8s ease-out 0.4s both;
}

.hero-description strong {
    color: #ffeb3b;
    font-weight: 600;
}

/* CTA Buttons */
.hero-cta {
    display: flex;
    gap: 15px;
    margin-bottom: 40px;
    flex-wrap: wrap;
    animation: fadeInUp 0.8s ease-out 0.6s both;
}

.btn {
    display: inline-flex;
    align-items: center;
    padding: 15px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: 2px solid transparent;
    position: relative;
    overflow: hidden;
}

.btn-primary {
    background: white;
    color: #1c62e6;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.btn-primary:hover {
    background: #ffeb3b;
    color: #1c62e6;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    text-decoration: none;
}

.btn-outline {
    background: transparent;
    color: white;
    border-color: rgba(255, 255, 255, 0.3);
}

.btn-outline:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
    color: white;
    text-decoration: none;
}

.btn i {
    margin-right: 8px;
    font-size: 1.1rem;
}

/* Trust Indicators */
.trust-indicators {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    animation: fadeInUp 0.8s ease-out 0.8s both;
}

.trust-item {
    display: flex;
    align-items: center;
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.9rem;
    font-weight: 500;
}

.trust-icon {
    margin-right: 8px;
    font-size: 1.2rem;
}

/* Hero Visual */
.hero-visual {
    position: relative;
}

.visual-container {
    position: relative;
    height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
}



/* Stats Grid Centered */
.stats-grid-center {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    align-content: center;
    justify-content: center;
    max-width: 400px;
    margin: 0 auto;
    padding: 40px 0;
}

.stat-card {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    padding: 25px 20px;
    text-align: center;
    color: white;
    transition: all 0.3s ease;
    animation: fadeInScale 0.8s ease-out;
}

.stat-card:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.stat-card:nth-child(3) {
    grid-column: 1 / -1;
    max-width: 250px;
    margin: 0 auto;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: #ffeb3b;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    display: block;
    margin-bottom: 5px;
}

.stat-label {
    font-size: 0.9rem;
    opacity: 0.9;
    font-weight: 500;
}



/* Animations */
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInScale {
    from { opacity: 0; transform: scale(0.8); }
    to { opacity: 1; transform: scale(1); }
}

/* Responsive Design */
@media (max-width: 992px) {
    .hero-content {
        padding-right: 15px;
        margin-bottom: 40px;
    }

    .visual-container {
        height: auto;
        padding: 20px 0;
    }

    .stats-grid-center {
        max-width: 350px;
    }
}

@media (max-width: 768px) {
    .modern-hero {
        min-height: 70vh;
    }

    .hero-container {
        padding: 60px 0;
    }

    .hero-title {
        font-size: 2.5rem;
    }

    .hero-description {
        font-size: 1.1rem;
    }

    .hero-cta {
        flex-direction: column;
        align-items: flex-start;
    }

    .btn {
        padding: 12px 25px;
        font-size: 0.95rem;
    }

    .trust-indicators {
        gap: 20px;
    }

    .visual-container {
        height: auto;
        margin-top: 30px;
        padding: 20px 0;
    }

    .stats-grid-center {
        gap: 15px;
        max-width: 300px;
    }

    .stat-card {
        padding: 20px 15px;
    }

    .stat-number {
        font-size: 2rem;
    }
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 2rem;
    }

    .hero-description {
        font-size: 1rem;
    }

    .visual-container {
        height: auto;
        padding: 15px 0;
    }

    .stats-grid-center {
        grid-template-columns: 1fr;
        gap: 10px;
        max-width: 250px;
    }
}
</style>

<script>
// Counter Animation
function animateCounter(element) {
    const target = parseInt(element.dataset.count);
    const duration = 2000;
    const step = target / (duration / 16);
    let current = 0;

    const timer = setInterval(() => {
        current += step;
        if (current >= target) {
            current = target;
            clearInterval(timer);
        }

        if (target >= 1000000) {
            element.textContent = (current / 1000000).toFixed(1) + 'M+';
        } else if (target >= 1000) {
            element.textContent = (current / 1000).toFixed(0) + 'K+';
        } else {
            element.textContent = Math.floor(current) + (target === 100 ? '' : '+');
        }
    }, 16);
}

// Initialize animations when page loads
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.stat-number[data-count]');

    const observerOptions = {
        threshold: 0.5
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));

    // Smooth scroll for CTA button
    const ctaButton = document.querySelector('a[href="#pdf-tools"]');
    if (ctaButton) {
        ctaButton.addEventListener('click', function(e) {
            e.preventDefault();
            const targetSection = document.querySelector('.tools') || document.querySelector('#pdf-tools');
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }
});
</script>