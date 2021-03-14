<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new client</title>
</head>
<body>
    <form method="Post" action="{{ route('add-posts')}}">
    @csrf
    <input type="text" name="title" placeholder="Name">
    <input type="text" name="body" placeholder="Surname">
    <button type="submit">Create</button> 
    </form>
</body>
</html>