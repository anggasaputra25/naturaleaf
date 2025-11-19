@extends('layouts.app')

@section('title', 'Home - Naturaleaf')

@section('content')

<!-- Navbar -->
@include('components.navbar')

<!-- Hero Section -->
<section class="relative bg-white min-h-screen py-5">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="text-center lg:text-left space-y-8">
                <!-- Badge -->
                <div class="inline-flex items-center space-x-2 bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <span>Trusted by 10,000+ Plant Lovers</span>
                </div>

                <!-- Main Heading -->
                <div class="space-y-4">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        Bring Nature
                        <span class="text-green-600 block">Into Your Home</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto lg:mx-0">
                        Discover our curated collection of beautiful, healthy plants delivered right to your doorstep. Transform your space into a green paradise.
                    </p>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#" class="relative inline-flex items-center justify-center px-8 py-4 bg-green-600 text-white font-semibold rounded-lg overflow-hidden">
                        <span class="relative z-10 flex items-center gap-2">
                            Shop Plants
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="inline-flex items-center justify-center px-8 py-4 bg-white text-green-600 font-semibold rounded-lg border-2 border-green-600 hover:bg-green-600 hover:text-white duration-100">
                        <span class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Watch Video
                        </span>
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-gray-200">
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-green-600">500+</div>
                        <div class="text-sm text-gray-600 mt-1">Plant Varieties</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-green-600">10K+</div>
                        <div class="text-sm text-gray-600 mt-1">Happy Customers</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-green-600">4.9★</div>
                        <div class="text-sm text-gray-600 mt-1">Customer Rating</div>
                    </div>
                </div>
            </div>

            <!-- Main Image -->
            <div class="relative z-10 overflow-hidden">
                <div class="aspect-square">
                    <img 
                        src="{{ asset('images/bg-plant.png') }}" 
                        alt="Beautiful indoor plants" 
                        class="w-full h-full object-cover"
                    >
                </div>
                
                <!-- Floating Card 1 - Free Delivery -->
                <div class="absolute top-8 left-4 bg-white rounded-2xl shadow-xl p-4 flex items-center gap-3 transform hover:scale-110 transition-transform duration-300">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900">Free Delivery</div>
                        <div class="text-sm text-gray-600">On orders $50+</div>
                    </div>
                </div>

                <!-- Floating Card 2 - 30 Day Guarantee -->
                <div class="absolute bottom-8 right-4 bg-white rounded-2xl shadow-xl p-4 flex items-center gap-3 transform hover:scale-110 transition-transform duration-300">
                    <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900">30-Day Guarantee</div>
                        <div class="text-sm text-gray-600">100% Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="py-20 bg-white" id="about">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-semibold mb-4">
                About Naturaleaf
            </span>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Growing Together With Nature
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We're passionate about bringing the beauty and benefits of plants into every home, one leaf at a time.
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
            <!-- Left - Image Collage -->
            <div class="relative">
                <div class="grid grid-cols-2 gap-4">
                    <!-- Large Image -->
                    <div class="col-span-2 relative overflow-hidden rounded-2xl shadow-sm group">
                        <img 
                            src="{{ asset('images/about-1.jpg') }}"
                            alt="Beautiful plant collection" 
                            class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110"
                        >
                    </div>
                    <!-- Small Images -->
                    <div class="relative overflow-hidden rounded-2xl shadow-sm group">
                        <img 
                            src="{{ asset('images/about-2.jpg') }}"
                            alt="Indoor plants" 
                            class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110"
                        >
                    </div>
                    <div class="relative overflow-hidden rounded-2xl shadow-sm group">
                        <img 
                            src="{{ asset('images/about-3.jpg') }}"
                            alt="Plant care" 
                            class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110"
                        >
                    </div>
                </div>

                <!-- Decorative Element -->
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-green-500 rounded-full opacity-20 blur-3xl"></div>
                <div class="absolute -top-6 -left-6 w-32 h-32 bg-emerald-500 rounded-full opacity-20 blur-3xl"></div>
            </div>

            <!-- Right - Content -->
            <div class="space-y-6">
                <h3 class="text-3xl font-bold text-gray-900">
                    Our Mission: Making Plant Care Easy & Accessible
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Founded in 2020, Naturaleaf began with a simple belief: everyone deserves to experience the joy and wellness benefits of living with plants. We've grown from a small local nursery to a trusted online destination for plant lovers nationwide.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Our expert team carefully selects and nurtures each plant, ensuring they arrive at your doorstep healthy, vibrant, and ready to thrive. We're not just selling plants—we're building a community of green thumbs and first-time plant parents alike.
                </p>

                <!-- Features List -->
                <div class="space-y-4 pt-6">
                    <div class="flex items-start gap-4">
                        <div class="shrink-0 w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Expert Plant Selection</h4>
                            <p class="text-gray-600">Hand-picked varieties perfect for every skill level and space</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="shrink-0 w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Care Guides Included</h4>
                            <p class="text-gray-600">Detailed instructions to help your plants flourish</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="shrink-0 w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Lifetime Support</h4>
                            <p class="text-gray-600">Our plant experts are always here to help you succeed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Values / Stats Grid -->
        <div class="grid md:grid-cols-4 gap-8">
            <!-- Value Card 1 -->
            <div class="text-center p-8 rounded-2xl border border-green-200 hover:bg-green-500 transition-all duration-300 group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-2xl shadow-md mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2 group-hover:text-white">500+</h3>
                <p class="text-gray-600 font-medium group-hover:text-gray-300">Plant Varieties</p>
            </div>

            <!-- Value Card 2 -->
            <div class="text-center p-8 rounded-2xl border border-green-200 hover:bg-green-500 transition-all duration-300 group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-2xl shadow-md mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2 group-hover:text-white">10,000+</h3>
                <p class="text-gray-600 font-medium group-hover:text-gray-300">Happy Customers</p>
            </div>

            <!-- Value Card 3 -->
            <div class="text-center p-8 rounded-2xl border border-green-200 hover:bg-green-500 transition-all duration-300 group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-2xl shadow-md mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2 group-hover:text-white">4.9/5</h3>
                <p class="text-gray-600 font-medium group-hover:text-gray-300">Customer Rating</p>
            </div>

            <!-- Value Card 4 -->
            <div class="text-center p-8 rounded-2xl border border-green-200 hover:bg-green-500 transition-all duration-300 group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-2xl shadow-md mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2 group-hover:text-white">5 Years</h3>
                <p class="text-gray-600 font-medium group-hover:text-gray-300">In Business</p>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section class="py-20 bg-green-50" id="reviews">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-semibold mb-4">
                Customer Reviews
            </span>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                What Our Plant Parents Say
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Join thousands of happy customers who've transformed their spaces with our plants
            </p>
            
            <!-- Overall Rating -->
            <div class="flex items-center justify-center gap-2 mt-6">
                <div class="flex gap-1">
                    <svg class="w-8 h-8 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-8 h-8 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-8 h-8 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-8 h-8 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-8 h-8 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <span class="text-3xl font-bold text-gray-900">4.9</span>
                <span class="text-gray-600">out of 5 (2,847 reviews)</span>
            </div>
        </div>

        <!-- Reviews Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Review Card 1 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <!-- Stars -->
                <div class="flex gap-1 mb-4">
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                
                <p class="text-gray-700 mb-6 leading-relaxed">
                    "Fast shipping and excellent packaging! My fiddle leaf fig arrived safe and sound. The plant is even bigger than I expected. Customer service is top-notch too!"
                </p>
                
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <span class="text-green-700 font-bold text-lg">DW</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">David Wilson</h4>
                        <p class="text-sm text-gray-500">Verified Buyer</p>
                    </div>
                </div>
            </div>

            <!-- Review Card 5 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="flex gap-1 mb-4">
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                
                <p class="text-gray-700 mb-6 leading-relaxed">
                    "I bought a snake plant for my office, and it's been perfect! Low maintenance and looks amazing. My colleagues keep asking where I got it from. Thank you Naturaleaf!"
                </p>
                
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <span class="text-green-700 font-bold text-lg">LM</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Lisa Martinez</h4>
                        <p class="text-sm text-gray-500">Verified Buyer</p>
                    </div>
                </div>
            </div>

            <!-- Review Card 6 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="flex gap-1 mb-4">
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                
                <p class="text-gray-700 mb-6 leading-relaxed">
                    "Great experience from start to finish! The website is easy to navigate, checkout was smooth, and my pothos arrived quickly. It's growing beautifully on my shelf!"
                </p>
                
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <span class="text-green-700 font-bold text-lg">JT</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">James Taylor</h4>
                        <p class="text-sm text-gray-500">Verified Buyer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-semibold mb-4">
                Our Collection
            </span>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Featured Plants
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Discover our handpicked selection of beautiful, healthy plants perfect for your home
            </p>
        </div>

        <!-- Category Filters -->
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button class="px-6 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition-all duration-300 shadow-md">
                All Plants
            </button>
            <button class="px-6 py-3 bg-white text-gray-700 font-semibold rounded-lg border-2 border-gray-200 hover:border-green-600 hover:text-green-600 transition-all duration-300">
                Indoor
            </button>
            <button class="px-6 py-3 bg-white text-gray-700 font-semibold rounded-lg border-2 border-gray-200 hover:border-green-600 hover:text-green-600 transition-all duration-300">
                Outdoor
            </button>
            <button class="px-6 py-3 bg-white text-gray-700 font-semibold rounded-lg border-2 border-gray-200 hover:border-green-600 hover:text-green-600 transition-all duration-300">
                Succulents
            </button>
            <button class="px-6 py-3 bg-white text-gray-700 font-semibold rounded-lg border-2 border-gray-200 hover:border-green-600 hover:text-green-600 transition-all duration-300">
                Cactus
            </button>
        </div>

        <!-- Products Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- Product Card 1 -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <!-- Product Image -->
                <div class="relative overflow-hidden aspect-square bg-gray-100">
                    <img 
                        src="https://images.unsplash.com/photo-1617791160505-6f00504e3519?w=500&h=500&fit=crop" 
                        alt="Monstera Deliciosa" 
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    >
                    <!-- Badge -->
                    <div class="absolute top-4 left-4 px-3 py-1 bg-green-600 text-white text-xs font-semibold rounded-full">
                        Bestseller
                    </div>
                    <!-- Quick Actions -->
                    <div class="absolute top-4 right-4 flex flex-col gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <button class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-green-600 hover:text-white transition-colors shadow-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </button>
                        <button class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-green-600 hover:text-white transition-colors shadow-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Product Info -->
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-xs px-2 py-1 bg-green-50 text-green-700 rounded-full font-medium">Indoor</span>
                        <span class="text-xs px-2 py-1 bg-yellow-50 text-yellow-700 rounded-full font-medium">Easy Care</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors">
                        Monstera Deliciosa
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        Beautiful tropical plant with split leaves, perfect for bright indirect light
                    </p>
                    
                    <!-- Rating -->
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex gap-0.5">
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-600">(86 reviews)</span>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-green-600">$52</span>
                            <span class="text-sm text-gray-500 line-through ml-2">$70</span>
                        </div>
                        <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors shadow-md hover:shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative overflow-hidden aspect-square bg-gray-100">
                    <img 
                        src="https://images.unsplash.com/photo-1520412099551-62b6bafeb5bb?w=500&h=500&fit=crop" 
                        alt="Pothos Plant" 
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    >
                    <div class="absolute top-4 right-4 flex flex-col gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <button class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-green-600 hover:text-white transition-colors shadow-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </button>
                        <button class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-green-600 hover:text-white transition-colors shadow-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-xs px-2 py-1 bg-green-50 text-green-700 rounded-full font-medium">Indoor</span>
                        <span class="text-xs px-2 py-1 bg-yellow-50 text-yellow-700 rounded-full font-medium">Easy Care</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors">
                        Golden Pothos
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        Trailing vine plant with heart-shaped leaves, air-purifying qualities
                    </p>
                    
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex gap-0.5">
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <span class="text-sm text-gray-600">(152 reviews)</span>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-green-600">$28</span>
                        </div>
                        <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors shadow-md hover:shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- View All Button -->
        <div class="text-center">
            <a href="#" class="mx-auto px-4 py-2 border border-green-600 text-green-600 font-medium rounded-lg hover:bg-green-600 hover:text-white duration-100">
                Explore More
            </a>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-semibold mb-4">
                Plant Care Tips
            </span>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Latest From Our Blog
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Expert advice, care guides, and inspiration to help your plants thrive
            </p>
        </div>

        <!-- Featured Blog Post -->
        <div class="mb-16">
            <div class="grid lg:grid-cols-2 gap-8 bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300">
                <!-- Image -->
                <div class="relative overflow-hidden group">
                    <img 
                        src="https://images.unsplash.com/photo-1466781783364-36c955e42a7f?w=800&h=600&fit=crop" 
                        alt="Featured blog post" 
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    >
                    <div class="absolute top-6 left-6 px-4 py-2 bg-green-600 text-white text-sm font-semibold rounded-lg">
                        Featured
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-8 lg:p-12 flex flex-col justify-center">
                    <!-- Category & Date -->
                    <div class="flex items-center gap-4 mb-4">
                        <span class="px-3 py-1 bg-green-50 text-green-700 text-sm font-medium rounded-full">
                            Care Guide
                        </span>
                        <span class="text-gray-500 text-sm flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            November 15, 2024
                        </span>
                    </div>
                    
                    <!-- Title -->
                    <h3 class="text-3xl font-bold text-gray-900 mb-4 hover:text-green-600 transition-colors cursor-pointer">
                        The Ultimate Guide to Indoor Plant Care for Beginners
                    </h3>
                    
                    <!-- Excerpt -->
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Starting your plant parent journey? Learn the essential tips and tricks to keep your indoor plants healthy and thriving. From watering schedules to light requirements, we cover everything you need to know.
                    </p>
                    
                    <!-- Meta & CTA -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                <span class="text-green-700 font-bold text-sm">JD</span>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900 text-sm">Jane Doe</p>
                                <p class="text-gray-500 text-xs">Plant Expert</p>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center gap-2 text-green-600 font-semibold hover:gap-3 transition-all">
                            Read More
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Blog Card 1 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group hover:-translate-y-2">
                <!-- Image -->
                <div class="relative overflow-hidden aspect-4/3">
                    <img 
                        src="https://images.unsplash.com/photo-1463320726281-696a485928c7?w=600&h=450&fit=crop" 
                        alt="Blog post" 
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    >
                </div>
                
                <!-- Content -->
                <div class="p-6">
                    <!-- Category & Date -->
                    <div class="flex items-center justify-between mb-3">
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-medium rounded-full">
                            Plant Tips
                        </span>
                        <span class="text-gray-500 text-xs flex items-center gap-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            5 min read
                        </span>
                    </div>
                    
                    <!-- Title -->
                    <a href="#" class="hover:underline text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors line-clamp-2">
                        10 Low-Maintenance Plants Perfect for Busy People
                    </a>
                    
                    <!-- Excerpt -->
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                        Don't have a green thumb? These hardy plants require minimal care and are perfect for beginners or those with hectic schedules.
                    </p>
                    
                    <!-- Footer -->
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                <span class="text-purple-700 font-bold text-xs">MS</span>
                            </div>
                            <span class="text-sm text-gray-700 font-medium">Mike Smith</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Blog Card 2 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group hover:-translate-y-2">
                <div class="relative overflow-hidden aspect-4/3">
                    <img 
                        src="https://images.unsplash.com/photo-1459411552884-841db9b3cc2a?w=600&h=450&fit=crop" 
                        alt="Blog post" 
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    >
                </div>
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-medium rounded-full">
                            Troubleshooting
                        </span>
                        <span class="text-gray-500 text-xs flex items-center gap-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            7 min read
                        </span>
                    </div>
                    
                    <a href="#" class="hover:underline text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors line-clamp-2">
                        Why Are My Plant Leaves Turning Yellow? Common Causes
                    </a>
                    
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                        Yellowing leaves can indicate various issues. Learn how to diagnose and fix the most common problems affecting your plants.
                    </p>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center">
                                <span class="text-pink-700 font-bold text-xs">EJ</span>
                            </div>
                            <span class="text-sm text-gray-700 font-medium">Emma Johnson</span>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <!-- View All Button -->
        <div class="text-center">
            <a href="#" class="mx-auto px-4 py-2 border border-green-600 text-green-600 font-medium rounded-lg hover:bg-green-600 hover:text-white duration-100">
                Explore More
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
@include('components.footer')

@endsection