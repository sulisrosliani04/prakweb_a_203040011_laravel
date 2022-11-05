<!--navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
        <a class="navbar-brand" href="#">Sulis Rosliani Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" {{ ($active === "Home")?'active' : '' }} href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" {{ ($active === "About")?'active' : '' }} href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" {{ ($active === "Posts")?'active' : '' }} href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" {{ ($active === "Categories")?'active' : '' }} href="/categories">Categories</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a>
                        <div class="dropdown-divider"></div>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                        </form>
                </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{($active === "login") ? 'active' : ''}}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!--end navbar-->
