<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Bengkel Vespa Matic terpercaya di Jakarta. Servis cepat, mekanik profesional, booking via WhatsApp.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bengkel Vespa Matic Jakarta | X-MY GARAGE</title>

  <script src="https://cdn.tailwindcss.com"></script>
    <script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        primary: '#3b82f6',
        dark: '#0f172a'
      }
    }
  }
}
</script>

<script src="https://unpkg.com/lucide@latest"></script>
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
</head>

<body class="bg-gradient-to-br from-[#020617] via-[#0f172a] to-black text-white">

<!-- NAVBAR -->
<header id="navbar" class="fixed w-full top-0 z-50 transition-all duration-300 backdrop-blur-md">
  <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">

    <div class="flex items-center gap-3">
      <img src="/images/xmygarage.png" class="h-9 w-9 object-contain">
      <h1 class="text-xl font-bold tracking-wide">X-MY GARAGE</h1>
    </div>

    <button id="menuBtn" class="md:hidden text-white text-2xl py-3 text-base">
  ☰
</button>

    <nav class="space-x-6 hidden md:block">
      <a href="#" class="hover:text-blue-400 transition">Home</a>
      <a href="#layanan" class="hover:text-blue-400 transition">Layanan</a>
      <a href="#harga" class="hover:text-blue-400 transition">Harga</a>
      <a href="#kontak" class="hover:text-blue-400 transition">Kontak</a>
    </nav>

    <div id="mobileMenu" class="hidden flex-col mt-4 space-y-3 md:hidden">
  <a href="#">Home</a>
  <a href="#layanan">Layanan</a>
  <a href="#harga">Harga</a>
  <a href="#kontak">Kontak</a>
</div>


    <a href="https://wa.me/62896773129"
       class="bg-blue-500 hover:bg-blue-600 px-5 py-2 rounded-xl 
       transition duration-300 shadow-lg 
       hover:scale-105 hover:shadow-blue-500/50">
       Booking
    </a>

  </div>
</header>

<!-- HERO -->
<section class="relative min-h-screen py-20 flex items-center justify-center text-center overflow-hidden px-4 sm:px-6">

  <img src="/images/banner.png"
       class="absolute inset-0 w-full h-full object-cover scale-110"
       id="parallax">

  <div class="absolute inset-0 bg-black/70"></div>

  <div class="relative z-10 max-w-2xl px-6">
    <h1 class="text-3xl sm:text-4xl md:text-6xl font-bold mb-4 leading-tight">
      Bengkel Vespa Matic <br>
      <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
        Professional & Terpercaya
      </span>
    </h1>

    <p class="mt-4 text-sm text-gray-400">
      ⭐ 4.9 Rating • 100+ Pelanggan Puas • Spesialis Vespa Matic
    </p>

    <p class="mb-6 text-gray-300">
      Servis cepat, hasil maksimal, booking langsung via WhatsApp
    </p>

    <div class="flex justify-center gap-4 flex-wrap">
      <a href="https://wa.me/628123456789"
         class="bg-green-500 hover:bg-green-600 px-6 py-3 rounded-xl shadow-lg hover:scale-110 transition">
         Chat WhatsApp
      </a>

      <a href="#layanan"
         class="border border-white/30 hover:bg-white hover:text-black px-6 py-3 rounded-xl transition">
         Lihat Layanan
      </a>
    </div>
  </div>

</section>

<!-- LAYANAN -->
<section id="layanan" class="py-20 max-w-7xl mx-auto px-6 px-4 sm:px-6">
  <h2 class="text-3xl font-bold text-center mb-12">Layanan Kami</h2>

  <div class="group p-6 bg-white/5 rounded-xl border border-white/10 text-center hover:scale-105 transition">
  <i data-lucide="wrench" class="mx-auto mb-3 w-8 h-8 text-blue-400 group-hover:scale-110 transition"></i>
  Servis Rutin
</div>

<div class="group p-6 bg-white/5 rounded-xl border border-white/10 text-center hover:scale-105 transition">
  <i data-lucide="droplet" class="mx-auto mb-3 w-8 h-8 text-blue-400 group-hover:scale-110 transition"></i>
  Ganti Oli
</div>

<div class="group p-6 bg-white/5 rounded-xl border border-white/10 text-center hover:scale-105 transition">
  <i data-lucide="settings" class="mx-auto mb-3 w-8 h-8 text-blue-400 group-hover:scale-110 transition"></i>
  Tune Up
</div>

