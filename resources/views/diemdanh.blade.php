<!DOCTYPE html>
<html>
<head>
	<title>Điểm danh</title>
    <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script>
           $(function (){
          $('#cuong').change(function() {
              var element = $(this);
              var checked = element.prop("checked");
              
              if(checked)
              {
                $('#muon').show();
                element.val(1);
              }
              else
              {
                  $('#muon').hide();
                  element.val(0);
              }
                
                
          });  
        });
      </script>  -->
      <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}"> 
  <script type="text/javascript" src="{{asset('js/ajax.js')}}"></script>  
</head>
<body>
	<h2 style="text-align: right;">Tên Nhân Viên: {{Auth::user()->name}}</h2>
      <a href="{{route('login')}}" style="float: right;">login </a>
      <table border="1" width="100%">
            <tr>
            <th>Tên nhân viên</th>
            <th>email nhân viên </th>
           
            </tr>
            <tr>
                  
                  <tr>
                  <td>{{Auth::user()->name}}</td>
                  <td>{{Auth::user()->email}}</td>
                
            </tr>
      </table>
	
      <!-- <form method="post" action="{{route('luu')}}">  -->
       	@csrf
            <input type="hidden" name="id" value="" id="name">
      	<input id="cuong" type="checkbox" name="txtnote" value="Note" id="ten"> Quên điểm danh <br>
            <input id="muon" type="time" name="txtdate" id="tg">
      	<input type="hidden" name="txtnguoi"  id="loa" value="{{Auth::user()->name}}">
      	<button type="button" id="load_dl">Điểm danh</button><br>
            <!--  <input id="quen" type="checkbox" name="txtquen" value="quendiemdanh">  <br>
             <input  id="updata" type="datatime-local" name="thoigian"> -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
              <script>
           $(function (){

                  $('#muon').hide();
                  $('#cuong').val(0);
          $('#cuong').change(function() {
              var element = $(this);
              var checked = element.prop("checked");
              
              if(checked)
              {
                $('#muon').show();
                element.val(1);
              }
              else
              {
                  $('#muon').hide();
                  element.val(0);
              }

                
                
          }); 
           $('#quen').change(function(){
                  var em = $(this);
                  var nho = em.prop("checked");
                  if(nho){
                        alert("mời bạn điểm danh trong ngày làm việc mới");
                  }
               }); 
        });
      </script> 
                 
                  	
       </form> 


</body>
</html>