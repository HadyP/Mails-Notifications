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
                    Show all notifications for the user
                </div>
                <div class="card-body">
                    @forelse ($notifications as $notification)
                        <li>
                            @if ($notification->type === 'App\Notifications\PaymentReceived')
                                We have recevied a payment of {{$notification->data['amount']}} from you.
                            @endif
                        </li>
                    @empty
                    <li>
                        You have unread notification this time.
                    </li>
                    @endforelse
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
