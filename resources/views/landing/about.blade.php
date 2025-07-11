<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portal Satu Data Universitas Hasanuddin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  @vite('resources/css/app.css')
</head>

<body class="bg-white text-gray-800 font-poppins scroll-smooth">
  @include('components.navbar')

  <!-- Hero Section -->
  <section class="relative h-[65vh] bg-center bg-cover bg-no-repeat flex items-center justify-center text-white"
           style='background-image: url("{{ asset('images/kemahasiswaan.png') }}"); background-attachment: fixed;'>
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 text-center px-6 max-w-3xl" data-aos="fade-up">
      <h1 class="text-4xl font-bold mb-4">Tentang Kami</h1>
      <p class="text-lg text-gray-100">Kenali lebih dekat Satu Data Universitas Hasanuddin sebagai platform kolaborasi dan pusat informasi resmi kampus.</p>
    </div>
  </section>

  <!-- Main Content -->
  <section class="bg-gray-50 pt-16 pb-10">
    <div class="max-w-6xl mx-auto px-4 md:flex md:space-x-8" data-aos="fade-up">

      <!-- Sidebar -->
      <aside class="md:w-1/3 ">
        <ul class="space-y-3">
          <li>
            <button onclick="switchTab('platform')" class="tab-btn w-full text-left px-5 py-4 rounded-xl text-base font-medium text-gray-800 bg-white shadow-sm hover:shadow-md hover:text-[#C62E2E] hover:bg-[#C62E2E]/5 transition-all duration-300 ease-in-out">
              Apa Itu Phinisi Unhas?
            </button>
          </li>
          <li>
            <button onclick="switchTab('mengapa')" class="tab-btn w-full text-left px-5 py-4 rounded-xl text-base font-medium text-gray-800 bg-white shadow-sm hover:shadow-md hover:text-[#C62E2E] hover:bg-[#C62E2E]/5 transition-all duration-300 ease-in-out">
              Mengapa?
            </button>
          </li>
          <li>
            <button onclick="switchTab('visi')" class="tab-btn active w-full text-left px-5 py-4 rounded-xl text-base font-medium text-gray-800 bg-white shadow-sm hover:shadow-md hover:text-[#C62E2E] hover:bg-[#C62E2E]/5 transition-all duration-300 ease-in-out">
              Visi Phinisi Unhas
            </button>
          </li>
          <li>
            <button onclick="switchTab('misi')" class="tab-btn w-full text-left px-5 py-4 rounded-xl text-base font-medium text-gray-800 bg-white shadow-sm hover:shadow-md hover:text-[#C62E2E] hover:bg-[#C62E2E]/5 transition-all duration-300 ease-in-out">
              Misi Phinisi Unhas
            </button>
          </li>
          <li>
            <button onclick="switchTab('tujuan')" class="tab-btn w-full text-left px-5 py-4 rounded-xl text-base font-medium text-gray-800 bg-white shadow-sm hover:shadow-md hover:text-[#C62E2E] hover:bg-[#C62E2E]/5 transition-all duration-300 ease-in-out">
              Tujuan Phinisi Unhas
            </button>
          </li>
          <li>
            <button onclick="switchTab('kontak')" class="tab-btn w-full text-left px-5 py-4 rounded-xl text-base font-medium text-gray-800 bg-white shadow-sm hover:shadow-md hover:text-[#C62E2E] hover:bg-[#C62E2E]/5 transition-all duration-300 ease-in-out">
              Kontak
            </button>
          </li>
        </ul>
      </aside>

      <!-- Dynamic Content Area -->
      <div class="md:w-2/3 mt-10 md:mt-0 bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-xl p-8 border border-gray-100 transition duration-500 ease-in-out">
        <div id="visi" class="tab-section" data-aos="fade-up">
          <h4 class="text-2xl font-bold text-[#C62E2E] mb-3">Visi</h4>
          <p class="text-gray-700 leading-relaxed">Menjadi pusat data terpercaya yang mendukung Universitas Hasanuddin sebagai universitas riset berbasis budaya maritim terkemuka di Asia Tenggara.</p>
        </div>

        <div id="misi" class="tab-section hidden" data-aos="fade-up">
          <h4 class="text-2xl font-bold text-[#C62E2E] mb-3">Misi</h4>
          <ul class="list-disc pl-5 text-gray-700 space-y-2">
            <li>Menghimpun data dari seluruh unit kerja secara akurat dan terstandar.</li>
            <li>Memberikan akses publik yang transparan terhadap informasi kampus.</li>
            <li>Mendorong budaya berbasis data dalam pengambilan kebijakan.</li>
          </ul>
        </div>

        <div id="tujuan" class="tab-section hidden" data-aos="fade-up">
          <h4 class="text-2xl font-bold text-[#C62E2E] mb-3">Tujuan</h4>
          <p class="text-gray-700 leading-relaxed">Mendukung pengambilan keputusan strategis dan meningkatkan efisiensi serta akuntabilitas di lingkungan Universitas Hasanuddin.</p>
        </div>

        <div id="platform" class="tab-section hidden" data-aos="fade-up">
          <h4 class="text-2xl font-bold text-[#C62E2E] mb-3">Platform</h4>
          <p class="text-gray-700 leading-relaxed">Phinisi (Platform & Hub Informasi Terintegrasi) Unhas adalah hub informasi terintegrasi yang menggabungkan data akademik, riset, keuangan, hingga SDM dalam satu dashboard terstandar dan mudah diakses oleh seluruh sivitas akademika dan publik.</p>
        </div>

        <div id="mengapa" class="tab-section hidden" data-aos="fade-up">
          <h4 class="text-2xl font-bold text-[#C62E2E] mb-3">Mengapa Satu Data?</h4>
          <ul class="list-disc pl-5 text-gray-700 space-y-2">
            <li>Mempercepat pelayanan berbasis data.</li>
            <li>Menumbuhkan kepercayaan publik melalui transparansi.</li>
            <li>Memperkuat tata kelola universitas yang adaptif dan digital.</li>
          </ul>
        </div>

        <div id="kontak" class="tab-section hidden" data-aos="fade-up">
          <h4 class="text-2xl font-bold text-[#C62E2E] mb-3">Kontak</h4>
          <p class="text-gray-700 mb-1">📧 Email: <a href="mailto:satudata@unhas.ac.id" class="text-[#C62E2E] underline">satudata@unhas.ac.id</a></p>
          <p class="text-gray-700">📍 Alamat: Gedung Rektorat Unhas, Lt. 2, Makassar</p>
        </div>
      </div>
    </div>
  </section>

  @include('components.footer')

  <!-- AOS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init({ once: true, duration: 700 });
  </script>

  <!-- Tab Switching Script -->
  <script>
    function switchTab(id) {
      document.querySelectorAll('.tab-section').forEach(el => el.classList.add('hidden'));
      document.getElementById(id).classList.remove('hidden');

      document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('bg-[#C62E2E]/10', 'text-[#C62E2E]');
      });
      event.target.classList.add('bg-[#C62E2E]/10', 'text-[#C62E2E]');
    }
  </script>
</body>
</html>
