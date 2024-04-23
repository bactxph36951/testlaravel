<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://127.0.0.1:8000/photos/{{$product->id}}" method="post">
    @csrf
    @method ("PUT")
        <label for="">Name</label>
        <input type="text" name="name" value="{{$product->name}}">
        <label for="">Prce</label>
        <input type="text" name="price" value="{{$product->price}}">
        <label for="">Email</label>
        <input type="text" name="email" value="{{$product->email}}">
        <input type="submit" value="Sua">
    </form>
    
</body>
</html>