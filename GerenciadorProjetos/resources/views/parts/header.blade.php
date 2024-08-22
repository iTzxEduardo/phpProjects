<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard">
            <i class="fas fa-building"></i> <!-- Ícone de empresa -->
            <!-- Você pode escolher outro ícone, se preferir, da biblioteca Font Awesome -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @if (Auth::check())
                    <li class="nav-item">
                        <span class="navbar-text highlight-user">Olá, {{ Auth::user()->name }}</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Página Inicial</a>
                    </li>
                    @if (Auth::user()->isAdmin())
                        <li class="nav-item">
                            <a class="nav-link" href="/projetos">Página de Projetos</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <form action="/logout" method="post" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger nav-link">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="btn btn-outline-primary mx-2" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary mx-2" href="/registro">Registro</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar-brand {
        font-weight: bold;
        font-size: 1.25rem;
    }
    .navbar-brand i {
        margin-right: 8px;
    }
    .nav-link {
        padding-right: 15px;
        padding-left: 15px;
    }
    .navbar-text {
        margin-right: 15px;
    }
    .highlight-user {
        font-weight: bold;
        font-size: 1.2rem;
        color: #007bff;
    }
    .btn-outline-primary {
        border-color: #007bff;
        color: #007bff;
        background-color: transparent;
        font-size: 0.875rem;
        padding: 8px 16px;
        border-radius: 0.25rem;
        transition: all 0.3s ease;
    }
    .btn-outline-primary:hover {
        background-color: #007bff;
        color: #ffffff;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: #ffffff;
        font-size: 0.875rem;
        padding: 8px 16px;
        border-radius: 0.25rem;
        transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
    .btn-danger.nav-link {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
        padding: 0.375rem 0.75rem;
        border-radius: 0.25rem;
        text-align: center;
        text-decoration: none;
        white-space: nowrap;
    }
    .btn-danger.nav-link:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>
