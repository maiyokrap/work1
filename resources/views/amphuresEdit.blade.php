<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลจังหวัด</title>
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
        margin: 3px;
    }

    .form-control {
        width: 30%;

    }
    </style>
</head>

<body>
    <a href="/province/show">ย้อนกลับ</a>
    <h1>แก้ไขข้อมูลอำเภอ</h1>

    <form action="{{route('amphures.update')}}" method="post">
        {{ csrf_field() }}
        <div class="input-group">
            <label for="id_province">จังหวัด</label>
            <select name="id_province" required class="form-control province">

                @foreach($list as $row)

                <option value="{{$row->id_province}}" {{($row->id_province==$id->id_province)?'selected':''}}>
                    {{$row->name_th}}
                </option>
                @endforeach
            </select>

            <input value="{{$id->id_amphures}}" type="hidden" name="id_amphures">
            <div class="input-group">
                <label for="name_th">ชื่ออำเภอภาษาไทย</label>
                <input value="{{$id->name_th}}" type="text" name="name_th" required>
            </div>
            <div class="input-group">
                <label for="name_en">ชื่ออำเภอภาษาอังกฤษ</label>
                <input value="{{$id->name_en}}" type="text" name="name_en" required>
            </div>
            <div class="input-group">
                <label for="code">รหัสไปรษณีย์</label>
                <input value="{{$id->zipcode}}" type="text" name="code" required> 
            </div> <br>
            <div class="input-group">
                <button type="submit" name="edit" class="btn" onclick="myFunction()">ยืนยัน</button>
            </div>

</body>
<script>
function myFunction() {
    alert("บันทึกสำเร็จ");
}
</script>

</html>