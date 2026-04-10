<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>The Kinetic Vault - Transfer</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&amp;family=Manrope:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
            background-color: #0e0e11;
            color: #fbf8fc;
            font-family: 'Manrope', sans-serif;
            overflow-x: hidden;
        }
        .kinetic-gradient {
            background: linear-gradient(135deg, #6bff8f 0%, #0abc56 100%);
        }
        .number-pad-btn {
            @apply flex items-center justify-center text-3xl font-headline font-semibold h-20 w-full rounded-xl transition-all active:scale-90 active:bg-surface-container-high;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head>
<body class="bg-background text-on-background selection:bg-primary/30">
<!-- Top Navigation Anchor (Manual for Task Specific Focus) -->
<header class="fixed top-0 w-full z-50 bg-zinc-950/80 backdrop-blur-xl flex justify-between items-center px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface-container-high overflow-hidden border border-outline-variant/20">
<img alt="User" class="w-full h-full object-cover" data-alt="Professional close-up portrait of a young man with a friendly expression, soft studio lighting, neutral background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWZQzdCi2ZzEh9_9WImRahDK6_HLEbaiIWWxqwul3ZVaAnkYxmRYixRIgv_RghpbS8Uni7UDX09Vqsf8Xd0C1BhYA0TN0wToDbttZaBT-LZXr-SKm_00tQ1FFowKdoLCsBETkMNyBV9NEGtXCbZtyKfv6arD9OUOwvo2-k4O7upnNLk6oE9AguywsN37CC0oalKNL_ALnyMwuO8Osz0IRYy_eq69BZTJiyQwik0tSIk2uw0sqeiv8HE3hUBFPlcQnXcCw4GRFqr6U"/>
</div>
<span class="text-xl font-bold tracking-tight text-green-400 font-headline">The Kinetic Vault</span>
</div>
<div class="p-2 rounded-full hover:bg-surface-container transition-colors">
<span class="material-symbols-outlined text-green-400">qr_code_scanner</span>
</div>
</header>
<main class="pt-24 pb-32 px-6 flex flex-col min-h-screen max-w-lg mx-auto">
<!-- Recipient Input (To: Field) -->
<div class="relative mb-12">
<div class="flex items-center gap-4 bg-surface-container-low p-4 rounded-xl group focus-within:bg-surface-container transition-all">
<span class="text-on-surface-variant font-headline font-bold text-lg">To:</span>
<input class="bg-transparent border-none focus:ring-0 w-full text-on-surface font-body text-lg placeholder:text-outline" placeholder="Name, $cashtag, or email" type="text"/>
<span class="material-symbols-outlined text-on-surface-variant">person_add</span>
</div>
</div>
<!-- Amount Display Area (The "Hole" in the Canvas) -->
<div class="flex-grow flex flex-col justify-center items-center py-10">
<div class="text-center group">
<div class="flex items-baseline justify-center gap-1">
<span class="text-primary font-headline text-5xl md:text-6xl font-bold">$</span>
<span class="text-on-surface font-headline text-8xl md:text-9xl font-extrabold tracking-tighter">0</span>
</div>
<div class="mt-4 inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-surface-container-high text-on-surface-variant text-sm font-label">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">lock</span>
<span>Secure Encryption Active</span>
</div>
</div>
</div>
<!-- Number Pad Grid -->
<div class="grid grid-cols-3 gap-y-2 gap-x-6 mb-10">
<button class="number-pad-btn text-on-surface">1</button>
<button class="number-pad-btn text-on-surface">2</button>
<button class="number-pad-btn text-on-surface">3</button>
<button class="number-pad-btn text-on-surface">4</button>
<button class="number-pad-btn text-on-surface">5</button>
<button class="number-pad-btn text-on-surface">6</button>
<button class="number-pad-btn text-on-surface">7</button>
<button class="number-pad-btn text-on-surface">8</button>
<button class="number-pad-btn text-on-surface">9</button>
<button class="number-pad-btn text-on-surface font-extrabold">.</button>
<button class="number-pad-btn text-on-surface">0</button>
<button class="number-pad-btn text-on-surface">
<span class="material-symbols-outlined text-3xl">backspace</span>
</button>
</div>
<!-- Action Buttons (Kinetic Triggers) -->
<div class="flex gap-4 w-full">
<button class="flex-1 h-16 rounded-xl bg-surface-container-highest text-primary font-headline font-bold text-lg hover:brightness-125 transition-all active:scale-95">
                Request
            </button>
<button class="flex-1 h-16 rounded-xl kinetic-gradient text-on-primary-container font-headline font-bold text-lg shadow-[0_10px_30px_-10px_rgba(10,188,86,0.4)] hover:brightness-110 transition-all active:scale-95">
                Pay
            </button>
</div>
</main>
<!-- Navigation Shell (Predictive Filter: Active on Payments) -->
<nav class="fixed bottom-0 left-0 w-full h-20 bg-zinc-900/80 backdrop-blur-2xl flex justify-around items-center px-8 pb-safe z-50 rounded-t-[3rem] shadow-[0_-10px_40px_-15px_rgba(34,197,94,0.1)]">
<a class="flex flex-col items-center justify-center text-zinc-500 opacity-60 hover:text-primary transition-all" href="#">
<span class="material-symbols-outlined text-2xl">account_balance</span>
</a>
<a class="flex flex-col items-center justify-center text-primary scale-125" href="#">
<span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">payments</span>
</a>
<a class="flex flex-col items-center justify-center text-zinc-500 opacity-60 hover:text-primary transition-all" href="#">
<span class="material-symbols-outlined text-2xl">history</span>
</a>
</nav>
<!-- Contextual Decorative Elements -->
<div class="fixed top-1/4 -right-20 w-64 h-64 bg-primary/5 blur-[120px] rounded-full pointer-events-none"></div>
<div class="fixed bottom-1/4 -left-20 w-64 h-64 bg-secondary/5 blur-[120px] rounded-full pointer-events-none"></div>
</body></html>