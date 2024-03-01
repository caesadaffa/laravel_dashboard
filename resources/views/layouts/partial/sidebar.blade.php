<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark sidebar" style="height: 100%">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">Bootstrap</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item home-sidebar">
            <a href="/home" class="nav-link text-white" aria-current="page">Home</a>
        </li>
        <li class="nav-item student-sidebar">
            <a href="/student" class="nav-link text-white">Student</a>
        </li>
        <li class="nav-item student-sidebar">
            <a href="/kelas" class="nav-link text-white">Kelas</a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong>{{ auth()->user()->name }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
            <form action="{{ route('Logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
            </form>
            </li>
        </ul>
    </div>
</div>