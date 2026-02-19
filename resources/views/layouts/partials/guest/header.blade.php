<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" wire:navigate href="{{ route('welcome') }}">
            <img src="{{ asset('assets/ele') }}/logo-uhb.png" alt="GLOBE 2026 Logo" />
            GLOBE 2026
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" data-nav-section="home">Home</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ request()->routeIs('english-education.index') ? 'active' : '' }}" wire:navigate href="{{ route('english-education.index') }}">
                                English Education</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('social-humanities.index') ? 'active' : '' }}" wire:navigate href="{{ route('social-humanities.index') }}">
                                Social Humanities</a>
                        </li>
                    </ul>
                </li>

                {{ $slot }}
            </ul>
        </div>
    </div>
</nav>
