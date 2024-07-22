<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Contact;
use App\Models\Services;
use App\Models\Resume;
use Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Http; // Http sinfini import qilish
use Illuminate\Support\Facades\Log;  // Log sinfini import qilish

class HomeController extends Controller
{
    public function home()
    {
        $data['getrecord'] = Home::all();
        $data['meta_title'] = 'Home';
        $data['className'] = 'home';
        return view('home', $data);
    }
    public function index()
    {
        $data['meta_title'] = 'index';
        $data['className'] = 'index';
        return view('index', $data);
    }

    public function about()
    {
        $data['getrecord'] = About::all();
        $data['meta_title'] = 'about';
        $data['className'] = 'about';
        return view('about',$data);
    }

    public function resume()
    {
        $data['getrecord'] = Resume::get();
        $data['meta_title'] = 'resume';
        $data['className'] = 'resume';
        return view('resume', $data);
    }
    
    public function portfolio()
    {
        $data['getrecord'] = Portfolio::get();
        $data['meta_title'] = 'portfolio';
        $data['className'] = 'portfolio';
        return view('portfolio', $data);
    }

    public function services()
    {
        $data['getrecord'] = Services::get();
        $data['meta_title'] = 'services';
        $data['className'] = 'services';
        return view('services', $data);
    }

    public function contact()
    {
        $data['meta_title'] = 'contact';
        $data['className'] = 'contact';

        return view('contact', $data);
    }

    public function contact_post(Request $request)
    {
        $insertRecord = new Contact;

        $insertRecord->name = trim($request->name);
        $insertRecord->email = trim($request->email);
        $insertRecord->subject = trim($request->subject);
        $insertRecord->message = trim($request->message);

        $insertRecord->save();

        // Telegramga xabar yuborish funksiyasini chaqirish
        $this->sendMessageToTelegram($request);

        return redirect()->back()->with('success', 'Your Message submitted successfully');
    }

    protected function sendMessageToTelegram($request)
    {
        $botToken = config('services.telegram.bot_token');
        $chatId = config('services.telegram.chat_id');

        $message = "New Contact Message:\n";
        $message .= "Name: " . $request->name . "\n";
        $message .= "Email: " . $request->email . "\n";
        $message .= "Subject: " . $request->subject . "\n";
        $message .= "Message: " . $request->message;

        $url = "https://api.telegram.org/bot{$botToken}/sendMessage";

        $response = Http::post($url, [
            'chat_id' => $chatId,
            'text' => $message,
        ]);

        if ($response->successful()) {
            Log::info('Message sent to Telegram successfully.');
        } else {
            Log::error('Failed to send message to Telegram.', [
                'response' => $response->body(),
            ]);
        }
    }
}

