<section id="Perkenalan" class="section-card">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-header text-center mb-5" data-aos="fade-up">
                    <div class="section-icon">🍌</div>
                    <h2 class="section-title">Perkenalan</h2>
                    <div class="title-decoration">
                        <span>✨</span> <span>🍌</span> <span>✨</span>
                    </div>
                </div>

                <div class="card profile-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5">
                            <div class="profile-img-wrapper">
                                <img src="{{ asset('images/piaa-profile.jpg') }}"
                                    class="profile-img"
                                    alt="Foto Piaa"
                                    onerror="this.src='https://via.placeholder.com/400x400?text=Piaa'">
                                <div class="img-border"></div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h3 class="profile-name">Halo, Saya <span class="highlight">{{ $profile['name'] }}</span>! 🎉</h3>
                                <p class="profile-quote">{{ $profile['quote'] }}</p>

                                <div class="profile-info">
                                    <div class="info-item">
                                        <i class="fas fa-birthday-cake"></i>
                                        <span><strong>Usia:</strong> {{ $profile['age'] }} tahun</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span><strong>Tanggal Lahir:</strong> {{ $profile['birthday'] }}</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-heart"></i>
                                        <span><strong>Hobi:</strong> {{ implode(', ', $profile['hobby']) }}</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-quote-left"></i>
                                        <span><strong>Motto:</strong> "{{ $profile['motto'] }}"</span>
                                    </div>
                                </div>

                                <div class="social-buttons mt-4">
                                    <a href="https://www.instagram.com/pianutttt__?igsh=bTZxMnhmcncydDFy" target="_blank" class="social-btn instagram">
                                        <i class="fab fa-instagram"></i> Instagram
                                    </a>
                                    <a href="https://www.facebook.com/share/1NHRRVKebE/" target="_blank" class="social-btn facebook">
                                        <i class="fab fa-facebook"></i> Facebook
                                    </a>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>