<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }} ">
    <title>Edit</title>
</head>
<body>
 <div class="centerDiv">
    <h1>Edit homework</h1>
    <form method='POST' action="{{ route('hazifeladat.update', $hazifeladat->id) }}">
        @method('PATCH')
        @csrf
        <div>
            Name:<br>
            <input type="text" name="name" value="{{ $hazifeladat->name }}">
            @error('name')
        <p>{{ $message }}</p>
    @enderror
        </div>
        <div>
            Grade:<br>
            <input type="text" name="grade" value="{{ $hazifeladat->grade }}">
            @error('grade')
        <p>{{ $message }}</p>
    @enderror
        </div>

        <div>
            Comment:<br>
            <input type="text" name="comment" value="{{ $hazifeladat->comment }}">
            @error('comment')
        <p>{{ $message }}</p>
    @enderror
        </div>
        <div>
            Comment:<br>
            <input type="text" name="url" value="{{ $hazifeladat->url }}">
            @error('url')
        <p>{{ $message }}</p>
    @enderror
        </div>
        <div class="gomb">
            <input  type="submit" value="Update" id="submitButton">
        </div>
    </form>
 </div>
</body>
</html>
