<?php 
include_once("../Classes/dbclasses/Product_db.php");
$product=new Product_db();

if(isset($_GET['action']))
{
if($_GET['action']=="Add")
{
    $product->setItemName($_POST['ItemName']);
    $product->setItemCode($_POST['ItemCode']);
    $product->setSellingPrice($_POST['SellingPrice']);
    $product->setDiscountPrice($_POST['DiscountPrice']);
    $product->setModel($_POST['Model']);
    $product->setsell($_POST['ProductsellingType']);
    $product->setDescription($_POST['Description']);
    $dir = "upload/";
 
    move_uploaded_file($_FILES["upload-image1"]["tmp_name"], $dir. $_FILES["upload-image1"]["name"]);
    $product->setImage1("upload/".$_FILES["upload-image1"]["name"]);

    move_uploaded_file($_FILES["upload-image2"]["tmp_name"], $dir. $_FILES["upload-image2"]["name"]);
    $product->setImage2("upload/".$_FILES["upload-image2"]["name"]);

    move_uploaded_file($_FILES["upload-image3"]["tmp_name"], $dir. $_FILES["upload-image3"]["name"]);
    $product->setImage3("upload/".$_FILES["upload-image3"]["name"]);

    move_uploaded_file($_FILES["upload-image4"]["tmp_name"], $dir. $_FILES["upload-image4"]["name"]);
    $product->setImage4("upload/".$_FILES["upload-image4"]["name"]);
    //echo getImage1();
    $Id=$_GET['Id'];
   if($Id>0)
   {
    $result=$product->Update($Id); 
    return "sucess";
   }
   else
   {
    $result=$product->Insert(); 
    return "sucess";
   }

   
}
if($_GET['action']=="delete")
{   
    $id=$_GET['id'];
   
    $result=$product->Delete($id);
}
}




