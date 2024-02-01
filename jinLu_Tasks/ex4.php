<?php
$title = "Ex4: Control Flow and Loops"; 
include 'header.php'; ?>
<main>
    <div class="tasks">
        <div class="ageForm">
            <form name="ageForm" class = "col-lg-6 bookform custom-padding" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <div>
                    <label for="name" class="form-label fs-5">Name</label>
                    <input type="text" class="form-control" name="nimi" id="name" aria-describedby="nameHelp" placeholder="Please enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label fs-5">Age</label>
                    <input type="number" class="form-control" name="age" id="age" placeholder="Please enter your age" required>
                </div>
                <div class="mb-3">
                    <label for="number"  class="form-label fs-5">Number</label>
                    <input type="number" class="form-control" name="number" id="age" placeholder="Please enter a number for creating multiplication table" required>
                </div>
                <div class = "d-grid">
                        <button type="submit" class="btn btn-primary d-grid" value="submit">Submit</button>
                </div>   
            </form>
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST["nimi"];
                    $age = $_POST["age"];   
                    if ($age < 18) {
                        echo "<h3>Hi $name, you are not allowed to vote.</h3>";
                    } else {
                        echo "<h3>Hi $name, you are welcome to vote.</h3>";
                    }
                }
            ?> 
        </div>
        <div class="switchTask">
            <?php
            $currentMonth = date("n");
            switch ($currentMonth){
                case "8":
                    echo "It's August, so it's still holiday. <br>";
                    break;
                default:
                    echo "Not August, this is $currentMonth so I don't have any holidays";
            }
            ?>
        </div>
        <div class="muplicationTable">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST["number"]; 
                    // print the multiplication table of a number (n).
                    for ($i = 1; $i<= 10; $i++){
                        echo $name . " * " . $i . " = " . $name * $i . "<br>";
                    }
                    while ($name > 0){
                        echo $name . " ";
                        $name--;
                    }
                }
            ?>
        </div> 
        <div class="arrayTask">
            <?php
                $fruits = array("Apple", "Banana", "Orange", "Grape", "Strawberry");
                foreach($fruits as $value){
                    echo $value ." ";
                }
            ?>
        </div>   
    </div>
</main>            

<?php include 'footer.php'; ?>    