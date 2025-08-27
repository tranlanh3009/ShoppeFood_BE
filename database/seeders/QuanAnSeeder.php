<?php

namespace Database\Seeders;

use App\Models\QuanAn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class QuanAnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quan_ans')->delete();

        DB::table('quan_ans')->truncate();

        DB::table('quan_ans')->insert([
            [
                'id' => 1,
                'email' => 'bunmamvan@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400101234',
                'ten_quan_an' => 'Bún Mắm Vân',
                'gio_mo_cua' => '06:30:00',
                'gio_dong_cua' => '21:00:00',
                'dia_chi' => '23/14 Trần Kế Xương, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 54, // Hải Châu
                'toa_do_x' => 16.067819,
                'toa_do_y' => 108.220950,
                'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lsu0o6grzo9l9d@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905123456',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 2,
                'email' => 'miquang123@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400205678',
                'ten_quan_an' => 'Mì Quảng Bà Mua',
                'gio_mo_cua' => '06:00:00',
                'gio_dong_cua' => '22:00:00',
                'dia_chi' => '259 Hồ Nghinh, P. Phước Mỹ, Quận Sơn Trà, Đà Nẵng',
                'id_quan_huyen' => 57, // Sơn Trà
                'toa_do_x' => 16.065500,
                'toa_do_y' => 108.218900,
                'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lvvcb9ztxrkp04@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905123999',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 3,
                'email' => 'banhtrangcuondn@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400309876',
                'ten_quan_an' => 'Bánh Tráng Cuốn Thịt Heo Trần',
                'gio_mo_cua' => '09:00:00',
                'gio_dong_cua' => '21:30:00',
                'dia_chi' => '04 Lê Duẩn, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 54, // Hải Châu
                'toa_do_x' => 16.072200,
                'toa_do_y' => 108.222300,
                'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lsv34mq2t3gk11@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905112733',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 4,
                'email' => 'banhxeodn@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400404567',
                'ten_quan_an' => 'Bánh Xèo Bà Dưỡng',
                'gio_mo_cua' => '10:00:00',
                'gio_dong_cua' => '22:00:00',
                'dia_chi' => 'K280/23 Hoàng Diệu, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 54, // Hải Châu
                'toa_do_x' => 16.065200,
                'toa_do_y' => 108.218000,
                'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lstq1bohfg7831@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905223344',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 5,
                'email' => 'haisanthoithu@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400506789',
                'ten_quan_an' => 'Hải Sản Bé Mặn',
                'gio_mo_cua' => '10:30:00',
                'gio_dong_cua' => '23:00:00',
                'dia_chi' => '08 Võ Nguyên Giáp, P. Mân Thái, Quận Sơn Trà, Đà Nẵng',
                'id_quan_huyen' => 57, // Sơn Trà
                'toa_do_x' => 16.084300,
                'toa_do_y' => 108.245900,
                'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lstq6switehl51@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905334455',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 6,
                'email' => 'moccf@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400601122',
                'ten_quan_an' => 'Mộc Coffee',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '22:30:00',
                'dia_chi' => '238 Tố Hữu, P. Khuê Trung, Quận Cẩm Lệ, Đà Nẵng',
                'id_quan_huyen' => 53, // Cẩm Lệ
                'toa_do_x' => 16.083000,
                'toa_do_y' => 108.255000,
                'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134259-7ras8-m0u2ee9rb2std8@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905445566',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 7,
                'email' => 'banhcanhcohoa@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400702233',
                'ten_quan_an' => 'Cô Hòa - Bánh Canh & Bún Chả Cá',
                'gio_mo_cua' => '08:00:00',
                'gio_dong_cua' => '21:00:00',
                'dia_chi' => 'Chợ An Hải Bắc, Nguyễn Thị Định , Quận Sơn Trà, Đà Nẵng',
                'id_quan_huyen' => 57, // Sơn Trà
                'toa_do_x' => 16.052000,
                'toa_do_y' => 108.212000,
                'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lsv1qzuppt3tc7@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905556677',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 8,
                'email' => 'comgadractic@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400803344',
                'ten_quan_an' => 'Cơm Gà Ta Cô Ký',
                'gio_mo_cua' => '10:00:00',
                'gio_dong_cua' => '20:00:00',
                'dia_chi' => '150 Ông Ích Khiêm, P. Tam Thuân, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 58, // Thanh Khê
                'toa_do_x' => 16.070000,
                'toa_do_y' => 108.215000,
                'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lsuaezrqj72x64@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905667788',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 9,
                'email' => 'ngochutdn@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400904455',
                'ten_quan_an' => 'Chè Bưởi Phương Nam',
                'gio_mo_cua' => '08:30:00',
                'gio_dong_cua' => '22:00:00',
                'dia_chi' => '81 Châu Thị Vĩnh Tế, P. Mỹ An, Quận Ngũ Hành Sơn, Đà Nẵng',
                'id_quan_huyen' => 56, // Ngũ Hành Sơn
                'toa_do_x' => 16.068000,
                'toa_do_y' => 108.219000,
                'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lsu9h9c7pfa1bd@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905778899',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 10,
                'email' => 'banhmiquang@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0401005566',
                'ten_quan_an' => 'Bánh Mì Bà Lan',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '19:00:00',
                'dia_chi' => '34 Trần Tống, P. Thạc Gián, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 58, // Thanh Khê
                'toa_do_x' => 16.066000,
                'toa_do_y' => 108.220000,
                'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lsvfuets68jo7a@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905889900',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 11,
                'email' => 'hotpotdanang@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0401106677',
                'ten_quan_an' => 'Dê Thuần',
                'gio_mo_cua' => '10:00:00',
                'gio_dong_cua' => '22:00:00',
                'dia_chi' => '35-37 Hồ Nghinh, P. Phước Mỹ, Quận Sơn Trà, Đà Nẵng',
                'id_quan_huyen' => 57, // Sơn Trà
                'toa_do_x' => 16.075000,
                'toa_do_y' => 108.228000,
                'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lsv3mjhda6kkba@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905991001',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 12,
                'email' => 'comhauquang@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0401207788',
                'ten_quan_an' => 'Quán Nhung - Cơm Hến & Mì Hến',
                'gio_mo_cua' => '07:30:00',
                'gio_dong_cua' => '20:00:00',
                'dia_chi' => 'K382/H26/3 Hùng Vương, Vĩnh Trung, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 58, // Thanh Khê
                'toa_do_x' => 16.080000,
                'toa_do_y' => 108.240000,
                'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lsu85yo5csk9ba@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905112233',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 13,
                'email' => 'huatacoalgap@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0401308899',
                'ten_quan_an' => 'Hủ Tiếu Mỳ Sài Thành - Gỏi Cuốn - Âu Cơ',
                'gio_mo_cua' => '08:00:00',
                'gio_dong_cua' => '21:00:00',
                'dia_chi' => '368 Âu Cơ, Hòa Khánh Bắc, Quận Liên Chiểu, Đà Nẵng',
                'id_quan_huyen' => 55, // Liên Chiểu
                'toa_do_x' => 16.069000,
                'toa_do_y' => 108.221000,
                'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7ras8-mbjapinpo4g794@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905223345',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 14,
                'email' => 'banhmycont@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0401409900',
                'ten_quan_an' => 'Bánh Mỳ Cô Na',
                'gio_mo_cua' => '06:00:00',
                'gio_dong_cua' => '19:30:00',
                'dia_chi' => '25 Hồ Nghinh, P. Phước Mỹ, Quận Sơn Trà, Đà Nẵng',
                'id_quan_huyen' => 57, // Sơn Trà
                'toa_do_x' => 16.078000,
                'toa_do_y' => 108.230000,
                'hinh_anh' => 'https://down-bs-vn.img.susercontent.com/vn-11134259-7ra0g-m7aivjnaz6rg4c@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905334456',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 15,
                'email' => 'buncha.platformdn@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0401501112',
                'ten_quan_an' => 'Bún Chả Cá Bà Lữ',
                'gio_mo_cua' => '06:30:00',
                'gio_dong_cua' => '21:00:00',
                'dia_chi' => '319 Hùng Vương, P. Vĩnh Trung, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 58, // Thanh Khê
                'toa_do_x' => 16.065800,
                'toa_do_y' => 108.218800,
                'hinh_anh' => 'https://down-bs-vn.img.susercontent.com/vn-11134513-7r98o-lstq53a6znpgec@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905445567',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 16,
                'email' => 'bunruadon@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0401602223',
                'ten_quan_an' => 'Bún Riêu Ngon - 370A Đống Đa',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '20:00:00',
                'dia_chi' => '370A Đống Đa, P. Thanh Bình, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 54, // Hải Châu
                'toa_do_x' => 16.069500,
                'toa_do_y' => 108.219500,
                'hinh_anh' => 'https://down-bs-vn.img.susercontent.com/vn-11134259-7ras8-mc4ioppa77n6f6@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905556678',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 17,
                'email' => 'haisannamranh@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0401703334',
                'ten_quan_an' => 'Hải Sản Năm Rảnh',
                'gio_mo_cua' => '11:00:00',
                'gio_dong_cua' => '23:30:00',
                'dia_chi' => '01 Chương Dương, P. Mỹ An, Quận Ngũ Hành Sơn, Đà Nẵng',
                'id_quan_huyen' => 56, // Ngũ Hành Sơn
                'toa_do_x' => 16.079000,
                'toa_do_y' => 108.237000,
                'hinh_anh' => 'https://down-bs-vn.img.susercontent.com/vn-11134259-7r98o-lw9m0jg0kgyh5f@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905667789',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 18,
                'email' => 'banhmiapkhue@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0401804445',
                'ten_quan_an' => 'Bánh Mì Heo Nướng Lu An',
                'gio_mo_cua' => '06:00:00',
                'gio_dong_cua' => '18:00:00',
                'dia_chi' => '43 Dũng Sĩ Thanh Khê, P. Thanh Khê Tây, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 58, // Thanh Khê
                'toa_do_x' => 16.069800,
                'toa_do_y' => 108.219800,
                'hinh_anh' => 'https://down-bs-vn.img.susercontent.com/vn-11134259-7ras8-m0wmw0kphj0v2a@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905778890',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 19,
                'email' => 'gaudnnhahang@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0401905556',
                'ten_quan_an' => 'Tiệm Cơm Cà Mèn - Gà Nướng Muối Ớt Lá Chanh',
                'gio_mo_cua' => '11:00:00',
                'gio_dong_cua' => '22:00:00',
                'dia_chi' => '64 Phạm Thiều, Quận Sơn Trà, Đà Nẵng',
                'id_quan_huyen' => 57, // Sơn Trà
                'toa_do_x' => 16.071500,
                'toa_do_y' => 108.222000,
                'hinh_anh' => 'https://down-bs-vn.img.susercontent.com/vn-11134513-7r98o-lsv1fp7oquh0c0@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905889901',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 20,
                'email' => 'chethaplien@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0402006667',
                'ten_quan_an' => 'Chè Liên Đà Nẵng',
                'gio_mo_cua' => '09:00:00',
                'gio_dong_cua' => '22:30:00',
                'dia_chi' => '175 Hải Phòng, P. Tân Chính, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 58, // Thanh Khê
                'toa_do_x' => 16.054000,
                'toa_do_y' => 108.239000,
                'hinh_anh' => 'https://down-bs-vn.img.susercontent.com/vn-11134513-7r98o-lxrpwt1p3zdl69@resize_ss640x400!@crop_w640_h400_cT',
                'so_dien_thoai' => '0905991002',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ]
        ]);
    }
}
