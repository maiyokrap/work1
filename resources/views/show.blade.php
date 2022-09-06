<!DOCTYPE html>
<html>
<style>
table {
    border-collapse: collapse;
    width: 100%;
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


h2 {
    text-shadow: 2px 2px 5px red;
    text-align: center;
}

form {
    width: 30%;
    text-align: center;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #b0c4de;
    background: #99ff99;
    ;
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

.a {
    text-align: center;

}

.btn btn-danger {
    text-align: center;
    background: #99ff99;
}
</style>

<body>


    <a href="/login1" class="btn btn-danger" onclick="return confirm('ต้องการออกจากระบบ')">ออกจากระบบ</a> <br>
    <a href="{{route('province.show')}}">จัดการจังหวัด</a>

    <h2>แสดงรายชื่อพนักงาน</h2>

    <form action="" method="get">
        <div class="input-group">
            <label for="name">ค้นหาสมาชิกด้วย ชื่อ, นามสกุล, เบอโทรศัพท์และ Emaill</label>
            <input type="text" name="name" value="{{ request()->input('name') ? request()->input('name') : null }}">

        </div>

        <div class="input-group"> <br>
            <button type="submit" name="reg_user" class="btn">ค้นหา</button>
        </div>
    </form>
    <div class="container">
        <div class="row page-header">

        </div>
        <!-- /.row -->

        <!-- will be used to show any messages -->


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
                <td>{{$value->Addess}}&nbsp; อ. {{$value->getAmphures->name_th}} &nbsp;
                    จ.{{$value->getProvince->name_th}}&nbsp; {{$value->zipcode}}
                </td>
                <td>
                    <a href="{{route('register.edit',$value->Id)}}" class="btn btn-primary">แก้ไข</a>
                </td>
                <td>
                    <a name="btn btn-primary" style="background: yellow;" onclick="alertConfirm({{ $value->Id }})"
                        class="btn btn-danger delete">ลบ</a>
                </td>
                </td>


            </tr>
            @endforeach
        </table>



</body>

</html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function alertConfirm(id) {
    Swal.fire({
        title: 'ยืนยันการลบข้อมูล?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'ตกลง',
        cancelButtonText: "ยกเลิก"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "{{URL::to('/delete')}}" + '/' + id
        }
    })
}
</script>
