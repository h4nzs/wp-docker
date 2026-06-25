# AGENTS.md — WordPress + Personel

## Gambaran Umum

Situs WordPress (`profesional-indonesia.com`) dengan sistem **Personel** (registrasi fotografer/videografer). Berjalan via Docker secara lokal untuk folder ini. Semua logika kustom ada di `functions.php` tema aktif (9022 baris pada saat dokumentasi ini dibuat).

## Memulai Cepat

```bash
docker compose up -d          # MySQL 8.0 + WordPress on :8080 (default)
docker compose down           # hentikan container
```

- Situs: http://localhost:8080
- DB: `wordpress` / user `wpuser` / pass `wppassword` / root `rootpassword`
- Prefix DB: `wp9y_`
- Snapshot produksi: `wp-content/database.sql` (All-in-One WP Migration, 12k+ baris)
- Tidak ada build step, package.json, composer (kecuali vendor plugin)

## Tema & Tata Letak Kode

- **Tema aktif**: `wp-content/themes/hello-elementor/` (Hello Elementor v3.4.7)
- **Tidak ada child theme** — semua kustomisasi langsung di tema induk
- **Semua logika Personel**: `wp-content/themes/hello-elementor/functions.php` (9022 baris)
- **Sistem modul tema**: `theme.php` + `modules/admin-home/` (kerangka HelloTheme — bukan kustom)
- **Dependensi CDN**: DataTables (tabel admin), Select2 (dropdown), Swiper.js (karosel)

## Plugin Inti

Elementor Pro, JetEngine, JetFormBuilder, Rank Math SEO, RevSlider, SpeedyCache (pro), Admin Menu Editor, Google Site Kit, WP phpMyAdmin, Click to Chat, HEIC Support, Maintenance, Akismet, Premium Addons for Elementor, GoSMTP, Yoast SEO.

## Skema Database

### `wp9y_personel` — Data personel utama

| Kolom | Tipe | Keterangan |
|---|---|---|
| `id` | BIGINT AUTO_INCREMENT PK | |
| `username` | VARCHAR(100) | Dari `nama_panggilan`, unik |
| `password` | VARCHAR(255) | `wp_hash_password()` (bcrypt) |
| `email` | VARCHAR(100) | Unik, dipakai juga untuk login |
| `nama_lengkap` | VARCHAR(255) | |
| `nama_panggilan` | VARCHAR(100) | Hanya nama depan |
| `kode_nama` | VARCHAR(50) | Format: `{NOMOR}-{KODE_POSISI}` mis. `0001-FDE` |
| `foto_profil` | VARCHAR(500) | URL |
| `cv_url` | VARCHAR(500) | URL PDF |
| `sertifikat_multiple` | LONGTEXT | JSON array URL gambar sertifikat |
| `no_hp` | VARCHAR(50) | |
| `tanggal_lahir` | DATE | |
| `domisili` | TEXT | Lihat Sistem Domisili |
| `posisi` | VARCHAR(50) | Kode pisah koma: `F,V,D,E,X,A,P` |
| `tag` | TEXT | Pisah koma |
| `deskripsi` | TEXT | |
| `peralatan` | TEXT | |
| `pricelist_perhari` | VARCHAR(50) | `dibawah_1jt`, `1jt_3jt`, `diatas_3jt` |
| `pricelist` | LONGTEXT | HTML dari `wp_editor` |
| `porto_links` | TEXT | JSON array URL portofolio eksternal |
| `facebook`,`instagram`,`tiktok`,`thread`,`youtube` | VARCHAR(500) | URL sosial media |
| `status` | VARCHAR(20) | `pending` → `approved` / `non-aktif` |
| `rekomendasi` | VARCHAR(10) | `ya`/`tidak` |
| `show_sosmed` | TINYINT(1) | Toggle visibilitas sosial media |
| `reset_token` | VARCHAR(100) | Token reset password |
| `reset_expiry` | DATETIME | Masa berlaku token (1 jam) |
| `created_at` | DATETIME | |

### `wp9y_personel_draft_edit` — Draft perubahan profil tertunda

