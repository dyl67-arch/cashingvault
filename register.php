<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Kinetic Vault - Create Account</title>
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
            color: #fbf8fc;
            -webkit-font-smoothing: antialiased;
        }
        .font-plus-jakarta { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="flex flex-col min-h-screen selection:bg-primary selection:text-on-primary">
<!-- TopAppBar -->
<header class="flex justify-between items-center px-6 py-4 w-full bg-transparent docked full-width top-0">
<button class="flex items-center justify-center w-12 h-12 rounded-full hover:opacity-80 transition-opacity bg-surface-container-high/50">
<span class="material-symbols-outlined text-on-surface" data-icon="close">close</span>
</button>
<div class="text-xl font-black tracking-tighter text-on-surface dark:text-[#fbf8fc] font-plus-jakarta">
            KINETIC VAULT
        </div>
<div class="w-12"></div> <!-- Spacer for centering title -->
</header>
<!-- Main Registration Content -->
<main class="flex-grow flex flex-col px-6 pt-8 pb-24 max-w-lg mx-auto w-full">
<!-- Welcome Header -->
<section class="mb-12">
<h1 class="font-plus-jakarta text-4xl md:text-5xl font-extrabold tracking-tight text-on-surface mb-2">
                Create Account
            </h1>
<p class="text-on-surface-variant font-body text-lg">
                Join the vault. Secure your digital wealth.
            </p>
</section>
<!-- Form Section in Bento-style Card -->
<div class="bg-surface-container rounded-xl p-1 shadow-2xl">
<div class="bg-surface-container-high rounded-xl p-6 md:p-8 space-y-8">
<!-- Full Name Input Group -->
<div class="space-y-2">
<label class="text-label-sm font-label font-semibold uppercase tracking-wider text-on-surface-variant ml-1">Full Name</label>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-on-surface-variant group-focus-within:text-primary transition-colors" data-icon="person">person</span>
</div>
<input class="w-full bg-surface-container-lowest border-none rounded-xl py-4 pl-12 pr-4 text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary/20 transition-all" placeholder="John Doe" type="text"/>
</div>
</div>
<!-- Email/Phone Input Group -->
<div class="space-y-2">
<label class="text-label-sm font-label font-semibold uppercase tracking-wider text-on-surface-variant ml-1">Email or Phone</label>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-on-surface-variant group-focus-within:text-primary transition-colors" data-icon="alternate_email">alternate_email</span>
</div>
<input class="w-full bg-surface-container-lowest border-none rounded-xl py-4 pl-12 pr-4 text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary/20 transition-all" placeholder="name@example.com" type="email"/>
</div>
</div>
<!-- Password Input Group -->
<div class="space-y-2">
<label class="text-label-sm font-label font-semibold uppercase tracking-wider text-on-surface-variant ml-1">Password</label>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-on-surface-variant group-focus-within:text-primary transition-colors" data-icon="lock">lock</span>
</div>
<input class="w-full bg-surface-container-lowest border-none rounded-xl py-4 pl-12 pr-12 text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary/20 transition-all" placeholder="••••••••" type="password"/>
<button class="absolute inset-y-0 right-0 pr-4 flex items-center text-on-surface-variant hover:text-on-surface">
<span class="material-symbols-outlined" data-icon="visibility">visibility</span>
</button>
</div>
</div>
<!-- Sign Up Button -->
<div class="pt-4">
<button class="w-full bg-gradient-to-br from-primary to-primary-container text-on-primary-container font-plus-jakarta font-bold text-lg py-5 rounded-xl shadow-[0_10px_30px_-5px_rgba(10,188,86,0.3)] hover:scale-[0.98] active:scale-95 transition-all duration-200">
                        Sign Up
                    </button>
</div>
</div>
</div>
<!-- Terms & Footer -->
<div class="mt-8 text-center px-4">
<p class="text-on-surface-variant text-sm font-body leading-relaxed">
                By signing up, you agree to our <a class="text-primary hover:underline" href="#">Terms of Service</a> and <a class="text-primary hover:underline" href="#">Privacy Policy</a>. We keep your kinetic data vaulted.
            </p>
</div>
<!-- Asymmetric Decorative Element -->
<div class="mt-auto pt-12 flex justify-center opacity-30">
<div class="relative w-full h-32 overflow-hidden rounded-xl bg-surface-container-low">
<div class="absolute -top-12 -left-12 w-48 h-48 bg-primary/20 blur-3xl rounded-full"></div>
<div class="absolute -bottom-12 -right-12 w-32 h-32 bg-tertiary/20 blur-3xl rounded-full"></div>
<div class="flex items-center justify-center h-full space-x-4">
<span class="material-symbols-outlined text-4xl text-surface-tint" data-icon="security" data-weight="fill" style="font-variation-settings: 'FILL' 1;">security</span>
<span class="font-plus-jakarta font-bold tracking-widest text-on-surface-variant">SECURE NODE-X</span>
</div>
</div>
</div>
</main>
<!-- BottomNavBar (Suppressed for focused registration flow, but included per JSON for Register state) -->
<!-- Applying "Register" as Active Navigation Tab -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-8 pb-8 pt-4 bg-surface-container-low/80 backdrop-blur-xl shadow-[0_-25px_50px_-12px_rgba(0,0,0,0.5)] rounded-t-[3rem]">
<!-- Sign In Tab (Inactive) -->
<a class="flex flex-col items-center justify-center text-gray-500 dark:text-gray-400 font-manrope text-label-md hover:bg-surface-bright dark:hover:bg-gray-800 rounded-full px-6 py-2 transition-all" href="#">
<span class="material-symbols-outlined mb-1" data-icon="login">login</span>
<span>Sign In</span>
</a>
<!-- Register Tab (Active) -->
<a class="flex flex-col items-center justify-center bg-[#22C55E]/10 text-[#22C55E] rounded-full px-6 py-2 font-manrope text-label-md spring-physics-active scale-98 transition-all" href="#">
<span class="material-symbols-outlined mb-1" data-icon="person_add" data-weight="fill" style="font-variation-settings: 'FILL' 1;">person_add</span>
<span>Register</span>
</a>
</nav>
<!-- Background Decoration -->
<div class="fixed inset-0 pointer-events-none -z-10 overflow-hidden">
<div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full translate-x-1/2 -translate-y-1/2"></div>
<div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-tertiary/5 blur-[100px] rounded-full -translate-x-1/4 translate-y-1/4"></div>
</div>
</body></html>