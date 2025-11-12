<!-- ======= Articles Section =======-->
<section class="section articles__v1" id="articles">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Artikel & Berita</span>
                <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="100">Informasi Terkini Ekspor Indonesia
                </h2>
                <p data-aos="fade-up" data-aos-delay="200">Dapatkan insight terbaru tentang tren ekspor, kebijakan
                    perdagangan, dan peluang bisnis global untuk UMKM Indonesia.</p>
            </div>
        </div>

        <!-- Articles Slider -->
        <div class="articles-slider-container mb-5" data-aos="fade-up" data-aos-delay="0">
            <div class="articles-slider-wrapper">
                <div class="swiper articles-swiper">
                    <div class="swiper-wrapper">
                        <!-- Article 1 -->
                        <div class="swiper-slide">
                            <article class="article-card article-slider">
                                <div class="article-image">
                                    <img src="{{ asset('images/semakmur/foto content/gambar-1.jpeg') }}"
                                        alt="Featured Article" class="img-fluid">
                                    <div class="article-category">Featured</div>
                                </div>
                                <div class="article-content">
                                    <div class="article-meta">
                                        <span class="article-date">
                                            <i class="bi bi-calendar3"></i>
                                            12 November 2024
                                        </span>
                                        <span class="article-author">
                                            <i class="bi bi-person"></i>
                                            Tim Semakmur
                                        </span>
                                    </div>
                                    <h3 class="article-title">
                                        <a href="{{ route('article.show', 'ekspor-umkm-indonesia-meningkat') }}">
                                            Ekspor UMKM Indonesia Meningkat 25% di Kuartal Ketiga 2024
                                        </a>
                                    </h3>
                                    <p class="article-excerpt">
                                        Data terbaru menunjukkan peningkatan signifikan ekspor produk UMKM Indonesia ke
                                        pasar global, didorong oleh digitalisasi dan dukungan platform marketplace...
                                    </p>
                                    <a href="{{ route('article.show', 'ekspor-umkm-indonesia-meningkat') }}"
                                        class="article-read-more">
                                        Baca Selengkapnya
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>

                        <!-- Article 2 -->
                        <div class="swiper-slide">
                            <article class="article-card article-slider">
                                <div class="article-image">
                                    <img src="{{ asset('images/semakmur/foto content/gambar-2.jpg') }}" alt="Article 2"
                                        class="img-fluid">
                                    <div class="article-category">Kebijakan</div>
                                </div>
                                <div class="article-content">
                                    <div class="article-meta">
                                        <span class="article-date">
                                            <i class="bi bi-calendar3"></i>
                                            10 November 2024
                                        </span>
                                    </div>
                                    <h3 class="article-title">
                                        <a href="{{ route('article.show', 'kebijakan-ekspor-terbaru') }}">
                                            Kebijakan Ekspor Terbaru Mendukung UMKM Indonesia
                                        </a>
                                    </h3>
                                    <p class="article-excerpt">
                                        Pemerintah meluncurkan program baru untuk memudahkan proses ekspor bagi pelaku
                                        UMKM dengan berbagai insentif dan dukungan teknologi...
                                    </p>
                                    <a href="{{ route('article.show', 'kebijakan-ekspor-terbaru') }}"
                                        class="article-read-more">
                                        Baca Selengkapnya
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>

                        <!-- Article 3 -->
                        <div class="swiper-slide">
                            <article class="article-card article-slider">
                                <div class="article-image">
                                    <img src="{{ asset('images/semakmur/foto content/gambar-1.jpeg') }}" alt="Article 3"
                                        class="img-fluid">
                                    <div class="article-category">Tips</div>
                                </div>
                                <div class="article-content">
                                    <div class="article-meta">
                                        <span class="article-date">
                                            <i class="bi bi-calendar3"></i>
                                            8 November 2024
                                        </span>
                                    </div>
                                    <h3 class="article-title">
                                        <a href="{{ route('article.show', 'tips-ekspor-pemula') }}">
                                            5 Tips Memulai Ekspor untuk Pengusaha Pemula
                                        </a>
                                    </h3>
                                    <p class="article-excerpt">
                                        Panduan lengkap untuk UMKM yang ingin memulai journey ekspor ke pasar global
                                        dengan langkah-langkah praktis dan strategi yang terbukti...
                                    </p>
                                    <a href="{{ route('article.show', 'tips-ekspor-pemula') }}"
                                        class="article-read-more">
                                        Baca Selengkapnya
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>

                        <!-- Article 4 -->
                        <div class="swiper-slide">
                            <article class="article-card article-slider">
                                <div class="article-image">
                                    <img src="{{ asset('images/semakmur/foto content/gambar-2.jpg') }}" alt="Article 4"
                                        class="img-fluid">
                                    <div class="article-category">Success Story</div>
                                </div>
                                <div class="article-content">
                                    <div class="article-meta">
                                        <span class="article-date">
                                            <i class="bi bi-calendar3"></i>
                                            5 November 2024
                                        </span>
                                    </div>
                                    <h3 class="article-title">
                                        <a href="{{ route('article.show', 'success-story-umkm') }}">
                                            Kisah Sukses UMKM Tembus Pasar Eropa
                                        </a>
                                    </h3>
                                    <p class="article-excerpt">
                                        Bagaimana sebuah UMKM kerajinan berhasil menembus pasar Eropa dengan bantuan
                                        platform Semakmur dan strategi marketing yang tepat...
                                    </p>
                                    <a href="{{ route('article.show', 'success-story-umkm') }}"
                                        class="article-read-more">
                                        Baca Selengkapnya
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>

                        <!-- Article 5 -->
                        <div class="swiper-slide">
                            <article class="article-card article-slider">
                                <div class="article-image">
                                    <img src="{{ asset('images/semakmur/foto content/gambar-1.jpeg') }}"
                                        alt="Article 5" class="img-fluid">
                                    <div class="article-category">Tips</div>
                                </div>
                                <div class="article-content">
                                    <div class="article-meta">
                                        <span class="article-date">
                                            <i class="bi bi-calendar3"></i>
                                            3 November 2024
                                        </span>
                                    </div>
                                    <h3 class="article-title">
                                        <a href="{{ route('article.show', 'strategi-digital-marketing') }}">
                                            Strategi Digital Marketing untuk Ekspor Global
                                        </a>
                                    </h3>
                                    <p class="article-excerpt">
                                        Pelajari cara efektif memasarkan produk UMKM di pasar internasional melalui
                                        platform digital dan media sosial yang tepat sasaran...
                                    </p>
                                    <a href="{{ route('article.show', 'strategi-digital-marketing') }}"
                                        class="article-read-more">
                                        Baca Selengkapnya
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="swiper-button-next articles-swiper-button-next"></div>
                    <div class="swiper-button-prev articles-swiper-button-prev"></div>

                    <!-- Pagination -->
                    <div class="swiper-pagination articles-swiper-pagination"></div>
                </div>
            </div>
        </div>

        <div class="text-center" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('articles.index') }}" class="btn btn-outline-primary">
                Lihat Semua Artikel
                <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>
<!-- End Articles Section -->