| Kolom | Tipe |
|---|---|
| `id` | INT AUTO_INCREMENT PK |
| `personel_id` | BIGINT UNIQUE |
| `draft_data` | LONGTEXT — JSON semua field yang diubah |
| `updated_at` | DATETIME |

### `wp9y_portofolio` — Item portofolio foto

`id`, `personel_id`, `judul`, `foto_url`, `tanggal_kegiatan`, `lokasi`, `tahun`, `deskripsi`, `tags`, `status`, `created_at`

### `wp9y_portofolio_video` — Portofolio video (hanya URL YouTube)

`id`, `personel_id`, `judul`, `video_url`, `tanggal_kegiatan`, `lokasi`, `tahun`, `deskripsi`, `tags`, `status`, `created_at`

### `wp9y_kategori` — Kategori portofolio

| Kolom | Tipe |
|---|---|
| `id` | INT AUTO_INCREMENT PK |
| `nama` | VARCHAR(100) UNIQUE |
| `slug` | VARCHAR(100) UNIQUE |
| `deskripsi` | TEXT |

11 kategori bawaan: Wedding & Personal, Corporate & Company, Event Documentation, Commercial & Advertising, Media & Entertainment, Film & Cinematic, Drone & Aerial, Outdoor/Travel/Nature, Photography Art & Style, Multimedia & Production Service, Lainnya.

### Tabel mapping

- `wp9y_portofolio_kategori_map` — `(portofolio_id, kategori_id)` PK
- `wp9y_portofolio_video_kategori_map` — `(video_id, kategori_id)` PK

### `wp9y_popup_ad` — Iklan popup (satu baris)

`id`, `image_url`, `link_url`, `is_active`, `updated_at`

---

## Sistem Auth Kustom

### PHP Sessions (bukan cookie WP)
```php
add_action('init', 'personel_start_session', 1);    // :2223
```
- `is_personel_logged_in()` cek `$_SESSION['personel_id']` — mengawasi dashboard

### Alur Login (`[form_login_personel]` :2255)
1. Kirim username/email + password
2. Query `wp9y_personel` WHERE `(email OR username) AND status='approved'`
3. `wp_check_password()` terhadap hash bcrypt
4. Set `$_SESSION['personel_id', 'personel_nama', 'personel_email']`
5. Buat/cari shadow WP user (role: `personel`) lalu panggil `wp_set_auth_cookie()` — mengaktifkan upload media
6. Redirect ke `/dashboard-personel`

### Logout
`?personel_action=logout` → `session_destroy()` + `wp_logout()` → redirect ke `/login-personel`

### Kode Posisi
| Kode | Label |
|---|---|
| F | Fotografer |
| V | Videografer |
| D | Drone |
| E | Editor |
| X | VFX |
| A | Animator |
| P | AI Artist - Prompt Engineer |

Mapping: `personel_posisi_label($code)` :2217

### Generasi Kode Nama
Format: `{NOMOR}-{HURUF_POSISI}` mis. `0001-FDE`
- Baca `kode_nama` terakhir dari DB, ekstrak nomor, increment
- Tambahkan kode posisi unik yang terurut

---

## Shortcode

| Shortcode | Baris | Kegunaan |
|---|---|---|
| `[personel_register]` | :275 | Form registrasi |
| `[personel_thankyou]` | :1096 | Halaman sukses setelah daftar |
| `[form_login_personel]` | :2255 | Form login dengan modal lupa password |
| `[dashboard_personel]` | :2551 | Dashboard member (5 tab) |
| `[list_personel_publik]` | :5144 | Direktori personel publik dengan filter |
| `[detail_personel_luxury]` | :5454 | Halaman profil personel tunggal |
| `[arsip_foto_publik]` | :5923 | Galeri foto publik (infinite scroll) |
| `[arsip_video_publik]` | :6253 | Galeri video publik (infinite scroll) |
| `[switch_porto_button]` | :6613 | Tombol toggle tab Foto/Video |
| `[carousel_event_terbaru]` | :6692 | Karosel posting event (Swiper) |
| `[carousel_home_porto]` | :7085 | Karosel portofolio homepage (Swiper) |
| `[personel_reset_form]` | :7599 | Form reset password |

---

## Endpoint AJAX

Semua via `admin-ajax.php`:

