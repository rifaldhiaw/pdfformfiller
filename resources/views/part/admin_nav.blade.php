
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#">Dashboard</a> -->
                </div>
                <div class="collapse navbar-collapse">
                    <form class="navbar-form navbar-left navbar-search-form" role="search">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" value="" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                    	<li>
                    		<a href="{{ route('logout') }}"
                    		onclick="event.preventDefault();
                    		document.getElementById('logout-form').submit();">
                    		
                            <button class="btn btn-danger btn-sm my-0">
                                <strong>logout</strong>
                            </button>
	                    	</a>

	                    	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                    		{{ csrf_field() }}
	                    	</form>
                    	</li>
                	</ul>
                </div>
            </div>
        </nav>