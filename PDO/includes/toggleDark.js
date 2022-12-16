// Select the dark mode toggle button
const toggleButton = document.querySelector('#dark-mode-toggle');

// Select the light and dark theme stylesheets
const lightThemeStylesheet = document.querySelector('#light-theme');
const darkThemeStylesheet = document.querySelector('#dark-theme');

// Function to switch between the light and dark theme stylesheets
function switchTheme() {
    // If the dark theme stylesheet is applied, remove it and apply the light theme stylesheet
    if (darkThemeStylesheet.disabled) {
        darkThemeStylesheet.disabled = false;
        lightThemeStylesheet.disabled = true;
    }
    // Otherwise, apply the dark theme stylesheet
    else {
        darkThemeStylesheet.disabled = true;
        lightThemeStylesheet.disabled = false;
    }
}

// Add an event listener to the toggle button that calls the switchTheme function when clicked
toggleButton.addEventListener('click', switchTheme);