<!-- ======= Contact =======-->
<section class="section contact__v2" id="contact">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-7 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                    data-aos="fade-up" data-aos-delay="0">Kontak</span>
                <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">Hubungi Kami</h2>
                <p data-aos="fade-up" data-aos-delay="100">Siap membantu UMKM Indonesia mengembangkan bisnis ekspor.
                    Hubungi tim Semakmur untuk konsultasi dan informasi lebih lanjut.</p>

                <!-- Maskot Contact -->
                <div class="maskot-contact mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('images/semakmur/foto sima/sima-senang.png') }}" alt="Sima Contact"
                        style="width: 80px; height: auto; filter: drop-shadow(0 4px 8px rgba(0,0,0,0.1));">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex gap-5 flex-column">
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon d-block"><i class="bi bi-telephone"></i></div><span> <span
                                class="d-block">Telepon</span><strong>+62 822-5000-67</strong></span>
                    </div>
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon d-block"><i class="bi bi-send"></i></div><span> <span
                                class="d-block">Email</span><strong>semakmurindonesia@gmail.com</strong></span>
                    </div>
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon d-block"><i class="bi bi-geo-alt"></i></div><span> <span
                                class="d-block">Alamat</span>
                            <address class="fw-bold">Tanjung Priok<br>Jakarta Utara, Indonesia
                            </address>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-wrapper" data-aos="fade-up" data-aos-delay="300">
                    <form id="contactForm" action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row gap-3 mb-3">
                            <div class="col-md-12">
                                <label class="mb-2" for="name">Nama Lengkap *</label>
                                <input class="form-control" id="name" type="text" name="name" required>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2" for="email">Email *</label>
                                <input class="form-control" id="email" type="email" name="email" required>
                            </div>
                        </div>
                        <div class="row gap-3 mb-3">
                            <div class="col-md-12">
                                <label class="mb-2" for="subject">Subject</label>
                                <input class="form-control" id="subject" type="text" name="subject"
                                    placeholder="Konsultasi Ekspor, Kemitraan, dll">
                            </div>
                        </div>
                        <div class="row gap-3 gap-md-0 mb-3">
                            <div class="col-md-12">
                                <label class="mb-2" for="message">Pesan *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required
                                    placeholder="Jelaskan kebutuhan atau pertanyaan Anda..."></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary fw-semibold" type="submit" id="submitBtn">
                            <span class="btn-text">Kirim Pesan</span>
                            <span class="spinner-border spinner-border-sm d-none" role="status"
                                aria-hidden="true"></span>
                        </button>
                    </form>

                    <!-- Success Message -->
                    <div class="mt-3 d-none alert alert-success" id="successMessage">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        <span id="successText">Pesan berhasil dikirim! Kami akan segera menghubungi Anda.</span>
                    </div>

                    <!-- Error Message -->
                    <div class="mt-3 d-none alert alert-danger" id="errorMessage">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <span id="errorText">Terjadi kesalahan. Silakan coba lagi atau hubungi kami langsung.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact-->
