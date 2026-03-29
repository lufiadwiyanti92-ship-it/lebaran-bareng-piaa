// Active Navbar on Scroll
document.addEventListener('DOMContentLoaded', function() {
    // Navbar background change on scroll
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('mainNavbar');
        if (window.scrollY > 100) {
            navbar.style.background = 'rgba(255, 255, 255, 0.98)';
            navbar.style.boxShadow = '0 5px 20px rgba(0,0,0,0.1)';
        } else {
            navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            navbar.style.boxShadow = '0 10px 30px rgba(0,0,0,0.1)';
        }
    });
    
    // Smooth scroll for all anchor links
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
    
    // Add loading animation
    const photo = document.querySelector('.profile-photo');
    if (photo) {
        photo.addEventListener('load', function() {
            this.style.opacity = '1';
        });
    }
    
    // Moment card click handler
    const momentCards = document.querySelectorAll('.moment-card');
    momentCards.forEach(card => {
        card.addEventListener('click', function() {
            const title = this.querySelector('h5').innerText;
            const description = this.querySelector('p').innerText;
            alert(`📸 ${title}\n\n${description}\n\nSelamat Hari Raya! ✨`);
        });
    });
    
    // Add hover effect for buttons
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Parallax effect for hero section
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.hero-section');
        if (hero) {
            hero.style.backgroundPositionY = scrolled * 0.5 + 'px';
        }
    });
    
    // Add floating animation for section icons
    const sectionIcons = document.querySelectorAll('.section-icon');
    sectionIcons.forEach(icon => {
        setInterval(() => {
            icon.style.transform = 'scale(1.1)';
            setTimeout(() => {
                icon.style.transform = 'scale(1)';
            }, 300);
        }, 3000);
    });
    
    // Initialize tooltips if any
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Handle image errors
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        img.addEventListener('error', function() {
            console.log('Image failed to load:', this.src);
            this.src = 'https://via.placeholder.com/400?text=Image+Not+Found';
        });
    });

    // Auto play video
const videos = document.querySelectorAll('.video-momen');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.play();
        } else {
            entry.target.pause();
        }
    });
}, { threshold: 0.6 });

videos.forEach(video => {
    observer.observe(video);
});
});

// Add scroll progress indicator
window.addEventListener('scroll', () => {
    const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = (winScroll / height) * 100;
    
    let progressBar = document.querySelector('.scroll-progress');
    if (!progressBar && scrolled > 0) {
        progressBar = document.createElement('div');
        progressBar.className = 'scroll-progress';
        progressBar.style.position = 'fixed';
        progressBar.style.top = '0';
        progressBar.style.left = '0';
        progressBar.style.width = '0%';
        progressBar.style.height = '3px';
        progressBar.style.background = 'linear-gradient(90deg, #4CAF50, #FFC107)';
        progressBar.style.zIndex = '9999';
        document.body.appendChild(progressBar);
    }
    
    if (progressBar) {
        progressBar.style.width = scrolled + '%';
    }
});

// Add to home screen prompt for mobile
let deferredPrompt;
window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredPrompt = e;
    
    // Show install button if needed
    const installBtn = document.createElement('button');
    installBtn.innerText = 'Install App';
    installBtn.className = 'btn-install-app';
    installBtn.style.position = 'fixed';
    installBtn.style.bottom = '20px';
    installBtn.style.right = '20px';
    installBtn.style.zIndex = '9999';
    installBtn.style.backgroundColor = '#4CAF50';
    installBtn.style.color = 'white';
    installBtn.style.border = 'none';
    installBtn.style.borderRadius = '50px';
    installBtn.style.padding = '10px 20px';
    installBtn.style.cursor = 'pointer';
    installBtn.style.boxShadow = '0 5px 15px rgba(0,0,0,0.2)';
    
    installBtn.addEventListener('click', () => {
        deferredPrompt.prompt();
        deferredPrompt.userChoice.then((choiceResult) => {
            if (choiceResult.outcome === 'accepted') {
                console.log('User accepted the install prompt');
            }
            deferredPrompt = null;
            installBtn.remove();
        });
    });
    
    setTimeout(() => {
        if (deferredPrompt) {
            document.body.appendChild(installBtn);
        }
    }, 5000);
});

