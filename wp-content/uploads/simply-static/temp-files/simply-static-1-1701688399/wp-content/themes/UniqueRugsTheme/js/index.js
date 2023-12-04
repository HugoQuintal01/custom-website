function loadingAnimation() {
    const coverTransition = document.getElementById("cover-transition-id");

    // Display the loading screen
    coverTransition.style.display = 'flex';

    // Gradually reduce opacity
    function hide() {
        let opacity = 1;

        function fadeOut() {
            opacity -= 0.02; // Adjust the step as needed for smoother or faster fade-out

            if (opacity > 0) {
                // Apply the current opacity
                coverTransition.style.opacity = opacity;

                // Request the next animation frame
                requestAnimationFrame(fadeOut);
            } else {
                // Set display to none when opacity is fully faded
                coverTransition.style.display = 'none';
            }
        }

        // Start the fade-out animation
        fadeOut();
    }

    // Call the hide function after a delay
    setTimeout(hide, 1000);
}

loadingAnimation();


// Teste slider
