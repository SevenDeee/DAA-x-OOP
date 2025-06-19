<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sorting</title>
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
                        <label style="font-size: 26px;"><h1>Sorting</h1><br></label>
                        <label style="font-size: 25px;"><samp><span style="background-color: #9999FF;">Enter a list of numbers separated by a comma. <br>Example: {2,3,1,5,6}</span></samp> <br> <br></label>
                        <input type="text" name="input" placeholder="Input Here..." required pattern="^[0-9]+(?:,[0-9]+)*$" autocomplete="off">
                        <br>
                        <button class="learn-more" name="submit">Submit</button>
                    </form>

                    <div class="output">
                        <?php
                            // Initialize the input variable with a default value (Example given from PDF file).
                            $input = "2,3,1,5,6";   

                            // Check if the Submit button is pressed.
                            if (isset($_POST['submit'])) {
                                //If the button has been pressed update or re-assign the value from the input box.
                                $input = $_POST["input"];    
                            }
                             
                            //Use the explode() function to split the input string into an array using comma as separator.
                            //And assign the divided value of input to the new variable named $array.
                            $array = explode("," , $input);
                        
                            display("Input",$array);
                        
                            //Call a user defined function named bubbleSortAscending() to sort the value of $array from lowest to highest (Ascending).
                            //See more information below for user defined function named bubbleSortAscending().
                            bubbleSortAscending($array);
                        
                            //Call a user defined function named bubbleSortDescending() to sort the value of $array from highest to lowest (Descending).
                            //See more information below for user defined function named bubbleSortDescending().
                            bubbleSortDescending($array);
                            
                            //Create a funtion named bubbleSortAscending() that requires an array to proceed.
                            function bubbleSortAscending($array){
                                $lengthOfNumbers = count($array);
                                for ($i = 0 ; $i < $lengthOfNumbers - 1 ; $i++){ 
                                    for ($j=0; $j < $lengthOfNumbers - $i - 1; $j++) {
                                        if ($array[$j] > $array[$j + 1] ) {
                                            $temp = $array[$j];
                                            $array[$j] = $array[$j + 1];
                                            $array[$j + 1] = $temp;
                                        } 
                                    }
                                }
                                display("Ascending",$array);   
                            }
                            
                            //Create a funtion named bubbleSortAscending() that requires an array to proceed.
                            //The behaviour of this function is same from the function above
                            //This function will just do the opposite of Ascending which is Descending
                            function bubbleSortDescending($array){
                                $lengthOfNumbers = count($array);
                                for ($i = 0 ; $i < $lengthOfNumbers - 1 ; $i++){ 
                                    for ($j=0; $j < $lengthOfNumbers - $i - 1; $j++) {
                                        if ($array[$j] < $array[$j + 1] ) {
                                            $temp = $array[$j];
                                            $array[$j] = $array[$j + 1];
                                            $array[$j + 1] = $temp;
                                        } 
                                    }
                                }
                                display("Descending",$array);   
                            }

                            function display($string, $array) {
                                echo "$string: {";
                                for ($i=0; $i < count($array) ; $i++) { 
                                    echo $array[$i];
                                    if ($i != count($array) - 1) {
                                        echo " , ";
                                    }
                                }
                                echo "}<br><br>";
                            }

                        ?>
                    </div>
                </div>       
                <!-- Code Goes Here.  -->
            </div>    
        </label>
    </body>
</html>