<?php
// 15 Soal SQL Dasar Berbentuk Soal Cerita Ringan
$questions = [
    [
        "id" => 1,
        "title" => "Misi 1: Daftar Seluruh Siswa",
        "story" => "Di ruang Tata Usaha, Pak Guru sedang kebingungan mencari data seluruh siswa baru. Ia meminta tolong kelompokmu untuk menampilkan semua data dari tabel <b>siswa</b>.",
        "answer" => "SELECT * FROM siswa"
    ],
    [
        "id" => 2,
        "title" => "Misi 2: Mencari Siswa Tertentu",
        "story" => "Ibu Guru ingin memeriksa data khusus milik seorang siswa yang memiliki nomor ID 2 (<code>id = 2</code>) di dalam tabel <b>siswa</b>. Bagaimana cara menampilkannya?",
        "answer" => "SELECT * FROM siswa WHERE id = 2"
    ],
    [
        "id" => 3,
        "title" => "Misi 3: Pendaftaran Murid Baru",
        "story" => "Seorang murid baru bernama 'Rian' mendaftar ke sekolah. Masukkan data namanya ke dalam tabel <b>siswa</b> (kolom <code>nama</code>).",
        "answer" => "INSERT INTO siswa (nama) VALUES ('Rian')"
    ],
    [
        "id" => 4,
        "title" => "Misi 4: Koreksi Nama Siswa",
        "story" => "Nama siswa yang memiliki ID 1 ternyata salah ketik dan harus diubah menjadi 'Siti' pada tabel <b>siswa</b>.",
        "answer" => "UPDATE siswa SET nama = 'Siti' WHERE id = 1"
    ],
    [
        "id" => 5,
        "title" => "Misi 5: Siswa Pindah Sekolah",
        "story" => "Siswa dengan ID 1 telah pindah sekolah dan datanya harus dihapus dari tabel <b>siswa</b>.",
        "answer" => "DELETE FROM siswa WHERE id = 1"
    ],
    [
        "id" => 6,
        "title" => "Misi 6: Pengecekan Stok Koperasi",
        "story" => "Pengurus koperasi sekolah ingin mengecek daftar seluruh barang dagangan yang ada di dalam tabel <b>barang</b>.",
        "answer" => "SELECT * FROM barang"
    ],
    [
        "id" => 7,
        "title" => "Misi 7: Barang Harga Spesifik",
        "story" => "Petugas koperasi ingin mencari barang di tabel <b>barang</b> yang harganya tepat 5000 (<code>harga = 5000</code>).",
        "answer" => "SELECT * FROM barang WHERE harga = 5000"
    ],
    [
        "id" => 8,
        "title" => "Misi 8: Menambah Barang Koperasi",
        "story" => "Koperasi kedatangan stok baru berupa 'Penggaris'. Masukkan nama barang tersebut ke dalam tabel <b>barang</b>.",
        "answer" => "INSERT INTO barang (nama) VALUES ('Penggaris')"
    ],
    [
        "id" => 9,
        "title" => "Misi 9: Penyesuaian Harga Barang",
        "story" => "Harga barang dengan ID 2 di tabel <b>barang</b> mengalami kenaikan menjadi 7000. Perbarui harganya!",
        "answer" => "UPDATE barang SET harga = 7000 WHERE id = 2"
    ],
    [
        "id" => 10,
        "title" => "Misi 10: Menghapus Barang Rusak",
        "story" => "Barang dengan ID 2 di tabel <b>barang</b> sudah rusak dan kedaluwarsa. Hapus data tersebut dari sistem!",
        "answer" => "DELETE FROM barang WHERE id = 2"
    ],
    [
        "id" => 11,
        "title" => "Misi 11: Direktori Pegawai Kantor",
        "story" => "Manajer HRD ingin melihat daftar seluruh pegawai yang bekerja di perusahaan melalui tabel <b>karyawan</b>.",
        "answer" => "SELECT * FROM karyawan"
    ],
    [
        "id" => 12,
        "title" => "Misi 12: Mencari Karyawan Bernama Agus",
        "story" => "Bagian administrasi mencari data karyawan di tabel <b>karyawan</b> yang memiliki nama 'Agus'.",
        "answer" => "SELECT * FROM karyawan WHERE nama = 'Agus'"
    ],
    [
        "id" => 13,
        "title" => "Misi 13: Pegawai Baru Masuk",
        "story" => "Perusahaan merekrut pegawai baru bernama 'Dewi'. Masukkan data tersebut ke dalam tabel <b>karyawan</b>.",
        "answer" => "INSERT INTO karyawan (nama) VALUES ('Dewi')"
    ],
    [
        "id" => 14,
        "title" => "Misi 14: Mutasi Jabatan Karyawan",
        "story" => "Karyawan dengan ID 3 dipindahkan posisinya menjadi bagian 'Keuangan' di tabel <b>karyawan</b>. Perbarui datanya!",
        "answer" => "UPDATE karyawan SET bagian = 'Keuangan' WHERE id = 3"
    ],
    [
        "id" => 15,
        "title" => "Misi 15: Pegawai Resign",
        "story" => "Pegawai dengan ID 3 telah resmi mengundurkan diri. Hapus data tersebut dari tabel <b>karyawan</b>.",
        "answer" => "DELETE FROM karyawan WHERE id = 3"
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Adventure - Game Edukasi SQL</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Canvas Confetti untuk efek meriah -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <style>
        .sql-console {
            background-color: #1e1e1e;
            color: #d4d4d4;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex flex-col justify-between selection:bg-indigo-500 selection:text-white">

    <!-- HEADER -->
    <header class="bg-slate-800 border-b border-slate-700 py-4 px-6 shadow-md">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="bg-indigo-600 text-white font-bold p-2 rounded-lg text-lg">⚡ SQL</div>
                <h1 class="text-xl font-bold tracking-wide text-white">SQL ADVENTURE</h1>
            </div>
            <div class="text-xs text-slate-400 bg-slate-900/60 px-3 py-1.5 rounded-lg border border-slate-700">
                Diskusi Kelompok (1 - 8)
            </div>
        </div>
    </header>

    <!-- MAIN CONTAINER -->
    <main class="max-w-3xl w-full mx-auto p-4 md:p-6 my-auto">

        <!-- HALAMAN 1: HOME -->
        <div id="home-screen" class="bg-slate-800 border border-slate-700 rounded-2xl p-8 shadow-xl text-center">
            <div class="inline-block bg-indigo-500/10 text-indigo-400 text-sm font-semibold px-4 py-1.5 rounded-full mb-4 border border-indigo-500/20">
                Belajar Query SQL Dasar phpMyAdmin
            </div>
            <h2 class="text-3xl font-extrabold text-white mb-3">Selamat Datang di SQL Adventure</h2>
            <p class="text-slate-400 mb-8 max-w-lg mx-auto text-sm leading-relaxed">
                Diskusikan soal cerita bersama kelompokmu, tulis query SQL dengan format dasar yang benar, dan kumpulkan poin terbanyak hingga ke puncak podium!
            </p>
            <button onclick="startGame()" class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3 px-8 rounded-xl shadow-lg transition duration-200 text-sm tracking-wide">
                Mulai Game 🚀
            </button>
        </div>

        <!-- HALAMAN 2: GAME AREA -->
        <div id="game-screen" class="hidden space-y-6">
            <!-- Progress & Info -->
            <div class="flex justify-between items-center text-xs text-slate-400 font-medium">
                <span id="level-indicator" class="bg-indigo-500/10 text-indigo-400 border border-indigo-500/20 px-3 py-1 rounded-md">Misi 1 dari 15</span>
                <span class="text-indigo-300 font-semibold">Selesaikan misi bersama kelompok</span>
            </div>

            <!-- Kartu Soal Cerita -->
            <div class="bg-slate-800 border border-slate-700 rounded-2xl p-6 shadow-lg">
                <h3 id="quest-title" class="text-lg font-bold text-indigo-400 mb-2"></h3>
                <p id="quest-story" class="text-slate-300 text-sm leading-relaxed"></p>
            </div>

            <!-- phpMyAdmin Style SQL Editor Box -->
            <div class="bg-slate-800 border border-slate-700 rounded-2xl overflow-hidden shadow-xl">
                <div class="bg-slate-900 px-4 py-2.5 border-b border-slate-700 flex justify-between items-center text-xs text-slate-400">
                    <span class="flex items-center space-x-1.5 font-mono">
                        <span class="w-2.5 h-2.5 rounded-full bg-red-500 inline-block"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-amber-500 inline-block"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 inline-block"></span>
                        <span class="ml-2">phpMyAdmin - Konsol SQL Editor</span>
                    </span>
                </div>
                <div class="p-4 space-y-4">
                    <!-- Pilihan Kelompok yang Menjawab untuk Soal Ini -->
                    <div class="flex items-center space-x-3 bg-slate-900/60 p-3 rounded-xl border border-slate-700/60">
                        <label for="answering-group" class="text-xs font-semibold uppercase tracking-wider text-indigo-300 whitespace-nowrap">Kelompok Penjawab:</label>
                        <select id="answering-group" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-slate-100 text-sm focus:outline-none focus:border-indigo-500">
                            <option value="Kelompok 1">Kelompok 1</option>
                            <option value="Kelompok 2">Kelompok 2</option>
                            <option value="Kelompok 3">Kelompok 3</option>
                            <option value="Kelompok 4">Kelompok 4</option>
                            <option value="Kelompok 5">Kelompok 5</option>
                            <option value="Kelompok 6">Kelompok 6</option>
                            <option value="Kelompok 7">Kelompok 7</option>
                            <option value="Kelompok 8">Kelompok 8</option>
                        </select>
                    </div>

                    <!-- Textarea dengan Placeholder Template -->
                    <textarea id="sql-input" rows="4" placeholder="contoh jawaban soal SELECT * FROM nama_tabel WHERE 1" class="sql-console w-full rounded-xl p-4 text-sm focus:outline-none resize-none border border-slate-700 focus:border-indigo-500"></textarea>
                    
                    <div class="flex justify-end">
                        <button onclick="submitQuery()" class="bg-emerald-600 hover:bg-emerald-500 text-white font-semibold py-2.5 px-6 rounded-xl shadow-md transition duration-200 text-sm flex items-center space-x-2">
                            <span>Jalankan Query</span>
                            <span>▶</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- HALAMAN 3: PODIUM & SELESAI -->
        <div id="finish-screen" class="hidden space-y-6">
            <div class="bg-slate-800 border border-slate-700 rounded-2xl p-6 shadow-xl text-center space-y-3">
                <div class="text-4xl">🏆</div>
                <h2 class="text-2xl font-bold text-white">Kompetisi Selesai!</h2>
                <p class="text-slate-300 text-sm">Berikut adalah panggung podium kehormatan dan perolehan poin akhir ke-8 kelompok:</p>
            </div>

            <!-- TAMPILAN PODIUM JUARA 1, 2, 3 -->
            <div id="podium-container" class="grid grid-cols-3 gap-3 items-end pt-4 pb-2">
                <!-- Juara 2 (Kiri) -->
                <div class="bg-slate-800 border border-slate-700 rounded-xl p-4 text-center flex flex-col justify-between h-36 shadow-lg">
                    <div>
                        <span class="text-xl">🥈</span>
                        <div class="text-xs text-slate-400 mt-1 uppercase font-semibold">Juara 2</div>
                        <div id="podium-2-name" class="font-bold text-slate-200 text-sm mt-1 truncate">-</div>
                    </div>
                    <div id="podium-2-score" class="text-indigo-400 font-extrabold text-lg">0 Poin</div>
                </div>
                <!-- Juara 1 (Tengah - Paling Tinggi) -->
                <div class="bg-indigo-950/60 border border-indigo-500/40 rounded-xl p-4 text-center flex flex-col justify-between h-44 shadow-2xl relative -top-2">
                    <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-amber-500 text-slate-950 text-[10px] font-extrabold px-2 py-0.5 rounded-full uppercase">
                        👑 Juara Utama
                    </div>
                    <div>
                        <span class="text-2xl">🥇</span>
                        <div class="text-xs text-indigo-300 mt-1 uppercase font-semibold">Juara 1</div>
                        <div id="podium-1-name" class="font-bold text-white text-base mt-1 truncate">-</div>
                    </div>
                    <div id="podium-1-score" class="text-amber-400 font-extrabold text-xl">0 Poin</div>
                </div>
                <!-- Juara 3 (Kanan) -->
                <div class="bg-slate-800 border border-slate-700 rounded-xl p-4 text-center flex flex-col justify-between h-32 shadow-lg">
                    <div>
                        <span class="text-xl">🥉</span>
                        <div class="text-xs text-slate-400 mt-1 uppercase font-semibold">Juara 3</div>
                        <div id="podium-3-name" class="font-bold text-slate-200 text-sm mt-1 truncate">-</div>
                    </div>
                    <div id="podium-3-score" class="text-amber-600 font-extrabold text-lg">0 Poin</div>
                </div>
            </div>

            <!-- TABEL PERINGKAT LENGKAP -->
            <div class="bg-slate-800 border border-slate-700 rounded-2xl p-5 shadow-xl">
                <h3 class="text-sm font-bold text-slate-300 mb-3 uppercase tracking-wider">Peringkat Lengkap Seluruh Kelompok</h3>
                <div class="space-y-2" id="full-ranking-list"></div>
            </div>

            <div class="text-center pt-2">
                <button onclick="location.reload()" class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-2.5 px-6 rounded-xl text-sm transition">
                    Main Lagi 🔄
                </button>
            </div>
        </div>

    </main>

    <!-- POP-UP MODAL NOTIFIKASI -->
    <div id="modal-popup" class="fixed inset-0 bg-black/70 backdrop-blur-sm hidden flex items-center justify-center p-4 z-50">
        <div class="bg-slate-800 border border-slate-700 rounded-2xl max-w-sm w-full p-6 text-center shadow-2xl transform transition-all scale-95 opacity-0" id="modal-content">
            <div id="modal-icon" class="text-4xl mb-3">🎉</div>
            <h3 id="modal-title" class="text-lg font-bold text-white mb-2">Jawaban Benar!</h3>
            <p id="modal-desc" class="text-slate-300 text-sm mb-6">Poin berhasil ditambahkan ke kelompok.</p>
            <button onclick="closeModal()" id="modal-btn" class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-2.5 rounded-xl text-sm transition">
                Lanjut ke Misi Berikutnya
            </button>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="text-center py-4 text-xs text-slate-500 border-t border-slate-800">
        SQL Adventure • RIfani Rohman &copy; 2026
    </footer>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        const questions = <?php echo json_encode($questions); ?>;
        let currentQuestionIndex = 0;

        // Penyimpanan Skor 8 Kelompok
        let groupScores = {
            "Kelompok 1": 0,
            "Kelompok 2": 0,
            "Kelompok 3": 0,
            "Kelompok 4": 0,
            "Kelompok 5": 0,
            "Kelompok 6": 0,
            "Kelompok 7": 0,
            "Kelompok 8": 0
        };

        function startGame() {
            document.getElementById('home-screen').classList.add('hidden');
            document.getElementById('game-screen').classList.remove('hidden');
            loadQuestion();
        }

        function loadQuestion() {
            const q = questions[currentQuestionIndex];
            document.getElementById('level-indicator').textContent = `Misi ${currentQuestionIndex + 1} dari ${questions.length}`;
            document.getElementById('quest-title').textContent = q.title;
            document.getElementById('quest-story').innerHTML = q.story;
            
            // Kosongkan textarea agar placeholder "contoh jawaban soal..." terlihat bersih
            document.getElementById('sql-input').value = "";
        }

        function normalizeSQL(sql) {
            return sql
                .replace(/;/g, '')
                .replace(/\s+/g, ' ')
                .trim()
                .toLowerCase();
        }

        function submitQuery() {
            const userQuery = document.getElementById('sql-input').value;
            const correctAnswer = questions[currentQuestionIndex].answer;
            const selectedGroup = document.getElementById('answering-group').value;

            const isCorrect = normalizeSQL(userQuery) === normalizeSQL(correctAnswer);

            showModal(isCorrect, selectedGroup);
        }

        function showModal(isCorrect, group) {
            const modal = document.getElementById('modal-popup');
            const content = document.getElementById('modal-content');
            const icon = document.getElementById('modal-icon');
            const title = document.getElementById('modal-title');
            const desc = document.getElementById('modal-desc');
            const btn = document.getElementById('modal-btn');

            modal.classList.remove('hidden');
            setTimeout(() => {
                content.classList.remove('scale-95', 'opacity-0');
                content.classList.add('scale-100', 'opacity-100');
            }, 10);

            if (isCorrect) {
                groupScores[group] += 10;
                icon.textContent = "🎉";
                title.textContent = "Jawaban Benar!";
                title.className = "text-lg font-bold text-emerald-400 mb-2";
                desc.textContent = `${group} berhasil menjawab dengan benar! (+10 Poin)`;
                btn.className = "w-full bg-emerald-600 hover:bg-emerald-500 text-white font-semibold py-2.5 rounded-xl text-sm transition";
                
                confetti({
                    particleCount: 100,
                    spread: 70,
                    origin: { y: 0.6 }
                });
            } else {
                icon.textContent = "❌";
                title.textContent = "Sintaks Belum Tepat";
                title.className = "text-lg font-bold text-red-400 mb-2";
                desc.textContent = `Jawaban dari ${group} masih keliru. Silakan periksa kembali query SQL kalian.`;
                btn.className = "w-full bg-red-600 hover:bg-red-500 text-white font-semibold py-2.5 rounded-xl text-sm transition";
            }
        }

        function closeModal() {
            const modal = document.getElementById('modal-popup');
            const content = document.getElementById('modal-content');

            content.classList.remove('scale-100', 'opacity-100');
            content.classList.add('scale-95', 'opacity-0');

            setTimeout(() => {
                modal.classList.add('hidden');
                
                const titleText = document.getElementById('modal-title').textContent;
                if (titleText.includes("Benar")) {
                    currentQuestionIndex++;
                    if (currentQuestionIndex < questions.length) {
                        loadQuestion();
                    } else {
                        showFinishScreen();
                    }
                }
            }, 200);
        }

        function showFinishScreen() {
            document.getElementById('game-screen').classList.add('hidden');
            document.getElementById('finish-screen').classList.remove('hidden');

            let sortedGroups = Object.entries(groupScores).sort((a, b) => b[1] - a[1]);

            if (sortedGroups[0]) {
                document.getElementById('podium-1-name').textContent = sortedGroups[0][0];
                document.getElementById('podium-1-score').textContent = sortedGroups[0][1] + " Poin";
            }
            if (sortedGroups[1]) {
                document.getElementById('podium-2-name').textContent = sortedGroups[1][0];
                document.getElementById('podium-2-score').textContent = sortedGroups[1][1] + " Poin";
            }
            if (sortedGroups[2]) {
                document.getElementById('podium-3-name').textContent = sortedGroups[2][0];
                document.getElementById('podium-3-score').textContent = sortedGroups[2][1] + " Poin";
            }

            let rankingHTML = "";
            sortedGroups.forEach(([group, score], index) => {
                let badgeColor = "bg-slate-900 text-slate-300 border-slate-700";
                if (index === 0) badgeColor = "bg-amber-500/10 text-amber-400 border-amber-500/30 font-bold";
                else if (index === 1) badgeColor = "bg-slate-200/10 text-slate-200 border-slate-200/30";
                else if (index === 2) badgeColor = "bg-amber-700/10 text-amber-600 border-amber-700/30";

                rankingHTML += `
                    <div class="flex justify-between items-center px-4 py-2.5 rounded-xl border ${badgeColor} text-sm">
                        <div class="flex items-center space-x-3">
                            <span class="w-6 text-center font-bold">#${index + 1}</span>
                            <span>${group}</span>
                        </div>
                        <span class="font-extrabold">${score} Poin</span>
                    </div>
                `;
            });
            document.getElementById('full-ranking-list').innerHTML = rankingHTML;

            confetti({
                particleCount: 200,
                spread: 100,
                origin: { y: 0.4 }
            });
        }
    </script>
</body>
</html>