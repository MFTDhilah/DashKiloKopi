<?php

namespace App\Http\Requests\Admin\Contact;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateContact extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.contact.edit', $this->contact);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'telepon' => ['sometimes', 'string'],
            'alamat' => ['sometimes', 'string'],
            'jam_operasional' => ['sometimes', 'string'],
            'published_at' => ['nullable', 'date'],
            'enabled' => ['sometimes', 'boolean'],
            'publish_now' => ['nullable', 'boolean'],
            'unpublish_now' => ['nullable', 'boolean'],

        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        if (isset($sanitized['publish_now']) && $sanitized['publish_now'] === true) {
            $sanitized['published_at'] = Carbon::now();
        }

        if (isset($sanitized['unpublish_now']) && $sanitized['unpublish_now'] === true) {
            $sanitized['published_at'] = null;
        }

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
