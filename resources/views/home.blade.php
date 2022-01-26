<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }} ">
    <title>Homeworks</title>
</head>
<body>
    <table>
        <h1>Homeworks</h1>
        <tr>
            <th>Name</th>
            <th>Grade</th>
            <th>Comment</th>
            <th>Url</th>
            <th colspan="2">Actions</th>
        </tr>
    @foreach ($hazifeladats as $hazifeladat)
        <tr>
            <td><a href="{{ route('hazifeladat.show', $hazifeladat->id) }}">{{ $hazifeladat->name }}</a></td>
            <td>{{ $hazifeladat->grade }}</td>
            <td>{{ $hazifeladat->comment }}</td>
            <td><a href="{{ $hazifeladat->url }}">{{ $hazifeladat->url }}</a></td>
            <td>
                <a href="{{ route('hazifeladat.edit', $hazifeladat->id) }}" class="edit">Edit</a>
            </td>
            <td>
            <form method="POST" action="{{ route('hazifeladat.destroy', $hazifeladat->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete">X</button>
                </form>
            </td>

        </tr>
    @endforeach
    </table>
    <p class="gomb"><a href="{{ route('hazifeladat.create') }}">Create new homework</a></p>
</body>
</html>
