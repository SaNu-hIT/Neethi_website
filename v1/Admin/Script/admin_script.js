$(document).ready(function()
{
    $('#fountainG').hide()
    $("#btnlogin").click(function()
    {
    
        var username=$('#login-email').val();
    
        var password=$('#login-password').val();
    
        if((username=="admin")&&(password=="admin@neethi"))
        {
         
            window.location="dashboard.php";
        }
        else{
            swal ( "Oops" ,  "Something went wrong !" ,  "error" )
                         
        }
    })
    
    
function reset()
{
    $('#text-itemName').val("");
    $('#text-itemCode').val("");
    $('#text-sellingPrice').val("");
    $('#text-discountPrice').val("");
    $('#text-model').val("");
    $('#text-ProductsellingType :selected').val("");
    $('#text-Description').val("");
    $("#text-image1")[0].value = "";
    $("#text-image2")[0].value = "";
    $("#text-image3")[0].value = "";
    $("#text-image4")[0].value = "";
     
    document.getElementById("prev1").src = "";
                           
    document.getElementById("prev2").src = "";
                          
     
    document.getElementById("prev3").src = "";
                          
     
    document.getElementById("prev4").src = "";

    $('#prev1').hide();
    $('#prev2').hide();
   $('#prev3').hide();
   $('#prev4').hide();
                          
}

    $('#btnreset').click(function()
    {
        reset();
    });
        

$('#btnId').click(function()
{
   postFormData();
   function postFormData()
   {
    var validationFlag=true;
    var itemName=$('#text-itemName').val();
    var itemCode=$('#text-itemCode').val();
    var sellingPrice=$('#text-sellingPrice').val();
    var discountPrice=$('#text-discountPrice').val();
    var model=$('#text-model').val();
    var productsellingType=$('#text-ProductsellingType :selected').val(); 
   
    var discription=$('#text-Description').val();



    if (itemName== '') 
    {
        $('#text-itemName').css('border-color', 'red');
        validationFlag=false;
    }
    else 
    {
        $('#text-itemName').css('border-color', '');
        
    }

    if (itemCode== '') 
    {
        $('#text-itemCode').css('border-color', 'red');
        validationFlag=false;
    }
    else 
    {
        $('#text-itemCode').css('border-color', '');
        
    }
    
    if (sellingPrice== '') 
    {
        $('#text-sellingPrice').css('border-color', 'red');
        validationFlag=false;
    }
    else 
    {
        $('#text-sellingPrice').css('border-color', '');
        
    }
    
    if (discountPrice== '') 
    {
        $('#text-discountPrice').css('border-color', 'red');
        validationFlag=false;
    }
    else 
    {
        $('#text-discountPrice').css('border-color', '');
        
    }
    
    if (model== '') 
    {
        $('#text-model').css('border-color', 'red');
        validationFlag=false;
    }
    else 
    {
        $('#text-model').css('border-color', '');
        
    }

    if (discription== '') 
    {
        $('#text-Description').css('border-color', 'red');
        validationFlag=false;
    }
    else 
    {
        $('#text-Description').css('border-color', '');
        
    }
    

    var form = new FormData(document.getElementById('formId'));
    form.append('ItemName',itemName);
    form.append('ItemCode',itemCode);
    form.append('SellingPrice',sellingPrice);
    form.append('DiscountPrice',discountPrice);
    form.append('Model',model);
    form.append('ProductsellingType',productsellingType);
    form.append('Description',discription);
    var file1 = document.getElementById('text-image1').files[0]; 
    var elem1 = document.getElementById("imageid1");     
    var elem2 = document.getElementById("imageid2");      
    var elem3 = document.getElementById("imageid3");         
    var elem4 = document.getElementById("imageid4");   
 
  

    
     if (typeof(file1)==="undefined"||file1=="")  
     {   
                          
        elem1.innerHTML = "Warning ! image required";
        elem1.style.color = "Red";
        validationFlag=false;
        
    }
    else
    {

        form.append('upload-image1', file1);
        elem1.innerHTML = "";
    }

    var file2 = document.getElementById('text-image2').files[0];
    if (typeof(file2)==="undefined"||file2=="")  
    {   
                        
        elem2.innerHTML = "Warning ! image required";
        elem2.style.color = "Red";
       validationFlag=false;
        
    }
    else
    {
        form.append('upload-image2', file2);
        elem2.innerHTML = "";
    }

    var file3 = document.getElementById('text-image3').files[0];
    if (typeof(file3)==="undefined"||file3=="") 
    {
        elem3.innerHTML = "Warning ! image required";
        elem3.style.color = "Red";
        validationFlag=false;
    }
    else
    {
        form.append('upload-image3', file3);
        elem3.innerHTML = "";
    }
    var file4 = document.getElementById('text-image4').files[0];
    if (typeof(file4)==="undefined"||file4=="") 
    {    
                    
    elem4.innerHTML = "Warning ! image required";
    elem4.style.color = "Red";
    validationFlag=false;
    }
    else
    {
        form.append('upload-image4', file4);
        elem4.innerHTML = "";
       
    }

if(validationFlag==false)
{
    $("#formId").submit(function(){
        return false;
    });
    $("#formId").submit(function(e){
        e.preventDefault();
   });
}
else
{
    $("#formId").submit(function(e){
         e.preventDefault();
    });
      $("#loading").show()
    var id=$("#hdnId").text();
   $.ajax({ url:'admin.php?action=Add&Id='+id,
   datatype:'json',
   type: 'post',
   data: form, 
   cache: false,
    contentType: false, //must, tell jQuery not to process the data
        processData: false,
   success: function(output)
   {
    
   if(output=="")
   {
    swal("Success !", "Successfully update the record!", "success");
      $("#loading").hide()
    reset();
   
   }
   else
   {
    swal("Failed !", "Something went wrong!", "error");
 
   }
       
    }
   });
}
}


});

$('.danger').click(function()
{
     //pop up
     swal({
        title: "Are you sure ??",
        text: "You will not be able to recover this record !", 
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

        var Id=this.id;
        $.ajax({ url:'admin.php?action=delete&id='+Id,
        datatype:'json', 
        type: 'get',
        success: function(output)
        {
            location.reload();
        }
        });
        swal("Deleted!", "Your record  has been deleted.", "success");

       
        //window.location.href = href;
      } else {
        swal("Your record  is safe!");
      }
    });

   

});

$('.default').click(function()
{
    
    var Id=this.id;
    window.location.href="additem.php?id="+Id;

});



});