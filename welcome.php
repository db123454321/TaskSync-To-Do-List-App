<?php
session_start();
require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to TaskSync</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome CDN -->

    <style>
        body {
            font-family: 'Courier New', Courier, monospace; /* Typewriter-like font */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; 
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            color: white;
            position: relative; 
            overflow: hidden; 
        }

        body::before {
            content: ""; 
            position: absolute; 
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('task.jpg') no-repeat center center fixed; 
            background-size: cover; 
            filter: blur(7px); 
            z-index: 1;
        }

        footer {
            width: 100%; 
            padding: 10px;
            background-color: rgba(77, 74, 74, 0.7); 
            position: absolute;
            bottom: 0;
            left: 0;
            text-align: center;
            z-index: 10;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 36px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); 
            background: linear-gradient(to right, #8e44ad, #3498db, #ff6f61); 
            -webkit-background-clip: text; 
            -webkit-text-fill-color: transparent; 
        }

        p {
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); 
            font-size: 20px;
            line-height: 1.5; 
            color: white; 
        }

        .text-container {
            display: flex;
            flex-direction: column; 
            justify-content: center; 
            align-items: center;
            z-index: 10; 
            margin-left: 20px; 
            padding: 20px; 
            background-color: rgba(0, 0, 0, 0.5); 
            border-radius: 10px; 
        }

        .login-button, .try-button {
            position: absolute; 
            top: 20px; 
            margin: 10px; 
            text-decoration: none;
            color: white; 
            font-size: 18px;
            padding: 12px 24px;
            border-radius: 6px;
            transition: background-color 0.3s, transform 0.3s; 
            z-index: 10;
        }

        .login-button {
            background-color: #3498db;
            right: 160px; 
        }

        .login-button:hover {
            background-color: #2980b9; 
            transform: scale(1.05); 
        }

        .try-button {
            background-color: rgb(22, 14, 128); 
            right: 40px;
        }

        .try-button:hover {
            background-color: rgb(0, 15, 219); 
            transform: scale(1.05); 
        }

        .logo {
            position: absolute; 
            top: 20px; 
            left: 20px; 
            font-size: 36px; 
            color: transparent; 
            background: linear-gradient(to right, #3498db, #8e44ad); 
            -webkit-background-clip: text; 
            margin: 10px; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); 
            z-index: 10; 
        }

        .title-container {
            display: flex;
            align-items: center; 
            margin-bottom: 20px; 
        }
    </style>
</head>
<body>
    <div class="logo">TaskSync</div> 
    
    <a href="login.php" class="login-button">Log In</a> 
    <a href="index.php" class="try-button">Try It</a> 

    <div class="text-container">
        <div class="title-container">
            <h1>Welcome to TaskSync!</h1> 
        </div>
        <p>Your personal to-do list manager to organize your work and life.</p> 
    </div>

    <footer>
        <p>&copy; 2025 TaskSync. All rights reserved.</p> 
    </footer>
    
</body>
</html>