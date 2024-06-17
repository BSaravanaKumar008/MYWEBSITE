document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('nav ul li a');
    for (const link of links) {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const targetId = event.currentTarget.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            } else {
                window.location.href = event.currentTarget.getAttribute('href');
            }
        });
    }
});
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.contact-form form');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Message sent!');
        form.reset();
    });
});
