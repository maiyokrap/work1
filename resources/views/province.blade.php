<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มจังหวัด</title>
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
        margin: 8px;
    }

    .form-control {
        width: 30%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    th {
        background-color: #04AA6D;
        color: white;
    }
    </style>

</head>


<body>
    <a href="{{route('amphures.show')}}">จัดการอำเภอ</a> <br>
    <a href="/register/show">ย้อนกลับ</a>
    <h1>เพิ่มจังหวัด</h1>

    <form action="{{route('province.create')}}" method="post">
        {{ csrf_field() }}
        <div class="input-group">
            <label for="name_th">ชื่อจังหวัดภาษาไทย</label>
            <input type="text" name="name_th" required>
        </div>
        <div class="input-group">
            <label for="name_en">ชื่อจังหวัดภาษาอังกฤษ</label>
            <input type="text" name="name_en" required>
        </div>



        <button type="submit" name="add_province" class="btn" onclick="myFunction()">ยืนยัน</button>
        </div>
    </form>

    <table style="width:100%"><br>
        <tr>
            <th>ชื่อจังหวัดภาษาไทย</th>
            <th>ชื่อจังหวัดภาษาอังกฤษ</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
        </tr>
        @foreach($data as $value)

        <tr>
            <td>{{$value->name_th}}</td>
            <td>{{$value->name_en}}</td>

            <td>
                <a href="{{route('province.edit',$value->id_province)}}">แก้ไข</a>
            </td>

            <td>
                <a href="{{route('province.destroy',$value->id_province)}} " class="btn btn-danger"
                    onclick="return confirm('ต้องการลบจังหวัด')">ลบ</a>
            </td>
        </tr>
        @endforeach
    </table>
    <script>
    function myFunction() {
        alert("เพิ่มจังหวัดสำเร็จ");
    }
    </script>