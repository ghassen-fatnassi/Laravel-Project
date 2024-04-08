function calculateReadingTime() {
    const text = document.querySelector(".t-content").innerText;
    const wordsPerMinute = 225; // Adjust as needed
    const words = text.trim().split(/\s+/).length;
    const minutes = Math.ceil(words / wordsPerMinute);
    return minutes;
}

// Update the reading time element
function updateReadingTimeElement() {
    const readingTime = calculateReadingTime();
    document.getElementById("readingTime").innerText = `${readingTime} min`;
}

// Call the function to update the reading time initially
updateReadingTimeElement();
