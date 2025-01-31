document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.section');

    sections.forEach(section => {
        section.addEventListener('wheel', (event) => {
            event.preventDefault(); // Empêche le défilement normal

            const nextSection = event.deltaY > 0 ? section.nextElementSibling : section.previousElementSibling;

            if (nextSection) {
                nextSection.scrollIntoView({ behavior: 'smooth' }); // Défilement fluide vers la section suivante
            }
        });
    });
});
