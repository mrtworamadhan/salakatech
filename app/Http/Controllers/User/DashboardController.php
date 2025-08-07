<?php

namespace App\Http\Controllers\User;

use App\Models\User; // Panggil model User
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Panggil facade Auth

class DashboardController extends Controller
{
    public function index()
    {
        // Dapatkan user yang sedang login
        $user = Auth::user();

        // Ambil data langganan milik user tersebut, urutkan dari yang terbaru
        // 'with('plan.product')' adalah Eager Loading agar query lebih efisien
        $subscriptions = $user->subscriptions()->with('plan.product')->latest()->get();

        // Kirim data ke view
        return view('dashboard', [
            'subscriptions' => $subscriptions
        ]);
    }
}