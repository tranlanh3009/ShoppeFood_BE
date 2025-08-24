<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateNhanVienRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id'            => 'required|exists:nhan_viens,id',
            'email'         => 'required|email|unique:nhan_viens,email,' . $this->id,
            'ho_va_ten'     => 'required|min:5|max:255',
            'so_dien_thoai' => 'required|digits:10',
            'dia_chi'       => 'required',
            'ngay_sinh'     => 'required|date',
            'tinh_trang'    => 'required|boolean',
            'id_chuc_vu'    => 'required|exists:chuc_vus,id',
        ];
    }

    public function messages(): array
    {
        return [
            'id.required'            => 'ID nhân viên là bắt buộc.',
            'id.exists'              => 'ID nhân viên không tồn tại.',
            'email.required'         => 'Email không được để trống.',
            'email.email'            => 'Email không đúng định dạng.',
            'email.unique'           => 'Email đã tồn tại.',
            'ho_va_ten.required'     => 'Họ và tên không được để trống.',
            'ho_va_ten.min'          => 'Họ và tên phải có ít nhất :min ký tự.',
            'ho_va_ten.max'          => 'Họ và tên không được vượt quá :max ký tự.',
            'so_dien_thoai.required' => 'Số điện thoại không được để trống.',
            'so_dien_thoai.digits'   => 'Số điện thoại phải có đúng :digits số.',
            'dia_chi.required'       => 'Địa chỉ không được để trống.',
            'ngay_sinh.required'     => 'Ngày sinh không được để trống.',
            'ngay_sinh.date'         => 'Ngày sinh không đúng định dạng.',
            'tinh_trang.required'    => 'Tình trạng không được để trống.',
            'tinh_trang.boolean'     => 'Tình trạng phải là true hoặc false.',
            'id_chuc_vu.required'    => 'Chức vụ không được để trống.',
            'id_chuc_vu.exists'      => 'Chức vụ không tồn tại trong hệ thống.',
        ];
    }
}
