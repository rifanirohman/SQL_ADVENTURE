    <?php
$questions = [
    [
        "id" => 1,
        "title" => "Misi 1: Daftar Seluruh Siswa",
        "story" => "Di ruang Tata Usaha, Pak Guru sedang kebingungan mencari data seluruh siswa baru. Ia meminta tolong kelompokmu untuk menampilkan semua data dari tabel <b>siswa</b>.",
        "answer" => "SELECT * FROM siswa",
        "image" => "images/soal1.png"
    ],
    [
        "id" => 2,
        "title" => "Misi 2: Mencari Siswa Tertentu",
        "story" => "Ibu Guru ingin memeriksa data khusus milik seorang siswa yang memiliki nomor ID 2 (<code>id = 2</code>) di dalam tabel <b>siswa</b>. Bagaimana cara menampilkannya?",
        "answer" => "SELECT * FROM siswa WHERE id = 2",
        "image" => "images/soal2.png"
    ],
    [
        "id" => 3,
       "title" => "Misi 3: Pendaftaran Murid Baru",
        "story" => "Seorang murid baru bernama 'Rian' dengan nomer id '2' dan ia mendaftar ke kelas 'C'. Masukkan data id, nama, dan kelas ke dalam tabel <b>siswa</b> (kolom <code>id</code>, <code>nama</code>, <code>kelas</code>).",
        "answer" => "INSERT INTO siswa (id, nama, kelas) VALUES (2, 'Rian', 'C')",
        "image" => "images/soal3.png"
    ],
    [
        "id" => 4,
        "title" => "Misi 4: Koreksi Nama Siswa",
        "story" => "Seorang Siswa bernama 'Riska' pindah kelas dari kelas B ke kelas A. Perbarui datanya pada tabel <b>siswa</b>",
        "answer" => "UPDATE siswa SET kelas = 'A' WHERE nama = 'Riska' AND kelas = 'B'",
        "image" => "images/soal4.png"
    ],
    [
        "id" => 5,
        "title" => "Misi 5: Siswa Pindah Sekolah",
        "story" => "Ayah Charles dipindah tugas keluar negeri,jadi charles harus ikut dan pindah sekolah, maka data charles akan dihapus dari tabel <b>siswa</b>.",
        "answer" => "DELETE FROM siswa WHERE nama = 'Charles'",
        "image" => "images/soal5.png"
    ],
    [
        "id" => 6,
        "title" => "Misi 6: Pengecekan Stok Koperasi",
        "story" => "Bantu Pengurus Kopdes yang gaptek ini untuk mengecek daftar seluruh barang dagangan yang ada di dalam tabel <b>barang</b>.",
        "answer" => "SELECT * FROM barang",
        "image" => "images/soal6.png"
    ],
    [
        "id" => 7,
        "title" => "Misi 7: Barang Harga Spesifik",
        "story" => "Petugas kopdes ini ingin mencari barang di tabel <b>barang</b> yang harganya tepat 5000 (<code>harga = 5000</code>).",
        "answer" => "SELECT * FROM barang WHERE harga = 5000",
        "image" => "images/soal7.png"
    ],
    [
        "id" => 8,
        "title" => "Misi 8: Menambah Barang Koperasi",
        "story" => "Kopdes kedatangan stok baru berupa 'Penggaris' dengan jumlah 10 dengan harga 5000. Masukkan nama barang tersebut ke dalam tabel <b>barang</b>.",
        "answer" => "INSERT INTO barang (nama_barang, jumlah, harga) VALUES ('Penggaris', 10, 5000)",
        "image" => "images/soal8.png"
    ],
    [
        "id" => 9,
        "title" => "Misi 9: Penyesuaian Harga Barang",
        "story" => "Sedang terjadi krisis pembakaran hutan. jadi Kopdes berencana menaikkan Harga masker di tabel <b>barang</b> menjadi 20000. Perbarui harganya!",
        "answer" => "UPDATE barang SET harga = 20000 WHERE nama_barang = 'Masker'",
        "image" => "images/soal9.png"
    ],
    [
        "id" => 10,
        "title" => "Misi 10: Menghapus Barang Rusak",
        "story" => "LPG 3 KG di tabel <b>barang</b> sudah habis. Hapus data tersebut dari sistem!",
        "answer" => "DELETE FROM barang WHERE nama_barang = 'LPG 3 KG'",
        "image" => "images/soal10.png"
    ],
    [
        "id" => 11,
        "title" => "Misi 11: Direktori Pegawai Kantor",
        "story" => "Manajer HRD ingin melihat daftar seluruh pegawai yang bekerja di perusahaan melalui tabel <b>karyawan</b>.",
        "answer" => "SELECT * FROM karyawan",
        "image" => "images/soal11.png"
    ],
    [
        "id" => 12,
        "title" => "Misi 12: Mencari Karyawan Bernama Agus",
        "story" => "Bagian administrasi ingin mencari data karyawan di tabel <b>karyawan</b> yang memiliki nama 'Agus'.",
        "answer" => "SELECT * FROM karyawan WHERE nama = 'Agus'",
        "image" => "images/soal12.png"
    ],
    [
        "id" => 13,
        "title" => "Misi 13: Pegawai Baru Masuk",
        "story" => "Perusahaan merekrut pegawai baru bernama 'Dewi' dengan id = 8 dan posisi sebagai 'Admin'. Masukkan data tersebut ke dalam tabel <b>karyawan</b>.",
        "answer" => "INSERT INTO karyawan (id, nama, posisi) VALUES (8, 'Dewi', 'Admin')",
        "image" => "images/soal13.png"
    ],
    [
        "id" => 14,
        "title" => "Misi 14: Mutasi Jabatan Karyawan",
        "story" => "Karyawan dengan nama 'Rusdi' dipindahkan posisinya menjadi bagian 'Keuangan' di tabel <b>karyawan</b>. Perbarui datanya!",
        "answer" => "UPDATE karyawan SET bagian = 'Keuangan' WHERE nama = 'Rusdi'",
        "image" => "images/soal14.png"
    ],
    [
        "id" => 15,
        "title" => "Misi 15: Pegawai Resign",
        "story" => "Pegawai dengan nama 'Seto' telah resmi mengundurkan diri. Hapus data tersebut dari tabel <b>karyawan</b>.",
        "answer" => "DELETE FROM karyawan WHERE nama = 'Seto'",
        "image" => "images/soal15.png"
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
            <div id="editor-box" class="bg-slate-800 border border-slate-700 rounded-2xl overflow-hidden shadow-xl">
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
                        <button id="submit-btn" onclick="submitQuery()" class="bg-emerald-600 hover:bg-emerald-500 text-white font-semibold py-2.5 px-6 rounded-xl shadow-md transition duration-200 text-sm flex items-center space-x-2">
                            <span>Jalankan Query</span>
                            <span>▶</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- TAMPILAN TABEL HASIL QUERY (MUNCUL HANYA KETIKA BENAR) -->
            <div id="result-table-box" class="hidden bg-slate-800 border border-emerald-500/50 rounded-2xl p-6 shadow-xl space-y-4 animate-fade-in">
                <div class="flex items-center space-x-2 text-emerald-400 font-semibold text-sm">
                    <span>📊</span>
                    <span>Tampilan Data Tabel Hasil Query (Berhasil):</span>
                </div>
                
                <!-- Format Tempat Foto / Gambar Tabel Kosong -->
                <div class="border-2 border-dashed border-slate-700 rounded-xl p-4 bg-slate-900/80 text-center">
                    <img id="result-img" src="" alt="Tabel Hasil Query" class="mx-auto max-h-60 object-contain rounded-lg hidden">
                    <div id="image-placeholder" class="py-10 text-slate-400 text-xs italic">
                        🖼️ [ Format Foto Tabel Kosong ]<br>
                        <span class="text-slate-500 text-[11px]">Letakkan file gambar di folder /images sesuai nama file soal, atau gambar akan tampil otomatis di sini.</span>
                    </div>
                </div>

                <!-- Tombol Next ke Soal Berikutnya -->
                <button onclick="nextQuestion()" class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3 px-6 rounded-xl shadow-lg transition duration-200 text-sm flex items-center justify-center space-x-2">
                    <span>Lanjut ke Soal Berikutnya</span>
                    <span>➡️</span>
                </button>
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
                Lihat Hasil Tabel 📊
            </button>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="text-center py-4 text-xs text-slate-500 border-t border-slate-800">
        SQL Adventure •Rifani Rohman&copy; 2026
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
            
            // Reset input & sembunyikan kotak hasil tabel
            document.getElementById('sql-input').value = "";
            document.getElementById('sql-input').disabled = false;
            document.getElementById('submit-btn').disabled = false;
            document.getElementById('result-table-box').classList.add('hidden');
            document.getElementById('editor-box').classList.remove('opacity-50');
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
                btn.textContent = "Lihat Hasil Tabel 📊";
                
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
                btn.textContent = "Coba Lagi";
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
                    // Kunci editor dan tampilkan kotak hasil tabel di bawah soal
                    document.getElementById('sql-input').disabled = true;
                    document.getElementById('submit-btn').disabled = true;
                    document.getElementById('editor-box').classList.add('opacity-50');

                    // Setup gambar tabel jika file gambarnya ada
                    const q = questions[currentQuestionIndex];
                    const imgElement = document.getElementById('result-img');
                    const placeholderElement = document.getElementById('image-placeholder');

                    if (q.image) {
                        imgElement.src = q.image;
                        imgElement.onerror = function() {
                            // Jika file gambar belum ditambahkan oleh user, tampilkan placeholder
                            imgElement.classList.add('hidden');
                            placeholderElement.classList.remove('hidden');
                        };
                        imgElement.onload = function() {
                            imgElement.classList.remove('hidden');
                            placeholderElement.classList.add('hidden');
                        };
                    } else {
                        imgElement.classList.add('hidden');
                        placeholderElement.classList.remove('hidden');
                    }

                    // Tampilkan kotak tabel hasil query
                    document.getElementById('result-table-box').classList.remove('hidden');
                }
            }, 200);
        }

        function nextQuestion() {
            currentQuestionIndex++;
            if (currentQuestionIndex < questions.length) {
                loadQuestion();
            } else {
                showFinishScreen();
            }
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