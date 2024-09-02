<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Reporte</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Marca</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $products as $product )
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->branch}}</td>
                    <td>{{$product->desc}}</td>
                    <td>{{$product->price}}</td>
                </tr>
            @endforeach

          
        </tbody>
      </table>
</body>

</html>