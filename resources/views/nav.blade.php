<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container">

        <a class="navbar-brand" href="{{url('/')}}">
            IPT2 Prelim
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/')}}"><i class="fas fa-home"></i> Home</a>
                </li>
                @if(Auth::check()) 
                    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/dashboard')}}"><i class="fas fa-th-large"></i> Dashboard</a>
                    </li>

                    <li class="nav-item dropdown" style="cursor: pointer">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://scontent-sin6-3.xx.fbcdn.net/v/t1.6435-9/56382727_2236334403076733_4712974966608363520_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=gw7tZp8U-FAAX8DLryp&tn=LKrrDk4D5H3NQWy7&_nc_ht=scontent-sin6-3.xx&oh=a8fa04798ab05e36e011b52b688944a2&oe=616F21A2" width="30" height="30" class="rounded-circle"> &nbsp;{{ auth()->user()->name }}</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
							<a class="dropdown-item" href="#"><i class="fas fa-user-cog"></i> My account</a>
							<a class="dropdown-item" href="{{url('/logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
						</div>
					</li>
                    
                @else
                    <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/login')}}">Login</a>
                    </li>
                    <li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/register')}}">Register</a>
                    </li>
                @endif
                
            </ul>
        </div>

    </div>
</nav>
