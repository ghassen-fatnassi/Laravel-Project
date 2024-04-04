function toggleHeart() {
    var icon = document.getElementById('heart-icon');
    if (icon.classList.contains('fa-heart-o')) {
        icon.classList.remove('fa-heart-o');
        icon.classList.add('fa-heart');
        icon.style.color = 'var(--third-color)';
    } else {
        icon.classList.remove('fa-heart');
        icon.classList.add('fa-heart-o');
        icon.style.color = 'black';
    }
}
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.reply').forEach(item => {
        item.addEventListener('click', event => {
            const parentComment = item.closest('.comment-section');
            const replySection = parentComment.querySelector('.reply-section');
            replySection.style.display = 'block'; // Show reply section
        });
    });

    document.querySelectorAll('.cancel-reply-btn').forEach(item => {
        item.addEventListener('click', event => {
            const replySection = item.closest('.reply-section');
            replySection.style.display = 'none'; // Hide reply section
        });
    });
});
