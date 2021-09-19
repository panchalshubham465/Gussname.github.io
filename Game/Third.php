
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
<style> 
body{

    background-color: #16D5C4 ;
}
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: red;
  border: solid 1px black;
  height: 30px;
}
#flip {
    background-color: yellow;
}

#panel {
  padding: 50px;
  display: none;
  padding-bottom: 10px;
  height: 300px;
}
.body{

    width: 60%;
    margin-left: 20%;
    margin-top: 5%;
}
h1{
    margin-top: 80px;
    color:white;
    font-size:60px;
}
h2{
    margin: 0;
    padding: 0;
}
</style>
</head>
<body>
  
    <div class="body">
        
<div id="flip"><h2>Click Here for result</h2></div>
<div id="panel"> <h1>
    
<?php

session_start();

include 'test.php';
$x =  $_SESSION['indexN'];

$y = $_SESSION['indexN2'];

$z =  $_POST ['set2'];

sortcards($names);

sortcards1($names,$x);

sortcards1($mycards,$y);

sortcards1($mycards,$z);



echo $mycards[10];


?>
</h1></div>

    </div>

</body>
</html>

