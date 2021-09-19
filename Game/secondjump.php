



<!DOCTYPE html>
<html lang="en">
<head>
  
    <script src="first.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="header">

        <h1>Gusse The Name Game</h1>

    </div>

    <div class="body">


        <form action="Third.php" method ="post">
         
        <div id="rcorners1">
           <div class ="sets" >  <h1> Set A </h1></div>
       
            
            <div class="lists">

               

          
            <?php

include 'test.php';
session_start();
$n =  $_SESSION['indexN'];

$n1 = $_POST['set2'];


$_SESSION['indexN2'] = $n1;



sortcards1($names,$n);

sortcards1($mycards,$n1);





                 
                for ($i=0; $i <=6 ; $i++) { 

                    echo "<ul>";
                       echo "<li>".$setA[$i]."</li>";

                       echo  "</ul>";

                               }
                      

             ?>

           <input id="r1" type="radio" name="set2" value="a">

            </div>
        
        </div>
        <div id="rcorners1">
            <div class ="sets">  <h1> Set B </h1></div>
         
    
            <?php
      

                 
      for ($i=0; $i <=6 ; $i++) { 

          echo "<ul>";
             echo "<li>".$setB[$i]."</li>";

             echo  "</ul>";

                     }
            

   ?>

 <input id="r2" type="radio" name="set2" value="b">

            

            
            
        </div>
        <div id="rcorners1">
            <div class ="sets"> <h1> Set C </h1> </div>

            
            <?php
      

                 
      for ($i=0; $i <=6 ; $i++) { 

          echo "<ul>";
             echo "<li>".$setC[$i]."</li>";

             echo  "</ul>";

                     }
            

   ?>

 <input id="r3" type="radio" name="set2" value="c">
         
    
    </div>
    

    <input id = "btn" type="submit" value="Submit">
           
</form>
        
    
    </div>
    



</body>
</html>

