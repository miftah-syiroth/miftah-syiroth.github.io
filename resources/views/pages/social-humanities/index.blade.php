<?php
 
use Livewire\Component;
use Livewire\Attributes\Layout;
 
new #[Layout('layouts::social-humanities')] class extends Component {
    public string $title = 'Social Humanities';
};
?>
 
 <div>
    <x-layouts::partials.guest.header />

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">International Conference</div>
                <h1 class="hero-title">GLOBE 2026</h1>
                <h2 class="hero-subtitle">
                    Global Learning, Opportunities, and Bridges in English Education
                </h2>
                <p class="hero-description">
                    Universitas Harapan Bangsa, Purwokerto, Indonesia
                </p>
                <div class="hero-date">April 9<sup>th</sup>, 2026</div>
                <div class="mt-4">
                    <a href="#registration" class="btn btn-light btn-lg me-3">Register Now</a>
                    <a href="#papers" class="btn btn-outline-light btn-lg">Submit Paper</a>
                </div>
            </div>
        </div>
    </section>
</div>