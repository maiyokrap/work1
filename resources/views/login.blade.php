<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ล็อกอิน</title>
</head>

<body>
<h1>เข้าสู่ระบบ</h1>
    <form action="{{route('login.postLogin')}}" method = "post">
    {{ csrf_field() }}
    <div class="input-group">
            <label for="Firstname">ชื่อ</label>
            <input type="text" name="First_name">
        </div>
        <div class="input-group">
            <label for="password">รหัสผ่าน</label>
            <input type="password" name="password">
        </div>
        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    เข้าสู่ระบบ
                                </button>
                            </div>
</body>
</html>