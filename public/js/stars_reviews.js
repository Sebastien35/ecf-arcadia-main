window.onload = function() {
    const ratingInput = document.querySelector('#review_rating');
    const formStars = document.querySelectorAll('.form-control.avis .rating i');

    function updateStars(rating) {
        formStars.forEach((star, index) => {
            star.className = index < rating ? 'fas fa-star' : 'far fa-star';
        });
    }

    if (ratingInput) {
        formStars.forEach(star => {
            star.addEventListener('click', function() {
                const rating = parseInt(star.getAttribute('data-value'), 10);
                ratingInput.value = rating.toString();
                updateStars(rating);
            });
        });

        const initialRating = parseInt(ratingInput.value, 10) || 0;
        updateStars(initialRating);
    }
};
