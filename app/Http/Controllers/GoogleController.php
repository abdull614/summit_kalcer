<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Str; // Import Str

class GoogleController extends Controller
{
    // Redirect ke Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Callback dari Google
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Pastikan email tersedia
            if (!$googleUser->getEmail()) {
                return redirect('/login')->with('error', 'Email tidak tersedia dari Google.');
            }

            // Cari user berdasarkan google_id terlebih dahulu agar update data lebih aman
            $user = User::where('google_id', $googleUser->getId())->first();

            if (!$user) {
                // Kalau belum ada, cek berdasarkan email
                $user = User::where('email', $googleUser->getEmail())->first();

                if ($user) {
                    // Update google_id kalau user dengan email sudah ada tapi belum punya google_id
                    $user->update(['google_id' => $googleUser->getId()]);
                } else {
                    // Buat user baru
                    $user = User::create([
                        'name' => $googleUser->getName() ?? $googleUser->getNickname(),
                        'email' => $googleUser->getEmail(),
                        'google_id' => $googleUser->getId(),
                        'password' => bcrypt(Str::random(16)), // password random karena login lewat Google
                    ]);
                }
            }

            Auth::login($user);

            return redirect()->intended(route('home'));
        } catch (Exception $e) {
            return redirect('/login')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
