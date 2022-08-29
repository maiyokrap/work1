<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <Style>
        form {
    width: 30%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #b0c4de;
    background: white;
    border-radius: 0px 0px 10px 10px;
}
    </Style> 
    <style>
        .input-group {
    margin: 10px 0px 10px 0px;
    
}
form {
    width: 30%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #b0c4de;
    background: white;
    border-radius: 0px 0px 10px 10px;
}
h1{
    text-align: center;
}


.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
    </style>
    
</head>


<body>
<h1>สมัครสมาชิก</h1>
    <form action="{{route('register.store')}}" method = "post">
    {{ csrf_field() }}
    <div class="input-group">
            <label for="Firstname">ชื่อ</label>
            <input type="text" name="First_name">
        </div>
        <div class="input-group">
            <label for="Lastname">นามสกุล</label>
            <input type="text" name="Last_name">
        </div>
        <div class="input-group">
            <label for="Tel">เบอร์โทร</label>
            <input type="text" name="Tel">
        </div>
        <div class="input-group">
            <label for="Email">อีเมล์</label>
            <input type="email" name="Email">
        </div>
        <div class="input-group">
            <label for="Addess">ที่อยู่</label>
            <input type="text" name="Addess">
        </div>
        <div class="input-group">
            <label for="District">อำเภอ</label>
            <input type="text" name="District">
        </div>
        <div class="input-group">
            <label for="Province">จังหวัด</label>
            <input type="text" name="Province">
        </div>
        <div class="input-group">
            <label for="Zipcode">รหัสไปรษณีย์</label>
            <input type="text" name="Zip_code">
        </div>
        <div class="input-group">
            <label for="Password">รหัสผ่าน</label>
            <input type="password" name="Password">
        </div>
         <div class="input-group">
            <button type="submit" name="reg_user" class="btn">Register</button>
        </div>
        <a href="/">เป็นสมาชิกอยู่แล้ว</a>
    </form>
</body>
</html>