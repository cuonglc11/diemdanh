	<!DOCTYPE html>
	<html>
	<head>
		<title>ajav</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

		
			<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	</head>
	<body>
	<div class="containe">

		<div id="table_data">
			@include('danhsach')
		</div>
	</div>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
	</html>
	<script type="text/javascript">
	$(document).ready(function(){

	 $(document).on('click', '.pagination a', function(event){
	  event.preventDefault(); 
	  var page = $(this).attr('href').split('page=')[1];
	  pagination(page);
	 });

	 function pagination(page)
	 {
	  $.ajax({
	   url:"taglink/pagination?page="+page, //ham de chuyen trang
	   
	   success:function(data)
	   {
	    $('#table_data').html(data);
	   }
	  });
	}
	});
	</script>