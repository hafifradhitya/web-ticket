<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reward Unlocked</title>
  <link href="{{ asset('output.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            poppins: ['Poppins', 'sans-serif']
          }
        }
      }
    }
  </script>
</head>
<body>
  <div class="relative flex flex-col w-full min-h-screen max-w-[640px] mx-auto">
    
    <!-- Background Gradient (tanpa gambar) -->
    <div class="fixed w-full max-w-[640px] top-0 h-screen z-0">
      <div class="absolute z-0 w-full h-[459px] bg-gradient-to-b from-[#F97316]/90 to-transparent"></div>
    </div>

    <!-- Top Nav -->
    <div class="relative w-full max-w-[640px] px-4 mt-[60px] z-20 h-12 flex items-center justify-center">
        <!-- Icon Back di kiri -->
        <a href="{{ route('front.index') }}" class="absolute left-4">
            <img src="{{ asset('assets/images/icons/back.svg') }}" class="w-12 h-12" alt="icon back">
        </a>

        <!-- Judul di tengah -->
        <h1 class="font-bold text-lg text-white text-center">Reward Unlocked</h1>

        <!-- Icon Love di kanan -->
        <a href="#" class="absolute right-4">
            <img src="{{ asset('assets/images/icons/heart.svg') }}" class="w-12 h-12" alt="icon love">
        </a>
    </div>


    <!-- Content -->
    <div class="relative mt-5 flex flex-1 justify-center items-center p-4 w-full h-full z-10">
      <div class="flex flex-col h-fit w-full max-w-[361px] rounded-[30px] p-5 gap-6 bg-white shadow-xl">
        
        <!-- Heroicon Icon -->
        <div class="flex justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>

        <!-- Heading -->
        <h1 class="font-bold text-2xl text-center leading-9">
          Congratulations! 🎉<br>
          You've Earned a Reward
        </h1>

        <!-- Promo Code Input -->
        <div>
          <label for="promo-code" class="block mb-2 font-semibold text-sm">Have a promo code?</label>
          <input type="text" id="promo-code" name="promo-code" placeholder="Enter your code" class="w-full px-4 py-3 border border-gray-300 rounded-full focus:ring-2 focus:ring-[#F97316] outline-none text-sm" />
        </div>

        <!-- Description -->
        <p class="text-center leading-6 text-gray-700 text-sm">
          Enter your promo code or claim your available reward. We’ll send confirmation to your email.
        </p>

        <!-- Action Buttons -->
        <div class="flex flex-col gap-3">
          <a href="#" class="w-full rounded-full py-3 px-5 text-white text-center bg-[#F97316] font-semibold hover:bg-[#fb7d2d] transition">
            Claim Reward
          </a>
          <a href="#" class="w-full rounded-full py-3 px-5 text-white text-center bg-[#13181D] font-semibold hover:bg-[#1d232a] transition">
            View My Rewards
          </a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
