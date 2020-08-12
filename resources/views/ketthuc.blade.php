<!DOCTYPE html>
<html>
<head>
	<title>kết thúc giờ làm</title>
</head>
<body>
<form method="post" action="{{route('save_ketthuc')}}">
	@csrf
	<input type="hidden" name="id" value="{{$id}}">

	  <table border="1" width="100%">
            <tr>
            <th>Tên nhân viên</th>
            <th>email</th>
           
            </tr>
            <tr>
                  
                  <tr>
                  <td>{{Auth::user()->name}}</td>
                  <td>{{Auth::user()->email}}</td>
                    
            </tr>
      </table>
            <button type="submit" id="">Kết Thúc</button>
            @if(session('status'))
	<div>{{session('status')}}</div>
	@endif
</form>
</body>
</html>