| Aksi | Auth | Baris | Kegunaan |
|---|---|---|---|
| `fetch_wilayah` | tidak | :1684 | Proksi API wilayah Indonesia Emsifa |
| `toggle_status_personel` | admin | :1654 | Setujui/non-aktifkan personel |
| `toggle_porto_status` | admin | :4513 | Setujui/tolak item portofolio |
| `load_more_porto` | tidak | :5958 | Infinite scroll — arsip foto |
| `load_more_porto_video` | tidak | :6283 | Infinite scroll — arsip video |
| `update_rekomendasi` | admin | :6908 | Toggle flag rekomendasi |
| `update_show_sosmed` | admin | :6944 | Toggle visibilitas sosial media |

### Proksi API Emsifa (`fetch_wilayah` :1686)
- `type=provinces` → `https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json`
- `type=regencies&prov_id=N` → `https://emsifa.github.io/api-wilayah-indonesia/api/regencies/{N}.json`
- Melewati CORS dengan proksi lewat WordPress

---

## Panel Admin (wp-admin)

### Struktur Menu
- **Personel** (`personel-admin`, posisi 30) → DataTable dengan setujui/hapus/toggle
  - **Portofolio Foto** (`personel-porto`) → Kelola portofolio foto
  - **Portofolio Video** (`personel-video`) → Kelola portofolio video
- **Popup Iklan** (`popup-iklan`, posisi 80) → Pengaturan popup iklan

### Daftar Personel (`personel_admin_page` :1228)
- DataTable dengan cari, badge status, toggle rekomendasi, indikator "Pending Edit"
- AJAX toggle status, tombol Approve untuk pending, cascade-delete (portofolio + file)
- Lihat detail di `?page=personel-admin&view=ID`

### Tampilan Detail (`personel_view_detail` :1813)
- Tampilan profil lengkap dengan avatar, statistik, tautan eksternal, download CV, grid sertifikat
- **Tinjauan Draft** (jika draft ada): tabel diff berdampingan dengan pratinjau visual
  - Setujui: terapkan draft, hapus file yang diganti
  - Tolak: hapus file draft, hapus baris draft
- Tautan eksternal dari JSON
- Label posisi dipetakan, umur otomatis

### Halaman Admin Portofolio (`personel_porto_admin_page` :4368, `personel_video_admin_page` :5003)
- DataTable per tipe; AJAX setujui/toggle; hapus dengan pembersihan file
- Video: pratinjau iframe YouTube tertanam

### Admin Popup Iklan (`popup_ad_admin_page` :7667)
- URL Gambar (media uploader), URL Tautan, checkbox Aktif, pratinjau langsung

---

## Dashboard Member (`[dashboard_personel]` :2551)

### Tab (via `?tab=`)

| Tab | Key | Fungsi | Keterangan |
|---|---|---|---|
| Dashboard | `dashboard` | `render_personel_home()` | Kartu sambutan + statistik |
| Edit Profil | `edit-profil` | `render_personel_edit_profil()` | Form lengkap → simpan sebagai draft |
| Portofolio Foto | `foto` | daftar / tambah / edit | CRUD dengan mapping kategori, maks 20 |
| Portofolio Video | `video` | daftar / tambah / edit | CRUD (hanya URL YouTube), maks 8 |
| Artikel | `artikel` | `render_tab_artikel_personel()` | Buat posting WP (menunggu review) |

### Kuota Portofolio
- `get_status_kuota_personel($personel_id, $type)` :6886 — cek jumlah
- Foto: maks 20, Video: maks 8

---

## Sistem Draft Profil

**Perubahan TIDAK langsung diterapkan.** Disimpan ke `wp9y_personel_draft_edit` sebagai JSON untuk review admin.

### Alur
1. **Edit** (`update_profile_personel` POST, :2745)
   - Bangun array `$draft_fields` dengan semua field form + URL file
   - File diunggah langsung (disimpan di disk)
   - Bersihkan file yatim dari draft sebelumnya
   - `$wpdb->replace()` upsert draft
2. **Review Admin** — diff berdampingan di tampilan detail (:1831)
   - Tangani tipe khusus: gambar, file, posisi (label), tautan (JSON sort-compare)
