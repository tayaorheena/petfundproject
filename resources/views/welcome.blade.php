<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet Donation</title>

    <!-- Internal CSS -->
    <style>
        /* General Body Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f2ed; /* Light beige background */
            color: #2e2d1d; /* Dark brown text */
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #a2ac82; /* Olive green header */
            color: white;
            text-align: center;
            padding: 50px;
            position: relative;
            height: 20vh;
        }

        header h1 {
            font-size: 3.5em;
        }

        /* Upper right login/register links */
        .auth-links {
            position: absolute;
            top: 20px;
            right: 30px;
        }

        .auth-links a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 1.2em;
            border-radius: 5px;
            background-color: #5b6d49; /* Dark olive green */
            margin-left: 15px;
            transition: background-color 0.3s;
        }

        .auth-links a:hover {
            background-color: #0c3c01; /* Dark forest green */
        }

        /* Navigation Menu */
        nav {
            display: flex;
            justify-content: center;
            background-color: #a2ac82; /* Olive green */
            padding: 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 15px 30px;
            margin: 0 10px;
            font-size: 1.2em;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #5b6d49; /* Dark olive green */
        }

        /* Main content area */
        .main-content {
            padding: 50px;
            text-align: center;
            background-image: url('https://example.com/animal-child-friendly-image.jpg'); /* Replace with actual image */
            background-size: cover;
            background-position: center;
            color: white;
            flex-grow: 1; /* Make this section grow to fill available space */
        }

        .main-content h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        /* Feature Box Styling */
        .feature-box {
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 50px;
            flex-wrap: wrap; /* Allow wrapping for smaller screens */
            background-color: #f1f2ed; /* Light beige background */
        }

        .feature {
            background-color: #a2ac82; /* Olive green background for the feature boxes */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
            color: #2e2d1d; /* Dark brown text for better contrast */
        }

        .feature i {
            font-size: 3em;
            color: #0c3c01; /* Dark forest green for icons */
            margin-bottom: 20px;
        }

        .feature h3 {
            font-size: 1.8em;
            color: #5b6d49; /* Dark olive green for feature titles */
            margin-bottom: 10px;
        }

        .feature p {
            font-size: 1.2em;
            color: #2e2d1d; /* Dark brown text */
        }

        .feature a {
            display: block;
            margin-top: 15px;
            font-size: 1.2em;
            text-decoration: none;
            color: #0c3c01; /* Dark forest green */
            font-weight: bold;
        }

        .feature a:hover {
            color: #5b6d49; /* Dark olive green on hover */
        }

        /* Footer Section */
        footer {
            background-color: #a2ac82; /* Olive green */
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="auth-links">
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
        <h1>Welcome to Pet Donation Fund</h1>
        <!-- <p>Help save lives, one donation at a time!</p> -->
    </header>

    <!-- Navigation Bar -->
    <!-- <nav>
        <a href="#rescues">Rescues</a>
        <a href="#vets">Veterinarians</a>
        <a href="#pet-parents">Pet Parents</a>
    </nav> -->

    <!-- Feature Section: Rescues, Vets, and Pet Parents -->
    <div class="feature-box">
        <!-- Rescues -->
        <div class="feature" id="rescues">
            <i class="fas fa-hands-helping"></i> <!-- You can change the icon based on what you'd like -->
            <h3>Rescues</h3>
            <p>Raise funds for the pets under your care, and for the humans and facilities that care for them.</p>
            <!-- <a href="#">Learn More</a> -->
        </div>

        <!-- Veterinarians -->
        <div class="feature" id="vets">
            <i class="fas fa-stethoscope"></i>
            <h3>Veterinarians</h3>
            <p>Give your pet parents a better way than financing to pay for the care you provide. All funds raised go directly to your account for full accountability.</p>
            <!-- <a href="#">Learn More</a> -->
        </div>

        <!-- Pet Parents -->
        <div class="feature" id="pet-parents">
            <i class="fas fa-paw"></i>
            <h3>Pet Parents</h3>
            <p>Cover the cost of pet health and safety with the most powerful and caring allies – friends and family.</p>
            <!-- <a href="#">Learn More</a> -->
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Pet Donation Fund | All rights reserved.</p>
    </footer>

    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>
</html>




