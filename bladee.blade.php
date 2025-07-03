<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AliveHire - Coming Soon</title>
    
    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
   <style>
@keyframes fade-in-down {
  0% {
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fade-in-down {
  animation: fade-in-down 1s ease-out forwards;
}

@keyframes fade-in-up {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fade-in-up {
  animation: fade-in-up 0.6s ease-out forwards;
}

@keyframes fade-in {
  0% {
    opacity: 0;
    transform: translateY(10px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fade-in {
  animation: fade-in 0.6s ease-out forwards;
}

@keyframes shine {
  0% {
    transform: translateX(-100%) rotate(10deg);
  }
  100% {
    transform: translateX(200%) rotate(10deg);
  }
}

@keyframes fade-in-up {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fade-in-up {
  animation: fade-in-up 0.6s ease-out forwards;
}

.shine-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: linear-gradient(
    120deg,
    rgba(255, 255, 255, 0) 0%,
    rgba(255, 255, 255, 0.025) 45%,
    rgba(255, 255, 255, 0.08) 50%,
    rgba(255, 255, 255, 0.025) 55%,
    rgba(255, 255, 255, 0) 100%
  );
  animation: shine 5s linear infinite;
  pointer-events: none;
  mix-blend-mode: screen;
  z-index: 10;
}

.glassmorphic-card {
  background: rgba(255, 255, 255, 0.04);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.12);
}
</style>

</head>
<body class="bg-gradient-to-br from-[#071E36] to-[#0B243F]">
    <div class="w-full overflow-x-hidden">
        {{-- First Section - Hero Area --}}
        <div class="relative w-full min-h-screen overflow-hidden text-white" style="font-family: 'Playfair Display', serif;">
            {{-- Background Video --}}
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
                <source src="{{ asset('asset/imagesset/employer.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            {{-- Dark Overlay --}}
            <div class="absolute inset-0 z-0 bg-black/40 backdrop-blur-sm"></div>

            {{-- Header --}}
            <div class="absolute top-0 left-0 w-full flex items-center justify-between p-6 z-10">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('asset/imagesset/alivehirelogo.png') }}" class="h-12 md:h-14" alt="Alive Hire Logo">
                </div>
                <a href="#waitlist"
                    class="px-8 py-3.5 text-white text-base md:text-xl font-semibold rounded-md
                           bg-gradient-to-r from-[#00BBD3] to-[#0088aa]
                           shadow-[0_8px_20px_rgba(0,187,211,0.4)]
                           ring-2 ring-cyan-300/50
                           hover:from-cyan-400 hover:to-cyan-600
                           hover:shadow-[0_10px_30px_rgba(0,187,211,0.5)]
                           transition-all duration-300 ease-out backdrop-blur-sm">
                    Pre-Register
                </a>
            </div>

            <div class="relative z-10 h-full flex items-start justify-start px-6 md:px-16 pt-[35vh]">
                <div class="max-w-xl w-full px-6 py-8  
                           flex flex-col items-center justify-center text-center 
                           opacity-0 animate-fade-in-down">

                    {{-- Main Heading --}}
                    <h1 class="text-5xl md:text-6xl font-extrabold mb-3 drop-shadow-2xl text-white leading-tight">
                        Coming Soon
                    </h1>

                    {{-- Typing line --}}
                    <p class="uppercase tracking-wide font-semibold mb-4 p-2 leading-snug">
                        <span id="typing-text"
                              class="bg-gradient-to-r from-cyan-500 to-cyan-700 bg-clip-text text-transparent block 
                                     text-xl md:text-2xl font-bold min-h-[2.25rem]">
                        </span>
                    </p>
                </div>
            </div>

            {{-- Footer --}}
            <div class="absolute bottom-10 md:bottom-14 w-full px-4 md:px-10 flex flex-col md:flex-row justify-between items-start md:items-center gap-6 md:gap-0 text-sm text-gray-300 z-10">

                {{-- Countdown + Label (Left Side) --}}
                <div class="flex flex-col items-start gap-4 text-white text-base md:text-lg font-semibold">
                    <div class="uppercase tracking-widest text-white font-extrabold text-2xl md:text-3xl drop-shadow-md">
                        Launching In
                    </div>

                    <div class="flex gap-6">
                        <div class="text-center">
                            <div class="text-3xl md:text-4xl font-extrabold leading-tight" id="days">50</div>
                            <div class="text-lg tracking-What Makwide">Days</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl md:text-4xl font-extrabold leading-tight" id="hours">49</div>
                            <div class="text-lg tracking-wide">Hours</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl md:text-4xl font-extrabold leading-tight" id="minutes">48</div>
                            <div class="text-lg tracking-wide">Minutes</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl md:text-4xl font-extrabold leading-tight" id="seconds">47</div>
                            <div class="text-lg tracking-wide">Seconds</div>
                        </div>
                    </div>
                </div>

                {{-- Address + Email (Right Side) --}}
                <div class="text-right leading-relaxed text-white text-base md:text-xl font-medium space-y-2">
                    <div>AliveHire HQ, 72/3B Cyber Heights,<br class="md:hidden">
                        Sector 18, Gurugram, Haryana</div>
                    <div>
                        <a href="mailto:support@alivehire.com"
                           class="text-cyan-400 hover:text-cyan-300 hover:underline transition">
                            support@alivehire.com
                        </a>
                    </div>
                    {{-- Optional tagline for pro touch --}}
                    <div class="text-lg text-white/60 italic mt-1">Empowered by AI. Built for You.</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Second Section - Features Section --}}
    <section class="relative text-white py-20 px-6 md:px-12 overflow-hidden opacity-0 animate-fade-in-down"
             style="animation-delay: 0.6s; animation-fill-mode: forwards;"
             x-data="{ activeTab: 'jobseeker' }">
        {{-- Background Image --}}
        <div class="absolute inset-0 z-0 pointer-events-none">
            <img src="{{ asset('asset/imagesset/sparkles.png') }}"  alt="sparkle" class="w-full h-full object-cover opacity-10">
        </div>

        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-start justify-between gap-12 relative z-10" style="font-family: 'Playfair Display', serif;">
            {{-- Tabs + Feature Cards --}}
            <div class="w-full md:w-[50%] space-y-6 transition-all duration-700"
                 :class="activeTab === 'jobseeker' ? 'order-1' : 'order-2'">
                {{-- Heading --}}
                <h2 class="text-4xl md:text-4xl font-extrabold text-cyan-400 tracking-tight text-center">
                    What Describes you better ?
                </h2>

                {{-- Tabs --}}
                <div class="flex justify-center">
                    <div class="bg-white/5 rounded-lg p-1 flex space-x-2 shadow-inner">
                        <button @click="activeTab = 'jobseeker'"
                                :class="activeTab === 'jobseeker' ? 'bg-cyan-400 text-white' : 'text-white hover:bg-white/10'"
                                class="px-6 py-3 rounded-md text-base font-semibold transition-all duration-300">
                            Job Seeker
                        </button>
                        <button @click="activeTab = 'recruiter'"
                                :class="activeTab === 'recruiter' ? 'bg-cyan-400 text-white' : 'text-white hover:bg-white/10'"
                                class="px-6 py-3 rounded-md text-base font-semibold transition-all duration-300">
                            Recruiter
                        </button>
                    </div>
                </div>
{{-- Job Seeker Features --}}
<div x-show="activeTab === 'jobseeker'" x-transition>
    <div class="relative mt-8 h-[520px] w-full max-w-[640px] mx-auto">
        {{-- Feature Boxes with staggered fade-in-up animation --}}
        <div class="absolute opacity-0 animate-fade-in-up"
             style="top: 0px; left: calc(50% - 140px + 0px); width: 280px; animation-delay: 0.3s;">
            <div class="border border-cyan-400/30 bg-white/5 backdrop-blur-sm text-white px-5 py-3 rounded-lg shadow-md text-center font-semibold">
                Smart Resume Feedback
            </div>
        </div>

        <div class="absolute opacity-0 animate-fade-in-up"
             style="top: 78px; left: calc(50% - 140px + -100px); width: 280px; animation-delay: 0.5s;">
            <div class="border border-cyan-400/30 bg-white/5 backdrop-blur-sm text-white px-5 py-3 rounded-lg shadow-md text-center font-semibold">
                Cover Letter that Writes itself
            </div>
        </div>

        <div class="absolute opacity-0 animate-fade-in-up"
             style="top: 156px; left: calc(50% - 140px + -200px); width: 280px; animation-delay: 0.7s;">
            <div class="border border-cyan-400/30 bg-white/5 backdrop-blur-sm text-white px-5 py-3 rounded-lg shadow-md text-center font-semibold">
                Interview Practice Assistant
            </div>
        </div>

        <div class="absolute opacity-0 animate-fade-in-up"
             style="top: 234px; left: calc(50% - 140px + -300px); width: 280px; animation-delay: 0.9s;">
            <div class="border border-cyan-400/30 bg-white/5 backdrop-blur-sm text-white px-5 py-3 rounded-lg shadow-md text-center font-semibold">
                Personal Portfolio Website
            </div>
        </div>

        <div class="absolute opacity-0 animate-fade-in-up"
             style="top: 312px; left: calc(50% - 140px + -200px); width: 280px; animation-delay: 1.1s;">
            <div class="border border-cyan-400/30 bg-white/5 backdrop-blur-sm text-white px-5 py-3 rounded-lg shadow-md text-center font-semibold">
                Career Planner & Daily Tracker
            </div>
        </div>

        <div class="absolute opacity-0 animate-fade-in-up"
             style="top: 390px; left: calc(50% - 140px + -100px); width: 280px; animation-delay: 1.3s;">
            <div class="border border-cyan-400/30 bg-white/5 backdrop-blur-sm text-white px-5 py-3 rounded-lg shadow-md text-center font-semibold">
                Auto Job Apply Agent
            </div>
        </div>

        <div class="absolute opacity-0 animate-fade-in-up"
             style="top: 468px; left: calc(50% - 140px + 0px); width: 280px; animation-delay: 1.5s;">
            <div class="border border-cyan-400/30 bg-white/5 backdrop-blur-sm text-white px-5 py-3 rounded-lg shadow-md text-center font-semibold">
                24/7 Career Chat Assistant
            </div>
        </div>
    </div>
</div>


                {{-- Recruiter Features (Mirrored Layout) --}}
                <div x-show="activeTab === 'recruiter'" x-transition>
                    <div class="relative mt-8 h-[520px] w-full max-w-[640px] mx-auto">
                        {{-- Feature 1 --}}
                        <div class="absolute transition-all duration-500 ease-out hover:scale-[1.02]
                                    border border-cyan-400/30 bg-white/5 backdrop-blur-sm text-white
                                    px-5 py-3 rounded-lg shadow-md text-center font-semibold"
                             style="top: 0px; left: calc(50% - 140px + 0px); width: 280px;">
                            End-to-End Hiring Suite
                        </div>
                        {{-- Feature 2 --}}
                        <div class="absolute transition-all duration-500 ease-out hover:scale-[1.02]
                                    border border-cyan-400/30 bg-white/5 backdrop-blur-sm text-white
                                    px-5 py-3 rounded-lg shadow-md text-center font-semibold"
                             style="top: 78px; left: calc(50% - 140px + 100px); width: 280px;">
                            Cultural Fit Shortlisting
                        </div>
                        {{-- Feature 3 --}}
                        <div class="absolute transition-all duration-500 ease-out hover:scale-[1.02]
                                    border border-cyan-400/30 bg-white/5 backdrop-blur-sm text-white
                                    px-5 py-3 rounded-lg shadow-md text-center font-semibold"
                             style="top: 156px; left: calc(50% - 140px + 200px); width: 280px;">
                            HR Training Module
                        </div>
                        {{-- Feature 4 --}}
                        <div class="absolute transition-all duration-500 ease-out hover:scale-[1.02]
                                    border border-cyan-400/30 bg-white/5 backdrop-blur-sm text-white
                                    px-5 py-3 rounded-lg shadow-md text-center font-semibold"
                             style="top: 234px; left: calc(50% - 140px + 300px); width: 280px;">
                            AI Recruiter Chat Assistant
                        </div>
                        {{-- Feature 5 --}}
                        <div class="absolute transition-all duration-500 ease-out hover:scale-[1.02]
                                    border border-cyan-400/30 bg-white/5 backdrop-blur-sm text-white
                                    px-5 py-3 rounded-lg shadow-md text-center font-semibold"
                             style="top: 312px; left: calc(50% - 140px + 200px); width: 280px;">
                            Smart Screening Test Builder
                        </div>
                        {{-- Feature 6 --}}
                        <div class="absolute transition-all duration-500 ease-out hover:scale-[1.02]
                                    border border-cyan-400/30 bg-white/5 backdrop-blur-sm text-white
                                    px-5 py-3 rounded-lg shadow-md text-center font-semibold"
                             style="top: 390px; left: calc(50% - 140px + 100px); width: 280px;">
                            AI Candidate Matching Engine
                        </div>
                        {{-- Feature 7 --}}
                        <div class="absolute transition-all duration-500 ease-out hover:scale-[1.02]
                                    border border-cyan-400/30 bg-white/5 backdrop-blur-sm text-white
                                    px-5 py-3 rounded-lg shadow-md text-center font-semibold"
                             style="top: 468px; left: calc(50% - 140px + 0px); width: 280px;">
                            Real Talent Visibility
                        </div>
                    </div>
                </div>
            </div>

            {{-- Aarya Bot --}}
            <div class="w-full md:w-[50%] flex items-center justify-center transition-all duration-700"
                 :class="activeTab === 'jobseeker' ? 'order-2' : 'order-1'">

                <div class="relative z-10 flex items-center gap-4"
                     :class="activeTab === 'recruiter' ? 'flex-row-reverse' : 'flex-row'">

                    {{-- Chat Bubble --}}
                    <div class="relative bg-white text-black text-sm rounded-xl px-4 py-3 shadow-lg max-w-[240px]">
                        Hi there, I am Aarya<br>Let me show you some of our features.
                        <div class="absolute top-6 -right-2 w-4 h-4 bg-white rotate-45 shadow-md"></div>
                    </div>

                    {{-- Bot Image (shifted upward) --}}
                    <div class="mt-[50%]">
                        <img src="{{ asset('asset/imagesset/aarya.png') }}" alt="Aarya Bot" class="w-[180px] drop-shadow-xl">
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- Third Section - Unique Features Card --}}
<div class="w-full flex justify-end mb-4">
    <div class="w-full md:w-[95%] lg:w-[85%] p-6 md:p-10 text-white rounded-md shadow-xl glassmorphic-card relative overflow-hidden"
         style="font-family: 'Playfair Display', serif;">

        {{-- Shine Effect Overlay --}}
        <div class="shine-overlay"></div>

        {{-- Heading --}}
        <h2 class="text-4xl md:text-4xl font-bold mb-4">
            What Makes Alive Hire Truly Unique <span class="ml-1">🔒</span>
        </h2>

        {{-- Subheading --}}
        <p class="text-base text-white/80 max-w-3xl mb-10">
            AliveHire blends AI with simplicity to transform how you grow your career or build your team.
            <br class="hidden md:block">
            From instant job tools to auto-apply agents, everything works together — effortlessly.
        </p>

        {{-- Main content section --}}
        <div class="flex flex-col md:flex-row gap-10 items-stretch relative">
            {{-- Left image aligned center vertically --}}
           <div class="w-full md:w-[45%] flex items-center justify-start translate-x-[60px]">
