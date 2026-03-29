@extends('Layouts.app')

@section('title', 'Beranda - Lebaran Bareng Piaa')

@section('content')

@include('Partials.Sections.Hero')
@include('Partials.Sections.Perkenalan')
@include('Partials.Sections.Momen')
@include('Partials.Sections.Silsilah')

@endsection

@push('scripts')
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

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