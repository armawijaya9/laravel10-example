<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arma</title>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Prodi</th>
        </tr>
        @foreach ($friends as $friend)
        <tr>
            <th>{{ $friend['name'] }}</th>
            <th>{{ $friend['prodi'] }}</th>
        </tr>
        @endforeach
    </table>
</body>
</html>
