
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SARKO Barbarshop</title>
    <link rel="icon" href="223344.ico" type="image/x-icon">
    <link rel="stylesheet" href="stzles.css">
    <style>
        /* Welcome Message Styles */
        #welcome-message {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 5vw;
            z-index: 1000;
            opacity: 0;
            animation: fadeInScale 2s forwards;
        }

        @keyframes fadeInScale {
            0% {
                opacity: 0;
                transform: scale(1.2);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Fade Out Animation */
        .fade-out {
            animation: fadeOut 2s forwards;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
                transform: scale(1);
            }
            100% {
                opacity: 0;
                transform: scale(0.8);
            }
        }

        /* Mobile Navigation Styles */
        #navbar {
            display: inline-table;
            align-content: flex-start;
            bottom: 871px;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 10px 20px;
        }

        #navbar ul {
            list-style: none;
            display: flex;
            gap: 20px; /* Space between menu items */
            margin: 0;
            padding: 0;
        }

        #navbar ul li a {
            color: white;
            text-decoration: none;
            font-family: cursive;
            transition: color 0.3s ease;
        }

        #navbar ul li a:hover {
            color: #f39c11; /* Change color on hover */
        }

        /* Hamburger Icon */
        .menu-icon {
            display: none;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }

        /* Mobile Menu */
        .mobile-menu {
            display: none; /* Hidden by default */
            flex-direction: column;
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 60px; /* Position below the navbar */
            right: 0;
            width: 100%; /* Full width */
            z-index: 1000;
        }

        .mobile-menu.active {
            display: flex; /* Show when active */
        }

        /* Media Query for Mobile Devices */
        @media (max-width: 768px) {
            #navbar ul {
                top: 58px;
                display: none; /* Hide menu on small screens */
                background-color: rgba(0, 0, 0, 0.8);
            }
            .menu-icon {
                display: block; /* Show hamburger icon */
            }
        }
    </style>
</head>
<body>
    <!-- Welcome Message -->
    <div id="welcome-message">Willkommen bei SARKO Barbarshop!</div>

    <!-- Hintergrundmusik -->


    <header id="main-header">
        <nav id="navbar">
            <ul id="nav-links">
                <li><a href="#home">Startseite</a></li>
                <li><a href="#about">Über Uns</a></li>
                <li><a href="#services">Dienstleistungen</a></li>
                <li><a href="#booking">Termin Buchen</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
            <div class="menu-icon" id="menu-icon">☰</div> <!-- Hamburger-Icon für Mobilgeräte -->
        </nav>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobile-menu">
            <ul>
                <li><a href="#home">Startseite</a></li>
                <li><a href="#about">Über Uns</a></li>
                <li><a href="#services">Dienstleistungen</a></li>
                <li><a href="#booking">Termin Buchen</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </div>
    </header>

     <!-- Hero Section -->
     <section id="home" class="hero" style="
     background: linear-gradient(to bottom right, rgba(255, 215, 0, 0.5), rgba(0, 0, 0, 0.5)), url('pexels-shkrabaanthony-4625629.jpg') no-repeat center center/cover;">
     <div class="hero-content">
         <h1>Stil beginnt hier</h1>
         <p style="font-family: cursive;">Ihr Look, Ihre Wahl</p>
         <a href="#services" class="cta-button" style="font-family: cursive;">Entdecken Sie Unsere Dienstleistungen</a>
     </div>
 </section>

 <!-- Über Uns Section -->
 <section id="about" class="fade-in appear" style="
     font-family: cursive;
     font-size: x-large;
     color: #ffffff;
     background: linear-gradient(to top right, rgba(255, 215, 0, 0.5), rgba(0, 0, 0, 0.5)), url('downloads12343.jpg') no-repeat center center/cover;">
     <h2>Über Uns</h2>
     <p>Wir bedienen unsere Gemeinschaft seit über 20 Jahren mit hochwertigen Friseurdienstleistungen. Unsere erfahrenen Friseure sind stolz darauf, maßgeschneiderte Haarschnitte und Rasuren anzubieten.</p>
 </section>

 <!-- Dienstleistungen Section -->
 <section id="services" class="fade-in appear" style="
     background: linear-gradient(to top left, rgba(255, 215, 0, 0.5), rgba(0, 0, 0, 0.5)), url('12345.jpg') no-repeat center center/cover; 
     font-family: cursive;
     font-size: large;">
     <h2 style="font-size: xx-large; color: #ffffff;">Unsere Dienstleistungen</h2>
     <div class="services-container">
         <div class="service-card">
             <h3 style="font-size:xxx-large;">Haarschnitt</h3>
             <p>Haarschnitt (Normal).</p>
             <p class="price">Preis: 13 €</p>
             <p>Haarschnitt (Trocken).</p>
             <p class="price">Preis: 16 €</p>
             <p>Haarschnitt (Kinder).</p>
             <p class="price">Preis: 15 €</p>
             <p>Waschen und Haarschnitte.</p>
             <p class="price">Preis: 19 €</p>
         </div>
         <div class="service-card">
         <h3 style="font-size:xxx-large;">Bartpflege und Rasur</h3>
             <p>Bartrasur.</p>
             <p class="price">Preis: 12 €</p>
             <p>Bartfarbe.</p>
             <p class="price">Preis: 10 €</p>
             <p>Bartrasur und Farbe.</p>
             <p class="price">Preis: 25 €</p>
             <p>Augenbrauen zupfen.</p>
             <p class="price">Preis: 10 €</p>
             <p>Haartentfernung mit Wachs (Waxing).</p>
             <p class="price">Preis: 10 €</p>
         </div>
         <div class="service-card">
         <h3 style="font-size:xxx-large;">Haarpflege</h3>
             <p>Färben.</p>
             <p class="price">Preis: 25 €</p>
             <p>Waschen, selber föhnen.</p>
             <p class="price">Preis: 5 €</p>
             <p>Haarkur.</p>
             <p class="price">Preis: 5 €</p>
         </div>
         <div class="service-card">
         <h3 style="font-size:xxx-large;">Spezialpaket</h3>
             <p>Deluxe Paket (Haarschnitt und (Bartpflege oder Rasur) und Haarpflege und (Augenbrauen zupfen oder Wachs).)</p>
             <p class="price">Preis: 35 €</p>
         </div>
     </div>
 </section>

 <!-- Termin Buchen Section -->
 <section id="booking" class="fade-in appear" style="
     background: linear-gradient(to top right, rgba(255, 215, 0, 0.5), rgba(0, 0, 0, 0.5)), url('123045267.jpg') no-repeat center center/cover; 
     font-family: cursive;">
     <h2 style="color: #ffffff; font-size: xx-large;">Termin Buchen</h2>
     <form id="booking-form" method="POST">
    <input type="text" name="name" placeholder="Ihr Name" required>
    <input type="tel" name="phone" placeholder="Ihre Telefonnummer" required>

    <div class="custom-select" id="custom-select">
        <div class="selected-option" id="selected-option">Wählen Sie Ihren Friseur</div>
        <input type="hidden" name="barber" id="barber" required> <!-- Hidden input to store selected value -->
        <div class="options-container" id="options-container">
            <div class="option" data-value="Maher">Maher</div>
            <div class="option" data-value="Ayman">Ayman</div>
            <div class="option" data-value="Nichervan">Nichervan</div>
            <div class="option" data-value="Nicht Wichtig">Nicht Wichtig</div>
        </div>
    </div>

    <input type="date" id="appointment-date" name="appointment-date" required>
    <input type="time" id="appointment-time" name="appointment-time" required>
    
    <button type="submit" class="cta-button">Jetzt Buchen</button>
    <p id="error-message" style="color: red; display: none;">Entschuldigung, wir haben zu dieser Zeit geschlossen.</p>
