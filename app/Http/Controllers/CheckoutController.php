<?php

namespace App\Http\Controllers;

use App\Models\Plan; // Panggil model Plan
use App\Models\Invoice;       // Tambahkan ini
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str; 

class CheckoutController extends Controller
{
    public function show(Plan $plan)
    {
        // Karena kita pakai Route Model Binding, Laravel otomatis
        // memberikan objek $plan yang dipilih dari URL.

        // Ambil data user yang sedang login
        $user = Auth::user();

        // TODO: Nanti di sini kita akan tambahkan logika untuk membuat invoice
        // dan koneksi ke payment gateway. Untuk sekarang, kita tampilkan halamannya dulu.

        // Kirim data user dan plan yang dipilih ke view checkout
        return view('pages.checkout', [
            'user' => $user,
            'plan' => $plan,
        ]);
    }

    public function process(Plan $plan)
    {
        // 1. Dapatkan user yang sedang login
        $user = Auth::user();

        // 2. Buat catatan langganan baru dengan status 'pending'
        $subscription = Subscription::create([
            'user_id' => $user->id,
            'plan_id' => $plan->id,
            'starts_at' => now(),
            'ends_at' => now()->addMonths($plan->duration_in_months),
            'status' => 'pending',
        ]);

        // 3. Buat invoice untuk langganan ini
        $invoice = Invoice::create([
            'user_id' => $user->id,
            'subscription_id' => $subscription->id,
            'invoice_number' => 'INV-' . strtoupper(Str::random(8)),
            'amount' => $plan->price,
            'status' => 'pending',
        ]);

        // 4. (BARU) Redirect ke Dashboard dengan pesan sukses
        // Pesan ini akan memberi tahu pengguna apa langkah selanjutnya.
        return redirect()->route('dashboard')->with('success', 'Pesanan Anda berhasil dibuat! Silakan lakukan pembayaran dan konfirmasi melalui WhatsApp untuk mengaktifkan langganan Anda.');
    }
}