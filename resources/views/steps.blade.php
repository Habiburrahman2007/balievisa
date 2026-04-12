@extends('layouts.app')

@section('title', __('site.how_title') . ' - Bali E Visa')

@section('content')
<div class="bg-gray-50 pt-32 pb-20 min-h-screen">
  {{-- ═══════════════════════════════════════════ HOW IT WORKS (STEPS) ═══ --}}
  <section id="steps" class="max-w-[1200px] mx-auto px-6 mb-12">
    {{-- Section Header --}}
    <div class="text-center mb-10">
      <div class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-600 px-3 py-1.5 rounded-md text-[0.7rem] font-bold tracking-widest uppercase mb-4 border border-blue-100 shadow-sm">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path><path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"></path></svg>
        WHY TRAVELERS CHOOSE US
      </div>
      <h2 class="text-4xl md:text-[2.8rem] font-extrabold text-[#1a365d] leading-tight mb-4 tracking-tight">
        How It Works
      </h2>
      <p class="text-gray-600 max-w-2xl mx-auto text-[1.05rem] leading-relaxed">
        You need to visit 3 different websites. Fill forms multiple times.<br>
        It's confusing, time-consuming, and easy to make mistakes.
      </p>
    </div>

    {{-- Comparison Columns --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 relative z-10">
      
      {{-- VS Badge --}}
      <div class="hidden md:flex absolute left-1/2 top-40 -translate-x-1/2 -translate-y-1/2 w-12 h-12 bg-blue-600 text-white rounded-full items-center justify-center font-black text-lg z-20 shadow-[0_0_0_6px_#f9fafb]">
        VS
      </div>

      {{-- LEFT COLUMN: DO IT YOURSELF --}}
      <div class="bg-[#fef5f5] rounded-3xl p-6 md:p-8 flex flex-col h-full border border-red-50 relative overflow-hidden">
        {{-- Header Badge --}}
        <div class="flex justify-center mb-6 z-10 relative">
          <div class="bg-[#d32f2f] text-white px-5 py-2 rounded-full font-bold text-sm inline-flex items-center gap-2 shadow-sm">
            <div class="bg-white/20 rounded-full w-5 h-5 flex items-center justify-center">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </div>
            IF YOU DO IT YOURSELF
          </div>
        </div>

        <p class="text-center font-bold text-slate-800 mb-6 text-[0.95rem] z-10 relative">You need to access multiple official websites:</p>

        {{-- 3 Websites Row --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-3 mb-8 z-10 relative">
          <div class="bg-white rounded-xl p-3 text-center border border-red-50 flex flex-col items-center shadow-sm">
            <div class="w-10 h-10 bg-yellow-100 text-yellow-600 rounded-full flex items-center justify-center mb-2">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            </div>
            <h4 class="text-[0.65rem] font-black text-slate-800 leading-tight">IMMIGRATION</h4>
            <p class="text-[0.6rem] text-slate-500 leading-tight mt-0.5">Visa / Arrival Card<br>evisa.imigrasi.go.id</p>
          </div>
          <div class="bg-white rounded-xl p-3 text-center border border-red-50 flex flex-col items-center shadow-sm">
            <div class="w-10 h-10 bg-yellow-100 text-yellow-600 rounded-full flex items-center justify-center mb-2">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
            </div>
            <h4 class="text-[0.65rem] font-black text-slate-800 leading-tight">CUSTOMS</h4>
            <p class="text-[0.6rem] text-slate-500 leading-tight mt-0.5">Declaration<br>ecd.beacukai.go.id</p>
          </div>
          <div class="bg-white rounded-xl p-3 text-center border border-red-50 flex flex-col items-center shadow-sm">
            <div class="w-10 h-10 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center mb-2">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
            </div>
            <h4 class="text-[0.65rem] font-black text-slate-800 leading-tight">HEALTH / QUARANTINE</h4>
            <p class="text-[0.6rem] text-slate-500 leading-tight mt-0.5">eHAC Indonesia</p>
          </div>
        </div>

        {{-- Lists Row --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6 z-10 relative">
          <div>
            <p class="text-[0.8rem] font-bold text-slate-800 mb-3 bg-white/70 backdrop-blur-sm p-1 rounded inline-block">Each website requires:</p>
            <ul class="space-y-2.5">
              <li class="flex items-center gap-2 text-[0.75rem] text-slate-800 font-medium">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#d32f2f" stroke-width="2" class="shrink-0"><path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path></svg>
                Different forms
              </li>
              <li class="flex items-center gap-2 text-[0.75rem] text-slate-800 font-medium">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#d32f2f" stroke-width="2" class="shrink-0"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                Repeated personal data
              </li>
              <li class="flex items-center gap-2 text-[0.75rem] text-slate-800 font-medium">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#d32f2f" stroke-width="2" class="shrink-0"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                Different formats
              </li>
              <li class="flex items-center gap-2 text-[0.75rem] text-slate-800 font-medium">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#d32f2f" stroke-width="2" class="shrink-0"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                Separate submissions
              </li>
            </ul>
          </div>
          <div class="bg-red-50/80 backdrop-blur-md rounded-xl p-3 border border-red-200">
            <p class="text-[0.8rem] font-bold text-red-800 mb-3">Pain Points:</p>
            <ul class="space-y-2.5">
              <li class="flex items-start gap-1.5 text-[0.75rem] text-red-700 font-medium">
                <div class="bg-red-100 rounded-full w-3.5 h-3.5 flex items-center justify-center shrink-0 mt-px"><svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div>
                <span class="leading-snug">Confusing instructions</span>
              </li>
              <li class="flex items-start gap-1.5 text-[0.75rem] text-red-700 font-medium">
                <div class="bg-red-100 rounded-full w-3.5 h-3.5 flex items-center justify-center shrink-0 mt-px"><svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div>
                <span class="leading-snug">Time consuming</span>
              </li>
              <li class="flex items-start gap-1.5 text-[0.75rem] text-red-700 font-medium">
                <div class="bg-red-100 rounded-full w-3.5 h-3.5 flex items-center justify-center shrink-0 mt-px"><svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div>
                <span class="leading-snug">Easy to make mistakes</span>
              </li>
              <li class="flex items-start gap-1.5 text-[0.75rem] text-red-700 font-medium">
                <div class="bg-red-100 rounded-full w-3.5 h-3.5 flex items-center justify-center shrink-0 mt-px"><svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div>
                <span class="leading-snug">High risk of missing one requirement</span>
              </li>
              <li class="flex items-start gap-1.5 text-[0.75rem] text-red-700 font-medium">
                <div class="bg-red-100 rounded-full w-3.5 h-3.5 flex items-center justify-center shrink-0 mt-px"><svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div>
                <span class="leading-snug">Stress before your flight</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="mt-auto pt-4 flex flex-col relative z-10">
          <div class="bg-[#ffebee] rounded-lg p-3 flex items-start gap-3 border border-red-200">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d32f2f" stroke-width="2" class="shrink-0 mt-0.5"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
            <p class="text-[0.75rem] font-bold text-red-800 leading-tight">One small mistake can cause delays at the airport.</p>
          </div>
        </div>
        
        <img src="/img/blog-hidden-gems.png" alt="Stressed Traveler" class="absolute bottom-10 right-0 w-48 h-48 object-cover opacity-20 mix-blend-multiply grayscale z-0 pointer-events-none" style="clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 40%);">

      </div>

      {{-- RIGHT COLUMN: USE OUR SERVICE --}}
      <div class="bg-[#f0f9f4] rounded-3xl p-6 md:p-8 flex flex-col h-full border border-green-100 relative overflow-hidden">
        {{-- Header Badge --}}
        <div class="flex justify-center mb-6 z-10 relative">
          <div class="bg-[#2e7d32] text-white px-5 py-2 rounded-full font-bold text-sm inline-flex items-center gap-2 shadow-sm">
            <div class="bg-white/20 rounded-full w-5 h-5 flex items-center justify-center">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </div>
            IF YOU USE OUR SERVICE
          </div>
        </div>

        <p class="text-center font-bold text-slate-800 mb-6 text-[0.95rem] z-10 relative">Everything handled in one place.</p>

        {{-- 4 Steps Row --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-2 mb-8 z-10 relative">
          <div class="bg-white rounded-xl p-2 text-center border border-green-50 flex flex-col items-center shadow-sm">
            <div class="w-8 h-8 bg-blue-50 text-blue-500 rounded-full flex items-center justify-center mb-1.5">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
            </div>
            <p class="text-[0.55rem] font-bold text-slate-600 leading-tight">You only send your details once</p>
          </div>
          <div class="bg-white rounded-xl p-2 text-center border border-green-50 flex flex-col items-center shadow-sm">
            <div class="w-8 h-8 bg-green-50 text-green-500 rounded-full flex items-center justify-center mb-1.5">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect><polyline points="9 14 11 16 15 12"></polyline></svg>
            </div>
            <p class="text-[0.55rem] font-bold text-slate-600 leading-tight">We complete all required forms for you</p>
          </div>
          <div class="bg-white rounded-xl p-2 text-center border border-green-50 flex flex-col items-center shadow-sm">
            <div class="w-8 h-8 bg-blue-50 text-blue-500 rounded-full flex items-center justify-center mb-1.5">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M9 12l2 2 4-4"></path></svg>
            </div>
            <p class="text-[0.55rem] font-bold text-slate-600 leading-tight">We double-check everything</p>
          </div>
          <div class="bg-white rounded-xl p-2 text-center border border-green-50 flex flex-col items-center shadow-sm">
            <div class="w-8 h-8 bg-blue-50 text-blue-500 rounded-full flex items-center justify-center mb-1.5">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline><path d="M9 14l2 2 4-4"></path></svg>
            </div>
            <p class="text-[0.55rem] font-bold text-slate-600 leading-tight">You receive all documents ready to use</p>
          </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 h-full relative z-10">
          <div>
            <p class="text-[0.9rem] font-bold text-green-800 mb-3">Benefits:</p>
            <ul class="space-y-2.5">
              <li class="flex items-center gap-2 text-[0.8rem] text-slate-700 font-bold">
                <div class="bg-green-500 rounded-full w-4 h-4 flex items-center justify-center text-white shrink-0"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                No confusion
              </li>
              <li class="flex items-center gap-2 text-[0.8rem] text-slate-700 font-bold">
                <div class="bg-green-500 rounded-full w-4 h-4 flex items-center justify-center text-white shrink-0"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                No repeated data input
              </li>
              <li class="flex items-center gap-2 text-[0.8rem] text-slate-700 font-bold">
                <div class="bg-green-500 rounded-full w-4 h-4 flex items-center justify-center text-white shrink-0"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                No stress
              </li>
              <li class="flex items-center gap-2 text-[0.8rem] text-slate-700 font-bold">
                <div class="bg-green-500 rounded-full w-4 h-4 flex items-center justify-center text-white shrink-0"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                Saved time
              </li>
              <li class="flex items-center gap-2 text-[0.8rem] text-slate-700 font-bold">
                <div class="bg-green-500 rounded-full w-4 h-4 flex items-center justify-center text-white shrink-0"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                Peace of mind
              </li>
            </ul>
          </div>
          <div class="relative w-full h-[200px] md:h-auto mt-4 lg:mt-0">
            <img src="/img/blog-hidden-gems.png" alt="Happy Traveler" class="absolute bottom-[-10%] right-[-10%] w-[130%] max-w-none h-full object-cover object-left-bottom opacity-70 z-0 mask-image-gradient pointer-events-none">
            
            <!-- Desktop Badges -->
            <div class="hidden lg:flex flex-col gap-2.5 absolute right-[-5%] top-[10%] w-[180px] z-10">
              <div class="bg-white/95 backdrop-blur-md px-2.5 py-2 rounded-lg shadow-sm flex items-center justify-between border border-green-100">
                <span class="text-[0.5rem] font-bold text-slate-700 tracking-wider">ARRIVAL CARD<br>COMPLETED</span>
                <div class="bg-green-500 text-white rounded-full w-3.5 h-3.5 flex items-center justify-center"><svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
              </div>
              <div class="bg-white/95 backdrop-blur-md px-2.5 py-2 rounded-lg shadow-sm flex items-center justify-between border border-green-100">
                <span class="text-[0.5rem] font-bold text-slate-700 tracking-wider">CUSTOMS DECLARATION<br>COMPLETED</span>
                <div class="bg-green-500 text-white rounded-full w-3.5 h-3.5 flex items-center justify-center"><svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
              </div>
              <div class="bg-white/95 backdrop-blur-md px-2.5 py-2 rounded-lg shadow-sm flex items-center justify-between border border-green-100">
                <span class="text-[0.5rem] font-bold text-slate-700 tracking-wider">HEALTH DECLARATION<br>COMPLETED</span>
                <div class="bg-green-500 text-white rounded-full w-3.5 h-3.5 flex items-center justify-center"><svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
              </div>
            </div>
            <div class="hidden lg:flex absolute bottom-[10%] right-[10%] bg-blue-600 text-white px-3.5 py-2 rounded-lg shadow-[0_8px_20px_rgba(37,99,235,0.3)] items-center gap-1.5 z-10 -rotate-3 border-[3px] border-white">
              <span class="font-extrabold text-[0.85rem]">ALL DONE!</span>
              <div class="bg-white text-blue-600 rounded-full w-4 h-4 flex items-center justify-center">
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4"><polyline points="20 6 9 17 4 12"></polyline></svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Blue Banner Divider --}}
    <div class="bg-[#1a365d] rounded-2xl p-6 px-8 mt-6 shadow-md flex flex-col md:flex-row items-center justify-between gap-6 overflow-hidden relative">
      <div class="flex flex-col md:flex-row md:items-center gap-4 z-10 w-full md:w-auto">
        <div class="w-12 h-12 rounded-full border border-yellow-400 flex items-center justify-center relative shrink-0 shadow-[0_0_15px_rgba(250,204,21,0.3)] bg-[#1a365d]">
           <div class="absolute -right-3 top-1/2 -translate-y-1/2 w-4 h-[1px] bg-yellow-400/50"></div>
           <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#facc15" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
           <div class="absolute -left-1 top-2 w-1.5 h-1.5 bg-yellow-400 rounded-full animate-pulse"></div>
        </div>
        <p class="text-white text-lg md:text-[1.25rem] leading-[1.4] font-medium max-w-2xl">
          Instead of opening 3–4 different websites and risking mistakes,<br class="hidden md:block">
          <strong class="font-extrabold text-[#f8fafc] text-xl">you can get everything done in one simple step.</strong>
        </p>
      </div>
      <div class="z-10 shrink-0 w-full md:w-auto flex justify-end">
        <div class="relative w-32 h-16 mr-4 opacity-80 mix-blend-screen">
           <svg class="absolute top-1/2 right-full translate-y-3 w-48 text-white/40" viewBox="0 0 100 20" preserveAspectRatio="none"><path d="M0 10 Q 50 10, 100 0" stroke="currentColor" stroke-width="2" stroke-dasharray="4 4" fill="none"></path></svg>
           <svg width="50" height="50" viewBox="0 0 24 24" fill="white" class="-rotate-45 ml-auto translate-y-3 drop-shadow-lg"><path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"></path></svg>
           <!-- small clouds -->
           <div class="absolute top-0 right-0 w-8 h-3.5 bg-white/20 rounded-full blur-[2px]"></div>
           <div class="absolute bottom-1 left-6 w-12 h-5 bg-white/10 rounded-full blur-[2px]"></div>
        </div>
      </div>
    </div>

    {{-- Most Travelers Think Warning banner --}}
    <div class="mt-6 bg-[#fef5f5] rounded-2xl border border-red-100 p-6 flex flex-col md:flex-row items-stretch gap-6 lg:gap-8 overflow-hidden">
      <div class="rounded-xl overflow-hidden shrink-0 h-[140px] md:h-auto md:w-56 lg:w-72 relative border border-gray-200">
         <img src="/img/blog-hidden-gems.png" class="w-full h-full object-cover">
         <div class="absolute inset-0 bg-blue-900/40 mix-blend-multiply flex items-center justify-center flex-col text-white"></div>
      </div>

      <div class="flex-1 flex flex-col justify-center">
        <div class="flex items-start gap-3 mb-2">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#d32f2f" stroke-width="2.5" class="shrink-0 mt-0.5"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
          <h3 class="text-xl md:text-[1.35rem] font-bold text-slate-800 leading-tight">
            <span class="text-[#d32f2f]">Most travelers think it's easy...</span><br>
            until they try to do it themselves.
          </h3>
        </div>
        <p class="text-[0.95rem] text-slate-600 font-medium ml-10">
          And by the time they realize,<br>they are already at the airport.
        </p>
      </div>

      <div class="flex flex-wrap md:flex-nowrap items-center gap-3 shrink-0">
         <div class="bg-white p-3 rounded-xl border border-red-50 text-center flex flex-col items-center justify-center w-24 h-24 shadow-sm">
           <div class="bg-blue-50 text-blue-600 w-10 h-10 rounded-lg flex items-center justify-center mb-1.5"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><circle cx="9" cy="21" r="1"></circle><circle cx="15" cy="21" r="1"></circle></svg></div>
           <span class="text-[0.55rem] font-bold text-slate-700 leading-tight">Confusing<br>Websites</span>
         </div>
         <div class="bg-white p-3 rounded-xl border border-red-50 text-center flex flex-col items-center justify-center w-24 h-24 shadow-sm">
           <div class="bg-slate-50 text-slate-600 w-10 h-10 rounded-lg flex items-center justify-center mb-1.5"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
           <span class="text-[0.55rem] font-bold text-slate-700 leading-tight">Wasted<br>Time</span>
         </div>
         <div class="bg-white p-3 rounded-xl border border-red-50 text-center flex flex-col items-center justify-center w-24 h-24 shadow-sm">
           <div class="bg-red-50 text-red-600 w-10 h-10 rounded-lg flex items-center justify-center mb-1.5"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></div>
           <span class="text-[0.55rem] font-bold text-slate-700 leading-tight">Stress & Risk of<br>Delay</span>
         </div>
      </div>
    </div>

    {{-- Call to action & price --}}
    <div class="mt-6 bg-[#1a4ea8] rounded-3xl p-6 md:p-10 flex flex-col lg:flex-row items-center justify-between gap-8 bg-gradient-to-r from-[#153b82] via-[#1a4ea8] to-[#1e58c2] shadow-[0_10px_30px_rgba(26,54,93,0.2)] border border-blue-400">
      <div class="flex-1 w-full text-center lg:text-left">
         <h3 class="text-[1.4rem] md:text-[1.8rem] font-semibold text-white/90 leading-tight mb-2">
           Save your time. Avoid mistakes.<br>
           <strong class="font-extrabold text-white text-[1.8rem] md:text-[2.4rem] tracking-tight">Let us handle everything for you.</strong>
         </h3>
         <div class="flex flex-wrap items-center justify-center lg:justify-start gap-2.5 mt-5">
           <div class="bg-white/10 backdrop-blur-sm border border-white/30 text-white px-3.5 py-1.5 rounded-md text-[0.75rem] font-bold inline-flex items-center gap-1.5 shadow-sm">
             <div class="bg-white rounded-[4px] w-4 h-4 flex items-center justify-center text-[#153b82]"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
             Fast & Accurate
           </div>
           <div class="bg-white/5 backdrop-blur-sm border border-white/20 text-white px-3.5 py-1.5 rounded-md text-[0.75rem] font-bold inline-flex items-center gap-1.5">
             <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
             Personal Assistance
           </div>
           <div class="bg-white/10 backdrop-blur-sm border border-white/30 text-white px-3.5 py-1.5 rounded-md text-[0.75rem] font-bold inline-flex items-center gap-1.5 shadow-sm">
             <div class="bg-white rounded-[4px] w-4 h-4 flex items-center justify-center text-[#153b82]"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
             100% Ready to Use
           </div>
         </div>
      </div>

      <div class="flex flex-col sm:flex-row items-center sm:items-stretch gap-6 lg:border-l lg:border-white/20 lg:pl-10 w-full lg:w-auto">
        <div class="flex flex-col justify-center text-center sm:text-left">
           <div class="text-[0.75rem] font-bold text-white/70 uppercase tracking-widest mb-0.5">ONLY</div>
           <div class="text-[4rem] font-black text-white leading-none tracking-tighter flex items-end justify-center sm:justify-start">
             $5<span class="text-[1.1rem] font-semibold text-white/80 ml-1 mb-2.5 tracking-normal">/person</span>
           </div>
           <div class="text-[0.8rem] font-semibold text-white mt-1 uppercase tracking-wider">One-time service</div>
        </div>
        <div class="flex flex-col justify-center gap-4 sm:ml-4 w-full sm:w-auto">
           <a href="https://wa.me/62895330440544" class="bg-[#25D366] text-white font-extrabold text-[1.2rem] px-8 py-4 rounded-2xl flex items-center gap-3 transition-all hover:scale-105 hover:bg-[#20bd5a] shadow-[0_8px_25px_rgba(37,211,102,0.4)] whitespace-nowrap justify-center outline outline-2 outline-offset-2 outline-[#25D366]/50">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
              <div class="flex flex-col items-start leading-[1.1]">
                 Start Now
                 <span class="text-[0.75rem] font-semibold text-white/90">via WhatsApp</span>
              </div>
           </a>
           <div class="text-[0.7rem] text-white/80 font-bold flex items-center justify-center gap-1.5 uppercase tracking-wider">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
              Secure · Fast · Trusted
           </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection
