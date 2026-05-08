# Laporan Implementasi Secure Coding - Secure Campus 🏫

## 1. Identitas
- **Nama:** Yohanes Hilapok
- **NIM:** 72230670
- **Kelas:** A
- **Mata Kuliah:** Keamanan Sistem Informasi

## 2. Link GitHub
[https://github.com/Jhonhil/secure-campus.git](https://github.com/Jhonhil/secure-campus.git)

## 3. Deskripsi Aplikasi
**Secure Campus** adalah aplikasi manajemen kampus sederhana (e-class) yang dirancang dengan mengutamakan keamanan aplikasi web. Aplikasi ini mengimplementasikan fitur autentikasi lengkap seperti registrasi, verifikasi email, login, logout, dan reset password, yang semuanya diperkuat dengan standar keamanan **OWASP ASVS (Application Security Verification Standard) Level 1**.

## 4. Tools & Teknologi
- **Framework:** Laravel 13
- **Frontend:** Livewire 4 & Flux UI
- **Styling:** Tailwind CSS 4
- **Database:** MySQL (Laragon)
- **Environment:** PHP 8.3, Composer, Node.js, VS Code, GitHub

## 5. Fitur Authentication & Otorisasi
- **Login & Registrasi**: Proses masuk dan daftar akun dengan validasi input yang ketat.
- **Email Verification**: Mewajibkan pengguna memverifikasi email untuk meningkatkan kredibilitas akun.
- **Password Reset**: Fitur pemulihan kata sandi yang aman menggunakan token unik melalui email.
- **Multi-Factor Authentication (MFA)**: Dukungan 2FA untuk lapisan keamanan tambahan.
- **Role-Based Access Control (RBAC)**: Pembagian hak akses antara peran **Admin** dan **User** untuk membatasi akses ke fitur sensitif.
- **Secure Password Storage**: Semua kata sandi disimpan menggunakan hashing (Bcrypt/Argon2).

## 6. Penjelasan Secure Coding
Aplikasi ini menerapkan prinsip *security-by-design* berdasarkan **ASVS Level 1** untuk menutup celah keamanan umum:
- **Pencegahan Injeksi**: Implementasi Eloquent ORM memastikan semua input diparameterisasi, sehingga mencegah serangan SQL Injection.
- **Proteksi XSS**: Menggunakan engine Blade yang secara otomatis melakukan *output encoding* pada semua variabel `{{ $var }}`, mencegah serangan Cross-Site Scripting.
- **Mitigasi CSRF**: Menggunakan middleware `@csrf` pada setiap form untuk memverifikasi bahwa request berasal dari sesi yang sah.
- **Keamanan Transportasi**: Menggunakan custom middleware `SecurityHeaders` untuk mengirimkan header `Strict-Transport-Security` (HSTS), `Content-Security-Policy` (CSP) yang ketat, dan `X-Content-Type-Options: nosniff`.

## 7. Mapping ASVS Level 1

| ID | Kategori | Status | Implementasi di Aplikasi |
| :--- | :--- | :---: | :--- |
| **V1.2.1** | Output Encoding | ✅ | Menggunakan sintaks `{{ }}` Blade untuk automatic XSS protection. |
| **V1.2.4** | SQL Injection Prevention | ✅ | Menggunakan Eloquent ORM untuk semua query database. |
| **V2.1.1** | Validation Documentation | ✅ | Aturan validasi terdefinisi jelas pada server-side logic. |
| **V2.2.1** | Input Validation | ✅ | Validasi input ketat pada form registrasi, login, dan reset password. |
| **V3.3.1** | Secure Cookie | ✅ | `HttpOnly` aktif; `SameSite=Lax` untuk mitigasi CSRF. |
| **V3.4.1** | HSTS & Security Headers | ✅ | Implementasi HSTS, X-Content-Type-Options, dan Strict CSP. |
| **V3.5.1** | CSRF Protection | ✅ | Menggunakan middleware CSRF bawaan Laravel pada semua form. |
| **V6.2.1** | Password Min Length | ✅ | Password minimal 8 karakter. |
| **V6.2.4** | Common Password Rejection | ✅ | Rule `NotCommonPassword` untuk mencegah password mudah ditebak. |
| **V6.2.5** | Password Composition | ✅ | Mewajibkan kombinasi huruf besar, huruf kecil, angka, dan simbol. |
| **V6.3.1** | Brute Force Defense | ✅ | Implementasi Rate Limiting pada endpoint login dan 2FA. |
| **V7.2.4** | Session Regeneration | ✅ | Session otomatis diregenerasi saat proses autentikasi. |
| **V8.2.1** | RBAC / Access Control | ✅ | Implementasi Role-Based Access Control (Admin & User). |
| **V8.3.1** | Server-Side Authorization | ✅ | Proteksi route menggunakan middleware `auth`, `verified`, dan `role`. |
| **V13.4.1**| Secret Protection | ✅ | `.env` tidak dipush ke repo; Metadata `.git` terlindungi. |

## 8. Proses Pembuatan
1. **Inisialisasi Project**: Membuat project menggunakan Laravel installer.
2. **Konfigurasi Lingkungan**: Setting database MySQL melalui Laragon dan konfigurasi `.env`.
3. **Database Schema**: Membuat migration untuk tabel `users` dan menambahkan kolom `role` untuk kebutuhan RBAC.
4. **Implementasi Auth**: Memasang Laravel Fortify untuk fitur registrasi, login, 2FA, dan password reset.
5. **Security Hardening**:
   - Mengimplementasikan `SecurityHeaders` middleware untuk proteksi header browser.
   - Memperketat `PasswordRules` agar mewajibkan karakter kompleks (L1 V6.2.5).
   - Membangun `CheckRole` middleware untuk memvalidasi hak akses pengguna di server-side.
6. **Frontend Development**: Membangun UI yang responsif dan aman menggunakan Livewire 4 dan Flux UI.
7. **Pengujian & Verifikasi**: Verifikasi setiap fitur keamanan berdasarkan checklist ASVS Level 1.
8. **Deployment**: Push kode sumber ke GitHub repository.

## 9. Panduan Menjalankan Aplikasi
Untuk menguji fitur keamanan aplikasi ini, jalankan langkah berikut:
1. **Clone Repo**: `git clone https://github.com/Jhonhil/secure-campus.git`
2. **Install Deps**: `composer install` dan `npm install`
3. **Environment**: Copy `.env.example` ke `.env` dan jalankan `php artisan key:generate`
4. **Database**: Konfigurasi DB di `.env`, lalu jalankan `php artisan migrate`
5. **Run**: Jalankan `php artisan serve` dan `npm run dev`

## 10. Hasil Capture

---

### 🟢 A. ALUR AUTENTIKASI & VALIDASI
- **Halaman Register**
  <img width="1920" height="1080" alt="Register" src="https://github.com/user-attachments/assets/de2a134b-eb37-43f9-beb4-35a8fc33154f" />

- **Validasi Password Kompleks (Harus mengandung Huruf Besar, Kecil, Angka, & Simbol)**
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/4094540a-504e-4341-80f0-ec86a539d8fe" />

- **Email Verification Notice**
  <img width="1920" height="1080" alt="Email Verify" src="https://github.com/user-attachments/assets/327cbfee-f7af-49c4-bb3e-5ba426d8040e" />

- **Proses Forgot & Reset Password**
   <img width="1918" height="1079" alt="image" src="https://github.com/user-attachments/assets/8fd931fc-b288-40c6-9803-467f4e0cee35" />

   <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/8e56ac94-513b-4d59-a706-f2f9ad9c6257" />

   <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/00e2f075-f19c-4463-adeb-c864bace3a49" />

---

### 🔵 B. AKSES, DASHBOARD & OTORISASI
- **Login Page**
  <img width="1920" height="1080" alt="Login" src="https://github.com/user-attachments/assets/b4c0e3ad-3c01-4d7a-aaed-34d2133e91b3" />

- **User Dashboard**
  <img width="1920" height="1080" alt="Dashboard" src="https://github.com/user-attachments/assets/8adb38d3-184e-42bf-9f3e-a1f905b95f37" />

- **Halaman Courses**
  <img width="1919" height="1079" alt="Courses" src="https://github.com/user-attachments/assets/497fd365-8669-49cd-9489-f6f12dc757b0" />

- **Bukti RBAC (Forbidden Access 403)**
  `[❌ FOTO BELUM ADA: Masukkan screenshot Error 403 saat User mencoba akses URL Admin]`
  `<!-- MASUKKAN LINK GAMBAR DI SINI -->`

---

### 🔴 C. IMPLEMENTASI KEAMANAN SISTEM
- **Security Headers (Browser Inspection - CSP & HSTS)**
  `[⚠️ PERLU UPDATE FOTO: Ganti dengan screenshot Response Headers terbaru yang menunjukkan CSP ketat]`
  `<!-- MASUKKAN LINK GAMBAR DI SINI -->`

- **HTTPS Lock Icon (Koneksi Aman)**
  <img width="1920" height="1080" alt="HTTPS Lock" src="https://github.com/user-attachments/assets/8eec99c2-23dc-4cc5-8d31-9f418f68f53c" />

- **Password Hashing di Database**
  <img width="1919" height="1079" alt="DB Hash" src="https://github.com/user-attachments/assets/b1bc2154-e69b-4ee0-94fc-bfe18580dbaf" />

- **Database Table Role Column**
  `[❌ FOTO BELUM ADA: Masukkan screenshot Tabel users di Database yang memperlihatkan kolom role]`
  `<!-- MASUKKAN LINK GAMBAR DI SINI -->`

- **Setup Multi-Factor Authentication (MFA/2FA)**
  `[❌ FOTO BELUM ADA: Masukkan screenshot Setup QR Code atau Input Kode 2FA]`
  `<!-- MASUKKAN LINK GAMBAR DI SINI -->`

---

## 11. Kesimpulan
Aplikasi **Secure Campus** telah berhasil mengimplementasikan seluruh persyaratan **ASVS Level 1**. Dengan penggabungan fitur Laravel modern dan konfigurasi keamanan yang ketat, aplikasi ini memiliki pertahanan yang kuat terhadap ancaman keamanan web paling umum, memberikan standar keamanan yang layak untuk lingkungan akademik.
