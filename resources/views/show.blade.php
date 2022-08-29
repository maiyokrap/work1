<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}


h2 {
  color: red;
  text-align: center;
}
form {
    width: 30%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #b0c4de;
    background: white;
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
a{
    text-align: center;

}



</style>
<body>

<h2>แสดงรายชื่อพนักงาน</h2>
 <a href="/">เพิ่มสมาชิก</a><br>
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
        <input type="email" name="tel">
    </div>
    <div class="input-group">
        <label for="email">อีเมล์</label>
        <input type="text" name="email">
    </div>
    <div class="input-group">
        <button type="submit" name="reg_user" class="btn">ค้นหา</button>
    </div>
</form>
<table style="width:100%"><br>
  <tr>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>เบอร์โทร</th>
    <th>อีเมล์</th>
    <th>ที่อยู่</th>
  </tr>

  @foreach($data as $value)
  
  <tr>
    <td>{{$value->First_name}}</td>
    <td>{{$value->Last_name}}</td>
    <td>{{$value->Tel}}</td>
    <td>{{$value->Email}}</td>
    <td>{{$value->Addess}}</td>
  
  </tr>
    @endforeach  
</table>





</body>
</html>