</form>


    
 </section>

 <!-- Kontakt Section -->
 <section id="contact" class="fade-in appear" style="
     background: linear-gradient(to top left, rgba(255, 215, 0, 0.5), rgba(0, 0, 0, 0.5)), url('123456.jpg') no-repeat center center/cover; 
     color: #ffffff;
     font-family: cursive;">
     <h2>Kontaktieren Sie Uns</h2>
     <p>Kaiseralle 16a</p>
     <p>76131 Karlsruhe, Deutschland</p>
     <p>Telefon: 015214431750</p>
 </section>

    <footer>
        <p>© 2024 Modern Friseursalon. Alle Rechte vorbehalten.</p>
    </footer>
    <script>
        // JavaScript to hide the welcome message after a few seconds
        window.onload = function() {
            // Set timeout based on screen size
            const timeoutDuration = 3000; // 3 seconds
            const welcomeMessage = document.getElementById('welcome-message');

            setTimeout(() => {
                welcomeMessage.classList.add('fade-out');

                // Remove the message from the DOM after fading out
                setTimeout(() => {
                    welcomeMessage.style.display = 'none';
                }, 2000); // Match this time with the fade-out duration
            }, timeoutDuration); // Show the message for 3 seconds

  
        };
    </script>


<script>
// Barber selection event
document.querySelectorAll('.option').forEach(option => {
    option.addEventListener('click', function() {
        const selectedBarber = this.getAttribute('data-value'); // Get the barber's name
        document.getElementById('selected-option').innerText = this.innerText; // Update selected display
        document.getElementById('barber').value = selectedBarber; // Set hidden input value
        document.getElementById('options-container').classList.remove('show'); // Hide options after selection
    });
});

// Form submission with AJAX
document.getElementById("booking-form").addEventListener("submit", function(e) {
    e.preventDefault(); // Prevent default form submission

    var formData = new FormData(this);

    fetch('submit_booking.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // Show success or error message
    })
    .catch(error => console.error('Error:', error));
});
</script>
    <script src="script.js"></script>


</body>
</html>
