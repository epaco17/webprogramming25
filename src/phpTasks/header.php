<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php 
        if(isset($md) && !empty($md)) {
            echo $md; 
        } else {
            echo "Default description for my HAMK PHP project.";
        }
    ?>">
    <title>
        <?php 
            if(isset($title) && !empty($title)) {
                echo $title; 
            } else {
                echo "HAMK PHP Project";
            }
        ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        header { background-color: #333; color: white; padding: 20px; text-align: center; }
        footer { background-color: #333; color: white; padding: 10px; text-align: center; width: 100%; position: relative; bottom: 0; }
        main { padding: 40px; text-align: center; min-height: 400px; }
        nav a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="ex1.php">Exercise 1</a>
            <a href="ex3.php">Exercise 3</a>
        </nav>
    </header>
    <main class="container mt-5">