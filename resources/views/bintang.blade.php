<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bintang</title>
</head>
<body>

    <table>
        <tr>
            <th>Name</th>
            <th>Prodi</th>
        </tr>

        @foreach ($lists as $list)
        <tr>
            <td>{{ $list->name }}</td>
            <td>{{ $list->prodi }}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>
