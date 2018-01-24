<!DOCTYPE html>
<html>
<head><title>Crack Code</title></head>
<body>
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN.</p>

<pre style="font-size:13px;"> Debug Output :
<?php
$var='0001';
for($k=0;$k<14;$k++)
{
	$var = str_pad(++$var,4,'0',STR_PAD_LEFT);
	$te=hash('md5',$var);
	 echo "$te $var"; 
	 echo"<br/>";
}
?>
</pre>
<?php
$total;
$var='0001';
$flag;
$init1 = microtime(true);
for($i=0;$i<10000;$i++)
{
 error_reporting(0);
 $key =$_GET["MD5"];
 $check = hash('md5', $var);
 if($key==$check)
  {
  echo "<pre>";
  ++$i;
    echo "Total checks: $i <br>";
    $total=microtime(true)-$init1;
     echo "Ellapsed time: $total"; 
     echo "<br> <br>";
     echo "</pre>";
     echo "$var";
     $flag = 1;
 //echo $flag;
 break;	
  }
  $var= str_pad(++$var,4,'0',STR_PAD_LEFT);  
  }
 if($flag!=1)
    { 
    	echo "<pre>";
    echo "Total checks: $i <br>";
    $total=microtime(true)-$init1;
     echo "Ellapsed time: $total"; 
     echo "<br> <br>";
     echo "</pre>";
    echo "PIN: Not found";
    }
?>
<form action="index.php" method="get">
	<input type="text" name="MD5"  size="50"  value="<?php if (isset($_GET['MD5'])) echo $_GET['MD5']; ?> ">
	<button type="submit">Crack MD5 </button>
	</form>
	
</body>
</html>