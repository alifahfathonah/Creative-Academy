<nav class="navbar shadow-sm  fixed-top navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="{{ url('/') }}"><img class="nav-logo" src="{{ asset('images/logo.PNG') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav p-1">
                <li class="nav-item active">
                    <a class="nav-link nav-font" href="{{url('/') }}">HOME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-font" href="{{url('courses')}}">COURSES</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-font" href="{{url('courseplan')}}">BLOG</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-font" href="{{url('courseplan')}}">ABOUT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-font" href="{{url('courseplan')}}">CONTACT</a>
                </li>
                
                @if(Cookie::has('token')==true or Session::has('token')==true)
                    <li class="nav-item">
                        <a class="btn ml-2 normal-btn" href="{{url('classroom') }}">CLASS ROOM</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link nav-font" href="{{url('registration') }}">REGISTRATION</a>
                    </li>
                @endif
            </ul>
        </div>

    </nav>

