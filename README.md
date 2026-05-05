| ASVS                                           | Level | Implementasi di aplikasi                                            |
| ---------------------------------------------- | ----: | ------------------------------------------------------------------- |
| V1.2.1 Output Encoding                         |    L1 | Blade memakai `{{ }}` untuk escape output, bukan `{!! !!}`.         |
| V1.2.4 SQL Injection Prevention                |    L1 | Data course diambil memakai Eloquent, bukan raw SQL string.         |
| V2.1.1 Validation Documentation                |    L1 | Dokumentasi mencatat aturan validasi name, email, password.         |
| V2.2.1 Input Validation                        |    L1 | Form register/login/reset password divalidasi server-side.          |
| V2.2.2 Trusted Service Layer                   |    L1 | Validasi dilakukan di backend Laravel, bukan hanya JavaScript.      |
| V3.3.1 Secure Cookie                           |    L1 | Production memakai `SESSION_SECURE_COOKIE=true`.                    |
| V3.4.1 HSTS                                    |    L1 | Middleware menambahkan HSTS saat request HTTPS.                     |
| V3.5.1 CSRF Protection                         |    L1 | Form memakai CSRF bawaan Laravel.                                   |
| V3.5.3 Safe HTTP Methods                       |    L1 | Perubahan data memakai POST/PATCH/DELETE, bukan GET.                |
| V6.1.1 Brute Force Documentation               |    L1 | Dokumentasi menjelaskan rate limiting login.                        |
| V6.2.1 Password Minimum Length                 |    L1 | Password minimal 8 karakter.                                        |
| V6.2.2 User Can Change Password                |    L1 | Starter kit menyediakan update password.                            |
| V6.2.3 Current Password Required               |    L1 | Update password meminta current password.                           |
| V6.2.4 Common Password Rejection               |    L1 | Rule `NotCommonPassword` menolak password umum.                     |
| V6.2.5 Password Composition                    |    L1 | Tidak memaksa huruf besar/angka/simbol.                             |
| V6.2.6 Password Masking                        |    L1 | Field password memakai `type="password"`.                           |
| V6.3.1 Credential Stuffing/Brute Force Defense |    L1 | Rate limiting login bawaan starter kit tidak dihapus.               |
| V6.3.2 Default Accounts                        |    L1 | Tidak membuat akun default `admin/admin`.                           |
| V6.4.2 No Secret Questions                     |    L1 | Password reset tidak memakai secret question.                       |
| V7.2.1 Backend Session Verification            |    L1 | Session diverifikasi di backend Laravel.                            |
| V7.2.4 New Session on Authentication           |    L1 | Starter kit Laravel melakukan session regeneration saat login.      |
| V7.4.1 Logout Terminates Session               |    L1 | Logout mengakhiri session.                                          |
| V8.2.1 Function-Level Access Control           |    L1 | Route `/dashboard` dan `/courses` dilindungi `auth` dan `verified`. |
| V8.3.1 Server-Side Authorization               |    L1 | Access control di route middleware Laravel, bukan hanya UI.         |
| V12.2.1 HTTPS External Service                 |    L1 | Production wajib HTTPS.                                             |
| V13.4.1 No Source Control Metadata Exposure    |    L1 | `.git` tidak berada di folder `public`; `.env` tidak dipush.        |
| V15.1.1 Dependency Remediation                 |    L1 | Jalankan `composer audit` dan update dependency.                    |
| V15.2.1 Dependency Security                    |    L1 | Dependency vulnerable tidak dibiarkan melewati waktu remediasi.     |
| V15.3.1 Minimal Returned Fields                |    L1 | Query course hanya memilih `id`, `code`, `name`, `lecturer`.        |


Judul:
Implementasi Secure Coding pada Aplikasi Secure Campus Menggunakan Laravel dan ASVS Level 1

1. Identitas
Nama:
NIM:
Kelas:
Mata Kuliah:

2. Link GitHub
https://github.com/USERNAME/secure-campus

3. Deskripsi Aplikasi
Secure Campus adalah aplikasi web sederhana seperti sistem e-class/kampus yang memiliki fitur authentication: registrasi, email verification, login, logout, dan password reset.

4. Tools
- Laravel
- VS Code
- Laragon
- MySQL
- Composer
- Node.js
- GitHub

5. Fitur Authentication
- Login
- Registrasi
- Konfirmasi registrasi melalui email verification
- Password reset
- Password tersimpan dalam hash
- Logout
- Halaman dashboard protected
- Halaman mata kuliah protected

