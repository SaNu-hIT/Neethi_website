<?php 
include_once("Classes/dbclasses/Product_db.php");
$user=new Product_db();



try 
{
if(isset($_GET['action']))
{
if($_GET['action']=="Add")
{

    $user->setname($_POST['Name']);
    $user->setCategoryId($_POST['Category']);
   //$user->setemail($_POST['Email']);

    
        $result=$user->Insert();

        $result2=$user->SelectUserDetailsById($result);

        $rowdata=Array();
        
        while($row=mysqli_fetch_array($result2))
        {
            $jsonArrayObject = (array('id' => $row["WishId"],'name' => $row["Name"]));
            $arr[$inc] = $jsonArrayObject;
            $inc++;
           //  $rowdata[$inc]=$row["Name"];
        }
        $json_array = json_encode($arr);
        echo  $json_array;
    
    
}
if($_GET['action']=="ShowProductDetails")
{
    $ItemId=$_GET['ItemId'];
    $arr = Array();
    $inc = 0;
    $result=$user->SelectProductDetailsById($ItemId);
    $rowdata=Array();
    
   // $result = mysql_query($query);

 // $row=mysql_fetch($result);
  
  echo $row['Name'];
  while($row=mysqli_fetch_array($result))
    {

       $Imageresult=$user->SelectImageDetailsById($ItemId);
       $imagarr=Array();
       $k=0;
        while($row1=mysqli_fetch_array($Imageresult))
        {
            $jsonArrayImageObject = (array('ImageUrl' => $row1["ImageUrl"]));
    
            $imagarr[$k] = $jsonArrayImageObject;
            $k++;
           
        }
        $jsonArrayObject = (array('Id' => 56,'Name' => $row["ItemName"], 'Code' => $row["ItemCode"], 'SellingPrice' => $row["SellingPrice"],'Discount' => $row["Discount"],'Model' => $row["Model"],'Description' => $row["ItemDescription"],'ImageUrl' =>  $imagarr));
        $arr[$inc] = $jsonArrayObject;
        $inc++;
       
    
    $json_array = json_encode($arr);
        echo  $json_array;
    }
}
if($_GET['action']=="ShowProduct")
{
    $OprMode=$_GET['oprMode'];
    $arr = Array();
    $inc = 0;
    $result=$user->SelectProductDetails($OprMode);
    $rowdata=Array();
   

    while($row=mysqli_fetch_array($result))
    {
      $Imageresult=$user->SelectImageDetailsById($row["ItemId"]);
       $imagarr=Array();
       $k=0;
        while($row1=mysqli_fetch_array($Imageresult))
        {
            $jsonArrayImageObject = (array('ImageUrl' => $row1["ImageUrl"]));
    
            $imagarr[$k] = $jsonArrayImageObject;
            $k++;
           
        }
        $jsonArrayObject = (array('Id' => $row["ItemId"],'Name' => $row["ItemName"], 'Code' => $row["ItemCode"], 'SellingPrice' => $row["SellingPrice"],'Discount' => $row["Discount"],'Model' => $row["Model"],'ImageUrl' =>  $imagarr));
        $arr[$inc] = $jsonArrayObject;
        $inc++;
       
    }
    $json_array = json_encode($arr);
        echo  $json_array;
   

}
if($_GET['action']=="Delete")
{   
    $idu=$_GET['Id'];
   
    $result=$user->Delete($idu);
}

if($_GET['action']=="Edit")
{   
    $arr = Array();
    $inc = 0;
    $idu=$_GET['Id'];
   
    $result=$user->SelectUserDetailsById($idu);

    $rowdata=Array();
    
    while($row=mysqli_fetch_array($result))
    {
        $jsonArrayObject = (array('id' => $row["UserId"],'name' => $row["Name"], 'email' => $row["Email"], 'gender' => $row["Gender"]));
        $arr[$inc] = $jsonArrayObject;
        $inc++;
       //  $rowdata[$inc]=$row["Name"];
    }
    $json_array = json_encode($arr);
    echo  $json_array;
    
}
}
} 
catch (Exception $e) 
{
    echo $e;
}
?>