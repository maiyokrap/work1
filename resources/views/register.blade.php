<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <Style>

    </Style>
    <style>
    .input-group {
        margin: 10px 0px 10px 0px;

    }

    form {
        width: 30%;
        margin: 0 auto;
        padding: 40px;
        border: 5px solid #b0c4de;
        background: #99ff99;
        border-radius: 10px 10px 10px 10px;
        text-align: center;
    }

    h1 {
        text-shadow: 2px 2px 5px red;
        text-align: center;
    }


    .input-group label {
        display: block;
        text-align: center;
        margin: 8px;

    }



    .form-control {
        width: 30%;
    }
    </style>

</head>


<body>
    <h1>สมัครสมาชิก</h1>
    <form action="{{route('register.store')}}" method="post">
        {{csrf_field()}}
        <div class="input-group">
            <label for="Firstname">ชื่อ</label>
            <input type="text" name="First_name" required>
        </div>
        <div class="input-group">
            <label for="Lastname">นามสกุล</label>
            <input type="text" name="Last_name" required>
        </div>
        <div class="input-group">
            <label for="Tel">เบอร์โทร</label>
            <input type="text" name="Tel" required>
        </div>
        <div class="input-group">
            <label for="Email">อีเมล์</label>
            <input type="email" name="Email" required>
        </div>
        <div class="input-group">
            <label for="Addess">ที่อยู่</label>
            <input type="text" name="Addess" required>
        </div>
        <div class="input-group">
            <label for="id_province">จังหวัด</label>
            <select name="id_province" required class="form-control province">
                <option value="">เลือกจังหวัด</option>
                @foreach($list as $row)
                <option value="{{$row->id_province}}">{{$row->name_th}}</option>
                @endforeach
            </select>
        </div>

        <div class="input-group">
            <label for="id_amphures">อำเภอ</label>
            <select name="id_amphures" class="form-control amphures">
                <option value="">เลือกอำเภอ</option>
            </select>
        </div>

        <div class="input-group">
            <label for="code">รหัสไปรษณีย์</label>
            <input type="text" name="zipcode" required id="zipcode">
        </div>
        <div class="input-group">
            <label for="Password">รหัสผ่าน</label>
            <input type="password" name="Password" required>
        </div>
        {{ csrf_field() }}
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">Register</button>
        </div>
        <a href="/login1">เป็นสมาชิกอยู่แล้ว</a>
    </form>
    {{csrf_field()}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
    $('.province').change(function() {

        var id = $(this).val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
            type: "POST",
            url: "{{ route('province.amphures')}}",
            data: {
                id: id,
                _token: _token
            },
            success: function(result) {
                $('.amphures').html(result);



            }
        })

    });
    $('.amphures').change(function() {

        var id = $(this).val();
        var _token = $('input[name="_token"]').val();
        $.ajax({

            type: "POST",
            url: "{{ route('province.zipcode')}}",
            data: {
                id: id,
                _token: _token
            },
            success: function(result) {
                // console.log(result);
                //
                $('#zipcode').val(result);



            }
        })

    });
    </script>



</body>







</html>