3. **Setujui** — terapkan draft, hapus file lama, hapus baris draft
4. **Tolak** — hapus file draft baru, hapus baris draft, data asli tetap

---

## Sistem Video

- Hanya URL YouTube (tanpa upload file)
- `get_video_embed_url($url)` :4643 — normalisasi berbagai format URL YouTube ke embed
- Pakai `https://img.youtube.com/vi/{ID}/mqdefault.jpg` untuk thumbnail
- Ditampilkan dalam grid dengan overlay tombol play; klik buka modal dengan iframe

---

## Sistem Kategori

- 11 kategori di `wp9y_kategori`, dipetakan via tabel junction
- `render_portfolio_category_selection()` :8148 — UI checkbox di form dashboard (maks 3, layout tabel)
- `render_portfolio_category_filter_bar()` :8310 — filter bar di halaman arsip publik dengan panel detail/penjelasan

---

## Sistem Domisili

**Format penyimpanan** di kolom `domisili`:
- Tunggal: `Jawa Barat - Bandung, Bekasi`
- Multi: `Jawa Barat - Bandung, Bekasi || Jawa Timur - Surabaya`
- Lama: `Bandung, Jawa Barat`

**Registrasi**: Provinsi 1 wajib, Provinsi 2 opsional. Select2 dengan maks 10 kota.
**Backend**: Parse separator `||` dan ` - `; tangani format lama `, `.

---

## Halaman Publik

### Direktori Personel (`[list_personel_publik]` :5146)
- Filter: cari teks, posisi, range harga, provinsi (Select2), kota
- Hanya `status='approved'`
- Urut rekomendasi duluan (`rekomendasi = 'ya'`)
- Tampilan kartu: foto, `{firstName}-{kode_nama}`, tag posisi, lokasi, umur, jumlah karya, tag harga

### Profil Detail (`[detail_personel_luxury]` :5456, via `?kode=`)
- Layout dua kolom (35/65) → tumpuk di mobile
- Kiri: foto, pricelist (HTML), sosial media (kondisional pada `show_sosmed`)
- Kanan: nama/kode, umur, domisili, posisi, bio, tag, grid sertifikat, peralatan
- Bawah: grid portofolio video + foto dengan modal

### Halaman Arsip (`[arsip_foto_publik]` :5924, `[arsip_video_publik]` :6254)
- Filter bar kategori, cari, urut (terbaru/terlama post/tanggal kegiatan)
- Grid 4-kolom → 2-kolom → 1-kolom mobile
- Infinite scroll via "MUAT LEBIH BANYAK" (12 per muat, AJAX)
- Modal: gambar penuh / iframe YouTube + metadata

### Modal Portofolio (bersama, `lx_universal_porto_assets` :6346)
- Overlay fade-in dengan backdrop blur
- iframe untuk video, img untuk foto
- Panel info: judul, penulis, lokasi, tahun, tanggal, deskripsi
- Tutup: X, klik overlay, ESC

---

## Sistem Artikel

- `lx_handle_artikel_personel()` :7258 (hook `init`)
- Buat WP `post` dengan kategori "Artikel" (auto-buat), status `pending`
- Featured image via `media_handle_upload()`
- `personel_id` dari session disimpan di meta `_personel_author_id`
- Form: `render_tab_artikel_personel()` :7308 — judul, gambar sampul, `wp_editor()` konten

---

## Iklan Popup

- Tabel `wp9y_popup_ad` satu baris, auto-buat via `popup_ad_create_table()` :7608
- Ditampilkan di `wp_footer` priority 9999 :8005
- Session-storage: tampil sekali per sesi browser
- Gambar portrait (maks 380px), tutup via tombol/overlay/ESC

---

## Karosel (Swiper.js)

### Karosel Event (`[carousel_event_terbaru]` :6694)
- Query posting WP di kategori "kebutuhan event", 10 terbaru
- 1 slide mobile, 2 tablet+, tanpa autoplay

### Karosel Portfolio Home (`[carousel_home_porto]` :7087)
- Atribut: `type=foto` atau `type=video`
- 10 item terbaru yang disetujui, kartu tetap (258×154px)
- Loop aktif, panah navigasi emas

