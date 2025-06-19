<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Frequency Counter</title>
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
                        <label style="font-size: 26px;"><h1>Frequency Counter</h1><br></label>
                        <label style="font-size: 25px;"><samp><span style="background-color: #9999FF;">Enter a sequence of characters (letters) <br>Example: AABCBCD </samp><br><br></label>
                        <input type="text" name="input" placeholder="Input Here..." required pattern="^[A-Za-z ]+$" autocomplete="off">
                        <br>
                        <button class="learn-more" name="submit">Submit</button>
                    </form>

                    <div class="output">
                        <?php
                            // Initialize the input variable with a default value (Example given from PDF file).
                            $input = "AABCBCD";

                            // Check if the Submit button is pressed.
                            if (isset($_POST['submit'])) {
                                //If the button has been pressed update or re-assign the value from the input box.
                                $input = $_POST["input"];
                            }

                            // Remove the whitespace and replace all the input content to Uppercase.
                            //Use the str_replace() function to replace the whitespace to non-whitespace from the value of $input
                            //Then use the strtoupper() function to replace all Lowercase letter to Uppercase letters from the value of str_replace() function
                            //Then finally store it to a new variable named $input_after 
                            $input_after = strtoupper(str_replace(" ", "", $input));

                            //Print the Input or print out the value of the variable named $input_after
                            echo "Input: [" . $input_after . "] <br><br>";
                            
                            // Split the content of input to array
                            //Use the str_split() function to split the content of $input_after to a new array[] variable named $array 
                            $array = str_split($input_after);

                        /*  Count the number of frequency in an array.
                            Use the array_count_values() function to count how many times did the letter occur from the variable array[] named $array
                            Then store it to a new variable named $frequency
                            This will return an associative array[] which is an array[] that can customize the keys or index of an array[] */
                            $frequencey = array_count_values($array);
                        /*  It will look like this:   Array ( [A] => 2 
                                                              [B] => 2 
                                                              [C] => 2 
                                                              [D] => 1 )
                                                               ^     ^
                                                              key  value */

                            // Loop through the array and print the frequency or occurrence of the value.
                            //Use a foreach() loop to extract the content of $frequency and store the keys and values to a new variable that can be seen below
                            foreach ($frequencey as $key => $value) {
                                //And lastly Print the extracted keys and values.
                                echo "$key-$value <br>";
                            }
                        ?>
                    </div>
                </div> 
                <!-- Code Goes Here.  --> 
            </div>    
        </label>
    </body>
</html>