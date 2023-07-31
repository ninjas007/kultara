<script>
    const starIcons = document.querySelectorAll('.star-icon');
    const ratingValueInput = document.getElementById('ratingValue');

    function resetStars() {
        starIcons.forEach(star => star.classList.remove('active'));
    }

    function highlightStars(index) {
        for (let i = 0; i <= index; i++) {
            starIcons[i].classList.add('active');
        }
    }

    starIcons.forEach((star, index) => {
        star.addEventListener('mouseover', () => {
            resetStars();
            highlightStars(index);
        });

        star.addEventListener('click', () => {
            setRatingValue(star);
            highlightStars(index)
        });
    });

    function setRatingValue(star) {
        let ratingValue = 0;

        if (star) {
            ratingValue = star.getAttribute('data-value');
        }
        ratingValueInput.value = ratingValue;
        $('#locationReviewAddModal #ratingValue').val(ratingValue) // kalau dari location-add-review file
        setSpanRating(ratingValue);
    }

    function setSpanRating(value) {
        document.getElementById('spanRating').innerHTML = value
    }
</script>
