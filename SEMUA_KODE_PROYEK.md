# Kompilasi Lengkap Seluruh Kode & Dokumen Proyek

> Dokumen ini memuat seluruh kode program, konfigurasi, skema basis data, dan dokumentasi dari folder proyek `garuda baru` secara utuh tanpa pemotongan.

- **Tanggal Dibuat:** 2026-11-20 15:07:52
- **Total Berkas:** 25 file

---

## 1. Struktur Pohon Direktori (Tree Structure)

```text
garuda baru/
└── garudaHub/
    ├── .gitignore
    ├── CHANGELOG.md
    ├── CONTRIBUTING.md
    ├── LICENSE
    ├── README.md
    ├── SECURITY.md
    ├── docs/
    │   ├── APPROVED.md
    │   ├── architecture.md
    │   ├── decisions.md
    │   ├── salvage.md
    │   ├── tasks.md
    │   ├── archive/
    │   │   ├── .gitkeep
    │   │   ├── prototype-feedback.md
    │   │   └── spec.md
    │   └── user/
    │       ├── .gitkeep
    │       ├── admin.md
    │       ├── developer.md
    │       ├── klien.md
    │       └── README.md
    ├── prototype/
    │   ├── index.php
    │   └── mocks/
    │       ├── .gitkeep
    │       └── database.sql
    └── src/
        ├── .gitkeep
        ├── database.sql
        └── index.php
```

## 2. Ringkasan File & Navigasi Cepat (Daftar Isi)

