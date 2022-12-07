<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booklist</title>

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
            <a class="btn btn-info m-2" href="/home">< back</a>
        </div>
        <div>
            <!-- get route with search function -->
            <form method="GET" action="{{ route('search') }}">
                <div>
                    <div class="overflow-hidden d-flex justify-content-center m-2">

                        <!-- input for search -->
                        <input type="search" name="search" value="{{ request()->input('search') }}"
                               class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-100"
                               placeholder="Search">

                        <!-- submits input -->
                        <button type='submit'
                                class='ml-4 inline-flex items-center px-4 py-2 bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded'>
                            {{ __('Search') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
    <table class="table table-bordered bg-pink-400 ">
            <tr class="bg-pink-600">
                <th>No</th>
                <th>isbn</th>
                <th>title</th>
                <th>edition</th>
                <th>author</th>
                <th></th>

            </tr>
            <!-- get books from controller and show as book in tr -->
            @foreach ($books as $book)
                <tr>

                    <td>{{ ++$i }}</td>

                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->edition }}</td>
                    <td>{{ $book->author }}</td>
                    <td>
                        <form action="{{ route('LendBook') }}" method="POST">
                        @csrf
                            <input type="hidden" name="book_id" value={{ $book->id }}>
                            <button type="submit" class="btn btn-primary"> Lend Book </button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>


<!-- //pagination -->
<div class="container d-flex justify-content-center">
    {{ $books->appends(request()->query())->links() }}
</div>


</body>
</html>
