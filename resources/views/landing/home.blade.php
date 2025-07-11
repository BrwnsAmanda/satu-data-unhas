<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portal Satu Data Universitas Hasanuddin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body class="bg-white text-gray-800 font-poppins scroll-smooth">
  @include('components.navbar')

  <!-- Hero Section -->
  <!-- Hero Section dengan Gambar Background -->
<section class="relative h-[90vh] bg-center bg-cover bg-no-repeat flex items-center justify-center text-white"
         style='background-image: url("{{ asset('images/kemahasiswaan.png') }}"); background-attachment: fixed;'
         data-aos="fade-up">

  <div class="absolute inset-0 bg-black/80"></div>

  <div class="relative z-10 max-w-4xl text-center px-6" data-aos="fade-up" data-aos-delay="100">
  <h1 class="text-4xl sm:text-5xl font-bold mb-6 leading-tight drop-shadow-lg">
    Selamat Datang<br>
    <span class="text-yellow-300">Platform & Hub Informasi Terintegrasi Universitas Hasanuddin</span>
  </h1>
  <p class="text-lg sm:text-xl text-gray-100 mb-8 drop-shadow-md" data-aos="fade-up" data-aos-delay="300">
    Menyediakan akses data terbuka, akurat, dan terintegrasi demi kemajuan institusi dan transparansi publik.
  </p>
  <a href="#eksplor"
     class="inline-block px-8 py-3 bg-yellow-300 text-[#601616] font-semibold rounded-full shadow-lg hover:bg-yellow-400 transition duration-300"
     data-aos="fade-up" data-aos-delay="500">
    Eksplor Data
  </a>
</div>


  <!--- <div class="absolute bottom-0 left-0 right-0 h-25  bg-gradient-to-b from-transparent to-white"></div> --->

</section>

<!-- Section Tentang Satu Data -->
<section class="py-20 bg-gray-50" data-aos="fade-up">
  <div class="max-w-6xl mx-auto px-6 md:flex md:items-center md:space-x-10">
    <div class="md:w-1/2 mb-10 md:mb-0">
    <img src="https://picsum.photos/1600/900?random=1" alt="Berita" class="w-full h-full object-cover rounded-lg shadow-md">
    </div>
    <div class="md:w-1/2">
      <h2 class="text-3xl font-bold text-[#C62E2E] mb-4">Tentang Satu Data Unhas</h2>
      <p class="text-gray-700 mb-4 leading-relaxed">
        Portal <strong>Satu Data Universitas Hasanuddin</strong> merupakan inisiatif untuk mewujudkan ekosistem data yang
        <em>terintegrasi, terbuka, dan akuntabel</em>. Dengan menggabungkan berbagai sumber data institusi,
        platform ini menjadi satu-satunya pusat data resmi yang dapat dimanfaatkan oleh sivitas akademika,
        mitra kolaborasi, hingga masyarakat luas.
      </p>
      <p class="text-gray-600 italic">Kami percaya bahwa data yang baik adalah dasar dari kebijakan yang bijak.</p>
    </div>
  </div>
</section>

