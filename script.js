document.addEventListener('DOMContentLoaded', function() {
    const genreItems = document.querySelectorAll('.genre-item');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                genreItems.forEach(item => {
                    const counter = item.querySelector('.counter');
                    const percentage = parseInt(item.getAttribute('data-genre'));
                    let count = 0;
                    const interval = setInterval(() => {
                        if (count >= percentage) {
                            clearInterval(interval);
                        } else {
                            count++;
                            counter.textContent = `${count}%`;
                        }
                    }, 30);
                });
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    genreItems.forEach(item => {
        observer.observe(item);
    });
});