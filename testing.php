<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shortest Path</title>
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
                </ul>
            </div>
            <div class="blur">
                <!-- Code Goes Here.  -->
                <div class="container">
                    <form action="" method="post">
                        <label style="font-size: 26px;"><h1>Minimum Cost to Reach Destination</h1><br></label>
                        <label style="font-size: 25px;"><samp>Find the minimum cost to travel from&nbsp;</samp>
                            <select id="start" name="start" style="height: 30px;">
                                <option value="A" <?php if(isset($_POST['start']) && $_POST['start'] == 'A') echo 'selected'; ?>>A</option>
                                <option value="B" <?php if(isset($_POST['start']) && $_POST['start'] == 'B') echo 'selected'; ?>>B</option>
                                <option value="C" <?php if(isset($_POST['start']) && $_POST['start'] == 'C') echo 'selected'; ?>>C</option>
                                <option value="D" <?php if(isset($_POST['start']) && $_POST['start'] == 'D') echo 'selected'; ?>>D</option>
                            </select>
                            &nbsp;To&nbsp;
                            <select id="end" name="end" style="height: 30px;">
                                <option value="A" <?php if(isset($_POST['end']) && $_POST['end'] == 'A') echo 'selected'; ?>>A</option>
                                <option value="B" <?php if(isset($_POST['end']) && $_POST['end'] == 'B') echo 'selected'; ?>>B</option>
                                <option value="C" <?php if(isset($_POST['end']) && $_POST['end'] == 'C') echo 'selected'; ?>>C</option>
                                <option value="D" <?php if(isset($_POST['end']) && $_POST['end'] == 'D') echo 'selected'; ?>>D</option>
                            </select>.
                        </label>
                        <br><br>
                        <button class="learn-more" name="submit">Submit</button>
                    </form>
                    <br>

                    <div class="outputdif">
                        <?php

                            //Assign the travel cost
                            $cost = ['ab' => 10,
                                     'ac' => 15,
                                     'bc' => 5,
                                     'bd' => 12,
                                     'cd' => 10
                            ];

                            //Assign the starting to end point
                            $start = 'A';
                            $end = 'D';

                            if (isset($_POST['submit'])) {
                                $start = $_POST['start'];
                                $end = $_POST['end'];                           
                            }

                            //C
                            $result = shortestPath($start , $end , $cost);

                            //Check if the start and end has the same value
                            if ($start == $end) {
                                echo "<br><br>There is no distance between $start to $end therefore it has no cost to travel &nbsp;:)";
                            }else{   
                                //Use the asort() function to sort the associative array in an ascending order, according to the value.
                                asort($result);

                                //Take the
                                $firstPath = key($result);
                                $firstCost = current($result);

                                echo "<br>" . $firstPath . " has the minimum cost to travel, resulting in a minimum cost of  ₱" . $firstCost . "<br><br>";

                                $pathCounter = 1;
                                foreach ($result as $key => $value) {
                                    echo "Path $pathCounter: " . $key . "(Total Cost:  ₱$value) <br>";
                                    $pathCounter++;
                                }

                            }

                            function shortestPath($start , $end , $cost) {

                                // A to ...  
                                if ($start == 'A' && $end == 'D') {
                                    $ad = [
                                        "A -> B -> C -> D" => $cost['ab'] + $cost['bc'] + $cost['cd'],
                                        "A -> C -> B -> D" => $cost['ac'] + $cost['bc'] + $cost['bd'],
                                        "A -> B -> D" => $cost['ab'] + $cost['bd'],
                                        "A -> C -> D" => $cost['ac'] + $cost['cd'],
                                    ];
                                    return $ad;
                                }       
                                if ($start == 'A' && $end == 'C') { $ac = ["A -> B -> C" => $cost['ab'] + $cost['bc'],
                                                                           "A -> B -> D -> C" => $cost['ab'] + $cost['bd'] + $cost['cd'],
                                                                           "A -> C" => $cost['ac'],
                                                                    ];
                                    return $ac;
                                }        
                                if ($start == 'A' && $end == 'B') {
                                    $ab = [
                                        "A -> B" => $cost['ab'],
                                        "A -> C -> B" => $cost['ac'] + $cost['bc'],
                                        "A -> C -> D -> B" => $cost['ac'] + $cost['cd'] + $cost['bd'],
                                    ];
                                    return $ab;        
                                }

                                //B to ...
                                if ($start == 'B' && $end == 'A') { $ba = ["B -> A" => $cost['ab'],
                                                                           "B -> C -> A" => $cost['bc'] + $cost['ac'],
                                                                           "B -> D -> C -> A" => $cost['bd'] + $cost['cd'] + $cost['ac'],
                                                                    ];
                                    return $ba;        
                                }
                                if ($start == 'B' && $end == 'C') {
                                    $bc = [
                                        "B -> C" => $cost['bc'],
                                        "B -> A -> C" => $cost['ab'] + $cost['ac'],
                                        "B -> D -> C" => $cost['bd'] + $cost['cd'],
                                    ];
                                    return $bc;        
                                }
                                if ($start == 'B' && $end == 'D') { $bd = ["B -> D" => $cost['bd'],
                                                                           "B -> C -> D" => $cost['bc'] + $cost['cd'],
                                                                           "B -> A -> C -> D" => $cost['ab'] + $cost['ac'] + $cost['cd'],
                                                                    ];
                                    return $bd;        
                                }

                                //C to ...
                                if ($start == 'C' && $end == 'B') {
                                    $cb = [
                                        "C -> B" => $cost['bc'],
                                        "C -> A -> B" => $cost['ac'] + $cost['ab'],
                                        "C -> D -> B" => $cost['cd'] + $cost['bd'],
                                    ];
                                    return $cb;        
                                }
                                if ($start == 'C' && $end == 'A') { $ca = ["C -> A" => $cost['ac'],
                                                                           "C -> B -> A" => $cost['bc'] + $cost['ab'],
                                                                           "C -> D -> B -> A" => $cost['cd'] + $cost['bd'] + $cost['ab'],
                                                                    ];
                                    return $ca;        
                                }        
                                if ($start == 'C' && $end == 'D') {
                                    $cd = [
                                        "C -> D" => $cost['cd'],
                                        "C -> B -> D" => $cost['bc'] + $cost['bd'],
                                        "C -> A-> B -> D" => $cost['ac'] + $cost['ab'] + $cost['bd'],
                                    ];
                                    return $cd;        
                                }

                                //D to ...
                                if ($start == 'D' && $end == 'A') { $da = ["D -> C -> B -> A" => $cost['cd'] + $cost['bc'] + $cost['ab'],
                                                                           "D -> B -> C -> A" => $cost['bd'] + $cost['bc'] + $cost['ac'],
                                                                           "D -> B -> A" => $cost['bd'] + $cost['ab'],
                                                                           "D -> C -> A" => $cost['cd'] + $cost['ac'],
                                                                    ];
                                    return $da;       
                                }
                                if ($start == 'D' && $end == 'B') {
                                    $db = [
                                        "D -> B" => $cost['bd'],
                                        "D -> C -> B" => $cost['cd'] + $cost['bc'],
                                        "D -> C -> A -> B" => $cost['cd'] + $cost['ac'] + $cost['ab'],
                                    ];
                                    return $db;       
                                }
                                if ($start == 'D' && $end == 'C') { $dc = ["D -> C" => $cost['cd'],
                                                                           "D -> B -> C" => $cost['bd'] + $cost['bc'],
                                                                           "D -> B -> A -> C" => $cost['bd'] + $cost['ab'] + $cost['ac'],
                                                                    ];
                                    return $dc;       
                                }
                            }

                        ?>
                    </div>
                </div>
                <!-- Code Goes Here.  -->
            </div>    
        </label>
        
    </body>
</html>