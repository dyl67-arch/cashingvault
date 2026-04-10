<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>The Kinetic Vault - Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Manrope:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Manrope', sans-serif;
            -webkit-font-smoothing: antialiased;
            background-color: #0e0e11;
        }
        .headline-font {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .kinetic-gradient {
            background: linear-gradient(135deg, #6bff8f 0%, #0abc56 100%);
        }
        .glass-panel {
            background: rgba(37, 37, 42, 0.6);
            backdrop-filter: blur(20px);
        }
        /* Custom scrollbar for horizontal people list */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline": "#767578",
                        "surface-container-low": "#131316",
                        "secondary-fixed-dim": "#6beca9",
                        "primary-fixed": "#6bff8f",
                        "on-tertiary-fixed": "#00363e",
                        "primary-fixed-dim": "#5bf083",
                        "on-primary": "#005f28",
                        "error-dim": "#d53d18",
                        "surface-tint": "#6bff8f",
                        "surface-variant": "#25252a",
                        "tertiary-fixed-dim": "#00d1ec",
                        "on-surface": "#fbf8fc",
                        "tertiary-container": "#00e0fd",
                        "inverse-on-surface": "#555458",
                        "inverse-primary": "#006e2f",
                        "error-container": "#b92902",
                        "surface-container-high": "#1f1f23",
                        "surface-bright": "#2c2c30",
                        "on-secondary-fixed": "#00492c",
                        "on-primary-container": "#002c0f",
                        "secondary-fixed": "#7afbb7",
                        "background": "#0e0e11",
                        "tertiary-fixed": "#00e0fd",
                        "primary": "#6bff8f",
                        "on-tertiary-fixed-variant": "#005561",
                        "primary-container": "#00bc56",
                        "on-error": "#450900",
                        "secondary-container": "#006d44",
                        "secondary-dim": "#6beca9",
                        "on-tertiary": "#005561",
                        "tertiary": "#7de9ff",
                        "primary-dim": "#5bf083",
                        "inverse-surface": "#fbf8fc",
                        "tertiary-dim": "#00d1ec",
                        "surface-container-highest": "#25252a",
                        "outline-variant": "#48474b",
                        "on-primary-fixed": "#004a1d",
                        "surface-container-lowest": "#000000",
                        "on-secondary-container": "#e1ffe9",
                        "surface-dim": "#0e0e11",
                        "surface": "#0e0e11",
                        "error": "#ff7351",
                        "secondary": "#7afbb7",
                        "on-tertiary-container": "#004b56",
                        "on-error-container": "#ffd2c8",
                        "on-primary-fixed-variant": "#006a2d",
                        "on-background": "#fbf8fc",
                        "on-surface-variant": "#acaaae",
                        "on-secondary-fixed-variant": "#006942",
                        "surface-container": "#19191d",
                        "on-secondary": "#005e3a"
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
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background text-on-surface min-h-screen pb-32">
<!-- TopAppBar -->
<header class="bg-[#0e0e11] dark:bg-[#0e0e11] w-full top-0 z-50 sticky flex justify-between items-center px-6 py-4 w-full">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full overflow-hidden bg-surface-variant ring-2 ring-primary/20">
<img alt="User Profile" class="w-full h-full object-cover" data-alt="close-up portrait of a professional man with a friendly expression in a modern office environment with soft lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCS2EkGuu5tmlhKj9nrBbuGWNYE-kQuD_2Tj_A6vV_WIubJOn-VJso9_yrnpbtOolKeEW8lH3iOr7RAdHu0WlGlbmMgWxeyssAwsf5lOBZhv7at8tzruyRAqduF6SLtfl9yk2ns0RXWTzSPI_JAmN8IWzcXW6D5_GqezKmupSOOjHJHq6ZtSfBXu7MlwOZjR8dhVYj8mqTjr20eyTTuW0bXjLsM5ho7qLfoBh6UEgJvFNOsKgwOqDWOA6XKJEb8yzFcaJW3Ic4o4Xk"/>
</div>
<span class="text-xl font-black text-white dark:text-[#fbf8fc] tracking-tighter font-['Plus_Jakarta_Sans']">The Kinetic Vault</span>
</div>
<div class="flex items-center gap-4">
<button class="text-gray-500 hover:opacity-80 transition-opacity">
<span class="material-symbols-outlined text-2xl" data-icon="search">search</span>
</button>
<button class="text-green-400 hover:opacity-80 transition-opacity">
<span class="material-symbols-outlined text-2xl" data-icon="notifications">notifications</span>
</button>
</div>
</header>
<main class="max-w-md mx-auto px-6 mt-4 space-y-8">
<!-- Central Balance Section -->
<section class="relative">
<div class="bg-surface-container rounded-xl p-8 flex flex-col items-center justify-center text-center space-y-2 border border-outline-variant/10">
<span class="text-on-surface-variant font-label text-sm font-semibold tracking-wider uppercase">Cash Balance</span>
<h1 class="headline-font text-5xl font-extrabold text-on-surface tracking-tight">$1,250.75</h1>
<div class="flex items-center gap-2 bg-surface-container-highest px-4 py-1.5 rounded-full mt-4 group cursor-pointer active:scale-95 transition-transform duration-200">
<span class="text-primary font-body text-sm font-bold">$vault_king</span>
<span class="material-symbols-outlined text-on-surface-variant text-base" data-icon="content_copy">content_copy</span>
</div>
</div>
</section>
<!-- Action Buttons -->
<section class="grid grid-cols-2 gap-4">
<button class="kinetic-gradient text-on-primary-container h-16 rounded-xl flex items-center justify-center gap-2 font-headline font-bold text-lg active:scale-95 transition-transform duration-200">
<span class="material-symbols-outlined font-bold" data-icon="north_east">north_east</span>
                Send
            </button>
<button class="bg-surface-container-highest text-on-surface h-16 rounded-xl flex items-center justify-center gap-2 font-headline font-bold text-lg active:scale-95 transition-transform duration-200">
<span class="material-symbols-outlined font-bold" data-icon="south_west">south_west</span>
                Request
            </button>
</section>
<!-- People Section -->
<section class="space-y-4">
<div class="flex justify-between items-center">
<h2 class="headline-font text-lg font-bold text-on-surface">Recent People</h2>
<button class="text-primary text-sm font-bold">View all</button>
</div>
<div class="flex gap-6 overflow-x-auto no-scrollbar py-2">
<!-- Alex -->
<div class="flex flex-col items-center gap-2 flex-shrink-0">
<div class="w-16 h-16 rounded-full p-0.5 bg-gradient-to-tr from-primary to-transparent">
<img alt="Alex" class="w-full h-full object-cover rounded-full" data-alt="portrait of a young man with a slight smile, clean background, high-end photography style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDmxWbtnke03sVrLvjwhSmYMMjjRwBPY0LyZ0lrhlts19j-As4CyF2yueAUHrNuIwTjHSyd2G8U0okV5E1f5yG35VJaV_twpKRbNNgyLN0KeK8pXX6zMXbjfQJCNvRVRCJLYebp0FTWrfbzuAO4RIkm47CmOrWju7wdu9y9Oyzxg8icywFijjU3mea1t_8pQg8yTRVcC2iv5QTWQDZSJXgizvtxxrpwORbgGGoDE34SHup4-ZnPMbDxTX3SQEg-u7pLkmr745GagFU"/>
</div>
<span class="text-on-surface-variant font-label text-xs font-semibold">Alex</span>
</div>
<!-- Taylor -->
<div class="flex flex-col items-center gap-2 flex-shrink-0">
<div class="w-16 h-16 rounded-full p-0.5 bg-gradient-to-tr from-primary to-transparent">
<img alt="Taylor" class="w-full h-full object-cover rounded-full" data-alt="portrait of a young woman with long hair, vibrant energy, studio lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJACsmjswjBl-3AGYvuETxGxSLUyMU_2_4biVAa49rF20XLoud0Byi0ZHrErrL_A8o8-mdP0qvSVH12R9FaXXMkaZg6bNPDYwNZNhbDAnNg-B_ANGyRssys-J0bh-ZxXFVjdAeSgaGabMNcm5dPabGRll5ZjpmeztsvVMVBteUai1mq6np0sw5S2s6hdQ4EITz71_oJPsvz5uLmiWfgIe_oo27TRfFthui0o_9wizcIZTlcLOA67j1KUU1tzDxhtljx3R4qjJMRw0"/>
</div>
<span class="text-on-surface-variant font-label text-xs font-semibold">Taylor</span>
</div>
<!-- Jordan -->
<div class="flex flex-col items-center gap-2 flex-shrink-0">
<div class="w-16 h-16 rounded-full p-0.5 bg-gradient-to-tr from-primary to-transparent">
<img alt="Jordan" class="w-full h-full object-cover rounded-full" data-alt="medium shot of a man with sunglasses, urban background, cinematic mood" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxK8gnFctzYVgWM2freN3w3Aq4fdd6hwB12jF7SY30nUhUXf5eYg8dCmH8_44CKxHd1-S4bySZydqV6fHFc7EYztS0RS8yE1exFcAIL9M8ykmLaCKke-uHAOBsvyFDXjYQLTDW1MjwP6DJS2FDN2QK3ILWClF1LAY4mYf4GJoF-STBRw1Men20DmLKPTHV3S2d22Rk2CRPvIDn4wS2C04KfaS-IoQdlePLmW9PlqHz9l3UcX0J0zLugSJc37xl2yybEh_lXFdrQLc"/>
</div>
<span class="text-on-surface-variant font-label text-xs font-semibold">Jordan</span>
</div>
<!-- Morgan -->
<div class="flex flex-col items-center gap-2 flex-shrink-0">
<div class="w-16 h-16 rounded-full p-0.5 bg-gradient-to-tr from-primary to-transparent">
<img alt="Morgan" class="w-full h-full object-cover rounded-full" data-alt="close-up of a stylish woman with modern jewelry, soft afternoon light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDmtTMdfJmtZfpN1KhgiEsJiUyh0V7e91pFAjsKUEesBCK6-8EXYT_LVAyBUgKMSVLSY1NJwGkIpKLgd05AytgRrIiwvKN5j_RwGMDpiPfn0SnVrZoZ6mmupsOvFmirCQ9h6bBJHtBUVe30woths94b2_URiM7LW8bLa-otnijsoHYDEQGGwjtuXtULU9GOUGgrB8zap1nJp87Yp19hTOzksiKbztKHM3WKVsgcpQuYhs5ggN_uHXipYvP-duIvQgsdpdlOW3-9dWQ"/>
</div>
<span class="text-on-surface-variant font-label text-xs font-semibold">Morgan</span>
</div>
<!-- Casey -->
<div class="flex flex-col items-center gap-2 flex-shrink-0">
<div class="w-16 h-16 rounded-full p-0.5 bg-gradient-to-tr from-primary to-transparent">
<img alt="Casey" class="w-full h-full object-cover rounded-full" data-alt="portrait of a man with beard, neutral background, sharp focus" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBD0sSTfLD5iOv6MduNb_jOLkkzlOH9OQWPYhvxykfoS52zLr_32EuRNCWHvIPoz_BlPjGyQeYtVBfHxr1fmSBRzMEnLNr8ctzSnivhdfn2tMqNcdx7aW4q1rrD_NAbn33mIZKZFzzSQsJ96CU6hHYStbTtZzoJFVFGdM2N0UK31G-NHIqEGJ6wRw8DVtBvrSjngBmNnIDbarem5DcXhdh2d-88AI-DPZDAzHLfB4G3-hJVqdg6lMnIWlXStvuD_8c30SosMIt-fkM"/>
</div>
<span class="text-on-surface-variant font-label text-xs font-semibold">Casey</span>
</div>
</div>
</section>
<!-- Boost Section (Bento Inspired Card) -->
<section class="space-y-4">
<h2 class="headline-font text-lg font-bold text-on-surface">Vault Boosts</h2>
<div class="relative bg-surface-container-high rounded-xl overflow-hidden group p-6 border border-outline-variant/10">
<div class="flex justify-between items-start">
<div class="space-y-2 max-w-[65%]">
<h3 class="headline-font text-xl font-bold text-on-surface">Save with Cash Card</h3>
<p class="text-on-surface-variant text-sm font-body leading-relaxed">Apply now for instant discounts at your favorite local spots.</p>
<button class="mt-4 bg-primary/10 text-primary px-6 py-2 rounded-full text-sm font-bold active:scale-95 transition-all">Activate Boost</button>
</div>
<div class="w-16 h-16 kinetic-gradient rounded-2xl flex items-center justify-center rotate-6 shadow-[0_10px_20px_rgba(10,188,86,0.3)]">
<span class="material-symbols-outlined text-on-primary-container text-4xl" data-icon="attach_money" style="font-variation-settings: 'FILL' 1;">attach_money</span>
</div>
</div>
<!-- Abstract Accent Background -->
<div class="absolute -bottom-10 -right-10 w-32 h-32 bg-primary/5 rounded-full blur-3xl group-hover:bg-primary/10 transition-colors"></div>
</div>
</section>
<!-- Transaction History (Extra Contextual Section) -->
<section class="space-y-4">
<div class="flex justify-between items-center">
<h2 class="headline-font text-lg font-bold text-on-surface">Transactions</h2>
<span class="material-symbols-outlined text-on-surface-variant" data-icon="history">history</span>
</div>
<div class="space-y-3">
<div class="flex items-center justify-between p-4 bg-surface-container-low rounded-xl">
<div class="flex items-center gap-4">
<div class="w-10 h-10 bg-surface-container-highest rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-on-surface" data-icon="shopping_bag">shopping_bag</span>
</div>
<div>
<p class="font-headline font-bold text-sm">Apple Store</p>
<p class="text-on-surface-variant text-xs">Today, 2:45 PM</p>
</div>
</div>
<p class="font-headline font-bold text-on-surface">-$199.00</p>
</div>
<div class="flex items-center justify-between p-4 bg-surface-container-low rounded-xl">
<div class="flex items-center gap-4">
<div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-primary" data-icon="add_card">add_card</span>
</div>
<div>
<p class="font-headline font-bold text-sm">Transfer from Bank</p>
<p class="text-on-surface-variant text-xs">Yesterday</p>
</div>
</div>
<p class="font-headline font-bold text-primary">+$500.00</p>
</div>
</div>
</section>
</main>
<!-- BottomNavBar -->
<nav class="fixed bottom-0 w-full z-50 rounded-t-[3rem] bg-[#0e0e11]/80 dark:bg-[#0e0e11]/80 backdrop-blur-xl shadow-[0_25px_50px_-12px_rgba(0,0,0,0.5)] flex justify-around items-center px-8 pb-6 pt-3">
<!-- Dashboard (Active) -->
<a class="flex flex-col items-center justify-center bg-green-500/10 text-green-400 rounded-full p-3 scale-110 duration-300 ease-out" href="#">
<span class="material-symbols-outlined" data-icon="dashboard" style="font-variation-settings: 'FILL' 1;">dashboard</span>
</a>
<!-- Wallet -->
<a class="flex flex-col items-center justify-center text-gray-600 p-3 hover:text-green-300 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="account_balance_wallet">account_balance_wallet</span>
</a>
<!-- Swap -->
<a class="flex flex-col items-center justify-center text-gray-600 p-3 hover:text-green-300 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="swap_horiz">swap_horiz</span>
</a>
<!-- Profile -->
<a class="flex flex-col items-center justify-center text-gray-600 p-3 hover:text-green-300 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
</a>
</nav>
</body></html>