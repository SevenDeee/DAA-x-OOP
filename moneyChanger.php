<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Minimum Money Problem</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="navbar.css">
    </head>
    <body>
        <label>
            <input type="checkbox" class="checkbox">
            <div class="toggle">
                <span class="top_line common"></span>
                <span class="middle_line common"></span>
                <span class="bottom_line common"></span>
            </div>
            <div class="slide">
                <a href="index.php">
                    <h2>Hello World.</h2>
                </a>  
                <ul>
                    <li><a href="shortestPath.php"><i class="fas fa-route"></i></i>Shortest Path</a></li>
                    <li><a href="moneyChanger.php"><i class="fas fa-peso-sign"></i></i>Minimum Money</a></li>
                    <li><a href="frequencyCounter.php"><i class="fas fa-spell-check"></i>Frequency Counter</a></li>
                    <li><a href="euclid's.php"><i class="fas fa-percent"></i>Euclid's Algorithm</a></li>
                    <li><a href="sorting.php"><i class="fas fa-signal"></i>Sorting</a></li>
                    <li><a href="merging.php"><i class="fas fa-down-left-and-up-right-to-center"></i></i>Merging</a></li>
                    <p style="color:#D6D6D6;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SevenDee n Friends.</p>
                </ul>
            </div>
            <div class="blur">
                <!-- Code Goes Here.  -->
                <div class="container">
                    <form action="" method="post">
                        <label style="font-size: 21px;"><h1>Minimum Money Problem</h1><br></label>
                        <label style="font-size: 18px;"><samp><span style="background-color: #9999FF;">Enter Amount of Money <br>Example: ₱135 </samp><br><br></label>
                        <input type="text" name="input" placeholder="Input Amount Here..." required pattern="^[0-9]+$" autocomplete="off">
                        <br>
                        <button class="learn-more" name="submit">Submit</button>
                    </form>

                    <div class="outputdif">
                        <?php

                            $amount = 135;

                            // Check if the Submit button is pressed.
                            if (isset($_POST['submit'])) {
                                //If the button has been pressed update or re-assign the value from the input box.
                                $amount = $_POST["input"];
                            }

                            echo "Total Amount: ₱$amount <br><br>";

                            // Define bill and coin values
                            $billValues = [1000, 500, 200, 100, 50, 20];
                            $billUsed = array_fill(0, count($billValues), 0);

                            $coinValues = [10, 5, 1];
                            $coinUsed = array_fill(0, count($coinValues), 0);

                            // Count the number of each bill
                            for ($i = 0; $i < count($billValues); $i++) {
                                if ($amount >= $billValues[$i]) {
                                    $billUsed[$i] = intval($amount / $billValues[$i]);
                                    $amount = $amount % $billValues[$i];
                                }
                                echo "₱" . $billValues[$i] . " = " . $billUsed[$i] . "<br>";
                            }

                            // Count the number of each coin
                            for ($i = 0; $i < count($coinValues); $i++) {
                                if ($amount >= $coinValues[$i]) {
                                    $coinUsed[$i] = intval($amount / $coinValues[$i]);
                                    $amount = $amount % $coinValues[$i];
                                }
                                echo "₱" . $coinValues[$i] . " = " . $coinUsed[$i] . "<br>";
                            }

                        ?>
                    </div>
                </div>
                <!-- Code Goes Here.  -->
            </div>    
        </label>
        
    </body>
</html>