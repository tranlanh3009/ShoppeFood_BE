<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateQuanAnVoucherRequest extends FormRequest
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
            'id'                    => 'required|exists:vouchers,id',
            'ma_code'               => "required|min:3|unique:vouchers,ma_code," . $this->id,
            'thoi_gian_bat_dau'     => "required|date",
            'thoi_gian_ket_thuc'    => "required|date|after:thoi_gian_bat_dau",
            'loai_giam'             => "required|integer",
            'so_giam_gia'           => "required|min:1",
            'so_tien_toi_da'        => "required|min:1",
            'don_hang_toi_thieu'    => "required|min:1"
        ];
    }

    public function messages(): array
    {
        return [
            'id.required'                    => 'Voucher không được để trống',
            'id.exists'                      => 'Voucher không tồn tại trong hệ thống',
            'ma_code.required'               => 'Mã code không được để trống',
            'ma_code.unique'                 => 'Mã code đã tồn tại trong hệ thống',
            'ma_code.min'                    => 'Mã code phải có ít nhất 3 ký tự',
            'thoi_gian_bat_dau.date'         => 'Thời gian bắt đầu không đúng định dạng',
            'thoi_gian_ket_thuc.date'        => 'Thời gian kết thúc không đúng định dạng',
            'loai_giam.integer'              => 'Loại giảm phải là số',
            'so_giam_gia.min'                => 'Số giảm giá phải lớn hơn 0',
            'thoi_gian_bat_dau.required'     => 'Thời gian bắt đầu không được để trống',
            'thoi_gian_ket_thuc.required'    => 'Thời gian kết thúc không được để trống',
            'thoi_gian_ket_thuc.after'       => 'Thời gian kết thúc phải sau thời gian bắt đầu',
            'loai_giam.required'             => 'Loại giảm không được để trống',
            'so_giam_gia.required'           => 'Số giảm giá không được để trống',
            'so_tien_toi_da.required'        => 'Số tiền tối đa không được để trống',
            'so_tien_toi_da.min'             => 'Số tiền tối đa phải lớn hơn 0',
            'don_hang_toi_thieu.required'    => 'Đơn hàng tối thiểu không được để trống',
            'don_hang_toi_thieu.min'         => 'Đơn hàng tối thiểu phải lớn hơn 0'
        ];
    }
}
