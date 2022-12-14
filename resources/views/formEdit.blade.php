<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูล</title>
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

    <h1>แก้ไขข้อมูล</h1>
    <form action="{{route('crud.update')}}" method="post">
        {{ csrf_field() }}
        <input value="{{$id->Id}}" type="hidden" name="Id">
        <div class="input-group">
            <label for="Firstname">ชื่อ</label>
            <input value="{{$id->First_name}}" type="text" name="First_name" required>
        </div>
        <div class="input-group">
            <label for="Lastname">นามสกุล</label>
            <input value="{{$id->Last_name}}" type="text" name="Last_name" required>
        </div>
        <div class="input-group">
            <label for="Tel">เบอร์โทร</label>
            <input value="{{$id->Tel}}" type="text" name="Tel" required>
        </div>
        <div class="input-group">
            <label for="Email">อีเมล์</label>
            <input value="{{$id->Email}}" type="email" name="Email" required>
        </div>
        <div class="input-group">
            <label for="Addess">ที่อยู่</label>
            <input value="{{$id->Addess}}" type="text" name="Addess" required>

        </div>

        <div class="input-group">
            <label for="id_province">จังหวัด</label>
            <select name="id_province" required class="form-control province">

                @foreach($list as $row)

                <option value="{{$row->id_province}}" {{($row->id_province==$id->id_province)?'selected':''}}>
                    {{$row->name_th}}
                </option>
                @endforeach

            </select>
            <div class="input-group">
                <label for="id_amphures">อำเภอ</label>
                <select name="id_amphures" required class="form-control amphures">
                    @foreach($list1 as $row)
                    <option value="{{$row->id_amphures}}" {{($row->id_amphures==$id->id_amphures)?'selected':''}}>
                        {{$row->name_th}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group">
                <label for="Zipcode">รหัสไปรษณีย์</label>
                <input value="{{$id->zipcode}}" type="text" name="zipcode" id="zipcode">

            </div>
        </div>
        <div class="input-group">
            <button type="submit" name="edit" class="btn submit" onclick="myFunction()">ยืนยัน</button>
        </div>
        {{ csrf_field() }}
    </form>
    {{csrf_field()}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.29/sweetalert2.min.css"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.province').change()
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

    function myFunction() {
        alert("[บันทึกสำเร็จ]");
    }
    </script>