<!-- Statistik Cepat -->
<section class="bg-white py-16" data-aos="fade-up">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-bold text-[#C62E2E] mb-8 text-center">Unhas Dalam Angka</h2>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Mahasiswa -->
        <div class="swiper-slide">
          <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
            <h3 class="text-4xl font-bold text-[#C62E2E]">40K+</h3>
            <p class="text-gray-600 mt-2">Mahasiswa Aktif</p>
          </div>
        </div>

        <!-- Dosen -->
        <div class="swiper-slide">
          <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
            <h3 class="text-4xl font-bold text-[#C62E2E]">1.800+</h3>
            <p class="text-gray-600 mt-2">Dosen & Tenaga Pengajar</p>
          </div>
        </div>

        <!-- Prodi -->
        <div class="swiper-slide">
          <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
            <h3 class="text-4xl font-bold text-[#C62E2E]">150+</h3>
            <p class="text-gray-600 mt-2">Program Studi</p>
          </div>
        </div>

        <!-- Fakultas -->
        <div class="swiper-slide">
          <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
            <h3 class="text-4xl font-bold text-[#C62E2E]">16</h3>
            <p class="text-gray-600 mt-2">Fakultas</p>
          </div>
        </div>

        <!-- Unit Kerja -->
        <div class="swiper-slide">
          <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
            <h3 class="text-4xl font-bold text-[#C62E2E]">57+</h3>
            <p class="text-gray-600 mt-2">Unit Kerja Terintegrasi</p>
          </div>
        </div>

        <!-- Alumni -->
        <div class="swiper-slide">
          <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
            <h3 class="text-4xl font-bold text-[#C62E2E]">200K+</h3>
            <p class="text-gray-600 mt-2">Alumni Tersebar</p>
          </div>
        </div>

        <!-- Penelitian -->
        <div class="swiper-slide">
          <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
            <h3 class="text-4xl font-bold text-[#C62E2E]">4K+</h3>
            <p class="text-gray-600 mt-2">Penelitian per Tahun</p>
          </div>
        </div>

        <!-- Dataset -->
        <div class="swiper-slide">
          <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
            <h3 class="text-4xl font-bold text-[#C62E2E]">12K+</h3>
            <p class="text-gray-600 mt-2">Dataset Terbuka</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Berita Terkini -->
<section class="py-20 bg-gray-100" data-aos="fade-up">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-[#C62E2E] mb-12">Berita Terkini</h2>
    <div class="grid md:grid-cols-3 gap-8 text-left">
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
        <img src="https://picsum.photos/1600/900?random=2" alt="Berita 1" class="w-full h-48 object-cover">
        <div class="p-5">
          <h3 class="text-lg font-semibold text-[#601616] mb-2">Peluncuran Dashboard Kinerja Fakultas</h3>
          <p class="text-sm text-gray-600">Dashboard ini menyajikan performa tiap fakultas berdasarkan data akademik dan riset.</p>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
        <img src="https://picsum.photos/1600/900?random=3" alt="Berita 2" class="w-full h-48 object-cover">
        <div class="p-5">
          <h3 class="text-lg font-semibold text-[#601616] mb-2">Workshop Data Governance untuk Operator</h3>
          <p class="text-sm text-gray-600">Pelatihan khusus bagi pengelola data di unit kerja untuk meningkatkan kualitas input data.</p>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
        <img src="https://picsum.photos/1600/900?random=4" alt="Berita 3" class="w-full h-48 object-cover">
        <div class="p-5">
          <h3 class="text-lg font-semibold text-[#601616] mb-2">Satu Data Unhas Tembus 1 Juta Akses</h3>
          <p class="text-sm text-gray-600">Sejak peluncurannya, platform ini telah melayani lebih dari 1 juta kunjungan pengguna.</p>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- Info Cards -->
  <section id="eksplor" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-[#C62E2E] mb-4">Kenapa Satu Data?</h2>
        <p class="text-gray-600 text-lg">Satu Data Unhas hadir untuk mengintegrasikan dan mempermudah akses terhadap berbagai sumber data terpercaya.</p>
      </div>

      <div class="grid md:grid-cols-3 gap-10">
        <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
          <div class="mb-4">
            <img src="https://picsum.photos/1600/900?random=5" alt="Data" class="w-16 h-16 mx-auto rounded-full shadow">
          </div>
          <h3 class="text-xl font-semibold text-[#601616] mb-2">Data Terpusat</h3>
          <p class="text-gray-600">Seluruh data universitas dari berbagai unit dikumpulkan dalam satu platform terpercaya.</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
          <div class="mb-4">
            <img src="https://picsum.photos/1600/900?random=6" alt="Kolaborasi" class="w-16 h-16 mx-auto rounded-full shadow">
          </div>
          <h3 class="text-xl font-semibold text-[#601616] mb-2">Transparansi Akademik</h3>
          <p class="text-gray-600">Menunjang keterbukaan data untuk keperluan akademik, publikasi, dan perencanaan strategis.</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
          <div class="mb-4">
            <img src="https://picsum.photos/1600/900?random=7" alt="Dashboard" class="w-16 h-16 mx-auto rounded-full shadow">
          </div>
          <h3 class="text-xl font-semibold text-[#601616] mb-2">Visualisasi Dinamis</h3>
          <p class="text-gray-600">Dilengkapi dengan visualisasi interaktif dan dashboard dinamis yang mudah digunakan.</p>
        </div>
      </div>
    </div>
  </section>

  @include('components.footer')

  <!-- AOS Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init({
      once: true,
      duration: 800,
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <script>
  const swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 1000,
      disableOnInteraction: false,
    },
    spaceBetween: 20,
    slidesPerView: 1.2,
    centeredSlides: true,
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
</script>

</body>

</html>
