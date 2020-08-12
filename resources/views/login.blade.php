<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<form method="post" id="login">
	@csrf
  Tài Khoản :	<input type="text"  required="mời bạn điền thông tin " name="txtname"> <br> <br>
  Mật Khẩu :	<input type="password"  required="required" name="txtpass"> <br><br>
	<button type="submit" id="load_dl" >login</button>
	@if(session('status'))
	<div>{{session('status')}}</div>
	@endif
</form>
</body>
</html>