| No | File / Relatif Path | Tipe / Bahasa | Ukuran | Jumlah Baris |
|:---|:---|:---|:---|:---|
| 1 | [garudaHub/.gitignore](#garudahub--gitignore) | `gitignore` | 316 B | 22 |
| 2 | [garudaHub/CHANGELOG.md](#garudahub-changelog-md) | `markdown` | 615 B | 15 |
| 3 | [garudaHub/CONTRIBUTING.md](#garudahub-contributing-md) | `markdown` | 1.1 KB | 25 |
| 4 | [garudaHub/docs/APPROVED.md](#garudahub-docs-approved-md) | `markdown` | 286 B | 7 |
| 5 | [garudaHub/docs/architecture.md](#garudahub-docs-architecture-md) | `markdown` | 8.0 KB | 82 |
| 6 | [garudaHub/docs/archive/.gitkeep](#garudahub-docs-archive--gitkeep) | `text` | 0 B | 0 |
| 7 | [garudaHub/docs/archive/prototype-feedback.md](#garudahub-docs-archive-prototype-feedback-md) | `markdown` | 285 B | 16 |
| 8 | [garudaHub/docs/archive/spec.md](#garudahub-docs-archive-spec-md) | `markdown` | 2.3 KB | 35 |
| 9 | [garudaHub/docs/decisions.md](#garudahub-docs-decisions-md) | `markdown` | 3.5 KB | 26 |
| 10 | [garudaHub/docs/salvage.md](#garudahub-docs-salvage-md) | `markdown` | 3.8 KB | 35 |
| 11 | [garudaHub/docs/tasks.md](#garudahub-docs-tasks-md) | `markdown` | 1.6 KB | 15 |
| 12 | [garudaHub/docs/user/.gitkeep](#garudahub-docs-user--gitkeep) | `text` | 0 B | 0 |
| 13 | [garudaHub/docs/user/admin.md](#garudahub-docs-user-admin-md) | `markdown` | 1.1 KB | 28 |
| 14 | [garudaHub/docs/user/developer.md](#garudahub-docs-user-developer-md) | `markdown` | 1.4 KB | 35 |
| 15 | [garudaHub/docs/user/klien.md](#garudahub-docs-user-klien-md) | `markdown` | 1.6 KB | 40 |
| 16 | [garudaHub/docs/user/README.md](#garudahub-docs-user-readme-md) | `markdown` | 1.9 KB | 43 |
| 17 | [garudaHub/LICENSE](#garudahub-license) | `text` | 1.1 KB | 21 |
| 18 | [garudaHub/prototype/index.php](#garudahub-prototype-index-php) | `php` | 24.8 KB | 358 |
| 19 | [garudaHub/prototype/mocks/.gitkeep](#garudahub-prototype-mocks--gitkeep) | `text` | 0 B | 0 |
| 20 | [garudaHub/prototype/mocks/database.sql](#garudahub-prototype-mocks-database-sql) | `sql` | 5.3 KB | 80 |
| 21 | [garudaHub/README.md](#garudahub-readme-md) | `markdown` | 2.3 KB | 67 |
| 22 | [garudaHub/SECURITY.md](#garudahub-security-md) | `markdown` | 1.2 KB | 22 |
| 23 | [garudaHub/src/.gitkeep](#garudahub-src--gitkeep) | `text` | 0 B | 0 |
| 24 | [garudaHub/src/database.sql](#garudahub-src-database-sql) | `sql` | 6.0 KB | 90 |
| 25 | [garudaHub/src/index.php](#garudahub-src-index-php) | `php` | 32.7 KB | 598 |

---

## 3. Isi Lengkap Seluruh Berkas & Kode Sumber

<a id="garudahub--gitignore"></a>
### 1. `garudaHub/.gitignore`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\.gitignore`
- **Tipe / Format:** `gitignore`
- **Ukuran:** 316 bytes (0.31 KB)
- **Jumlah Baris:** 22 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```gitignore
# Rahasia
.env
.env.*
*.pem
*.key

# Dependensi & build
node_modules/
dist/
__pycache__/
.venv/

# Lokal Claude
.claude/settings.local.json

# Perkakas tim agen (tidak dipublikasikan)
.claude/
CLAUDE.md
SETUP.md

# Kunci jawaban celah untuk dosen (tidak dipublikasikan)
docs/VULNERABILITIES.md
```

---

<a id="garudahub-changelog-md"></a>
### 2. `garudaHub/CHANGELOG.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\CHANGELOG.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 615 bytes (0.60 KB)
- **Jumlah Baris:** 15 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```markdown
# Changelog

Format mengikuti [Keep a Changelog](https://keepachangelog.com/id-ID/1.1.0/).

## [1.0.0] - 2026-10-25

### Ditambahkan
- Daftar dan login dengan peran klien, developer, admin (F1).
- Klien memasang proyek (F2).
- Daftar, pencarian, dan detail proyek beserta penawaran (F3).
- Developer mengajukan penawaran (F4).
- Klien memilih pemenang; proyek menjadi ditutup (F5).
- Dasbor "Proyek Saya" (klien) dan "Penawaran Saya" (developer) (F6).
- Panel admin untuk melihat, menghapus, dan mengubah peran user serta menghapus proyek (F7).
- Skema database dan data dummy di `src/database.sql`.
```

---

<a id="garudahub-contributing-md"></a>
### 3. `garudaHub/CONTRIBUTING.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\CONTRIBUTING.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 1,131 bytes (1.10 KB)
- **Jumlah Baris:** 25 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```markdown
# Panduan Kontribusi

Terima kasih atas minat Anda pada Garuda-Hub. Proyek ini untuk pembelajaran, jadi kesederhanaan lebih penting daripada fitur banyak.

## Cara berkontribusi

1. Fork repositori, lalu buat cabang baru dari `main`.
2. Lakukan perubahan kecil dan fokus.
3. Uji manual di komputer lokal (PHP 8.1+, `mysqli`, MySQL/MariaDB; lihat README).
4. Ajukan pull request dengan penjelasan singkat tentang apa dan mengapa.

## Aturan

- Aplikasi tetap terdiri dari dua berkas: `src/index.php` dan `src/database.sql`.
- Tanpa framework, tanpa CDN, tanpa dependensi tambahan.
- Antarmuka dan pesan memakai bahasa Indonesia.
- Pertahankan praktik standar: prepared statement, `htmlspecialchars`, token CSRF, `password_hash`/`password_verify`, cek peran dan kepemilikan di server.
- Hanya data dummy. Jangan menambahkan kredensial, kunci, atau data pribadi asli.
- Di luar cakupan: pembayaran, upload file, email/notifikasi, API.

## Isu

Laporkan bug atau usulan lewat GitHub Issues. Untuk celah keamanan, ikuti [SECURITY.md](SECURITY.md).

Kontribusi Anda dilisensikan di bawah lisensi MIT proyek ini.
```

---

<a id="garudahub-docs-approved-md"></a>
### 4. `garudaHub/docs/APPROVED.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\docs\APPROVED.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 286 bytes (0.28 KB)
- **Jumlah Baris:** 7 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```markdown
<!-- maks 20 baris. Hanya ditulis lewat /approve -->
# Persetujuan Prototype

- Mode: evolve
- Tanggal: 2026-10-25
- Fitur disetujui: F1, F2, F3, F4, F5, F6, F7
- Batasan: Kembangkan prototype (index.php + database.sql) ke src/. Modul auth (F1) wajib ditulis ulang meski evolve.
```

---

<a id="garudahub-docs-architecture-md"></a>
### 5. `garudaHub/docs/architecture.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\docs\architecture.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 8,219 bytes (8.03 KB)
- **Jumlah Baris:** 82 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```markdown
<!-- maks 120 baris -->
# Arsitektur – Garuda-Hub (fase build, mode evolve)

## 0. Rekomendasi mode
**evolve.** Struktur prototype sudah rapi: helper terpusat, routing `?page=`, stack sama dengan rencana final, dan praktik Opsi A sudah dipakai. Utang teknisnya kecil: skema belum punya UNIQUE/FK/ENUM, peran di sesi tidak diperbarui, dan ada race condition di F5. Sesuai aturan, F1 (auth) dan bagian data pribadi (tabel `users`, kelola user F7) ditulis ulang. Detail: `salvage.md`.

## 1. Stack final
- PHP 8.1+ native (`declare(strict_types=1)`), ekstensi `mysqli` + `mbstring`, MySQL 8 / MariaDB 10.5+ (InnoDB, utf8mb4).
- Tepat 2 file aplikasi: `src/index.php` (routing `?page=`, CSS inline, tanpa CDN/JS eksternal) dan `src/database.sql` (skema + data dummy).
- Kredensial DB dari `getenv('GH_DB_HOST|GH_DB_PORT|GH_DB_USER|GH_DB_PASS|GH_DB_NAME')`, tidak ada rahasia di repo.
- Tanpa framework, Composer, payment gateway, atau tes otomatis (spec). Verifikasi: `php -l` + uji manual per modul.
- **Modul = bagian berlabel di dalam `src/index.php`** (penanda `// ===== M<n>: <nama> =====`), ditambah `src/database.sql` sebagai M0. Karena semua modul ada di satu file, build harus **berurutan** (tanpa paralel) agar branch `modul/<nama>` tidak konflik.

## 2. Modul (urut berdasarkan ketergantungan)
| # | Modul (branch) | Fitur | Kesulitan | Bergantung pada |
| --- | --- | --- | --- | --- |
| M0 | `skema` – `src/database.sql` | F1–F7 (data) | rendah | – |
| M1 | `inti` – config, db, helper, layout, router, galat | semua | sedang | M0 |
| M2 | `auth` – sesi, CSRF, peran, daftar/masuk/keluar | F1 | tinggi | M1 |
| M3 | `proyek` – daftar/cari/detail, pasang proyek | F2, F3 | sedang | M2 |
| M4 | `lelang` – ajukan penawaran, pilih pemenang | F4, F5 | sedang | M3 |
| M5 | `dasbor` – proyek saya / penawaran saya | F6 | rendah | M4 |
| M6 | `admin` – kelola user & proyek | F7 | sedang | M2, M3 |

## 3. Kontrak antarmuka
Stub yang dibuat **lebih dulu** (di branch `modul/inti`): semua signature di bawah ini dengan isi `abort(501, 'Belum diimplementasikan.')`, plus peta rute lengkap. Setiap modul berikutnya hanya mengganti isi stub miliknya.

**Tipe/konstanta (M1):**
- `const ROLES = ['klien','developer','admin'];` · `const SELF_ROLES = ['klien','developer'];` · `const STATUS = ['terbuka','ditutup'];`
- User sesi: `array{id:int, nama:string, role:'klien'|'developer'|'admin'}`
- Baris proyek: kolom tabel `projects` (+ `klien:string`, `jml:int` jika di-join); baris bid: kolom `bids` (+ `dev:string`).
- Error domain dikembalikan sebagai `string` pesan bahasa Indonesia (`''` = sukses), bukan exception.

**M0 skema** (refactor dari `prototype/mocks/database.sql`):
- `users`: `email` **UNIQUE**, `role ENUM('klien','developer','admin')`, `password VARCHAR(255)`.
- `projects`: `status ENUM('terbuka','ditutup')`, FK `client_id → users(id) ON DELETE CASCADE`, CHECK `budget_max >= budget_min >= 0`, INDEX (`status`), (`client_id`).
- `bids`: FK `project_id → projects ON DELETE CASCADE`, FK `developer_id → users ON DELETE CASCADE`, **UNIQUE (`project_id`,`developer_id`)**, CHECK `harga>0 AND durasi>0`.
- Data dummy: hanya data fiktif, domain `example.com`, password = hash bcrypt (tanpa plaintext di komentar kecuali kredensial demo di README).

**M1 inti:**
- `db(): mysqli` · `q(string $sql, string $types = '', array $params = []): array|int` (selalu prepared statement)
- `tx(callable $fn): mixed` (begin → commit, rollback lalu lempar ulang bila ada exception)
- `e(mixed $v): string` · `rp(int|string $n): string` · `go(string $url): never` (hanya URL relatif `?page=...`)
- `flash(?string $msg = null, string $type = 'ok'): ?array` · `status_badge(string $s): string`
- `render(string $title, string $body, int $code = 200): never` · `abort(int $code, string $msg): never`
- Router: `ROUTES = ['home'=>['page_home',['GET']], 'project'=>…, 'register'=>…, 'login'=>…, 'logout'=>['page_logout',['POST']], 'post'=>…, 'bid'=>['page_bid',['POST']], 'pick'=>['page_pick',['POST']], 'dashboard'=>…, 'admin'=>…]`; metode lain → 405; rute tak dikenal → 404.
- Penanganan galat: `mysqli_sql_exception` dan `Throwable` → `error_log` + halaman 500 generik; `display_errors=0`.

**M2 auth (tulis ulang):**
- `session_boot(): void` – cookie `HttpOnly`, `SameSite=Lax`, `Secure` bila HTTPS, `session.use_strict_mode=1`; dipanggil sebelum router.
- `current_user(): ?array` – sesi hanya menyimpan `uid`; nama & peran **dimuat ulang dari DB** per request (user terhapus → sesi dihapus).
- `need_role(string ...$roles): array` – belum login → redirect `?page=login`; peran salah → 403.
- `csrf(): string` · `csrf_field(): string` · `check_csrf(): void` (semua POST, `hash_equals`).
- `auth_register(string $nama, string $email, string $pw, string $role): string` – role ∈ `SELF_ROLES`, password ≥ 6 karakter (keputusan pemilik), `password_hash(PASSWORD_DEFAULT)`; email duplikat ditangkap dari UNIQUE.
- `auth_login(string $email, string $pw): string` – `password_verify` (verifikasi hash dummy bila email tidak ada, agar waktu respons setara), `session_regenerate_id(true)`, `password_needs_rehash`.
- `auth_logout(): void` – hanya POST + CSRF.
- Handler: `page_register()`, `page_login()`, `page_logout()`.

**M3 proyek:** `project_find(int $id): ?array` · `project_list(string $cari): array` · `project_is_open(array $p): bool` (status `terbuka` dan `batas_lelang >= hari ini`) · `project_create(int $clientId, array $in): string` · handler `page_home()`, `page_project()`, `page_post()`.

**M4 lelang:** `bids_for_project(int $pid): array` · `bid_create(int $devId, int $pid, int $harga, int $durasi, string $proposal): string` · `bid_pick(int $clientId, int $pid, int $bidId): string` – di dalam `tx()` dengan `SELECT … FOR UPDATE` pada proyek, cek kepemilikan + status terbuka + bid milik proyek. Handler `page_bid()`, `page_pick()`.

**M5 dasbor:** `client_projects(int $uid): array` · `developer_bids(int $uid): array` · `page_dashboard()` (peran klien/developer).

**M6 admin (bagian user ditulis ulang):** `admin_set_role(int $actorId, int $uid, string $role): string` · `admin_delete_user(int $actorId, int $uid): string` · `admin_delete_project(int $pid): string` · `page_admin()`. Admin tidak bisa mengubah peran atau menghapus akun sendiri; hapus memakai FK CASCADE.

## 4. Threat model ringkas
Aset: hash password, email/nama user (dummy), sesi/peran, integritas proyek & pemenang lelang, kredensial DB (env).
Aktor: tamu, klien, developer, admin, penyerang luar (mahasiswa penguji di lokal).

| Modul | Ancaman utama | Mitigasi (Opsi A) |
| --- | --- | --- |
| M0 | Data ganda/yatim, kebocoran password | UNIQUE, FK CASCADE, ENUM/CHECK; hanya hash bcrypt dummy |
| M1 | SQLi, XSS, open redirect, bocor pesan galat | `q()` selalu prepared statement; `e()` di setiap output; `go()` hanya relatif; galat generik |
| M2 | Brute force, enumerasi user, fiksasi/pencurian sesi, CSRF, eskalasi peran saat daftar, sesi basi setelah peran diubah | `password_hash`, waktu respons setara, `regenerate_id`, flag cookie, CSRF semua POST, whitelist `SELF_ROLES`, muat ulang peran per request. Rate limit **tidak** dibuat (di luar cakupan, dicatat di VULNERABILITIES) |
| M3 | IDOR saat membuat proyek atas nama orang lain, XSS deskripsi, input tak valid | `client_id` dari sesi, bukan form; validasi panjang/tanggal/budget; `e()` + `nl2br` |
| M4 | Bid setelah ditutup, bid ganda, memilih pemenang di proyek orang lain, race dua pemenang | Cek `project_is_open` sisi server, UNIQUE bid, cek kepemilikan di SQL, transaksi + `FOR UPDATE` |
| M5 | Melihat data user lain | Query difilter `uid` dari sesi |
| M6 | Akses non-admin, CSRF aksi hapus, admin mengunci diri sendiri | `need_role('admin')`, CSRF, larangan aksi pada diri sendiri, whitelist `ROLES` |

## 5. Pembayaran
Di luar cakupan (spec). Tidak ada data kartu, tidak ada tabel atau form pembayaran. Jika kelak ditambah: wajib pakai tokenisasi payment gateway (form/hosted field milik gateway), server hanya menyimpan token/ID transaksi, dan data kartu tidak pernah menyentuh server.
```

---

<a id="garudahub-docs-archive--gitkeep"></a>
### 6. `garudaHub/docs/archive/.gitkeep`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\docs\archive\.gitkeep`
- **Tipe / Format:** `text`
- **Ukuran:** 0 bytes (0.00 KB)
- **Jumlah Baris:** 0 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

*(Berkas kosong / 0 bytes)*

---

<a id="garudahub-docs-archive-prototype-feedback-md"></a>
### 7. `garudaHub/docs/archive/prototype-feedback.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\docs\archive\prototype-feedback.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 285 bytes (0.28 KB)
- **Jumlah Baris:** 16 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```markdown
<!-- maks 30 baris. Pemilik: pemilik proyek (dirapikan orchestrator). Hanya status terkini; riwayat lama dihapus. Dibaca: prototyper, architect -->
# Feedback Prototype

Putaran: 0 dari 3

## ✅ Pertahankan
-

## ✏️ Ubah
-

## ❌ Batalkan
-

## ❓ Perlu jelas
-
```

---

<a id="garudahub-docs-archive-spec-md"></a>
### 8. `garudaHub/docs/archive/spec.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\docs\archive\spec.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 2,342 bytes (2.29 KB)
- **Jumlah Baris:** 35 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```markdown
<!-- maks ~1 halaman (60 baris). Pemilik: orchestrator. Dibaca: semua agen (reviewer: fitur terkait saja) -->
# Spesifikasi Produk – Garuda-Hub

## Tujuan
- Website lelang proyek IT: klien memasang proyek, developer menawar, klien memilih pemenang.
- Untuk **studi kasus pembelajaran keamanan** mahasiswa: aplikasi ditulis dengan **praktik PHP standar** (Opsi A, lihat `decisions.md`). Mahasiswa menganalisis kemungkinan celah via `docs/VULNERABILITIES.md`.
- Dipublikasikan di GitHub (lisensi MIT).

## Fitur
| ID | Fitur | Kriteria terima | Data sensitif? |
| --- | --- | --- | --- |
| F1 | Daftar & login | Peran klien, developer, admin; password di-hash (`password_hash`) | ya (dummy saja) |
| F2 | Klien memasang proyek | Judul, deskripsi, kategori, budget min–maks, batas lelang | tidak |
| F3 | Daftar, cari, detail proyek | Cari judul/kategori; detail menampilkan semua penawaran | tidak |
| F4 | Developer mengajukan penawaran | Harga, durasi (hari), proposal; hanya saat lelang terbuka | tidak |
| F5 | Klien memilih pemenang | Status proyek → ditutup, penawaran pemenang ditandai | tidak |
| F6 | Dasbor | Klien: "proyek saya"; developer: "penawaran saya" | tidak |
| F7 | Admin | Kelola (lihat/hapus/ubah peran) user dan proyek | ya (dummy saja) |

## Pendekatan keamanan (Opsi A)
- Kode memakai praktik standar: prepared statement, `htmlspecialchars`, token CSRF, `password_hash`/`password_verify`, cek peran & kepemilikan sisi server.
- Tidak ada sesi hardening keamanan tambahan. Analisis kemungkinan celah + status penanganannya untuk dosen: `docs/VULNERABILITIES.md` (**tidak diunggah ke GitHub**).

## Stack yang direncanakan
- PHP 8 native (tanpa framework), ekstensi mysqli, MySQL/MariaDB.
- Tepat 2 file aplikasi: `index.php` (routing `?page=`, CSS inline, tanpa CDN) dan `database.sql` (skema + data dummy).
- UI bahasa Indonesia. Tanpa payment gateway.

## Dokumen publik (GitHub)
- `README.md` (instalasi + peringatan "jangan dipasang di server publik"), `LICENSE` (MIT), `SECURITY.md`, `CONTRIBUTING.md`, `CHANGELOG.md`.
- Tidak diunggah: `.claude/`, `CLAUDE.md`, `SETUP.md`, `docs/VULNERABILITIES.md`.

## Di luar cakupan (out of scope)
- Pembayaran, escrow, upload file, email/notifikasi, API, tes otomatis.
- Sesi audit/hardening keamanan tambahan (cukup praktik standar).
```

---

<a id="garudahub-docs-decisions-md"></a>
### 9. `garudaHub/docs/decisions.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\docs\decisions.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 3,558 bytes (3.47 KB)
- **Jumlah Baris:** 26 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```markdown
<!-- satu baris per keputusan. Pemilik: siapa pun. Dibaca: architect, orchestrator -->
# Log Keputusan

| Tanggal | Keputusan | Alasan |
| --- | --- | --- |
| 2026-10-19 | Kode prototype di `prototype/`, kode final di `src/` | Hook dapat memblokir tulis ke `src/` sebelum gerbang `/approve` |
| 2026-10-25 | Repo git diinisialisasi (branch `main`) dengan `.gitignore` untuk rahasia | Build butuh branch `modul/<nama>` dan diff untuk reviewer |
| 2026-10-25 | prototyper/prototyper-lite tidak diberi pembatas tulis `prototype/` | Keputusan pemilik; `src/` dan `APPROVED.md` tetap dijaga `guard-project.sh` |
| 2026-10-25 | Garuda-Hub: lelang proyek IT, 1 `index.php` + 1 `database.sql`, sengaja tanpa pengamanan | Studi kasus pembelajaran keamanan mahasiswa (keputusan pemilik) |
| 2026-10-25 | Alur prototype/ → /approve → src/; lisensi MIT | Konfirmasi pemilik |
| 2026-10-25 | `.claude/`, `CLAUDE.md`, `SETUP.md`, `docs/VULNERABILITIES.md` di-.gitignore | Tidak dipublikasikan; mahasiswa mencari celah sendiri |
| 2026-10-25 | Opsi A: bangun aplikasi normal (tanpa sesi hardening keamanan). `index.php` gagal ditulis sebagai versi sengaja-rentan (terblokir filter) | Keputusan pemilik setelah penulisan versi rentan terhenti |
| 2026-10-25 | `VULNERABILITIES.md` = daftar kemungkinan celah + lokasi di kode (bahan analisis mahasiswa), memetakan kondisi kode nyata | Keputusan pemilik |
| 2026-10-25 | Kredensial DB dibaca dari env var (getenv), tidak di-hardcode di index.php | Mencegah rahasia ter-commit ke GitHub |
| 2026-10-25 | Password dummy di `database.sql` diganti hash bcrypt; app memakai `password_verify`, CSRF token sesi, prepared statement | Aplikasi normal sesuai Opsi A |
| 2026-10-25 | Gerbang dibuka: /approve evolve, fitur F1–F7 disetujui | Prototype berfungsi penuh & sesuai spec; auth (F1) tetap ditulis ulang |
| 2026-10-25 | Rekomendasi architect: evolve | Struktur prototype rapi, stack sama dengan rencana final, utang teknis kecil (skema tanpa constraint, peran sesi basi, race F5) |
| 2026-10-25 | Tetap 2 file; modul M0–M6 = `src/database.sql` + bagian berlabel di `src/index.php`, dibangun berurutan (tanpa paralel) | Patuh spec "tepat 2 file"; cegah konflik merge antar-branch `modul/<nama>` |
| 2026-10-25 | Data pribadi (tabel/dummy `users`, kelola user di F7) ikut ditulis ulang bersama F1 | Aturan keamanan CLAUDE.md |
| 2026-10-25 | Logout via POST + CSRF; peran dimuat ulang dari DB per request; password minimal 6 karakter (direvisi pemilik); skema pakai UNIQUE/FK CASCADE/ENUM | Praktik standar Opsi A, menutup celah yang ada di prototype (lihat `salvage.md`) |
| 2026-10-25 | Tanpa header X-Frame-Options/CSP (di luar Opsi A) | Keputusan pemilik via Telegram |
| 2026-10-25 | Password minimal tetap 6 karakter | Keputusan pemilik via Telegram |
| 2026-10-25 | Default DB root/password kosong dipertahankan bila env var kosong; README wajib beri peringatan | Keputusan pemilik via Telegram |
| 2026-10-25 | Tes integrasi dijalankan pada MariaDB lokal yang sudah ada (port 3306, DB garuda_hub, data dummy diimpor ulang dari `src/database.sql`); kredensial hanya lewat env var, tidak ditulis ke berkas | Izin pemilik via Telegram; 28 skenario alur + 9 skenario admin lulus |
| 2026-10-25 | Pemindaian security (Semgrep/gitleaks/ZAP) dilewati | Keputusan pemilik (dikonfirmasi di terminal); studi kasus pembelajaran, review per modul + tes integrasi sudah lulus |
| 2026-10-25 | Rilis disetujui pemilik; spec.md dan prototype-feedback.md dipindah ke docs/archive/ | Fase build selesai |
```

---

<a id="garudahub-docs-salvage-md"></a>
### 10. `garudaHub/docs/salvage.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\docs\salvage.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 3,935 bytes (3.84 KB)
- **Jumlah Baris:** 35 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```markdown
<!-- maks 60 baris -->
# Audit Salvage – prototype/ → src/ (mode evolve)

Acuan: `docs/spec.md` (F1–F7), kontrak di `docs/architecture.md`. Baris = `prototype/index.php` kecuali disebut lain.

| Bagian prototype | Lokasi | Modul | Keputusan | Alasan |
| --- | --- | --- | --- | --- |
| Skema `projects`, `bids` | `mocks/database.sql:18-40` | M0 | refactor | Kolom sudah sesuai F2/F4. Perlu ditambah FK CASCADE, ENUM status, CHECK, UNIQUE (project_id, developer_id), dan indeks |
| Skema + dummy `users` | `mocks/database.sql:9-16, 43-51` | M0 | **tulis ulang** | Data pribadi. Perlu email UNIQUE, role ENUM, `password` 255; dummy ditulis ulang tetap fiktif (`example.com`) |
| Dummy proyek & bid | `mocks/database.sql:54-80` | M0 | pertahankan | Fiktif dan konsisten dengan ID user dummy |
| Konfigurasi DB via `getenv` | 6-10 | M1 | pertahankan | Sudah sesuai keputusan 2026-10-25 |
| Helper `e`, `rp`, `flash`, `status_badge` | 15-21, 51 | M1 | pertahankan | Sederhana dan benar |
| `go()` | 17 | M1 | refactor | Batasi ke URL relatif `?page=` |
| `db()`, `q()` | 22-36 | M1 | refactor | Logika sudah benar (prepared statement). Tambah return type `array\|int` dan helper `tx()` dengan rollback |
| Layout `render()` + CSS inline | 53-97 | M1 | refactor | Pertahankan tampilan. Tambah parameter `$code`; tombol "Keluar" diganti form POST + CSRF |
| Router `switch` + catch galat | 99-105, 350-358 | M1 | refactor | Diganti peta `ROUTES` dengan batasan metode (405), tambah `abort()` dan penangkap `Throwable` |
| `session_start`, `user()`, `need_role()` | 4, 37-43 | M2 | **tulis ulang** | Auth (F1). Peran diambil dari sesi dan tidak diperbarui setelah admin mengubah peran atau menghapus user; flag cookie sesi belum diatur |
| CSRF `csrf`, `csrf_field`, `check_csrf` | 44-50, 102 | M2 | **tulis ulang** | Bagian dari auth. Konsep boleh dirujuk, tetapi kode ditulis ulang |
| Daftar (`register`) | 171-193 | M2 | **tulis ulang** | Auth + data pribadi. Password minimal 6 karakter (tetap seperti prototype); duplikat email ditangani lewat UNIQUE |
| Masuk (`login`) | 195-213 | M2 | **tulis ulang** | Auth. Respons belum setara waktu untuk email tak dikenal; tambah `password_needs_rehash` |
| Keluar (`logout`) via GET | 215-220 | M2 | **tulis ulang** | Rentan CSRF logout. Diganti POST + CSRF |
| Beranda/cari (`home`) | 107-128 | M3 | pertahankan | Sesuai F3, sudah memakai prepared statement + `e()`. Hanya dipindah ke `page_home()`/`project_list()` |
| Detail proyek (`project`) | 130-169 | M3/M4 | refactor | Logika benar. Dipecah ke `project_find`, `project_is_open`, `bids_for_project` |
| Pasang proyek (`post`) | 222-247 | M3 | pertahankan | Validasi F2 lengkap, `client_id` diambil dari sesi. Dipindah ke `project_create()` |
| Ajukan penawaran (`bid`) | 249-263 | M4 | refactor | Benar. Cek duplikat diganti/didukung UNIQUE; tangkap error duplikat dengan pesan ramah |
| Pilih pemenang (`pick`) | 265-280 | M4 | refactor | Ada race: cek status dilakukan di luar transaksi, dan tidak ada rollback. Pindahkan cek ke dalam `tx()` + `SELECT … FOR UPDATE` |
| Dasbor (`dashboard`) | 282-306 | M5 | pertahankan | Sesuai F6, query difilter `uid` |
| Admin: kelola user (ubah peran, hapus) | 308-324, 333, 335-342 | M6 | **tulis ulang** | Data pribadi (email user). Hapus manual diganti FK CASCADE; validasi peran ke `ROLES` |
| Admin: hapus/daftar proyek | 325-330, 334, 343-348 | M6 | refactor | Logika benar; cukup memakai CASCADE + `tx()` |
| Halaman 404 | 350-352 | M1 | pertahankan | Dipindah ke router |

## Catatan
- Pembayaran: tidak ada di prototype maupun spec, jadi tidak ada yang perlu di-salvage.
- `prototype/` tetap utuh sebagai arsip; builder menyalin bagian berlabel "pertahankan/refactor" ke `src/` per modul, bukan seluruh file sekaligus.
- Bagian "tulis ulang" tidak boleh disalin dari prototype. Builder menulisnya dari kontrak di `architecture.md` §3 (M2, M6).
```

---

<a id="garudahub-docs-tasks-md"></a>
### 11. `garudaHub/docs/tasks.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\docs\tasks.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 1,688 bytes (1.65 KB)
- **Jumlah Baris:** 15 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```markdown
<!-- satu baris per tugas. Pemilik: orchestrator. Dibaca: builder (barisnya saja), reviewer -->
# Daftar Tugas

Status: todo · proses · review · selesai · eskalasi
Penolakan: jumlah review blocking (0–3)

| ID | Modul | Fitur | Kesulitan | Status | Penolakan | Hasil review / catatan non-blocking |
| --- | --- | --- | --- | --- | --- | --- |
| T0 | skema (M0) `modul/skema` | F1–F7 data | rendah | selesai | 0 | Non-blocking: samakan COLLATE tabel (baris 18,35,50); proyek 5 terbuka tapi batas lewat (kasus uji); is_winner satu per proyek dijaga M4 |
| T1 | inti (M1) `modul/inti` + stub kontrak semua modul | semua | sedang | selesai | 0 | Non-blocking: index.php:31 regex pakai $ (terima \n akhir), ganti \z |
| T2 | auth (M2) `modul/auth` — ditulis ulang | F1 | tinggi | selesai | 0 | Non-blocking: auth_login ~195 cost seed 12 vs rehash default (selisih waktu kecil); alur DB F1 belum diuji manual (tanpa MySQL) |
| T3 | proyek (M3) `modul/proyek` | F2, F3 | sedang | selesai | 0 | Non-blocking: pasang date_default_timezone_set di inti; batas lelang lampau ditolak (tidak di spec); detail proyek 501 sampai M4 |
| T4 | lelang (M4) `modul/lelang` | F4, F5 | sedang | selesai | 0 | Non-blocking: bid_create tak mengunci baris proyek (TOCTOU kecil dgn pick); bid_pick tak cek affected rows |
| T5 | dasbor (M5) `modul/dasbor` | F6 | rendah | selesai | 0 | Admin mendapat 403 di dasbor (sesuai kontrak; tautan disembunyikan) |
| T6 | admin (M6) `modul/admin` — kelola user ditulis ulang | F7 | sedang | selesai | 0 | Non-blocking: race sempit dua admin saling menurunkan (catat di VULNERABILITIES); pesan "Peran user diubah" muncul walau tak berubah (~543) |
```

---

<a id="garudahub-docs-user--gitkeep"></a>
### 12. `garudaHub/docs/user/.gitkeep`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\docs\user\.gitkeep`
- **Tipe / Format:** `text`
- **Ukuran:** 0 bytes (0.00 KB)
- **Jumlah Baris:** 0 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

*(Berkas kosong / 0 bytes)*

---

<a id="garudahub-docs-user-admin-md"></a>
### 13. `garudaHub/docs/user/admin.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\docs\user\admin.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 1,111 bytes (1.08 KB)
- **Jumlah Baris:** 28 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```markdown
# Panduan Admin

Admin mengelola pengguna dan proyek. Masuk dengan akun berperan admin (lihat [README](README.md)). Setelah masuk, Anda langsung ke halaman **Admin**. Admin tidak memiliki menu Dasbor.

## Mengubah peran pengguna

1. Klik **Admin** di menu atas.
2. Di tabel **Kelola User**, cari pengguna yang dimaksud.
3. Pilih peran baru (klien, developer, atau admin) pada daftar pilihan di kolom **Aksi**.
4. Klik **Ubah**. Pesan "Peran user diubah." muncul.

## Menghapus pengguna

1. Di tabel **Kelola User**, klik **Hapus** pada baris pengguna.
2. Baca konfirmasi, lalu klik **OK**.
3. Pengguna dihapus bersama semua proyek dan penawarannya.

## Menghapus proyek

1. Di tabel **Kelola Proyek**, klik **Hapus** pada proyek.
2. Klik **OK** pada konfirmasi. Semua penawaran proyek itu ikut terhapus.
3. Klik judul proyek jika ingin melihat detailnya lebih dulu.

## Batasan

- Anda tidak bisa mengubah peran atau menghapus akun Anda sendiri (ditandai "(akun Anda)").
- Penghapusan tidak bisa dibatalkan.
- Hanya admin yang bisa membuka halaman ini; peran lain melihat galat 403.
```

---

<a id="garudahub-docs-user-developer-md"></a>
### 14. `garudaHub/docs/user/developer.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\docs\user\developer.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 1,388 bytes (1.36 KB)
- **Jumlah Baris:** 35 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```markdown
# Panduan Developer

Developer mengajukan penawaran pada proyek yang lelangnya terbuka. Sebelum mulai, daftar dan masuk sebagai **Developer** (lihat [README](README.md)).

## Mencari proyek

1. Buka halaman **Proyek**.
2. Ketik judul atau kategori di kotak pencarian, lalu klik **Cari**.
3. Klik judul proyek untuk melihat detail dan penawaran developer lain.

## Mengajukan penawaran

1. Buka proyek berstatus **terbuka** yang batas lelangnya belum lewat.
2. Di bagian **Ajukan Penawaran**, isi:
   - **Harga (Rp)**, angka bulat lebih dari 0
   - **Durasi (hari)**, 1 sampai 3650
   - **Proposal**, maksimal 5000 karakter
3. Klik **Kirim penawaran**.
4. Pesan "Penawaran berhasil dikirim." muncul dan penawaran Anda tampil di tabel.

Aturan:
- Satu developer hanya boleh satu penawaran per proyek. Penawaran yang sudah dikirim tidak bisa diubah atau ditarik.
- Jika lelang sudah ditutup atau batasnya lewat, formulir diganti pesan "Lelang sudah ditutup".

## Memantau penawaran Anda

1. Klik **Dasbor**.
2. Halaman **Penawaran Saya** menampilkan proyek, klien, harga, durasi, batas lelang, dan status proyek.
3. Label **Pemenang** muncul jika klien memilih penawaran Anda.

## Pesan galat

- "Anda sudah mengajukan penawaran pada proyek ini."
- "Lelang sudah ditutup; penawaran tidak dapat diajukan."
- "Harga harus bilangan bulat positif yang wajar."
```

---

<a id="garudahub-docs-user-klien-md"></a>
### 15. `garudaHub/docs/user/klien.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\docs\user\klien.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 1,681 bytes (1.64 KB)
- **Jumlah Baris:** 40 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```markdown
# Panduan Klien

Klien memasang proyek dan memilih developer pemenang. Sebelum mulai, daftar dan masuk sebagai **Klien** (lihat [README](README.md)).

## Memasang proyek

1. Klik **Pasang Proyek** di menu atas.
2. Isi:
   - **Judul** (maksimal 200 karakter)
   - **Deskripsi** (maksimal 5000 karakter)
   - **Kategori**, misalnya Web, Mobile, Desain, Data, AI (maksimal 50 karakter)
   - **Budget minimum** dan **Budget maksimum** dalam rupiah, angka bulat. Maksimum tidak boleh lebih kecil dari minimum.
   - **Batas lelang**, tanggal hari ini atau setelahnya.
3. Klik **Pasang proyek**.
4. Anda dibawa ke **Proyek Saya** dengan pesan "Proyek berhasil dipasang."

Jika ada isian yang salah, pesan galat muncul dan isian Anda tetap tersimpan di formulir.

## Memantau proyek Anda

1. Klik **Dasbor**.
2. Halaman **Proyek Saya** menampilkan setiap proyek Anda, statusnya, budget, batas lelang, dan jumlah penawaran.
3. Klik judul proyek untuk melihat penawaran yang masuk.

## Memilih pemenang

1. Buka proyek Anda yang berstatus **terbuka**.
2. Pada tabel **Penawaran**, bandingkan developer, harga, durasi, dan proposal.
3. Klik **Pilih pemenang** pada penawaran yang Anda inginkan.
4. Klik **OK** pada konfirmasi.
5. Status proyek berubah menjadi **ditutup** dan penawaran terpilih ditandai **Pemenang**.

Perhatikan:
- Pemenang hanya bisa dipilih satu kali dan tidak bisa diubah.
- Anda hanya bisa memilih pemenang untuk proyek milik Anda sendiri.
- Penawaran diurutkan dari harga terendah; pemenang selalu tampil paling atas.

## Mencari proyek lain

Gunakan kotak pencarian di halaman **Proyek**. Klien tidak bisa mengajukan penawaran.
```

---

<a id="garudahub-docs-user-readme-md"></a>
### 16. `garudaHub/docs/user/README.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\docs\user\README.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 1,969 bytes (1.92 KB)
- **Jumlah Baris:** 43 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```markdown
# Panduan Pengguna Garuda-Hub

Garuda-Hub adalah situs lelang proyek IT. Klien memasang proyek, developer mengajukan penawaran, lalu klien memilih pemenang. Aplikasi ini untuk belajar, jadi semua datanya fiktif.

## Pilih panduan sesuai peran

| Peran | Yang bisa dilakukan | Panduan |
| --- | --- | --- |
| Pengunjung (belum masuk) | Melihat dan mencari proyek, melihat penawaran | bagian di bawah |
| Klien | Memasang proyek, memilih pemenang, melihat "Proyek Saya" | [klien.md](klien.md) |
| Developer | Mengajukan penawaran, melihat "Penawaran Saya" | [developer.md](developer.md) |
| Admin | Mengelola pengguna dan proyek | [admin.md](admin.md) |

## Cara mulai

1. Buka alamat situs di peramban (untuk pemakaian lokal biasanya `http://localhost:8000`).
2. Klik **Daftar** di kanan atas.
3. Isi nama, email, dan password (6 sampai 72 karakter).
4. Pilih peran **Klien** atau **Developer**, lalu klik **Daftar**.
5. Klik **Masuk**, isi email dan password, lalu klik **Masuk**.
6. Untuk keluar, klik **Keluar** di kanan atas.

Akun admin tidak bisa dibuat lewat pendaftaran. Peran admin diberikan oleh admin lain atau lewat data awal aplikasi.

## Melihat dan mencari proyek (tanpa masuk)

1. Buka halaman **Proyek**. Daftar proyek tampil dari yang terbaru.
2. Ketik kata di kotak pencarian (judul atau kategori), lalu klik **Cari**.
3. Klik judul proyek untuk melihat deskripsi, budget, batas lelang, dan semua penawaran.

Status proyek:
- **terbuka**: penawaran masih bisa diajukan (selama batas lelang belum lewat).
- **ditutup**: pemenang sudah dipilih.

## Pesan galat yang umum

- "Token keamanan tidak valid": muat ulang halaman, lalu coba lagi.
- "Anda tidak berhak mengakses halaman ini": peran Anda tidak sesuai dengan halaman itu.
- "Email atau password salah": periksa kembali isian Anda.

## Catatan

Hanya gunakan data fiktif. Jangan memasukkan data pribadi atau password asli yang Anda pakai di tempat lain.
```

---

<a id="garudahub-license"></a>
### 17. `garudaHub/LICENSE`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\LICENSE`
- **Tipe / Format:** `text`
- **Ukuran:** 1,097 bytes (1.07 KB)
- **Jumlah Baris:** 21 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```text
MIT License

Copyright (c) 2026 Diksy M. Firmansyah

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

---

<a id="garudahub-prototype-index-php"></a>
### 18. `garudaHub/prototype/index.php`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\prototype\index.php`
- **Tipe / Format:** `php`
- **Ukuran:** 25,392 bytes (24.80 KB)
- **Jumlah Baris:** 358 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```php
<?php
// Garuda-Hub - prototype lelang proyek IT (PHP 8 + mysqli). Semua data dummy.
declare(strict_types=1);
session_start();

$DB_HOST = getenv('GH_DB_HOST') ?: '127.0.0.1';
$DB_PORT = (int)(getenv('GH_DB_PORT') ?: 3306);
$DB_USER = getenv('GH_DB_USER') ?: 'root';
$DB_PASS = getenv('GH_DB_PASS') ?: '';
$DB_NAME = getenv('GH_DB_NAME') ?: 'garuda_hub';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// ---------- helper ----------
function e($v): string { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
function rp($n): string { return 'Rp ' . number_format((int)$n, 0, ',', '.'); }
function go(string $url): never { header('Location: ' . $url); exit; }
function flash(?string $msg = null, string $type = 'ok'): ?array {
    if ($msg !== null) { $_SESSION['flash'] = [$msg, $type]; return null; }
    $f = $_SESSION['flash'] ?? null; unset($_SESSION['flash']); return $f;
}
function db(): mysqli {
    global $DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT;
    static $c = null;
    if ($c === null) { $c = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT); $c->set_charset('utf8mb4'); }
    return $c;
}
// Jalankan prepared statement; SELECT -> array baris, lainnya -> jumlah baris terpengaruh.
function q(string $sql, string $types = '', array $params = []) {
    $st = db()->prepare($sql);
    if ($types !== '') $st->bind_param($types, ...$params);
    $st->execute();
    $res = $st->get_result();
    if ($res instanceof mysqli_result) { $rows = $res->fetch_all(MYSQLI_ASSOC); $st->close(); return $rows; }
    $n = $st->affected_rows; $st->close(); return $n;
}
function user(): ?array { return $_SESSION['user'] ?? null; }
function need_role(string ...$roles): array {
    $u = user();
    if (!$u) { flash('Silakan login terlebih dahulu.', 'err'); go('?page=login'); }
    if (!in_array($u['role'], $roles, true)) { http_response_code(403); render('Akses ditolak', '<div class="card"><p>Anda tidak berhak mengakses halaman ini.</p></div>'); }
    return $u;
}
function csrf(): string { return $_SESSION['csrf'] ??= bin2hex(random_bytes(32)); }
function csrf_field(): string { return '<input type="hidden" name="csrf" value="' . e(csrf()) . '">'; }
function check_csrf(): void {
    if (!hash_equals(csrf(), (string)($_POST['csrf'] ?? ''))) {
        http_response_code(400); render('Permintaan tidak valid', '<div class="card"><p>Token formulir tidak valid. Muat ulang halaman dan coba lagi.</p></div>');
    }
}
function status_badge(string $s): string { return '<span class="badge ' . ($s === 'terbuka' ? 'open' : 'closed') . '">' . e($s) . '</span>'; }

function render(string $title, string $body): never {
    $u = user(); $f = flash();
    ?><!DOCTYPE html>
<html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= e($title) ?> - Garuda-Hub</title>
<style>
*{box-sizing:border-box}body{margin:0;font-family:system-ui,Segoe UI,Arial,sans-serif;background:#f4f6f8;color:#1f2933;line-height:1.5}
a{color:#0b5cad;text-decoration:none}a:hover{text-decoration:underline}
header{background:#7a1020;color:#fff}header .in{max-width:1000px;margin:auto;padding:12px 16px;display:flex;flex-wrap:wrap;align-items:center;gap:14px}
header a{color:#fff}header .brand{font-weight:700;font-size:1.3rem;margin-right:auto}
main{max-width:1000px;margin:20px auto;padding:0 16px}
.card{background:#fff;border-radius:8px;padding:18px;margin-bottom:16px;box-shadow:0 1px 3px rgba(0,0,0,.1)}
h1{font-size:1.5rem;margin:0 0 14px}h2{font-size:1.15rem;margin:0 0 10px}
label{display:block;margin:10px 0 4px;font-weight:600}
input,select,textarea{width:100%;padding:8px;border:1px solid #c5ccd3;border-radius:6px;font:inherit}
textarea{min-height:110px}
.btn,button{display:inline-block;background:#7a1020;color:#fff;border:0;border-radius:6px;padding:8px 16px;font:inherit;cursor:pointer}
.btn.sec,button.sec{background:#52606d}.btn.danger,button.danger{background:#b42318}.btn.sm,button.sm{padding:3px 10px;font-size:.85rem}
.btn:hover{text-decoration:none;opacity:.9}
table{width:100%;border-collapse:collapse}th,td{text-align:left;padding:8px;border-bottom:1px solid #e4e7eb;vertical-align:top}th{background:#f0f2f5}
.badge{padding:2px 9px;border-radius:12px;font-size:.8rem;color:#fff}.badge.open{background:#1a7f37}.badge.closed{background:#6b7280}.badge.win{background:#b7791f}
.flash{padding:10px 14px;border-radius:6px;margin-bottom:14px}.flash.ok{background:#d9f2e0}.flash.err{background:#fde2e0}
.muted{color:#6b7280;font-size:.9rem}.row{display:flex;gap:10px;flex-wrap:wrap}.row>*{flex:1;min-width:140px}
form.inline{display:inline}form.inline select{width:auto;padding:3px}
.winner{background:#fff8e1}.search{display:flex;gap:8px}.search input{flex:1}.search button{flex:none}
footer{text-align:center;color:#6b7280;font-size:.85rem;margin:30px 0}
</style></head><body>
<header><div class="in"><a class="brand" href="?page=home">Garuda-Hub</a>
<a href="?page=home">Proyek</a>
<?php if ($u): ?>
  <?php if ($u['role'] === 'klien'): ?><a href="?page=post">Pasang Proyek</a><?php endif; ?>
  <?php if ($u['role'] !== 'admin'): ?><a href="?page=dashboard">Dasbor</a><?php endif; ?>
  <?php if ($u['role'] === 'admin'): ?><a href="?page=admin">Admin</a><?php endif; ?>
  <span><?= e($u['nama']) ?> (<?= e($u['role']) ?>)</span>
  <a href="?page=logout">Keluar</a>
<?php else: ?><a href="?page=login">Masuk</a><a href="?page=register">Daftar</a><?php endif; ?>
</div></header>
<main>
<?php if ($f): ?><div class="flash <?= e($f[1]) ?>"><?= e($f[0]) ?></div><?php endif; ?>
<?= $body ?>
</main>
<footer>Garuda-Hub - prototype pembelajaran. Hanya data dummy; jangan dipasang di server publik.</footer>
</body></html><?php
    exit;
}

// ---------- routing ----------
$page = (string)($_GET['page'] ?? 'home');
$isPost = $_SERVER['REQUEST_METHOD'] === 'POST';
if ($isPost) check_csrf();

try {
    switch ($page) {

    case 'home': // F3
        $s = trim((string)($_GET['q'] ?? ''));
        if ($s !== '') {
            $like = '%' . $s . '%';
            $rows = q("SELECT p.*, u.nama AS klien, (SELECT COUNT(*) FROM bids b WHERE b.project_id=p.id) AS jml
                       FROM projects p JOIN users u ON u.id=p.client_id
                       WHERE p.judul LIKE ? OR p.kategori LIKE ? ORDER BY p.id DESC", 'ss', [$like, $like]);
        } else {
            $rows = q("SELECT p.*, u.nama AS klien, (SELECT COUNT(*) FROM bids b WHERE b.project_id=p.id) AS jml
                       FROM projects p JOIN users u ON u.id=p.client_id ORDER BY p.id DESC");
        }
        $h = '<div class="card"><h1>Daftar Proyek</h1><form class="search" method="get"><input type="hidden" name="page" value="home">'
           . '<input name="q" placeholder="Cari judul atau kategori..." value="' . e($s) . '"><button>Cari</button></form>'
           . ($s !== '' ? '<p class="muted">Hasil pencarian untuk: <b>' . e($s) . '</b> (' . count($rows) . ' proyek)</p>' : '') . '</div>';
        if (!$rows) $h .= '<div class="card"><p>Belum ada proyek yang cocok.</p></div>';
        foreach ($rows as $p) {
            $h .= '<div class="card"><h2><a href="?page=project&id=' . (int)$p['id'] . '">' . e($p['judul']) . '</a> ' . status_badge($p['status']) . '</h2>'
                . '<p class="muted">Kategori: ' . e($p['kategori']) . ' | Klien: ' . e($p['klien']) . ' | Budget: ' . rp($p['budget_min']) . ' - ' . rp($p['budget_max'])
                . ' | Batas: ' . e($p['batas_lelang']) . ' | ' . (int)$p['jml'] . ' penawaran</p>'
                . '<p>' . e(mb_strimwidth($p['deskripsi'], 0, 160, '...')) . '</p></div>';
        }
        render('Proyek', $h);

    case 'project': // F3 + form F4 + F5
        $id = (int)($_GET['id'] ?? 0);
        $r = q("SELECT p.*, u.nama AS klien FROM projects p JOIN users u ON u.id=p.client_id WHERE p.id=?", 'i', [$id]);
        if (!$r) { http_response_code(404); render('Tidak ditemukan', '<div class="card"><p>Proyek tidak ditemukan.</p></div>'); }
        $p = $r[0]; $u = user();
        $bids = q("SELECT b.*, u.nama AS dev FROM bids b JOIN users u ON u.id=b.developer_id WHERE b.project_id=? ORDER BY b.harga ASC", 'i', [$id]);
        $owner = $u && $u['role'] === 'klien' && (int)$u['id'] === (int)$p['client_id'];
        $open = $p['status'] === 'terbuka' && $p['batas_lelang'] >= date('Y-m-d');
        $h = '<div class="card"><h1>' . e($p['judul']) . ' ' . status_badge($p['status']) . '</h1>'
           . '<p class="muted">Kategori: ' . e($p['kategori']) . ' | Klien: ' . e($p['klien']) . ' | Budget: ' . rp($p['budget_min']) . ' - ' . rp($p['budget_max']) . ' | Batas lelang: ' . e($p['batas_lelang']) . '</p>'
           . '<p>' . nl2br(e($p['deskripsi'])) . '</p></div>';
        $h .= '<div class="card"><h2>Penawaran (' . count($bids) . ')</h2>';
        if (!$bids) $h .= '<p>Belum ada penawaran.</p>';
        else {
            $h .= '<table><tr><th>Developer</th><th>Harga</th><th>Durasi</th><th>Proposal</th><th></th></tr>';
            foreach ($bids as $b) {
                $h .= '<tr class="' . ($b['is_winner'] ? 'winner' : '') . '"><td>' . e($b['dev']) . ($b['is_winner'] ? ' <span class="badge win">Pemenang</span>' : '') . '</td>'
                    . '<td>' . rp($b['harga']) . '</td><td>' . (int)$b['durasi'] . ' hari</td><td>' . nl2br(e($b['proposal'])) . '</td><td>';
                if ($owner && $p['status'] === 'terbuka') {
                    $h .= '<form method="post" action="?page=pick" onsubmit="return confirm(\'Pilih penawaran ini sebagai pemenang?\')">' . csrf_field()
                        . '<input type="hidden" name="project_id" value="' . (int)$p['id'] . '"><input type="hidden" name="bid_id" value="' . (int)$b['id'] . '">'
                        . '<button class="sm">Pilih pemenang</button></form>';
                }
                $h .= '</td></tr>';
            }
            $h .= '</table>';
        }
        $h .= '</div>';
        if ($u && $u['role'] === 'developer') {
            if ($open) {
                $h .= '<div class="card"><h2>Ajukan Penawaran</h2><form method="post" action="?page=bid">' . csrf_field()
                    . '<input type="hidden" name="project_id" value="' . (int)$p['id'] . '">'
                    . '<div class="row"><div><label>Harga (Rp)</label><input type="number" name="harga" min="1" required></div>'
                    . '<div><label>Durasi (hari)</label><input type="number" name="durasi" min="1" required></div></div>'
                    . '<label>Proposal</label><textarea name="proposal" required></textarea><p><button>Kirim penawaran</button></p></form></div>';
            } else $h .= '<div class="card"><p class="muted">Lelang sudah ditutup; penawaran tidak dapat diajukan.</p></div>';
        } elseif (!$u && $open) {
            $h .= '<div class="card"><p><a href="?page=login">Masuk</a> sebagai developer untuk mengajukan penawaran.</p></div>';
        }
        render($p['judul'], $h);

    case 'register': // F1
        $err = ''; $v = ['nama' => '', 'email' => '', 'role' => 'klien'];
        if ($isPost) {
            $v = ['nama' => trim((string)($_POST['nama'] ?? '')), 'email' => trim((string)($_POST['email'] ?? '')), 'role' => (string)($_POST['role'] ?? '')];
            $pw = (string)($_POST['password'] ?? '');
            if ($v['nama'] === '' || mb_strlen($v['nama']) > 100) $err = 'Nama wajib diisi (maks. 100 karakter).';
            elseif (!filter_var($v['email'], FILTER_VALIDATE_EMAIL) || strlen($v['email']) > 100) $err = 'Email tidak valid.';
            elseif (!in_array($v['role'], ['klien', 'developer'], true)) $err = 'Peran tidak valid.';
            elseif (strlen($pw) < 6) $err = 'Password minimal 6 karakter.';
            elseif (q("SELECT id FROM users WHERE email=?", 's', [$v['email']])) $err = 'Email sudah terdaftar.';
            else {
                q("INSERT INTO users (nama,email,password,role) VALUES (?,?,?,?)", 'ssss', [$v['nama'], $v['email'], password_hash($pw, PASSWORD_DEFAULT), $v['role']]);
                flash('Pendaftaran berhasil. Silakan masuk.'); go('?page=login');
            }
        }
        $h = '<div class="card" style="max-width:480px;margin:auto"><h1>Daftar Akun</h1>' . ($err ? '<div class="flash err">' . e($err) . '</div>' : '')
           . '<form method="post" action="?page=register">' . csrf_field()
           . '<label>Nama</label><input name="nama" required value="' . e($v['nama']) . '">'
           . '<label>Email</label><input type="email" name="email" required value="' . e($v['email']) . '">'
           . '<label>Password</label><input type="password" name="password" required>'
           . '<label>Daftar sebagai</label><select name="role"><option value="klien"' . ($v['role'] === 'klien' ? ' selected' : '') . '>Klien</option><option value="developer"' . ($v['role'] === 'developer' ? ' selected' : '') . '>Developer</option></select>'
           . '<p><button>Daftar</button></p></form></div>';
        render('Daftar', $h);

    case 'login': // F1
        $err = ''; $email = '';
        if ($isPost) {
            $email = trim((string)($_POST['email'] ?? ''));
            $r = q("SELECT * FROM users WHERE email=?", 's', [$email]);
            if ($r && password_verify((string)($_POST['password'] ?? ''), $r[0]['password'])) {
                session_regenerate_id(true);
                $_SESSION['user'] = ['id' => (int)$r[0]['id'], 'nama' => $r[0]['nama'], 'role' => $r[0]['role']];
                flash('Selamat datang, ' . $r[0]['nama'] . '.');
                go($r[0]['role'] === 'admin' ? '?page=admin' : '?page=dashboard');
            }
            $err = 'Email atau password salah.';
        }
        $h = '<div class="card" style="max-width:480px;margin:auto"><h1>Masuk</h1>' . ($err ? '<div class="flash err">' . e($err) . '</div>' : '')
           . '<form method="post" action="?page=login">' . csrf_field()
           . '<label>Email</label><input type="email" name="email" required value="' . e($email) . '">'
           . '<label>Password</label><input type="password" name="password" required>'
           . '<p><button>Masuk</button> <a href="?page=register">Belum punya akun?</a></p></form></div>';
        render('Masuk', $h);

    case 'logout':
        $_SESSION = [];
        if (ini_get('session.use_cookies')) { $c = session_get_cookie_params(); setcookie(session_name(), '', time() - 3600, $c['path'], $c['domain'], $c['secure'], $c['httponly']); }
        session_destroy();
        session_start(); flash('Anda sudah keluar.');
        go('?page=home');

    case 'post': // F2
        $u = need_role('klien');
        $err = ''; $v = ['judul' => '', 'deskripsi' => '', 'kategori' => '', 'bmin' => '', 'bmax' => '', 'batas' => ''];
        if ($isPost) {
            foreach ($v as $k => $_) $v[$k] = trim((string)($_POST[$k] ?? ''));
            $bmin = (int)$v['bmin']; $bmax = (int)$v['bmax'];
            $d = DateTime::createFromFormat('Y-m-d', $v['batas']);
            if ($v['judul'] === '' || mb_strlen($v['judul']) > 200 || $v['deskripsi'] === '' || $v['kategori'] === '' || mb_strlen($v['kategori']) > 50) $err = 'Judul, deskripsi, dan kategori wajib diisi dengan panjang wajar.';
            elseif ($bmin < 0 || $bmax < $bmin) $err = 'Budget tidak valid (maks harus >= min).';
            elseif (!$d || $d->format('Y-m-d') !== $v['batas'] || $v['batas'] < date('Y-m-d')) $err = 'Batas lelang harus tanggal yang valid dan belum lewat.';
            else {
                q("INSERT INTO projects (client_id,judul,deskripsi,kategori,budget_min,budget_max,batas_lelang) VALUES (?,?,?,?,?,?,?)",
                  'isssiis', [$u['id'], $v['judul'], $v['deskripsi'], $v['kategori'], $bmin, $bmax, $v['batas']]);
                flash('Proyek berhasil dipasang.'); go('?page=dashboard');
            }
        }
        $h = '<div class="card"><h1>Pasang Proyek</h1>' . ($err ? '<div class="flash err">' . e($err) . '</div>' : '')
           . '<form method="post" action="?page=post">' . csrf_field()
           . '<label>Judul</label><input name="judul" required value="' . e($v['judul']) . '">'
           . '<label>Deskripsi</label><textarea name="deskripsi" required>' . e($v['deskripsi']) . '</textarea>'
           . '<label>Kategori</label><input name="kategori" placeholder="Web, Mobile, Desain, Data, AI..." required value="' . e($v['kategori']) . '">'
           . '<div class="row"><div><label>Budget minimum (Rp)</label><input type="number" name="bmin" min="0" required value="' . e($v['bmin']) . '"></div>'
           . '<div><label>Budget maksimum (Rp)</label><input type="number" name="bmax" min="0" required value="' . e($v['bmax']) . '"></div>'
           . '<div><label>Batas lelang</label><input type="date" name="batas" required value="' . e($v['batas']) . '"></div></div>'
           . '<p><button>Pasang proyek</button></p></form></div>';
        render('Pasang Proyek', $h);

    case 'bid': // F4 (POST)
        $u = need_role('developer');
        if (!$isPost) go('?page=home');
        $pid = (int)($_POST['project_id'] ?? 0); $harga = (int)($_POST['harga'] ?? 0); $durasi = (int)($_POST['durasi'] ?? 0);
        $prop = trim((string)($_POST['proposal'] ?? ''));
        $r = q("SELECT status, batas_lelang FROM projects WHERE id=?", 'i', [$pid]);
        if (!$r) { flash('Proyek tidak ditemukan.', 'err'); go('?page=home'); }
        if ($r[0]['status'] !== 'terbuka' || $r[0]['batas_lelang'] < date('Y-m-d')) flash('Lelang sudah ditutup.', 'err');
        elseif ($harga < 1 || $durasi < 1 || $prop === '') flash('Harga, durasi, dan proposal wajib diisi dengan benar.', 'err');
        elseif (q("SELECT id FROM bids WHERE project_id=? AND developer_id=?", 'ii', [$pid, $u['id']])) flash('Anda sudah mengajukan penawaran untuk proyek ini.', 'err');
        else {
            q("INSERT INTO bids (project_id,developer_id,harga,durasi,proposal) VALUES (?,?,?,?,?)", 'iiiis', [$pid, $u['id'], $harga, $durasi, $prop]);
            flash('Penawaran berhasil dikirim.');
        }
        go('?page=project&id=' . $pid);

    case 'pick': // F5 (POST)
        $u = need_role('klien');
        if (!$isPost) go('?page=home');
        $pid = (int)($_POST['project_id'] ?? 0); $bid = (int)($_POST['bid_id'] ?? 0);
        $r = q("SELECT status FROM projects WHERE id=? AND client_id=?", 'ii', [$pid, $u['id']]); // cek kepemilikan
        if (!$r) { http_response_code(403); render('Akses ditolak', '<div class="card"><p>Anda bukan pemilik proyek ini.</p></div>'); }
        if ($r[0]['status'] !== 'terbuka') flash('Proyek sudah ditutup.', 'err');
        elseif (!q("SELECT id FROM bids WHERE id=? AND project_id=?", 'ii', [$bid, $pid])) flash('Penawaran tidak valid.', 'err');
        else {
            $db = db(); $db->begin_transaction();
            q("UPDATE bids SET is_winner=1 WHERE id=? AND project_id=?", 'ii', [$bid, $pid]);
            q("UPDATE projects SET status='ditutup' WHERE id=?", 'i', [$pid]);
            $db->commit();
            flash('Pemenang dipilih; proyek ditutup.');
        }
        go('?page=project&id=' . $pid);

    case 'dashboard': // F6
        $u = need_role('klien', 'developer');
        if ($u['role'] === 'klien') {
            $rows = q("SELECT p.*, (SELECT COUNT(*) FROM bids b WHERE b.project_id=p.id) AS jml FROM projects p WHERE p.client_id=? ORDER BY p.id DESC", 'i', [$u['id']]);
            $h = '<div class="card"><h1>Proyek Saya</h1><p><a class="btn" href="?page=post">+ Pasang proyek</a></p>';
            if (!$rows) $h .= '<p>Anda belum memasang proyek.</p>';
            else {
                $h .= '<table><tr><th>Judul</th><th>Status</th><th>Batas</th><th>Penawaran</th></tr>';
                foreach ($rows as $p) $h .= '<tr><td><a href="?page=project&id=' . (int)$p['id'] . '">' . e($p['judul']) . '</a></td><td>' . status_badge($p['status']) . '</td><td>' . e($p['batas_lelang']) . '</td><td>' . (int)$p['jml'] . '</td></tr>';
                $h .= '</table>';
            }
        } else {
            $rows = q("SELECT b.*, p.judul, p.status FROM bids b JOIN projects p ON p.id=b.project_id WHERE b.developer_id=? ORDER BY b.id DESC", 'i', [$u['id']]);
            $h = '<div class="card"><h1>Penawaran Saya</h1>';
            if (!$rows) $h .= '<p>Anda belum mengajukan penawaran. <a href="?page=home">Cari proyek</a>.</p>';
            else {
                $h .= '<table><tr><th>Proyek</th><th>Harga</th><th>Durasi</th><th>Hasil</th></tr>';
                foreach ($rows as $b) {
                    $hasil = $b['is_winner'] ? '<span class="badge win">Menang</span>' : ($b['status'] === 'terbuka' ? 'Menunggu' : 'Tidak terpilih');
                    $h .= '<tr><td><a href="?page=project&id=' . (int)$b['project_id'] . '">' . e($b['judul']) . '</a></td><td>' . rp($b['harga']) . '</td><td>' . (int)$b['durasi'] . ' hari</td><td>' . $hasil . '</td></tr>';
                }
                $h .= '</table>';
            }
        }
        render('Dasbor', $h . '</div>');

    case 'admin': // F7
        $u = need_role('admin');
        if ($isPost) {
            $act = (string)($_POST['act'] ?? ''); $id = (int)($_POST['id'] ?? 0);
            if ($act === 'role' && in_array($_POST['role'] ?? '', ['klien', 'developer', 'admin'], true)) {
                if ($id === $u['id']) flash('Tidak dapat mengubah peran akun sendiri.', 'err');
                else { q("UPDATE users SET role=? WHERE id=?", 'si', [$_POST['role'], $id]); flash('Peran diperbarui.'); }
            } elseif ($act === 'del_user') {
                if ($id === $u['id']) flash('Tidak dapat menghapus akun sendiri.', 'err');
                else {
                    $db = db(); $db->begin_transaction();
                    q("DELETE FROM bids WHERE project_id IN (SELECT id FROM projects WHERE client_id=?)", 'i', [$id]);
                    q("DELETE FROM projects WHERE client_id=?", 'i', [$id]);
                    q("DELETE FROM bids WHERE developer_id=?", 'i', [$id]);
                    q("DELETE FROM users WHERE id=?", 'i', [$id]);
                    $db->commit(); flash('Pengguna dihapus.');
                }
            } elseif ($act === 'del_project') {
                $db = db(); $db->begin_transaction();
                q("DELETE FROM bids WHERE project_id=?", 'i', [$id]);
                q("DELETE FROM projects WHERE id=?", 'i', [$id]);
                $db->commit(); flash('Proyek dihapus.');
            }
            go('?page=admin');
        }
        $users = q("SELECT id,nama,email,role,created_at FROM users ORDER BY id");
        $projs = q("SELECT p.id,p.judul,p.status,u.nama AS klien FROM projects p JOIN users u ON u.id=p.client_id ORDER BY p.id");
        $h = '<div class="card"><h1>Admin: Pengguna</h1><table><tr><th>ID</th><th>Nama</th><th>Email</th><th>Peran</th><th>Aksi</th></tr>';
        foreach ($users as $x) {
            $opts = '';
            foreach (['klien', 'developer', 'admin'] as $ro) $opts .= '<option' . ($x['role'] === $ro ? ' selected' : '') . '>' . $ro . '</option>';
            $h .= '<tr><td>' . (int)$x['id'] . '</td><td>' . e($x['nama']) . '</td><td>' . e($x['email']) . '</td><td>' . e($x['role']) . '</td><td>'
                . '<form class="inline" method="post" action="?page=admin">' . csrf_field() . '<input type="hidden" name="act" value="role"><input type="hidden" name="id" value="' . (int)$x['id'] . '"><select name="role">' . $opts . '</select> <button class="sm sec">Ubah</button></form> '
                . '<form class="inline" method="post" action="?page=admin" onsubmit="return confirm(\'Hapus pengguna beserta proyek/penawarannya?\')">' . csrf_field() . '<input type="hidden" name="act" value="del_user"><input type="hidden" name="id" value="' . (int)$x['id'] . '"><button class="sm danger">Hapus</button></form></td></tr>';
        }
        $h .= '</table></div><div class="card"><h1>Admin: Proyek</h1><table><tr><th>ID</th><th>Judul</th><th>Klien</th><th>Status</th><th>Aksi</th></tr>';
        foreach ($projs as $x) {
            $h .= '<tr><td>' . (int)$x['id'] . '</td><td><a href="?page=project&id=' . (int)$x['id'] . '">' . e($x['judul']) . '</a></td><td>' . e($x['klien']) . '</td><td>' . status_badge($x['status']) . '</td><td>'
                . '<form class="inline" method="post" action="?page=admin" onsubmit="return confirm(\'Hapus proyek ini?\')">' . csrf_field() . '<input type="hidden" name="act" value="del_project"><input type="hidden" name="id" value="' . (int)$x['id'] . '"><button class="sm danger">Hapus</button></form></td></tr>';
        }
        render('Admin', $h . '</table></div>');

    default:
        http_response_code(404);
        render('Tidak ditemukan', '<div class="card"><h1>404</h1><p>Halaman tidak ditemukan. <a href="?page=home">Kembali ke beranda</a>.</p></div>');
    }
} catch (mysqli_sql_exception $ex) {
    error_log('Garuda-Hub DB error: ' . $ex->getMessage());
    http_response_code(500);
    render('Kesalahan', '<div class="card"><p>Terjadi kesalahan pada server. Silakan coba lagi nanti.</p></div>');
}
```

---

<a id="garudahub-prototype-mocks--gitkeep"></a>
### 19. `garudaHub/prototype/mocks/.gitkeep`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\prototype\mocks\.gitkeep`
- **Tipe / Format:** `text`
- **Ukuran:** 0 bytes (0.00 KB)
- **Jumlah Baris:** 0 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

*(Berkas kosong / 0 bytes)*

---

<a id="garudahub-prototype-mocks-database-sql"></a>
### 20. `garudaHub/prototype/mocks/database.sql`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\prototype\mocks\database.sql`
- **Tipe / Format:** `sql`
- **Ukuran:** 5,464 bytes (5.34 KB)
- **Jumlah Baris:** 80 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```sql
-- Garuda-Hub: skema + data dummy (semua data fiktif; password = hash bcrypt: admin123, klien123, dev123)
CREATE DATABASE IF NOT EXISTS garuda_hub CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE garuda_hub;

DROP TABLE IF EXISTS bids;
DROP TABLE IF EXISTS projects;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  role VARCHAR(20) NOT NULL DEFAULT 'klien',
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE projects (
  id INT AUTO_INCREMENT PRIMARY KEY,
  client_id INT NOT NULL,
  judul VARCHAR(200) NOT NULL,
  deskripsi TEXT NOT NULL,
  kategori VARCHAR(50) NOT NULL,
  budget_min BIGINT NOT NULL DEFAULT 0,
  budget_max BIGINT NOT NULL DEFAULT 0,
  batas_lelang DATE NOT NULL,
  status VARCHAR(20) NOT NULL DEFAULT 'terbuka',
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE bids (
  id INT AUTO_INCREMENT PRIMARY KEY,
  project_id INT NOT NULL,
  developer_id INT NOT NULL,
  harga BIGINT NOT NULL,
  durasi INT NOT NULL,
  proposal TEXT NOT NULL,
  is_winner TINYINT NOT NULL DEFAULT 0,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Pengguna (1 admin, 3 klien, 4 developer)
INSERT INTO users (id, nama, email, password, role) VALUES
(1, 'Admin Garuda',   'admin@example.com',  '$2y$12$Whu4zQHp93BcHk.eOQI3kO3gQ0ByvWBQ4cGOLQlljMHGhnEfgi5ue', 'admin'),
(2, 'Budi Santoso',   'budi@example.com',   '$2y$12$AW89bpkcNUdJpelLaz3CSuFoq24tXbzQFb7JHtT2gwK4HKOjKOIAS', 'klien'),
(3, 'Siti Rahayu',    'siti@example.com',   '$2y$12$AW89bpkcNUdJpelLaz3CSuFoq24tXbzQFb7JHtT2gwK4HKOjKOIAS', 'klien'),
(4, 'Agus Wijaya',    'agus@example.com',   '$2y$12$AW89bpkcNUdJpelLaz3CSuFoq24tXbzQFb7JHtT2gwK4HKOjKOIAS', 'klien'),
(5, 'Dewi Lestari',   'dewi@example.com',   '$2y$12$72QTYKig6d0/wW8itXUS5OCiccRGDcgsbo4Wlcaa6nxKrJls3pER.',   'developer'),
(6, 'Eko Prasetyo',   'eko@example.com',    '$2y$12$72QTYKig6d0/wW8itXUS5OCiccRGDcgsbo4Wlcaa6nxKrJls3pER.',   'developer'),
(7, 'Fitri Handayani','fitri@example.com',  '$2y$12$72QTYKig6d0/wW8itXUS5OCiccRGDcgsbo4Wlcaa6nxKrJls3pER.',   'developer'),
(8, 'Gilang Ramadhan','gilang@example.com', '$2y$12$72QTYKig6d0/wW8itXUS5OCiccRGDcgsbo4Wlcaa6nxKrJls3pER.',   'developer');

-- Proyek (8)
INSERT INTO projects (id, client_id, judul, deskripsi, kategori, budget_min, budget_max, batas_lelang, status) VALUES
(1, 2, 'Website Toko Batik Online', 'Membutuhkan toko online dengan katalog produk, keranjang, dan halaman kontak. Desain responsif.', 'Web', 5000000, 10000000, '2027-12-31', 'terbuka'),
(2, 2, 'Aplikasi Kasir Android', 'Aplikasi kasir sederhana untuk warung: catat transaksi, laporan harian, cetak struk via Bluetooth.', 'Mobile', 8000000, 15000000, '2027-11-30', 'terbuka'),
(3, 3, 'Redesain Logo dan UI Kit', 'Redesain identitas visual startup kuliner beserta UI kit untuk aplikasi pemesanan.', 'Desain', 2000000, 4000000, '2026-09-01', 'ditutup'),
(4, 3, 'Dashboard Analitik Penjualan', 'Dashboard grafik penjualan bulanan dari file CSV, dengan filter per cabang dan ekspor laporan.', 'Data', 6000000, 12000000, '2027-10-15', 'terbuka'),
(5, 4, 'Chatbot Layanan Pelanggan', 'Chatbot FAQ untuk situs sekolah, dapat dijawab dalam bahasa Indonesia.', 'AI', 4000000, 8000000, '2026-08-20', 'terbuka'),
(6, 4, 'Sistem Absensi Sekolah', 'Sistem absensi siswa berbasis web dengan rekap per kelas dan laporan bulanan untuk wali kelas.', 'Web', 7000000, 14000000, '2026-07-10', 'ditutup'),
(7, 2, 'Migrasi Database ke MySQL', 'Memindahkan data inventaris dari spreadsheet ke MySQL dan membuat skrip impor.', 'Data', 3000000, 6000000, '2026-06-30', 'ditutup'),
(8, 3, 'Landing Page Event Kampus', 'Satu halaman informasi acara seminar teknologi dengan formulir pendaftaran sederhana.', 'Web', 1500000, 3000000, '2027-09-01', 'terbuka');

-- Penawaran (15)
INSERT INTO bids (id, project_id, developer_id, harga, durasi, proposal, is_winner) VALUES
(1,  1, 5, 8500000,  30, 'Saya akan membangun dengan PHP dan MySQL, lengkap dengan panel admin produk.', 0),
(2,  1, 6, 7000000,  40, 'Pengalaman 3 tahun membuat toko online. Termasuk pelatihan penggunaan.', 0),
(3,  1, 7, 9500000,  25, 'Desain premium bernuansa batik, dukungan perawatan 3 bulan.', 0),
(4,  2, 5, 12000000, 45, 'Aplikasi native Kotlin, dukungan printer Bluetooth termasuk.', 0),
(5,  2, 8, 10000000, 50, 'Memakai Flutter agar bisa juga dipakai di iOS nanti.', 0),
(6,  3, 6, 3000000,  14, 'Tiga konsep logo dan UI kit lengkap di Figma.', 1),
(7,  3, 7, 3500000,  10, 'Revisi tak terbatas selama 2 minggu.', 0),
(8,  4, 8, 9000000,  35, 'Dashboard dengan Chart dan ekspor PDF.', 0),
(9,  4, 5, 11000000, 30, 'Termasuk modul impor CSV otomatis.', 0),
(10, 4, 6, 7500000,  45, 'Fokus pada grafik interaktif dan filter cabang.', 0),
(11, 5, 7, 6000000,  30, 'Chatbot berbasis aturan dengan basis pengetahuan FAQ sekolah.', 0),
(12, 6, 8, 11000000, 40, 'Sistem lengkap dengan rekap otomatis dan ekspor Excel.', 1),
(13, 6, 5, 13000000, 35, 'Termasuk aplikasi pemindai kode QR untuk absensi.', 0),
(14, 7, 6, 4500000,  15, 'Skrip impor dengan validasi data dan laporan galat.', 1),
(15, 7, 7, 5000000,  12, 'Termasuk dokumentasi skema dan pelatihan singkat.', 0);
```

---

<a id="garudahub-readme-md"></a>
### 21. `garudaHub/README.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\README.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 2,320 bytes (2.27 KB)
- **Jumlah Baris:** 67 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

````markdown
# Garuda-Hub

Website lelang proyek IT: klien memasang proyek, developer menawar, klien memilih pemenang. Dibuat untuk **studi kasus pembelajaran keamanan** mahasiswa dengan praktik PHP standar. Semua data adalah data dummy.

## PERINGATAN

- **Hanya untuk komputer lokal atau lingkungan belajar.** Jangan dipasang di server publik atau internet.
- Konfigurasi bawaan memakai database `root` dengan password kosong. Itu hanya aman di komputer lokal.
- Tidak ada pembatasan percobaan login (rate limit).
- Tidak ada header keamanan `X-Frame-Options` maupun `Content-Security-Policy`.
- Jangan memasukkan data pribadi atau password asli.

## Fitur

- Daftar dan login dengan peran klien, developer, admin
- Klien memasang proyek (judul, deskripsi, kategori, budget, batas lelang)
- Daftar, pencarian, dan detail proyek beserta penawaran
- Developer mengajukan penawaran (harga, durasi, proposal)
- Klien memilih pemenang
- Dasbor per peran dan panel admin

## Kebutuhan

- PHP 8.1 atau lebih baru dengan ekstensi `mysqli`
- MySQL atau MariaDB

## Instalasi

1. Klon repositori ini lalu masuk ke foldernya.
2. Impor skema dan data dummy:
   ```
   mysql -u root -p < src/database.sql
   ```
   Ini membuat database `garuda_hub` dan **menghapus** tabel `users`, `projects`, `bids` jika sudah ada.
3. (Opsional) Atur koneksi database lewat variabel lingkungan:

   | Variabel | Bawaan |
   | --- | --- |
   | `GH_DB_HOST` | `127.0.0.1` |
   | `GH_DB_USER` | `root` |
   | `GH_DB_PASS` | kosong |
   | `GH_DB_NAME` | `garuda_hub` |
   | `GH_DB_PORT` | `3306` |

   Contoh: `export GH_DB_USER=nama_pengguna_anda`
4. Jalankan server bawaan PHP:
   ```
   php -S localhost:8000 -t src
   ```
5. Buka `http://localhost:8000`.

## Akun dummy

Data awal berisi akun fiktif berdomain `example.com`: satu admin (`admin@example.com`), klien (`budi@`, `siti@`, `agus@`), dan developer (`dewi@`, `eko@`, `fitri@`, `gilang@`). Password tidak dicantumkan di sini. Anda dapat mendaftar akun baru sebagai klien atau developer lewat halaman Daftar.

## Struktur

- `src/index.php`: seluruh aplikasi (routing lewat `?page=`)
- `src/database.sql`: skema dan data dummy

## Panduan pemakaian

Lihat folder `docs/user/` bila tersedia.

## Lisensi

MIT. Lihat [LICENSE](LICENSE).
````

---

<a id="garudahub-security-md"></a>
### 22. `garudaHub/SECURITY.md`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\SECURITY.md`
- **Tipe / Format:** `markdown`
- **Ukuran:** 1,221 bytes (1.19 KB)
- **Jumlah Baris:** 22 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```markdown
# Kebijakan Keamanan

Garuda-Hub adalah aplikasi **pembelajaran** yang ditulis dengan praktik PHP standar: prepared statement, escaping keluaran, token CSRF, hash password, serta pengecekan peran dan kepemilikan di sisi server. Aplikasi ini tidak melalui audit keamanan menyeluruh dan **tidak boleh dipasang di server publik**.

## Batasan yang diketahui

- Database bawaan memakai `root` tanpa password (khusus lokal).
- Tidak ada rate limit pada login atau pendaftaran.
- Tidak ada header `X-Frame-Options` atau `Content-Security-Policy`.
- Hanya data dummy; jangan masukkan data pribadi atau password asli.

## Melaporkan celah

Temuan keamanan boleh dilaporkan karena justru bagian dari tujuan belajar.

1. Jangan membuka isu publik berisi detail eksploit yang bisa dipakai menyerang pihak lain.
2. Laporkan lewat fitur *private vulnerability reporting* GitHub pada repositori ini (tab Security), atau hubungi pemilik repositori lewat profil GitHub.
3. Sertakan langkah reproduksi, halaman terkait, dan dampaknya.

Pengujian hanya boleh dilakukan pada instalasi milik Anda sendiri (lokal atau lingkungan belajar), bukan pada sistem orang lain.

Ini proyek belajar tanpa jaminan waktu tanggapan.
```

---

<a id="garudahub-src--gitkeep"></a>
### 23. `garudaHub/src/.gitkeep`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\src\.gitkeep`
- **Tipe / Format:** `text`
- **Ukuran:** 0 bytes (0.00 KB)
- **Jumlah Baris:** 0 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

*(Berkas kosong / 0 bytes)*

---

<a id="garudahub-src-database-sql"></a>
### 24. `garudaHub/src/database.sql`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\src\database.sql`
- **Tipe / Format:** `sql`
- **Ukuran:** 6,183 bytes (6.04 KB)
- **Jumlah Baris:** 90 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```sql
-- Garuda-Hub: skema + data dummy (M0). Semua data fiktif, domain example.com.
-- Password dummy hanya berupa hash bcrypt; kredensial demo ada di README.
CREATE DATABASE IF NOT EXISTS garuda_hub CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE garuda_hub;

DROP TABLE IF EXISTS bids;
DROP TABLE IF EXISTS projects;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL,
  role ENUM('klien','developer','admin') NOT NULL DEFAULT 'klien',
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY uq_users_email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE projects (
  id INT AUTO_INCREMENT PRIMARY KEY,
  client_id INT NOT NULL,
  judul VARCHAR(200) NOT NULL,
  deskripsi TEXT NOT NULL,
  kategori VARCHAR(50) NOT NULL,
  budget_min BIGINT NOT NULL DEFAULT 0,
  budget_max BIGINT NOT NULL DEFAULT 0,
  batas_lelang DATE NOT NULL,
  status ENUM('terbuka','ditutup') NOT NULL DEFAULT 'terbuka',
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT chk_projects_budget CHECK (budget_min >= 0 AND budget_max >= budget_min),
  CONSTRAINT fk_projects_client FOREIGN KEY (client_id) REFERENCES users (id) ON DELETE CASCADE,
  INDEX idx_projects_status (status),
  INDEX idx_projects_client (client_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE bids (
  id INT AUTO_INCREMENT PRIMARY KEY,
  project_id INT NOT NULL,
  developer_id INT NOT NULL,
  harga BIGINT NOT NULL,
  durasi INT NOT NULL,
  proposal TEXT NOT NULL,
  is_winner TINYINT NOT NULL DEFAULT 0,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT chk_bids_nilai CHECK (harga > 0 AND durasi > 0),
  CONSTRAINT uq_bids_project_developer UNIQUE (project_id, developer_id),
  CONSTRAINT fk_bids_project FOREIGN KEY (project_id) REFERENCES projects (id) ON DELETE CASCADE,
  CONSTRAINT fk_bids_developer FOREIGN KEY (developer_id) REFERENCES users (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Pengguna (1 admin, 3 klien, 4 developer)
INSERT INTO users (id, nama, email, password, role) VALUES
(1, 'Admin Garuda',   'admin@example.com',  '$2y$12$Whu4zQHp93BcHk.eOQI3kO3gQ0ByvWBQ4cGOLQlljMHGhnEfgi5ue', 'admin'),
(2, 'Budi Santoso',   'budi@example.com',   '$2y$12$AW89bpkcNUdJpelLaz3CSuFoq24tXbzQFb7JHtT2gwK4HKOjKOIAS', 'klien'),
(3, 'Siti Rahayu',    'siti@example.com',   '$2y$12$AW89bpkcNUdJpelLaz3CSuFoq24tXbzQFb7JHtT2gwK4HKOjKOIAS', 'klien'),
(4, 'Agus Wijaya',    'agus@example.com',   '$2y$12$AW89bpkcNUdJpelLaz3CSuFoq24tXbzQFb7JHtT2gwK4HKOjKOIAS', 'klien'),
(5, 'Dewi Lestari',   'dewi@example.com',   '$2y$12$72QTYKig6d0/wW8itXUS5OCiccRGDcgsbo4Wlcaa6nxKrJls3pER.', 'developer'),
(6, 'Eko Prasetyo',   'eko@example.com',    '$2y$12$72QTYKig6d0/wW8itXUS5OCiccRGDcgsbo4Wlcaa6nxKrJls3pER.', 'developer'),
(7, 'Fitri Handayani','fitri@example.com',  '$2y$12$72QTYKig6d0/wW8itXUS5OCiccRGDcgsbo4Wlcaa6nxKrJls3pER.', 'developer'),
(8, 'Gilang Ramadhan','gilang@example.com', '$2y$12$72QTYKig6d0/wW8itXUS5OCiccRGDcgsbo4Wlcaa6nxKrJls3pER.', 'developer');

-- Proyek (8)
INSERT INTO projects (id, client_id, judul, deskripsi, kategori, budget_min, budget_max, batas_lelang, status) VALUES
(1, 2, 'Website Toko Batik Online', 'Membutuhkan toko online dengan katalog produk, keranjang, dan halaman kontak. Desain responsif.', 'Web', 5000000, 10000000, '2027-12-31', 'terbuka'),
(2, 2, 'Aplikasi Kasir Android', 'Aplikasi kasir sederhana untuk warung: catat transaksi, laporan harian, cetak struk via Bluetooth.', 'Mobile', 8000000, 15000000, '2027-11-30', 'terbuka'),
(3, 3, 'Redesain Logo dan UI Kit', 'Redesain identitas visual startup kuliner beserta UI kit untuk aplikasi pemesanan.', 'Desain', 2000000, 4000000, '2026-09-01', 'ditutup'),
(4, 3, 'Dashboard Analitik Penjualan', 'Dashboard grafik penjualan bulanan dari file CSV, dengan filter per cabang dan ekspor laporan.', 'Data', 6000000, 12000000, '2027-10-15', 'terbuka'),
(5, 4, 'Chatbot Layanan Pelanggan', 'Chatbot FAQ untuk situs sekolah, dapat dijawab dalam bahasa Indonesia.', 'AI', 4000000, 8000000, '2026-08-20', 'terbuka'),
(6, 4, 'Sistem Absensi Sekolah', 'Sistem absensi siswa berbasis web dengan rekap per kelas dan laporan bulanan untuk wali kelas.', 'Web', 7000000, 14000000, '2026-07-10', 'ditutup'),
(7, 2, 'Migrasi Database ke MySQL', 'Memindahkan data inventaris dari spreadsheet ke MySQL dan membuat skrip impor.', 'Data', 3000000, 6000000, '2026-06-30', 'ditutup'),
(8, 3, 'Landing Page Event Kampus', 'Satu halaman informasi acara seminar teknologi dengan formulir pendaftaran sederhana.', 'Web', 1500000, 3000000, '2027-09-01', 'terbuka');

-- Penawaran (15)
INSERT INTO bids (id, project_id, developer_id, harga, durasi, proposal, is_winner) VALUES
(1,  1, 5, 8500000,  30, 'Saya akan membangun dengan PHP dan MySQL, lengkap dengan panel admin produk.', 0),
(2,  1, 6, 7000000,  40, 'Pengalaman 3 tahun membuat toko online. Termasuk pelatihan penggunaan.', 0),
(3,  1, 7, 9500000,  25, 'Desain premium bernuansa batik, dukungan perawatan 3 bulan.', 0),
(4,  2, 5, 12000000, 45, 'Aplikasi native Kotlin, dukungan printer Bluetooth termasuk.', 0),
(5,  2, 8, 10000000, 50, 'Memakai Flutter agar bisa juga dipakai di iOS nanti.', 0),
(6,  3, 6, 3000000,  14, 'Tiga konsep logo dan UI kit lengkap di Figma.', 1),
(7,  3, 7, 3500000,  10, 'Revisi tak terbatas selama 2 minggu.', 0),
(8,  4, 8, 9000000,  35, 'Dashboard dengan Chart dan ekspor PDF.', 0),
(9,  4, 5, 11000000, 30, 'Termasuk modul impor CSV otomatis.', 0),
(10, 4, 6, 7500000,  45, 'Fokus pada grafik interaktif dan filter cabang.', 0),
(11, 5, 7, 6000000,  30, 'Chatbot berbasis aturan dengan basis pengetahuan FAQ sekolah.', 0),
(12, 6, 8, 11000000, 40, 'Sistem lengkap dengan rekap otomatis dan ekspor Excel.', 1),
(13, 6, 5, 13000000, 35, 'Termasuk aplikasi pemindai kode QR untuk absensi.', 0),
(14, 7, 6, 4500000,  15, 'Skrip impor dengan validasi data dan laporan galat.', 1),
(15, 7, 7, 5000000,  12, 'Termasuk dokumentasi skema dan pelatihan singkat.', 0);
```

---

<a id="garudahub-src-index-php"></a>
### 25. `garudaHub/src/index.php`

- **Lokasi Lengkap:** `C:\Users\TUF-Gaming\kode\Laragon\laragon\www\garuda baru\garudaHub\src\index.php`
- **Tipe / Format:** `php`
- **Ukuran:** 33,494 bytes (32.71 KB)
- **Jumlah Baris:** 598 baris
- [Kembali ke Daftar Isi](#2-ringkasan-file--navigasi-cepat-daftar-isi)

```php
<?php
// Garuda-Hub - lelang proyek IT (PHP 8.1+ native, mysqli). Semua data dummy.
declare(strict_types=1);

// ===== M1: inti =====
ini_set('display_errors', '0');
date_default_timezone_set('Asia/Jakarta');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

const ROLES = ['klien', 'developer', 'admin'];
const SELF_ROLES = ['klien', 'developer'];
const STATUS = ['terbuka', 'ditutup'];

// Peta rute: halaman => [handler, metode yang diizinkan]
const ROUTES = [
    'home'      => ['page_home', ['GET']],
    'project'   => ['page_project', ['GET']],
    'register'  => ['page_register', ['GET', 'POST']],
    'login'     => ['page_login', ['GET', 'POST']],
    'logout'    => ['page_logout', ['POST']],
    'post'      => ['page_post', ['GET', 'POST']],
    'bid'       => ['page_bid', ['POST']],
    'pick'      => ['page_pick', ['POST']],
    'dashboard' => ['page_dashboard', ['GET']],
    'admin'     => ['page_admin', ['GET', 'POST']],
];

function e(mixed $v): string { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
function rp(int|string $n): string { return 'Rp ' . number_format((int)$n, 0, ',', '.'); }
// Hanya URL relatif "?page=..." yang diizinkan (cegah open redirect).
function go(string $url): never {
    if (!preg_match('/^\?page=[a-z]+(&[A-Za-z0-9_=%.-]*)?\z/', $url)) $url = '?page=home';
    header('Location: ' . $url);
    exit;
}
function flash(?string $msg = null, string $type = 'ok'): ?array {
    if (session_status() !== PHP_SESSION_ACTIVE) return null;
    if ($msg !== null) { $_SESSION['flash'] = [$msg, $type]; return null; }
    $f = $_SESSION['flash'] ?? null;
    unset($_SESSION['flash']);
    return $f;
}
function status_badge(string $s): string {
    return '<span class="badge ' . ($s === 'terbuka' ? 'open' : 'closed') . '">' . e($s) . '</span>';
}

function db(): mysqli {
    static $c = null;
    if ($c === null) {
        $c = new mysqli(
            getenv('GH_DB_HOST') ?: '127.0.0.1',
            getenv('GH_DB_USER') ?: 'root',
            getenv('GH_DB_PASS') ?: '',
            getenv('GH_DB_NAME') ?: 'garuda_hub',
            (int)(getenv('GH_DB_PORT') ?: 3306)
        );
        $c->set_charset('utf8mb4');
    }
    return $c;
}
// Prepared statement; SELECT -> array baris, lainnya -> jumlah baris terpengaruh.
function q(string $sql, string $types = '', array $params = []): array|int {
    $st = db()->prepare($sql);
    if ($types !== '') $st->bind_param($types, ...$params);
    $st->execute();
    $res = $st->get_result();
    if ($res instanceof mysqli_result) { $rows = $res->fetch_all(MYSQLI_ASSOC); $st->close(); return $rows; }
    $n = $st->affected_rows;
    $st->close();
    return $n;
}
function tx(callable $fn): mixed {
    $d = db();
    $d->begin_transaction();
    try {
        $r = $fn();
        $d->commit();
        return $r;
    } catch (Throwable $ex) {
        $d->rollback();
        throw $ex;
    }
}

function abort(int $code, string $msg): never {
    $GLOBALS['GH_ABORTING'] = true; // layout tidak memanggil auth saat halaman galat
    render('Galat ' . $code, '<div class="card"><h1>' . $code . '</h1><p>' . e($msg)
        . ' <a href="?page=home">Kembali ke beranda</a>.</p></div>', $code);
}

function render(string $title, string $body, int $code = 200): never {
    http_response_code($code);
    $u = empty($GLOBALS['GH_ABORTING']) ? current_user() : null;
    $f = flash();
    ?><!DOCTYPE html>
<html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= e($title) ?> - Garuda-Hub</title>
<style>
*{box-sizing:border-box}body{margin:0;font-family:system-ui,Segoe UI,Arial,sans-serif;background:#f4f6f8;color:#1f2933;line-height:1.5}
a{color:#0b5cad;text-decoration:none}a:hover{text-decoration:underline}
header{background:#7a1020;color:#fff}header .in{max-width:1000px;margin:auto;padding:12px 16px;display:flex;flex-wrap:wrap;align-items:center;gap:14px}
header a{color:#fff}header .brand{font-weight:700;font-size:1.3rem;margin-right:auto}
main{max-width:1000px;margin:20px auto;padding:0 16px}
.card{background:#fff;border-radius:8px;padding:18px;margin-bottom:16px;box-shadow:0 1px 3px rgba(0,0,0,.1)}
h1{font-size:1.5rem;margin:0 0 14px}h2{font-size:1.15rem;margin:0 0 10px}
label{display:block;margin:10px 0 4px;font-weight:600}
input,select,textarea{width:100%;padding:8px;border:1px solid #c5ccd3;border-radius:6px;font:inherit}
textarea{min-height:110px}
.btn,button{display:inline-block;background:#7a1020;color:#fff;border:0;border-radius:6px;padding:8px 16px;font:inherit;cursor:pointer}
.btn.sec,button.sec{background:#52606d}.btn.danger,button.danger{background:#b42318}.btn.sm,button.sm{padding:3px 10px;font-size:.85rem}
.btn:hover{text-decoration:none;opacity:.9}
table{width:100%;border-collapse:collapse}th,td{text-align:left;padding:8px;border-bottom:1px solid #e4e7eb;vertical-align:top}th{background:#f0f2f5}
.badge{padding:2px 9px;border-radius:12px;font-size:.8rem;color:#fff}.badge.open{background:#1a7f37}.badge.closed{background:#6b7280}.badge.win{background:#b7791f}
.flash{padding:10px 14px;border-radius:6px;margin-bottom:14px}.flash.ok{background:#d9f2e0}.flash.err{background:#fde2e0}
.muted{color:#6b7280;font-size:.9rem}.row{display:flex;gap:10px;flex-wrap:wrap}.row>*{flex:1;min-width:140px}
form.inline{display:inline}form.inline select{width:auto;padding:3px}
.winner{background:#fff8e1}.search{display:flex;gap:8px}.search input{flex:1}.search button{flex:none}
footer{text-align:center;color:#6b7280;font-size:.85rem;margin:30px 0}
</style></head><body>
<header><div class="in"><a class="brand" href="?page=home">Garuda-Hub</a>
<a href="?page=home">Proyek</a>
<?php if ($u): ?>
  <?php if ($u['role'] === 'klien'): ?><a href="?page=post">Pasang Proyek</a><?php endif; ?>
  <?php if ($u['role'] !== 'admin'): ?><a href="?page=dashboard">Dasbor</a><?php endif; ?>
  <?php if ($u['role'] === 'admin'): ?><a href="?page=admin">Admin</a><?php endif; ?>
  <span><?= e($u['nama']) ?> (<?= e($u['role']) ?>)</span>
  <form class="inline" method="post" action="?page=logout"><?= csrf_field() ?><button class="sm sec" type="submit">Keluar</button></form>
<?php else: ?><a href="?page=login">Masuk</a><a href="?page=register">Daftar</a><?php endif; ?>
</div></header>
<main>
<?php if ($f): ?><div class="flash <?= e($f[1]) ?>"><?= e($f[0]) ?></div><?php endif; ?>
<?= $body ?>
</main>
<footer>Garuda-Hub - aplikasi pembelajaran. Hanya data dummy; jangan dipasang di server publik.</footer>
</body></html><?php
    exit;
}

function internal_error(Throwable $ex): never {
    error_log('Garuda-Hub error: ' . get_class($ex) . ': ' . $ex->getMessage());
    abort(500, 'Terjadi kesalahan pada server. Silakan coba lagi nanti.');
}
set_exception_handler('internal_error');

// ===== M2: auth =====
const AUTH_DUMMY_HASH = '$2y$12$bpzlaJ2igPGuYZPnSM78AuhcDeRtqXFvxu0XTgnL.gMUbcwrbS1OK';
const PW_MIN = 6;
const PW_MAX = 72; // batas efektif bcrypt; cegah pemotongan diam-diam

function session_boot(): void {
    if (session_status() === PHP_SESSION_ACTIVE) return;
    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
    ini_set('session.use_strict_mode', '1');
    ini_set('session.use_only_cookies', '1');
    session_set_cookie_params([
        'lifetime' => 0, 'path' => '/', 'secure' => $https,
        'httponly' => true, 'samesite' => 'Lax',
    ]);
    session_start();
}
function auth_forget(): void {
    unset($GLOBALS['GH_USER']);
    if (session_status() !== PHP_SESSION_ACTIVE) return;
    $_SESSION = [];
    $p = session_get_cookie_params();
    setcookie(session_name(), '', [
        'expires' => time() - 3600, 'path' => $p['path'], 'secure' => $p['secure'],
        'httponly' => true, 'samesite' => 'Lax',
    ]);
    session_destroy();
}
function current_user(): ?array {
    if (array_key_exists('GH_USER', $GLOBALS)) return $GLOBALS['GH_USER'];
    if (session_status() !== PHP_SESSION_ACTIVE || !isset($_SESSION['uid'])) return null;
    $rows = q('SELECT id, nama, role FROM users WHERE id = ?', 'i', [(int)$_SESSION['uid']]);
    if (!$rows) { auth_forget(); return null; } // user dihapus -> sesi berakhir
    $r = $rows[0];
    return $GLOBALS['GH_USER'] = ['id' => (int)$r['id'], 'nama' => (string)$r['nama'], 'role' => (string)$r['role']];
}
function need_role(string ...$roles): array {
    $u = current_user();
    if ($u === null) go('?page=login');
    if ($roles && !in_array($u['role'], $roles, true)) abort(403, 'Anda tidak berhak mengakses halaman ini.');
    return $u;
}
function csrf(): string {
    if (empty($_SESSION['csrf']) || !is_string($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(32));
    return $_SESSION['csrf'];
}
function csrf_field(): string {
    return '<input type="hidden" name="csrf" value="' . e(csrf()) . '">';
}
function check_csrf(): void {
    $t = $_POST['csrf'] ?? '';
    $s = $_SESSION['csrf'] ?? '';
    if (!is_string($t) || !is_string($s) || $s === '' || !hash_equals($s, $t)) {
        abort(403, 'Token keamanan tidak valid. Muat ulang halaman lalu coba lagi.');
    }
}
function auth_register(string $nama, string $email, string $pw, string $role): string {
    $nama = trim($nama);
    $email = strtolower(trim($email));
    if ($nama === '' || mb_strlen($nama) > 100) return 'Nama wajib diisi (maksimal 100 karakter).';
    if (strlen($email) > 100 || !filter_var($email, FILTER_VALIDATE_EMAIL)) return 'Format email tidak valid.';
    if (strlen($pw) < PW_MIN) return 'Password minimal ' . PW_MIN . ' karakter.';
    if (strlen($pw) > PW_MAX) return 'Password maksimal ' . PW_MAX . ' karakter.';
    if (!in_array($role, SELF_ROLES, true)) return 'Peran tidak valid.';
    try {
        q('INSERT INTO users (nama, email, password, role) VALUES (?, ?, ?, ?)', 'ssss',
            [$nama, $email, password_hash($pw, PASSWORD_DEFAULT), $role]);
    } catch (mysqli_sql_exception $ex) {
        if ((int)$ex->getCode() === 1062) return 'Email sudah terdaftar.';
        throw $ex;
    }
    return '';
}
function auth_login(string $email, string $pw): string {
    $email = strtolower(trim($email));
    $gagal = 'Email atau password salah.';
    $rows = (strlen($email) <= 100 && strlen($pw) <= 1024)
        ? q('SELECT id, password FROM users WHERE email = ?', 's', [$email]) : [];
    $u = $rows[0] ?? null;
    // Hash dummy bila email tak dikenal -> waktu respons setara
    $ok = password_verify($pw, $u['password'] ?? AUTH_DUMMY_HASH);
    if ($u === null || !$ok) return $gagal;
    session_regenerate_id(true);
    $_SESSION['uid'] = (int)$u['id'];
    unset($_SESSION['csrf'], $GLOBALS['GH_USER']);
    if (password_needs_rehash($u['password'], PASSWORD_DEFAULT)) {
        q('UPDATE users SET password = ? WHERE id = ?', 'si', [password_hash($pw, PASSWORD_DEFAULT), (int)$u['id']]);
    }
    return '';
}
function auth_logout(): void {
    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') abort(405, 'Metode tidak diizinkan.');
    check_csrf();
    auth_forget();
}
function auth_home(array $u): never {
    go($u['role'] === 'admin' ? '?page=admin' : '?page=dashboard');
}
function page_register(): void {
    if ($u = current_user()) auth_home($u);
    $nama = ''; $email = ''; $role = 'klien';
    if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
        $nama = (string)($_POST['nama'] ?? '');
        $email = (string)($_POST['email'] ?? '');
        $role = (string)($_POST['role'] ?? '');
        $err = auth_register($nama, $email, (string)($_POST['password'] ?? ''), $role);
        if ($err === '') { flash('Pendaftaran berhasil. Silakan masuk.'); go('?page=login'); }
        flash($err, 'err');
    }
    $opt = '';
    foreach (SELF_ROLES as $r) $opt .= '<option value="' . e($r) . '"' . ($r === $role ? ' selected' : '') . '>' . e(ucfirst($r)) . '</option>';
    render('Daftar', '<div class="card"><h1>Daftar</h1><form method="post" action="?page=register">' . csrf_field()
        . '<label>Nama</label><input name="nama" maxlength="100" required value="' . e($nama) . '">'
        . '<label>Email</label><input name="email" type="email" maxlength="100" required value="' . e($email) . '">'
        . '<label>Password (min. ' . PW_MIN . ' karakter)</label><input name="password" type="password" minlength="' . PW_MIN . '" maxlength="' . PW_MAX . '" required autocomplete="new-password">'
        . '<label>Peran</label><select name="role">' . $opt . '</select>'
        . '<p><button type="submit">Daftar</button></p></form></div>');
}
function page_login(): void {
    if ($u = current_user()) auth_home($u);
    $email = '';
    if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
        $email = (string)($_POST['email'] ?? '');
        $err = auth_login($email, (string)($_POST['password'] ?? ''));
        if ($err === '') { flash('Selamat datang kembali.'); $u = current_user(); if ($u) auth_home($u); go('?page=home'); }
        flash($err, 'err');
    }
    render('Masuk', '<div class="card"><h1>Masuk</h1><form method="post" action="?page=login">' . csrf_field()
        . '<label>Email</label><input name="email" type="email" maxlength="100" required value="' . e($email) . '">'
        . '<label>Password</label><input name="password" type="password" required autocomplete="current-password">'
        . '<p><button type="submit">Masuk</button></p></form></div>');
}
function page_logout(): void {
    auth_logout();
    session_boot();
    flash('Anda telah keluar.');
    go('?page=home');
}

// ===== M3: proyek =====
const PROJ_JUDUL_MAX = 200;
const PROJ_DESK_MAX = 5000;
const PROJ_KAT_MAX = 50;
const PROJ_BUDGET_MAX = 999999999999; // 12 digit, aman untuk BIGINT
const PROJ_CARI_MAX = 100;

function project_find(int $id): ?array {
    $r = q('SELECT p.*, u.nama AS klien FROM projects p JOIN users u ON u.id = p.client_id WHERE p.id = ?', 'i', [$id]);
    return $r[0] ?? null;
}
function project_list(string $cari): array {
    $sql = 'SELECT p.*, u.nama AS klien, (SELECT COUNT(*) FROM bids b WHERE b.project_id = p.id) AS jml
            FROM projects p JOIN users u ON u.id = p.client_id';
    $cari = mb_substr(trim($cari), 0, PROJ_CARI_MAX);
    if ($cari === '') return q($sql . ' ORDER BY p.id DESC');
    // Escape wildcard LIKE agar input pengguna dicari apa adanya
    $like = '%' . addcslashes($cari, '\\%_') . '%';
    return q($sql . ' WHERE p.judul LIKE ? OR p.kategori LIKE ? ORDER BY p.id DESC', 'ss', [$like, $like]);
}
function project_is_open(array $p): bool {
    return ($p['status'] ?? '') === 'terbuka' && (string)($p['batas_lelang'] ?? '') >= date('Y-m-d');
}
// Mengembalikan '' bila sukses, atau pesan galat. $clientId HARUS dari sesi, bukan form.
function project_create(int $clientId, array $in): string {
    $judul = trim((string)($in['judul'] ?? ''));
    $desk = trim((string)($in['deskripsi'] ?? ''));
    $kat = trim((string)($in['kategori'] ?? ''));
    $bmin = trim((string)($in['bmin'] ?? ''));
    $bmax = trim((string)($in['bmax'] ?? ''));
    $batas = trim((string)($in['batas'] ?? ''));
    if ($judul === '' || mb_strlen($judul) > PROJ_JUDUL_MAX) return 'Judul wajib diisi (maksimal ' . PROJ_JUDUL_MAX . ' karakter).';
    if ($desk === '' || mb_strlen($desk) > PROJ_DESK_MAX) return 'Deskripsi wajib diisi (maksimal ' . PROJ_DESK_MAX . ' karakter).';
    if ($kat === '' || mb_strlen($kat) > PROJ_KAT_MAX) return 'Kategori wajib diisi (maksimal ' . PROJ_KAT_MAX . ' karakter).';
    if (!preg_match('/\A[0-9]{1,12}\z/', $bmin) || !preg_match('/\A[0-9]{1,12}\z/', $bmax)) return 'Budget harus berupa angka bulat tidak negatif.';
    $bmin = (int)$bmin; $bmax = (int)$bmax;
    if ($bmax < $bmin) return 'Budget tidak valid (maks harus >= min).';
    $d = preg_match('/\A\d{4}-\d{2}-\d{2}\z/', $batas) ? DateTime::createFromFormat('!Y-m-d', $batas) : false;
    if (!$d || $d->format('Y-m-d') !== $batas || $batas < date('Y-m-d')) return 'Batas lelang harus tanggal yang valid dan belum lewat.';
    // Pertahanan berlapis: pemilik harus benar-benar user berperan klien
    $r = q('SELECT role FROM users WHERE id = ?', 'i', [$clientId]);
    if (!$r || $r[0]['role'] !== 'klien') return 'Hanya klien yang dapat memasang proyek.';
    q('INSERT INTO projects (client_id, judul, deskripsi, kategori, budget_min, budget_max, batas_lelang) VALUES (?, ?, ?, ?, ?, ?, ?)',
        'isssiis', [$clientId, $judul, $desk, $kat, $bmin, $bmax, $batas]);
    return '';
}
function page_home(): void {
    $s = $_GET['q'] ?? '';
    $s = is_string($s) ? mb_substr(trim($s), 0, PROJ_CARI_MAX) : '';
    $rows = project_list($s);
    $h = '<div class="card"><h1>Daftar Proyek</h1><form class="search" method="get"><input type="hidden" name="page" value="home">'
       . '<input name="q" maxlength="' . PROJ_CARI_MAX . '" placeholder="Cari judul atau kategori..." value="' . e($s) . '"><button>Cari</button></form>'
       . ($s !== '' ? '<p class="muted">Hasil pencarian untuk: <b>' . e($s) . '</b> (' . count($rows) . ' proyek)</p>' : '') . '</div>';
    if (!$rows) $h .= '<div class="card"><p>Belum ada proyek yang cocok.</p></div>';
    foreach ($rows as $p) {
        $h .= '<div class="card"><h2><a href="?page=project&amp;id=' . (int)$p['id'] . '">' . e($p['judul']) . '</a> ' . status_badge((string)$p['status']) . '</h2>'
            . '<p class="muted">Kategori: ' . e($p['kategori']) . ' | Klien: ' . e($p['klien']) . ' | Budget: ' . rp($p['budget_min']) . ' - ' . rp($p['budget_max'])
            . ' | Batas: ' . e($p['batas_lelang']) . ' | ' . (int)$p['jml'] . ' penawaran</p>'
            . '<p>' . e(mb_strimwidth((string)$p['deskripsi'], 0, 160, '...')) . '</p></div>';
    }
    render('Proyek', $h);
}
function page_project(): void {
    $id = filter_var($_GET['id'] ?? null, FILTER_VALIDATE_INT);
    $p = ($id !== false && $id > 0) ? project_find($id) : null;
    if ($p === null) abort(404, 'Proyek tidak ditemukan.');
    $u = current_user();
    $bids = bids_for_project((int)$p['id']);
    $owner = $u && $u['role'] === 'klien' && $u['id'] === (int)$p['client_id'];
    $open = project_is_open($p);
    $h = '<div class="card"><h1>' . e($p['judul']) . ' ' . status_badge((string)$p['status']) . '</h1>'
       . '<p class="muted">Kategori: ' . e($p['kategori']) . ' | Klien: ' . e($p['klien']) . ' | Budget: ' . rp($p['budget_min']) . ' - ' . rp($p['budget_max'])
       . ' | Batas lelang: ' . e($p['batas_lelang']) . '</p>'
       . '<p>' . nl2br(e($p['deskripsi'])) . '</p></div>';
    $h .= '<div class="card"><h2>Penawaran (' . count($bids) . ')</h2>';
    if (!$bids) $h .= '<p>Belum ada penawaran.</p>';
    else {
        $h .= '<table><tr><th>Developer</th><th>Harga</th><th>Durasi</th><th>Proposal</th><th></th></tr>';
        foreach ($bids as $b) {
            $win = !empty($b['is_winner']);
            $h .= '<tr class="' . ($win ? 'winner' : '') . '"><td>' . e($b['dev']) . ($win ? ' <span class="badge win">Pemenang</span>' : '') . '</td>'
                . '<td>' . rp($b['harga']) . '</td><td>' . (int)$b['durasi'] . ' hari</td><td>' . nl2br(e($b['proposal'])) . '</td><td>';
            if ($owner && $p['status'] === 'terbuka') {
                $h .= '<form method="post" action="?page=pick" onsubmit="return confirm(\'Pilih penawaran ini sebagai pemenang?\')">' . csrf_field()
                    . '<input type="hidden" name="project_id" value="' . (int)$p['id'] . '"><input type="hidden" name="bid_id" value="' . (int)$b['id'] . '">'
                    . '<button class="sm">Pilih pemenang</button></form>';
            }
            $h .= '</td></tr>';
        }
        $h .= '</table>';
    }
    $h .= '</div>';
    if ($u && $u['role'] === 'developer') {
        if ($open) {
            $h .= '<div class="card"><h2>Ajukan Penawaran</h2><form method="post" action="?page=bid">' . csrf_field()
                . '<input type="hidden" name="project_id" value="' . (int)$p['id'] . '">'
                . '<div class="row"><div><label>Harga (Rp)</label><input type="number" name="harga" min="1" required></div>'
                . '<div><label>Durasi (hari)</label><input type="number" name="durasi" min="1" required></div></div>'
                . '<label>Proposal</label><textarea name="proposal" required></textarea><p><button>Kirim penawaran</button></p></form></div>';
        } else $h .= '<div class="card"><p class="muted">Lelang sudah ditutup; penawaran tidak dapat diajukan.</p></div>';
    } elseif (!$u && $open) {
        $h .= '<div class="card"><p><a href="?page=login">Masuk</a> sebagai developer untuk mengajukan penawaran.</p></div>';
    }
    render((string)$p['judul'], $h);
}
function page_post(): void {
    $u = need_role('klien'); // peran dimuat dari DB; client_id selalu $u['id']
    $err = '';
    $v = ['judul' => '', 'deskripsi' => '', 'kategori' => '', 'bmin' => '', 'bmax' => '', 'batas' => ''];
    if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
        foreach ($v as $k => $_) { $x = $_POST[$k] ?? ''; $v[$k] = is_string($x) ? $x : ''; }
        $err = project_create($u['id'], $v);
        if ($err === '') { flash('Proyek berhasil dipasang.'); go('?page=dashboard'); }
    }
    $h = '<div class="card"><h1>Pasang Proyek</h1>' . ($err ? '<div class="flash err">' . e($err) . '</div>' : '')
       . '<form method="post" action="?page=post">' . csrf_field()
       . '<label>Judul</label><input name="judul" maxlength="' . PROJ_JUDUL_MAX . '" required value="' . e($v['judul']) . '">'
       . '<label>Deskripsi</label><textarea name="deskripsi" maxlength="' . PROJ_DESK_MAX . '" required>' . e($v['deskripsi']) . '</textarea>'
       . '<label>Kategori</label><input name="kategori" maxlength="' . PROJ_KAT_MAX . '" placeholder="Web, Mobile, Desain, Data, AI..." required value="' . e($v['kategori']) . '">'
       . '<div class="row"><div><label>Budget minimum (Rp)</label><input type="number" name="bmin" min="0" required value="' . e($v['bmin']) . '"></div>'
       . '<div><label>Budget maksimum (Rp)</label><input type="number" name="bmax" min="0" required value="' . e($v['bmax']) . '"></div>'
       . '<div><label>Batas lelang</label><input type="date" name="batas" required value="' . e($v['batas']) . '"></div></div>'
       . '<p><button>Pasang proyek</button></p></form></div>';
    render('Pasang Proyek', $h);
}

// ===== M4: lelang =====
const BID_HARGA_MAX = 999999999999;
const BID_DURASI_MAX = 3650;
const BID_PROPOSAL_MAX = 5000;

function bids_for_project(int $pid): array {
    return q('SELECT b.*, u.nama AS dev FROM bids b JOIN users u ON u.id = b.developer_id
              WHERE b.project_id = ? ORDER BY b.is_winner DESC, b.harga ASC, b.id ASC', 'i', [$pid]);
}
// '' bila sukses, atau pesan galat. $devId HARUS dari sesi.
function bid_create(int $devId, int $pid, int $harga, int $durasi, string $proposal): string {
    $proposal = trim($proposal);
    if ($harga < 1 || $harga > BID_HARGA_MAX) return 'Harga harus bilangan bulat positif yang wajar.';
    if ($durasi < 1 || $durasi > BID_DURASI_MAX) return 'Durasi harus 1 sampai ' . BID_DURASI_MAX . ' hari.';
    if ($proposal === '' || mb_strlen($proposal) > BID_PROPOSAL_MAX) return 'Proposal wajib diisi (maksimal ' . BID_PROPOSAL_MAX . ' karakter).';
    $r = q('SELECT role FROM users WHERE id = ?', 'i', [$devId]);
    if (!$r || $r[0]['role'] !== 'developer') return 'Hanya developer yang dapat mengajukan penawaran.';
    $p = project_find($pid);
    if ($p === null) return 'Proyek tidak ditemukan.';
    if (!project_is_open($p)) return 'Lelang sudah ditutup; penawaran tidak dapat diajukan.';
    try {
        q('INSERT INTO bids (project_id, developer_id, harga, durasi, proposal) VALUES (?, ?, ?, ?, ?)',
            'iiiis', [$pid, $devId, $harga, $durasi, $proposal]);
    } catch (mysqli_sql_exception $ex) {
        if ((int)$ex->getCode() === 1062) return 'Anda sudah mengajukan penawaran pada proyek ini.';
        throw $ex;
    }
    return '';
}
// '' bila sukses, atau pesan galat. $clientId HARUS dari sesi.
function bid_pick(int $clientId, int $pid, int $bidId): string {
    return (string)tx(function () use ($clientId, $pid, $bidId): string {
        // Kepemilikan dicek di SQL; baris proyek dikunci agar tak ada dua pemenang
        $p = q('SELECT id, status FROM projects WHERE id = ? AND client_id = ? FOR UPDATE', 'ii', [$pid, $clientId]);
        if (!$p) return 'Proyek tidak ditemukan atau bukan milik Anda.';
        if ($p[0]['status'] !== 'terbuka') return 'Pemenang sudah dipilih atau lelang sudah ditutup.';
        $b = q('SELECT id FROM bids WHERE id = ? AND project_id = ?', 'ii', [$bidId, $pid]);
        if (!$b) return 'Penawaran tidak valid untuk proyek ini.';
        q('UPDATE bids SET is_winner = 1 WHERE id = ? AND project_id = ?', 'ii', [$bidId, $pid]);
        q("UPDATE projects SET status = 'ditutup' WHERE id = ? AND client_id = ?", 'ii', [$pid, $clientId]);
        return '';
    });
}
function post_int(string $k): int {
    $v = $_POST[$k] ?? null;
    return (is_string($v) && preg_match('/\A[0-9]{1,12}\z/', $v)) ? (int)$v : 0;
}
function page_bid(): void {
    $u = need_role('developer');
    $pid = post_int('project_id');
    $proposal = $_POST['proposal'] ?? '';
    $err = bid_create($u['id'], $pid, post_int('harga'), post_int('durasi'), is_string($proposal) ? $proposal : '');
    if ($err === '') flash('Penawaran berhasil dikirim.'); else flash($err, 'err');
    go($pid > 0 ? '?page=project&id=' . $pid : '?page=home');
}
function page_pick(): void {
    $u = need_role('klien');
    $pid = post_int('project_id');
    $err = bid_pick($u['id'], $pid, post_int('bid_id'));
    if ($err === '') flash('Pemenang berhasil dipilih.'); else flash($err, 'err');
    go($pid > 0 ? '?page=project&id=' . $pid : '?page=home');
}

// ===== M5: dasbor =====
// $uid HARUS dari sesi. Proyek milik klien tersebut beserta jumlah penawarannya.
function client_projects(int $uid): array {
    return q('SELECT p.*, (SELECT COUNT(*) FROM bids b WHERE b.project_id = p.id) AS jml
              FROM projects p WHERE p.client_id = ? ORDER BY p.id DESC', 'i', [$uid]);
}
// $uid HARUS dari sesi. Penawaran milik developer tersebut beserta status proyeknya.
function developer_bids(int $uid): array {
    return q('SELECT b.*, p.judul, p.status, p.batas_lelang, u.nama AS klien
              FROM bids b JOIN projects p ON p.id = b.project_id JOIN users u ON u.id = p.client_id
              WHERE b.developer_id = ? ORDER BY b.id DESC', 'i', [$uid]);
}
function page_dashboard(): void {
    $u = need_role(...SELF_ROLES);
    if ($u['role'] === 'klien') {
        $rows = client_projects($u['id']);
        $h = '<div class="card"><h1>Proyek Saya</h1><p><a href="?page=post">Pasang proyek baru</a></p></div>';
        if (!$rows) $h .= '<div class="card"><p>Anda belum memasang proyek.</p></div>';
        foreach ($rows as $p) {
            $h .= '<div class="card"><h2><a href="?page=project&amp;id=' . (int)$p['id'] . '">' . e($p['judul']) . '</a> ' . status_badge((string)$p['status']) . '</h2>'
                . '<p class="muted">Budget: ' . rp($p['budget_min']) . ' - ' . rp($p['budget_max'])
                . ' | Batas: ' . e($p['batas_lelang']) . ' | ' . (int)$p['jml'] . ' penawaran</p></div>';
        }
    } else {
        $rows = developer_bids($u['id']);
        $h = '<div class="card"><h1>Penawaran Saya</h1></div>';
        if (!$rows) $h .= '<div class="card"><p>Anda belum mengajukan penawaran.</p></div>';
        foreach ($rows as $b) {
            $h .= '<div class="card"><h2><a href="?page=project&amp;id=' . (int)$b['project_id'] . '">' . e($b['judul']) . '</a> ' . status_badge((string)$b['status'])
                . ((int)$b['is_winner'] === 1 ? ' <span class="badge open">Pemenang</span>' : '') . '</h2>'
                . '<p class="muted">Klien: ' . e($b['klien']) . ' | Harga: ' . rp($b['harga']) . ' | Durasi: ' . (int)$b['durasi'] . ' hari'
                . ' | Batas: ' . e($b['batas_lelang']) . '</p></div>';
        }
    }
    render('Dasbor', $h);
}

// ===== M6: admin =====
// Pemanggil HARUS sudah need_role('admin'); $actorId dari sesi, bukan dari form.
function admin_set_role(int $actorId, int $uid, string $role): string {
    if ($uid <= 0) return 'User tidak valid.';
    if ($uid === $actorId) return 'Anda tidak dapat mengubah peran akun sendiri.';
    if (!in_array($role, ROLES, true)) return 'Peran tidak valid.';
    if (!q('SELECT id FROM users WHERE id = ?', 'i', [$uid])) return 'User tidak ditemukan.';
    q('UPDATE users SET role = ? WHERE id = ?', 'si', [$role, $uid]);
    return '';
}
function admin_delete_user(int $actorId, int $uid): string {
    if ($uid <= 0) return 'User tidak valid.';
    if ($uid === $actorId) return 'Anda tidak dapat menghapus akun sendiri.';
    // Proyek dan penawaran ikut terhapus lewat FK ON DELETE CASCADE
    $n = q('DELETE FROM users WHERE id = ?', 'i', [$uid]);
    return $n > 0 ? '' : 'User tidak ditemukan.';
}
function admin_delete_project(int $pid): string {
    if ($pid <= 0) return 'Proyek tidak valid.';
    // Penawaran ikut terhapus lewat FK ON DELETE CASCADE
    $n = q('DELETE FROM projects WHERE id = ?', 'i', [$pid]);
    return $n > 0 ? '' : 'Proyek tidak ditemukan.';
}
function page_admin(): void {
    $u = need_role('admin');
    if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
        $act = $_POST['act'] ?? '';
        $uid = post_int('user_id');
        if ($act === 'role') {
            $role = $_POST['role'] ?? '';
            $err = admin_set_role($u['id'], $uid, is_string($role) ? $role : '');
            $ok = 'Peran user diubah.';
        } elseif ($act === 'del_user') {
            $err = admin_delete_user($u['id'], $uid);
            $ok = 'User dihapus.';
        } elseif ($act === 'del_project') {
            $err = admin_delete_project(post_int('project_id'));
            $ok = 'Proyek dihapus.';
        } else {
            $err = 'Aksi tidak dikenal.';
            $ok = '';
        }
        if ($err === '') flash($ok); else flash($err, 'err');
        go('?page=admin');
    }
    $users = q('SELECT id, nama, email, role FROM users ORDER BY id');
    $projects = q('SELECT p.id, p.judul, p.status, u.nama AS klien
                   FROM projects p JOIN users u ON u.id = p.client_id ORDER BY p.id DESC');
    $h = '<div class="card"><h1>Admin</h1></div><div class="card"><h2>Kelola User</h2><table>'
       . '<tr><th>ID</th><th>Nama</th><th>Email</th><th>Peran</th><th>Aksi</th></tr>';
    foreach ($users as $r) {
        $id = (int)$r['id'];
        $h .= '<tr><td>' . $id . '</td><td>' . e($r['nama']) . '</td><td>' . e($r['email']) . '</td><td>' . e($r['role']) . '</td><td>';
        if ($id === $u['id']) {
            $h .= '<span class="muted">(akun Anda)</span>';
        } else {
            $h .= '<form class="inline" method="post" action="?page=admin">' . csrf_field()
                . '<input type="hidden" name="act" value="role"><input type="hidden" name="user_id" value="' . $id . '"><select name="role">';
            foreach (ROLES as $ro) $h .= '<option value="' . e($ro) . '"' . ($ro === $r['role'] ? ' selected' : '') . '>' . e($ro) . '</option>';
            $h .= '</select> <button class="sm" type="submit">Ubah</button></form> '
                . '<form class="inline" method="post" action="?page=admin" onsubmit="return confirm(\'Hapus user beserta proyek dan penawarannya?\')">' . csrf_field()
                . '<input type="hidden" name="act" value="del_user"><input type="hidden" name="user_id" value="' . $id . '">'
                . '<button class="sm sec" type="submit">Hapus</button></form>';
        }
        $h .= '</td></tr>';
    }
    $h .= '</table></div><div class="card"><h2>Kelola Proyek</h2><table>'
        . '<tr><th>ID</th><th>Judul</th><th>Klien</th><th>Status</th><th>Aksi</th></tr>';
    foreach ($projects as $p) {
        $id = (int)$p['id'];
        $h .= '<tr><td>' . $id . '</td><td><a href="?page=project&amp;id=' . $id . '">' . e($p['judul']) . '</a></td><td>' . e($p['klien'])
            . '</td><td>' . status_badge((string)$p['status']) . '</td><td>'
            . '<form class="inline" method="post" action="?page=admin" onsubmit="return confirm(\'Hapus proyek beserta penawarannya?\')">' . csrf_field()
            . '<input type="hidden" name="act" value="del_project"><input type="hidden" name="project_id" value="' . $id . '">'
            . '<button class="sm sec" type="submit">Hapus</button></form></td></tr>';
    }
    render('Admin', $h . '</table></div>');
}

// ===== M1: router =====
$page = (string)($_GET['page'] ?? 'home');
if (!isset(ROUTES[$page])) abort(404, 'Halaman tidak ditemukan.');
[$handler, $methods] = ROUTES[$page];
if (!in_array($_SERVER['REQUEST_METHOD'] ?? 'GET', $methods, true)) {
    header('Allow: ' . implode(', ', $methods));
    abort(405, 'Metode tidak diizinkan.');
}
session_boot();
if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') check_csrf();
$handler();
```

---
