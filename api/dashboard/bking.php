<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>The Kinetic Vault - My Cash</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Manrope:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
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
            "borderRadius": {
                    "DEFAULT": "1rem",
                    "lg": "2rem",
                    "xl": "3rem",
                    "full": "9999px"
            },
            "fontFamily": {
                    "headline": ["Plus Jakarta Sans"],
                    "body": ["Manrope"],
                    "label": ["Manrope"]
            }
          },
        },
      }
    </script>
<style>
      .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      }
      body {
        font-family: 'Manrope', sans-serif;
        background-color: #0e0e11;
        color: #fbf8fc;
      }
      .kinetic-gradient {
        background: linear-gradient(135deg, #6bff8f 0%, #0abc56 100%);
      }
      .glass-panel {
        background: rgba(37, 37, 42, 0.6);
        backdrop-filter: blur(20px);
      }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head>
<body class="bg-background text-on-surface min-h-screen pb-32">
<!-- TopAppBar Shell -->
<header class="bg-zinc-950/80 backdrop-blur-xl text-on-surface fixed top-0 w-full z-50 flex justify-between items-center px-6 py-4 w-full">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full overflow-hidden bg-surface-container-highest">
<img class="w-full h-full object-cover" data-alt="professional headshot of a young man with a friendly expression in high-key studio lighting with a neutral background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOQyn1Vw5vAz9QyMybnrdGopC8Bj86DsJex5pDzq21g74C4-wKtu1vRTQnrqaJ4u1uq0XvzYOYDZWcZ1nA926oLALXe8FTWCxiaqaJtB2gwoLcgDQ5IF4od52DAnpmHaLHp3eK_2nFmCqnhxzkdrJ49eKfa5lK6Sr3YFAIJ6Cw6O1tD-Q-x5zwZy4k4BiPx1RRPrHU-D_qik1GaspNDPz2HFB_rQmn3rkR4pVLixJUwejEL7uepGIqtRs3aZRZIQ9IxJnchy5BQ6I"/>
</div>
<span class="text-xl font-bold tracking-tight text-green-400 font-headline">The Kinetic Vault</span>
</div>
<button class="text-green-400 hover:opacity-80 transition-opacity active:transition-transform scale-95">
<span class="material-symbols-outlined text-2xl">qr_code_scanner</span>
</button>
</header>
<main class="pt-24 px-6 max-w-2xl mx-auto">
<!-- Hero Section: Total Balance -->
<section class="mb-12">
<p class="font-label text-on-surface-variant text-sm tracking-widest mb-2">TOTAL BALANCE</p>
<h1 class="font-headline text-6xl font-extrabold tracking-tighter text-on-surface">
                $42,850<span class="text-primary">.00</span>
</h1>
</section>
<!-- Kinetic Card Visual -->
<section class="mb-12">
<div class="relative w-full aspect-[1.586/1] rounded-xl overflow-hidden shadow-[0_20px_50px_-12px_rgba(0,255,100,0.15)] bg-surface-container-low group">
<div class="absolute inset-0 bg-gradient-to-br from-zinc-900 via-zinc-950 to-black"></div>
<div class="absolute inset-0 opacity-20" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuArmkCCI5500G1ZiqmtD9Hp4N9HLYHZUJSz8hzY2L4p5yYLDK0hGe6vY0OpkZF2_JueKBVqCIvszCoKBpFVbMtFb9pwHfAXND9asNNv71-ax0Fmv0KCeUwhzKfJ86YR6su4OnuQVTAo9dO6CVF1_bw72rxYvZg093grMYiZW49yZUY8kYLiUH_v8dX80yw7_fRTa0cXKkGlfK4IAOI3L_7Bl4Bsj96z3-SiFZjZG3dVEZHn_3LMrUgRnTX_0gBvot4wYJlC2O20mow');"></div>
<!-- Card Chip & Branding -->
<div class="absolute top-8 left-8">
<div class="w-12 h-10 bg-gradient-to-br from-yellow-500/40 to-yellow-700/20 rounded-md border border-yellow-500/20 mb-4"></div>
<p class="font-headline font-bold text-zinc-600 tracking-widest">KINETIC PLATINUM</p>
</div>
<div class="absolute bottom-8 left-8 right-8 flex justify-between items-end">
<div>
<p class="text-zinc-500 font-label text-xs mb-1">CASH TAG</p>
<p class="font-headline font-bold text-on-surface text-xl">$VAULT_USER</p>
</div>
<div class="flex flex-col items-end gap-4">
<!-- Card Lock Toggle -->
<div class="flex items-center gap-3 bg-surface-container-highest/50 p-2 pl-4 rounded-full border border-outline-variant/30 backdrop-blur-md">
<span class="text-xs font-bold text-on-surface-variant">LOCKED</span>
<div class="w-12 h-6 bg-surface-container-lowest rounded-full relative p-1 cursor-pointer">
<div class="w-4 h-4 bg-primary rounded-full shadow-[0_0_10px_rgba(107,255,143,0.5)]"></div>
</div>
</div>
<img class="h-6 w-auto opacity-60" data-alt="clean minimalist visa logo icon with metallic silver finish on dark background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAelUJO3_Jm4ZkPviHv70w1XmJ9f21Ph0YENyoKKcmWIRIhI17VryQIuWwRAO5KR2VxFwRn4thIoHLGH8ZKSa3ZgKL6r77d6Bc1dMsD8Bq2clHln6KsiDTQ6L5f4QJVbUzqqgCLU2QBPW0cjRObJnoSa5id5UtTkr6Q9JNK2CBb3H85fKaQwqIxtSZorgInCcE3vS0rIs7rda3oALZSEhQLA4582JuhxRUXb9eineKP2YHG375HqAxOr1ZBgJnqeLKnGK6CnO01SmE"/>
</div>
</div>
</div>
</section>
<!-- Quick Actions -->
<section class="grid grid-cols-2 gap-4 mb-12">
<button class="kinetic-gradient text-on-primary-container h-16 rounded-xl font-headline font-bold text-lg shadow-lg hover:opacity-90 active:scale-95 transition-all">
                Add Cash
            </button>
<button class="bg-surface-container-highest text-primary h-16 rounded-xl font-headline font-bold text-lg hover:bg-surface-bright active:scale-95 transition-all">
                Cash Out
            </button>
</section>
<!-- Asset Classes Bento Grid -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-12">
<!-- Cash -->
<div class="bg-surface-container rounded-lg p-6 flex flex-col justify-between h-44 hover:bg-surface-container-high transition-colors">
<div>
<span class="material-symbols-outlined text-primary mb-4 text-3xl">payments</span>
<p class="font-label text-on-surface-variant text-sm">Cash Balance</p>
</div>
<p class="font-headline text-2xl font-bold">$12,400.00</p>
</div>
<!-- Bitcoin -->
<div class="bg-surface-container rounded-lg p-6 flex flex-col justify-between h-44 hover:bg-surface-container-high transition-colors">
<div>
<span class="material-symbols-outlined text-tertiary mb-4 text-3xl">currency_bitcoin</span>
<p class="font-label text-on-surface-variant text-sm">Bitcoin</p>
</div>
<div class="flex flex-col">
<p class="font-headline text-2xl font-bold">$28,150.45</p>
<p class="text-primary text-xs font-bold">+4.2%</p>
</div>
</div>
<!-- Stocks -->
<div class="bg-surface-container rounded-lg p-6 flex flex-col justify-between h-44 hover:bg-surface-container-high transition-colors">
<div>
<span class="material-symbols-outlined text-secondary mb-4 text-3xl">monitoring</span>
<p class="font-label text-on-surface-variant text-sm">Stocks</p>
</div>
<div class="flex flex-col">
<p class="font-headline text-2xl font-bold">$2,299.55</p>
<p class="text-error text-xs font-bold">-0.8%</p>
</div>
</div>
</section>
<!-- Linked Accounts -->
<section class="mb-12">
<h2 class="font-headline text-xl font-bold mb-6 flex items-center gap-2">
                Linked Accounts
                <span class="h-[1px] flex-grow bg-outline-variant/30"></span>
</h2>
<div class="flex flex-col gap-2">
<!-- Debit Card -->
<div class="flex items-center justify-between p-5 bg-surface-container-low rounded-lg group cursor-pointer hover:bg-surface-container transition-colors">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-surface-container-highest flex items-center justify-center">
<span class="material-symbols-outlined text-on-surface-variant">credit_card</span>
</div>
<div>
<p class="font-headline font-semibold">Debit Card</p>
<p class="text-sm text-on-surface-variant font-label">Chase •••• 8812</p>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant group-hover:text-primary transition-colors">chevron_right</span>
</div>
<!-- Bank Account -->
<div class="flex items-center justify-between p-5 bg-surface-container-low rounded-lg group cursor-pointer hover:bg-surface-container transition-colors">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-surface-container-highest flex items-center justify-center">
<span class="material-symbols-outlined text-on-surface-variant">account_balance</span>
</div>
<div>
<p class="font-headline font-semibold">Bank Account</p>
<p class="text-sm text-on-surface-variant font-label">Bank of America</p>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant group-hover:text-primary transition-colors">chevron_right</span>
</div>
<!-- Add New -->
<div class="flex items-center gap-4 p-5 rounded-lg border-2 border-dashed border-outline-variant/30 mt-2 cursor-pointer hover:border-primary/50 transition-colors">
<div class="w-12 h-12 rounded-full bg-surface-container-lowest border border-outline-variant/20 flex items-center justify-center">
<span class="material-symbols-outlined text-primary">add</span>
</div>
<p class="font-headline font-bold text-primary">Link New Account</p>
</div>
</div>
</section>
</main>
<!-- BottomNavBar Shell -->
<nav class="bg-zinc-900/80 backdrop-blur-2xl fixed bottom-0 left-0 w-full h-20 flex justify-around items-center px-8 pb-safe z-50 rounded-t-[3rem] shadow-[0_-10px_40px_-15px_rgba(34,197,94,0.1)]"><!-- Banking -->
<div class="flex flex-col items-center justify-center text-zinc-500 hover:text-primary transition-all cursor-pointer">
<span class="material-symbols-outlined text-3xl">account_balance</span>
</div>
<!-- Pay & Request (Active/Center) -->
<div class="flex flex-col items-center justify-center text-primary scale-125 cursor-pointer">
<span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">paid</span>
</div>
<!-- Activity -->
<div class="flex flex-col items-center justify-center text-zinc-500 hover:text-primary transition-all cursor-pointer">
<span class="material-symbols-outlined text-3xl">history</span>
</div></nav>
</body></html>