---

## Referensi Hook WordPress

### Actions (semua baris merujuk ke panggilan `add_action`)
| Hook | Callback | Priority | Baris |
|---|---|---|---|
| `init` | `personel_start_session` | 1 | :2223 |
| `init` | `handle_personel_register` | | :861 |
| `init` | `personel_logout_handler` | | :2235 |
| `init` | `lx_handle_artikel_personel` | | :7257 |
| `init` | `handle_personel_password_reset` | | :7533 |
| `init` | `portfolio_kategori_setup_db` | | :8143 |
| `init` | `hello_elementor_customizer` | | :238 |
| `admin_menu` | `personel_admin_menu` | | :1228 |
| `admin_menu` | `personel_admin_menu_porto` | | :1241 |
| `admin_menu` | `personel_admin_menu_video` | | :1252 |
| `admin_menu` | `popup_ad_admin_menu` | | :7651 |
| `admin_enqueue_scripts` | `personel_enqueue_datatables` | | :1263 |
| `admin_enqueue_scripts` | `popup_ad_admin_enqueue` | | :7662 |
| `admin_head` | `lx_status_personel_assets` | | :1713 |
| `admin_footer` | `lx_porto_status_scripts` | | :4544 |
| `admin_footer` | `lx_rekomendasi_custom_assets` | | :6971 |
| `admin_init` | `popup_ad_create_table` | | :7635 |
| `wp_footer` | `lx_porto_foto_assets` | | :6013 |
| `wp_footer` | `lx_universal_porto_assets` | | :6345 |
| `wp_footer` | `force_premium_menu_new_tab_specific` | | :6868 |
| `wp_footer` | `popup_ad_render_frontend` | 9999 | :8005 |
| `wp_footer` | `inject_load_more_to_default_wp_widgets` | 99 | :8816 |
| `wp_footer` | anonim (JS arsip video) | | :6475 |
| `add_meta_boxes` | `lx_sidebar_ad_meta_box` | | :8011 |
| `save_post` | `lx_sidebar_ad_save_meta` | | :8057 |

### AJAX Hooks
| Hook | Callback | Baris |
|---|---|---|
| `wp_ajax_toggle_status_personel` | `lx_toggle_status_personel_handler` | :1654 |
| `wp_ajax_fetch_wilayah` | `proxy_fetch_wilayah` | :1684 |
| `wp_ajax_nopriv_fetch_wilayah` | `proxy_fetch_wilayah` | :1685 |
| `wp_ajax_toggle_porto_status` | `lx_toggle_porto_status_handler` | :4513 |
| `wp_ajax_load_more_porto` | `handle_ajax_load_more` | :5958 |
| `wp_ajax_nopriv_load_more_porto` | `handle_ajax_load_more` | :5959 |
| `wp_ajax_load_more_porto_video` | `ajax_video_handler_fixed` | :6283 |
| `wp_ajax_nopriv_load_more_porto_video` | `ajax_video_handler_fixed` | :6284 |
| `wp_ajax_update_rekomendasi` | `lx_handle_update_rekomendasi` | :6908 |
| `wp_ajax_update_show_sosmed` | `lx_handle_update_show_sosmed` | :6944 |

### Filters
| Hook | Callback | Baris |
|---|---|---|
| `wp_get_nav_menu_items` | `custom_personel_menu_filter` (pri 20) | :4331 |
| `upload_size_limit` | `izinkan_personel_upload_limit` | :7408 |
| `show_admin_bar` | `sembunyikan_admin_bar_untuk_personel` | :7416 |
| `hello_elementor_page_title` | `hello_elementor_check_hide_title` | :258 |