6. Penjelasan Secure Coding
Aplikasi tidak hanya dibuat agar berjalan, tetapi juga memperhatikan security berdasarkan ASVS Level 1.

7. Mapping ASVS
Masukkan tabel checklist ASVS dari bagian 17.

8. Proses Pembuatan
Masukkan langkah:
- Membuat project Laravel
- Konfigurasi database Laragon
- Menjalankan migration
- Mengaktifkan email verification
- Menambahkan protected route
- Menambahkan halaman courses
- Menambahkan password rule
- Menambahkan security headers
- Menambahkan audit log
- Push ke GitHub

9. Hasil Capture
Masukkan screenshot:
- Halaman register
  <img width="1920" height="1080" alt="{B1379D91-93AC-4607-B7CD-B36558E39AA5}" src="https://github.com/user-attachments/assets/de2a134b-eb37-43f9-beb4-35a8fc33154f" />
  
- Validasi password umum ditolak
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/38d87e04-1ef9-4fd1-93bd-8dff698a97a9" />
  
- Email verification notice
  <img width="1920" height="1080" alt="{C7D4BB3F-0E25-458E-8E0C-7B06DC1C0DC0}" src="https://github.com/user-attachments/assets/327cbfee-f7af-49c4-bb3e-5ba426d8040e" />
  
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/5cc8e86f-ca26-48c3-b726-1eabb76462bc" />
  
- Link verification di laravel.log
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/7ac4c9a6-c1c9-4e32-9808-76f5f874fa65" />
  
- Login
  <img width="1920" height="1080" alt="{C89D47F0-750E-409A-8C16-B5EF2C1224DF}" src="https://github.com/user-attachments/assets/b4c0e3ad-3c01-4d7a-aaed-34d2133e91b3" />
  
  <img width="1920" height="1080" alt="{1DB6BA47-A096-436C-8DFC-A5109F70624F}" src="https://github.com/user-attachments/assets/93c6c5d3-ba65-4498-ad79-13e20c6d2ced" />
  
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/1c122f2d-d3ff-49c8-9f01-ce22cb325066" />
  
- Dashboard
  <img width="1920" height="1080" alt="{4FE3C962-5E7A-44BE-B90A-1A4575AEDED1}" src="https://github.com/user-attachments/assets/8adb38d3-184e-42bf-9f3e-a1f905b95f37" />
  
- Halaman courses
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/497fd365-8669-49cd-9489-f6f12dc757b0" />
  
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/200b1371-459d-49fd-ba12-312359226ff9" />
  
- Forgot password
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/bfdb25fc-66cf-4f23-a8c7-5a5d500a10df" />
  
  <img width="1920" height="1080" alt="{91EFEA11-0B17-4CD7-89AE-70DE50025351}" src="https://github.com/user-attachments/assets/c97d63a4-2160-4480-9b92-fb834442fc31" />
  
  <img width="1920" height="1080" alt="{DB5E1E0E-49A4-4E40-91D2-6F17A9CAA8DE}" src="https://github.com/user-attachments/assets/d9ed755c-9559-4ba7-95b2-48cd35941255" />
  
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/9c55b928-49e1-430c-aa98-b1dc353904c5" />
  
- Link reset password di laravel.log
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/6344f397-fe46-44ce-b212-8dff59b6ea9d" />
  
- Reset password
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/d89cf591-a514-48e6-963b-3cb34bb52367" />

<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/2cdcf4bc-8e32-49da-a039-8d311003bdb9" />

- Database users memperlihatkan password hash
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/b1bc2154-e69b-4ee0-94fc-bfe18580dbaf" />
  
- Security headers
  <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/c7d20270-eb6b-48b2-a839-bd19857a3a70" />
  
  <img width="1919" height="1077" alt="image" src="https://github.com/user-attachments/assets/60b4598c-9871-4b3f-862d-96376dbded1c" />
  
- GitHub repository
<img width="1920" height="1080" alt="{9469AC43-6645-45FC-AC7E-D44BDF92C38E}" src="https://github.com/user-attachments/assets/4dd2dad4-3cb5-4e14-9131-95e3bb65b374" />

10. Kesimpulan
Aplikasi Secure Campus telah menerapkan fitur authentication dan secure coding dasar berdasarkan ASVS Level 1. Password tidak disimpan plaintext, route penting dilindungi authentication dan verification, input divalidasi di server, session/cookie dikonfigurasi, dan dokumentasi menyediakan checklist ASVS.
