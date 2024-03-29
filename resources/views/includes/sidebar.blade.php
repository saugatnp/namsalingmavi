<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
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
                            <a class="nav-link active" aria-current="page" href="/home"><i class="fa fa-home"></i>&nbsp;&nbsp;HOME</a>
                        </li>
                        <li class="nav-item dropdown px-3">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" id="dropdownMenuLink"
                                role="button" aria-expanded="false">
                                <i class="fa fa-book"></i>&nbsp;&nbsp;
                                ACADEMICS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dash-board/booklist">Book List</a></li>
                                <li><a class="dropdown-item" href="/dash-board/examroutine">Exam Routine</a></li>
                                <li><a class="dropdown-item disabled" href="/academics/examresult">SEE Result</a></li>
                            </ul>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link active" aria-current="page" href="/dash-board/gallery"><i class="fa fa-image"></i>&nbsp;&nbsp;GALLERY</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link active" aria-current="page" href="/dash-board/notice"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;NOTICE</a>
                        </li>

                        <li class="nav-item px-3">
                            <a class="nav-link disabled" href="/library" tabindex="-1" aria-disabled="true"><i class="fa fa-bookmark"></i></i>&nbsp;&nbsp;LIBRARY</a>
                        </li>
                        <li class="nav-item dropdown px-3">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-address-card"></i>&nbsp;&nbsp;ABOUT US
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dash-board/schoolprofile">School Profile & History</a>
                                </li>
                                <li><a class="dropdown-item" href="/dash-board/bot">Teachers</a></li>
                                <li><a class="dropdown-item" href="/dash-board/smsc">School Management Comittee</a></li>
                                 <li><a class="dropdown-item" href="/dash-board/pcomittee">Previous Comittee</a></li>

                            </ul>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link active disabled" aria-current="page" href="/contactus"><i class="fa fa-mobile"></i>&nbsp;&nbsp;CONTACT US</a>
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
                        <strong>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;{{ Auth::user()->name }} </strong>
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
            </div>
        </nav>
    </div>
</div>


    <div class="sidebar">
        <h1 style="color: bisque">&nbsp;Dashboard</h1>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item px-3">
                <a class="nav-link active" aria-current="page" href="/home"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
            </li>
            <li class="nav-item dropdown px-3">
                <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" id="dropdownMenuLink" role="button"
                    aria-expanded="false">
                    <i class="fa fa-book"></i>&nbsp;&nbsp;
                    Academics
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                    <li><a class="dropdown-item" href="/dash-board/booklist">Book List</a></li>
                    <li><a class="dropdown-item" href="/dash-board/examroutine">Exam Routine</a></li>
                    <li><a class="dropdown-item disabled" href="/academics/examresult">SEE Result</a></li>

                </ul>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link active" aria-current="page" href="/dash-board/gallery"><i class="fa fa-image"></i>&nbsp;&nbsp;Gallery</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link active" aria-current="page" href="/dash-board/notice"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;Notice</a>
            </li>

            <li class="nav-item px-3">
                <a class="nav-link disabled" href="/library" tabindex="-1" aria-disabled="true"><i class="fa fa-bookmark"></i></i>&nbsp;&nbsp;Library</a>
            </li>
            <li class="nav-item dropdown px-3">
                <a class="nav-link dropdown-toggle " href="#" data-toggle="dropdown" id="dropdownMenuLink" role="button"
                    aria-expanded="false">
                    <i class="fa fa-address-card"></i>&nbsp;&nbsp;
                    About Us
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/dash-board/schoolprofile">School Profile & History</a></li>
                    <li><a class="dropdown-item" href="/dash-board/bot">Teachers</a></li>
                    <li><a class="dropdown-item" href="/dash-board/smsc">School Management Comittee</a></li>
                   <li><a class="dropdown-item" href="/dash-board/pcomittee">Previous Comittee</a></li>

                </ul>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link active disabled" aria-current="page" href="/contactus"><i class="fa fa-mobile"></i>&nbsp;&nbsp;Contact Us</a>
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
                        <strong>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;{{ Auth::user()->name }} </strong>
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

    

