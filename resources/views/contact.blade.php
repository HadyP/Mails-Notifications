@extends('layouts.app')
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
@section('content')
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
@endsection
