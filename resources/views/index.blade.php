<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>作品首頁</title>
</head>
<body>
    

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1>Laravel</h1>
                <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('email') }}">E-Mail</a></li>
                <li class="list-group-item"><a href=""></a></li>
                <li class="list-group-item"><a href=""></a></li>
                <li class="list-group-item"><a href=""></a></li>
                <li class="list-group-item"><a href=""></a></li>
                </ul>
            </div>
          <div class="col-sm">
            <h1>PHP</h1>
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('line_Notify') }}">串接Line notify API</a></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
              </ul>
          </div>
          <div class="col-sm">
            <h1>作品</h1>
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('home') }}">Tweety</a></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
              </ul>
          </div>
        </div>
      </div>

</body>
</html>