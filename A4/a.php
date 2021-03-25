<!DOCTYPE html>
<html>
<head>
   <title></title>
   <style type="text/css">
       h1{
           color: brown;
       }
       div{
           width: 100%;
           border: 3px solid brown;
       }
       img{
           display: inline;
       }
   </style>
</head>
<h1>Thanks for your order. Here it is:</h1>
<body>
<div>
<?php
   // no. of coffees
   
   
   
   $coffee=$_POST['coffee'];
   // size of the coffee
   
   
   $size=$_POST['size'];
   // no. of creams
  
   $creams=$_POST['creams'];
   // no. of sugars
   
   $sugar=$_POST['sugar'];
   //prices of different sizes
  
  
   $price_size=["small"=>1,"medium"=>2,"large"=>3,"extralarge"=>4];
   //intial height of the cup is 150
   
   
   $height=150;
   $cream_cost=0.5;
   $sugar_cost=0.5;
   $price=$price_size[$size]+$sugar*$sugar_cost+$creams*$cream_cost;
   $tax=0.3;
   //sizes of small,medium...
   
   
   $img_size=["small"=>0,"medium"=>50,"large"=>100,"extralarge"=>150];
   for($i=0;$i<$coffee;$i++){
       //new height of the image is the original height+size of the image
       $new_height=$height+$img_size[$size];
       //displaying the image with new height
       echo "<img src='./images/coffee.png' height='".$new_height."px'>";
       if($creams>0 or $sugar>0){
           //if creams or sugars are more then zero
           for($j=0;$j<$creams;$j++){
               
               if($j==0)



                 echo "<img src='./images/plus.png' height='150px'>";
                echo "<img src='./images/cream.png' height='150px'>";
           }
           for($j=0;$j<$sugar;$j++){
               //a plus symbol is displayed in the begging of the images
               if($j==0)
                   echo "<img src='./images/plus.png' height='150px'>";
               echo "<img src='./images/sugar.png' height='150px'>";
           }
       }
       echo "<br>";
       //next image is displayed in new line
   }
   $tot_price=$price*$coffee+$tax;
   echo "</div>Cost: $".$price_size[$size]." x $coffee + tax = <b>$$tot_price</b>";
?>
</body>
</html>