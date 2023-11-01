<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CandidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        //dd($this->route()->parameter('candidate'));

        return [
            'name' => ['required', 'string'],
            'firstname' => ['required', 'string'],
            'pseudo' => ['required', 'string', Rule::unique('candidates')->ignore($this->route()->parameter('candidate'))],
            'genre' => ['required'],
            'phone' => ['required', 'regex:/^[0-9\-]+$/'],
            //'photo' => ['required'],
            'promotion' => ['required'],
            'motivation' => ['required'],
            'slogan' => ['required'],
            'email' => ['required', 'email', 'regex:/@esisalama\.org$/', Rule::unique('candidates')->ignore($this->route()->parameter('candidate'))],
            'vote_number' => ['required', 'numeric', Rule::unique('candidates')->ignore($this->route()->parameter('candidate'))]
        ];
    }
}
