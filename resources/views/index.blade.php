<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>作品首頁</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h5>參考</h5>
                <ul>
                    <li><a href="https://www.w3schools.com/html/html_lists.asp">HTML/CSS</a></li>
                    <li><a href="https://getbootstrap.com/docs/4.5/components/alerts/">bootstrap</a></li>
                    <li><a href="https://www.runoob.com/php/php-tutorial.html">PHP</a></li>
                    <li><a href="https://laravel.com/docs/7.x/routing">Laravel</a></li>
                    <li><a href="https://laracasts.com/series/laravel-6-from-scratch">laracasts</a></li>
                    <li><a href="https://magiclen.org/lamp/">安裝LAMP</a></li>
                    <li><a href="https://notify-bot.line.me/doc/en/">LINE notify API</a></li>
                    <li><a href="https://www.w3schools.com/js/default.asp">Javascript</a></li>
                    <li><a href="https://mailtrap.io/inboxes/1034653/messages">mailtrap</a></li>
                    <li><a href="https://oscarotero.com/jquery/">jquery</a></li>
                </ul>
            </div>
            <div class="col-sm">
                <h1>PHP</h1>
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('line_Notify') }}">串接Line notify API</a></li>
                    <li class="list-group-item"><a href="{{ route('email') }}">E-Mail</a></li>
                    <li class="list-group-item"><a href="{{ route('messagebord') }}">留言板</a></li>
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
    <div class="container">
        <div class="row">
            <div class="col-sm">
                
            </div>
            <div class="col-sm">

            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>
</body>

</html>
