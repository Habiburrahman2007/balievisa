@extends('layouts.app')

@section('title', __('site.nav_arrival') . ' - ' . config('app.name'))

@section('content')
    <div class="arrival-card-page overflow-x-hidden">

        <!-- Hero Section -->
        <section class="relative min-h-[90vh] flex items-center pt-24 pb-20 px-6 sm:px-12 text-center">
            <!-- Background with Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('img/arrival-card/hero_bg.png') }}" alt="Airport" class="w-full h-full object-cover">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-[var(--color-navy)]/90 via-[var(--color-navy)]/70 to-[var(--color-navy)]/40">
                </div>
            </div>

            <div class="container mx-auto relative z-10 px-6">
                <div class="max-w-3xl mx-auto flex flex-col items-center">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 text-white font-bold text-xs tracking-wider mb-8 uppercase border border-white/20 shadow-sm backdrop-blur-md">
                        <i class="fa-solid fa-passport text-[var(--color-gold)]"></i>
                        {{ __('site.arrival_hero_badge') }}
                    </div>

                    <!-- Title -->
                    <h1 class="text-5xl sm:text-7xl font-black text-white leading-[1.1] mb-6 drop-shadow-lg">
                        {!! __('site.arrival_hero_title') !!}
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-xl text-white/80 font-medium mb-10 leading-relaxed max-w-2xl">
                        {{ __('site.arrival_hero_subtitle') }}
                    </p>

                    <!-- Features -->
                    <div class="flex flex-wrap justify-center gap-8 mb-12">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-[var(--color-gold)] flex items-center justify-center">
                                <i class="fa-solid fa-bolt text-[var(--color-navy)] text-xs"></i>
                            </div>
                            <span
                                class="text-white font-bold uppercase tracking-wide text-xs">{{ __('site.arrival_hero_feat_1') }}</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-[var(--color-gold)] flex items-center justify-center">
                                <i class="fa-solid fa-circle-question text-[var(--color-navy)] text-xs"></i>
                            </div>
                            <span
                                class="text-white font-bold uppercase tracking-wide text-xs">{{ __('site.arrival_hero_feat_2') }}</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-[var(--color-gold)] flex items-center justify-center">
                                <i class="fa-solid fa-check-double text-[var(--color-navy)] text-xs"></i>
                            </div>
                            <span
                                class="text-white font-bold uppercase tracking-wide text-xs">{{ __('site.arrival_hero_feat_3') }}</span>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="flex flex-col items-center gap-6">
                        <a href="https://wa.me/62895330440544?text=Hi%2C%20I%E2%80%99m%20traveling%20to%20Bali%20soon%20and%20need%20help%20with%20my%20Arrival%20Card.%0ACould%20you%20assist%20me%3F"
                            target="_blank"
                            class="w-full sm:w-auto px-12 py-5 bg-[var(--color-gold)] text-[var(--color-navy)] font-black rounded-xl shadow-2xl shadow-[var(--color-gold)]/20 hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3 group">
                            <i class="fa-brands fa-whatsapp text-xl"></i>
                            {{ __('site.arrival_hero_cta') }}
                        </a>
                        <div class="flex flex-col items-center gap-3">
                            <div class="flex -space-x-2">
                                <img src="https://i.pravatar.cc/100?u=1"
                                    class="w-10 h-10 rounded-full border-2 border-[var(--color-navy)] shadow-sm" alt="User">
                                <img src="https://i.pravatar.cc/100?u=2"
                                    class="w-10 h-10 rounded-full border-2 border-[var(--color-navy)] shadow-sm" alt="User">
                                <img src="https://i.pravatar.cc/100?u=3"
                                    class="w-10 h-10 rounded-full border-2 border-[var(--color-navy)] shadow-sm" alt="User">
                            </div>
                            <div class="text-sm">
                                <div class="font-bold text-white/60 leading-none italic uppercase tracking-tighter">
                                    {{ __('site.arrival_hero_trusted') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Information Grid Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6 max-w-5xl">
                <div
                    class="bg-slate-50 border border-slate-200 rounded-[2.5rem] p-8 sm:p-12 overflow-hidden shadow-sm relative">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                        <div class="lg:col-span-1 hidden lg:block">
                            <div
                                class="w-full aspect-square bg-white rounded-3xl shadow-xl flex items-center justify-center border border-slate-100 group hover:rotate-6 transition-transform duration-500">
                                <i
                                    class="fa-solid fa-passport text-6xl text-[var(--color-navy)] group-hover:scale-110 transition-transform"></i>
                            </div>
                        </div>
                        <div class="lg:col-span-6">
                            <h2 class="text-3xl font-black text-[var(--color-navy)] mb-6 leading-tight">
                                {{ __('site.arrival_info_title') }}
                            </h2>
                            <p class="text-slate-600 text-lg leading-relaxed mb-10">
                                {{ __('site.arrival_info_desc') }}
                            </p>

                            <div
                                class="flex gap-4 p-5 bg-blue-50/50 border border-blue-100 rounded-2xl items-start group hover:bg-blue-50 transition-colors">
                                <div class="p-2.5 bg-blue-100 rounded-lg text-blue-600">
                                    <i class="fa-solid fa-circle-info text-xl"></i>
                                </div>
                                <p class="text-blue-800 font-semibold leading-relaxed">
                                    {{ __('site.arrival_info_note') }}
                                </p>
                            </div>
                        </div>
                        <div class="lg:col-span-5 relative group">
                            <div class="aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl relative">
                                <img src="{{ asset('img/arrival-card/temple.png') }}" alt="Temple"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-navy)]/30 to-transparent">
                                </div>
                            </div>
                            <!-- Floating element -->
                            <div
                                class="absolute -bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-xl border border-slate-100 hidden sm:flex items-center gap-3 animate-bounce-slow">
                                <div
                                    class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <span class="font-bold text-[var(--color-navy)] text-sm">Official Form Verified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pros/Cons & Why Choose Us Section -->
        <section class="py-20 bg-slate-50">
            <div class="container mx-auto px-6 max-w-5xl">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                    <!-- Comparison Card -->
                    <div
                        class="bg-white rounded-[2.5rem] border border-slate-200 overflow-hidden shadow-xl flex flex-col h-full">
                        <div class="p-10 flex-1">
                            <h3 class="text-2xl font-black text-[var(--color-navy)] mb-10 tracking-tight">
                                {{ __('site.arrival_pros_title') }}</h3>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-12">
                                <!-- Pros -->
                                <div class="space-y-6">
                                    <div class="flex items-center gap-3 bg-green-50/50 p-2 rounded-lg -ml-2">
                                        <div
                                            class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center text-white text-[10px]">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <span
                                            class="text-xs font-black uppercase text-green-700 tracking-widest">PROS</span>
                                    </div>
                                    <ul class="space-y-4">
                                        <li class="flex items-start gap-4">
                                            <i class="fa-solid fa-check text-green-500 mt-1"></i>
                                            <span class="text-slate-700 font-medium">{{ __('site.arrival_pros_1') }}</span>
                                        </li>
                                        <li class="flex items-start gap-4">
                                            <i class="fa-solid fa-check text-green-500 mt-1"></i>
                                            <span class="text-slate-700 font-medium">{{ __('site.arrival_pros_2') }}</span>
                                        </li>
                                        <li class="flex items-start gap-4">
                                            <i class="fa-solid fa-check text-green-500 mt-1"></i>
                                            <span class="text-slate-700 font-medium">{{ __('site.arrival_pros_3') }}</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Cons -->
                                <div class="space-y-6">
                                    <div class="flex items-center gap-3 bg-red-50/50 p-2 rounded-lg -ml-2">
                                        <div
                                            class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center text-white text-[10px]">
                                            <i class="fa-solid fa-xmark font-bold"></i>
                                        </div>
                                        <span
                                            class="text-xs font-black uppercase text-red-700 tracking-widest">{{ __('site.arrival_cons_title') }}</span>
                                    </div>
                                    <ul class="space-y-4">
                                        <li class="flex items-start gap-4">
                                            <i class="fa-solid fa-check text-red-500 mt-1 scale-x-[-1] opacity-50"></i>
                                            <span class="text-slate-700 font-medium">{{ __('site.arrival_cons_1') }}</span>
                                        </li>
                                        <li class="flex items-start gap-4">
                                            <i class="fa-solid fa-check text-red-500 mt-1 scale-x-[-1] opacity-50"></i>
                                            <span class="text-slate-700 font-medium">{{ __('site.arrival_cons_2') }}</span>
                                        </li>
                                        <li class="flex items-start gap-4">
                                            <i class="fa-solid fa-check text-red-500 mt-1 scale-x-[-1] opacity-50"></i>
                                            <span class="text-slate-700 font-medium">{{ __('site.arrival_cons_3') }}</span>
                                        </li>
                                        <li class="flex items-start gap-4">
                                            <i class="fa-solid fa-check text-red-500 mt-1 scale-x-[-1] opacity-50"></i>
                                            <span class="text-slate-700 font-medium">{{ __('site.arrival_cons_4') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=800"
                                class="w-full h-48 object-cover opacity-60 grayscale hover:grayscale-0 transition-all duration-700"
                                alt="Frustrated traveler">
                        </div>
                    </div>

                    <!-- Why Us Card -->
                    <div
                        class="bg-white rounded-[2.5rem] border border-[var(--color-gold)]/30 overflow-hidden shadow-2xl relative flex flex-col h-full group">
                        <div
                            class="absolute top-8 right-8 text-[var(--color-gold)] opacity-20 group-hover:opacity-40 transition-opacity">
                            <i class="fa-solid fa-shield-halved text-8xl"></i>
                        </div>
                        <div class="p-10 flex-1 relative z-10">
                            <div class="flex items-center gap-4 mb-8">
                                <div
                                    class="w-12 h-12 bg-[var(--color-navy)] rounded-2xl flex items-center justify-center text-white shadow-lg shadow-[var(--color-navy)]/20">
                                    <i class="fa-solid fa-user-check text-xl"></i>
                                </div>
                                <h3 class="text-2xl font-black text-[var(--color-navy)] tracking-tight">
                                    {{ __('site.arrival_why_title') }}</h3>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 items-center">
                                <ul class="space-y-5">
                                    <li class="flex items-start gap-3">
                                        <div
                                            class="w-5 h-5 bg-[var(--color-navy)] rounded-full flex items-center justify-center text-white text-[8px] mt-1">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <span
                                            class="text-slate-800 font-bold text-sm leading-tight">{{ __('site.arrival_why_1') }}</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <div
                                            class="w-5 h-5 bg-[var(--color-navy)] rounded-full flex items-center justify-center text-white text-[8px] mt-1">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <span
                                            class="text-slate-800 font-bold text-sm leading-tight">{{ __('site.arrival_why_2') }}</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <div
                                            class="w-5 h-5 bg-[var(--color-navy)] rounded-full flex items-center justify-center text-white text-[8px] mt-1">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <span
                                            class="text-slate-800 font-bold text-sm leading-tight">{{ __('site.arrival_why_3') }}</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <div
                                            class="w-5 h-5 bg-[var(--color-navy)] rounded-full flex items-center justify-center text-white text-[8px] mt-1">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <span
                                            class="text-slate-800 font-bold text-sm leading-tight">{{ __('site.arrival_why_4') }}</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <div
                                            class="w-5 h-5 bg-[var(--color-navy)] rounded-full flex items-center justify-center text-white text-[8px] mt-1">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <span
                                            class="text-slate-800 font-bold text-sm leading-tight">{{ __('site.arrival_why_5') }}</span>
                                    </li>
                                </ul>

                                <div class="relative group">
                                    <div
                                        class="aspect-square rounded-full overflow-hidden border-8 border-slate-50 shadow-inner group-hover:scale-105 transition-transform duration-500">
                                        <img src="{{ asset('img/arrival-card/support.png') }}" alt="Support"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <div
                                        class="absolute -bottom-4 -right-2 p-4 bg-[var(--color-navy)] text-white rounded-2xl shadow-xl flex items-center gap-3 animate-pulse">
                                        <i class="fa-solid fa-comment-dots"></i>
                                        <span class="text-xs font-bold">Always Online</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quote banner -->
                        <div class="p-6 bg-[var(--color-navy)] flex items-center gap-4">
                            <div class="p-2 bg-white/20 rounded-full text-white">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <p class="text-white text-sm font-bold opacity-90 italic">
                                {{ __('site.arrival_why_quote') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Timer Section -->
        <section class="py-12 bg-white px-6">
            <div class="container mx-auto max-w-5xl">
                <div class="relative bg-[var(--color-navy)] rounded-[2rem] overflow-hidden p-8 sm:p-12 shadow-2xl">
                    <!-- Background planes -->
                    <div class="absolute inset-0 z-0 opacity-20 scale-x-[-1]">
                        <img src="{{ asset('img/arrival-card/plane.png') }}" alt="Plane"
                            class="w-full h-full object-cover grayscale invert">
                    </div>

                    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                        <div class="lg:col-span-1 hidden lg:block">
                            <div
                                class="w-16 h-16 rounded-full border-2 border-dashed border-white flex items-center justify-center bg-white/5 shadow-xl">
                                <i class="fa-solid fa-hourglass-half text-white text-3xl animate-pulse"></i>
                            </div>
                        </div>
                        <div class="lg:col-span-5">
                            <h2 class="text-3xl font-black text-white leading-tight mb-4 tracking-tight">
                                {!! __('site.arrival_timer_slots') !!}
                            </h2>
                            <p class="text-white/60 text-base leading-relaxed mb-6">
                                {{ __('site.arrival_timer_desc') }}
                            </p>
                            <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl border border-white/10 w-fit">
                                <i class="fa-solid fa-star text-[var(--color-gold)] animate-pulse"></i>
                                <span
                                    class="text-white font-bold text-xs uppercase tracking-widest">{{ __('site.arrival_timer_note') }}</span>
                            </div>
                        </div>
                        <div class="lg:col-span-6">
                            <div class="flex flex-wrap justify-center lg:justify-end gap-4 sm:gap-6">
                                <div class="flex flex-col items-center gap-2">
                                    <div class="w-20 h-20 sm:w-24 sm:h-24 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center border border-white/20 shadow-xl transition-all hover:bg-white/15"
                                        id="hours-box">
                                        <span class="text-3xl sm:text-4xl font-black text-white tabular-nums countdown-num"
                                            id="hours">00</span>
                                    </div>
                                    <span
                                        class="text-[10px] font-black text-white/40 uppercase tracking-[0.2em]">HOURS</span>
                                </div>
                                <div class="flex flex-col items-center gap-2">
                                    <div class="w-20 h-20 sm:w-24 sm:h-24 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center border border-white/20 shadow-xl transition-all hover:bg-white/15"
                                        id="minutes-box">
                                        <span class="text-3xl sm:text-4xl font-black text-white tabular-nums countdown-num"
                                            id="minutes">00</span>
                                    </div>
                                    <span
                                        class="text-[10px] font-black text-white/40 uppercase tracking-[0.2em]">MINUTES</span>
                                </div>
                                <div class="flex flex-col items-center gap-2">
                                    <div class="w-20 h-20 sm:w-24 sm:h-24 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center border border-white/20 shadow-xl border-b-4 border-b-[var(--color-gold)]"
                                        id="seconds-box">
                                        <span
                                            class="text-3xl sm:text-4xl font-black text-[var(--color-gold)] tabular-nums countdown-num"
                                            id="seconds">00</span>
                                    </div>
                                    <span
                                        class="text-[10px] font-black text-white/40 uppercase tracking-[0.2em]">SECONDS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing & How It Works -->
        <section class="py-20 bg-slate-50 overflow-hidden">
            <div class="container mx-auto px-6 max-w-5xl">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-stretch">
                    <!-- Pricing card -->
                    <div class="lg:col-span-5">
                        <div
                            class="bg-white rounded-[2.5rem] border border-slate-200 overflow-hidden shadow-[0_32px_64px_-16px_rgba(0,0,0,0.1)] h-full flex flex-col relative">
                            <div
                                class="absolute -top-12 -right-12 w-48 h-48 bg-[var(--color-gold)]/5 rounded-full blur-3xl">
                            </div>

                            <div class="p-10 flex-1 relative z-10">
                                <div
                                    class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 font-black text-[10px] uppercase tracking-[0.15em] mb-8 border border-blue-100">
                                    {{ __('site.arrival_price_badge') }}
                                </div>

                                <div class="flex items-baseline gap-2 mb-10">
                                    <span
                                        class="text-slate-600 font-black text-2xl mb-4">{{ __('site.arrival_price_title') }}</span>
                                    <span
                                        class="text-[6rem] leading-none font-black text-[var(--color-navy)] tracking-tighter">{{ __('site.arrival_price_amount') }}</span>
                                    <span class="text-slate-400 font-bold text-xl">{{ __('site.arrival_price_per') }}</span>
                                </div>

                                <ul class="space-y-6 mb-12">
                                    <li
                                        class="flex items-start gap-4 p-3 hover:bg-slate-50 rounded-2xl transition-all duration-300">
                                        <div class="p-1.5 bg-blue-500 rounded-full text-white text-[8px]">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <span
                                            class="text-slate-800 font-bold leading-tight">{{ __('site.arrival_price_feat_1') }}</span>
                                    </li>
                                    <li
                                        class="flex items-start gap-4 p-3 hover:bg-slate-50 rounded-2xl transition-all duration-300">
                                        <div class="p-1.5 bg-blue-500 rounded-full text-white text-[8px]">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <span
                                            class="text-slate-800 font-bold leading-tight">{{ __('site.arrival_price_feat_2') }}</span>
                                    </li>
                                    <li
                                        class="flex items-start gap-4 p-3 hover:bg-slate-50 rounded-2xl transition-all duration-300">
                                        <div class="p-1.5 bg-blue-500 rounded-full text-white text-[8px]">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <span
                                            class="text-slate-800 font-bold leading-tight">{{ __('site.arrival_price_feat_3') }}</span>
                                    </li>
                                </ul>

                                <a href="https://wa.me/{{ config('site.whatsapp_number') }}" target="_blank"
                                    class="block w-full text-center py-6 bg-[var(--color-navy)] text-white font-black rounded-2xl shadow-xl shadow-[var(--color-navy)]/10 hover:bg-[var(--color-navy-dark)] hover:scale-[1.02] transition-all duration-300 group">
                                    {{ __('site.arrival_price_cta') }}
                                    <i
                                        class="fa-solid fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- How it works -->
                    <div class="lg:col-span-7 flex flex-col justify-center py-8">
                        <h2
                            class="text-4xl font-black text-[var(--color-navy)] mb-16 tracking-tight flex items-center gap-5">
                            <span class="hidden sm:block w-12 h-1 bg-[var(--color-gold)]"></span>
                            {{ __('site.arrival_how_title') }}
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-10">
                            <div class="relative flex flex-col items-center sm:items-start group">
                                <div
                                    class="w-16 h-16 bg-white rounded-2xl shadow-xl flex items-center justify-center text-3xl font-black text-[var(--color-navy)] mb-6 border border-slate-100 group-hover:bg-[var(--color-navy)] group-hover:text-white transition-all duration-500 relative">
                                    <i
                                        class="fa-solid fa-cloud-arrow-up text-2xl group-hover:scale-110 transition-transform"></i>
                                    <span
                                        class="absolute -top-3 -right-3 w-8 h-8 rounded-full bg-[var(--color-gold)] text-[var(--color-navy)] text-xs flex items-center justify-center border-4 border-slate-50 font-black shadow-lg">1</span>
                                </div>
                                <h4
                                    class="text-sm font-black text-[var(--color-navy)] mb-3 uppercase tracking-widest text-center sm:text-left">
                                    {{ __('site.arrival_how_step1_t') }}</h4>
                                <p class="text-slate-500 text-xs font-bold leading-relaxed text-center sm:text-left">
                                    {{ __('site.arrival_how_step1_d') }}</p>

                                <div class="hidden sm:block absolute top-8 -right-8 text-slate-200">
                                    <i class="fa-solid fa-chevron-right text-xl"></i>
                                </div>
                            </div>

                            <div class="relative flex flex-col items-center sm:items-start group">
                                <div
                                    class="w-16 h-16 bg-white rounded-2xl shadow-xl flex items-center justify-center text-3xl font-black text-[var(--color-navy)] mb-6 border border-slate-100 group-hover:bg-[var(--color-navy)] group-hover:text-white transition-all duration-500 relative">
                                    <i
                                        class="fa-solid fa-user-gear text-2xl group-hover:scale-110 transition-transform"></i>
                                    <span
                                        class="absolute -top-3 -right-3 w-8 h-8 rounded-full bg-[var(--color-gold)] text-[var(--color-navy)] text-xs flex items-center justify-center border-4 border-slate-50 font-black shadow-lg">2</span>
                                </div>
                                <h4
                                    class="text-sm font-black text-[var(--color-navy)] mb-3 uppercase tracking-widest text-center sm:text-left">
                                    {{ __('site.arrival_how_step2_t') }}</h4>
                                <p class="text-slate-500 text-xs font-bold leading-relaxed text-center sm:text-left">
                                    {{ __('site.arrival_how_step2_d') }}</p>

                                <div class="hidden sm:block absolute top-8 -right-8 text-slate-200">
                                    <i class="fa-solid fa-chevron-right text-xl"></i>
                                </div>
                            </div>

                            <div class="flex flex-col items-center sm:items-start group">
                                <div
                                    class="w-16 h-16 bg-white rounded-2xl shadow-xl flex items-center justify-center text-3xl font-black text-[var(--color-navy)] mb-6 border border-slate-100 group-hover:bg-[var(--color-navy)] group-hover:text-white transition-all duration-500 relative">
                                    <i
                                        class="fa-solid fa-envelope-circle-check text-2xl group-hover:scale-110 transition-transform"></i>
                                    <span
                                        class="absolute -top-3 -right-3 w-8 h-8 rounded-full bg-[var(--color-gold)] text-[var(--color-navy)] text-xs flex items-center justify-center border-4 border-slate-50 font-black shadow-lg">3</span>
                                </div>
                                <h4
                                    class="text-sm font-black text-[var(--color-navy)] mb-3 uppercase tracking-widest text-center sm:text-left">
                                    {{ __('site.arrival_how_step3_t') }}</h4>
                                <p class="text-slate-500 text-xs font-bold leading-relaxed text-center sm:text-left">
                                    {{ __('site.arrival_how_step3_d') }}</p>
                            </div>
                        </div>

                        <div
                            class="mt-20 p-8 rounded-3xl bg-blue-50/50 border border-blue-100 flex items-center gap-8 group hover:bg-blue-50 transition-colors">
                            <div
                                class="hidden sm:block p-5 bg-white rounded-full shadow-lg group-hover:scale-110 transition-transform flex items-center justify-center">
                                <i class="fa-solid fa-plane-arrival text-3xl text-blue-500/30"></i>
                            </div>
                            <p class="text-[var(--color-navy)]/60 text-xs font-bold italic leading-relaxed">
                                "Many travelers realize at the airport that they haven't completed this form. Our goal is to
                                make sure you arrive prepared and relaxed."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-24 bg-white">
            <div class="container mx-auto px-6 max-w-5xl">
                <div class="text-center mb-20">
                    <div class="flex items-center justify-center gap-1 mb-6">
                        <i class="fa-solid fa-star text-[var(--color-gold)] text-xs"></i>
                        <i class="fa-solid fa-star text-[var(--color-gold)] text-xs"></i>
                        <i class="fa-solid fa-star text-[var(--color-gold)] text-xs"></i>
                        <i class="fa-solid fa-star text-[var(--color-gold)] text-xs"></i>
                        <i class="fa-solid fa-star text-[var(--color-gold)] text-xs"></i>
                    </div>
                    <h2 class="text-4xl font-black text-[var(--color-navy)] tracking-tight">
                        {{ __('site.arrival_testi_title') }}</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div
                        class="bg-slate-50 p-8 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group">
                        <div class="flex gap-1 mb-6">
                            @for($i = 0; $i < 5; $i++) <i class="fa-solid fa-star text-[var(--color-gold)] text-[10px]"></i>
                            @endfor
                        </div>
                        <h5
                            class="text-base font-black text-[var(--color-navy)] mb-4 leading-tight group-hover:text-[var(--color-gold)] transition-colors italic">
                            "{{ __('site.review_4_title') }}"</h5>
                        <p class="text-slate-600 text-sm leading-relaxed mb-10 opacity-80">{{ __('site.review_4_desc') }}
                        </p>
                        <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                            <div class="w-12 h-12 rounded-full overflow-hidden bg-slate-200">
                                <img src="https://i.pravatar.cc/100?u=4" alt="User">
                            </div>
                            <div>
                                <div class="font-black text-[var(--color-navy)] text-sm tracking-tight">
                                    {{ __('site.review_4_author') }}</div>
                                <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Verified
                                    Traveler</div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div
                        class="bg-slate-50 p-8 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group">
                        <div class="flex gap-1 mb-6">
                            @for($i = 0; $i < 5; $i++) <i class="fa-solid fa-star text-[var(--color-gold)] text-[10px]"></i>
                            @endfor
                        </div>
                        <h5
                            class="text-base font-black text-[var(--color-navy)] mb-4 leading-tight group-hover:text-[var(--color-gold)] transition-colors italic">
                            "{{ __('site.review_5_title') }}"</h5>
                        <p class="text-slate-600 text-sm leading-relaxed mb-10 opacity-80">{{ __('site.review_5_desc') }}
                        </p>
                        <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                            <div class="w-12 h-12 rounded-full overflow-hidden bg-slate-200">
                                <img src="https://i.pravatar.cc/100?u=5" alt="User">
                            </div>
                            <div>
                                <div class="font-black text-[var(--color-navy)] text-sm tracking-tight">
                                    {{ __('site.review_5_author') }}</div>
                                <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Verified
                                    Traveler</div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div
                        class="bg-slate-50 p-8 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group">
                        <div class="flex gap-1 mb-6">
                            @for($i = 0; $i < 5; $i++) <i class="fa-solid fa-star text-[var(--color-gold)] text-[10px]"></i>
                            @endfor
                        </div>
                        <h5
                            class="text-base font-black text-[var(--color-navy)] mb-4 leading-tight group-hover:text-[var(--color-gold)] transition-colors italic">
                            "{{ __('site.review_6_title') }}"</h5>
                        <p class="text-slate-600 text-sm leading-relaxed mb-10 opacity-80">{{ __('site.review_6_desc') }}
                        </p>
                        <div class="flex items-center gap-4 pt-6 border-t border-slate-200/60">
                            <div class="w-12 h-12 rounded-full overflow-hidden bg-slate-200">
                                <img src="https://i.pravatar.cc/100?u=6" alt="User">
                            </div>
                            <div>
                                <div class="font-black text-[var(--color-navy)] text-sm tracking-tight">
                                    {{ __('site.review_6_author') }}</div>
                                <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Verified
                                    Traveler</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer CTA -->
        <section class="relative py-32 px-6 overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('img/arrival-card/beach.png') }}" alt="Beach" class="w-full h-full object-cover">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-[var(--color-navy)]/80 via-[var(--color-navy)]/60 to-[var(--color-navy)]/90">
                </div>
            </div>

            <div class="container mx-auto relative z-10 text-center">
                <h2 class="text-5xl sm:text-6xl font-black text-white mb-8 tracking-tighter">
                    {{ __('site.arrival_cta_title') }}</h2>
                <p class="text-xl text-white/70 font-bold mb-12 max-w-2xl mx-auto leading-relaxed">
                    {{ __('site.arrival_cta_subtitle') }}
                </p>

                <a href="https://wa.me/{{ config('site.whatsapp_number') }}" target="_blank"
                    class="inline-flex items-center gap-4 px-12 py-6 bg-[#25D366] text-white font-black rounded-2xl shadow-2xl hover:bg-[#20ba5a] hover:-translate-y-2 transition-all duration-300 group">
                    <i class="fa-brands fa-whatsapp text-2xl"></i>
                    {{ __('site.arrival_cta_btn') }}
                    <i class="fa-solid fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                </a>

                <div class="mt-16 pt-10 border-t border-white/10 max-w-3xl mx-auto">
                    <p class="text-white/40 text-[10px] font-bold uppercase tracking-[0.2em] leading-loose">
                        {{ __('site.arrival_cta_warning') }}
                    </p>
                </div>
            </div>
        </section>

    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Simple countdown logic: reset every 24 hours
                function updateCountdown() {
                    const now = new Date();
                    const tomorrow = new Date();
                    tomorrow.setHours(24, 0, 0, 0);

                    let diff = tomorrow - now;

                    const hours = Math.floor(diff / (1000 * 60 * 60));
                    diff -= hours * (1000 * 60 * 60);
                    const minutes = Math.floor(diff / (1000 * 60));
                    diff -= minutes * (1000 * 60);
                    const seconds = Math.floor(diff / 1000);

                    document.getElementById('hours').innerText = String(hours).padStart(2, '0');
                    document.getElementById('minutes').innerText = String(minutes).padStart(2, '0');
                    document.getElementById('seconds').innerText = String(seconds).padStart(2, '0');
                }

                setInterval(updateCountdown, 1000);
                updateCountdown();
            });
        </script>
    @endpush

    <style>
        @keyframes bounce-slow {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-bounce-slow {
            animation: bounce-slow 4s ease-in-out infinite;
        }

        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 12s linear infinite;
        }

        .arrival-card-page h1 span {
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.6);
            color: transparent;
            transition: all 0.5s;
        }

        .arrival-card-page h1:hover span {
            color: var(--color-gold);
            -webkit-text-stroke: 1px var(--color-gold);
        }
    </style>
@endsection