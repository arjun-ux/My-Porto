@extends('landingPage.layouts.main')
@section('content')
<header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-white">
                <img class="img-fluid rounded-circle" src="{{ asset('img/pp.jpg') }}" alt="profile" width="150px" height="150px">
                <h1>Arjun Najah</h1>
                <p>Developer Keuangan Digital</p>
                <p>
                    Saya adalah seorang developer keuangan digital
                    yang membawa pemahaman mendalam tentang keuangan ke dalam dunia pengembangan web,
                    menciptakan aplikasi yang responsif dan terukur.
                </p>
            </div>
        </div>
    </div>
  </header>

  <section id="about">
    <div class="container">
        <div class="row text-center justify-content-center">
            <h2>About Me</h2>
            <div class="col-md-6">
                <p>Halo! Saya Arjun Najah, seorang pengembang web pemula dengan
                    semangat yang tinggi untuk belajar dan berkembang di dunia pemrograman.
                    Sejak tahun 2020, saya memulai belajar sebagai pengembangan web dengan antusiasme besar dan
                    berusaha memahami konsep-konsep dasar serta teknologi terkini.
                </p>
                <p>Latar belakang pendidikan saya adalah Lulusan Universitas KH. Mukhtar Syafaat Blokagung Program Studi Ekonomi Syariah tahun 2023,
                    yang memberi saya dasar pengetahuan dalam Ilmu Ekonomi berbasis Islam.
                    Akan tetapi Saya memilih alih karir sebagai pengembang Web dikarenakan saya memiliki pemahaman dasar tentang HTML dan PHP,
                    dan saat ini fokus untuk memperdalam kemampuan saya dalam mengembangkan sistem BackEnd dan fungsionalitas situs web.
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    Saat ini, saya sedang terlibat dalam beberapa proyek kecil
                    untuk membangun portofolio saya. Saya senang menghadapi tantangan baru dan bersedia bekerja sama
                    dengan tim untuk mencapai tujuan bersama. Selain itu, saya juga aktif mengikuti kursus online, membaca buku,
                    dan mengikuti komunitas pengembang untuk terus memperbarui pengetahuan saya.
                </p>
                <p>
                    Jika ada kesempatan untuk berkolaborasi atau jika Anda memiliki saran dan tips untuk seorang pemula seperti saya,
                    saya sangat terbuka dan bersemangat untuk belajar lebih lanjut.
                    Mari kita saling mendukung dalam perjalanan kita di dunia pengembangan web!
                </p>
                <p>
                    Terima kasih banyak atas waktu dan perhatiannya.
                </p>
            </div>
        </div>
    </div>
  </section>

  <section id="projects">
    <div class="container">
        <div class="row text-center">
            <h2>Projects</h2>
            <div class="col-md-4">
                <div class="project-card">
                  <img src="#" alt="Project 1">
                  <h3>Project 1</h3>
                  <p>Description of Project 1.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card">
                  <img src="#" alt="Project 1">
                  <h3>Project 1</h3>
                  <p>Description of Project 1.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card">
                  <img src="#" alt="Project 1">
                  <h3>Project 1</h3>
                  <p>Description of Project 1.</p>
                </div>
            </div>
        </div>
      <!-- Add more project cards as needed -->
    </div>
  </section>

  {{-- <section id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="text-center">Contact Me</h2>
            <div class="col-md-6">
                <form id="contact-form">
                  <label for="name">Name:</label>
                  <input type="text" id="name" name="name" required>

                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required>

                  <label for="message">Message:</label>
                  <textarea id="message" name="message" required></textarea>

                  <button type="submit">Send Message</button>
                </form>
            </div>
            <div class="col-md-6 text-center">


            </div>
        </div>
    </div>
  </section> --}}

  <footer>
    <div class="container">
        <!-- Tautan LinkedIn -->
        <a href="https://id.linkedin.com/in/arjun-najah-555958237" target="_blank">
            <img src="{{ asset('img/linkedin.png') }}" alt="LinkedIn" width="30px" height="30px">
        </a>

        <!-- Tautan GitHub -->
        <a href="https://github.com/arjun-ux" target="_blank">
            <img src="{{ asset('img/github.png') }}" alt="GitHub" width="30px" height="30px">
        </a>
        <!-- Tautan wa -->
        <a href="https://wa.me/6282336659202" target="_blank">
            <img src="{{ asset('img/whatsapp.png') }}" alt="GitHub" width="30px" height="30px">
        </a>
      <p class="mt-2">&copy; {{ date('Y') }} Arjun Najah. All rights reserved.</p>
    </div>
  </footer>
@endsection
