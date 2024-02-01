<?php
$title = "form process"; 
include 'header.php'; ?>
<main>
    <?php
    // Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["nimi"];
            $email = $_POST["email"];
            echo "<h3>Hello $name, You are welcome to my site." . "<br>" . "Your email is $email</h3>";
        }


    ?>
</main>            

<?php include 'footer.php'; ?> 