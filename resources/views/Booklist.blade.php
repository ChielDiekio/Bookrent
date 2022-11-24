<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booklist</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          
</head>
<body>

<div class="container">
    <div class="row">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>isbn</th>
                    <th>title</th>
                    <th>edition</th>
                    <th>author</th>
                    <th></th>

                </tr>
                @foreach ($books as $book)
                    <tr>

                        <td>{{ ++$i }}</td>

                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->edition }}</td>
                        <td>{{ $book->author }}</td>
                
                        </tr>
                @endforeach
            </table>
    </div>
</div>



</body>
</html>
