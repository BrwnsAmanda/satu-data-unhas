<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Satu Data Universitas Hasanuddin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    @vite('resources/css/app.css')
</head>

<body class="bg-white text-gray-800 font-poppins">
    {{-- Memuat komponen navbar --}}
    @include('components.navbar')

    {{-- Konten utama halaman --}}
    <div class="container mx-auto px-4 mt-4 mb-10"> {{-- Tambahkan mx-auto px-4 untuk centering dan padding jika Anda tidak menggunakan TailwindCSS container custom --}}
        {{-- Mulai Kode Embed Tableau --}}
        <div class='tableauPlaceholder' id='viz1751567950501' style='position: relative'>
            <noscript>
                <a href='#'>
                    <img alt='Dashboard 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;MX&#47;MXWB48267&#47;1_rss.png' style='border: none' />
                </a>
            </noscript>
            <object class='tableauViz' style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                <param name='embed_code_version' value='3' />
                <param name='path' value='shared&#47;MXWB48267' />
                <param name='toolbar' value='yes' />
                <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;MX&#47;MXWB48267&#47;1.png' />
                <param name='animate_transition' value='yes' />
                <param name='display_static_image' value='yes' />
                <param name='display_spinner' value='yes' />
                <param name='display_overlay' value='yes' />
                <param name='display_count' value='yes' />
                <param name='language' value='en-US' />
                <param name='filter' value='publish=yes' />
            </object>
        </div>
        <script type='text/javascript'>
            var divElement = document.getElementById('viz1751567950501');
            var vizElement = divElement.getElementsByTagName('object')[0];
            // Penyesuaian ukuran agar lebih responsif, terutama pada lebar kecil
            if (divElement.offsetWidth > 800) {
                vizElement.style.width='100%';
                vizElement.style.height=(divElement.offsetWidth*0.75)+'px';
            } else if (divElement.offsetWidth > 500) {
                vizElement.style.width='100%';
                vizElement.style.height=(divElement.offsetWidth*0.75)+'px';
            } else {
                vizElement.style.width='100%';
                // Untuk mobile, pertimbangkan untuk tidak menggunakan tinggi tetap terlalu besar
                // Atau biarkan Tableau JS yang mengatur. Tinggi 2077px bisa sangat panjang di mobile.
                vizElement.style.height=(divElement.offsetWidth * 1.2)+'px'; // Contoh: rasio 1.2 untuk mobile
            }
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>
        {{-- Selesai Kode Embed Tableau --}}
    </div>

    {{-- Memuat komponen footer --}}
    @include('components.footer')

    {{-- Opsional: Tambahkan skrip AOS di akhir body --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
