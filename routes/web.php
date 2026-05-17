<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('welcome');
});


// =========================
// ROUTE ANGGOTA
// =========================

Route::get('/anggota', function () {

    $anggota_list = [

        [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ],

        [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@email.com',
            'telepon' => '081234567891',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ],

        [
            'id' => 3,
            'kode' => 'AGT-003',
            'nama' => 'Andi Wijaya',
            'email' => 'andi@email.com',
            'telepon' => '081234567892',
            'alamat' => 'Semarang',
            'status' => 'Nonaktif'
        ],

        [
            'id' => 4,
            'kode' => 'AGT-004',
            'nama' => 'Dewi Lestari',
            'email' => 'dewi@email.com',
            'telepon' => '081234567893',
            'alamat' => 'Surabaya',
            'status' => 'Aktif'
        ],

        [
            'id' => 5,
            'kode' => 'AGT-005',
            'nama' => 'Rina Putri',
            'email' => 'rina@email.com',
            'telepon' => '081234567894',
            'alamat' => 'Yogyakarta',
            'status' => 'Aktif'
        ]
    ];

    return view('anggota.index', compact('anggota_list'));
});


Route::get('/anggota/{id}', function ($id) {

    $anggota_list = [

        1 => [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ],

        2 => [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@email.com',
            'telepon' => '081234567891',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ],

        3 => [
            'id' => 3,
            'kode' => 'AGT-003',
            'nama' => 'Andi Wijaya',
            'email' => 'andi@email.com',
            'telepon' => '081234567892',
            'alamat' => 'Semarang',
            'status' => 'Nonaktif'
        ],

        4 => [
            'id' => 4,
            'kode' => 'AGT-004',
            'nama' => 'Dewi Lestari',
            'email' => 'dewi@email.com',
            'telepon' => '081234567893',
            'alamat' => 'Surabaya',
            'status' => 'Aktif'
        ],

        5 => [
            'id' => 5,
            'kode' => 'AGT-005',
            'nama' => 'Rina Putri',
            'email' => 'rina@email.com',
            'telepon' => '081234567894',
            'alamat' => 'Yogyakarta',
            'status' => 'Aktif'
        ]
    ];

    if (!isset($anggota_list[$id])) {
        abort(404);
    }

    $anggota = $anggota_list[$id];

    return view('anggota.show', compact('anggota'));
});


// =========================
// ROUTE KATEGORI
// =========================

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');

Route::get('/kategori/search/{keyword}', [KategoriController::class, 'search'])->name('kategori.search');

Route::get('/kategori/{id}', [KategoriController::class, 'show'])->name('kategori.show');