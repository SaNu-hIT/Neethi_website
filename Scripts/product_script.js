$(document).ready(function()
{
    getFeaturedData();
    getTopSellData();
    function getFeaturedData()
    {
    $.ajax({ url:'Product.php?action=ShowProduct&oprMode=FTR',
    datatype:'json',
    type: 'get',
    success: function(output1)
    {
        HandleData(output1,"tst");
    }
    });
    }

    function getTopSellData()
    {
    $.ajax({ url:'Product.php?action=ShowProduct&oprMode=TOP',
    datatype:'json',
    type: 'get',
    success: function(output)
    {
       
        HandleDataTopSell(output,"topId");
    }
    });
    }

function HandleData(output,tst)
{
    var res=JSON.parse(output);
    //  console.log(res);
      var stringData='<div class="grid-sizer"></div>';
    for(var i=0;i<res.length;i++)
      {
      
         stringData=stringData+'<div class="grid-item kids"> <div class="grid-item__content-wrapper"><div class="ps-shoe mb-30"><div class="ps-shoe mb-30"> <div class="ps-shoe__thumbnail">';
         stringData=stringData+'<div class="ps-badge"><span>New</span></div><div class="ps-badge ps-badge--sale ps-badge--2nd"><span>'+res[i]['Discount']+' %</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="'+res[i]['ImageUrl'][0]['ImageUrl']+'" alt=""><a class="ps-shoe__overlay" href="product-detail.php?ItemId='+res[i]['Id']+'"></a></div>';
         var Imagetxt=""
         for(var j=0;j<res[i]['ImageUrl'].length;j++)
         {
          Imagetxt=Imagetxt+'<img src="'+res[i]['ImageUrl'][j]['ImageUrl']+'" alt="">';
         }
         stringData=stringData+'<div class="ps-shoe__content"><div class="ps-shoe__variants"><div class="ps-shoe__variant normal">'+Imagetxt+'</div>';
         stringData=stringData+'<select class="ps-rating ps-shoe__rating"><option value="1">1</option><option value="1">2</option><option value="1">3</option><option value="1">4</option><option value="1">4</option></select></div>'
         stringData=stringData+'<div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">'+res[i]['Name']+'</a><p class="ps-shoe__categories"><a href="#">'+res[i]['Code']+'</a>,<a href="#">'+res[i]['Code']+'</a>,</p><span class="ps-shoe__price">';        
         stringData=stringData+'<del>RS '+res[i]['SellingPrice']+' </del> RS '+res[i]['SellingPrice']+'</span></div></div></div></div></div></div>';

      }
      console.log("tst "+stringData);
     $('#'+tst).html(stringData);
}


function HandleDataTopSell(output,tst)
{
     var res=JSON.parse(output);
      console.log(res);
      var stringData='';
    for(var i=0;i<res.length;i++)
      {
      
         stringData=stringData+'<div class="ps-shoes--carousel"><div class="ps-shoe"><div class="ps-shoe__thumbnail">'; 
         stringData=stringData+' <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="'+res[i]['ImageUrl'][0]['ImageUrl']+'" alt=""><a class="ps-shoe__overlay" href="product-detail.php?ItemId='+res[i]['Id']+'"></a></div><div class="ps-shoe__content"><div class="ps-shoe__variants">';
         var Imagetxt=""
         for(var j=0;j<res[i]['ImageUrl'].length;j++)
         {
          Imagetxt=Imagetxt+'<img src="'+res[i]['ImageUrl'][j]['ImageUrl']+'" alt="">';
         }
         stringData=stringData+'<div class="ps-shoe__content"><div class="ps-shoe__variants"><div class="ps-shoe__variant normal">'+Imagetxt+'</div>';
         stringData=stringData+'<select class="ps-rating ps-shoe__rating"><option value="1">1</option><option value="1">2</option><option value="1">3</option><option value="1">4</option><option value="1">4</option></select></div>';
         stringData=stringData+'<div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detail.php?ItemId='+res[i]['Id']+'">'+res[i]['Name']+'</a>';
         stringData=stringData+'<p class="ps-shoe__categories"><a href="#">'+res[i]['Name']+'</a><a href="#">'+res[i]['Name']+'</a></p><span class="ps-shoe__price">RS '+res[i]['SellingPrice']+'</span> </div> </div> </div></div>';    
                
      }
      //alert("top"+output);
     // console.log(stringData);
     $('#'+tst).html(stringData);
}




})