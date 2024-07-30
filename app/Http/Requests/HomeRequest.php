<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
{
    public function authorize()
    {
        // Set this to true if you want to authorize all requests
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'work_experience' => 'required|string',
            'id' => 'nullable|exists:homes,id',
        ];
    }
}