<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class changeShipperRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'required|exists:shippers,id',
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'Shipper cần cập nhật không được để trống',
            'id.exists' => 'Shipper cần cập nhật không tồn tại',
        ];
    }
}
