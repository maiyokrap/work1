<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>เพิ่มจังหวัด</title>
</head>
<body>
<h1>เพิ่มจังหวัด</h1>
    <form action="{{route('crud.store')}}" method = "post">
    {{ csrf_field() }}
    <div class="input-group">
            <label for="Province">จังหวัด</label>
            <input type="text" name="Province_Name" required> 
        </div>
        <div class="input-group">
            <label for="District">อำเภอ</label>
            <input type="text" name="District" required>
        </div>
        <div class="input-group">
            <button type="submit" name="add" class="btn">เพิ่ม</button>
        </div>
    
</body>
</html>