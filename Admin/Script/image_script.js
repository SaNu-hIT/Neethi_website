$(document).ready(function()
{
  
   var itemId=$('#hdnId').text();

   if(itemId>0)
   {
   $('#prev1').show();
   $('#prev2').show();
   $('#prev3').show();
   $('#prev4').show()
   }
   else
   {
    $('#prev1').hide();
    $('#prev2').hide();
   $('#prev3').hide();
   $('#prev4').hide()
   }

    document.getElementById("text-image1").onchange = function () {
        var reader = new FileReader();
    debugger;
        reader.onload = function (e) {
           
            $('#imageid1').hide();
            var image = new Image();
                    //Set the Base64 string return from FileReader as source.
                    image.src = e.target.result;
                    image.onload = function () {
                        //Determine the Height and Width.
                        var height = this.height;
                        var width = this.width;
                        if (height > 800 && width > 800) 
                        {
                           
                            document.getElementById("prev1").src = e.target.result;
                           
                         
                        }
                        else{
                            swal ( "Oops" ,  "800 X 800 images only allowed !" ,  "error" )
                            $('#prev1').hide();
                            $("#text-image1")[0].value = "";

                            return false;
                        }
                    }
                  
            // get loaded data and render thumbnail.
          

        };
        reader.readAsDataURL(this.files[0]);
        $('#prev1').show();
        // read the image file as a data URL.
      
    };

   

    document.getElementById("text-image2").onchange = function () {
        var reader = new FileReader();
    
        reader.onload = function (e) {
            $('#imageid2').hide();
            // get loaded data and render thumbnail.
           // document.getElementById("prev2").src = e.target.result;
         

            var image = new Image();
                    //Set the Base64 string return from FileReader as source.
                    image.src = e.target.result;
                    image.onload = function () {
                        //Determine the Height and Width.
                        var height = this.height;
                        var width = this.width;
                        if (height > 800 && width > 800) 
                        {
                           
                            document.getElementById("prev2").src = e.target.result;
                           
                         
                        }
                        else{
                            swal ( "Oops" ,  "800 X 800 images only allowed !" ,  "error" )
                            $('#prev2').hide();
                            $("#text-image2")[0].value = "";
                            return false;
                        }
                    }
        
        
        };
    
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
        $('#prev2').show();
    };
   // previewFile();  //calls the function named previewFile()
 

   document.getElementById("text-image3").onchange = function () {
       var reader = new FileReader();
   
       reader.onload = function (e) {

        $('#imageid3').hide();
        var image = new Image();
                //Set the Base64 string return from FileReader as source.
                image.src = e.target.result;
                image.onload = function () {
                    //Determine the Height and Width.
                    var height = this.height;
                    var width = this.width;
                    if (height > 800 && width >800) 
                    {
                       
                        document.getElementById("prev3").src = e.target.result;
                       
                     
                    }
                    else{
                        swal ( "Oops" ,  "800 X 800 images only allowed !" ,  "error" )
                        $('#prev3').hide();
                        $("#text-image3")[0].value = "";
                        return false;
                    }
                }
              
        // get loaded data and render thumbnail.
      

    };
   
       // read the image file as a data URL.
       reader.readAsDataURL(this.files[0]);
       $('#prev3').show();
   };



   document.getElementById("text-image4").onchange = function () {
       var reader = new FileReader();
   
       reader.onload = function (e) {

        $('#imageid4').hide();
        var image = new Image();
                //Set the Base64 string return from FileReader as source.
                image.src = e.target.result;
                image.onload = function () {
                    //Determine the Height and Width.
                    var height = this.height;
                    var width = this.width;
                    if (height > 800 && width > 800) 
                    {
                       
                        document.getElementById("prev4").src = e.target.result;
                       
                     
                    }
                    else{
                        swal ( "Oops" ,  "800 X 800 images only allowed !" ,  "error" )
                        $('#prev4').hide();
                        $("#text-image4")[0].value = "";
                        return false;
                    }
                }
              
        // get loaded data and render thumbnail.
      

    };
       // read the image file as a data URL.
       reader.readAsDataURL(this.files[0]);
       $('#prev4').show();
   };
});