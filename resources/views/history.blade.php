<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="{{ URL::asset('css/homese.css') }}" rel="stylesheet">

</head>
<body>

<h1>History</h1>
<table class="rwd-table">
  <tr>
    <th></th>
    <th>Title:</th>
    <th>Lend on:</th>
  </tr>
  @foreach ($history as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->created_at }}</td>
                </tr>
            @endforeach
</table>




</body>
</html>