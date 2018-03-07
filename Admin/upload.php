<?php
include_once("../Classes/dbclasses/Product_db.php");
$product=new Product_db();

$croped_image = $_POST['image'];
$itemId=$_POST['ItemId'];
list($type, $croped_image) = explode(';', $croped_image);
list(, $croped_image)      = explode(',', $croped_image);
$croped_image = base64_decode($croped_image);
$image_name = time().'.png';
// upload cropped image to server 


$product->setImage1('upload/'.$image_name);
list($width, $height, $type, $attr) = getimagesize('upload/1518768893.png');

echo "Image width " .$width;
echo "<BR>";
echo "Image height " .$height;
echo "<BR>";
echo "Image type " .$type;
echo "<BR>";
echo "Attribute " .$attr;


$product->setItemId($itemId);
$product->InsertImage();
file_put_contents('upload/'.$image_name, $croped_image);
//echo 'width='.$imagedata[0].'height='.$imagedata[1];
?>