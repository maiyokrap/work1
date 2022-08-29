<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
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
<h1>เข้าสู่ระบบ</h1>
    <form action="{{route('login.postLogin')}}" method = "post">
    {{ csrf_field() }}
    <div class="input-group">
            <label for="First_name">ชื่อ</label>
            <input type="text" name="First_name">
        </div>
        <div class="input-group">
            <label for="password">รหัสผ่าน</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">เข้าสู่ระบบ</button>
        </div>