@include('layouts.welcome')
  
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links color-white">
            @auth
            <a href="{{ url('/admin') }}">Admin</a>
            @else
            <a class="btn btn-secondary btn-md" style="color: white" href="{{ route('login') }}">Go To Login Panel</a>

            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <h1 class="text-center">Welcome to Wisdom Well Library Center</h5>
                <div class="clockStyle" id="clock">00:00:00 --</div>
            </div>

            
        </div>
    </div>

