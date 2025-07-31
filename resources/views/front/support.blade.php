<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="relative flex flex-col w-full min-h-screen max-w-[640px] mx-auto bg-[#F8F8F9]">
        <div id="background" class="absolute w-full top-0 bg-[#F97316] h-[200px] rounded-b-[50px]">
        </div>
        <div id="Top-Nav" class="relative flex items-center justify-between w-full px-4 mt-[60px]">
            <a href="{{route('front.index')}}">
                <img src="assets/images/icons/back.svg" class="w-12 h-12" alt="icon">
            </a>
            <h1 class="font-bold text-lg leading-[27px] text-white text-center w-full">Support</h1>
            <img src="assets/images/icons/Ellipse 3.svg" class="absolute transform -translate-x-1/2 left-1/2" alt="background">
            <a href="#">
                <img src="assets/images/icons/heart.svg" class="w-12 h-12" alt="icon">
            </a>
        </div>
        <main class="relative flex flex-col w-full gap-[30px] mt-[30px] overflow-x-hidden">
            <div class="flex flex-col items-center text-center gap-5 px-4">
                <div class="w-[120px] h-[120px] rounded-[50px] bg-[#D9D9D9] overflow-hidden">
                    <img src="{{asset('assets/images/logos/support.jpg')}}" class="w-full h-full object-cover" alt="thumbnail">
                </div>
                <p class="font-bold text-xl leading-[30px]">
                    <span class="text-[#F97316]">MyTicket</span>
                </p>
            </div>

            <div class="px-4">
  <div class="bg-white rounded-3xl p-4 shadow-sm flex items-start gap-3">
    <!-- Icon (Heroicons chat-bubble-left) -->
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#F97316] mt-1 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m-4 4h10M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4-.8L3 20l1.7-3.2A8.98 8.98 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
    </svg>
    <p class="text-sm text-gray-700 leading-relaxed">
      Punya pertanyaan atau butuh bantuan cepat? Cek pertanyaan yang sering ditanyakan di bawah, atau hubungi tim kami langsung!
    </p>
  </div>
</div>

            <section id="SupportFAQ" class="flex flex-col gap-4 px-4 pb-10">
  <div class="bg-white rounded-3xl p-4 shadow-md" x-data="{ open: false }">
    <h3 @click="open = !open" class="text-base font-semibold text-gray-800 cursor-pointer flex justify-between items-center">
      Bagaimana cara menghubungi tim support?
      <span x-text="open ? '-' : '+'"></span>
    </h3>
    <p x-show="open" x-transition class="text-sm text-gray-600 mt-2 leading-relaxed">
      Kamu bisa menghubungi tim support melalui email support@myticket.com atau melalui fitur live chat di halaman utama kami.
    </p>
  </div>

  <div class="bg-white rounded-3xl p-4 shadow-md" x-data="{ open: false }">
    <h3 @click="open = !open" class="text-base font-semibold text-gray-800 cursor-pointer flex justify-between items-center">
      Jam operasional support?
      <span x-text="open ? '-' : '+'"></span>
    </h3>
    <p x-show="open" x-transition class="text-sm text-gray-600 mt-2 leading-relaxed">
      Support kami aktif dari hari Senin sampai Sabtu, pukul 09:00 hingga 21:00 WIB. Hari libur nasional tutup.
    </p>
  </div>

  <!-- Tambahkan item FAQ lain seperti di atas -->
</section>

<div class="px-4 mt-2">
  <div class="bg-white rounded-3xl p-4 shadow-sm text-center">
    <p class="text-sm text-gray-700">
      Masih butuh bantuan? <br />
      <a href="mailto:support@myticket.com" class="text-[#F97316] font-medium hover:underline">Email kami</a> atau gunakan <span class="font-medium">live chat</span> di halaman utama.
    </p>
  </div>
</div>
        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>