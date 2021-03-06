<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="/home">DARLING COLLEGE</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbars">
                            <ul class="navbar-nav mr-auto">
                                @if (Route::has('login'))
                                    @if (Auth::check())
                                        <li class="nav-item dropdown">
                                            <a class="nav-link "  id="dropdown-class" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Grades</a>
                                            <div class="dropdown-menu" aria-labelledby="dropdown-class">
                                                <a class="dropdown-item" href="/grades">View All Grades</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle"  id="dropdown-class" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Classes</a>
                                            <div class="dropdown-menu" aria-labelledby="dropdown-class">
                                                <a class="dropdown-item" href="#">View Class</a>
                                                <a class="dropdown-item" href="/classes">View All Classes</a>
                                                <a class="dropdown-item" href="/class/add">Add a Class</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle"  id="dropdown-pupil" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pupils</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-pupil">
                                            <a class="dropdown-item" href="/pupils/">View All Pupils</a>
                                            <a class="dropdown-item" href="/pupil/add">Add a Pupil</a>
                                            <a class="dropdown-item" href="/pupils/">Edit a Pupil</a>
                                            <a class="dropdown-item" href="/pupil/promote/">Promote Pupils</a>
                                        </div>
                                    </li>
                                    @endif
                                @endif
                            </ul>
                            <ul class="navbar-nav navbar-right" >
                                @if (Auth::guest())
                                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                @else
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->firstname }}
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="account">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
</header>