<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Details</title>
</head>
<body>
    <h1> Pet Details</h1>

    <table border='1'>
        <tr>
            <td>id</td>
            <td>owner_id</td>
            <td>name</td>
            <td>species</td>
            <td>breed</td>
            <td>age</td>
            <td>weight</td>
            <td>created_at</td>
            <td>updated_at</td>

        </tr>
        @foreach ($animals as $animal)

        <tr>
            <td>{{$animal ['id']}}</td>
            <td>{{$animal ['owner_id']}}</td>
            <td>{{$animal ['name']}}</td>
            <td>{{$animal ['species']}}</td>
            <td>{{$animal ['breed']}}</td>
            <td>{{$animal ['age']}}</td>
            <td>{{$animal ['weight']}}</td>
            <td>{{$animal ['created_at']}}</td>
            <td>{{$animal ['updated_at']}}</td>

        </tr>
        @endforeach
    </table>
        


    </div>
    
</body>
</html>