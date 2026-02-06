<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title> <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            /* Note: your professor's footer has absolute positioning, 
               it might overlap content if the page is long! */
            position: relative; 
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <p>Your go-to source for web development tutorials</p>
        <nav>
            <a href="index.php" style="color:white; margin:10px;">Home</a>
            <a href="ex1.php" style="color:white; margin:10px;">Exercise 1</a>
        </nav>
    </header>
    <main>