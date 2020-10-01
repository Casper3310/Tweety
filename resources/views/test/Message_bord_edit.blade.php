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
                    <form method="post" action="{{ route('update_messagebord') }}">
                        @csrf  
                        @method('PUT')    
                                       
                        @foreach ($message as $message)
                            <input name="id" type="hidden" value="{{$message->id}}">                      
                            <textarea name="messagebord" id="" cols="30" rows="10">{{$message->messagebord}}</textarea>
                        @endforeach
                        <button class="btn btn-secondary" type="submit">儲存修改</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>

</body>

</html>