<img src="{{ asset('asset/imagesset/image1.png') }}"
     alt="Unique Feature Image"
     class="ml-28 max-w-[400px] w-auto border border-white/10 rounded-md shadow-md">

</div>



            {{-- Right text features --}}
            <div class="w-full md:w-[55%] space-y-6 relative z-20 flex flex-col justify-center pr-2">
                {{-- Feature blocks --}}
                <div class="flex items-start gap-4">
                    <div class="text-cyan-400 mt-1  text-xl">
                        <img src="{{ asset('asset/imagesset/icon.png') }}" alt="icon" class="w-6 h-6">
                    </div>
                    <div>
                        <div class="text-xl font-semibold">Real-Time Career Chat Assistant</div>
                        <p class="text-base text-white/70 mt-1">
                            Talk to your assistant like mentor for career advice.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="text-cyan-400 mt-1 text-xl">
                        <img src="{{ asset('asset/imagesset/icon.png') }}" alt="icon" class="w-6 h-6">
                    </div>
                    <div>
                        <div class="text-xl font-semibold">Smart Resume Evaluator</div>
                        <p class="text-base text-white/70 mt-1">
                            Get real-time feedback to improve your resume instantly.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="text-cyan-400 mt-1 text-xl">
                        <img src="{{ asset('asset/imagesset/icon.png') }}" alt="icon" class="w-6 h-6">
                    </div>
                    <div>
                        <div class="text-xl font-semibold">AI Portfolio Generator</div>
                        <p class="text-base text-white/70 mt-1">
                            Create and share your AI-generated digital portfolio.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="text-cyan-400 mt-1 text-xl">
                        <img src="{{ asset('asset/imagesset/icon.png') }}" alt="icon" class="w-6 h-6">
                    </div>
                    <div>
                        <div class="text-xl font-semibold">24/7 Application Tracker</div>
                        <p class="text-base text-white/70 mt-1">
                            Track job applications and receive smart alerts.
                        </p>
                    </div>
                </div>

                {{-- Decorative vertical line --}}
