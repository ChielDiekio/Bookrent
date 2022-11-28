<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

@if ($errors->any())
    <div class="alert alert-danger">
        Error
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 pt-5">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="title" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Author:</strong>
                    <input type="text" name="author" class="form-control" placeholder="author" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Edition:</strong>
                    <input type="text" name="edition" class="form-control" placeholder="edition" required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button onclick="history.back()" class="btn btn-danger">back</button>
            </div>

    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>
</html>
