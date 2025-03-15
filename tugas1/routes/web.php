<?php

// use Illuminate\Support\Facades\Route;
// use Livewire\Volt\Volt;

Route::get('/', function () {
    return ('Ini Adalah Halaman Utama Blibli');
});

Route::get('/promo', function () {
    return ('Ini Adalah Halaman Promo dan Penawaran Khusus');
});

Route::get('/flash-sale', function () {
    return ('Ini Adalah Halaman Flash sale');
});

Route::get('/c', function () {
    return ('Ini Adalah Halaman Daftar Kategori');
});

Route::get('/c/elektronik', function () {
    return ('Ini Adalah Halaman Elektronik');
});

Route::get('/c/fashion-pria', function () {
    return ('Ini Adalah Halaman Fashion Pria');
});

Route::get('/c/kesehatan-kecantikan', function () {
    return ('Ini Adalah Halaman Kesehatan dan Kecantikan');
});

Route::get('/cart', function () {
    return ('Ini Adalah Halaman Keranjang Belanja');
});

Route::get('/p', function () {
    return ('Ini Adalah Halaman Detail Produk');
});

Route::get('/p/asus-rog', function () {
    return ('Ini Adalah Halaman Detail Produk Asus ROG');
});

Route::get('/login', function () {
    return ('Ini Adalah Halaman Login');
});

Route::get('/register', function () {
    return ('Ini Adalah Halaman Register');
});

Route::get('/account/profile', function () {
    return ('Ini Adalah Halaman Profile Penggua');
});

Route::get('/account/orders', function () {
    return ('Ini Adalah Halaman Daftar Pesanan Pengguna');
});

Route::get('/checkout', function () {
    return ('Ini Adalah Halaman Checkout');
});

Route::get('/payment', function () {
    return ('Ini Adalah Halaman Pembayaran');
});

Route::get('/order-tracking', function () {
    return ('Ini Adalah Halaman Cek Status Pesanan');
});

Route::get('/voucher', function () {
    return ('Ini Adalah Halaman Voucher dan Diskon');
});

Route::get('/help', function () {
    return ('Ini Adalah Halaman Pusat Bantuan');
});
 
Route::get('/contact-us', function () {
    return ('Ini Adalah Halaman Hubungi Blibli');
});

Route::get('/returns-refunds', function () {
    return ('Ini Adalah Halaman  Pengembalian & pengembalian dana');
});

Route::get('/seller/register', function () {
    return ('Ini Adalah Halaman Daftar sebagai penjual');
});

Route::get('/seller/dashboard', function () {
    return ('Ini Adalah Halaman  Dashboard penjual');
});

require __DIR__.'/auth.php';
