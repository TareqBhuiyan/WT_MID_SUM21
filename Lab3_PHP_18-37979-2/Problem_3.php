<html> 
       <body>
  <?php
   $length =2;
   $width =5;

   $Perimeter = 2*($length + $width);
   $Area = ($length * $width);

  echo "Area of the rectangle is :". $Perimeter;

  echo "<br> Perimeter of the rectangle is :". $Perimeter;

  if($length==$width)
  {
          echo"<br> The shape is a square";
  }

?>
     </body>
</html>