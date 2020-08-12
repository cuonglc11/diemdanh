$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN ': $('meta[name ="csrf-token"]').attr('content')
	}
});
$(document).ready(function(){

	$('#load_dl').click(function(){

		var url = "http://localhost:8888/diemdanh/public/login";
		var ng = $(this)parent().find("input[name='txtname']");
		var mk  = $(this)parent().find("input[name='txtpass']");
		$.ajax({
			url : '/login',
			type:'get',
			data: {"ng":ng,"mk":mk}
		})
	})
})