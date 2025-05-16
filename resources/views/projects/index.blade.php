<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($proyectos as $proyecto)
    <tr>
        <th scope="row">{{ $proyecto->id }}</th>
        <td>{{ $proyecto->titulo }}</td>
        <td>{{ $proyecto->descripcion }}</td>
        <td>{{ $proyecto->created_at }}</td>
    </tr>
    @endforeach
</body>
</html>