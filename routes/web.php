<?php

use App\Models\Invoice;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CheckoutController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/produk/{product:slug}', [PageController::class, 'productDetail'])->name('product.detail');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/project/preview', function () {
    return view('project-preview');
})->name('project.preview');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/checkout/{plan:slug}', [CheckoutController::class, 'show'])
    ->middleware('auth') // Hanya untuk user yang sudah login
    ->name('checkout.show');

    Route::post('/checkout/{plan:slug}', [CheckoutController::class, 'process'])
    ->middleware('auth')
    ->name('checkout.process');

    Route::get('/checkout/success/{invoice}', function(Invoice $invoice) {
        // Pastikan hanya user yang benar yang bisa melihat invoice ini
        if ($invoice->user_id !== Auth::id()) {
            abort(404);
        }
        return "<h1>Sukses!</h1><p>Invoice #{$invoice->invoice_number} berhasil dibuat. Silakan lakukan pembayaran.</p><p>Langkah selanjutnya: integrasi dengan Midtrans/Xendit.</p>";
    })->middleware('auth')->name('checkout.success');
});

require __DIR__.'/auth.php';
