<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//echo "Connection added ";
   $cookie_name = "subbu_cookie";
   $cookie_value = "subbu_cookievalue";
   //unset($_COOKIE[$cookie_name]);

   $myarray = array("subbu", "giresh ", "Chandan");

   $myarraywithkeys = array("Subbu"=> "10", "gireesh" => "12" , "Chandan"=> "15");

  function Myfun($name){
    echo $name;
  }
  function Myfunction($x , $y)
  { 
       $z = $x + $y;
       echo $z;
       return $z;
  }
   //Myfunction(1,2);
   //echo count($myarray);
  //Myfun("Subbu");
  $arraylength = count($myarray);
  for($i = 0 ; $i < $arraylength;$i++ ){
     echo $myarray[$i] , "<br>";
  }

   foreach($myarraywithkeys as $currentkey=>$current_values){
        echo "KeyId : ".$currentkey ."" , "<br>" , "KeyName : ".$current_values . " ";
        echo "<br>";
   }


   setcookie($cookie_name, $cookie_value ,time() + 3600,"/");
   if(count($_COOKIE)>0){
    echo "Cookie is enabled";
   }
   else{
    echo "Cookie is disabled";
   }
 ?>


</body>
</html>