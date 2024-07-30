<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Contact;
use App\Models\Services;
use App\Models\Resume;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return $this->renderView('home', Home::all(), 'Home', 'home');
    }

    /**
     * Show the index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return $this->renderView('index', 'index', 'Index', 'index');
    }

    /**
     * Show the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return $this->renderView('about', About::all(), 'About', 'about');
    }

    /**
     * Show the resume page.
     *
     * @return \Illuminate\View\View
     */
    public function resume()
    {
        return $this->renderView('resume', Resume::all(), 'Resume', 'resume');
    }

    /**
     * Show the portfolio page.
     *
     * @return \Illuminate\View\View
     */
    public function portfolio()
    {
        return $this->renderView('portfolio', Portfolio::all(), 'Portfolio', 'portfolio');
    }

    /**
     * Show the services page.
     *
     * @return \Illuminate\View\View
     */
    public function services()
    {
        return $this->renderView('services', Services::all(), 'Services', 'services');
    }

    /**
     * Show the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact', [
            'meta_title' => 'Contact',
            'className' => 'contact',
        ]);
    }

    public function contactPost(Request $request)
    {
        $this->validateContactForm($request);
    
        Contact::create($request->only(['name', 'email', 'subject', 'message']));
    
        $this->sendMessageToTelegram($request);
    
        return Redirect::back()->with('success', 'Your message was submitted successfully.');
    }

    protected function validateContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
    }

    protected function sendMessageToTelegram(Request $request)
    {
        $botToken = config('services.telegram.bot_token');
        $chatId = config('services.telegram.chat_id');

        $message = sprintf(
            "New Contact Message:\nName: %s\nEmail: %s\nSubject: %s\nMessage: %s",
            $request->name,
            $request->email,
            $request->subject,
            $request->message
        );

        $response = Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", [
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
   
    protected function renderView(string $view, $data, string $metaTitle, string $className)
    {
        return view($view, [
            'getrecord' => $data,
            'meta_title' => $metaTitle,
            'className' => $className,
        ]);
    }
}