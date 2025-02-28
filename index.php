<?php
session_start();
require 'db.php'; // Include your database connection if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskSync - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome CDN -->
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(to bottom right, #1e3c72, #2a69ac, #a2dff7); /* Ombre effect with dark blue, blue, and baby blue */
            color: white; /* Change text color to white for better contrast */
            text-align: center; /* Center text */
        }
       
      
        footer {
            width: 100%; /* Full width */
            padding: 10px;
            background-color: rgba(77, 74, 74, 0.7); /* Semi-transparent background */
            position: absolute; /* Position it at the bottom */
            bottom: 0;
            left: 0;
            text-align: center;
            z-index: 10; /* Ensure it stays above other content */
        }

        h1 {
            font-size: 48px; /* Increased font size */
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Text shadow for better readability */
        }

        p {
            font-size: 24px; /* Increased font size */
            margin-bottom: 30px; /* Increased margin for spacing */
            line-height: 1.5; /* Improved line height for readability */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); /* Text shadow for better readability */
        }

        .button-container {
            margin-top: 20px;
        }

        .button {
            padding: 15px 30px; /* Increased padding for buttons */
            font-size: 20px; /* Increased font size */
            color: white;
            background-color: #3498db; /* Button color */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s; /* Added transform transition */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Added shadow for depth */
        }

        .button:hover {
            background-color: #2980b9; /* Darker blue on hover */
            transform: scale(1.05); /* Slightly enlarge on hover */
        }

   
        /* Responsive design */
        @media (max-width: 600px) {
            h1 {
                font-size: 36px; /* Smaller font size on mobile */
            }

            p {
                font-size: 18px; /* Smaller font size on mobile */
            }

            .button {
                font-size: 18px; /* Smaller button font size on mobile */
            }

            .icon {
                font-size: 40px; /* Smaller icon size on mobile */
            }
        }
    </style>
</head>
<body>
    <h1>Welcome to TaskSync!</h1>
    <p>Your personal to-do list manager to organize your work and life.</p>
    <div class="button-container">
        <a href="login.php" class="button">Log In</a>
        <a href="register.php" class="button">Register</a>
    </div>
   
    <footer>
        <p>&copy; 2025 TaskSync. All rights reserved.</p> 
    </footer>


</body>
</html>