<div class="group p-6 bg-white/5 rounded-xl border border-white/10 text-center hover:scale-105 transition">
  <i data-lucide="cpu" class="mx-auto mb-3 w-8 h-8 text-blue-400 group-hover:scale-110 transition"></i>
  Service CVT
</div>

<div class="group p-6 bg-white/5 rounded-xl border border-white/10 text-center hover:scale-105 transition">
  <i data-lucide="wrench" class="mx-auto mb-3 w-8 h-8 text-blue-400 group-hover:scale-110 transition"></i>
  Repair
</div>

<div class="group p-6 bg-white/5 rounded-xl border border-white/10 text-center hover:scale-105 transition">
  <i data-lucide="refresh-cw" class="mx-auto mb-3 w-8 h-8 text-blue-400 group-hover:scale-110 transition"></i>
  Restorasi
</div>

<div class="group p-6 bg-white/5 rounded-xl border border-white/10 text-center hover:scale-105 transition">
  <i data-lucide="check-circle" class="mx-auto mb-3 w-8 h-8 text-blue-400 group-hover:scale-110 transition"></i>
  General Check
</div>
</section>

<!-- STYLE CARD -->
<style>
.card {
  padding: 24px;
  border-radius: 16px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.1);
  text-align: center;
  transition: 0.3s;
}
.card:hover {
  transform: scale(1.05);
}
</style>

<!-- KEUNGGULAN -->
<section class="py-16 text-center px-4 sm:px-6">
  <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto" data-aos="fade-up">
    <h3 class="text-blue-400 font-semibold">✔ 10+ Tahun Pengalaman</h3>
    <h3 class="text-blue-400 font-semibold">✔ Spesialis Vespa Matic</h3>
    <h3 class="text-blue-400 font-semibold">✔ Pelanggan Puas</h3>
  </div>
</section>

<!-- SERTIFIKASI -->
<section class="py-20 text-center bg-gradient-to-br from-gray-900 to-gray-800">
  <h2 class="text-3xl font-bold mb-6">Sertifikasi Mekanik</h2>
  <p class="text-gray-400 mb-10">
    Mekanik profesional dengan sertifikasi resmi
  </p>

  <div class="flex flex-wrap justify-center gap-8" data-aos="fade-up">
    <div class="group text-center">
      <img src="images/S1.jpg" class="cert">
      <p>Sertifikat Medley ABS</p>
    </div>

    <div class="group text-center">
      <img src="images/S2.jpg" class="cert">
      <p>Training 3V Engine</p>
    </div>

    <div class="group text-center">
      <img src="images/S3.jpg" class="cert">
      <p>Basic Leader Training</p>
    </div>
  </div>
</section>

<style>
.cert {
  width: 250px;
  border-radius: 12px;
  border: 1px solid rgba(255,255,255,0.1);
  transition: 0.3s;
}
.cert:hover {
  transform: scale(1.05);
}
</style>


 <section class="py-20 text-center px-4 sm:px-6">
  <h2 class="text-3xl font-bold mb-8 snap-x snap-mandatory">Testimoni</h2>

  <div class="flex gap-6 overflow-x-auto px-6 max-w-6xl mx-auto scroll-smooth">

    <div class="min-w-[250px] p-6 bg-white/5 rounded-xl border border-white/10 hover:scale-105 transition">
      ⭐⭐⭐⭐⭐
      <p class="text-gray-300 mt-3">Servis cepat & hasil mantap!</p>
      <span class="text-sm text-gray-500">- Andi</span>
    </div>

    <div class="min-w-[250px] p-6 bg-white/5 rounded-xl border border-white/10 hover:scale-105 transition">
      ⭐⭐⭐⭐⭐
      <p class="text-gray-300 mt-3">Mantap, murah & mekanik profesional 🔥</p>
      <span class="text-sm text-gray-500">- Raden Prakoso</span>
    </div>

    <div class="min-w-[250px] p-6 bg-white/5 rounded-xl border border-white/10 hover:scale-105 transition">
      ⭐⭐⭐⭐⭐
      <p class="text-gray-300 mt-3">Pelayanan cepat dan hasil memuaskan 👍</p>
      <span class="text-sm text-gray-500">- Budi</span>
    </div>

    <div class="min-w-[250px] p-6 bg-white/5 rounded-xl border border-white/10 hover:scale-105 transition">
      ⭐⭐⭐⭐⭐
      <p class="text-gray-300 mt-3">Recommended banget buat Vespa matic!</p>
      <span class="text-sm text-gray-500">- Dika</span>
    </div>

  </div>
</section>

