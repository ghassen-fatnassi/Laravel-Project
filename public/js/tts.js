/*
// Function to initialize text-to-speech
function initializeTextToSpeech() {
    // Get the text content
    const textContent = document.querySelector(".t-content p").innerText;

    // Get the play and pause buttons
    const playButton = document.getElementById("playButton");
    const pauseButton = document.getElementById("pauseButton");

    // Get the speech synthesis engine
    let synth = window.speechSynthesis;

    // Initialize the SpeechSynthesisUtterance object
    let utterance = new SpeechSynthesisUtterance();
    utterance.text = textContent;
    utterance.lang = "en-US"; // Set the language to English

    // Event listener for the play button
    playButton.addEventListener("click", () => {
        if (!synth.speaking && !synth.paused) { // Check if not already speaking or paused
            synth.speak(utterance); // Start speaking directly
            console.log("Playing");
        } else if (synth.paused) { // If paused, resume
            synth.resume();
            console.log("Resumed");
        }
    });

    // Event listener for the pause button
    pauseButton.addEventListener("click", () => {
        synth.pause(); // Pause speaking
        console.log("Paused");
    });
}

// Call the function to initialize text-to-speech when the page loads
initializeTextToSpeech();

*/
// Function to initialize text-to-speech
function initializeTextToSpeech() {
    // Get the text content
    const textContent = document.querySelector(".t-content p").innerText;

    // Get the play button element
    const playButton = document.getElementById("playButton");

    // Get the speech synthesis engine
    let synth = window.speechSynthesis;
    // Clear previous utterances
    synth.cancel();

    // Initialize the SpeechSynthesisUtterance object
    let utterance = new SpeechSynthesisUtterance();
    utterance.text = textContent;
    utterance.lang = "en-US"; // Set the language to English

    // Event listener for the play button
    playButton.addEventListener("click", () => {
        if (!synth.speaking && !synth.paused) { // Check if not already speaking or paused
            synth.speak(utterance); // Start speaking directly
            playButton.innerHTML = "<i class='bx bx-pause-circle bx-md'></i>"; // Change button to pause icon
            console.log("Playing");
        } else if (synth.paused) { // If paused, resume
            synth.resume();
            playButton.innerHTML = "<i class='bx bx-pause-circle bx-md'></i>"; // Change button to pause icon
            console.log("Resumed");
        } else { // If speaking, pause
            synth.pause();
            playButton.innerHTML = "<i class='bx bx-play-circle bx-md'></i>"; // Change button to play icon
            console.log("Paused");
        }
    });

    // Event listener for the end of speech
    utterance.onend = function() {
        playButton.innerHTML = "<i class='bx bx-play-circle bx-md'></i>"; // Change button to play icon
        console.log("Finished reading");
    };
}

// Call the function to initialize text-to-speech when the page loads
initializeTextToSpeech();
