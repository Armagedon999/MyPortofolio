import './bootstrap';

// Theme toggle functionality
const themeToggleBtn = document.querySelector('.theme-controller');
const html = document.documentElement;

if (themeToggleBtn) {
    // Cek tema tersimpan
    const savedTheme = localStorage.getItem('theme') || 'light';
    html.setAttribute('data-theme', savedTheme);
    themeToggleBtn.checked = savedTheme === 'dark';

    // Event untuk toggle theme
    themeToggleBtn.addEventListener('change', (e) => {
        const theme = e.target.checked ? 'dark' : 'light';
        html.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
    });
}

// Smooth scroll untuk link anchor #
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});
