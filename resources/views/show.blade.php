<!DOCTYPE html>
<html>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}


h2 {
  text-shadow: 2px 2px 5px red;
  text-align: center;
}
form {
    width: 30%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #b0c4de;
    background: #99ff99;;
    border-radius: 0px 0px 10px 10px;
}
input-group {
    margin: 10px 0px 10px 0px;
}

.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.a{
    text-align: center;

}



</style>
<body>
<a href="/">สมัคร</a> <br>
<a href="/login1">เข้าสู่ระบบ</a> <br>
<a href="/province">เพิ่มจังหวัด</a>

<h2>แสดงรายชื่อพนักงาน</h2>
 
<form action="" method="get">
    <div class="input-group">
        <label for="name">ชื่อ</label>
        <input type="text" name="name" value="{{ request()->input('name') ? request()->input('name') : null }}">

    </div>
    <div class="input-group">
        <label for="lastname">นามสกุล</label>
        <input type="text" name="lastname">
    </div>
    <div class="input-group">
        <label for="tel">เบอร์โทร</label>
        <input type="text" name="tel">
    </div>
    <div class="input-group">
        <label for="email">อีเมล์</label>
        <input type="email" name="email">
    </div>
    <div class="input-group"> <br>
        <button type="submit" name="reg_user" class="btn">ค้นหา</button>
    </div>
</form> <div class="container">
			<div class="row page-header">
				
			</div>
			 <!-- /.row -->
			 
			 <!-- will be used to show any messages -->
			@if (Session::has('message'))
				<div class="alert alert-success">{{ Session::get('message') }}</div>
			@endif
			<div class="table-responsive">

<table style="width:100%"><br>
  <tr>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>เบอร์โทร</th>
    <th>อีเมล์</th>
    <th>ที่อยู่</th>
    <th>แก้ไข</th>
    <th>ลบ</th>

  </tr>

  @foreach($data as $value)
 
 
  
  <tr>
    <td>{{$value->First_name}}</td>
    <td>{{$value->Last_name}}</td>
    <td>{{$value->Tel}}</td>
    <td>{{$value->Email}}</td>
    <td>{{$value->Addess}}</td>
    <td>
    <a href="{{route('register.edit',$value->Id)}}" class="btn btn-primary" >แก้ไข</a>
    </td>
    <td>
      <a href="{{route('crud.destroy',$value->Id)}}"class="btn btn-primary">ลบ</a>
    </td>
    </td>
    
     


  
    

    
  </tr>
    @endforeach  
</table>





</body>
</html>