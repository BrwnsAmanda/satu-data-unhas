<!-- Tailwind CSS Navbar -->
<nav class="bg-gradient-to-l from-[#C62E2E] to-[#601616] p-7 sticky top-0 z-50 font-poppins flex items-center justify-between shadow">
  <div class="container mx-auto flex justify-between items-center">

    <!-- Kiri: Logo dan Judul -->
    <div class="flex items-center space-x-4">
      <img src="{{ asset('images/Logo-Unhas.png') }}" alt="Logo Universitas Hasanuddin" class="h-15">
      <span class="text-white text-lg font-bold">
        Platform & Hub Informasi Terintegrasi <br> Universitas Hasanuddin
      </span>
    </div>

    <!-- Tengah: Navigasi Menu -->
    <ul class="flex space-x-6">
      <li><a href="{{ route ("home")}}" class="text-white hover:text-gray-300">Beranda</a></li>
      <li><a href="{{ route ("dashboard")}}" class="text-white hover:text-gray-300">Dashboard</a></li>
      <li><a href="#" class="text-white hover:text-gray-300">Dataset</a></li>
      <li><a href="{{ route ("about")}}" class="text-white hover:text-gray-300">Tentang Kami</a></li>
      <li><a href="{{ route ("policy")}}" class="text-white hover:text-gray-300">Kebijakan Privasi</a></li>
    </ul>

    <!-- Kanan: Tombol Login -->
    <div>
      <a href="{{route('login')}}" class="bg-white text-[#C62E2E] font-semibold px-5 py-2 rounded-lg hover:bg-gray-100 transition">
        Login
      </a>
    </div>

  </div>
</nav>
