<!DOCTYPE html>
<html>
<head>
	<title>danh sách nhân viên đi làm</title>
<!-- 	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<h2 style="text-align: center;"> Danh Sách Nhân Viên Đi Làm </h2>
	<input type="text" name="txtnam" placeholder="Nhập Tên Nhân Viên ">
	<button type="submit">Tìm Kiếm</button><br>
<table  border="1" class="cu" width="100%">
	<tr>
		<th>tên nhân viên</th>
		<th>giờ bắt đầu</th>
		<th>giờ kết thúc</th>
		<th>note</th>
		<th>time</th>
	</tr class="content">
		@foreach($data as $u)
			<tr>
			<td>{{$u->name}}</td>
			<td>{{$u->starTime}}</td>
			<td>{{$u->EndTime}}</td>
			<td>{{$u->note}}</td>
			<td><a href=""></a>{{$u->time}}</td>
            </tr>



			@endforeach
			<!-- <button id="trang"> <a id="tr" href='danhsach?page=1'>trang 1</a></button>
				<button id="trang"> <a id="tr" href='danhsach?page=2'>trang 2</a></button> -->


			{!!$data->links()!!}
</table>

</body>


</script>

</html>