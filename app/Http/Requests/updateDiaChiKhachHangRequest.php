<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateDiaChiKhachHangRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id'                => 'required|exists:dia_chis,id',
            'dia_chi'           => 'required|min:10|max:255',
            'id_quan_huyen'     => 'required|exists:quan_huyens,id',
            'ten_nguoi_nhan'    => 'required|min:3|max:255',
            'so_dien_thoai'     => 'required|digits:10',
        ];
    }

    public function messages()
    {
        return [
            'id.required'               => 'ID không được để trống',
            'id.exists'                 => 'ID không tồn tại',
            'dia_chi.required'          => 'Địa chỉ không được để trống',
            'dia_chi.min'               => 'Địa chỉ phải có ít nhất 10 ký tự',
            'dia_chi.max'               => 'Địa chỉ không được vượt quá 255 ký tự',
            'id_quan_huyen.required'    => 'Quận huyện không được để trống',
            'id_quan_huyen.exists'      => 'Quận huyện không tồn tại',
            'ten_nguoi_nhan.required'   => 'Họ và tên không được để trống',
            'ten_nguoi_nhan.min'        => 'Họ và tên phải có ít nhất 3 ký tự',
            'ten_nguoi_nhan.max'        => 'Họ và tên không được vượt quá 255 ký tự',
            'so_dien_thoai.required'    => 'Số điện thoại không được để trống',
            'so_dien_thoai.digits'      => 'Số điện thoại phải có 10 chữ số',
        ];
    }
}
