function toggleDarkMode() {
    const body = document.body;
    const articleTitles = document.querySelectorAll('.t-article-title');
    const articleAuthor = document.querySelector('.t-article-author');

    // Toggle dark mode class on body
    body.classList.toggle('dark-mode');

    // Apply dark mode styles to article titles if in dark mode
    articleTitles.forEach(title => {
        if (body.classList.contains('dark-mode')) {
            title.classList.add('dark-mode');
        } else {
            title.classList.remove('dark-mode');
        }
    });

    // Apply dark mode styles to article author if in dark mode
    if (body.classList.contains('dark-mode')) {
        articleAuthor.classList.add('dark-mode');
    } else {
        articleAuthor.classList.remove('dark-mode');
    }
}

