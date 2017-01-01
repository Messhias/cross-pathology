$(document).ready(function() {
	
	var add = {};

	add = {
		beforeSend:function(){
			$(".loadingMask").show();
		},
		error:function(e){

		},
		success:function(success){
			if (success) {
				window.location = url_development + "admin/doctors";
			}
		},
		complete:function(){
			$(".loadingMask").hide();
		}
	}

	$("#frmNewDoctor").ajaxForm(add);

});