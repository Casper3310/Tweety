<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Email</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Email</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm bg-dark text-white" style="margin-top: 200px;">
                    <h2>留言板</h2>
                    <form method="post" action="{{ route('store_messagebord') }}">
                        @csrf
                        <textarea name="messagebord" id="" cols="50" rows="5" required></textarea>
                        <button class="btn btn-secondary" type="submit">新增</button>
                    </form>
                </div>
                <div class="col-sm bg-dark text-white" style="margin-top: 200px;">                   
                    <div>
                        @foreach ($Allmessage as $Allmessage)
                        <form method="post" action="{{ route('delete_messagebord') }}">
                            @csrf
                            @method('delete')
                            <li>{{$Allmessage->messagebord}}
                                <input name="id" type="hidden" value="{{$Allmessage->id}}">
                                <a href="{{ route('edit_messagebord',['id' => $Allmessage->id]) }}"
                                    class="btn btn-secondary">修改</a>
                                <button class="btn btn-secondary" type="submit">刪除</button>
                            </li>
                        </form>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </body>

    </html>

</body>

</html>
