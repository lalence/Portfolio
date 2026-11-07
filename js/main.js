const menuButton = document.querySelector('.menu-toggle');
const nav = document.querySelector('.main-nav');

if (menuButton && nav) {
    menuButton.addEventListener('click', () => {
        const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
        menuButton.setAttribute('aria-expanded', String(!isOpen));
        nav.classList.toggle('is-open', !isOpen);
    });
}

const projectLightbox = document.querySelector('.project-lightbox');
const lightboxImage = projectLightbox?.querySelector('img');
const lightboxClose = projectLightbox?.querySelector('.project-lightbox-close');

if (projectLightbox && lightboxImage) {
    document.querySelectorAll('.project-image-button').forEach((button) => {
        button.addEventListener('click', () => {
            const image = button.querySelector('img');
            if (!image) return;

            lightboxImage.src = image.src;
            lightboxImage.alt = image.alt;
            projectLightbox.showModal();
        });
    });

    lightboxClose?.addEventListener('click', () => projectLightbox.close());

    projectLightbox.addEventListener('click', (event) => {
        if (event.target === projectLightbox) projectLightbox.close();
    });
}
