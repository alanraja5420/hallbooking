<?php


if(isset($_POST['cal']))
{
  $txt1=$_POST['n1'];
  $txt2=$_POST['n2'];
  $ans=$_POST['cal'];

  if($ans=="+")
  $res=$txt1+$txt2;

  else if($ans=="-")
  $res=$txt1-$txt2;

  else if($ans=="X")
  $res=$txt1*$txt2;

  else if($ans=="/")
  $res=$txt1/$txt2;
}
?> 

<html>
  <form method="post" action="">

  Number 1 :  <input name="n1" value= "<?php  echo $txt1 ="";?>">   <br><br>

  Number 2 : <input name="n2" value= "<?php echo $txt2="";?>">       <br><br>

  Result :  <input name="res"  value="<?php echo $res="";?>">      <br><br>


  <br><br>
  <input type="submit" name="cal" value="+">

  <input type="submit" name="cal" value="-">

  <input type="submit" name="cal" value="X">

  <input type="submit" name="cal" value="/">  
  </form>
</html>