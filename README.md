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
<img width="1920" height="1080" alt="{D8B3AECF-76F5-483C-9567-46676B6E1A05}" src="https://github.com/user-attachments/assets/f0489749-0d56-4ffa-8fda-aa45444bf917" />

- **Halaman Courses**
  <img width="1920" height="1080" alt="{1DC28241-599D-4C36-9974-C6DDA068E906}" src="https://github.com/user-attachments/assets/1a76be32-d136-46da-82b0-7205e49b1758" />

- **Bukti RBAC (Forbidden Access 403)**
  <img width="1920" height="1080" alt="{517A268E-176D-4943-A865-A06BC2FB2582}" src="https://github.com/user-attachments/assets/ba11bca7-194a-48d8-b105-84d33072f5a4" />

---

### 🔴 C. IMPLEMENTASI KEAMANAN SISTEM
- **Security Headers (Browser Inspection - CSP & HSTS)**
 <img width="748" height="322" alt="image" src="https://github.com/user-attachments/assets/8ee5e5fd-2de6-4d82-a4c8-b2676fba18f6" />


 <img width="530" height="41" alt="image" src="https://github.com/user-attachments/assets/56944c7d-bd90-4018-b38f-aab0d23006f4" />


 <img width="767" height="246" alt="image" src="https://github.com/user-attachments/assets/9346d77d-d952-4bc4-98fc-a40254dcc1c7" />


- **HTTPS Lock Icon (Koneksi Aman)**
  <img width="1920" height="1080" alt="HTTPS Lock" src="https://github.com/user-attachments/assets/8eec99c2-23dc-4cc5-8d31-9f418f68f53c" />

- **Password Hashing di Database**
  <img width="1919" height="1079" alt="DB Hash" src="https://github.com/user-attachments/assets/b1bc2154-e69b-4ee0-94fc-bfe18580dbaf" />

- **Database Table Role Column**
 <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/d4020a65-ed31-46e8-b9db-1701b9052019" />

- **Setup Multi-Factor Authentication (MFA/2FA)**
 <img width="1920" height="1080" alt="{60BC8905-7966-4E90-87C0-A0DB03513BC5}" src="https://github.com/user-attachments/assets/62e44381-a122-44db-a78e-dd86aee27d48" />

<img width="1920" height="1080" alt="{41C80EF8-D529-42B6-9571-28BED315126E}" src="https://github.com/user-attachments/assets/972c1c30-83a3-4231-874e-6340682904ec" />

---

## 11. Kesimpulan
Aplikasi **Secure Campus** telah berhasil mengimplementasikan seluruh persyaratan **ASVS Level 1**. Dengan penggabungan fitur Laravel modern dan konfigurasi keamanan yang ketat, aplikasi ini memiliki pertahanan yang kuat terhadap ancaman keamanan web paling umum, memberikan standar keamanan yang layak untuk lingkungan akademik.
