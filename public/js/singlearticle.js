function toggleHeart(event) {
    event.preventDefault(); // Prevent default action (e.g., page navigation)

    const icon = event.currentTarget.querySelector('#heart-icon');

    if (icon.classList.contains('fa-heart-o')) {
        icon.classList.remove('fa-heart-o');
        icon.classList.add('fa-heart');
        icon.style.color = 'var(--accent-color)';
    } else {
        icon.classList.remove('fa-heart');
        icon.classList.add('fa-heart-o');
        icon.style.color = 'black';
    }
}
function toggleBookmark() {
    var button = document.getElementById('bookmark-button');
    button.classList.toggle('bookmarked');
}
document.getElementById('bookmark-button').addEventListener('click', toggleBookmark);

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.cvMh7UGw').forEach(item => {
        item.addEventListener('click', event => {
            const articleId = item.dataset.articleId;
            fetch(`/articles/${articleId}/bookmark`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({})
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log(data.message);
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
        });
    });


});

function handleLikeButtonClick(event) {
    event.stopPropagation(); // Prevent event bubbling

    const articleId = event.currentTarget.dataset.articleId; // Get the article ID from the data attribute
    
    // Send an AJAX request to the like endpoint
    fetch(`/articles/${articleId}/like`, {
        method:'POST', // Use POST method to like, DELETE to unlike
        headers: {
            'Content-Type': 'application/json', // Set Content-Type header
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Include CSRF token
        },
        body: JSON.stringify({}) // Empty body for POST request
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json(); // Parse response JSON
    })
    .then(data => {
        console.log(data.message); // Log success message
        // Update UI based on the response
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error); // Log error
        // Handle error: Display error message, retry request, etc.
    });
}

document.querySelectorAll('.like').forEach(item => {
    item.addEventListener('click', handleLikeButtonClick);
});