<div class="absolute top-0 right-0 h-full flex items-center translate-x-[-280px] translate-y-[-28px]">
    <img src="{{ asset('asset/imagesset/line.png') }}"
         alt="Decorative Line"
         class="h-full w-[60px] object-contain hidden md:block" />
</div>


            </div>
            
        </div>
        
    </div>
</div>
  <section class="relative text-white py-12 sm:py-16 md:py-20 px-4 sm:px-6 md:px-12 overflow-hidden bg-[#071E36] mt-[40px] sm:mt-[60px] md:mt-[80px]">
        {{-- Background --}}
        <div class="absolute inset-0 z-0 pointer-events-none">
            <img src="{{ asset('asset/imagesset/sparkles.png') }}" alt="sparkle" class="w-[1840px] h-[1100px] object-cover opacity-10">
        </div>

        <div class="relative z-10 flex flex-col lg:flex-row gap-8 sm:gap-10 md:gap-12 items-start">
            {{-- Left Image Grid --}}
            <div class="w-full lg:w-1/2 relative h-[400px] sm:h-[500px] md:h-[600px] mx-auto lg:mx-0 transform scale-75 sm:scale-90 md:scale-100 lg:translate-x-[120px] xl:translate-x-[190px] translate-y-0 sm:translate-y-[-15px] md:translate-y-[-30px]">
                {{-- Image 1 --}}
                <img src="{{ asset('asset/imagesset/forth_sec_img1.png') }}" 
                     class="absolute top-[10px] left-[40px] sm:left-[60px] md:left-[80px] rounded-xl border-2 sm:border-3 border-cyan-320/100 shadow-md w-[280px] sm:w-[320px] md:w-[370px] h-[160px] sm:h-[190px] md:h-[220px]" 
                     alt="Image 1" />

                {{-- Image 5 --}}
                <img src="{{ asset('asset/imagesset/fourth_sec_img5.png') }}"
                     class="absolute top-[10px] left-[300px] sm:left-[360px] md:left-[440px] rounded-2xl transform rotate-270 object-cover w-[120px] sm:w-[160px] md:w-[200px] h-[120px] sm:h-[160px] md:h-[200px]"
                     alt="Image 5" />

                {{-- Image 2 --}}
                <img src="{{ asset('asset/imagesset/fourth_sec_image2.png') }}"
                     class="absolute top-[180px] sm:top-[210px] md:top-[240px] left-[-20px] sm:left-[-23px] md:left-[-26px] rounded-xl border-2 sm:border-3 border-cyan-320/100 shadow-md" 
                     alt="Image 2" />

                {{-- Image 3 --}}
                <img src="{{ asset('asset/imagesset/fourth_sec_img3.png') }}"
                     class="absolute top-[140px] sm:top-[160px] md:top-[180px] left-[240px] sm:left-[280px] md:left-[320px] rounded-xl border-2 sm:border-3 border-cyan-320/100 shadow-md w-[220px] sm:w-[260px] md:w-[300px] h-[160px] sm:h-[190px] md:h-[220px]" 
                     alt="Image 3" />

                {{-- Image 6 --}}
                <img src="{{ asset('asset/imagesset/fourth_sec_img6.png') }}"
                     class="absolute top-[300px] sm:top-[350px] md:top-[400px] left-[-45px] sm:left-[-52px] md:left-[-60px] rounded-2xl object-cover w-[200px] sm:w-[240px] md:w-[280px] h-[200px] sm:h-[240px] md:h-[280px]"
                     alt="Image 6" />

                {{-- Image 4 --}}
                <img src="{{ asset('asset/imagesset/fourth_sec_img4.png') }}"
                     class="absolute top-[308px] sm:top-[358px] md:top-[408px] left-[120px] sm:left-[140px] md:left-[160px] w-[260px] sm:w-[310px] md:w-[360px] h-[140px] sm:h-[170px] md:h-[200px] object-cover rounded-xl border-[2px] sm:border-[3px] border-cyan-300 shadow-md"
                     alt="Image 4" />
            </div>

            {{-- Right Content --}}
            <div class="w-full lg:w-[55%] xl:w-[50%] space-y-4 sm:space-y-5 md:space-y-6 pl-0 sm:pl-[25px] md:pl-[50px]" style="font-family: 'Playfair Display', serif;">
                <div class="flex items-center gap-1 relative">
                    <h3 class="text-3xl sm:text-4xl md:text-5xl xl:text-3xl font-bold leading-snug">Why Join Now?</h3>
                    {{-- Team Image - responsive positioning --}}
                    <img src="{{ asset('asset/imagesset/fourth_sec_img7.png') }}"
                         alt="Team"
                         class="absolute top-[-50px] sm:top-[-75px] md:top-[-100px] right-[-5px] sm:right-[-7px] md:right-[-10px] w-[150px] sm:w-[200px] md:w-[260px] h-[150px] sm:h-[200px] md:h-[260px]" />
                </div>

                <h2 class="text-3xl sm:text-4xl md:text-5xl xl:text-4xl font-semibold text-white-270">Pre-Launch Benefits</h2>

                <p class="text-white/90 text-lg sm:text-xl leading-relaxed max-w-3xl">
                    Join early to unlock exclusive perks — just for our first users. Enjoy premium access, feature previews, and direct support before anyone else.
                </p>

                {{-- Benefits List with Floating Image --}}
                <div class="relative">
                    {{-- Floating Image 8 - only on large screens --}}
                    <img src="{{ asset('asset/imagesset/fourth_sec_img8.png') }}"
                         alt="On-cloud"
                         class="hidden lg:block absolute right-[150px] xl:right-[230px] top-0 w-[120px] xl:w-[170px] h-[130px] xl:h-[185px] object-cover rounded-[15px] border-[2px] border-[#7DA6BB] shadow-lg z-10" />

                    {{-- Benefits --}}
                    <div class="space-y-4 sm:space-y-5 md:space-y-6 mt-2 pr-0 lg:pr-[120px] xl:pr-[180px]">
                        <div class="flex items-start gap-3 sm:gap-4">
                            <img src="{{ asset('asset/imagesset/icon.png') }}" class="w-5 h-5 sm:w-6 sm:h-6 md:w-7 md:h-7 mt-1" alt="icon">
                            <div class="text-lg sm:text-xl font-bold">30 Days Free Premium Access</div>
                        </div>

                        <div class="flex items-start gap-3 sm:gap-4">
                            <img src="{{ asset('asset/imagesset/icon.png') }}" class="w-5 h-5 sm:w-6 sm:h-6 md:w-7 md:h-7 mt-1" alt="icon">
                            <div class="text-lg sm:text-xl font-bold">Early User Badge + Boost</div>
                        </div>

                        <div class="flex items-start gap-3 sm:gap-4">
                            <img src="{{ asset('asset/imagesset/icon.png') }}" class="w-5 h-5 sm:w-6 sm:h-6 md:w-7 md:h-7 mt-1" alt="icon">
                            <div class="text-lg sm:text-xl font-bold">First Access to New Features</div>
                        </div>

                        <div class="flex items-start gap-3 sm:gap-4">
                            <img src="{{ asset('asset/imagesset/icon.png') }}" class="w-5 h-5 sm:w-6 sm:h-6 md:w-7 md:h-7 mt-1" alt="icon">
                            <div class="text-lg sm:text-xl font-bold">Direct Support</div>
                        </div>

                        <div class="flex items-start gap-3 sm:gap-4">
                            <img src="{{ asset('asset/imagesset/icon.png') }}" class="w-5 h-5 sm:w-6 sm:h-6 md:w-7 md:h-7 mt-1" alt="icon">
                            <div class="text-lg sm:text-xl font-bold">Entry into Closed Beta Environment</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Background 2 + Robo Section --}}
        <div class="relative z-0 mt-[150px] sm:mt-[200px] md:mt-[300px] flex flex-col items-center text-center">
            {{-- Enlarged Background Glow --}}
            <img src="{{ asset('asset/imagesset/fifth_sec_bg.png') }}" alt="glow"
                 class="absolute top-0 w-[800px] sm:w-[1000px] md:w-[1200px] h-[800px] sm:h-[1000px] md:h-[1200px] object-cover opacity-40 translate-y-[-54px] sm:translate-y-[-81px] md:translate-y-[-108px]" />

            {{-- Robo & Chatbox --}}
            <div class="relative z-10 flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6 mt-[50px] sm:mt-[75px] md:mt-[100px] translate-x-0 sm:translate-x-[80px] md:translate-x-[160px]">
                {{-- Robo Image --}}
                <img src="{{ asset('asset/imagesset/fifth_sec_robo.png') }}" alt="robo" class="w-[150px] sm:w-[180px] md:w-[200px] h-[300px] sm:h-[360px] md:h-[400px]" />

                {{-- Chat Box with Text --}}
                <div class="relative w-[250px] sm:w-[280px] md:w-[300px] h-[180px] sm:h-[210px] md:h-[230px] translate-y-0 sm:translate-y-[-80px] md:translate-y-[-160px]">
                    <img src="{{ asset('asset/imagesset/chat_box.png') }}" alt="chat" class="w-full h-full" />
                    
                    {{-- Text overlay --}}
                    <div class="absolute top-8 sm:top-12 md:top-16 left-4 sm:left-5 md:left-6 right-4 sm:right-5 md:right-6 text-white text-base sm:text-lg font-medium leading-snug">
                        <p>Thanks for visiting.<br />Good luck for your career journey.</p>
                    </div>
                </div>
            </div>

            {{-- Centered Content Below Robo --}}
            <div class="relative z-10 mt-8 sm:mt-10 md:mt-12 space-y-3 sm:space-y-4 max-w-2xl px-4" style="font-family: 'Playfair Display', serif;">
                <p class="text-2xl sm:text-3xl md:text-4xl font-semibold">Join Our Community</p>
                <p class="text-lg sm:text-xl text-white/90">
                    Grow the community with Alive Hire, Pre-register to get<br class="hidden sm:block" /> 
                    exciting perks and benefits.
                </p>
                
                {{-- Button Container --}}
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center items-center mt-[40px] sm:mt-[50px] md:mt-[60px] z-10 relative translate-y-[20px] sm:translate-y-[25px] md:translate-y-[30px]">
                    {{-- Button 1 --}}
                    <button class="text-white font-semibold text-lg sm:text-xl px-8 sm:px-10 py-3 sm:py-4 rounded-full w-[180px] sm:w-[210px] h-[50px] sm:h-[60px] bg-gradient-to-r from-[#073546] via-[#0D1828] to-[#07384A] shadow-[0_3.2px_3.2px_rgba(0,0,0,0.25),0_3.2px_80px_rgba(0,180,216,0.15)] transition-transform hover:scale-105">
                        <a href="#">LinkedIn</a>
                    </button>

                    {{-- Button 2 --}}
                    <button class="text-white font-semibold text-lg sm:text-xl px-8 sm:px-10 py-3 sm:py-4 rounded-full w-[180px] sm:w-[210px] h-[50px] sm:h-[60px] bg-gradient-to-r from-[#073546] via-[#0D1828] to-[#07384A] shadow-[0_3.2px_3.2px_rgba(0,0,0,0.25),0_3.2px_80px_rgba(0,180,216,0.15)] transition-transform hover:scale-105">
                        <a href="#">X/Twitter</a>
                    </button>
                </div>
            </div>
        </div>
