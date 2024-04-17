document.documentElement.style.setProperty("--primary-color", "#66503e");
document.documentElement.style.setProperty("--secondary-color", "#b89072");
document.documentElement.style.setProperty("--accent-color", "#ccb191");
document.documentElement.style.setProperty("--highlight-color", "#e1dbd3");
// Read the session information from the hidden input field

var likeStatus = document.getElementById("likeStatus").value;
var bookmarkStatus = document.getElementById("bookmarkStatus").value;


function showNotification(message) {
    var notificationBox = document.createElement("div");
    notificationBox.classList.add("notification");
    notificationBox.innerText = message;
    document.body.appendChild(notificationBox);

    // Style the notification box
    notificationBox.style.position = "fixed";
    notificationBox.style.bottom = "20px";
    notificationBox.style.left = "50%";
    notificationBox.style.transform = "translateX(-50%)";
    notificationBox.style.backgroundColor = "var(--secondary-color)";
    notificationBox.style.border = "1px solid #ccc";
    notificationBox.style.padding = "10px";
    notificationBox.style.borderRadius = "5px";
    notificationBox.style.color = "white";

    // Hide notification after 2 seconds
    setTimeout(function () {
        notificationBox.style.display = "none";
    }, 2000);
}
if (likeStatus === "liked") {
    showNotification("Article Liked!");
} else if (likeStatus === "unliked") {
    showNotification("Article Unliked!");
}
if (bookmarkStatus === "bookmarked") {
    showNotification("Article Bookmarked!");
} else if (bookmarkStatus === "unbookmarked") {
    showNotification("Article Unbookmarked!");
}
