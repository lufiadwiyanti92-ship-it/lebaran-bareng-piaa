@extends('layouts.app')

@section('title', 'Beranda - Lebaran Bareng Piaa')

@section('content')
<!-- Hero Section with Photo Animation -->
@include('Partials.Sections.Hero')

<!-- Main Sections -->
@include('Partials.Sections.Perkenalan')
@include('Partials.Sections.Momen')
@include('Partials.Sections.Silsilah')
@endsection

@push('scripts')
<script>
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    // Smooth scroll for buttons
    document.querySelectorAll('.smooth-scroll, #infoBtn').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId && targetId !== '#') {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
</script>
@endpush
<h1>WEB BERHASIL 🎉</h1>
<p>Laravel kamu sudah jalan di Railway 🚀</p>