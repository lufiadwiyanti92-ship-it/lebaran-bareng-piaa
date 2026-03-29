<section id="momen" class="section-card">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <div class="section-icon">🍎</div>
            <h2 class="section-title">Momen Lebaran</h2>
            <div class="title-decoration">
                <span>📸</span> <span>🍎</span> <span>📸</span>
            </div>
            <p class="section-subtitle">Momen-momen indah bersama keluarga tercinta</p>
        </div>

        <div class="row g-4">
            @foreach($moments as $index => $moment)
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="moment-card">
                    <div class="moment-img-wrapper">
                        @if($moment['type'] == 'video')
                        <video class="moment-img video-momen" muted loop playsinline>
                            <source src="{{ asset($moment['image']) }}" type="video/mp4">
                        </video>
                        @else
                        <img src="{{ asset($moment['image']) }}"
                            class="moment-img"
                            alt="{{ $moment['title'] }}"
                            onerror="this.src='https://via.placeholder.com/400x300?text=Momen+Indah'">
                        @endif
                        <div class="moment-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    <div class="moment-caption">
                        <h5>{{ $moment['title'] }}</h5>
                        <p>{{ $moment['description'] }}</p>
                        <span class="moment-date">
                            <i class="fas fa-calendar-alt"></i> Lebaran 1447 H
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <button class="btn btn-more-moments" onclick="alert('Lebih banyak momen akan segera ditambahkan! 📸')">
                Lihat Lebih Banyak <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>