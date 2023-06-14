<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
        // dd($this->request->all());
        return [
            'title' => 'required|string|max:200|unique:posts,title,'.$this->route('post')->id,
            'slug' => 'required|string|max:255|unique:posts,slug,'.$this->route('post')->id,
            'topic_id' => 'required|integer|exists:topics,id',
            'summary' => $this->request->get('is_published') ? 'required|string' : 'nullable',
            'content' => $this->request->get('is_published') ? 'required|string' : 'nullable',
        ];
    }
}
