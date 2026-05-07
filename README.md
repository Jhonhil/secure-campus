# Secure Campus 🏫

Secure Campus adalah aplikasi manajemen kampus sederhana yang dibangun dengan fokus utama pada keamanan aplikasi web berdasarkan standar **OWASP Application Security Verification Standard (ASVS) Level 1**.

<<<<<<< HEAD
## 🎓 Identitas Pengembang
- **Nama:** Yohanes Hilapok
- **NIM:** 72230670
- **Kelas:** A
- **Mata Kuliah:** Keamanan Sistem Informasi

3. Link GitHub
https://github.com/Jhonhil/secure-campus.git
=======
---

## 🛡️ Kepatuhan Keamanan (ASVS Level 1)
>>>>>>> a770ea4 (tambahan)

Aplikasi ini telah diimplementasikan sesuai dengan standar **ASVS Level 1** untuk memastikan baseline keamanan yang kuat.

### Mapping Implementasi ASVS

| ID | Kategori | Level | Status | Implementasi di Aplikasi |
| :--- | :--- | :---: | :---: | :--- |
| **V1.2.1** | Output Encoding | L1 | ✅ | Menggunakan sintaks `{{ }}` Blade untuk automatic XSS protection. |
| **V1.2.4** | SQL Injection Prevention | L1 | ✅ | Menggunakan Eloquent ORM untuk semua query database. |
| **V2.1.1** | Validation Documentation | L1 | ✅ | Aturan validasi terdefinisi jelas pada server-side logic. |
| **V2.2.1** | Input Validation | L1 | ✅ | Validasi input ketat pada form registrasi, login, dan reset password. |
| **V3.3.1** | Secure Cookie | L1 | ✅ | `HttpOnly` aktif; `SameSite=Lax` untuk mitigasi CSRF. |
| **V3.4.1** | HSTS & Security Headers | L1 | ✅ | Implementasi HSTS, X-Content-Type-Options, dan Strict CSP. |
| **V3.5.1** | CSRF Protection | L1 | ✅ | Menggunakan middleware CSRF bawaan Laravel pada semua form. |
| **V6.2.1** | Password Min Length | L1 | ✅ | Password minimal 8 karakter. |
| **V6.2.4** | Common Password Rejection | L1 | ✅ | Rule `NotCommonPassword` untuk mencegah password mudah ditebak. |
| **V6.2.5** | Password Composition | L1 | ✅ | Mewajibkan kombinasi huruf besar, huruf kecil, angka, dan simbol. |
| **V6.3.1** | Brute Force Defense | L1 | ✅ | Implementasi Rate Limiting pada endpoint login dan 2FA. |
| **V7.2.4** | Session Regeneration | L1 | ✅ | Session otomatis diregenerasi saat proses autentikasi. |
| **V8.2.1** | RBAC / Access Control | L1 | ✅ | Implementasi Role-Based Access Control (Admin & User). |
| **V8.3.1** | Server-Side Authorization | L1 | ✅ | Proteksi route menggunakan middleware `auth`, `verified`, dan `role`. |
| **V13.4.1**| Secret Protection | L1 | ✅ | `.env` tidak dipush ke repo; Metadata `.git` terlindungi. |

---

## 🚀 Fitur Utama

### 🔐 Autentikasi & Otorisasi
- **Registrasi & Login**: Alur pendaftaran pengguna baru dengan validasi ketat.
- **Email Verification**: Verifikasi email wajib sebelum mengakses area sensitif.
  <img width="1920" height="1080" alt="{CCF433DD-1BDE-4BD8-BC28-85D73077F282}" src="https://github.com/user-attachments/assets/8eec99c2-23dc-4cc5-8d31-9f418f68f53c" />

- **Multi-Factor Authentication (MFA)**: Dukungan 2FA untuk keamanan tambahan.
- **Password Reset**: Fitur pemulihan kata sandi yang aman melalui email.
- **RBAC (Role-Based Access Control)**: Pembedaan hak akses antara peran **Admin** dan **User**.

<<<<<<< HEAD
9. Hasil Capture
Masukkan screenshot:
- Halaman register
  <img width="1920" height="1080" alt="{8DB5F8B4-13F1-4294-936C-38DB83598143}" src="https://github.com/user-attachments/assets/b077895d-7288-473f-aaa4-c0ba7745b595" />

- Validasi password umum ditolak
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/38d87e04-1ef9-4fd1-93bd-8dff698a97a9" />
  
- Email verification notice
  <img width="1920" height="1080" alt="{C7D4BB3F-0E25-458E-8E0C-7B06DC1C0DC0}" src="https://github.com/user-attachments/assets/327cbfee-f7af-49c4-bb3e-5ba426d8040e" />
  
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/5cc8e86f-ca26-48c3-b726-1eabb76462bc" />
  
- Link verification di laravel.log
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/7ac4c9a6-c1c9-4e32-9808-76f5f874fa65" />
  
- Login
  <img width="1920" height="1080" alt="{AE10CFA7-1D97-475E-A62D-8786269867D2}" src="https://github.com/user-attachments/assets/375218b3-0ffb-41eb-b386-6d927b184356" />

  <img width="1920" height="1080" alt="{1DB6BA47-A096-436C-8DFC-A5109F70624F}" src="https://github.com/user-attachments/assets/93c6c5d3-ba65-4498-ad79-13e20c6d2ced" />
  
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/1c122f2d-d3ff-49c8-9f01-ce22cb325066" />
  
