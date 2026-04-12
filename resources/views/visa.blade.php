@extends('layouts.app')

@section('title', __('site.nav_visa') . ' - ' . config('app.name'))

@section('content')
<div class="visa-page overflow-x-hidden">
    <!-- Hero Section -->
    <section class="relative min-h-[60vh] flex items-center pt-32 pb-20 px-6 text-center">
        <!-- Background with Premium Sky Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/visa/hero_sky.png') }}" alt="Sky" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-white/10 via-white/40 to-white"></div>
        </div>

        <div class="container mx-auto relative z-10">
            <div class="max-w-4xl mx-auto flex flex-col items-center">
                <!-- Title -->
                <h1 class="text-5xl sm:text-7xl font-black text-[var(--color-navy)] leading-[1.1] mb-8 tracking-tighter drop-shadow-sm">
                    {!! __('site.visa_hero_title') !!}
                </h1>
                
                <!-- Subtitle -->
                <p class="text-xl sm:text-2xl text-slate-600 font-medium mb-12 max-w-3xl leading-relaxed">
                    {!! __('site.visa_hero_subtitle') !!}
                </p>

                <!-- Scroll Down Hint -->
                <div class="animate-bounce text-slate-300">
                    <i class="fa-solid fa-chevron-down text-2xl"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="py-12 bg-white px-6">
        <div class="container mx-auto max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch relative">
                <!-- VS Badge (Desktop Only) -->
                <div class="hidden lg:flex absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-20 w-16 h-16 bg-white rounded-full shadow-[0_20px_50px_rgba(0,0,0,0.15)] border-4 border-white items-center justify-center font-black text-[var(--color-navy)] text-xl italic group">
                    <span class="group-hover:scale-110 transition-transform">VS</span>
                </div>

                <!-- Visa On Arrival Card -->
                <div class="bg-blue-50/20 rounded-[3rem] border-2 border-slate-100 p-8 sm:p-12 flex flex-col hover:shadow-[0_40px_80px_-15px_rgba(0,0,0,0.1)] transition-all duration-700 group relative overflow-hidden">
                    <div class="absolute -top-10 -right-10 w-48 h-48 bg-blue-500/5 rounded-full blur-3xl group-hover:scale-150 transition-transform duration-1000"></div>
                    
                    <div class="relative z-10">
                        <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                            <h3 class="text-4xl font-black text-[var(--color-navy)] mb-2 tracking-tight">{{ __('site.visa_voa_title') }}</h3>
                            <div class="text-blue-500 font-black uppercase tracking-[0.2em] text-[10px] mb-8">{{ __('site.visa_voa_subtitle') }}</div>
                            
                            <!-- Price Badge -->
                            <div class="relative mb-10 group/price">
                                <div class="absolute inset-0 bg-blue-500/20 blur-xl rounded-full scale-125 opacity-0 group-hover/price:opacity-100 transition-opacity"></div>
                                <div class="relative inline-flex items-center gap-2 px-8 py-4 bg-[var(--color-navy)] text-white font-black rounded-3xl shadow-2xl text-xl sm:text-2xl hover:scale-105 transition-transform duration-300">
                                    {{ __('site.visa_voa_price') }}
                                </div>
                            </div>
                        </div>

                        <!-- Info Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
                            <!-- Duration Box -->
                            <div class="bg-white rounded-[2rem] p-6 shadow-[0_10px_30px_-5px_rgba(0,0,0,0.05)] border border-slate-50 flex items-center gap-5 hover:border-blue-100 transition-colors">
                                <div class="w-12 h-12 bg-blue-50 rounded-2xl flex flex-col items-center justify-center text-[var(--color-navy)] shrink-0">
                                    <i class="fa-solid fa-clock-rotate-left"></i>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-[10px] font-black text-slate-300 uppercase tracking-widest leading-none mb-1">Stay</span>
                                    <span class="text-[var(--color-navy)] font-black text-sm leading-tight">30 Days</span>
                                </div>
                            </div>
                            <!-- Best For Box -->
                            <div class="bg-white rounded-[2rem] p-6 shadow-[0_10px_30px_-5px_rgba(0,0,0,0.05)] border border-slate-50 flex items-center gap-5 hover:border-blue-100 transition-colors">
                                <div class="w-12 h-12 bg-blue-50 rounded-2xl flex flex-col items-center justify-center text-[var(--color-navy)] shrink-0">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-[10px] font-black text-slate-300 uppercase tracking-widest leading-none mb-1">Ideal For</span>
                                    <span class="text-[var(--color-navy)] font-black text-sm leading-tight">Short Trips</span>
                                </div>
                            </div>
                        </div>

                        <!-- Requirements Detail -->
                        <div class="bg-blue-600/5 rounded-3xl p-6 mb-8 border border-blue-500/10">
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3">
                                    <i class="fa-solid fa-circle-check text-blue-500 text-xs"></i>
                                    <span class="text-blue-900 font-bold text-sm">{{ __('site.visa_voa_stay_1') }}</span>
                                </li>
                                <li class="flex items-center gap-3">
                                    <i class="fa-solid fa-circle-check text-blue-500 text-xs"></i>
                                    <span class="text-blue-900 font-bold text-sm">{{ __('site.visa_voa_stay_2') }}</span>
                                </li>
                                <li class="flex items-center gap-3">
                                    <i class="fa-solid fa-circle-info text-blue-500 text-xs"></i>
                                    <span class="text-blue-900 font-bold text-sm">{{ __('site.visa_voa_stay_3') }}</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Advantage List -->
                        <div class="space-y-4 mb-4">
                            <div class="flex items-center gap-2 mb-4 px-2">
                                <div class="h-px flex-1 bg-slate-100"></div>
                                <span class="text-[10px] font-black text-slate-300 uppercase tracking-[0.3em]">Benefits</span>
                                <div class="h-px flex-1 bg-slate-100"></div>
                            </div>
                            <ul class="space-y-4">
                                @foreach(['visa_voa_feat_1', 'visa_voa_feat_2', 'visa_voa_feat_3', 'visa_voa_feat_4'] as $feat)
                                <li class="flex items-start gap-4 p-3 bg-white/50 rounded-2xl hover:bg-white transition-colors border border-transparent hover:border-slate-100">
                                    <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center text-white shrink-0 shadow-lg shadow-green-500/20">
                                        <i class="fa-solid fa-check text-[10px]"></i>
                                    </div>
                                    <span class="text-slate-700 font-bold text-sm leading-tight">{{ __('site.' . $feat) }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Visit Visa (B211A) Card -->
                <div class="bg-green-50/20 rounded-[3rem] border-2 border-slate-100 p-8 sm:p-12 flex flex-col hover:shadow-[0_40px_80px_-15px_rgba(0,0,0,0.1)] transition-all duration-700 group relative overflow-hidden">
                    <div class="absolute -top-10 -right-10 w-48 h-48 bg-green-500/5 rounded-full blur-3xl group-hover:scale-150 transition-transform duration-1000"></div>
                    
                    <div class="relative z-10">
                        <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                            <h3 class="text-4xl font-black text-[var(--color-navy)] mb-2 tracking-tight">{{ __('site.visa_visit_title') }}</h3>
                            <div class="text-green-600 font-black uppercase tracking-[0.2em] text-[10px] mb-8">{{ __('site.visa_visit_subtitle') }}</div>
                            
                            <!-- Price Badge -->
                            <div class="relative mb-10 group/price">
                                <div class="absolute inset-0 bg-green-500/20 blur-xl rounded-full scale-125 opacity-0 group-hover/price:opacity-100 transition-opacity"></div>
                                <div class="relative inline-flex items-center gap-2 px-8 py-4 bg-green-600 text-white font-black rounded-3xl shadow-2xl text-xl sm:text-2xl hover:scale-105 transition-transform duration-300">
                                    {{ __('site.visa_visit_price') }}
                                </div>
                            </div>
                        </div>

                        <!-- Info Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
                            <!-- Duration Box -->
                            <div class="bg-white rounded-[2rem] p-6 shadow-[0_10px_30px_-5px_rgba(0,0,0,0.05)] border border-slate-50 flex items-center gap-5 hover:border-green-100 transition-colors">
                                <div class="w-12 h-12 bg-green-50 rounded-2xl flex flex-col items-center justify-center text-green-600 shrink-0">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-[10px] font-black text-slate-300 uppercase tracking-widest leading-none mb-1">Stay</span>
                                    <span class="text-[var(--color-navy)] font-black text-sm leading-tight">60 Days</span>
                                </div>
                            </div>
                            <!-- Best For Box -->
                            <div class="bg-white rounded-[2rem] p-6 shadow-[0_10px_30px_-5px_rgba(0,0,0,0.05)] border border-slate-50 flex items-center gap-5 hover:border-green-100 transition-colors">
                                <div class="w-12 h-12 bg-green-50 rounded-2xl flex flex-col items-center justify-center text-green-600 shrink-0">
                                    <i class="fa-solid fa-earth-asia"></i>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-[10px] font-black text-slate-300 uppercase tracking-widest leading-none mb-1">Ideal For</span>
                                    <span class="text-[var(--color-navy)] font-black text-sm leading-tight">Slow Travel</span>
                                </div>
                            </div>
                        </div>

                        <!-- Requirements Detail -->
                        <div class="bg-green-600/5 rounded-3xl p-6 mb-8 border border-green-500/10">
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3">
                                    <i class="fa-solid fa-circle-check text-green-600 text-xs"></i>
                                    <span class="text-green-900 font-bold text-sm">{{ __('site.visa_visit_stay_1') }}</span>
                                </li>
                                <li class="flex items-center gap-3">
                                    <i class="fa-solid fa-circle-plus text-green-600 text-xs"></i>
                                    <span class="text-green-900 font-bold text-sm">{{ __('site.visa_visit_stay_2') }}</span>
                                </li>
                                <li class="flex items-center gap-3">
                                    <i class="fa-solid fa-circle-info text-green-600 text-xs"></i>
                                    <span class="text-green-900 font-bold text-sm">{{ __('site.visa_visit_stay_3') }}</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Advantage List -->
                        <div class="space-y-4 mb-4">
                            <div class="flex items-center gap-2 mb-4 px-2">
                                <div class="h-px flex-1 bg-slate-100"></div>
                                <span class="text-[10px] font-black text-slate-300 uppercase tracking-[0.3em]">Benefits</span>
                                <div class="h-px flex-1 bg-slate-100"></div>
                            </div>
                            <ul class="space-y-4">
                                @foreach(['visa_visit_feat_1', 'visa_visit_feat_2', 'visa_visit_feat_3', 'visa_visit_feat_4'] as $feat)
                                <li class="flex items-start gap-4 p-3 bg-white/50 rounded-2xl hover:bg-white transition-colors border border-transparent hover:border-slate-100">
                                    <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center text-white shrink-0 shadow-lg shadow-green-500/20">
                                        <i class="fa-solid fa-check text-[10px]"></i>
                                    </div>
                                    <span class="text-slate-700 font-bold text-sm leading-tight">{{ __('site.' . $feat) }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Red Cons Box -->
            <div class="mt-8 bg-red-50/50 rounded-[3.5rem] border border-red-100 p-8 sm:p-14 relative overflow-hidden group/cons">
                <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-red-500/5 rounded-full blur-[100px] group-hover/cons:scale-125 transition-transform duration-1000"></div>
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">
                    <div class="lg:col-span-8">
                        <div class="flex items-center gap-4 mb-10">
                            <div class="w-12 h-12 bg-red-500 rounded-2xl flex items-center justify-center text-white shadow-xl shadow-red-500/20 animate-pulse">
                                <i class="fa-solid fa-circle-xmark text-xl"></i>
                            </div>
                            <h4 class="text-3xl font-black text-red-700 tracking-tighter uppercase">{{ __('site.visa_cons_title') }}</h4>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach(['visa_cons_1', 'visa_cons_2', 'visa_cons_3', 'visa_cons_4'] as $con)
                            <li class="flex items-center gap-4 list-none group/item">
                                <div class="w-6 h-6 bg-red-100 text-red-600 rounded-full flex items-center justify-center group-hover/item:bg-red-200 transition-colors">
                                    <i class="fa-solid fa-xmark text-[10px] font-black"></i>
                                </div>
                                <span class="text-slate-700 font-black text-sm">{{ __('site.' . $con) }}</span>
                            </li>
                            @endforeach
                        </div>
                    </div>
                    <div class="lg:col-span-4 flex justify-center lg:justify-end">
                        <div class="relative group/img">
                            <div class="w-48 h-48 sm:w-56 sm:h-56 bg-white rounded-[3rem] shadow-2xl flex items-center justify-center border border-slate-100 rotate-6 group-hover/img:rotate-12 transition-transform duration-500">
                                <i class="fa-solid fa-clipboard-list text-7xl text-red-400 group-hover:scale-110 transition-transform"></i>
                            </div>
                            <div class="absolute -top-4 -left-4 w-28 h-28 bg-white rounded-[2rem] shadow-2xl flex items-center justify-center border border-slate-100 -rotate-12 group-hover/img:-rotate-18 transition-transform duration-500">
                                <i class="fa-solid fa-passport text-4xl text-slate-300"></i>
                            </div>
                            <!-- Money graphic -->
                            <div class="absolute -bottom-8 -right-8 opacity-20 group-hover/img:opacity-40 transition-opacity">
                                <i class="fa-solid fa-money-bill-transfer text-8xl text-red-500"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DIY vs Value Added -->
    <section class="py-32 bg-slate-50 px-6 relative overflow-hidden">
        <!-- Floating shapes -->
        <div class="absolute top-20 right-[15%] w-64 h-64 bg-blue-500/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-[10%] w-96 h-96 bg-green-500/5 rounded-full blur-3xl"></div>

        <div class="container mx-auto max-w-6xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-24 items-start">
                
                <!-- DIY Section -->
                <div class="lg:col-span-5 py-8">
                    <div class="inline-block px-4 py-1.5 rounded-full bg-slate-200 text-slate-500 font-black text-[10px] uppercase tracking-widest mb-6">
                        The Hard Way
                    </div>
                    <h2 class="text-4xl sm:text-5xl font-black text-[var(--color-navy)] mb-6 leading-tight tracking-tight">
                        {{ __('site.visa_diy_title') }}
                    </h2>
                    <p class="text-slate-400 font-black text-sm uppercase tracking-[0.2em] mb-10">{{ __('site.visa_diy_subtitle') }}</p>
                    
                    <p class="text-slate-700 font-bold mb-8 flex items-center gap-3">
                        <span class="w-8 h-px bg-slate-300"></span>
                        {{ __('site.visa_diy_desc') }}
                    </p>

                    <ul class="space-y-6 mb-16">
                        @foreach(['visa_diy_item_1', 'visa_diy_item_2', 'visa_diy_item_3'] as $item)
                        <li class="flex items-center gap-5 group">
                            <div class="w-8 h-8 rounded-xl bg-slate-200 flex items-center justify-center group-hover:bg-red-100 group-hover:text-red-600 transition-colors">
                                <i class="fa-solid fa-circle-exclamation text-xs"></i>
                            </div>
                            <span class="text-slate-600 font-bold italic">{{ __('site.' . $item) }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <div class="bg-gradient-to-br from-yellow-50 to-orange-50/50 p-8 rounded-[2.5rem] border-2 border-yellow-100 shadow-xl shadow-yellow-500/5 relative overflow-hidden">
                        <div class="absolute top-0 right-0 p-4 text-yellow-500/10">
                            <i class="fa-solid fa-triangle-exclamation text-6xl rotate-12"></i>
                        </div>
                        <div class="flex gap-6 items-start relative z-10">
                            <i class="fa-solid fa-skull-crossbones text-yellow-600 text-2xl mt-1"></i>
                            <p class="text-yellow-900 font-black text-base leading-relaxed">
                                {{ __('site.visa_diy_warning') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Why Us Header & Cards -->
                <div class="lg:col-span-7">
                    <div class="bg-white rounded-[4rem] shadow-[0_40px_100px_-20px_rgba(0,43,91,0.12)] p-10 sm:p-20 relative overflow-hidden border border-slate-100">
                        <!-- Decorative background icon -->
                        <div class="absolute top-0 right-0 p-12 text-blue-500/5">
                            <i class="fa-solid fa-shield-halved text-[15rem]"></i>
                        </div>

                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-2">
                                <span class="w-12 h-1 bg-[var(--color-gold)]"></span>
                                <span class="font-black text-[var(--color-navy)] uppercase tracking-[0.3em] text-[10px]">Premium Service</span>
                            </div>
                            <h2 class="text-3xl sm:text-4xl font-black text-[var(--color-navy)] mb-14 tracking-tight leading-none">
                                {{ __('site.visa_why_title') }}
                            </h2>

                            <ul class="space-y-8">
                                @foreach(['visa_why_item_1', 'visa_why_item_2', 'visa_why_item_3', 'visa_why_item_4', 'visa_why_item_5'] as $item)
                                <li class="flex items-center gap-6 group">
                                    <div class="w-12 h-12 bg-gradient-to-br from-[var(--color-navy)] to-[var(--color-navy-dark)] rounded-2xl flex items-center justify-center text-white shadow-xl shadow-blue-900/20 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                        <i class="fa-solid fa-check text-base"></i>
                                    </div>
                                    <span class="text-[var(--color-navy)] font-black text-xl tracking-tight leading-tight group-hover:translate-x-1 transition-transform">{!! __('site.' . $item) !!}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Large Footer CTA -->
    <section class="py-32 bg-white px-6">
        <div class="container mx-auto max-w-5xl">
            <div class="relative bg-[var(--color-navy)] rounded-[4rem] px-8 py-20 sm:p-24 text-center overflow-hidden shadow-2xl group">
                <!-- Background Decoration -->
                <div class="absolute inset-0 z-0">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-gradient-to-br from-blue-500/20 to-transparent"></div>
                    <div class="absolute -bottom-20 -left-20 w-96 h-96 bg-white/5 rounded-full blur-[100px] group-hover:scale-110 transition-transform duration-1000"></div>
                </div>

                <div class="relative z-10 max-w-3xl mx-auto">
                    <h2 class="text-4xl sm:text-7xl font-black text-white mb-10 tracking-tighter leading-[1.05]">
                        {!! __('site.visa_footer_title') !!}
                    </h2>
                    
                    <p class="text-xl sm:text-2xl text-white/70 font-bold mb-16 italic font-serif leading-relaxed">
                        {!! __('site.visa_footer_subtitle') !!}
                    </p>

                    <div class="inline-flex flex-col sm:flex-row items-center gap-8">
                        <a href="https://wa.me/{{ config('site.whatsapp_number') }}" target="_blank" class="px-16 py-7 bg-[#25D366] text-white font-black text-2xl rounded-3xl shadow-[0_20px_50px_rgba(37,211,102,0.4)] hover:bg-[#20ba5a] hover:-translate-y-2 transition-all duration-300 flex items-center gap-5 group/btn">
                            <i class="fa-brands fa-whatsapp text-3xl group-hover/btn:rotate-12 transition-transform"></i>
                            {{ __('site.visa_footer_cta') }}
                            <i class="fa-solid fa-arrow-right-long text-base ml-2 group-hover/btn:translate-x-2 transition-transform"></i>
                        </a>
                    </div>

                    <!-- Trusted text -->
                    <div class="mt-16 pt-10 border-t border-white/10 flex flex-col items-center gap-4">
                        <div class="flex items-center gap-1">
                            @for($i=0; $i<5; $i++)
                                <i class="fa-solid fa-star text-[var(--color-gold)] text-[10px]"></i>
                            @endfor
                        </div>
                        <div class="text-white/40 font-black uppercase tracking-[0.4em] text-[10px]">
                            {{ __('site.visa_footer_trust') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<style>
    /* Premium Title Effect */
    .visa-page h1 {
        background: linear-gradient(135deg, var(--color-navy) 0%, #004d99 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    /* Subtle Floating Animation */
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
    }
    .visa-floating {
        animation: float 6s ease-in-out infinite;
    }
</style>
@endsection
