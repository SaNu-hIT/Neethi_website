$(document).ready(function(){    
	$image_crop = $('#upload-image').croppie({
		enableExif: true,
		viewport: {
			width:400,
			height:400,
			type: 'square'
		},
		boundary: {
			width: 405,
			height: 405
		}
	});
	$('#images').on('change', function () { 

	
		var reader = new FileReader();
		reader.onload = function (e) {
			$image_crop.croppie('bind', {
				url: e.target.result
			}).then(function(){
				console.log('jQuery bind complete');

			});	
			
		}
		reader.readAsDataURL(this.files[0]);
	});


	$('.cropped_image').on('click', function (ev) {
		var ItemId=$('#text-ItemType').val();
		var Images=$('#images').val();
	if(ItemId==""||ItemId==0)
	{
		swal ( "Oops" ,  "Plese select Item/Product Code!" ,  "warning" );
		return false;
                       
	}
	else if(Images==""||Images==undefined)
	{
		swal ( "Oops" ,  "Plese Upload image!" ,  "warning" );
		return false;
	}
	else
	{
		$("#loading").show();

		$image_crop.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function (response) {

			console.log(response);
		
			$.ajax({
				url: "upload.php",
				type: "POST",
				data: {"image":response,"ItemId":ItemId},
				success: function (data) {
					
					$("#loading").hide();
					swal("Success !", "Successfully update the record!", "success");
					
				}
			});
		});

	}
	});	
});