<!-- ABOUT -->
<section class="py-20 text-center max-w-4xl mx-auto px-6 px-4 sm:px-6">
  <h2 class="text-3xl font-bold mb-6">Tentang Bengkel</h2>

  <p class="text-gray-400 leading-relaxed">
    <span class="text-white font-semibold">X-MY GARAGE</span> adalah bengkel spesialis Vespa Matic 
    dengan standar pengerjaan profesional, cepat, dan transparan. 
    Didukung mekanik berpengalaman dan bersertifikasi, kami memastikan setiap motor 
    mendapatkan perawatan terbaik untuk performa maksimal dan kenyamanan berkendara.
  </p>
<!-- HARGA -->
<section id="harga" class="py-20 px-4 sm:px-6">
  <h2 class="text-3xl font-bold text-center mb-12">
    Paket Service Vespa Matic
  </h2>

  <div class="sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto px-6">

    <!-- CARD 1 -->
    <div class="relative rounded-2xl overflow-hidden hover:scale-105 transition group">
      <img src="/images/vespa.png"
           class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-500">
      <div class="absolute inset-0 bg-black/70"></div>

      <div class="relative z-10 p-6 text-center">
        <h3 class="text-xl font-semibold mb-2">Paket 2V</h3>
        <p class="text-gray-300 mb-4">Vespa Matic</p>
        <ul class="text-sm text-gray-200 space-y-2 mb-6">
          <li>✔ Tune Up Mesin</li>
          <li>✔ Servis CVT</li>
          <li>✔ Oli Mesin Castrol</li>
          <li>✔ Oli Gardan Castrol</li>
          <li>✔ Pengecekan Rem</li>
        </ul>

        <span class="block text-2xl font-bold mb-4">Rp225K</span>

        <a href="https://wa.me/62896773129"
           class="bg-blue-500 hover:bg-blue-600 px-5 py-2 rounded-xl transition inline-block">
           Booking
        </a>
      </div>
    </div>

    <!-- CARD 2 -->
    <div class="relative rounded-2xl overflow-hidden hover:scale-105 transition group">
      <img src="/images/vespa.png"
           class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-500">
      <div class="absolute inset-0 bg-black/70"></div>

      <div class="relative z-10 p-6 text-center">
        <h3 class="text-xl font-semibold mb-2">Paket 2V</h3>
        <p class="text-gray-300 mb-4">Vespa Matic</p>

        <ul class="text-sm text-gray-200 space-y-2 mb-6">
          <li>✔ Tune Up Mesin</li>
          <li>✔ Servis CVT</li>
          <li>✔ Oli Mesin Motul</li>
          <li>✔ Oli Gardan Motul</li>
          <li>✔ Pengecekan Rem</li>
        </ul>

        <span class="block text-2xl font-bold mb-4">Rp275K</span>

        <a href="https://wa.me/62896773129"
           class="bg-blue-500 hover:bg-blue-600 px-5 py-2 rounded-xl transition inline-block">
           Booking
        </a>
      </div>
    </div>

    <!-- BEST -->
    <div class="relative rounded-2xl overflow-hidden hover:scale-105 transition group">
  <!-- Background -->
  <img src="/images/vespa.png"
       class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-500">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/70"></div>
  <!-- Content -->
  <div class="relative z-10 p-6 text-center">
      <h3 class="text-xl font-semibold mb-2 text-white">Paket 3V</h3>
      <p class="text-blue-300 mb-4">Performa lebih optimal</p>
      <ul class="text-sm text-white space-y-2 mb-6">
        <li>✔ Tune Up Mesin</li>
        <li>✔ Servis CVT</li>
        <li>✔ Oli Mesin Castrol</li>
        <li>✔ Oli Gardan Castrol</li>
      </ul>

      <span class="text-2xl font-bold block mb-4">Rp250K</span>

      <a href="https://wa.me/62896773129"
         class="bg-blue-500 hover:bg-blue-600 px-5 py-2 rounded-xl transition inline-block">
         Booking
      </a>
    </div>
    </div>
    <!-- PREMIUM -->
<div class="relative rounded-2xl overflow-hidden hover:scale-105 transition group">

  <!-- Background -->
  <img src="/images/vespa.png"
       class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-500">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/70"></div>

  <!-- Content -->
  <div class="relative z-10 p-6 text-center">

    <h3 class="text-xl font-semibold mb-2 text-white">Premium 3V</h3>
    <p class="text-gray-300 mb-4">Perawatan lengkap</p>

    <ul class="text-sm text-gray-200 space-y-2 mb-6">
      <li>✔ Tune Up Mesin</li>
      <li>✔ Servis CVT</li>
      <li>✔ Oli Mesin Motul</li>
      <li>✔ Oli Gardan Motul</li>
      <li>✔ Cek Kelistrikan</li>
    </ul>

    <span class="text-2xl font-bold text-white block mb-4">Rp300K</span>

    <a href="https://wa.me/62896773129"
       class="bg-blue-500 hover:bg-blue-600 px-5 py-2 rounded-xl transition inline-block">
       Booking
    </a>

  </div>
