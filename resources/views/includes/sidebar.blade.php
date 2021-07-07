<div class="topbar">
    <div id="navv" class="sticky-top">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="background-color: white;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item px-3">
                            <br/>
                            <a class="nav-link active" aria-current="page" href="/login/home">HOME</a>
                        </li>
                        <li class="nav-item dropdown px-3">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" id="dropdownMenuLink"
                                role="button" aria-expanded="false">
                                ACADEMICS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/academics/academicslevel">Academic level</a></li>
                                <li><a class="dropdown-item" href="/login/booklist">Book List</a></li>
                                <li><a class="dropdown-item" href="/login/examroutine">Exam Routine</a></li>
                                <li><a class="dropdown-item" href="/academics/examresult">Exam Result</a></li>

                            </ul>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link active" aria-current="page" href="/gallery">GALLERY</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link active" aria-current="page" href="/notice">NOTICE</a>
                        </li>

                        <li class="nav-item px-3">
                            <a class="nav-link disabled" href="/library" tabindex="-1" aria-disabled="true">LIBRARY</a>
                        </li>
                        <li class="nav-item dropdown px-3">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                ABOUT US
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/aboutus/schoolprofile">School Profile & History</a>
                                </li>
                                <li><a class="dropdown-item" href="/aboutus/bot">Teachers</a></li>
                                <li><a class="dropdown-item" href="/aboutus/smsc">School Management Comittee</a></li>
                                <li><a class="dropdown-item" href="/aboutus/cont">Contributors</a></li>

                            </ul>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link active" aria-current="page" href="/contactus">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>


    <div class="sidebar">
        <h1 style="color: bisque">&nbsp;Dashboard</h1>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item px-3">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item dropdown px-3">
                <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" id="dropdownMenuLink" role="button"
                    aria-expanded="false">
                    Academics
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/academics/academicslevel">Academic level</a></li>
                    <li><a class="dropdown-item" href="/login/booklist">Book List</a></li>
                    <li><a class="dropdown-item" href="/login/examroutine">Exam Routine</a></li>
                    <li><a class="dropdown-item" href="/academics/examresult">Exam Result</a></li>

                </ul>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link active" aria-current="page" href="/gallery">Gallery</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link active" aria-current="page" href="/notice">Notice</a>
            </li>

            <li class="nav-item px-3">
                <a class="nav-link disabled" href="/library" tabindex="-1" aria-disabled="true">Library</a>
            </li>
            <li class="nav-item dropdown px-3">
                <a class="nav-link dropdown-toggle " href="#" data-toggle="dropdown" id="dropdownMenuLink" role="button"
                    aria-expanded="false">
                    About Us
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/aboutus/schoolprofile">School Profile & History</a></li>
                    <li><a class="dropdown-item" href="/aboutus/bot">Teachers</a></li>
                    <li><a class="dropdown-item" href="/aboutus/smsc">School Management Comittee</a></li>
                    <li><a class="dropdown-item" href="/aboutus/cont">Contributors</a></li>

                </ul>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link active" aria-current="page" href="/contactus">Contact Us</a>
            </li>
            <li class="nav-item px-3">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif


                {{-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif --}}
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        <strong>&nbsp;&nbsp;&nbsp;&nbsp;{{ Auth::user()->name }} </strong>
                    </a>


                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('login') }}" onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                   
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            </li>
            
        </ul>
    </div>

    

