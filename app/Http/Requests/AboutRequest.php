<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Set to true if you don't have any specific authorization logic
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'full_name' => 'required|string|max:255',
            'birthday' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'freelance' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'happy_clients' => 'required|string|max:255',
            'projects' => 'required|string|max:255',
            'hours_of_support' => 'required|string|max:255',
            'awards' => 'required|string|max:255',
            'skils_title' => 'required|string|max:255',
            'html' => 'required|string|max:255',
            'css' => 'required|string|max:255',
            'javascript' => 'required|string|max:255',
            'php' => 'required|string|max:255',
            'laravel' => 'required|string|max:255',
        ];
    }

    
    
}