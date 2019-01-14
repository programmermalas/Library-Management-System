<!-- Sidebar -->
<ul class="sidebar navbar-nav">

    <li class="nav-item active">

        <a class="nav-link" href="{{ route('dashboard') }}">

            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
            
        </a>

    </li>

    <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="pagesBookDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            <i class="fas fa-fw fa-folder"></i>
            <span>Books</span>

        </a>

        {{-- dropdown-menu --}}
        <div class="dropdown-menu" aria-labelledby="pagesBookDropdown">

            <a class="dropdown-item" href="{{ route('book') }}">List Books</a>

            <div class="dropdown-divider"></div>
            
            <a class="dropdown-item" href="{{ route('author') }}">Authors</a>
            <a class="dropdown-item" href="{{ route('category') }}">Categories</a>
            <a class="dropdown-item" href="{{ route('case') }}">Book Cases</a>
            <a class="dropdown-item" href="{{ route('publisher') }}">Publishers</a>
            <a class="dropdown-item" href="{{ route('student') }}">Students</a>
            <a class="dropdown-item" href="{{ route('major') }}">Majors</a>

        </div>
        {{-- /dropdown-menu --}}
        
    </li>

    <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="pagesStudentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            <i class="fas fa-fw fa-folder"></i>
            <span>Students</span>

        </a>

        {{-- dropdown-menu --}}
        <div class="dropdown-menu" aria-labelledby="pagesStudentDropdown">
    
            <a class="dropdown-item" href="{{ route('student') }}">List Students</a>
    
            <div class="dropdown-divider"></div>
        
            <a class="dropdown-item" href="{{ route('major') }}">Majors</a>
    
        </div>
        {{-- /dropdown-menu --}}
        
    </li>

    <li class="nav-item">

        <a class="nav-link" href="#">

            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span>
            
        </a>

    </li>

</ul>