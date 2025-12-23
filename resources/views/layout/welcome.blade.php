<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel | Landing Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root { color-scheme: light; }
        body { font-family: 'Inter', system-ui, -apple-system, sans-serif; }
        .glass {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="min-h-screen bg-slate-950 text-slate-50">
    <header class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/30 via-purple-500/20 to-teal-400/20 blur-3xl"></div>
        <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/30 to-transparent"></div>

        <nav class="relative z-10 mx-auto flex max-w-6xl items-center justify-between px-6 py-5">
            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-indigo-500 text-xl font-bold shadow-lg shadow-indigo-500/40">BL</div>
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-200">Belajar Laravel</p>
                    <p class="text-sm text-slate-300">Bangun aplikasi modern lebih cepat</p>
                </div>
            </div>
            <div class="hidden items-center gap-8 text-sm font-medium text-slate-200 sm:flex">
                <a class="transition hover:text-white" href="#fitur">Fitur</a>
                <a class="transition hover:text-white" href="#demo">Demo</a>
                <a class="transition hover:text-white" href="#cta">Mulai</a>
                <a class="rounded-full border border-white/30 px-4 py-2 text-white transition hover:border-white hover:bg-white/10" href="https://laravel.com/docs" target="_blank" rel="noreferrer">Dokumentasi</a>
            </div>
        </nav>

        <div class="relative z-10 mx-auto flex max-w-6xl flex-col gap-10 px-6 pb-20 pt-8 sm:flex-row sm:items-center sm:pt-14">
            <div class="max-w-xl space-y-6">
                <p class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/5 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-indigo-100">Laravel Starter · Tailwind</p>
                <h1 class="text-4xl font-bold leading-tight text-white sm:text-5xl">
                    Bangun landing page elegan dengan <span class="text-indigo-200">Laravel</span> & Tailwind.
                </h1>
                <p class="text-lg text-slate-200">
                    Mulai proyek Anda dengan desain modern, responsif, dan siap produksi. Sempurna untuk MVP, company profile, ataupun kampanye produk.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#cta" class="rounded-full bg-indigo-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-500/40 transition hover:-translate-y-0.5 hover:bg-indigo-400">Mulai Sekarang</a>
                    <a href="#fitur" class="rounded-full border border-white/30 px-6 py-3 text-sm font-semibold text-white transition hover:-translate-y-0.5 hover:border-white hover:bg-white/10">Lihat Fitur</a>
                </div>
                <div class="flex items-center gap-4 text-sm text-slate-300">
                    <div class="flex -space-x-2">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-indigo-500 text-xs font-semibold">AZ</span>
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-fuchsia-500 text-xs font-semibold">RK</span>
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-teal-500 text-xs font-semibold">YM</span>
                    </div>
                    <p>Dipercaya oleh tim kecil & freelancer untuk memulai cepat.</p>
                </div>
            </div>
            <div class="relative w-full sm:w-auto sm:flex-1">
                <div class="absolute inset-0 translate-x-4 translate-y-6 rounded-3xl bg-gradient-to-br from-indigo-500/50 via-purple-500/40 to-teal-400/30 blur-3xl"></div>
                <div class="relative rounded-3xl border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/30 backdrop-blur">
                    <div class="flex items-center justify-between text-xs text-slate-300">
                        <div class="flex items-center gap-2">
                            <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-amber-400"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-rose-400"></span>
                            <p class="ml-2 text-slate-200">app/Http/Controllers</p>
                        </div>
                        <span class="rounded-full bg-white/10 px-3 py-1 text-[11px] font-semibold text-indigo-100">Laravel 11</span>
                    </div>
                    <div class="mt-6 space-y-3 rounded-2xl bg-slate-950/60 p-4 text-sm font-mono text-slate-100 ring-1 ring-white/10">
                        <p><span class="text-slate-500">$</span> php artisan make:controller LandingController</p>
                        <p><span class="text-slate-500">$</span> php artisan make:component Hero</p>
                        <p class="text-emerald-200">✔ Tailwind terpasang · Vite siap pakai</p>
                        <p class="text-indigo-100">🚀 Mulai kustomisasi & deploy</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="relative z-10 mx-auto max-w-6xl space-y-24 px-6 pb-20">
        <section id="fitur" class="space-y-8">
            <div class="flex items-center justify-between gap-4">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-200">Keunggulan</p>
                    <h2 class="text-3xl font-semibold text-white sm:text-4xl">Didesain untuk kecepat­an & kenyamanan</h2>
                </div>
                <a class="hidden text-sm font-semibold text-indigo-200 hover:text-white sm:inline-flex" href="#demo">Lihat demo →</a>
            </div>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="glass rounded-2xl p-6 shadow-lg">
                    <div class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-500/30 text-indigo-100">⚡</div>
                    <h3 class="text-lg font-semibold text-white">Instalasi cepat</h3>
                    <p class="mt-2 text-sm text-slate-200">Template ringan dengan Tailwind CDN—langsung jalan tanpa build berat.</p>
                </div>
                <div class="glass rounded-2xl p-6 shadow-lg">
                    <div class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-teal-500/30 text-teal-100">🛠️</div>
                    <h3 class="text-lg font-semibold text-white">Mudah dikustom</h3>
                    <p class="mt-2 text-sm text-slate-200">Struktur section jelas: hero, fitur, testimonial, CTA. Ganti teks & warna sesukamu.</p>
                </div>
                <div class="glass rounded-2xl p-6 shadow-lg">
                    <div class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-amber-500/30 text-amber-100">📱</div>
                    <h3 class="text-lg font-semibold text-white">Responsif</h3>
                    <p class="mt-2 text-sm text-slate-200">Tampilan rapi di mobile hingga desktop tanpa konfigurasi tambahan.</p>
                </div>
                <div class="glass rounded-2xl p-6 shadow-lg">
                    <div class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-fuchsia-500/30 text-fuchsia-100">🧭</div>
                    <h3 class="text-lg font-semibold text-white">Alur jelas</h3>
                    <p class="mt-2 text-sm text-slate-200">Copywriting berorientasi aksi dengan CTA yang menonjol untuk konversi.</p>
                </div>
                <div class="glass rounded-2xl p-6 shadow-lg">
                    <div class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-500/30 text-emerald-100">🔒</div>
                    <h3 class="text-lg font-semibold text-white">Praktik baik</h3>
                    <p class="mt-2 text-sm text-slate-200">Gunakan komponen Blade atau Laravel Breeze tanpa bentrok gaya.</p>
                </div>
                <div class="glass rounded-2xl p-6 shadow-lg">
                    <div class="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-xl bg-sky-500/30 text-sky-100">🚀</div>
                    <h3 class="text-lg font-semibold text-white">Siap produksi</h3>
                    <p class="mt-2 text-sm text-slate-200">Optimalkan warna & copy, sambungkan ke form lead atau API kirim email.</p>
                </div>
            </div>
        </section>

        <section id="demo" class="glass rounded-3xl p-10 shadow-2xl shadow-black/30 ring-1 ring-white/10">
            <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-200">Demo alur</p>
                    <h2 class="text-2xl font-semibold text-white sm:text-3xl">Buat halaman baru secepat 1-2-3</h2>
                    <p class="mt-2 max-w-2xl text-slate-200">Tambahkan route, controller, dan view—landing page ini bisa menjadi template dasar untuk halaman lain.</p>
                </div>
                <a class="rounded-full border border-white/30 px-5 py-2 text-sm font-semibold text-white transition hover:border-white hover:bg-white/10" href="https://laravel.com/docs/routing" target="_blank" rel="noreferrer">Baca Panduan →</a>
            </div>
            <div class="mt-8 grid gap-6 sm:grid-cols-3">
                <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-indigo-200">Langkah 1</p>
                    <h3 class="mt-2 font-semibold text-white">Tambah route</h3>
                    <p class="mt-2 text-sm text-slate-200">Atur `routes/web.php` untuk mengarah ke halaman landing.</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-indigo-200">Langkah 2</p>
                    <h3 class="mt-2 font-semibold text-white">Controller opsional</h3>
                    <p class="mt-2 text-sm text-slate-200">Kelola data dinamis seperti paket harga atau testimoni.</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-indigo-200">Langkah 3</p>
                    <h3 class="mt-2 font-semibold text-white">Deploy</h3>
                    <p class="mt-2 text-sm text-slate-200">Gunakan Forge, Vapor, atau VPS favorit untuk go-live.</p>
                </div>
            </div>
        </section>

        <section class="grid gap-8 rounded-3xl border border-white/5 bg-white/5 p-8 shadow-xl sm:grid-cols-2">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-200">Testimoni</p>
                <h2 class="mt-2 text-3xl font-semibold text-white">Tim kecil, hasil besar</h2>
                <p class="mt-3 text-slate-200">Landing page ini mempersingkat waktu bootstrap UI. Tinggal sambungkan ke backend, ubah teks, selesai.</p>
            </div>
            <div class="space-y-4">
                <div class="glass rounded-2xl p-5">
                    <p class="text-sm text-slate-100">“Kami pakai template ini untuk pre-launch produk SaaS. Setup < 1 jam sudah siap kirim ke calon user.”</p>
                    <div class="mt-3 text-sm font-semibold text-indigo-100">Raka · Founder Indie</div>
                </div>
                <div class="glass rounded-2xl p-5">
                    <p class="text-sm text-slate-100">“Desainnya clean, gampang diubah. Cocok untuk presentasi cepat ke klien.”</p>
                    <div class="mt-3 text-sm font-semibold text-indigo-100">Azel · Freelance Dev</div>
                </div>
            </div>
        </section>

        <section id="cta" class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-indigo-600 via-purple-600 to-teal-500 p-10 shadow-2xl shadow-black/30">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(255,255,255,0.25),_transparent_45%)]"></div>
            <div class="relative flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-100">Siap meluncur?</p>
                    <h2 class="text-3xl font-semibold text-white">Bangun halaman pertama Anda hari ini.</h2>
                    <p class="mt-2 max-w-2xl text-slate-100">Ganti copy, hubungkan form ke backend, dan kirim ke audiens Anda. Semua dasar sudah tersedia.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a class="rounded-full bg-white px-6 py-3 text-sm font-semibold text-slate-900 shadow-lg shadow-white/40 transition hover:-translate-y-0.5" href="mailto:halo@contoh.com">Hubungi Kami</a>
                    <a class="rounded-full border border-white/70 px-6 py-3 text-sm font-semibold text-white transition hover:-translate-y-0.5 hover:bg-white/10" href="https://github.com/laravel/laravel" target="_blank" rel="noreferrer">Lihat Kode</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-white/10 bg-slate-950/80 py-8 text-sm text-slate-400">
        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-6 sm:flex-row">
            <p>© {{ date('Y') }} Belajar Laravel. Dibuat untuk belajar dan eksperimen.</p>
            <div class="flex items-center gap-4">
                <a class="transition hover:text-white" href="https://laravel.com" target="_blank" rel="noreferrer">Laravel</a>
                <span class="h-4 w-px bg-white/20"></span>
                <a class="transition hover:text-white" href="https://tailwindcss.com" target="_blank" rel="noreferrer">Tailwind</a>
                <span class="h-4 w-px bg-white/20"></span>
                <a class="transition hover:text-white" href="https://github.com/laravel/laravel" target="_blank" rel="noreferrer">GitHub</a>
            </div>
        </div>
    </footer>
</body>
</html>