// ចាប់ link ទាំងអស់ដែលមាន class "nav-link"
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // បញ្ឈប់ hash មិនឲ្យបង្ហាញ
        
        // យក id ពី href (ដក # ចេញ)
        const targetId = this.getAttribute('href').slice(1);
        const target = document.getElementById(targetId);
        
        // Scroll ទៅ section
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
        
        // លុបតែសញ្ញា # ចេញ រក្សាឈ្មោះដែលនៅក្រោយ
        const currentUrl = window.location.href;
        const cleanUrl = currentUrl.replace('#', '');
        history.pushState({}, document.title, cleanUrl);
    });
});

// Function to handle active class on scroll
// Function to handle active class on scroll
function setActiveNavOnScroll() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    const scrollPosition = window.scrollY + 100; // Offset for navbar height

    // Check if we're at the top of the page (Home)
    if (scrollPosition < 200) { // Adjust this threshold as needed
        navLinks.forEach(link => link.classList.remove('active'));
        document.querySelector('.nav-link[href="#home"]').classList.add('active');
        return; // Exit the function early since we're at the top
    }

    // Check sections (necklacemen, necklacewomen)
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        const sectionId = section.getAttribute('id');

        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            navLinks.forEach(link => link.classList.remove('active'));
            const activeLink = document.querySelector(`.nav-link[href="#${sectionId}"]`);
            if (activeLink) {
                activeLink.classList.add('active');
            }
        }
    });
}

// Add scroll event listener
window.addEventListener('scroll', setActiveNavOnScroll);

// Call the function initially to set the active link on page load
document.addEventListener('DOMContentLoaded', setActiveNavOnScroll);

// Smooth scroll behavior
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();

        const targetId = this.getAttribute('href').slice(1);
        const target = document.getElementById(targetId);

        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }

        const currentUrl = window.location.href;
        const cleanUrl = currentUrl.replace('#', '');
        history.pushState({}, document.title, cleanUrl);
    });
});