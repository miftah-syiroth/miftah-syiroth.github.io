<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts::english-education')] class extends Component {
    public string $title = 'English Education';
};
?>

<div>
    <!-- Navigation -->
    <x-layouts::partials.guest.header>
        <li class="nav-item">
            <a class="nav-link" href="#about" data-section="about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#theme" data-section="theme">Theme</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#dates" data-section="dates">Important Dates</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#registration" data-section="registration">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#papers" data-section="papers">Call for Papers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contact" data-section="contact">Contact</a>
        </li>
    </x-layouts::partials.guest.header>

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

    <section class="section">
        <div class="container">
            <h2 class="section-title">Hosts</h2>
            <p class="section-subtitle text-warning">To be confirmed</p>

            <div class="row co-host-row">
                <div class="col-lg co-host-col mb-4">
                    <a href="https://uhb.ac.id/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele') }}/logo-uhb.png" alt="Universitas Harapan Bangsa" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">Universitas Harapan Bangsa</h6>
                                <p class="co-host-location">Purwokerto, Indonesia</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg co-host-col mb-4">
                    <a href="https://unukalbar.ac.id/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele') }}/logo-unu.png" alt="Universitas Nahdlatul Ulama" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">Universitas Nahdlatul Ulama</h6>
                                <p class="co-host-location">Kalimantan Selatan, Indonesia</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg co-host-col mb-4">
                    <a href="https://www.umko.ac.id/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele') }}/logo-umko.png" alt="Universitas Muhammadiyah" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">Universitas Muhammadiyah</h6>
                                <p class="co-host-location">Kotabumi, Indonesia</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg co-host-col mb-4">
                    <a href="https://poltesa.ac.id/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele') }}/logo-poltesa.png" alt="Politeknik Negeri Sambas" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">Politeknik Negeri Sambas</h6>
                                <p class="co-host-location">Sambas, Indonesia</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg co-host-col mb-4">
                    <a href="https://www.untan.ac.id/program-doktor/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele') }}/logo-untan.png" alt="Universitas Tanjungpura" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">
                                    Doctoral Program of Education Universitas Tanjungpura
                                </h6>
                                <p class="co-host-location">Pontianak, Indonesia</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section id="about" class="section bg-light-custom">
        <div class="container">
            <h2 class="section-title">About GLOBE Forum 2026</h2>
            <p class="section-subtitle">
                Shaping the Future of English Language Education
            </p>

            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-3">Introduction</h3>
                            <p class="card-text text-justify">
                                In today's rapidly evolving global landscape, English Language
                                Education (ELE) stands at the intersection of technology,
                                culture, and sustainability. The emergence of Artificial
                                Intelligence (AI), multimodal learning environments, and
                                digital communication has transformed how English is taught,
                                learned, and used across contexts. Simultaneously, the need
                                for intercultural understanding and global citizenship has
                                become increasingly vital in building more inclusive,
                                equitable, and sustainable societies.
                            </p>
                            <p class="card-text mt-3 text-justify">
                                <strong>GLOBE Forum 2026</strong> seeks to respond to these
                                challenges and opportunities by creating a dynamic platform
                                for educators, researchers, policymakers, and industry
                                practitioners to exchange ideas and innovations. This seminar
                                highlights the pivotal role of English language education in
                                shaping future-ready learners—individuals who are not only
                                linguistically competent but also digitally literate,
                                culturally aware, and socially responsible. Through dialogue
                                and collaboration, GLOBE 2026 aims to bridge academia and
                                industry, local and global perspectives, and theory and
                                practice to foster sustainable futures in English education.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="mt-5 mb-4" style="color: var(--primary-color); font-weight: 600">
                Objectives
            </h3>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="objective-card">
                        <h5 style="color: var(--primary-color); font-weight: 600">
                            <i class="bi bi-check-circle-fill"></i>
                            Innovative Pedagogy
                        </h5>
                        <p class="mb-0">
                            To explore innovative pedagogical approaches that integrate
                            technology and multimodality in English language teaching and
                            learning.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="objective-card">
                        <h5 style="color: var(--primary-color); font-weight: 600">
                            <i class="bi bi-check-circle-fill"></i>
                            Intercultural Communication
                        </h5>
                        <p class="mb-0">
                            To promote intercultural communication competence and global
                            citizenship through English education.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="objective-card">
                        <h5 style="color: var(--primary-color); font-weight: 600">
                            <i class="bi bi-check-circle-fill"></i>
                            Collaboration
                        </h5>
                        <p class="mb-0">
                            To strengthen collaboration among educational institutions,
                            professional associations, and industry partners in advancing
                            sustainable language education.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="objective-card">
                        <h5 style="color: var(--primary-color); font-weight: 600">
                            <i class="bi bi-check-circle-fill"></i> Research & Best
                            Practices
                        </h5>
                        <p class="mb-0">
                            To showcase research and best practices addressing current
                            global issues in English language education, including digital
                            transformation, ethics, and inclusion.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="objective-card">
                        <h5 style="color: var(--primary-color); font-weight: 600">
                            <i class="bi bi-check-circle-fill"></i>
                            Empowering Educators
                        </h5>
                        <p class="mb-0">
                            To inspire educators to design learning experiences that empower
                            students to engage responsibly in a globalized and
                            interconnected world.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="section-title">Opening Remarks</h2>
            <p class="section-subtitle">
                Welcome address from our keynote opening speaker
            </p>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="speaker-card">
                        <!-- <img
                      src="{{ asset('assets/ele') }}/logo-uhb.png"
                      alt="Logo"
                      class="speaker-logo"
                    /> -->
                        <div class="speaker-photo w-100">
                            <img src="{{ asset('assets/ele') }}/opening-remarks.png" alt="Opening Remarks Speaker"
                                style="height: 250px" />
                        </div>
                        <div class="speaker-info">
                            <h5 class="speaker-name pb-0">Dr. Ummi Khaerati Syam, M. Pd.</h5>
                            <!-- <p class="speaker-institution">[Institution/Organization]</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Speakers Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Keynote Speakers</h2>
            <p class="section-subtitle">
                Insights from leading global experts
            </p>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="speaker-card">
                        <img src="{{ asset('assets/ele/logo-uum.png') }}" alt="Logo" class="speaker-logo" />
                        <div class="speaker-photo w-100">
                            <img src="{{ asset('assets/ele/keynote01.png') }}"
                                alt="Prof. Madya Dr. Hishamudin bin Isam" style="height: 200px" />
                        </div>
                        <div class="speaker-info">
                            <h5 class="speaker-name pb-0">
                                Prof. Madya Dr. Hishamudin bin Isam
                            </h5>
                            <!-- <p class="speaker-title">Professor of Applied Linguistics</p> -->
                            <p class="speaker-institution">Universiti Utara Malaysia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="speaker-card">
                        <img src="{{ asset('assets/ele') }}/logo-lu.png" alt="Lucknow University"
                            class="speaker-logo" />
                        <div class="speaker-photo w-100">
                            <img src="{{ asset('assets/ele') }}/keynote02.png" alt="Prof. R. P. Singh"
                                style="height: 200px" />
                        </div>
                        <div class="speaker-info">
                            <h5 class="speaker-name">Prof. R. P. Singh</h5>
                            <p class="speaker-institution">Lucknow University, India</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="speaker-card">
                        <img src="{{ asset('assets/ele/logo-su.png') }}" alt="Superior University, Pakistan"
                            class="speaker-logo" />
                        <div class="speaker-photo w-100">
                            <img src="{{ asset('assets/ele/keynote04.png') }}" alt="Zohaib Hassan Sain"
                                style="height: 200px" />
                        </div>
                        <div class="speaker-info">
                            <h5 class="speaker-name">Zohaib Hassan Sain</h5>
                            <p class="speaker-institution">Superior University, Pakistan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Theme & Scopes Section -->
    <section id="theme" class="section bg-light-custom">
        <div class="container">
            <h2 class="section-title">Theme & Scopes</h2>
            <p class="section-subtitle">
                Exploring the Future of English Language Education
            </p>

            <div class="theme-card">
                <h3>
                    "English Language Education for Sustainable Futures: Technology,
                    Culture, and Global Competence"
                </h3>
            </div>

            <h4 class="mb-4" style="color: var(--primary-color); font-weight: 600">
                Scopes and Sub-Themes
            </h4>
            <p class="mb-4">
                Participants may submit papers, best-practice reports, or project
                presentations related (but not limited) to the following areas:
            </p>

            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="scope-item">
                        <h6 style="font-weight: 600; color: var(--primary-color)">
                            Technology-Enhanced Language Learning
                        </h6>
                        <p class="mb-0">TELL and AI integration in ELT</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="scope-item">
                        <h6 style="font-weight: 600; color: var(--primary-color)">
                            Multimodal and Digital Pedagogies
                        </h6>
                        <p class="mb-0">For engagement and creativity</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="scope-item">
                        <h6 style="font-weight: 600; color: var(--primary-color)">
                            Intercultural Communication
                        </h6>
                        <p class="mb-0">Global Citizenship Education</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="scope-item">
                        <h6 style="font-weight: 600; color: var(--primary-color)">
                            Curriculum Innovation
                        </h6>
                        <p class="mb-0">Sustainable English Education</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="scope-item">
                        <h6 style="font-weight: 600; color: var(--primary-color)">
                            Language Assessment
                        </h6>
                        <p class="mb-0">In the Digital Age</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="scope-item">
                        <h6 style="font-weight: 600; color: var(--primary-color)">
                            Teacher Professional Development
                        </h6>
                        <p class="mb-0">And Well-being</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="scope-item">
                        <h6 style="font-weight: 600; color: var(--primary-color)">
                            English for Specific Purposes
                        </h6>
                        <p class="mb-0">ESP and industry collaboration</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="scope-item">
                        <h6 style="font-weight: 600; color: var(--primary-color)">
                            English in Multilingual Contexts
                        </h6>
                        <p class="mb-0">Multicultural Contexts</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="scope-item">
                        <h6 style="font-weight: 600; color: var(--primary-color)">
                            Critical Literacy, Inclusion, and Equity
                        </h6>
                        <p class="mb-0">In English Education</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="scope-item">
                        <h6 style="font-weight: 600; color: var(--primary-color)">
                            Partnerships
                        </h6>
                        <p class="mb-0">Between Academia, Industry, and Communities</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Important Dates Section -->
    <section id="dates" class="section">
        <div class="container">
            <h2 class="section-title">Important Dates</h2>
            <p class="section-subtitle">Mark your calendar for key deadlines</p>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="date-card">
                        <div class="date-step-number">1</div>
                        <div class="date-number">Jan 5, 2026</div>
                        <div class="date-label">Call for co-host</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="date-card">
                        <div class="date-step-number">2</div>
                        <div class="date-number">Jan 19, 2026</div>
                        <div class="date-label">Call for paper</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="date-card">
                        <div class="date-step-number">3</div>
                        <div class="date-number">Feb 13, 2026</div>
                        <div class="date-label">Co-host acceptance deadline</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="date-card">
                        <div class="date-step-number">4</div>
                        <div class="date-number">Mar 06, 2026</div>
                        <div class="date-label">Abstract submission deadline</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="date-card">
                        <div class="date-step-number">5</div>
                        <div class="date-number">Mar 10, 2026</div>
                        <div class="date-label">Notification of abstract acceptance</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="date-card">
                        <div class="date-step-number">6</div>
                        <div class="date-number">Mar 27, 2026</div>
                        <div class="date-label">
                            Full paper submission and payment deadline
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="date-card">
                        <div class="date-step-number">7</div>
                        <div class="date-number">Apr 2, 2026</div>
                        <div class="date-label">Presentation file submission</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="date-card date-card-highlight">
                        <div class="date-step-number">8</div>
                        <div class="date-number">Apr 9, 2026</div>
                        <div class="date-label date-label-bold">Conference D-day</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Fee Section -->
    <section id="registration" class="section bg-light-custom">
        <div class="container">
            <h2 class="section-title">Registration Fee</h2>
            <p class="section-subtitle">Affordable pricing for all participants</p>

            <div class="row justify-content-center row-gap-4">
                <div class="col-lg-3 col-md-6">
                    <div class="pricing-card h-100 pb-0">
                        <h5>Overseas Faculty</h5>
                        <div class="price">$10 USD</div>
                        <p class="text-muted">Non-Indonesian</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pricing-card h-100 pb-0">
                        <h5>Overseas Student</h5>
                        <div class="price">$5 USD</div>
                        <p class="text-muted">Non-Indonesian</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pricing-card h-100 pb-0">
                        <h5>Indonesian Teacher/Lecturer</h5>
                        <div class="price">IDR 150K</div>
                        <p class="text-muted">Graduate Student</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pricing-card h-100 pb-0">
                        <h5>Indonesian Student</h5>
                        <div class="price">IDR 50K</div>
                        <p class="text-muted">Undergraduate</p>
                    </div>
                </div>
            </div>

            {{-- <div class="alert alert-info text-center mt-4" role="alert">
                <strong>Special Offer:</strong> 5 (five) first presenters from
                registered co-host are <strong>FREE</strong>
            </div> --}}

            <div class="row justify-content-center my-5">
                <div class="col-lg-6 col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-light py-3">
                            <h5 class="card-title mb-0">Payment Information</h5>
                        </div>

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Bank Name</span>
                                <span class="fw-semibold">Bank Mandiri</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Account Number</span>

                                <div class="d-flex align-items-center gap-2">
                                    <span id="accountNumber" class="fw-semibold font-monospace">
                                        1800090006000
                                    </span>

                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        onclick="copyAccountNumber()" aria-label="Copy account number">
                                        Copy
                                    </button>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-muted">Account Holder</span>
                                <span class="fw-semibold text-end">
                                    Universitas Harapan Bangsa
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a target="_blank" href="https://bit.ly/1stGLOBE_2026"
                    class="btn-primary-custom btn-lg text-white">Register Now</a>
            </div>
        </div>
    </section>

    <!-- Call for Papers Section -->
    <section id="papers" class="section">
        <div class="container">
            <h2 class="section-title">Call for Papers</h2>
            <p class="section-subtitle">
                Share your research and innovations with the global community
            </p>

            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0">GLOBE Forum 2026</h3>
                            <p class="mb-0" style="opacity: 0.9">
                                English Language Education for Sustainable Futures:
                                Technology, Culture, and Global Competence
                            </p>
                        </div>
                        <div class="card-body p-4">
                            <h4 class="mb-3" style="color: var(--primary-color)">
                                Presentation Format
                            </h4>
                            <div class="row mb-4">
                                <div class="col-md-6 mb-3">
                                    <div class="card" style="border-left: 4px solid var(--secondary-color)">
                                        <div class="card-body">
                                            <h5 style="color: var(--primary-color)">
                                                Paper Presentation
                                            </h5>
                                            <p class="mb-0">
                                                Empirical or conceptual research aligned with the
                                                theme
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card" style="border-left: 4px solid var(--accent-color)">
                                        <div class="card-body">
                                            <h5 style="color: var(--primary-color)">
                                                Best Practice Showcase
                                            </h5>
                                            <p class="mb-0">
                                                Innovative teaching models, classroom projects, or
                                                digital materials
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h4 class="mb-3" style="color: var(--primary-color)">
                                Submission Guidelines
                            </h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <strong>Abstract length:</strong>
                                    150-250 words
                                </li>
                                <li class="list-group-item">
                                    <strong>Keywords:</strong> 3-5 words
                                </li>
                                <li class="list-group-item">
                                    <strong>Format:</strong> APA 7th edition for references
                                </li>
                                <li class="list-group-item">
                                    <strong>Include:</strong> Presenter's name, affiliation,
                                    email address, and short bio (max 100 words)
                                </li>
                            </ul>

                            <div class="mt-4 d-flex flex-wrap gap-2">
                                <a target="_blank"
                                    href="https://docs.google.com/document/d/1OR81QygX2A_BzcSPRLSJsbJCMSW0h7gg/edit?usp=sharing&ouid=106853013310927853848&rtpof=true&sd=true"
                                    class="btn-primary-custom me-2 text-white">Abstract Template</a>
                                <a target="_blank"
                                    href="https://docs.google.com/document/d/19sNzldO1mLnLFhhC-V7Y9pUgEOPCyn0x/edit?usp=sharing&ouid=106853013310927853848&rtpof=true&sd=true"
                                    class="btn-primary-custom me-2 text-white">Full Paper Template</a>
                                <a href="#" class="btn-primary-custom me-2 text-white">Presentation Template</a>
                                <a href="https://bit.ly/1stGLOBE_2026" target="_blank"
                                    class="btn btn-outline-custom">Submission Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call for Co-Host Section -->
    <section class="section bg-light-custom">
        <div class="container">
            <h2 class="section-title">Call for Co-Host</h2>
            <p class="section-subtitle">
                Join us as an official co-host and expand academic collaboration
            </p>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Type A - Institutional Co-Host</h4>
                        </div>
                        <div class="card-body">
                            <h5 style="color: var(--primary-color)">
                                Contribution Requirements:
                            </h5>
                            <ul>
                                <li>
                                    Provide
                                    <strong>at least five (5) internal presenters</strong>
                                    from the co-host institution
                                </li>
                                <li>
                                    Recommend <strong>speaker</strong> from the respective
                                    co-host institution (optional)
                                </li>
                                <li>
                                    Recommend <strong>moderator</strong> for the plenary session
                                    (optional)
                                </li>
                            </ul>
                            <h5 style="color: var(--primary-color)">
                                Professional Responsibilities:
                            </h5>
                            <ul>
                                <li>
                                    Promote the seminar among faculty, students, and academic
                                    communities.
                                </li>
                                <li>
                                    Support the dissemination of the event’s academic and
                                    outreach activities
                                </li>
                            </ul>
                            <h5 style="color: var(--primary-color)" class="mt-3">
                                Benefits:
                            </h5>
                            <ul>
                                <li>Recognition as Official Institutional Co-Host</li>
                                <li>
                                    Recognition for faculty members as speakers and moderators
                                </li>
                                <li>Opportunities for International Awards</li>
                                <li>Partnership Implementation Arrangement (IA)</li>
                                <li>Access to collaborative research initiatives</li>
                                <li>Certificates of appreciation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Type B - Journal Partner Co-Host</h4>
                        </div>
                        <div class="card-body">
                            <h5 style="color: var(--primary-color)">
                                Contribution Requirements:
                            </h5>
                            <ul>
                                <li>
                                    Journal must be nationally accredited (minimum
                                    <strong>SINTA 5</strong>) or indexed in an equivalent or
                                    higher database
                                </li>
                                <li>
                                    Provide publication opportunities for selected high-quality
                                    papers presented at the 1st GLOBE Forum (GLOBE 2026)
                                </li>
                                <li>
                                    Collaborate with the organizing committee to determine
                                    review and selection mechanisms according to the journal’s
                                    publication ethics and standards
                                </li>
                                <li>
                                    Assign at least one (1) representative or editorial board
                                    member to coordinate the review process or serve as a
                                    reviewer for the forum submissions
                                </li>
                            </ul>
                            <h5 style="color: var(--primary-color)">
                                Professional Responsibilities:
                            </h5>
                            <ul>
                                <li>
                                    Participate in the review and screening process of selected
                                    papers from the conference
                                </li>
                                <li>
                                    Share the journal’s publication guidelines, technical
                                    requirements, and author instructions with the organizing
                                    committee and potential authors
                                </li>
                                <li>
                                    Provide editorial guidance and coordinate with the committee
                                    on publication schedules or special issue possibilities (if
                                    applicable).
                                </li>
                                <li>
                                    Promote the collaboration and published works through the
                                    journal’s digital platform and institutional networks.
                                </li>
                            </ul>
                            <h5 style="color: var(--primary-color)" class="mt-3">
                                Benefits:
                            </h5>
                            <ul>
                                <li>
                                    Official recognition as an Academic Journal Partner of the
                                    1<sup>st</sup>
                                    GLOBE Forum (GLOBE 2026), with the journal's name and logo
                                    featured in all publicity materials, proceedings, and the
                                    official website.
                                </li>
                                <li>
                                    Implementation Arrangement (IA) signed between the journal
                                    and the organizing committee as formal evidence of
                                    partnership and academic collaboration.
                                </li>
                                <li>
                                    Opportunity for editorial board members to serve as
                                    reviewers or session chairs during the forum.
                                </li>
                                <li>
                                    Priority consideration for selected papers from conference
                                    participants to be published in the partner journal.
                                </li>
                                <li>
                                    Increased journal visibility and citation potential through
                                    cross-promotion within national and international academic
                                    networks.
                                </li>
                                <li>
                                    Eligibility for recognition through the Outstanding
                                    Publication Collaboration Award presented during the forum.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-warning mt-4" role="alert">
                <div class="text-center mb-3">
                    <strong>Submission Deadline:</strong> January 30, 2026
                </div>
                <p class="mb-2">
                    Interested institutions and journal partners are invited to submit a
                    <strong>Letter of Intent (LoI)</strong> addressed to the
                    <strong>Organizing Committee of GLOBE Forum 2026</strong>,
                    including:
                </p>
                <ul class="mb-0">
                    <li>Institution name and address</li>
                    <li>Type of co-host (A or B)</li>
                    <li>Contact person and email</li>
                    <li>Brief statement of commitment</li>
                </ul>
                <div class="text-center py-2 d-flex gap-2 justify-content-center">
                    <a href="https://docs.google.com/document/d/1GHef3BcCLxX_xHXzrJlkBieu91vm7Xc1/edit?usp=sharing&ouid=106853013310927853848&rtpof=true&sd=true"
                        target="_blank" class="btn btn-primary-custom text-white text-decoration-none">⬇️<b
                            class="ms-2">Lol Template</b></a>
                    <a target="_blank" href="https://forms.gle/Jg7jEaobpRF127ULA" class="btn btn-outline-custom">⬆️<b
                            class="ms-2">Lol Submission</b></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="section-title">Co-Hosts</h2>
            <p class="section-subtitle text-warning">Official Co-Hosts</p>

            <div class="row co-host-row">
                <div class="col-lg-2 co-host-col mb-4">
                    <a href="https://www.uum.edu.my/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele/logo-uum.png') }}" alt="Universitas Utara Malaysia" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">Universiti Utara Malaysia</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 co-host-col mb-4">
                    <a href="https://www.lkouniv.ac.in/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele/logo-lu.png') }}" alt="Lucknow University" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">Lucknow University</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 co-host-col mb-4">
                    <a href="https://www.superior.edu.pk/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele/logo-su.png') }}" alt="Superior University" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">Superior University</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 co-host-col mb-4">
                    <a href="https://www.national-u.edu.ph/nu-fairview/" target="_blank"
                        class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele/logo-nuf.png') }}"
                                    alt="National University Fairview" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">National University Fairview</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 co-host-col mb-4">
                    <a href="https://www.vlu.edu.vn/en" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele/logo-vanglang.png') }}"
                                    alt="International Education Institute, Van Lang University" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">
                                    International Education Institute, Van Lang University
                                </h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 co-host-col mb-4">
                    <a href="https://www.uj.ac.za/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele/logo-uj.png') }}" alt="University Of Johannesburg" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">
                                    University Of Johannesburg
                                </h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 co-host-col mb-4">
                    <a href="https://kasu.edu.ng/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele/logo-kasu.png') }}" alt="Kaduna State University" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">
                                    Kaduna State University
                                </h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 co-host-col mb-4">
                    <a href="https://umpo.ac.id/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele/logo-umpo.png') }}"
                                    alt="Universitas Muhammadiyah Ponorogo" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">
                                    Universitas Muhammadiyah Ponorogo
                                </h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 co-host-col mb-4">
                    <a href="https://unisda.ac.id/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele/logo-unisda.png') }}"
                                    alt="Universitas Islam Darul 'Ulum Lamongan" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">
                                    Universitas Islam Darul 'Ulum Lamongan
                                </h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 co-host-col mb-4">
                    <a href="https://untagsmg.ac.id/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele/logo-17.png') }}" alt="Universitas 17 Agustus 1945" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">
                                    Universitas 17 Agustus 1945 Semarang
                                </h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 co-host-col mb-4">
                    <a href="https://unma.ac.id/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele/logo-umaja.png') }}" alt="Universitas Majalengka" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">
                                    Universitas Majalengka
                                </h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 co-host-col mb-4">
                    <a href="https://www.unwir.ac.id/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele/logo-unwir.png') }}" alt="Universitas Wiralodra" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">
                                    Universitas Wiralodra
                                </h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 co-host-col mb-4">
                    <a href="https://uniska-bjm.ac.id/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele/logo-uniska.png') }}"
                                    alt="Universitas Islam Kalimantan Muhammad Arsyad Al Banjari" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">
                                    Universitas Islam Kalimantan Muhammad Arsyad Al Banjari
                                </h6>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- <div class="col-lg-2 co-host-col mb-4">
                    <a href="https://ustjogja.ac.id/" target="_blank" class="text-decoration-none">
                        <div class="co-host-card">
                            <div class="co-host-logo">
                                <img src="{{ asset('assets/ele/logo-ust.png') }}" alt="universitas sarjanawiyata tamansiswa" />
                            </div>
                            <div class="co-host-info">
                                <h6 class="co-host-name">
                                    Universitas Sarjanawiyata Tamansiswa
                                </h6>
                            </div>
                        </div>
                    </a>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="section bg-light-custom">
        <div class="container">
            <h2 class="section-title">PUBLICATION</h2>
            <p class="section-subtitle">
                Selected international journals supporting the publication of seminar
                papers
            </p>

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="card h-100 text-center p-3" style="background-color: var(--primary-color)">
                        <img src="{{ asset('assets/ele/journal-jeep.png') }}" alt="JEEP Journal Logo"
                            style="max-height: 100px; object-fit: contain" class="mx-auto d-block mb-3" />
                        <h5 class="mb-0 text-white">JEEP</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="card h-100 text-center p-3" style="background-color: var(--primary-color)">
                        <img src="{{ asset('assets/ele/journal-elsa.jpg') }}" alt="JEEP Journal Logo"
                            style="max-height: 100px; object-fit: contain" class="mx-auto d-block mb-3" />
                        <h5 class="mb-0 text-white">ELSA</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="card h-100 text-center p-3" style="background-color: var(--primary-color)">
                        <img src="{{ asset('assets/ele/journal-jell.png') }}" alt="JEEP Journal Logo"
                            style="max-height: 100px; object-fit: contain" class="mx-auto d-block mb-3" />
                        <h5 class="mb-0 text-white">JELL</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="card h-100 text-center p-3" style="background-color: var(--primary-color)">
                        <img src="{{ asset('assets/ele/journal-linguamedia.png') }}" alt="Linguamedia Journal Logo"
                            style="max-height: 100px; object-fit: contain" class="mx-auto d-block mb-3" />
                        <h5 class="mb-0 text-white">Linguamedia Journal</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Zoom Link Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Zoom Meeting Link</h2>
            <p class="section-subtitle">Join us online for GLOBE Forum 2026</p>

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="zoom-link-card">
                        <a target="_blank" class="text-decoration-none" href="https://seminar.uhb.ac.id/zoom/311978">
                            <div class="zoom-icon">
                                <svg width="60" height="60" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                        </a>
                        <h3 class="zoom-title">Meeting Link</h3>
                        <div class="zoom-placeholder">
                            <div class="zoom-link-box">
                                <a target="_blank" href="https://seminar.uhb.ac.id/zoom/311978">
                                    <span class="zoom-link-text">https://seminar.uhb.ac.id/zoom/311978</span>
                                </a>
                            </div>
                        </div>
                        <p class="zoom-description">
                            The Zoom meeting link and access details will be shared with all
                            registered participants via email before the event date.
                        </p>
                        <div class="zoom-info">
                            <p class="mb-1">
                                <strong>📅 Conference Date:</strong> April 9<sup>th</sup>,
                                2026
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>GLOBE Forum 2026</h5>
                    <p>
                        Global Learning, Opportunities, and Bridges in English Education
                    </p>
                    <p>
                        Universitas Harapan Bangsa<br />
                        Purwokerto, Indonesia<br />
                        March 26<sup>th</sup>, 2026
                    </p>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Contact & Information</h5>
                    <p>
                        <strong>Phone:</strong><br />
                        <a href="tel:+6285728943483">+62857-2894-3483</a>
                        (Lili)
                    </p>
                    <p>
                        <strong>Website:</strong><br />
                        <a href="https://globe.uhb.ac.id/" target="_blank">globe.uhb.ac.id</a>
                    </p>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#theme">Theme & Scopes</a></li>
                        <li><a href="#dates">Important Dates</a></li>
                        <li><a href="#registration">Registration</a></li>
                        <li><a href="#papers">Call for Papers</a></li>
                    </ul>
                </div>
            </div>
            <hr style="border-color: #374151" />
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0" style="color: #9ca3af">
                        &copy; 2026 GLOBE Forum 2026. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top" id="scrollToTop" aria-label="Scroll to top">
        ↑
    </button>
</div>
