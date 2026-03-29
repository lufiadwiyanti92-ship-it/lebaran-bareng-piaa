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

<!DOCTYPE html>
<html>

<head>
    <title>Lebaran Bareng Piaa</title>
</head>

<body>

    <h1>🎉 Lebaran Bareng Piaa 🎉</h1>

    <h2>Profile</h2>
    <pre>{{ print_r($profile, true) }}</pre>

    <h2>Moments</h2>
    <pre>{{ print_r($moments, true) }}</pre>

    <h2>Family Tree</h2>
    <pre>{{ print_r($familyTree, true) }}</pre>

</body>

</html>