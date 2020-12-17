<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: bold;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            
            .title {
                font-size: 84px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class=" m-b-md">
                    <div class="card">
                        <div class="card-header">
                            Send Email
                        </div>
                        <div class="card-body">
                            <form action="{{route('contactEmail')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email address: </label>
                                    <input type="email"  name="email" id="email" class="form-control-sm">
                                    @error('email')
                                        <div class="form-text text-muted">
                                           <p class="text-danger">{{$message}}</p> 
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm ">Send Email</button>

                                @if (session('message'))
                                    <div>
                                        {{session('message')}}
                                    </div>
                                @endif
                            </form> 
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </body>
</html>
