@extends('layouts.app')

@section('title', 'Artikel & Berita - Semakmur')

@section('content')
    <!-- ======= Articles Page Header =======-->
    <section class="section articles-header" style="padding-top: 120px; padding-bottom: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Artikel & Berita</span>
                    <h1 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="100">Informasi Terkini Ekspor Indonesia
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="200">Kumpulan artikel, berita, dan insight terbaru tentang dunia
                        ekspor, UMKM, dan perdagangan internasional.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Articles Filter =======-->
    <section class="section articles-filter" style="padding-top: 0; padding-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="articles-filter-wrapper" data-aos="fade-up" data-aos-delay="0">
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Cari artikel..."
                                            id="searchArticles">
                                        <button class="btn btn-outline-primary" type="button">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="filter-categories">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-primary active"
                                            data-filter="all">Semua</button>
                                        <button type="button" class="btn btn-outline-primary"
                                            data-filter="featured">Featured</button>
                                        <button type="button" class="btn btn-outline-primary"
                                            data-filter="kebijakan">Kebijakan</button>
                                        <button type="button" class="btn btn-outline-primary"
                                            data-filter="tips">Tips</button>
                                        <button type="button" class="btn btn-outline-primary"
                                            data-filter="success-story">Success Story</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Articles Grid =======-->
    <section class="section articles-grid">
        <div class="container">
            <div class="row g-4" id="articlesGrid">
                <!-- Article 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <article class="article-card article-grid">
                        <div class="article-image">
                            <img src="{{ asset('images/semakmur/foto content/gambar-1.jpeg') }}" alt="Article"
                                class="img-fluid">
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
                                Data terbaru menunjukkan peningkatan signifikan ekspor produk UMKM Indonesia ke pasar
                                global, didorong oleh digitalisasi...
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
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <article class="article-card article-grid">
                        <div class="article-image">
                            <img src="{{ asset('images/semakmur/foto content/gambar-2.jpg') }}" alt="Article"
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
                                Pemerintah meluncurkan program baru untuk memudahkan proses ekspor bagi pelaku UMKM dengan
                                berbagai insentif...
                            </p>
                            <a href="{{ route('article.show', 'kebijakan-ekspor-terbaru') }}" class="article-read-more">
                                Baca Selengkapnya
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Article 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <article class="article-card article-grid">
                        <div class="article-image">
                            <img src="{{ asset('images/semakmur/foto content/gambar-1.jpeg') }}" alt="Article"
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
                                Panduan lengkap untuk UMKM yang ingin memulai journey ekspor ke pasar global dengan langkah
                                praktis...
                            </p>
                            <a href="{{ route('article.show', 'tips-ekspor-pemula') }}" class="article-read-more">
                                Baca Selengkapnya
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Article 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <article class="article-card article-grid">
                        <div class="article-image">
                            <img src="{{ asset('images/semakmur/foto content/gambar-2.jpg') }}" alt="Article"
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
                                Bagaimana sebuah UMKM kerajinan berhasil menembus pasar Eropa dengan bantuan platform
                                Semakmur...
                            </p>
                            <a href="{{ route('article.show', 'success-story-umkm') }}" class="article-read-more">
                                Baca Selengkapnya
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Article 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <article class="article-card article-grid">
                        <div class="article-image">
                            <img src="{{ asset('images/semakmur/foto content/gambar-1.jpeg') }}" alt="Article"
                                class="img-fluid">
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
                                Pelajari cara efektif memasarkan produk UMKM di pasar internasional melalui platform
                                digital...
                            </p>
                            <a href="{{ route('article.show', 'strategi-digital-marketing') }}"
                                class="article-read-more">
                                Baca Selengkapnya
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Article 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <article class="article-card article-grid">
                        <div class="article-image">
                            <img src="{{ asset('images/semakmur/foto content/gambar-2.jpg') }}" alt="Article"
                                class="img-fluid">
                            <div class="article-category">Kebijakan</div>
                        </div>
                        <div class="article-content">
                            <div class="article-meta">
                                <span class="article-date">
                                    <i class="bi bi-calendar3"></i>
                                    1 November 2024
                                </span>
                            </div>
                            <h3 class="article-title">
                                <a href="{{ route('article.show', 'fasilitas-ekspor-2024') }}">
                                    Fasilitas Ekspor Baru 2024: Apa yang Perlu Diketahui UMKM
                                </a>
                            </h3>
                            <p class="article-excerpt">
                                Pemerintah memberikan berbagai fasilitas baru untuk mendukung ekspor UMKM di tahun 2024...
                            </p>
                            <a href="{{ route('article.show', 'fasilitas-ekspor-2024') }}" class="article-read-more">
                                Baca Selengkapnya
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12">
                    <nav aria-label="Articles pagination" data-aos="fade-up" data-aos-delay="0">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
