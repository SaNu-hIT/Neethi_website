$(document).ready(function()
{
   
    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0;i<vars.length;i++) {
            var pair = vars[i].split("=");
            if(pair[0] == variable){return pair[1];}
        }
        return(false);
    }

var parameter= getQueryVariable("ItemId");
   // getDetailsData();
    function getDetailsData()
    {
    $.ajax({ url:'Product.php?action=ShowProductDetails&ItemId='+parameter+'',
    datatype:'json',
    type: 'post',
    success: function(output)
    {

        var res=JSON.parse(output);
    
       $('#nameId').text(res[0]['Name'])
       $('#priceIdsendtocheckout').text(res[0]['SellingPrice'])

       $('#priceId').html('RS '+res[0]['SellingPrice']+'<del> RS '+res[0]['SellingPrice']+'</del>')
      
       $('#paraId').html('<a href="#">'+res[0]['Code']+'</a>,<a href="#">'+res[0]['Name']+'</a>')
      
       $('#discriptionId').html(res[0]['Description']);


         var Imagetxt='';

         var ZoomImagetxt='';
        for(var j=0;j<res[0]['ImageUrl'].length;j++)
         {
           ZoomImagetxt=ZoomImagetxt+'<div class="item"><img class="zoom" src="'+res[0]['ImageUrl'][j]['ImageUrl']+'" alt="" data-zoom-image="'+res[0]['ImageUrl'][j]['ImageUrl']+'"></div>'
        
          Imagetxt=Imagetxt+'<div class="item"><img src="'+res[0]['ImageUrl'][j]['ImageUrl']+'" alt=""></div>';
         }
        // console.log(ZoomImagetxt);
         //ZoomImagetxt=ZoomImagetxt+'</div>';
         $('#ImagevarientId').html(Imagetxt);
         $('.ps-product__image').html(ZoomImagetxt);
    }
    });
    }
$('#tstId').click(function()

{
   
   
var numberval=$('#numberid').val();
var sizeval=$("#drpsizeid option:selected" ).text();
var nameval=$('#nameId').text();
var costval=$('#priceIdsendtocheckout').text(); 
//$('#priceId').text();  
var codeval='test';
    window.location = "checkout.php?name="+nameval+"&size="+sizeval+"&unit="+numberval+"&cost="+costval+"&code="+codeval+"";   

})



$(function() {
    $("#drpid").change(function() {
        var filter=$('option:selected', this).val();
        window.location = "product-listing.php?filter="+filter+"";   

    });
});


})

