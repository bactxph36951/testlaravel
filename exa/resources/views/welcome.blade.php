<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($products as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->name}}</td>
                <td>{{$p->price}}</td>
                <td>{{$p->email}}</td>
                <td>
                    <a href="photos/{{$p->id}}/edit" class="btn btn-success">Sua</a>
                    <form action="photos/{{$p->id}}" method="post">
                    @csrf
                    @method ("DELETE")
                        <input type="submit" value="Xoa">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>