<?php
$title = "Ex3:Variable, Strings & Operators"; 
include 'header.php'; ?>
<main>
    <div class="task_3">
        <?php
            echo "<h2> Below is task 3</h2>" . "<br>";
        function displayBrowser(){
            $browser = $_SERVER['HTTP_USER_AGENT'];
            echo "My browser is: $browser" . "<br>";
        }
        displayBrowser();

        function addNum(){
        $num1 = 298;
        $num2 = 234;
        $num3 = 46;
        $sum = $num1 + $num2 + $num3;
        echo "The sum of three numbers is: $sum". "<br>";
        }   
        addNum();

        function strcounter(){
            $str1 = "Hello";
            $str2 = "World";
            echo "The joined string is: " . $str1 . " " . $str2 . "<br>";
            echo "The length of two strings are: " .strlen($str1) + strlen($str2) ."<br>";
        }

        strcounter();
    ?>
    </div>
    <?php
        $g1 = 15;
        $g2 = 24;
        $g3 = 35;
    
    ?>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>John</td>
            <td><?php echo $g1 ?></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Alice</td>
            <td><?php echo $g2 ?></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Bob</td>
            <td><?php echo $g3 ?></td>
            </tr>
        </tbody>
    </table>
    <form class = "col-lg-6 bookform custom-padding" method="post" action="process.php">
                <h3>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.</h3>
                <div>
                    <label for="name" class="form-label fs-5">Name</label>
                    <input type="text" class="form-control" name="nimi" id="name" aria-describedby="nameHelp" placeholder="Please enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fs-5">Number of Guests</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="carol@gamil.com" required>
                </div>
                <div class = "d-grid">
                    <button type="submit" class="btn btn-primary d-grid" value="submit">Confirm</button>
                </div>
    </form>
</main>            

<?php include 'footer.php'; ?>     