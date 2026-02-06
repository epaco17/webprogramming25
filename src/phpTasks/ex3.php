<?php 
    $title = "Exercise 3: Variable, Strings & Operators"; 
    $md = "A page demonstrating PHP forms, string manipulation, and math."; 
    include 'header.php'; 
?>

    <h2>Exercise 3: Variable, Strings & Operators</h2>

    <h3 class="mt-4">3.2 Form Creation</h3>
    <form method="post" action="ex3.php" class="p-4 shadow-sm bg-white rounded">
        <div class="row">
            <div class="col">
                <input type="text" name="fname" class="form-control" placeholder="First name" required>
            </div>
            <div class="col">
                <input type="text" name="lname" class="form-control" placeholder="Last name" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        echo "<h3 class='mt-4 text-success'>Hello $fname $lname, You are welcome to my site.</h3>";
    }
    ?>

    <hr>

    <h3>3.4 HTML Table</h3>
    <table class="table table-striped table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>S.n.</th>
                <th>Name</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>John</td><td>5</td></tr>
            <tr><td>2</td><td>Alice</td><td>4</td></tr>
            <tr><td>3</td><td>Bob</td><td>5</td></tr>
        </tbody>
    </table>

    <hr>

    <h3>3.5 String Variables</h3>
    <?php 
        $str1 = "Hello";
        $str2 = "World";
        $combined = $str1 . " " . $str2; // Joining with a dot
        echo "<p>Combined string: $combined</p>";
        echo "<p>Length of string: " . strlen($combined) . "</p>";
    ?>

    <hr>

    <h3>3.6 Number Addition</h3>
    <?php 
        $n1 = 298; $n2 = 234; $n3 = 46;
        $sum = $n1 + $n2 + $n3;
        echo "<p>The sum of $n1, $n2, and $n3 is: <strong>$sum</strong></p>";
    ?>

    <hr>

    <h3>3.7 Browser Detection</h3>
    <?php 
        $user_browser = $_SERVER['HTTP_USER_AGENT'];
        echo "<p>Your browser info: $user_browser</p>";
    ?>

<?php include 'footer.php'; ?>