### Shortcodes
| Shortcode | Callback | Baris |
|---|---|---|
| `personel_register` | `personel_register_form` | :859 |
| `personel_thankyou` | `personel_thankyou_display` | :1226 |
| `form_login_personel` | `personel_login_form_shortcode` | :2255 (×2, duplikat) |
| `dashboard_personel` | `personel_dashboard_shortcode` | :2551 |
| `list_personel_publik` | `render_list_personel_publik` | :5144 |
| `detail_personel_luxury` | `render_detail_personel_shortcode` | :5454 |
| `arsip_foto_publik` | `shortcode_arsip_foto` | :5923 |
| `arsip_video_publik` | `shortcode_arsip_video_fixed` | :6253 |
| `switch_porto_button` | `render_switch_porto_button` | :6613 |
| `carousel_event_terbaru` | `render_carousel_event_terbaru` | :6692 |
| `carousel_home_porto` | `render_carousel_home_porto_split` | :7085 |
| `personel_reset_form` | `personel_reset_password_form_shortcode` | :7599 |

---

## Upload Media

- Semua upload via `wp_handle_upload()` dengan daftar putih MIME
- Foto profil: JPG/PNG/WEBP, maks 2MB (validasi kustom di registrasi)
- CV: PDF saja
- Sertifikat: banyak gambar (JPG/PNG/WEBP), disimpan sebagai JSON array
- Foto portofolio: JPG/PNG/WEBP, maks 3MB
- Video portofolio: hanya URL YouTube (tanpa file)
- Batas ukuran upload: 64MB default, 10MB untuk role `personel` via `izinkan_personel_upload_limit()` :7409
- PHP INI (`uploads.ini`) mengizinkan hingga 2G

---

## Pola CSS/JS

- **Modal kustom** (ganti `alert()`): modal CSS dinamis dengan border emas/sukses atau merah/error
- **Select2 tema gelap**: dropdown provinsi pakai `minimumResultsForSearch: -1`, multi-pilih kota pakai `maximumSelectionLength: 3`
- **DataTables**: dimuat hanya di halaman admin personel (`cdn.datatables.net/1.13.6/`), locale Indonesia
- **Swiper.js**: CDN `cdn.jsdelivr.net/npm/swiper@11/`, dipakai di 2 karosel
- **Sistem tag**: implementasi JS kustom (input → hidden field pisah koma) — diduplikasi di registrasi, edit profil, upload/edit portofolio
- **Warna**: `#d4af37` (emas), `#1a1a1a` (gelap), `#333` (border)

---

## Keanehan & Celah

- **Shortcode `form_login_personel` didaftarkan dua kali** (:2255, :2257) — duplikat tidak berbahaya
- **Tidak ada regenerasi session** setelah login — potensi session fixation
- **Debug output reset password** (~:7484) memperlihatkan token saat validasi gagal — hapus sebelum produksi
- **Nama kolom draft**: query `SELECT id FROM wp9y_personel_draft_edit` berfungsi karena kolom memang bernama `id` — benar
- **Cek `has_draft`** pakai `$wpdb->get_var("SELECT id FROM ...")` — mengembalikan nilai `id` atau null; bekerja sebagai boolean
- **Filter menu** (`custom_personel_menu_filter` :4333) menyisipkan link dashboard ke navigasi utama saat personel login
- **`inject_load_more_to_default_wp_widgets`** (:8817) — menambahkan tombol "MUAT LEBIH BANYAK" ke grid posting Elementor/WP
- **Cache SpeedyCache**: `advanced-cache.php.bak` adalah cadangan cache bootstrap SpeedyCache

## Sistem Sidebar Artikel

Sidebar otomatis muncul di halaman artikel (`is_single()`) via filter `the_content`.

### Komponen
1. **Artikel Terkait**: 5 posting terbaru dari kategori yang sama (query: `WP_Query` dengan `category__in`)
2. **Iklan Sidebar**: 1 slot gambar per artikel, disimpan sebagai **post meta** (`_sidebar_ad_image`, `_sidebar_ad_link`, `_sidebar_ad_active`)

### Admin (Meta Box)
- Meta box **Iklan Sidebar Artikel** di sidebar editor postingan (`add_meta_box` hook)
- Field: URL gambar (media uploader), URL link, checkbox aktif
- Fungsi: `lx_sidebar_ad_meta_box()` :8011 (render), `lx_sidebar_ad_save_meta()` :8057 (simpan)
- Disimpan sebagai post meta via `save_post` hook

### Layout
- Desktop: flex dua kolom (konten ~70%, sidebar 300px fixed)
- Mobile: tumpuk vertikal
- CSS di-inline via `the_content` filter
