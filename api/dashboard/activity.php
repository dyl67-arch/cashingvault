<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Manrope:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-secondary-container": "#e1ffe9",
                        "surface-container": "#19191d",
                        "primary-container": "#0abc56",
                        "on-secondary-fixed-variant": "#006942",
                        "primary-fixed": "#6bff8f",
                        "on-error-container": "#ffd2c8",
                        "tertiary-container": "#00e0fd",
                        "tertiary-fixed-dim": "#00d1ec",
                        "secondary-fixed": "#7afbb7",
                        "tertiary-fixed": "#00e0fd",
                        "outline-variant": "#48474b",
                        "surface-container-lowest": "#000000",
                        "surface-tint": "#6bff8f",
                        "on-tertiary-fixed-variant": "#005561",
                        "error-container": "#b92902",
                        "inverse-primary": "#006e2f",
                        "tertiary-dim": "#00d1ec",
                        "surface-dim": "#0e0e11",
                        "surface-container-low": "#131316",
                        "secondary-fixed-dim": "#6beca9",
                        "surface-container-high": "#1f1f23",
                        "on-primary-fixed-variant": "#006a2d",
                        "surface-container-highest": "#25252a",
                        "background": "#0e0e11",
                        "on-primary": "#005f28",
                        "on-surface": "#fbf8fc",
                        "on-surface-variant": "#acaaae",
                        "primary": "#6bff8f",
                        "on-error": "#450900",
                        "on-tertiary-container": "#004b56",
                        "inverse-surface": "#fbf8fc",
                        "secondary": "#7afbb7",
                        "outline": "#767578",
                        "on-tertiary-fixed": "#00363e",
                        "secondary-container": "#006d44",
                        "surface-bright": "#2c2c30",
                        "on-secondary-fixed": "#00492c",
                        "primary-fixed-dim": "#5bf083",
                        "on-background": "#fbf8fc",
                        "tertiary": "#7de9ff",
                        "surface-variant": "#25252a",
                        "surface": "#0e0e11",
                        "primary-dim": "#5bf083",
                        "inverse-on-surface": "#555458",
                        "secondary-dim": "#6beca9",
                        "on-primary-fixed": "#004a1d",
                        "on-secondary": "#005e3a",
                        "on-primary-container": "#002c0f",
                        "error": "#ff7351",
                        "on-tertiary": "#005561",
                        "error-dim": "#d53d18"
                    },
                    borderRadius: {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    fontFamily: {
                        "headline": ["Plus Jakarta Sans"],
                        "body": ["Manrope"],
                        "label": ["Manrope"]
                    }
                },
            },
        }
    </script>
