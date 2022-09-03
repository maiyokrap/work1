<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ล็อกอิน</title>
</head>
<style>
h1 {
    text-shadow: 2px 2px 5px red;
    text-align: center;
}

form {
    width: 30%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #b0c4de;
    background: #99ff99;
    text-align: center;
    border-radius: 0px 0px 10px 10px;
}

input-group {
    margin: 10px 0px 10px 0px;
}

.input-group label {
    display: block;
    text-align: center;
    margin: 3px;
}
</style>

<body>
    <h1>เข้าสู่ระบบ</h1>
    <form action="{{route('login.postLogin')}}" method="post">
        {{ csrf_field() }}
        <div class="input-group">
            <label for="Firstname">ชื่อ</label>
            <input type="text" name="First_name" required>
        </div>
        <div class="input-group">
            <label for="password">รหัสผ่าน</label>
            <input type="password" name="password" required>
        </div>

        <div class="form-group"> <br>
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
            </div><br>
            <a href="/">ต้องการสมัครสมาชิก</a>

</body>

</html>