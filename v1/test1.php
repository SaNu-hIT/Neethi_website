<?php

$link = mysqli_connect("localhost","root","") ;//or die (print "Class Database: Error while connecting to DB (link)")
mysqli_select_db($link,"neethi");
$sql="SELECT * FROM tbl_products  where  SellingFlag='FTR'";
$result = mysqli_query($link,$sql);
 echo $link;

$rowdata=Array();
   

while($row=mysqli_fetch_array($result))
{
    $arr = Array();
    $inc = 0;
    $jsonArrayObject = (array('Id' => $row["ItemId"],'Name' => $row["ItemName"], 'Code' => $row["ItemCode"], 'SellingPrice' => $row["SellingPrice"],'Discount' => $row["Discount"],'Model' => $row["Model"]));
    $arr[$inc] = $jsonArrayObject;
    $inc++;
   
}
$json_array = json_encode($arr);
    echo  $json_array;
?>