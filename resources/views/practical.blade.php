<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<section class="section">
    <div class="container">
        <div class="col-md-8">
            <form action="{{url("/save")}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Student Name: </label>
                    <input type="text" name="name" placeholder="Name..." class="form-control">
                </div>
                <div class="form-group">
                    <label>Student Email: </label>
                    <input type="email" name="email" placeholder="Email..." class="form-control">
                </div>
                <div class="form-group">
                    <label>Student Telephone: </label>
                    <input type="tel" name="tel" placeholder="Tel..." class="form-control">
                </div>
                <div class="form-group">
                    <label>Feedback: </label>
                    <textarea name="feedback" placeholder="Feedback..." class="form-control"></textarea>
                </div>
                <div class="mt-3">
                    <button class="btn btn-outline-primary " type="submit">Save</button>
                    <button class="btn btn-outline-success " type="reset">Reset</button>
                    <a href="{{url("/")}}" class="btn btn-outline-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
