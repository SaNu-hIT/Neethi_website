<?php
include_once("database.inc.php");
class Product_db
{
var $ItemName;
var $ItemCode;
var $SellingPrice;
var $DiscountPrice;
var $Model;
var $ProductsellingTypee;
var $Description;
var $Image1;
var $Image2;
var $Image3;
var $Image4;
var $sell;

function Product_db()
{
$this->database=new Database();
}
//getter methode
function getItemName()
{
    return $this->ItemName;
}
function getItemCode()
{
    return $this->ItemCode;
}

function getSellingPrice()
{
    return $this->SellingPrice;
}
function getDiscountPrice()
{
    return $this->DiscountPrice;
}
function getModel()
{
    return $this->Model;
}
function getProductSellingType()
{
    return $this->ProductsellingTypee;
}
function getDescription()
{
    return $this->Description;
}
function getImage1()
{
    return $this->Image1;
}
function getImage2()
{
    return $this->Image2;
}
function getImage3()
{
    return $this->Image3;
}
function getImage4()
{
    return $this->$Image4;
}
function getsell()
{
    return $this->$sell;
}

//setter methode
function setsell($val)
{
     $this->sell=$val;
}
function setItemName($val)
{
     $this->ItemName=$val;
}
function setItemCode($val)
{
     $this->ItemCode=$val;
}

function setSellingPrice($val)
{
     $this->SellingPrice=$val;
}
function setDiscountPrice($val)
{
     $this->DiscountPrice=$val;
}
function setModel($val)
{
     $this->Model=$val;
}
function setProductSellingType($val)
{
     $this->ProductsellingTypee=$val;
}
function setDescription($val)
{
     $this->Description=$val;
}

function setImage1($val)
{
     $this->Image1=$val;
}
function setImage2($val)
{
     $this->Image2=$val;
}
function setImage3($val)
{
     $this->Image3=$val;
}
function setImage4 ($val)
{
     $this->Image4=$val;
}


function Insert()
{
    
    $this->Description = str_replace("'" , "''","$this->Description");
    $sql="INSERT INTO tbl_products(ItemName,ItemCode,SellingPrice,Discount,Model,ItemDescription,SellingFlag) VALUES ('$this->ItemName','$this->ItemCode','$this->SellingPrice','$this->DiscountPrice','$this->Model','$this->Description','$this->sell')";
   
    $result1=$this->database->Query($sql);
    $sqllast="SELECT ItemId from tbl_products order by ItemId desc limit 1";
    $resultId=$this->database->db_selectData($sqllast);
    $result2=mysqli_fetch_assoc($resultId);
    $id=$result2['ItemId'];
    $sqlImage="INSERT INTO tbl_images(ItemId,ImageUrl) VALUES ('$id','$this->Image1')";
    $result=$this->database->Query($sqlImage); 
    $sqlImage="INSERT INTO tbl_images(ItemId,ImageUrl) VALUES ('$id','$this->Image2')";
    $result=$this->database->Query($sqlImage); 
    $sqlImage="INSERT INTO tbl_images(ItemId,ImageUrl) VALUES ('$id','$this->Image3')";
    $result=$this->database->Query($sqlImage);  
    $sqlImage="INSERT INTO tbl_images(ItemId,ImageUrl) VALUES ('$id','$this->Image4')";
    $result=$this->database->Query($sqlImage); 
    return $result; 
   
}
function Update($Id)
{
    $this->Description = str_replace("'" , "''","$this->Description");
    $sql="UPDATE  tbl_products SET ItemName='$this->ItemName',ItemCode='$this->ItemCode',SellingPrice='tst1',Discount='$this->DiscountPrice',Model='$this->Model',ItemDescription='$this->Description' ,SellingFlag='$this->sell' WHERE ItemId='$Id'";
    $result=$this->database->Query($sql);
    return $result; 
}
function Delete($Id)
{
    $sql="DELETE  FROM tbl_products  WHERE  ItemId='$Id'";
    $result=$this->database->Query($sql);
    $sql="DELETE  FROM tbl_images  WHERE  ItemId='$Id'";
    $result=$this->database->Query($sql);
    return $result;
}

function SelectProductDetailsById($Id)
{
    $sql="SELECT * FROM tbl_products where ItemId='$Id'";
    $result=$this->database->db_selectData($sql);
    return $result;
}
function SelectProductDetails($OprMode)
{

    $sql="SELECT * FROM tbl_products  where  SellingFlag='$OprMode'";
    $result=$this->database->db_selectData($sql);
   
    return $result;
}
function SelectProductDetailsByCashRange($param,$itemId)
{
    $max=((int)($param)*20/100)+$param;
    $min=((int)($param)*(-20/100))+$param;
    $sql="SELECT * FROM tbl_products  where  SellingPrice<='$max' and SellingPrice>='$min' and ItemId!='$itemId'";
    $result=$this->database->db_selectData($sql);
   
    return $result;
}

function SelectAllProduct()
{
    $sql="SELECT * FROM tbl_products";
    $result=$this->database->db_selectData($sql);
    return $result;
}

function SelectAllProductbyFilter($filter)
{
    $sql="";
    if($filter=="ALL")
    {
    $sql="SELECT * FROM tbl_products";
    }
    else if($filter=="AZ")
    {
    $sql="SELECT * FROM tbl_products ORDER BY ItemName asc";
   
    }
    else if($filter=="ZA")
    {
    $sql="SELECT * FROM tbl_products ORDER BY ItemName desc";
   
    }
    else if($filter=="LH")
    {
    $sql="SELECT * FROM tbl_products ORDER BY SellingPrice asc";
   
    }
    else if($filter=="HL")
    {
    $sql="SELECT * FROM tbl_products ORDER BY SellingPrice desc";
   
    }    

    $result=$this->database->db_selectData($sql);
    return $result;
}
function SelectImageDetailsById($itemId)
{
    $sql="SELECT * FROM tbl_images where ItemId='$itemId'";
    $result=$this->database->db_selectData($sql);
    return $result;
}
}
?>