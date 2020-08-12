$.ajaxSetup({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      }); 
$(document).ready(function(){
	$('#load_dl').click(function(){
      var ten = $(this).parent().find("input[name='id']");
      var note = $(this).parent().find("input[name='txtnote']");
      var time = $(this).parent().find("input[name='txtdate']");
      var nv = $(this).parent().find("input[name='txtnguoi']");
      var dataString = {"ten":ten,"note":note,"time":time,"nv":nv};
      $.ajax({
      	type:'get',
      		url : 'luu',
	        data : dataString ,
	         success : function () {
                alert('điểm danh thành công cho nhân viên công ty');
            }
      });
	});
});
     // <input type="hidden" name="id" value="" id="name">
     //  	<input id="cuong" type="checkbox" name="txtnote" value="Note" id="ten"> Quên điểm danh <br>
     //        <input id="muon" type="time" name="txtdate" id="tg">
     //  	<input type="hidden" name="txtnguoi"  id="loa" value="{{Auth::user()->name}}">