<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>INVENTARIO</title>
</head>

<body>
    <img src="" alt="" srcset="">
    <h1 class="text-center">INVENTARIO DE VEHÍCULOS</h1><br>
    <table id='transportes' class="table table-striped shadow-lg mt-4">
        <thead class="bg-dark text-white">
            <tr>
                <th>ID</th>
                <th>TIPO</th>
                <th>MARCA</th>
                <th>MODELO</th>
                <th>PLACA</th>
                <th>CHASIS</th>
                <th>MOTOR</th>
                <th>KILOMETRAJE</th>
                <th>CILINDRAJE</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transportes as $transporte)
                <tr>
                    <td>{{ $transporte->id }}</td>
                    <td>{{ $transporte->tipo }}</td>
                    <td>{{ $transporte->marca }}</td>
                    <td>{{ $transporte->modelo }}</td>
                    <td>{{ $transporte->placa }}</td>
                    <td>{{ $transporte->chasis }}</td>
                    <td>{{ $transporte->motor }}</td>
                    <td>{{ $transporte->kilometraje }}</td>
                    <td>{{ $transporte->cilindraje }}</td>
                    <td width="150px">
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