- Dashboard
  <img width="1920" height="1080" alt="{83B95A7C-43DA-43CD-AB3B-D0975083C6C2}" src="https://github.com/user-attachments/assets/aad2d558-0afc-4bc9-b8d3-80f79ec4725a" />

- Halaman courses
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/f0f6af54-7835-4b7d-9f03-d8a00ce34866" />
  
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/ba9c3e62-2dc7-4b68-9120-a171001b2a84" />

- Forgot password
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/bfdb25fc-66cf-4f23-a8c7-5a5d500a10df" />
  
  <img width="1920" height="1080" alt="{DB5E1E0E-49A4-4E40-91D2-6F17A9CAA8DE}" src="https://github.com/user-attachments/assets/d9ed755c-9559-4ba7-95b2-48cd35941255" />
  
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/9c55b928-49e1-430c-aa98-b1dc353904c5" />
  
- Link reset password di laravel.log
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/6344f397-fe46-44ce-b212-8dff59b6ea9d" />
  
- Reset password
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/d89cf591-a514-48e6-963b-3cb34bb52367" />
=======
### 🛠️ Fitur Keamanan Teknis
- **Strict Content Security Policy (CSP)**: Mencegah serangan XSS dan Clickjacking.
- **Advanced Password Rules**: Validasi kompleksitas password tinggi.
- **Security Headers Middleware**: Mengirimkan header keamanan (`nosniff`, `strict-origin`, dll) pada setiap response.
- **Database Encryption**: Hashing password menggunakan algoritma modern (Bcrypt/Argon2).
>>>>>>> a770ea4 (tambahan)

---

<<<<<<< HEAD
- Database users memperlihatkan password hash
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/b1bc2154-e69b-4ee0-94fc-bfe18580dbaf" />
  
- Security headers
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/c7d20270-eb6b-48b2-a839-bd19857a3a70" />
  
  <img width="1919" height="1077" alt="image" src="https://github.com/user-attachments/assets/60b4598c-9871-4b3f-862d-96376dbded1c" />
  
- GitHub repository
<img width="1920" height="1080" alt="{136A53C6-1B44-4346-AB4E-8F413831ADFF}" src="https://github.com/user-attachments/assets/4ac6fe88-ca28-44ef-b1b1-843e0998bd70" />
=======
## 💻 Teknologi yang Digunakan
>>>>>>> a770ea4 (tambahan)

- **Framework:** [Laravel 13](https://laravel.com)
- **Frontend:** [Livewire 4](https://livewire.laravel.com) & [Flux UI](https://fluxui.dev)
- **Styling:** [Tailwind CSS 4](https://tailwindcss.com)
- **Database:** MySQL
- **Testing:** [Pest PHP](https://pestphp.com)
- **Server Environment:** Laragon / PHP 8.3

---

## ⚙️ Panduan Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/Jhonhil/secure-campus.git
   cd secure-campus
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *Sesuaikan konfigurasi database di file `.env`.*

4. **Migrasi Database**
   ```bash
   php artisan migrate
   ```

5. **Menjalankan Aplikasi**
   ```bash
   php artisan serve
   npm run dev
   ```

---

## 🖼️ Dokumentasi Visual

### Alur Autentikasi
- **Halaman Register**:
  <img width="1920" height="1080" alt="Register" src="https://github.com/user-attachments/assets/de2a134b-eb37-43f9-beb4-35a8fc33154f" />

- **Validasi Password Kompleks**:
 <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/757d31ce-8869-4ec4-b7d9-3141fc5d65d1" />

- **Email Verification**:
  <img width="1920" height="1080" alt="Email Verify" src="https://github.com/user-attachments/assets/327cbfee-f7af-49c4-bb3e-5ba426d8040e" />

### Dashboard & Akses
- **Login Page**:
  <img width="1920" height="1080" alt="Login" src="https://github.com/user-attachments/assets/b4c0e3ad-3c01-4d7a-aaed-34d2133e91b3" />

- **User Dashboard**:
  <img width="1920" height="1080" alt="Dashboard" src="https://github.com/user-attachments/assets/8adb38d3-184e-42bf-9f3e-a1f905b95f37" />

- **Courses Page**:
  <img width="1919" height="1079" alt="Courses" src="https://github.com/user-attachments/assets/497fd365-8669-49cd-9489-f6f12dc757b0" />

### Bukti Keamanan
- **Security Headers (Browser Inspection)**:
 <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/d76949ce-d3f9-4d84-bd0a-ce3d40df96d0" />

- **Password Hashing in Database**:
  <img width="1919" height="1079" alt="DB Hash" src="https://github.com/user-attachments/assets/b1bc2154-e69b-4ee0-94fc-bfe18580dbaf" />

---

## 📝 Kesimpulan
Aplikasi **Secure Campus** telah berhasil mengimplementasikan seluruh requirement **ASVS Level 1**. Dengan pendekatan *security-by-design*, aplikasi ini memberikan perlindungan terhadap ancaman umum seperti SQL Injection, XSS, CSRF, dan Brute Force, menjadikannya platform yang aman untuk lingkungan akademik.
