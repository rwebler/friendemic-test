<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'full-name' => 'required|string',
            'email' => 'required|email',
            'id' => 'required|image|max:1024',
            'state' => 'required|in:'.implode(',', \App\States::getCodes()),
            'newsletter-signup' => 'nullable|boolean',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'full-name.required' => 'A full name is required.',
            'full-name.string' => 'The full name must be expressed in words.',
            'email.*' => 'A valid email address is required.',
            'id.required' => 'An ID image is required.',
            'id.image' => 'The ID must be an image file.',
            'id.size' => 'The ID file size must be 1MB or less',
            'state.*' => 'An US State is required as a pick up place.',
            'newsletter-signup' => 'Select the checkbox if you want to receive our newsletter.',
        ];
    }

    public function getSanitizedData()
    {
        $data = $this->all();
        $path = $this->file('id')->store('public');
        $data['photoId'] = str_replace('public/', '', $path);
        unset($data['_token'], $data['id']);

        return $data;
    }
}
