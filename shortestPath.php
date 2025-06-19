<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shortest Path</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="navbar.css">
        
        <!-- <style>
            /* .form{
                position: absolute;
                background-color: hsl(0, 18%, 85%);
                top: 185px;
                left: 100px;
                right: 100px;
                padding-bottom: 10px;
            }
            .diagram{
                position: absolute;
                top: 535px;
            }
            .line{
                width: 3px;
                height: 150px;
                background-color: black;                
                position: absolute;
            }
            #line1 {    
                top: 60px;
                left: 405px;
                transform: rotate(110deg);
            }
            #line2 {
                top: -10px;
                right: -595px;
                transform: rotate(110deg);
            }
            #line3 {    
                top: 60px;
                right: -595px;
                transform: rotate(73deg);
            }   
            #line4 {    
                top: -10px;
                left: 405px;
                transform: rotate(73deg);
            }
            #line5 {  
                top: 50px;
                left: 500px;
                height: 95px;
            }    
            .lett{
                background-color: black;
                position: absolute;
                width: 45px;
            }
            #a{
                left: 310px;
                top: 83px;
            }
            #b{
                left: 478px;
                top: 20px;
            }
            #c{
                left: 477px;
                top: 140px;
            }
            #d{
                right: -690px;
                top: 85px;
            }
            .point{
                position: absolute;
                width: 45px;
            }
            #ab{
                left: 390px;
                top: 30px;
            }
            #ac{
                left: 390px;
                top: 138px;
            }
            #bc{
                left: 495px;
                top: 83px;
            }
            #bd{
                right: -610px;
                top: 30px;
            }
            #cd{
                right: -610px;
                top: 138px;
            } */
        </style> -->
    </head>
    <body>
        <?php session_start(); ?>
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
                    <form method="post">
                        <label style="font-size: 26px;"><h1>Minimum Cost to Reach Destination</h1><br></label>
                        <label style="font-size: 25px;"><samp><span style="background-color: #9999FF;">Find the minimum cost to travel from&nbsp;</samp>
                            <select id="start" name="start" style="height: 30px;">
                                <option value="A" <?php if(isset($_POST['start']) && $_POST['start'] == 'A') echo 'selected'; ?>>A</option>
                                <option value="B" <?php if(isset($_POST['start']) && $_POST['start'] == 'B') echo 'selected'; ?>>B</option>
                                <option value="C" <?php if(isset($_POST['start']) && $_POST['start'] == 'C') echo 'selected'; ?>>C</option>
                                <option value="D" <?php if(isset($_POST['start']) && $_POST['start'] == 'D') echo 'selected'; ?>>D</option>
                            </select>
                            &nbsp;<span style="background-color: #9999FF;">To</span>&nbsp;
                            <select id="end" name="end" style="height: 30px;">
                                <option value="A" <?php if(isset($_POST['end']) && $_POST['end'] == 'A') echo 'selected'; ?>>A</option>
                                <option value="B" <?php if(isset($_POST['end']) && $_POST['end'] == 'B') echo 'selected'; ?>>B</option>
                                <option value="C" <?php if(isset($_POST['end']) && $_POST['end'] == 'C') echo 'selected'; ?>>C</option>
                                <option value="D" <?php if(isset($_POST['end']) && $_POST['end'] == 'D') echo 'selected'; ?>>D</option>
                            </select>.
                        </label>
                        <br><br>
                        <button class="learn-more" name="submit">Submit</button>
                        <button class="learn-more" name="edit">Edit Distances</button>
                    </form>
                    <br>
                    <div class="outputdif">
                        <?php

                            if (isset($_POST['submit'])) {
                                $_SESSION['start'] = $_POST['start'];
                                $_SESSION['end'] = $_POST['end'];
                            }

                            $start = $_SESSION['start'] ?? 'A';
                            $end = $_SESSION['end'] ?? 'D';

                            if (isset($_POST['update'])) {
                                $_SESSION['ab'] = $_POST['ab'];
                                $_SESSION['ac'] = $_POST['ac'];
                                $_SESSION['bc'] = $_POST['bc'];
                                $_SESSION['bd'] = $_POST['bd'];
                                $_SESSION['cd'] = $_POST['cd'];
                            }

                            $cost = ['ab' => $_SESSION['ab'] ?? 10,
                                     'ac' => $_SESSION['ac'] ?? 15,
                                     'bc' => $_SESSION['bc'] ?? 5,
                                     'bd' => $_SESSION['bd'] ?? 12,
                                     'cd' => $_SESSION['cd'] ?? 10
                            ];

                            $result = shortestPath($start , $end , $cost);

                            //Check if the start and end has the same value
                            if ($start == $end) {
                                echo "<br><br>There is no distance between $start to $end therefore it has no cost to travel &nbsp;:)";
                            }else{   
                                //Use the asort() function to sort the associative array in an ascending order, according to the value.
                                asort($result);

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
                        <br>
                        <div class="diagram">
                            <span class="point" id="ab"><?php echo $cost['ab'] ?></span>
                            <span class="point" id="ac"><?php echo $cost['ac'] ?></span>
                            <span class="point" id="bc"><?php echo $cost['bc'] ?></span>
                            <span class="point" id="bd"><?php echo $cost['bd'] ?></span>
                            <span class="point" id="cd"><?php echo $cost['cd'] ?></span>
                            <span class="lett" id="a">A</span>
                            <span class="lett" id="b">B</span>
                            <span class="lett" id="c">C</span>
                            <span class="lett" id="d">D</span>
                            <div class="line" id="line1"></div>
                            <div class="line" id="line2"></div>
                            <div class="line" id="line3"></div>
                            <div class="line" id="line4"></div>
                            <div class="line" id="line5"></div>
                        </div>

                        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])): ?>
                            <div class="form">
                                <form id="form" method="post">
                                    <br>
                                    <h1> Edit Distances Here </h1>
                                    <br>
                                    <label>A to B:&nbsp</label>
                                    <input type="text" name="ab" placeholder="<?php echo $cost['ab']; ?>" required pattern="[0-9]*" autocomplete="off">
                                    <br>
                                    <label>A to C:&nbsp</label>
                                    <input type="text" name="ac" placeholder="<?php echo $cost['ac']; ?>" required pattern="[0-9]*" autocomplete="off">
                                    <br>
                                    <label>B to C:&nbsp</label>
                                    <input type="text" name="bc" placeholder="<?php echo $cost['bc']; ?>" required pattern="[0-9]*" autocomplete="off">
                                    <br>
                                    <label>B to D:&nbsp</label>
                                    <input type="text" name="bd" placeholder="<?php echo $cost['bd']; ?>" required pattern="[0-9]*" autocomplete="off">
                                    <br>
                                    <label>C to D:&nbsp</label>
                                    <input type="text" name="cd" placeholder="<?php echo $cost['cd']; ?>" required pattern="[0-9]*" autocomplete="off">
                                    <br>
                                    <br>
                                    <button class="learn-more" name="update">Update</button>
                                    <button class="learn-more" name="Close" id="closeButton" >Close</button>
                                </form>

                                <script>
                                    document.getElementById('closeButton').addEventListener('click', function() {
                                        document.getElementById('form').style.display = 'none';
                                    });
                                </script>
                            </div>
                        <?php session_destroy(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Code Goes Here.  -->
            </div>    
        </label>
    </body>
</html>