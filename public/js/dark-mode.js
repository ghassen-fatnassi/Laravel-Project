const body = document.querySelector('body');
const iconbutton = document.querySelector('icon-button');

const btns = document.querySelectorAll('.btn');
const icons = document.querySelectorAll('.btn__icon');
const articleTitles = document.querySelectorAll('.t-article-title');
const articleAuthor = document.querySelector('.t-article-author');

/* function store(value) {
  localStorage.setItem('dark-mode', value);
}

function load() {
  const darkmode = localStorage.getItem('dark-mode');
  if (!darkmode) {
    store(false);
    icon.classList.add('fa-sun');
  } else if (darkmode === 'true') {
    body.classList.add('dark-mode');
    icon.classList.remove('fa-sun');
    icon.classList.add('fa-moon');
    articleTitles.forEach(title => {
      title.classList.add('dark-mode');     
    });
    articleAuthor.classList.add('dark-mode');
    
  } else if (darkmode === 'false') {
    icon.classList.remove('fa-moon');
    icon.classList.add('fa-sun');
  }
}


load();

btn.addEventListener('click', () => {
  body.classList.toggle('dark-mode');
  icon.classList.add('animated');
  store(body.classList.contains('dark-mode'));
  darkmode = localStorage.getItem('dark-mode');
  console.log(darkmode);
  if (body.classList.contains('dark-mode')) {
    icon.classList.remove('fa-sun');
    icon.classList.add('fa-moon');
    articleTitles.forEach(title => {
      title.classList.add('dark-mode');     
    });
    articleAuthor.classList.add('dark-mode');

  } else {
    icon.classList.remove('fa-moon');
    icon.classList.add('fa-sun');
    articleTitles.forEach(title => {
      title.classList.remove('dark-mode');     
    });
    articleAuthor.classList.remove('dark-mode');

  }
  setTimeout(() => {
    icon.classList.remove('animated');
  }, 500);
});
 */

// Assuming btn, body, icon, articleTitles, and articleAuthor are properly defined elsewhere in your code

// Load dark mode setting from local storage when the page loads
document.addEventListener('DOMContentLoaded', () => {
  const isDarkMode = JSON.parse(localStorage.getItem('dark-mode'));
  if (isDarkMode) {
    body.classList.add('dark-mode');
    icons.forEach(icon => {
      icon.classList.remove('fa-sun');
      icon.classList.add('fa-moon');
    });
    articleTitles.forEach(title => {
      title.classList.add('dark-mode');
    });
    articleAuthor.classList.add('dark-mode');
  }
});

// Toggle dark mode when the button is clicked
btns.forEach(btn => {
  btn.addEventListener('click', () => {
    console.log("Button clicked");
    console.log("test");
    body.classList.toggle('dark-mode');
    const isDarkMode = body.classList.contains('dark-mode');
    localStorage.setItem('dark-mode', JSON.stringify(isDarkMode));
    console.log(isDarkMode);
    // Toggle the spin animation class
    icons.forEach(icon => {
      icon.classList.add('animated');
    });
    setTimeout(() => {
      icons.forEach(icon =>{
      icon.classList.remove('animated');
      });
    }, 500);
    if (isDarkMode) {
      icons.forEach(icon =>{
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
      });
      articleTitles.forEach(title => {
        title.classList.add('dark-mode');
      });
      articleAuthor.classList.add('dark-mode');
    } else {
      icons.forEach(icon => {
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
      });
      articleTitles.forEach(title => {
        title.classList.remove('dark-mode');
      });
      articleAuthor.classList.remove('dark-mode');
    }
  });
});
