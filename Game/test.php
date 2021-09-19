<?php

function sortcards($cards){
    
  global $setA;
  $setA = array();
  $setA[0 ]=$cards[0];
  $setA[1 ]=$cards[3];
  $setA[2 ]=$cards[6];
  $setA[3 ]=$cards[9];
  $setA[4 ]=$cards[12];
  $setA[5 ]=$cards[15];
  $setA[6 ]=$cards[18];

  global $setB;
  $setB = array();
  $setB[0 ]=$cards[1];
  $setB[1 ]=$cards[4];
  $setB[2 ]=$cards[7];
  $setB[3 ]=$cards[10];
  $setB[4 ]=$cards[13];
  $setB[5 ]=$cards[16];
  $setB[6 ]=$cards[19];
  
  global $setC;
  $setC = array();
  $setC[0 ]=$cards[2];
  $setC[1 ]=$cards[5];
  $setC[2 ]=$cards[8];
  $setC[3 ]=$cards[11];
  $setC[4 ]=$cards[14];
  $setC[5 ]=$cards[17];
  $setC[6 ]=$cards[20];
  
  // echo "Set A : [";
  // for ($i=0; $i <=6 ; $i++) { 
  //   echo $setA[$i]." ";
  // }
  // echo "]<br>";
  
  // echo "Set B : [";
  // for ($i=0; $i <=6 ; $i++) { 
  //   echo $setB[$i]." ";
  // }
  // echo "]<br>";

  // echo "Set C : [";
  // for ($i=0; $i <=6 ; $i++) { 
  //   echo $setC[$i]." ";
  // }
  // echo "]<br>";

  
}

function sortcards1($cards,$n){
    
  $setA = array();
  $setA[0 ]=$cards[0];
  $setA[1 ]=$cards[3];
  $setA[2 ]=$cards[6];
  $setA[3 ]=$cards[9];
  $setA[4 ]=$cards[12];
  $setA[5 ]=$cards[15];
  $setA[6 ]=$cards[18];

  $setB = array();
  $setB[0 ]=$cards[1];
  $setB[1 ]=$cards[4];
  $setB[2 ]=$cards[7];
  $setB[3 ]=$cards[10];
  $setB[4 ]=$cards[13];
  $setB[5 ]=$cards[16];
  $setB[6 ]=$cards[19];
  
  $setC = array();
  $setC[0 ]=$cards[2];
  $setC[1 ]=$cards[5];
  $setC[2 ]=$cards[8];
  $setC[3 ]=$cards[11];
  $setC[4 ]=$cards[14];
  $setC[5 ]=$cards[17];
  $setC[6 ]=$cards[20];
  
  if($n == 'a'){
   
      $cards2 = array_merge($setB,$setA,$setC);
  }
  elseif($n=='b'){
  
    $cards2 = array_merge($setA,$setB,$setC);
  
  }
  elseif($n=='c'){
  
   $cards2 = array_merge($setA,$setC,$setB);
  }

  sortcards($cards2);

  global $mycards;
  $mycards = $cards2;
  
}

//===========program=======================


$names  = array("shubham","aadesh","Sujit","Vaibhav","Tejas","Saurabh","sanket",
                "Pratiksha","Rushi","Krushna","Nikhil","Soni","Amruta","Shweta",
                "Kajal","Vaishnavi","Chetna","Khushi","Samrudhi","Rashmi","Ridhi"

);



// echo "<br>";
// echo "<br>";
// // // echo "<br>";
 sortcards($names);
 


// echo "<br>";




// sortcards1($names,'a');
// // // // echo "<br>";



// // // // echo "<br>";
// sortcards1($mycards,'b');
// // // echo "<br>";



// echo "<br>";
// sortcards1($mycards,'a');
// echo "<br>";


// echo $mycards[10];




?>

