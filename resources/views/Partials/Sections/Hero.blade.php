<section class="hero-section" id="hero">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <!-- Animated Background Elements -->
                <div class="floating-elements">
                    <div class="float-element ketupat-1">🥟</div>
                    <div class="float-element ketupat-2">🥟</div>
                    <div class="float-element lampu-1">🏮</div>
                    <div class="float-element lampu-2">🏮</div>
                </div>

                <!-- Welcome Text -->
                <div class="welcome-text" data-aos="fade-down" data-aos-delay="100">
                    <h1 class="greeting-title">
                        <span class="arabic-text">تَقَبَّلَ اللَّهُ مِنَّا وَمِنكُمْ</span>
                    </h1>
                    <p class="greeting-subtitle mt-3">
                        "Tak kenal maka tak sayang, maka ada baiknya berkenalan dulu"
                    </p>
                </div>

                <!-- Animated Photo -->
                <div class="photo-animation-wrapper" data-aos="zoom-in" data-aos-delay="300">
                    <div class="photo-frame">
                        <div class="photo-glow"></div>
                        <img src="{{ asset('images/piaa-profile.jpg') }}"
                            alt="Foto Piaa"
                            class="profile-photo animated-photo"
                            onerror="this.src='https://via.placeholder.com/300x300?text=Piaa'">
                        <div class="photo-decoration">
                            <span class="decoration-star">⭐</span>
                            <span class="decoration-heart">❤️</span>
                        </div>
                    </div>
                </div>

                <!-- Info Button -->
                <div class="button-wrapper mt-4" data-aos="fade-up" data-aos-delay="500">
                    <button class="btn btn-info-btn" id="infoBtn">
                        Info Selengkapnya
                        <i class="fas fa-arrow-down ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>