<?=$this->extend('layout')?>
<?=$this->section('bodycontent')?>
<main id="main">

    <!-- ======= About Section ======= -->
    <?php foreach ($cv as $c) :?>
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Siti Ruhu Salamah</h3>
              <p>
                Saya adalah seorang mahasiswa semester 6 dengan jurusan Teknik Informatika Fakultas Sains dan Teknologi di Universitas Muhammadiyah Sukabumi.saya berpengalaman dalam Design,edit dan Informatika saya juga pecinta alam yang suka mengekspor keindahan alam yang ada disekitar daerah saya. 
              </p>

              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Tempat Tanggal Lahir</strong> </p>   
                    <p><?= $c['tanggallahir']; ?></li><p>
                  </div>
                </div>
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Alamat</strong> </p> 
                    <p><?= $c['alamat']; ?></li><p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Riwayat Pendidikan</strong> </p>
                    <p> SDN TUGUJAYA 02 2009-2014</P>
                    <P> MTS AL-HAKIM 2015-2018</P>
                    <P> MA AL-HAKIM 2019-2021</P>
                    <P> KULIAH UNIVERSITAS MUHAMMADIYAH SUKABUMI 2021-2025</P>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Penghargaan</strong></p>
                    <P> Peserta Terbaik Baitul Arkom  </P>
                    <P> Tim Pelaksana PPK Ormawa 2023</P>
                    <P> Sekretaris Umum HW UMMI 2023-2024 </P>
                    <P> Peserta Pelatihan Pemograman Mobile  </P>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>
    <?php endforeach; ?>
    <!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Keahlian</h2>
          <p>Saya memiliki beberapa keahlian yang dapat menunjang saya dalam karir Informatika dan juga dalam keagamaan  .</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Bahasa Pemograman <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="60"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Bahasa Arab <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Microsoft Office <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Public Speaking <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    

    <!-- ======= Resume Section =======
    <section id="resume" class="resume section-bg"> -->
    <section id="resume" class="resume section-bg">
    <div class="container">

        <div class="section-title">
          <h2>Riwayat Hidup</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Pengalaman Mondok</h3>
            <div class="resume-item pb-0">
              <h4>2015-2021</h4>
              <p><em>Mondok di pesantren Darutoyyibah lilayyitam desa caringin kampung cipuntang,sukabumi.</em></p>
              <p>
              <ul>
                <li>mempelajari dan mempergunakan bahasa arab dan inggris dikegiatan sehari-hari</li>
                <li>menghafalkan Al-quran</li>
                <li>mempelajari berbagai kitab dasar seperti: safinah,jurumiah,tijan,bulugul maram dan yang lainnya</li>
                <li>mengembangkan bakat dalam berpidato 4 bahasa indonesia,sunda,arab dan inggris</li>
                <li>mengembangkat bakat yang dimiliki santri diantaranya dalam olahraga,kesehatan maupun keterampilan</li>
                <li>belajar mengenai adab,manajemen waktu,kemandirian dan kedisiplinan serta rasa sosial terhadap sesama</li>
              </ul>
              </p>
            </div>

            <h3 class="resume-title">proyek</h3>
            <div class="resume-item">
              <h4>Mengabdi dipondok pesantren Athoyyibah</h4>
             
              <li>Membimbing santri dalam hafalan Al-Quran</li>
              <li>mengajar pelajaran aklak di Madrasah tsanawiyah</li>
              <li>mengajar baca tulis Al-Quran kepada para santri</li>
              <li>membimbing santri dalam berkegiatan</li>
            </div>
            <div class="resume-item">
              <h4>Instruktur AIKA Universitas Muhammadiyah Sukabumi</h4>
              
              <li>Membantu para dosen AIKA dalam mengajar keagamaan Mahasiswa Baru UMMI</li>
              <li>mengajarkan matari BTQ pada mahasiswa semester 1</li>
              <li>membimbing mahasiswa baca tulis Al-Quran</lp>
              <li>mengajarkan materi ibadah muamalah pada Mahasiswa semester 2</li>
              <li>membimbing mahasiswa dalam praktik Ibadah</li>
              <li>membimbing mahasiswa dalam kegiatan Baitul Arkom tahunan</li>
            </div>
            <div class="resume-item">
              <h4>Penelitain dengan Dosen Teknik Informatika</h4>
              
              <li>Membantu Laporan Perkembangan Penelitian</li>
              <li>wawancara dengan pihak perusahan yang diteliti</li>
              <li>Membuat rancangan UML untuk aplikasi yang dibuat</lp>
              <li>Membuat Laporan akhir penelitain</li>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Pengalaman Organisasi</h3>
            <div class="resume-item">
              <h4>Bidang kesehatan OPDA</h4>
              <h5>2020-2021</h5>
              <p><em>Pondok pesantren Daruthoyyibah Lilayyitam </em></p>
              <p>
              <ul>
                <li>Mendata santriawati dan cek kesehatan bersama dokter desa</li>
                <li>Mendata dan membeli obat yang dibutuhkan santri </li>
                <li>Mengingatkan santriawati untuk menjaga Kesehatan</li>
                <li>Membantu menyusun laporan pertanggungjawaban selama 1 periode</li>
                <li>hasil yang didapatkan mengerti mengenai macam-macam obat,mengetahui teknik-teknik penyembuhan,dan empati yang tinggi</li>
              </ul>
              </p>
            </div>
            <div class="resume-item">
              <h4>Pendidikan HW UMMI</h4>
              <h5>2021-2022</h5>
              <p><em>Hizbul Wathan Universitas Muhammadiyah Sukabumi</em></p>
              <p>
              <ul>
                <li>Membuat Rencana pelaksanaan pembelajaran.</li>
                <li>Membuat Jadwal Mengajar di SMA Muhammadiyah Sukabumi</li>
                <li>Melaksanakan Pelatihan Mingguan</li>
                <li>mengawasi kegiatan pembelajaran</li>
                <li>hasil yang didapatkan berfikir kritis,faham komunikasi dan menguasi public speaking</li>
              </ul>
              </p>
            </div>
            <div class="resume-item">
              <h4>Sekretaris umum HW UMMI</h4>
              <h5>2023-2024</h5>
              <p><em>Hizbul Wathan Universitas Muhammadiyah Sukabumi</em></p>
              <p>
              <ul>
                <li>Menyusun RKAT dan kalender kegiatan selama 1 periode.</li>
                <li>Mencatat dan merekap absensi kehadiran pelatihan dan rapat selama 1 peiode</li>
                <li>Merekap administrasi yang telah dilakukan</li>
                <li>Mengarsipkan surat dan dokumen</li>
                <li>Menginformasikan pelatihan dan rapat kepada anggota dan pengurus HW selama 1 periode</li>
                <li>membuat surat menyurat untuk kegiatan yang akan diadakan menggunakan Wicrosof Office</li>
                <li>hasil yang didapatkan berfikir keritis,faham komuniksi secara lisan dan tulisan </li>
              </ul>
              </p>
            </div>
            <div class="resume-item">
              <h4>Sekretaris Pondok Pesantren Athoyyibah </h4>
              <h5>2023-2024</h5>
              <p><em>Pondok pesantren Daruthoyyibah Lilayyitam</em></p>
              <p>
              <ul>
                <li>Mencatat dan merekap absensi kehadiran  rapat selama 1 peiode</li>
                <li>Merekap administrasi yang telah dilakukan</li>
                <li>Mengarsipkan surat dan dokumen</li>
                <li>Menginformasikan rapat kepada anggota dan pengurus HW selama 1 periode</li>
                <li>membuat surat dan dokumen untuk kegiatan yang akan diadakan menggunakan Wicrosof Office</li>
                <li>hasil yang didapatkan berfikir keritis,faham komuniksi secara lisan dan tulisan </li>
              </ul>
              </p>
            </div>
          </div>
        </div>
        

      </div> 
    </section>
    <!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Koleksi</h2>
          <p>Hobiku adalah membaca dan yang paling favotit dari membaca buku adalah novel daftar novel terbaik diantaranya.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4 class="title"><a href="">Negri 5 menara</a></h4>
              <p> A fuadi</p>
              <p class="description">Menceritakan perjalanan 5 sahabat menuju kesuksesan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4 class="title"><a href="">Bidadari Bermata Bening</a></h4>
              <p> Habiburahman El Sihrazy</p>
              <p class="description">Berkisah tentang pencarian cinta sejati</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4 class="title"><a href="">Api Tauhid</a></h4>
              <p> Habiburahman El Sihrazy</p>
              <p class="description">Menceritakan kisah cinta di baluti sejarah islam mengenai Badi'uzzaman Said Nursi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4 class="title"><a href="">Seris Bumi</a></h4>
              <p>TereLiye</p>
              <p class="description">Menceritakan cerita Fiksi Imajinasi Masa depan yang sangat menakjubkan</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Dokumentasi</h2>
          <p>Setiap perjalanan untuk menyaksikan keindahannya wajib diabadikan.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-laut">laut</li>
              <li data-filter=".filter-air">air</li>
              <li data-filter=".filter-hiking">hiking</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-laut">
            <div class="portfolio-wrap">
              <img src="assets/img/koleksi/laut-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Laut 1</h4>
                <p>Laut</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/koleksi/laut-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Laut 1"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-air">
            <div class="portfolio-wrap">
              <img src="assets/img/koleksi/air-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Air Terjun1</h4>
                <p>Air Terjun</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/koleksi/air-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="air terjun 1"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hiking">
            <div class="portfolio-wrap">
              <img src="assets/img/koleksi/hiking-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Hiking 1</h4>
                <p>Hiking</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/koleksi/hiking-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="hiking 1"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-laut">
            <div class="portfolio-wrap">
              <img src="assets/img/koleksi/laut-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Laut 2</h4>
                <p>laut</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/koleksi/laut-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Laut 2"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hiking">
            <div class="portfolio-wrap">
              <img src="assets/img/koleksi/hiking-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Hiking 2</h4>
                <p>Hiking</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/koleksi/hiking-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Hiking 2"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-air">
            <div class="portfolio-wrap">
              <img src="assets/img/koleksi/air-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Air Terjun 2</h4>
                <p>Air Terjun</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/Koleksi/air-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Air Terjun 2"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Teman Terdekat</h2>
          <p>Selalu ada orang-orang dibelakang yang melengkapi kehidupan kampus ini dengan berbagai mancam sikap diantara mereka.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  true to god,everything is gonna be okey.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/teman/Azizah.jpg" class="testimonial-img" alt="">
                <h3>Azizah</h3>
                <h4>Sicuek</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  harus semangat dalam belajar walaupun besar finansialnya.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/teman/Dinda.jpg" class="testimonial-img" alt="">
                <h3>Dinda</h3>
                <h4>Sibodo amat</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Lebih care sama keadaan sekitar ya.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/teman/Nana.jpg" class="testimonial-img" alt="">
                <h3>Nana</h3>
                <h4>Simodian</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Tidak peduli sebesar apapun rintangan yang kamu lewati, tetap yakin dengan jalan yang kamu pilih.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/teman/Sarah.jpg" class="testimonial-img" alt="">
                <h3>Sarah</h3>
                <h4>siperfect</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Allah punya rencana untuk mu kamu berada tepat di tempat yang Allah inginkan jangan membawa khawatiran akan masa depan karna itu dalam kekuasaan Allah, percayalah rencana Allah adalah rencana terbaik lakukan bagianmu dan serahkan sisa nya pada Allah bahkan ketika kamu tidak mengerti tetaplah percaya pada Allah.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/teman/Marrt.jpg" class="testimonial-img" alt="">
                <h3>MARRT-5an</h3>
                <h4>Sohibah</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>hungubungi kontak ini jika diperlukan</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Ruhu</h3>
              <p>tidak ada kata gagal jika masih banyak kesempatan untuk mencoba,jangan menyerah karna usaha tidak akan menghianati hasil.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div class="d-flex align-items-center">
                <i class="bi bi-geo-alt"></i>
                <p>kp.benteng<br>Cicurug,Sukabumi</p>
              </div>

              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-envelope"></i>
                <p>sruhusalamah067@ummi.ac.id</p>
              </div>

              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-phone"></i>
                <p>085864503792</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <?=$this->endSection()?>