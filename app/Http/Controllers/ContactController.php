<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        try {
            // Validasi input
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'nullable|string|max:255',
                'message' => 'required|string|max:2000',
            ]);

            // Data untuk email
            $emailData = [
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'subject' => $validatedData['subject'] ?? 'Pesan dari Website Semakmur',
                'user_message' => $validatedData['message'],
                'sent_at' => now()->format('d F Y, H:i:s')
            ];

            // Kirim email
            Mail::send('emails.contact', $emailData, function ($message) use ($emailData) {
                $message->to('semakmurindonesia@gmail.com') // Email tujuan
                    ->subject('[Semakmur Website] ' . $emailData['subject'])
                    ->from('semakmurindonesia@gmail.com', 'Semakmur Profile')
                    ->replyTo($emailData['email'], $emailData['name']);
            });

            return response()->json([
                'success' => true,
                'message' => 'Pesan berhasil dikirim! Kami akan segera menghubungi Anda.'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak valid.',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi atau hubungi kami langsung.'
            ], 500);
        }
    }
}