<style>
        body { font-family: 'Manrope', sans-serif; background-color: #0e0e11; }
        .font-plus-jakarta { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head>
<body class="text-on-surface select-none">
<!-- TopAppBar -->
<header class="fixed top-0 w-full z-50 bg-zinc-950/80 backdrop-blur-xl flex justify-between items-center px-6 py-4 w-full">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full overflow-hidden bg-surface-container-highest border border-outline-variant/20">
<img alt="User Profile" class="w-full h-full object-cover" data-alt="Close up portrait of a stylish young man with a confident expression, soft studio lighting, high-end photography style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfY9rWf0XcC9NDywpuNgCcUekF8Vtkt26awzcMIJwkDPufNAMqlT9tOb7tGUm-jb8O7zTufw8rWIkGcwd3_iK5CIu8fa6GUhpqU28jm7tNhZswmhvU8Wtd-h-gNocVnFnlMgJ3ECCiunrbW-d2yDRQ8eIXTuJt8Z36K-W5_dlLsyPfyjvTJfYSCXfy60buULSYpedpT20WpuxXsO6cb8Be_cvvpI_L6_7pBUK82ivljTrBN9Eh0FBtQs1_k_Gjvf9osHT04qV2T3g"/>
</div>
<h1 class="text-xl font-bold tracking-tight text-green-400 font-plus-jakarta">The Kinetic Vault</h1>
</div>
<button class="hover:opacity-80 transition-opacity scale-95 active:transition-transform text-on-surface">
<span class="material-symbols-outlined">qr_code_scanner</span>
</button>
</header>
<!-- Main Content Canvas -->
<main class="pt-24 pb-32 px-6 max-w-2xl mx-auto min-h-screen bg-surface">
<!-- Search & Filter Area -->
<div class="flex gap-3 mb-10">
<div class="flex-1 relative group">
<div class="absolute inset-y-0 left-4 flex items-center pointer-events-none text-on-surface-variant group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">search</span>
</div>
<input class="w-full bg-surface-container-lowest border-none rounded-xl py-4 pl-12 pr-4 text-on-surface placeholder:text-on-surface-variant/50 focus:ring-2 focus:ring-primary/20 transition-all font-body" placeholder="Search name, tag, or amount" type="text"/>
</div>
<button class="w-14 h-14 flex items-center justify-center bg-surface-container-high rounded-xl hover:bg-surface-bright transition-colors text-on-surface">
<span class="material-symbols-outlined">filter_list</span>
</button>
</div>
<!-- Activity Feed -->
<div class="space-y-12">
<!-- Group: This Month -->
<section>
<header class="mb-6 flex justify-between items-end">
<h2 class="text-on-surface-variant font-label text-sm font-semibold tracking-widest uppercase">This Month</h2>
<span class="text-primary-dim font-label text-xs">+$2,430.00 total</span>
</header>
<div class="space-y-2">
<!-- Transaction Item -->
<div class="group flex items-center justify-between p-4 rounded-xl bg-surface-container hover:bg-surface-container-high transition-all cursor-pointer">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-surface-container-highest flex items-center justify-center overflow-hidden">
<img alt="Logo" class="w-full h-full object-cover" data-alt="Minimalist abstract logo of a coffee company with clean lines and deep green tones on a dark background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDtNcYGSSG2B0oGXt_Qp5FahEOJEzJPxx1IO7FqYIIsyOxQfH44pDAbTP9vW4yT0bnzE3xca0mKm6Ibub7JK25dvo8lj8ti3dQK3JcE2_SNhCFF6ZX2Ad3i_L7D6-CsBmvUPqPB_icE-_5v6PjwOLrj6pt6i3AG_kJS2y-zNAhRiTpFiFSfSAFWRRMWx8UYgLiTEva2WEWTlqQ_ydPhc3i6kJ3fg7yfe9cIfR7_zXfMflWk855oTH2t2dTEYXiGFRdOjpqIBvR89A"/>
</div>
<div>
<p class="text-on-surface font-semibold font-body">Starbucks Coffee</p>
<p class="text-on-surface-variant text-sm font-body">Today, 8:45 AM</p>
</div>
</div>
<div class="text-right">
<p class="text-on-surface font-bold font-plus-jakarta">-$12.45</p>
<p class="text-primary-dim text-[10px] font-label font-bold tracking-tight">CASH COMPLETED</p>
</div>
</div>
<!-- Transaction Item -->
<div class="group flex items-center justify-between p-4 rounded-xl bg-surface-container hover:bg-surface-container-high transition-all cursor-pointer">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-secondary-container/30 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">person</span>
</div>
<div>
<p class="text-on-surface font-semibold font-body">Jordan Miller</p>
<p class="text-on-surface-variant text-sm font-body">Yesterday, 9:12 PM</p>
</div>
</div>
<div class="text-right">
<p class="text-primary font-bold font-plus-jakarta">+$450.00</p>
<p class="text-on-surface-variant text-[10px] font-label">FOR RENT</p>
</div>
</div>
<!-- Transaction Item -->
<div class="group flex items-center justify-between p-4 rounded-xl bg-surface-container hover:bg-surface-container-high transition-all cursor-pointer">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-surface-container-highest flex items-center justify-center overflow-hidden">
<img alt="Logo" class="w-full h-full object-cover" data-alt="Sleek branding of a modern sports apparel store with vibrant red accents on a dark metallic surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA61tQkKe-3EYU5mRgB0wF6rN8M3PFj4FRI_q8ckXG6l9Or6CIiwsDXC6ju5FewP7LFqiWTk79no5ZaDeJLWt0iUf0n7WIpBEH9DBOldh4Cgrd7zg_X-3qKwPGMidTLl-hakX1koJfNpw46IAao4t6E0soAc0KIMV5nkM04pfVj8FjDgwhmLPiNVX7dbplyICy904tdyUtEsOcfbpUHBAcxXtYSFsYkVqk2C8Qrd6XEGiIJzTbL9teflxUtw_U_XMnV_hlKHmmz_MU"/>
</div>
<div>
<p class="text-on-surface font-semibold font-body">Nike Store NYC</p>
<p class="text-on-surface-variant text-sm font-body">Oct 12, 2:30 PM</p>
</div>
</div>
<div class="text-right">
<p class="text-on-surface font-bold font-plus-jakarta">-$189.00</p>
<p class="text-on-surface-variant text-[10px] font-label">PENDING</p>
</div>
</div>
</div>
</section>
<!-- Group: Last Month -->
<section>
<header class="mb-6">
<h2 class="text-on-surface-variant font-label text-sm font-semibold tracking-widest uppercase">Last Month</h2>
</header>
<div class="space-y-2">
<!-- Transaction Item -->
<div class="group flex items-center justify-between p-4 rounded-xl bg-surface-container-low/50 hover:bg-surface-container-high transition-all cursor-pointer">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-surface-container-highest flex items-center justify-center overflow-hidden">
<img alt="Logo" class="w-full h-full object-cover" data-alt="Close-up of a high-end restaurant menu with elegant serif typography and warm moody lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQO7y4Rx5oeQRgGDwDtij-zgg5zzrmP3qw0sGZaYUgj1beDUdbwhcRr-QhRso3LQ26PgeiJNCgdRHVwK8gvGDitibmeJb1x52LOiiKRSTSDHVTskop_gZCuVKfdCv9zHsYWWz1cMq6UpoXPSp7scPuTksKKrxUOABZ4tPD9CI_3qGHKJpSxu5lUmNHqHx1lBWzTKugHPjZaP1biqmFUSxnunguKEgjKaEz4C4GkwR8nWxeKZFFxwYR3DCFc2JxLg2A4i6AeuYSU88"/>
</div>
<div>
<p class="text-on-surface font-semibold font-body">The Golden Grill</p>
<p class="text-on-surface-variant text-sm font-body">Sep 28, 7:15 PM</p>
</div>
</div>
<div class="text-right">
<p class="text-on-surface font-bold font-plus-jakarta">-$84.20</p>
<p class="text-on-surface-variant text-[10px] font-label">COMPLETED</p>
</div>
</div>
<!-- Transaction Item -->
<div class="group flex items-center justify-between p-4 rounded-xl bg-surface-container-low/50 hover:bg-surface-container-high transition-all cursor-pointer">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-primary-container/20 flex items-center justify-center text-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">account_balance</span>
</div>
<div>
<p class="text-on-surface font-semibold font-body">Direct Deposit</p>
<p class="text-on-surface-variant text-sm font-body">Sep 25, 3:00 AM</p>
</div>
</div>
<div class="text-right">
<p class="text-primary font-bold font-plus-jakarta">+$3,200.00</p>
<p class="text-primary-dim text-[10px] font-label font-bold tracking-tight">KINETIC CORP</p>
</div>
</div>
<!-- Transaction Item -->
<div class="group flex items-center justify-between p-4 rounded-xl bg-surface-container-low/50 hover:bg-surface-container-high transition-all cursor-pointer">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-surface-container-highest flex items-center justify-center overflow-hidden">
<img alt="Logo" class="w-full h-full object-cover" data-alt="Modern high-tech gadget on a dark minimalist background with soft atmospheric lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBC2ak39GHBXfg9qA7SXDgTm6MlSkKJXjvbDUazIY48a_TgAS_td49nkKVpFMj-9SvY7kevEMLJ8faowtK3LGPffFz63RRRRZiEK2zObbRxYc9O4DYdy_6mCVflTy6Rp9fZjbLwIftax6tmMgoG_tdEVtZYNBczvsjkd9Ok9KlHliI3hQSdbFkVMobg81G0-fLDFk-ITD97wL-OjVyvGBiURRTQl30dSuyRoeX_LxfBYkEd21HtXTfYdjTPjc6EWWMF_F-kzXgkCR4"/>
</div>
<div>
<p class="text-on-surface font-semibold font-body">Apple Store</p>
<p class="text-on-surface-variant text-sm font-body">Sep 20, 11:30 AM</p>
</div>
</div>
<div class="text-right">
<p class="text-on-surface font-bold font-plus-jakarta">-$1,299.00</p>
<p class="text-on-surface-variant text-[10px] font-label">COMPLETED</p>
</div>
</div>
</div>
</section>
</div>
<!-- Pagination/Load More Anchor -->
<div class="mt-12 mb-8 flex justify-center">
<button class="text-on-surface-variant font-label text-xs hover:text-primary transition-colors flex items-center gap-2">
<span>VIEW OLDER ACTIVITY</span>
<span class="material-symbols-outlined text-[14px]">expand_more</span>
</button>
</div>
</main>
<!-- BottomNavBar -->
<nav class="fixed bottom-0 left-0 w-full h-20 flex justify-around items-center px-8 pb-safe bg-zinc-900/80 backdrop-blur-2xl z-50 rounded-t-[3rem] shadow-[0_-10px_40px_-15px_rgba(34,197,94,0.1)] shadow-[0_-10px_40px_-15px_rgba(34,197,94,0.15)]">
<a class="flex flex-col items-center justify-center text-zinc-500 opacity-60 hover:text-primary transition-all" href="#">
<span class="material-symbols-outlined text-[28px]">account_balance</span>
</a>
<a class="flex flex-col items-center justify-center text-zinc-500 opacity-60 hover:text-primary transition-all" href="#">
<span class="material-symbols-outlined text-[28px]">payments</span>
</a>
<a class="flex flex-col items-center justify-center text-primary scale-110" href="#">
<span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">history</span>
</a>
</nav>
<!-- Floating Action Button - Only for transaction contexts -->
<div class="fixed bottom-24 right-6 z-40">
<button class="w-14 h-14 rounded-full bg-gradient-to-br from-primary to-primary-container text-on-primary-container shadow-[0_12px_24px_-8px_rgba(10,188,86,0.4)] flex items-center justify-center hover:scale-105 active:scale-95 transition-all">
<span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">add</span>
</button>
</div>
</body></html>