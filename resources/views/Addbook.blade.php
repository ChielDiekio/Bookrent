<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Addbook</title>

    @vite('resources/css/app.css')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-blue-600">

<div class="container">

    <!-- show messagge when controller function succeed -->
    @if ($message = Session::get('success'))
        <div id="divId" class="alert alert-success">
            <button type="button"
                    class="close"
                    data-dismiss="alert"
                    aria-hidden="true">&times;
            </button>
            <p>{{ $message }}</p>
        </div>
    @endif
</div>
<script>
    $("button").click(function () {
        $("div.alert").slideUp(800).delay(2000);
    });
</script>

<div class="container">
    <div class="btn-group" role="group" aria-label="Basic example">
        <div>
            <a class="btn btn-success" style="margin: 20px" href="{{ url('create') }}">Add Book</a>
        </div>
        <div>
            <a class="btn btn-info" style="margin: 20px" href="/home">< back</a>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        
            <!-- show books in table -->
            <table class="table table-bordered bg-pink-400 ">
                <tr class=" bg-pink-600">
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
                        <td>

                            <!-- form for delete specific book -->
                            <form action="{{ route('destroy', $book->id) }}" method="POST">

                                @csrf
                                @method('Delete')

                                <button type="submit" class="btn btn-danger">Delete Book</button>

                            </form>
                        </td>

                        </tr>
                @endforeach
            </table>
    </div>
</div>

<!-- pagination -->
<div class="d-flex justify-content-center">
    {!! $books->links() !!}
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>
