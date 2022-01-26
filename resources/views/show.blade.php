<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }} ">
    <title>Homework</title>
</head>
<body>
    <table>
    <h1>Homework</h1>
        <tr>
            <td>Name</td>
            <td>{{ $hazifeladat->name }}</td>
        </tr>
        <tr>
            <td>Grade</td>
            <td>{{ $hazifeladat->grade }}</td>
        </tr>
        <tr>
            <td>Comment</td>
            <td>{{ $hazifeladat->comment }}</td>
        </tr>
        <tr>
            <td>url</td>
            <td><a href="{{ $hazifeladat->url }}">{{ $hazifeladat->url }}</a></td>
        </tr>
    </table>
    <p class="gomb"><a href="{{ route('hazifeladat.index') }}">Back</a></p>
</body>
</html>
