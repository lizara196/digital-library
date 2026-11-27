# Digital Library Fullstack PBL

## Deskripsi
Proyek ini adalah latihan awal mata kuliah **Full Stack Web Development** dengan struktur monorepo yang memuat **Laravel (Backend)** dan **Vue.js (Frontend)**.

## Struktur Direktori
digital_library/
├── backend/
├── frontend2/
├── .gitignore
└── README.md

## Persiapan & Menjalankan Lokal

### Backend (Laravel)
cd backend
php artisan key:generate
php artisan serve

Akses di http://127.0.0.1:8000 (pastikan .env sudah disiapkan).

### Frontend (Vue.js)
cd frontend2
npm install
npm run dev

Akses di http://127.0.0.1:5173.