
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container">

    <div>
        <a class="btn btn-info m-2" href="/home">< back</a>
    </div>

    <div class="row">
    <h1>History</h1>
        <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Title:</th>
                        <th>Lend on:</th>
                    </tr>
                    @foreach ($overview as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->lend_on }}</td>


                        </tr>
                    @endforeach
        </table>
    </div>
</div>



<div>


</body>
</html>