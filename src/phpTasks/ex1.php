<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1: Getting Started with PHP - Eljona</title>
</head>
<body>

    <h3>3.1 Hello World</h3>
    <?php 
        echo "Hello world! My name is \"David\""; 
    ?>

    <h3>3.2 Variables</h3>
    <?php 
        $title = "PHP is interesting.";
        echo "<h4>$title</h4>";
    ?>

    <h3>3.3 Student Grades</h3>
    <?php
        $g1 = 5; 
        $g2 = 4; 
        $g3 = 5;
    ?>
    <table border="1">
        <tr>
            <th>S.n.</th>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>1</td>
            <td>John</td>
            <td><?php echo $g1; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Alice</td>
            <td><?php echo $g2; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bob</td>
            <td><?php echo $g3; ?></td>
        </tr>
    </table>

    <h3>3.4 Screenshot</h3>
    <img src="screenshot.png" alt="Development Environment Screenshot" style="max-width: 800px; height: auto;">

</body>
</html>