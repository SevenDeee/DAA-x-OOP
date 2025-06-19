<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Euclid's Algorithm</title>
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
                        <label style="font-size: 26px;"><h1>Euclid's Algorithm</h1><br></label>
                        <label style="font-size: 25px;"><samp><span style="background-color: #9999FF;">Enter a two numbers separated by a comma. <br>Example: {15,35}</samp> <br> <br></label>
                        <input type="text" name="input" placeholder="Input Here..." required pattern="^\d+,\d+$" autocomplete="off">
                        <br>
                        <button class="learn-more" name="submit">Submit</button>
                    </form>

                    <div class="output">
                        <?php
                                
                            $input = "15,35";
                                
                            if (isset($_POST['submit'])) {
                                $input = $_POST["input"];
                            }
                                                    
                            $array = explode("," , $input);

                            echo "Input: " . $array[0] . " and " . $array[1] . "<br><br>";
                            $GCD = GCD($array[0] , $array[1]);
                            echo "GCD(" . $array[0] . ", " . $array[1] . ") = " . $GCD;

                            function GCD($num1 , $num2) {
                                $num3 = 0;
                                while ($num2 != 0) {
                                    $num3 = $num2;
                                    $num2 = $num1 % $num2;
                                    $num1 = $num3;
                                }
                                return $num1;
                            }           
                        
                        ?>
                    </div>
                </div>
                <!-- Code Goes Here.  -->
            </div>    
        </label>
    </body>
</html>