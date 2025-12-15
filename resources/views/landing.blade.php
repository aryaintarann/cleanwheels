<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CleanWheels - Premium Home Service</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" href="/logo.png" type="image/png">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        .gradient-text {
            background: linear-gradient(135deg, #60A5FA 0%, #A855F7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="antialiased bg-slate-950 text-slate-100 selection:bg-indigo-500 selection:text-white">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 glass border-b border-slate-800/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex-shrink-0 flex items-center gap-2">
                    <img src="/logo.png" alt="CleanWheels" class="w-14 h-14 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="text-slate-300 hover:text-white transition-colors px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="#services" class="text-slate-300 hover:text-white transition-colors px-3 py-2 rounded-md text-sm font-medium">Services</a>
                        <a href="#book" class="bg-white text-slate-900 hover:bg-slate-200 px-6 py-2.5 rounded-full text-sm font-bold transition-all transform hover:scale-105 shadow-[0_0_20px_rgba(255,255,255,0.3)]">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center pt-20 overflow-hidden">
        <!-- Abstract Background -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-1/2 -right-1/2 w-[1000px] h-[1000px] bg-indigo-600/20 rounded-full blur-3xl opacity-30 animate-pulse"></div>
            <div class="absolute -bottom-1/2 -left-1/2 w-[800px] h-[800px] bg-blue-600/20 rounded-full blur-3xl opacity-30"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-left">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-sm font-medium mb-6">
                    <span class="w-2 h-2 rounded-full bg-indigo-500 animate-pulse"></span>
                    Now Available in Jakarta Area
                </div>
                <h1 class="text-5xl md:text-7xl font-bold tracking-tight mb-6 leading-tight">
                    Premium Care for <br>
                    <span class="gradient-text">Your Pride & Joy</span>
                </h1>
                <p class="mt-4 text-lg text-slate-400 max-w-lg leading-relaxed">
                    Professional car detailing and washing services delivered directly to your doorstep. Save time without compromising on quality.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row gap-4">
                    <a href="#book" class="px-8 py-4 bg-indigo-600 text-white rounded-full font-bold text-lg hover:bg-indigo-700 transition-all shadow-[0_10px_40px_-10px_rgba(79,70,229,0.5)] text-center">
                        Schedule Service
                    </a>
                    <a href="#services" class="px-8 py-4 bg-transparent border border-slate-700 text-slate-300 rounded-full font-bold text-lg hover:bg-slate-800 hover:text-white transition-all text-center">
                        Explore Services
                    </a>
                </div>
                <div class="mt-12 flex items-center gap-6 text-slate-500 text-sm font-medium">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Professional Equipment
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Eco-Friendly Products
                    </div>
                </div>
            </div>
            <div class="relative hidden lg:block">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent z-10"></div>
                <!-- Placeholder for high quality car image, using CSS shape for modern look -->
                <div class="relative z-0 bg-gradient-to-tr from-slate-800 to-slate-900 rounded-[2rem] p-1 border border-slate-800 shadow-2xl rotate-3 hover:rotate-0 transition-all duration-700">
                     <img src="https://images.unsplash.com/photo-1601362840469-51e4d8d58785?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Supercar" class="rounded-[1.9rem] opacity-90 object-cover w-full h-[600px]">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-slate-900/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-6">Our Services</h2>
                <p class="text-slate-400 text-lg max-w-2xl mx-auto">We offer a range of treatments designed to protect and enhance your vehicle's appearance.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="group relative bg-slate-900 rounded-3xl p-8 border border-slate-800 hover:border-indigo-500/50 transition-all duration-300 hover:-translate-y-2 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-indigo-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="w-14 h-14 bg-slate-800 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-indigo-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Premium Wash</h3>
                    <p class="text-slate-400 mb-6 leading-relaxed">Detailed exterior foam wash, rim cleaning, tire shine, and express interior vacuum.</p>
                    <div class="flex items-center justify-between mt-auto">
                        <span class="text-indigo-400 font-bold">Rp 50.000+</span>
                        <a href="#book" class="w-8 h-8 rounded-full border border-slate-700 flex items-center justify-center group-hover:bg-white group-hover:text-black transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="group relative bg-slate-900 rounded-3xl p-8 border border-slate-800 hover:border-indigo-500/50 transition-all duration-300 hover:-translate-y-2 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-indigo-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-3 py-1 rounded-bl-xl">POPULAR</div>
                    <div class="w-14 h-14 bg-slate-800 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-indigo-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Full Detailing</h3>
                    <p class="text-slate-400 mb-6 leading-relaxed">Deep interior cleaning, leather stitching care, engine bay detailing, and hand polish.</p>
                    <div class="flex items-center justify-between mt-auto">
                        <span class="text-indigo-400 font-bold">Rp 350.000+</span>
                        <a href="#book" class="w-8 h-8 rounded-full border border-slate-700 flex items-center justify-center group-hover:bg-white group-hover:text-black transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="group relative bg-slate-900 rounded-3xl p-8 border border-slate-800 hover:border-indigo-500/50 transition-all duration-300 hover:-translate-y-2 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-indigo-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="w-14 h-14 bg-slate-800 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-indigo-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Nano Coating</h3>
                    <p class="text-slate-400 mb-6 leading-relaxed">Multi-layer ceramic protection for extreme hydrophobicity and deep gloss shine.</p>
                    <div class="flex items-center justify-between mt-auto">
                        <span class="text-indigo-400 font-bold">Rp 1.500.000+</span>
                        <a href="#book" class="w-8 h-8 rounded-full border border-slate-700 flex items-center justify-center group-hover:bg-white group-hover:text-black transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section id="book" class="py-24 relative overflow-hidden">
         <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[1000px] h-[1000px] bg-indigo-900/10 rounded-full blur-3xl opacity-50 pointer-events-none"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="glass rounded-3xl p-8 md:p-12 border border-slate-700 shadow-2xl">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready for a Shine?</h2>
                        <p class="text-slate-400 mb-8">Book your appointment easily. We'll bring the equipment, water, and electricity if needed.</p>
                        
                        <!-- Trust Indicators -->
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center flex-shrink-0">
                                    <span class="text-indigo-400 font-bold">1</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white">Select Service</h4>
                                    <p class="text-sm text-slate-400">Choose the package that fits your needs.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center flex-shrink-0">
                                    <span class="text-indigo-400 font-bold">2</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white">Pick a Time</h4>
                                    <p class="text-sm text-slate-400">Real-time availability checking.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center flex-shrink-0">
                                    <span class="text-indigo-400 font-bold">3</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white">Relax</h4>
                                    <p class="text-sm text-slate-400">We arrive at your location and handle the rest.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Price Preview for Desktop -->
                        <div class="hidden lg:block mt-12 p-6 rounded-2xl bg-slate-800/50 border border-slate-700/50 text-center">
                            <p class="text-slate-400 text-sm mb-1">Estimated Total</p>
                            <p class="text-4xl font-bold text-white tracking-tight">Rp <span id="price-display-lg">0</span></p>
                            <p class="text-xs text-slate-500 mt-2">*Final price may vary based on condition</p>
                        </div>
                    </div>

                    <!-- Form -->
                    <div class="bg-slate-900/50 p-6 rounded-2xl border border-slate-800">
                        <form action="/book" method="POST" class="space-y-5">
                            @csrf
                            
                            @if(session('success'))
                                <div class="bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 px-4 py-3 rounded-xl flex items-center gap-3">
                                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    {{ session('success') }}
                                </div>
                            @endif
        
                            @if($errors->any())
                                <div class="bg-red-500/10 border border-red-500/30 text-red-400 px-4 py-3 rounded-xl">
                                    <ul class="list-disc list-inside text-sm">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="space-y-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="space-y-1.5">
                                        <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Service</label>
                                        <select name="service_type" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all appearance-none cursor-pointer hover:bg-slate-750">
                                            <option value="wash">Premium Wash</option>
                                            <option value="detail">Full Detailing</option>
                                            <option value="coating">Nano Coating</option>
                                        </select>
                                    </div>
                                    <div class="space-y-1.5">
                                        <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Car Size</label>
                                        <select name="car_type" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all appearance-none cursor-pointer hover:bg-slate-750">
                                            <option value="small">Small</option>
                                            <option value="medium">Medium</option>
                                            <option value="large">Large</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    <div class="space-y-1.5">
                                        <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Date</label>
                                        <input type="date" name="booking_date" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all" required>
                                    </div>
                                    <div class="space-y-1.5">
                                        <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Time</label>
                                        <input type="time" name="booking_time" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all" required>
                                    </div>
                                </div>

                                <div class="space-y-1.5">
                                    <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Your Name</label>
                                    <input type="text" name="customer_name" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all placeholder-slate-600" placeholder="John Doe" required>
                                </div>

                                <div class="space-y-1.5">
                                    <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider">WhatsApp Number</label>
                                    <input type="tel" name="customer_phone" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all placeholder-slate-600" placeholder="0812..." required>
                                </div>

                                <div class="space-y-1.5">
                                    <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Full Address</label>
                                    <textarea name="customer_address" rows="2" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all placeholder-slate-600" placeholder="Street, House No, District..." required></textarea>
                                </div>
                            </div>

                            <!-- Mobile Price Display -->
                            <div class="lg:hidden flex justify-between items-center py-2 border-t border-slate-800">
                                <span class="text-slate-400 text-sm">Estimated Total</span>
                                <span class="text-xl font-bold text-white">Rp <span id="price-display-sm">0</span></span>
                            </div>

                            <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-500 hover:to-indigo-600 text-white font-bold py-4 rounded-xl transition-all shadow-lg shadow-indigo-600/25 active:scale-95">
                                Confirm Booking
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-slate-800/50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-2">
                 <img src="/logo.png" alt="CleanWheels" class="w-8 h-8 rounded-lg">
                <span class="text-xl font-bold tracking-tight text-white">CleanWheels</span>
            </div>
            <p class="text-slate-500 text-sm">&copy; 2025 CleanWheels Home Service. All rights reserved.</p>
        </div>
    </footer>

    <script>
        const services = {
            'wash': { 'small': 50000, 'medium': 60000, 'large': 70000 },
            'detail': { 'small': 350000, 'medium': 450000, 'large': 550000 },
            'coating': { 'small': 1500000, 'medium': 2000000, 'large': 2500000 }
        };

        const serviceSelect = document.querySelector('select[name="service_type"]');
        const carSelect = document.querySelector('select[name="car_type"]');
        const priceDisplayLg = document.getElementById('price-display-lg');
        const priceDisplaySm = document.getElementById('price-display-sm');

        function updatePrice() {
            const service = serviceSelect.value;
            const car = carSelect.value;
            const price = services[service][car];
            const formatted = new Intl.NumberFormat('id-ID').format(price);
            
            if(priceDisplayLg) priceDisplayLg.textContent = formatted;
            if(priceDisplaySm) priceDisplaySm.textContent = formatted;
        }

        serviceSelect.addEventListener('change', updatePrice);
        carSelect.addEventListener('change', updatePrice);
        
        updatePrice();
    </script>
</body>
</html>