</div>
  
</section>

<style>
.price-card {
  padding: 30px;
  border-radius: 16px;
  text-align: center;
  background: rgba(255,255,255,0.05);
}
.highlight {
  background: #2563eb;
  transform: scale(1.05);
}
</style>

<!-- CTA -->
 <section class="py-20 text-center"> 
 <h2 class="text-3xl font-bold mb-4">Motor Bermasalah?</h2>
 <p class="text-gray-400 mb-6">Langsung konsultasi gratis via WhatsApp</p> 
 <a href="https://wa.me/62896773129" class="bg-green-500 hover:bg-green-600 px-8 py-3 rounded-xl transition shadow-lg hover:scale-110"> Chat WhatsApp </a>
 </section> 
 <!-- KONTAK --> 
 <section id="kontak" class="py-16 bg-gray-900 text-center">
  <h2 class="text-3xl font-bold mb-4">Lokasi Bengkel</h2>

  <p class="text-gray-400">
    Jl. Kalimalang Tarum Barat No.3, Cipinang Melayu, Jakarta Timur
  </p>

  <!-- BUTTON MAP -->
  <div class="mt-4 flex justify-center gap-4 flex-wrap">

    <!-- LIHAT MAP -->
    <a href="https://www.google.com/maps/place/X-MY+GARAGE+(Vespa+Matic)/@-6.2453838,106.8991817,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f3ff57772987:0x4c408ab09e4b9d70!8m2!3d-6.2453891!4d106.9017566!16s%2Fg%2F11kbhn5914?entry=ttu&g_ep=EgoyMDI2MDQwNi4wIKXMDSoASAFQAw%3D%3D"
       target="_blank"
       class="inline-block bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg transition">
       📍 Lihat di Maps
    </a>

    <!-- ARAHKAN -->
    <a href="https://www.google.com/maps/dir/?api=1&destination=X-MY+GARAGE+Vespa+Matic+Jakarta"
       target="_blank"
       class="inline-block bg-green-500 hover:bg-green-600 px-4 py-2 rounded-lg transition">
       🚗 Arahkan
    </a>

  </div>

  <!-- INSTAGRAM -->
  <div class="mt-6">
    <a href="https://instagram.com/xmy_garage"
       target="_blank"
       class="text-pink-400 hover:underline">
       📸 @xmy_garage
    </a>
  </div>

  <!-- EMBED MAP -->
  <div class="mt-10 max-w-4xl mx-auto rounded-2xl overflow-hidden shadow-lg border border-white/10">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1391320623443!2d106.9017566!3d-6.245389100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3ff57772987%3A0x4c408ab09e4b9d70!2sX-MY%20GARAGE%20(Vespa%20Matic)!5e0!3m2!1sid!2sid!4v1775642229716!5m2!1sid!2sid"
      width="100%"
      height="320"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      class="rounded-2xl">
    </iframe>
  </div>
</section>
<!-- FLOAT WA --> 
<a href="https://wa.me/62896773129" class="fixed bottom-4 right-4 md:bottom-6 md:right-6 bg-green-500 hover:bg-green-600 
       p-4 rounded-full shadow-lg 
       animate-bounce hover:animate-none transition"> 💬 </a>

<!-- FOOTER -->
<footer class="bg-black py-6 text-center text-gray-500">
  © 2026 X-MY GARAGE
</footer>

<!-- SCRIPT -->
<script>
const nav = document.getElementById("navbar");
const banner = document.getElementById("parallax");

window.addEventListener("scroll", () => {
  if (nav) {
    nav.classList.toggle("bg-black/70", window.scrollY > 50);
    nav.classList.toggle("shadow-lg", window.scrollY > 50);
  }

  if (banner) {
    banner.style.transform = `translateY(${window.scrollY * 0.3}px) scale(1.1)`;
  }
});
</script>
<script>
AOS.init({
  duration: 800,
  once: true
});
</script>

<script>
const btn = document.getElementById("menuBtn");
const menu = document.getElementById("mobileMenu");

btn.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});
</script>

<script>
  lucide.createIcons();
</script>
</body>
</html>