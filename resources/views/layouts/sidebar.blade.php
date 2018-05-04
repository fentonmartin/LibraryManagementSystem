<div class="sidebar" data-color="orange" data-image="/assets/img/sidebar-1.jpg" >
            <div class="logo">
                <a class="simple-text">
                Library Management <br> System 
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">

              <li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                    </a>
            </li>
                <li class="{{ Request::is('registration') ? 'active' : '' }}">
                    <a href="{{ url('registration') }}">
                     <i class="material-icons">content_paste</i>
                    <p>New Registration</p>
                    </a>
                </li>
                <li class="{{ Request::is('members') ? 'active' : '' }}">
                    <a href="{{ url('members') }}">
                <i class="material-icons">view_list</i>
                    <p>View Members</p>
                    </a>
                </li>
                <li class="{{ Request::is('books') ? 'active' : '' }}">
                    <a href="{{ url('books') }}">
                    <i class="material-icons">library_books</i>
                    <p>View All Books</p>
                    </a>
                </li>
                <li class="{{ Request::is('issues')||Request::is('issues_not_returned') ? 'active' : '' }}">
                    <a href="{{ url('issues') }}">                        
                    <i class="material-icons">list</i>
                    <p>Issue List</p>
                    </a>
                </li>
                <li class="{{ Request::is('categories') ? 'active' : '' }}">
                    <a href="{{ url('categories') }}">                        
             <i class="material-icons">dns</i>
                    <p>Categories</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin') }}">                        
             <i class="material-icons">accessible</i>
                    <p>Admin</p>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="material-icons">&#xE879;</i>
                        <p> Logout</p>                       
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>
                </li>
                </ul>
            </div>
        </div>

        