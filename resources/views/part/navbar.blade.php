<!-- Navbar -->
    <nav class="navbar navbar-toggleable-md bg-info fixed-top navbar-transparent " color-on-scroll="200">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                <a class="navbar-brand" href=" {{ url('') }}" rel="tooltip" title="Go to Home" data-placement="bottom">
                    <strong>HOME</strong>
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{ URL::asset('/img/blurred-image-1.jpg') }}">
                <ul class="navbar-nav">
					<!-- 
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin')}}">
                            <p><strong>ADMIN PAGE</strong></p>
                        </a>
                    </li>
                     -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://ilkom.unila.ac.id">
                            <p>Ilkom</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://fmipa.unila.ac.id">
                            <p>FMIPA</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://unila.ac.id">
                            <p>Unila</p>
                        </a>
                    </li>
                    @if (!Auth::guest())
                        <li class="nav-item">
                            <a class="nav-link text-warning navbar-brand" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            
                            <button class="btn btn-danger btn-sm">
                                <strong>logout</strong>
                            </button>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->