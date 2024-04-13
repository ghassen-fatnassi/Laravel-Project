

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

