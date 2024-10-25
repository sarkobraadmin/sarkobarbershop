
// Play background music when the window is loaded
window.addEventListener('load', function() {
    const audio = document.getElementById('background-music');
    audio.play().catch(error => {
        console.log('Autoplay was prevented, user interaction is required:', error);
    });
});

// Smooth Scrolling for Nav Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Fade-in animation on scroll
const faders = document.querySelectorAll('.fade-in');

const appearOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px"
};

const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add("appear");
        appearOnScroll.unobserve(entry.target);
    });
}, appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
});

// Booking Validation for Date and Time
const dateInput = document.getElementById('appointment-date');
const timeInput = document.getElementById('appointment-time');
const errorMessage = document.getElementById('error-message');

// Add an event listener to validate the date and time selection
document.getElementById('booking-form').addEventListener('submit', function(event) {
    const selectedDate = new Date(dateInput.value);
    const selectedDay = selectedDate.getDay(); // 0 = Sunday, 6 = Saturday
    const selectedTime = timeInput.value;

    // Check if the selected day is Sunday (closed)
    if (selectedDay === 0) {
        errorMessage.textContent = 'Sorry, we are closed on Sundays.';
        errorMessage.style.display = 'block';
        event.preventDefault(); // Prevent form submission
        return;
    }

    // Define opening and closing hours
    const openingHour = "10:00";
    const closingHour = selectedDay === 6 ? "18:00" : "19:00"; // Saturday closes at 18:00

    // Check if the selected time is within opening hours
    if (selectedTime < openingHour || selectedTime > closingHour) {
        errorMessage.textContent = `Sorry, we are only open from ${openingHour} to ${closingHour} on the selected day.`;
        errorMessage.style.display = 'block';
        event.preventDefault(); // Prevent form submission
    } else {
        errorMessage.style.display = 'none'; // Hide the error message if everything is valid
        
        // Display confirmation message
        alert('Your booking is confirmed! We are waiting for you.'); // Alert message
        setTimeout(() => {
            location.reload(); // Reload the page after 5 seconds
        }, 5000); // 5000 milliseconds = 5 seconds

        event.preventDefault(); // Prevent form submission to allow the alert and reload
    }
});

// Hamburger Menu Functionality for Mobile
const menuIcon = document.getElementById('menu-icon');
const navbarItems = document.querySelector('#navbar ul');

menuIcon.addEventListener('click', () => {
    navbarItems.classList.toggle('show'); // Toggle visibility of the menu
});

// Custom Barber Selection Dropdown
const customSelect = document.getElementById('custom-select');
const selectedOption = document.getElementById('selected-option');
const optionsContainer = document.getElementById('options-container');
const options = optionsContainer.querySelectorAll('.option');

// Toggle options container display
selectedOption.addEventListener('click', () => {
    optionsContainer.classList.toggle('show'); // Toggle the 'show' class
});

// Handle option selection
options.forEach(option => {
    option.addEventListener('click', () => {
        selectedOption.textContent = option.textContent; // Update the displayed option
        optionsContainer.classList.remove('show'); // Hide options
    });
});

// Close dropdown if clicked outside
window.addEventListener('click', (event) => {
    if (!customSelect.contains(event.target)) {
        optionsContainer.classList.remove('show'); // Hide options
    }
});
document.getElementById("booking-form").addEventListener("submit", function(e) {
    var appointmentDate = document.getElementById("appointment-date").value;
    var appointmentTime = document.getElementById("appointment-time").value;

    var errorMessage = document.getElementById("error-message");

    var selectedTime = new Date(appointmentDate + ' ' + appointmentTime).getHours();

    // Assuming the barbershop is open from 9:00 AM to 6:00 PM
    if (selectedTime < 9 || selectedTime >= 18) {
        e.preventDefault(); // Stop form submission
        errorMessage.style.display = 'block'; // Show error message
        errorMessage.innerHTML = "Entschuldigung, wir haben zu dieser Zeit geschlossen.";
    } else {
        errorMessage.style.display = 'none'; // Hide error message
    }
});
// JavaScript for barber selection
document.querySelectorAll('.option').forEach(option => {
    option.addEventListener('click', function() {
        const selectedBarber = this.getAttribute('data-value'); // Get the data-value attribute
        document.getElementById('selected-option').innerText = this.innerText; // Update the displayed option
        document.getElementById('barber').value = selectedBarber; // Set the hidden input value
        document.getElementById('options-container').classList.remove('show'); // Hide options after selection
    });
});