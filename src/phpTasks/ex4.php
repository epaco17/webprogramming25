<?php 
    $title = "Exercise 4: Control Flow and Loops"; 
    $md = "Learning about If-Else, Switch cases, and different types of Loops in PHP."; 
    include 'header.php'; 
?>

    <h2 class="text-center mb-4">Exercise 4: Control Flow and Loops</h2>

    <section class="mb-5">
        <h3>4.2 Voting Eligibility</h3>
        <form method="post" action="ex4.php" class="p-3 bg-white shadow-sm rounded border">
            <div class="mb-3">
                <label class="form-label">Full Name:</label>
                <input type="text" name="vname" class="form-control" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Age:</label>
                <input type="number" name="vage" class="form-control" placeholder="Enter your age" required>
            </div>
            <button type="submit" name="check_voting" class="btn btn-primary">Check Eligibility</button>
        </form>

        <?php 
        if (isset($_POST['check_voting'])) {
            $name = $_POST['vname'];
            $age = $_POST['vage'];
            if ($age >= 18) {
                echo "<div class='alert alert-success mt-3'>Hello $name, you are eligible for voting!</div>";
            } else {
                echo "<div class='alert alert-danger mt-3'>Hello $name, you are not eligible for voting yet.</div>";
            }
        }
        ?>
    </section>

    <hr>

    <section class="mb-5">
        <h3>4.3 Is it August?</h3>
        <?php 
            $current_month = date("F"); 
            echo "<div class='p-3 rounded bg-light border'>";
            switch ($current_month) {
                case "August":
                    echo "<h4 class='text-primary'>It's August, so it's still holiday.</h4>";
                    break;
                default:
                    echo "<h4>Not August, this is <strong>$current_month</strong> so I don't have any holidays.</h4>";
                    break;
            }
            echo "</div>";
        ?>
    </section>

    <hr>

    <section class="mb-5">
        <h3>4.4 Multiplication Table</h3>
        <form method="post" action="ex4.php" class="row g-3 align-items-center bg-white p-3 rounded border m-0 shadow-sm">
            <div class="col-auto">
                <label>Enter Number:</label>
            </div>
            <div class="col-auto">
                <input type="number" name="num_table" class="form-control" required>
            </div>
            <div class="col-auto">
                <button type="submit" name="gen_table" class="btn btn-success">Generate Table</button>
            </div>
        </form>

        <?php 
        if (isset($_POST['gen_table'])) {
            $n = $_POST['num_table'];
            echo "<div class='mt-3 w-50'><table class='table table-sm table-bordered border-success text-center'>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr><td>$n x $i</td><td>" . ($n * $i) . "</td></tr>";
            }
            echo "</table></div>";
        }
        ?>
    </section>

    <hr>

    <section class="mb-5">
        <h3>4.5 While Loop: Count to N</h3>
        <form method="post" action="ex4.php" class="row g-3 align-items-center bg-white p-3 rounded border m-0 shadow-sm">
            <div class="col-auto">
                <label>Count up to:</label>
            </div>
            <div class="col-auto">
                <input type="number" name="count_n" class="form-control" required>
            </div>
            <div class="col-auto">
                <button type="submit" name="do_count" class="btn btn-info text-white">Start Counting</button>
            </div>
        </form>

        <?php 
        if (isset($_POST['do_count'])) {
            $n = $_POST['count_n'];
            $i = 1;
            echo "<div class='mt-3 p-2 border bg-light'><strong>Counting:</strong> ";
            while ($i <= $n) {
                echo $i . ($i < $n ? ", " : "");
                $i++;
            }
            echo "</div>";
        }
        ?>
    </section>

    <hr>

    <section class="mb-5">
        <h3>4.6 Foreach Loop: Array Elements</h3>
        <div class="list-group w-50">
        <?php 
            $myarray = array("HTML", "CSS", "PHP", "JavaScript");
            foreach ($myarray as $language) {
                echo "<div class='list-group-item'><i class='bi bi-code-slash mr-2'></i> $language</div>";
            }
        ?>
        </div>
    </section>

<?php include 'footer.php'; ?>