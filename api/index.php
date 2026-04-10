<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
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
                    "tertiary-fixed": "#00e0fd",
                    "on-surface": "#fbf8fc",
                    "inverse-on-surface": "#555458",
                    "on-secondary": "#005e3a",
                    "surface-dim": "#0e0e11",
                    "surface": "#0e0e11",
                    "surface-tint": "#6bff8f",
                    "primary-container": "#0abc56",
                    "primary-fixed": "#6bff8f",
                    "outline": "#767578",
                    "surface-bright": "#2c2c30",
                    "surface-variant": "#25252a",
                    "surface-container": "#19191d",
                    "inverse-surface": "#fbf8fc",
                    "on-tertiary-fixed": "#00363e",
                    "tertiary": "#7de9ff",
                    "on-primary": "#005f28",
                    "on-tertiary": "#005561",
                    "secondary-dim": "#6beca9",
                    "tertiary-fixed-dim": "#00d1ec",
                    "tertiary-dim": "#00d1ec",
                    "surface-container-lowest": "#000000",
                    "secondary-fixed": "#7afbb7",
                    "on-error": "#450900",
                    "on-primary-container": "#002c0f",
                    "on-secondary-container": "#e1ffe9",
                    "surface-container-high": "#1f1f23",
                    "error-dim": "#d53d18",
                    "outline-variant": "#48474b",
                    "error": "#ff7351",
                    "primary": "#6bff8f",
                    "tertiary-container": "#00e0fd",
                    "on-primary-fixed": "#004a1d",
                    "error-container": "#b92902",
                    "primary-fixed-dim": "#5bf083",
                    "on-surface-variant": "#acaaae",
                    "on-error-container": "#ffd2c8",
                    "surface-container-highest": "#25252a",
                    "on-secondary-fixed-variant": "#006942",
                    "on-secondary-fixed": "#00492c",
                    "on-tertiary-fixed-variant": "#005561",
                    "secondary-container": "#006d44",
                    "surface-container-low": "#131316",
                    "secondary-fixed-dim": "#6beca9",
                    "background": "#0e0e11",
                    "on-primary-fixed-variant": "#006a2d",
                    "on-background": "#fbf8fc",
                    "on-tertiary-container": "#004b56",
                    "inverse-primary": "#006e2f",
                    "primary-dim": "#5bf083",
                    "secondary": "#7afbb7"
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
            font-family: 'Manrope', sans-serif;
        }
        .kinetic-gradient {
            background: linear-gradient(135deg, #6bff8f 0%, #0abc56 100%);
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-surface text-on-surface min-h-screen flex flex-col items-center">
<!-- Top Navigation Header (Suppressed main nav logic applied: Transactional focus) -->
<header class="flex justify-between items-center px-6 py-8 w-full max-w-2xl">
<button class="w-12 h-12 flex items-center justify-center rounded-full bg-surface-container hover:bg-surface-container-high transition-all active:scale-90">
<span class="material-symbols-outlined text-on-surface" data-icon="close">close</span>
</button>
<span class="font-headline text-xl font-black tracking-tighter text-on-surface">KINETIC VAULT</span>
<div class="w-12"></div> <!-- Spacer for symmetry -->
</header>
<main class="flex-1 w-full max-w-2xl px-6 flex flex-col justify-center pb-24">
<!-- Editorial Headline Area -->
<div class="mb-12">
<h1 class="font-headline text-display-lg text-6xl font-extrabold tracking-tight mb-2">Sign In</h1>
<p class="font-body text-on-surface-variant text-lg">Access your digital wealth vault instantly.</p>
</div>
<!-- Dynamic Input Section -->
<div class="space-y-6">
<div class="relative group">
<label class="block font-label text-sm font-semibold text-on-surface-variant mb-3 ml-1">Email or Phone Number</label>
<div class="relative">
<input class="w-full bg-surface-container-lowest border-none rounded-xl py-5 px-6 text-on-surface font-body text-lg focus:ring-2 focus:ring-primary/30 transition-all placeholder:text-on-surface-variant/30" placeholder="example@vault.com" type="text"/>
<div class="absolute right-6 top-1/2 -translate-y-1/2 opacity-20 group-focus-within:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-primary" data-icon="alternate_email">alternate_email</span>
</div>
</div>
</div>
<div class="relative group">
<label class="block font-label text-sm font-semibold text-on-surface-variant mb-3 ml-1">Password</label>
<div class="relative">
<input class="w-full bg-surface-container-lowest border-none rounded-xl py-5 px-6 text-on-surface font-body text-lg focus:ring-2 focus:ring-primary/30 transition-all placeholder:text-on-surface-variant/30" placeholder="••••••••" type="password"/>
<div class="absolute right-6 top-1/2 -translate-y-1/2 opacity-20 group-focus-within:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-primary" data-icon="lock">lock</span>
</div>
</div>
</div>
</div>
<!-- Action Area -->
<div class="mt-10 space-y-6">
<button class="kinetic-gradient w-full py-5 rounded-xl font-headline font-bold text-on-primary-container text-xl active:scale-[0.98] transition-transform shadow-[0_20px_40px_-10px_rgba(10,188,86,0.3)]">
                Continue
            </button>
<div class="flex flex-col items-center gap-4 pt-4">
<a class="font-label text-on-surface-variant hover:text-primary transition-colors text-sm font-medium" href="#">Forgot Password?</a>
<div class="w-full h-[1px] bg-surface-container-highest my-2"></div>
<p class="font-body text-on-surface-variant text-sm">
                    New to the Vault? 
                    <a class="text-primary font-bold ml-1 hover:underline underline-offset-4 decoration-2" href="#">Register</a>
</p>
</div>
</div>
<!-- Secondary Identity Accents -->
<div class="mt-16 grid grid-cols-2 gap-4">
<div class="bg-surface-container-low p-6 rounded-lg flex flex-col justify-between aspect-square">
<span class="material-symbols-outlined text-primary-fixed opacity-60 text-4xl" data-icon="fingerprint">fingerprint</span>
<p class="font-headline font-bold leading-tight">Touch ID<br/>Ready</p>
</div>
<div class="bg-surface-container-low p-6 rounded-lg flex flex-col justify-between aspect-square">
<span class="material-symbols-outlined text-tertiary opacity-60 text-4xl" data-icon="shield">shield</span>
<p class="font-headline font-bold leading-tight">Secure<br/>Layer 3</p>
</div>
</div>
</main>
<!-- Contextual Footer (Transactional) -->
<footer class="w-full max-w-2xl px-6 py-10 flex justify-center opacity-30">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-xs" data-icon="verified_user">verified_user</span>
<span class="font-label text-[10px] tracking-widest uppercase">Encrypted Session Terminal 042</span>
</div>
</footer>
<!-- BottomNavBar (Logic: This is a top-level destination portal) -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-8 pb-8 pt-4 bg-surface-container-low/80 backdrop-blur-xl shadow-[0_-25px_50px_-12px_rgba(0,0,0,0.5)] rounded-t-[3rem] md:hidden">
<a class="flex flex-col items-center justify-center bg-[#22C55E]/10 text-[#22C55E] rounded-full px-6 py-2 scale-98" href="#">
<span class="material-symbols-outlined" data-icon="login" style="font-variation-settings: 'FILL' 1;">login</span>
<span class="font-manrope text-label-md mt-1">Sign In</span>
</a>
<a class="flex flex-col items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-surface-bright transition-colors px-6 py-2 rounded-full" href="#">
<span class="material-symbols-outlined" data-icon="person_add">person_add</span>
<span class="font-manrope text-label-md mt-1">Register</span>
</a>
</nav>
<!-- Floating Background Aesthetics (High-end editorial feel) -->
<div class="fixed top-[-10%] right-[-5%] w-[400px] h-[400px] bg-primary/5 blur-[120px] pointer-events-none rounded-full"></div>
<div class="fixed bottom-[-10%] left-[-5%] w-[300px] h-[300px] bg-tertiary/5 blur-[100px] pointer-events-none rounded-full"></div>
</body></html>