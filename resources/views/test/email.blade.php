<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Email</title>
</head>
<body>
      <div class="container">
        <div class="row">
          <div class="col-sm bg-secondary text-white" style="margin-top: 200px;">
              <h2>Email方式raw</h2>
            <form method="POST" action="{{ route('email_send_raw') }}">
              @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email">
                  @error('email')
                      <div class="alert alert-danger">
                        {{ "需要輸入電子信箱" }}
                      </div>
                  @enderror
                </div>              
                <button type="submit" class="btn btn-primary">送出</button>
                @if (session('message'))
                    <p class="text-white">
                      {{session('message')}}
                    </p>
                @endif
              </form>
            </div>
          <div class="col-sm bg-primary text-white" style="margin-top: 200px;">
            <h2>認證郵件</h2>
            <form method="POST" action="{{ route('email_send_VerifyMail') }}">
              @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email">
                  @error('email')
                      <div class="alert alert-danger">
                        {{ "需要輸入電子信箱" }}
                      </div>
                  @enderror
                </div>              
                <button type="submit" class="btn btn-primary">送出</button>
                @if (session('message'))
                    <p class="text-white">
                      {{session('message')}}
                    </p>
                @endif
              </form>
          </div>
          <div class="col-sm bg-dark text-white" style="margin-top: 200px;">
            <h2>Email方式markdown</h2>
            <form method="POST" action="{{ route('email_send_markdown') }}">
              @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email">
                  @error('email')
                      <div class="alert alert-danger">
                        {{ "需要輸入電子信箱" }}
                      </div>
                  @enderror
                </div>              
                <button type="submit" class="btn btn-primary">送出</button>
                @if (session('message'))
                    <p class="text-white">
                      {{session('message')}}
                    </p>
                @endif
              </form>
          </div>
        </div>
      </div>
</body>
</html>