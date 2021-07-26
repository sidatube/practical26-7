<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-md-10">
        <h2>Bảng feedback</h2>
        <a class="btn btn-outline-primary" style="float: right" href="{{url("/feedback")}}">Add feedback</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @php $i=1 @endphp
            @foreach($data as $d)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$d->__get("name")}}</td>
                    <td>{{$d->__get("email")}}</td>
                    <td>{{$d->__get("tel")}}</td>
                    <td>{{$d->__get("feedback")}}</td>
                    <td></td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
