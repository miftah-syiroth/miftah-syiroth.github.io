<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts::guest')] class extends Component {
    public string $title = 'Welcome';
};
?>

<div>
    <section id="home" class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">International Conference</div>
                <h1 class="hero-title">GLOBE 2026</h1>
                <h2 class="hero-subtitle">
                    Global Language, Opportunities for Excellence
                </h2>
                <p class="hero-description">
                    Universitas Harapan Bangsa, Purwokerto, Indonesia
                </p>
                <div class="row g-4 mt-2 justify-content-center conference-cards">
                    <div class="col-12 col-md-6 col-lg-6 d-flex">
                        <a href="{{ route('english-education.index') }}" wire:navigate class="card text-decoration-none w-100 border border-2 border-primary shadow-sm h-100">
                            <div class="card-body d-flex flex-column h-100">
                                <h5 class="card-title text-primary">English Education</h5>
                                <p class="card-text text-muted flex-grow-1">Technology, Culture, and Global Competence for Sustainable Futures</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex">
                        <div class="card card-unavailable w-100 border border-2 border-secondary h-100">
                            <div class="card-body d-flex flex-column h-100 position-relative">
                                <span class="badge card-unavailable-badge">Coming Soon</span>
                                <h5 class="card-title text-secondary">Social Humanities</h5>
                                <p class="card-text text-muted flex-grow-1">Economics, Management, and Law in Global Contexts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
