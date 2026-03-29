<section id="silsilah" class="section-card">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <div class="section-icon">🍌</div>
            <h2 class="section-title">Silsilah Keluarga</h2>
            <div class="title-decoration">
                <span>🌳</span> <span>🍌</span> <span>🌳</span>
            </div>
            <p class="section-subtitle">Pohon keluarga besar kami yang penuh kasih sayang</p>
        </div>
        
        <div class="family-tree-wrapper" data-aos="fade-up">
            <!-- Grandparents -->
            <div class="tree-level grandparents text-center">
                <div class="family-card grandparent-card">
                    <i class="fas fa-crown"></i>
                    <h4>{{ $familyTree['grandparents']['name'] }}</h4>
                    <p>Kakek & Nenek</p>
                </div>
                <div class="tree-line-down"></div>
            </div>
            
            <!-- Parents Level -->
            <div class="tree-level parents">
                <div class="row justify-content-center">
                    @foreach($familyTree['grandparents']['children'] as $child)
                    <div class="col-md-4 mb-4">
                        <div class="family-card parent-card">
                            <i class="fas fa-user-friends"></i>
                            <h5>{{ $child['name'] }}</h5>
                            <div class="tree-line-down-small"></div>
                            
                            <!-- Grandchildren -->
                            <div class="grandchildren mt-3">
                                @foreach($child['grandchildren'] as $grandchild)
                                <div class="grandchild-item">
                                    <i class="fas fa-child"></i>
                                    <span>{{ $grandchild }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="family-message text-center mt-5">
                <div class="message-card">
                    <i class="fas fa-heart"></i>
                    <p>"Keluarga adalah tempat kita berbagi cerita, tawa, dan cinta"</p>
                    <span>- Keluarga Besar Piaa -</span>
                </div>
            </div>
        </div>
    </div>
</section>