<div class="w-[2000px] h-[20px] bg-[#0F1117] border-t border-[#1F2832] py-6 px-4 translate-x-[-60px] translate-y-[80px]">
  {{-- Flex container to align logo and text --}}
  <div class="flex items-center gap-50 translate-x-[-90px] translate-y-[-10px]">
    <div class="z-10 translate-x-[100px]">
      <img src="{{ asset('asset/imagesset/alivehirefavicon.png') }}" alt="logo" class="w-[30px] h-[30px]">
    </div>
    <div class="translate-x-[800px]">
      Show off what you’ve built — proof beats promise.
    </div>
  </div>

  
</div>

           
</section>




{{-- Fifth Section - Placeholder --}}
 



    {{-- Commented Pre-Launch Benefits Section --}}
    {{-- This section would have the dark blue gradient background: bg-gradient-to-br from-[#071E36] to-[#0B243F] --}}

    {{-- Countdown Script --}}
    <script>
        const launchDate = new Date("2025-07-08T00:00:00").getTime();
        setInterval(() => {
            const now = new Date().getTime();
            const distance = launchDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("days").innerText = days;
            document.getElementById("hours").innerText = hours;
            document.getElementById("minutes").innerText = minutes;
            document.getElementById("seconds").innerText = seconds;
        }, 1000);

        document.addEventListener("DOMContentLoaded", function() {
            const lines = [
                // Core Career Tools
                "AI Resume Optimization That Gets You Interviews",
                "Create Your Resume with AI in Seconds",
                "Upload, Parse, and Perfect Your Resume",
                "AI Cover Letters That Match the JD",
                "Build a Personal Career Website Instantly",

                // Application & Dashboard
                "One-Click Job Applications with AI Agents",
                "Track Every Application in Real-Time",
                "Never Miss a Job Opportunity Again",
                "Smart Job Recommendations Just for You",
                "Your Job Search, Automated by AI",

                // Interview Preparation
                "Mock Interviews Powered by AI",
                "Practice with Real-Time AI Interviewers",
                "Get Feedback Like a Real Recruiter",
                "Interview Coaching Tailored to Your Role",
                "Behavioral + Technical Test Practice",

                // Employer-Facing Tools
                "Smart Hiring with AI-Powered Filters",
                "Instant Resume Parsing for Recruiters",
                "Shortlist Candidates in Seconds",
                "AI Screening Tests That Adapt",
                "Job Descriptions Written by AI",

                // Unique Value Propositions
                "AI Agents That Apply Jobs for You",
                "Let AI Match You to the Right Job",
                "Resumes That Beat the ATS",
                "Your Career, Guided by an AI Coach",
                "Never Write a Cover Letter Again",
                "Interview Smarter, Not Harder",
                "Mock Tests Designed by Experts + AI",
                "One Platform. Endless Possibilities.",

                // Brand & Ecosystem
                "Built for Job Seekers. Powered by AI.",
                "A Better Way to Get Hired.",
                "AI + Career Tools = AliveHire"
            ];

            const target = document.getElementById("typing-text");
            let index = 0;
            let char = 0;
            let isDeleting = false;

            function typeLine() {
                const line = lines[index];
                if (isDeleting) {
                    char--;
                    target.textContent = line.substring(0, char);
                } else {
                    char++;
                    target.textContent = line.substring(0, char);
                }

                if (!isDeleting && char === line.length) {
                    setTimeout(() => {
                        isDeleting = true;
                    }, 1200);
                } else if (isDeleting && char === 0) {
                    isDeleting = false;
                    index = (index + 1) % lines.length;
                }

                setTimeout(typeLine, isDeleting ? 40 : 70);
            }

            typeLine();
        });
    </script>
</body>
</html>
