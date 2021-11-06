<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Php practice</title>

    </head>
    <body>

    <? echo"hellow php";
$data=2002;
print($data);
   $age=(2021-$data);
      echo"<h1>you age:$age</h1>";
if ($age<18){
  echo " <br/> young boy";
}
 else{
   print(" <br/> big boy");
 }
$Age=19;
function calculate($k){
$yearBirth=2021- $k;
$futurYear=100+$futurYear;
echo"<h1>You will be 100years in $futurYear</h>";
  }

calculate($Age);
   $boys=array("nema","aliza","asha");
   for($boy=0;$boy<=3; $boy++){
     echo " <br/> $boys[$boy]";
   }
      $day="Mon";
      switch($day){
        case "Mon":
         echo "<p>Monday</p>";
          break;
        default:
          echo "day not found";

      }
$num=4;
$numbers=array(1,2,3,4,5,6,7,8,9,10);
for($factor=0;$factor<10;$factor++){
if($factor%$num==0){
//print("<h1>Factors of $num are:")
//echo "$numbers[$factor]"
$factored=$factor-1;
print("$numbers[$factored]");
}
}

  ?>
    </body>
</html>