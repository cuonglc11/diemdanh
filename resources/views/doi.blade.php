<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
			<td>{{$u->time}}</td>
            </tr>



			@endforeach
			

			{!!$data->links()!!}
</table>
</body>
</html>