<?php

namespace App\Http\Requests\Admin\Kuisioner;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateKuisioner extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.kuisioner.edit', $this->kuisioner);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'Nama' => ['sometimes', 'string'],
            'Alamat' => ['sometimes', 'string'],
            'NoWa' => ['sometimes', 'string'],
            'Instagram' => ['sometimes', 'string'],
            'Petanyaan1' => ['sometimes', 'string'],
            'Pertanyaan2' => ['sometimes', 'string'],
            'poto' => ['sometimes', 'string'],
            
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


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
