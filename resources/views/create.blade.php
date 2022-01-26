<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }} ">
    <title>Create</title>
</head>
<body>
    <h1>Create new homework</h1>
    <form method="POST" action="{{ route('hazifeladat.store') }}">
    @csrf
    <p>Name</p>
    <input type="text" name="name">
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <p>Grade: </p>
    <input type="number" name="grade">
    @error('grade')
        <p>{{ $message }}</p>
    @enderror
    <p>URL: </p>
    <input type="text" name="url">
    @error('url')
        <p>{{ $message }}</p>
    @enderror
    <p>Comment</p>
    <input type="text" name="comment">
    @error('comment')
        <p>{{ $message }}</p>
    @enderror
    <p></p>
    <button type="submit">Submit</button>
    </form>
</body>
</html>
