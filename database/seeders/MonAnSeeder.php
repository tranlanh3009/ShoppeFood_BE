<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonAnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mon_ans')->delete();

        DB::table('mon_ans')->truncate();

        DB::table('mon_ans')->insert([
           [
        'id' => 1,
        'ten_mon_an' => 'Bún Mắm Thịt Quay',
        'slug_mon_an' => 'bun-mam-thit-quay',
        'gia_ban' => '40000',
        'gia_khuyen_mai' => '35000',
        'mo_ta' => 'Bún mắm đậm đà, ăn kèm thịt heo quay giòn, rau sống.',
        'id_quan_an' => 1,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134513-7r98o-lstq4jhdyricf6@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 2,
        'ten_mon_an' => 'Bún Mắm Thịt Luộc',
        'slug_mon_an' => 'bun-mam-thit-luoc',
        'gia_ban' => '35000',
        'gia_khuyen_mai' => '30000',
        'mo_ta' => 'Thịt heo luộc mềm, chan mắm nêm đậm vị, kèm bún.',
        'id_quan_an' => 1,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134513-7r98o-lsvb955msnmh40@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 3,
        'ten_mon_an' => 'Bún Mắm Nem Chả Bò',
        'slug_mon_an' => 'bun-mam-nem-cha-bo',
        'gia_ban' => '38000',
        'gia_khuyen_mai' => '32000',
        'mo_ta' => 'Bún mắm nêm chan cùng chả bò Đà Nẵng, hương vị truyền thống.',
        'id_quan_an' => 1,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134259-7ras8-mb0fd7hw7g0131@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 4,
        'ten_mon_an' => 'Ram Cuốn Cải',
        'slug_mon_an' => 'ram-cuon-cai',
        'gia_ban' => '30000',
        'gia_khuyen_mai' => '25000',
        'mo_ta' => 'Ram nhỏ giòn rụm, ăn kèm cải xanh và mắm nêm.',
        'id_quan_an' => 1,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134513-7r98o-lsvdnx8j2z0k55@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 8
    ],

    // Quán 2: Mì Quảng Bà Mua
    [
        'id' => 5,
        'ten_mon_an' => 'Mì Quảng Gà',
        'slug_mon_an' => 'mi-quang-ga',
        'gia_ban' => '35000',
        'gia_khuyen_mai' => '30000',
        'mo_ta' => 'Mì Quảng với thịt gà thả vườn, nước dùng đậm vị.',
        'id_quan_an' => 2,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134259-7ra0g-m8fo1gft8cqqb2@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 6,
        'ten_mon_an' => 'Mì Quảng Tôm Thịt',
        'slug_mon_an' => 'mi-quang-tom-thit',
        'gia_ban' => '40000',
        'gia_khuyen_mai' => '35000',
        'mo_ta' => 'Mì Quảng ăn kèm tôm tươi, thịt ba chỉ, đậu phộng rang.',
        'id_quan_an' => 2,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lqvvdycjthhge6@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 7,
        'ten_mon_an' => 'Mì Quảng Cá Lóc',
        'slug_mon_an' => 'mi-quang-ca-loc',
        'gia_ban' => '45000',
        'gia_khuyen_mai' => '40000',
        'mo_ta' => 'Cá lóc đồng nấu cùng mì Quảng, nước dùng ngọt thanh.',
        'id_quan_an' => 2,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lqvvdxnutmf826@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 8,
        'ten_mon_an' => 'Mì Quảng Đặc Biệt',
        'slug_mon_an' => 'mi-quang-dac-biet',
        'gia_ban' => '42000',
        'gia_khuyen_mai' => '37000',
        'mo_ta' => 'Mì Quảng nấu với thập cẩm, thơm vị quê hương.',
        'id_quan_an' => 2,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lwwwm7d9gz4p6d@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],

    // Quán 3: Bánh Tráng Cuốn Thịt Heo Trần
    [
        'id' => 9,
        'ten_mon_an' => 'Bánh Tráng Cuốn Thịt Heo',
        'slug_mon_an' => 'banh-trang-cuon-thit-heo',
        'gia_ban' => '70000',
        'gia_khuyen_mai' => '65000',
        'mo_ta' => 'Thịt heo luộc cuốn bánh tráng, ăn cùng rau sống và mắm nêm.',
        'id_quan_an' => 3,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134513-7r98o-lsu8t019oiis67@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 8
    ],
    [
        'id' => 10,
        'ten_mon_an' => 'Bún Thịt Nướng',
        'slug_mon_an' => 'bun-thit-nuong',
        'gia_ban' => '35000',
        'gia_khuyen_mai' => '30000',
        'mo_ta' => 'Bún ăn cùng thịt nướng tẩm ướp, rau sống, nước mắm chua ngọt.',
        'id_quan_an' => 3,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lr3vbzvxoihl19@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 11,
        'ten_mon_an' => 'Ram Cuốn Cải',
        'slug_mon_an' => 'ram-cuon-cai-thit-heo-tran',
        'gia_ban' => '30000',
        'gia_khuyen_mai' => '25000',
        'mo_ta' => 'Ram giòn rụm cuốn với cải xanh và chấm mắm nêm.',
        'id_quan_an' => 3,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134513-7r98o-lstr40e1d7kpba@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 8
    ],
    [
        'id' => 12,
        'ten_mon_an' => 'Bánh Tráng Thịt Heo Quay',
        'slug_mon_an' => 'banh-trang-thit-heo-quay',
        'gia_ban' => '75000',
        'gia_khuyen_mai' => '70000',
        'mo_ta' => 'Thịt heo quay giòn rụm cuốn bánh tráng, rau sống, chấm mắm nêm.',
        'id_quan_an' => 3,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lqvzwyewm66c36@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 8
    ],
     [
        'id' => 13,
        'ten_mon_an' => 'Bánh Xèo Tôm Thịt',
        'slug_mon_an' => 'banh-xeo-tom-thit',
        'gia_ban' => '40000',
        'gia_khuyen_mai' => '35000',
        'mo_ta' => 'Bánh xèo giòn rụm, nhân tôm và thịt heo ba chỉ, ăn kèm rau sống.',
        'id_quan_an' => 4,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134513-7ra0g-ma855en7ystn7a@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 8
    ],
    [
        'id' => 14,
        'ten_mon_an' => 'Bánh Xèo Hải Sản',
        'slug_mon_an' => 'banh-xeo-hai-san',
        'gia_ban' => '45000',
        'gia_khuyen_mai' => '40000',
        'mo_ta' => 'Bánh xèo nhân mực, tôm tươi ngon, chấm nước mắm chua ngọt.',
        'id_quan_an' => 4,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134513-7r98o-lsvdspsyjtzt50@resize_ss280x175!@crop_w280_h175_cT',
        'id_danh_muc' => 8
    ],
    [
        'id' => 15,
        'ten_mon_an' => 'Nem Lụi Nướng',
        'slug_mon_an' => 'nem-lui-nuong',
        'gia_ban' => '35000',
        'gia_khuyen_mai' => '30000',
        'mo_ta' => 'Nem lụi nướng vàng ươm, cuốn bánh tráng và rau sống.',
        'id_quan_an' => 4,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-bs-vn.img.susercontent.com/vn-11134513-7r98o-lsu3hec5mjes35@resize_ss280x175!@crop_w280_h175_cT',
        'id_danh_muc' => 8
    ],
    [
        'id' => 16,
        'ten_mon_an' => 'Ram Cuốn Cải',
        'slug_mon_an' => 'ram-cuon-cai-ba-duong',
        'gia_ban' => '30000',
        'gia_khuyen_mai' => '25000',
        'mo_ta' => 'Ram giòn rụm ăn kèm cải xanh và mắm nêm đặc trưng.',
        'id_quan_an' => 4,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-bs-vn.img.susercontent.com/vn-11134259-7ra0g-m95nu5u4yd7ya2@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 8
    ],

    // Quán 5: Hải Sản Bé Mặn
    [
        'id' => 17,
        'ten_mon_an' => 'Lẩu Hải Sản',
        'slug_mon_an' => 'lau-hai-san',
        'gia_ban' => '250000',
        'gia_khuyen_mai' => '220000',
        'mo_ta' => 'Nồi lẩu hải sản tươi ngon với tôm, mực, cá, nghêu.',
        'id_quan_an' => 5,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-bs-vn.img.susercontent.com/vn-11134513-7ras8-m1birgzhxwrg89@resize_ss280x175!@crop_w280_h175_cT',
        'id_danh_muc' => 7
    ],
    [
        'id' => 18,
        'ten_mon_an' => 'Hàu Nướng Mỡ Hành',
        'slug_mon_an' => 'hau-nuong-mo-hanh',
        'gia_ban' => '60000',
        'gia_khuyen_mai' => '50000',
        'mo_ta' => 'Hàu nướng than, rưới mỡ hành thơm béo.',
        'id_quan_an' => 5,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lvgejzuwni3oeb@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 7
    ],
    [
        'id' => 19,
        'ten_mon_an' => 'Ghẹ Hấp Sả',
        'slug_mon_an' => 'ghe-hap-sa',
        'gia_ban' => '200000',
        'gia_khuyen_mai' => '180000',
        'mo_ta' => 'Ghẹ tươi hấp sả thơm lừng, giữ trọn vị ngọt tự nhiên.',
        'id_quan_an' => 5,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7ras8-mda2z6y3pmsc00@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 7
    ],
    [
        'id' => 20,
        'ten_mon_an' => 'Mực Hấp Hành Gừng',
        'slug_mon_an' => 'muc-hap-hanh-gung',
        'gia_ban' => '180000',
        'gia_khuyen_mai' => '160000',
        'mo_ta' => 'Mực tươi hấp với hành gừng, ngọt thanh và thơm.',
        'id_quan_an' => 5,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7ras8-m31i035denqycb@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 7
    ],

    // Quán 6: Mộc Coffee
    [
        'id' => 21,
        'ten_mon_an' => 'Cafe Dừa',
        'slug_mon_an' => 'cafe-dua',
        'gia_ban' => '20000',
        'gia_khuyen_mai' => '15000',
        'mo_ta' => 'Cafe đậm đà kết hợp nước cốt dừa béo ngậy.',
        'id_quan_an' => 6,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7ra0g-m9zerkdmf8mm92@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 17
    ],
    [
        'id' => 22,
        'ten_mon_an' => 'Cafe Muối',
        'slug_mon_an' => 'cafe-muoi',
        'gia_ban' => '25000',
        'gia_khuyen_mai' => '20000',
        'mo_ta' => 'Hương vị cafe độc đáo với chút muối mặn làm dậy hương.',
        'id_quan_an' => 6,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7ra0g-m9zerke6d0re66@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 17
    ],
    [
        'id' => 23,
        'ten_mon_an' => 'Trà Chanh Sả',
        'slug_mon_an' => 'tra-chanh-sa',
        'gia_ban' => '25000',
        'gia_khuyen_mai' => '20000',
        'mo_ta' => 'Trà chanh thanh mát, kết hợp sả thơm.',
        'id_quan_an' => 6,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-bs-vn.img.susercontent.com/vn-11134513-7r98o-lsuac4ondxac68@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 17
    ],
    [
        'id' => 24,
        'ten_mon_an' => 'Sinh Tố Bơ',
        'slug_mon_an' => 'sinh-to-bo',
        'gia_ban' => '30000',
        'gia_khuyen_mai' => '25000',
        'mo_ta' => 'Sinh tố bơ sánh mịn, béo ngậy, mát lạnh.',
        'id_quan_an' => 6,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lqyan5nm3btl0a@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 17
    ],
    // Quán 7: Cô Hòa - Bánh Canh & Bún Chả Cá
    [
        'id' => 25,
        'ten_mon_an' => 'Bánh Canh Chả Cá',
        'slug_mon_an' => 'banh-canh-cha-ca',
        'gia_ban' => '30000',
        'gia_khuyen_mai' => '25000',
        'mo_ta' => 'Bánh canh bột gạo, chan nước lèo ngọt thanh cùng chả cá dai ngon.',
        'id_quan_an' => 7,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134513-7r98o-lsvb0qkxm7k4e0@resize_ss280x175!@crop_w280_h175_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 26,
        'ten_mon_an' => 'Bánh Canh Giò Heo',
        'slug_mon_an' => 'banh-canh-gio-heo',
        'gia_ban' => '35000',
        'gia_khuyen_mai' => '30000',
        'mo_ta' => 'Giò heo ninh mềm, chan cùng nước lèo đậm vị, ăn kèm bánh canh.',
        'id_quan_an' => 7,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lqx4vv7lvs0p00@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 27,
        'ten_mon_an' => 'Bún Chả Cá',
        'slug_mon_an' => 'bun-cha-ca-co-hoa',
        'gia_ban' => '30000',
        'gia_khuyen_mai' => '25000',
        'mo_ta' => 'Bún ăn cùng chả cá chiên, nước lèo ngọt thanh đặc trưng.',
        'id_quan_an' => 7,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134513-7r98o-lstq53a6znpgec@resize_ss280x175!@crop_w280_h175_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 28,
        'ten_mon_an' => 'Bún Cá Ngừ',
        'slug_mon_an' => 'bun-ca-ngu',
        'gia_ban' => '35000',
        'gia_khuyen_mai' => '30000',
        'mo_ta' => 'Cá ngừ kho mềm ăn kèm bún, nước dùng thơm ngọt.',
        'id_quan_an' => 7,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lr2r61skjk5g8a@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],

    // Quán 8: Cơm Gà Ta Cô Ký
    [
        'id' => 29,
        'ten_mon_an' => 'Cơm Gà Xé',
        'slug_mon_an' => 'com-ga-xe',
        'gia_ban' => '35000',
        'gia_khuyen_mai' => '30000',
        'mo_ta' => 'Cơm vàng ăn kèm gà xé phay, nước mắm gừng đậm vị.',
        'id_quan_an' => 8,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7ra0g-m9j4c84ofadga7@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 30,
        'ten_mon_an' => 'Cơm Gà Quay',
        'slug_mon_an' => 'com-ga-quay',
        'gia_ban' => '40000',
        'gia_khuyen_mai' => '35000',
        'mo_ta' => 'Gà quay vàng giòn, ăn cùng cơm nghệ thơm ngon.',
        'id_quan_an' => 8,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134513-7r98o-lstspece3cm1f7@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 31,
        'ten_mon_an' => 'Cơm Gà Luộc',
        'slug_mon_an' => 'com-ga-luoc',
        'gia_ban' => '35000',
        'gia_khuyen_mai' => '30000',
        'mo_ta' => 'Cơm dẻo vàng, ăn cùng thịt gà luộc mềm, chấm muối tiêu chanh.',
        'id_quan_an' => 8,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134513-7r98o-lsv8mcgiv5p590@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 32,
        'ten_mon_an' => 'Miến Gà',
        'slug_mon_an' => 'mien-ga',
        'gia_ban' => '30000',
        'gia_khuyen_mai' => '25000',
        'mo_ta' => 'Miến dong dai ngon, chan nước dùng gà trong ngọt.',
        'id_quan_an' => 8,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134513-7r98o-lsv1n6jemc3o41@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 6
    ],

    // Quán 9: Chè Bưởi Phương Nam
    [
        'id' => 33,
        'ten_mon_an' => 'Chè Bưởi',
        'slug_mon_an' => 'che-buoi',
        'gia_ban' => '20000',
        'gia_khuyen_mai' => '15000',
        'mo_ta' => 'Chè bưởi thơm ngon, giòn giòn, ăn mát lạnh.',
        'id_quan_an' => 9,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134513-7r98o-lsu2wv21h2mxfa@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 9
    ],
    [
        'id' => 34,
        'ten_mon_an' => 'Chè Thái',
        'slug_mon_an' => 'che-thai',
        'gia_ban' => '25000',
        'gia_khuyen_mai' => '20000',
        'mo_ta' => 'Chè Thái nhiều loại trái cây, thạch và nước cốt dừa.',
        'id_quan_an' => 9,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-ws-vn.img.susercontent.com/vn-11134513-7r98o-lstqbuxofnh55a@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 9
    ],
    [
        'id' => 35,
        'ten_mon_an' => 'Chè Khoai Dẻo',
        'slug_mon_an' => 'che-khoai-deo',
        'gia_ban' => '22000',
        'gia_khuyen_mai' => '18000',
        'mo_ta' => 'Chè ngọt dịu, khoai lang dẻo, trân châu và nước cốt dừa.',
        'id_quan_an' => 9,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lr72g513fohwe0@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 9
    ],
    [
        'id' => 36,
        'ten_mon_an' => 'Chè Sâm Bổ Lượng',
        'slug_mon_an' => 'che-sam-bo-luong',
        'gia_ban' => '25000',
        'gia_khuyen_mai' => '20000',
        'mo_ta' => 'Chè thanh mát với nhiều loại thảo mộc và hạt bổ dưỡng.',
        'id_quan_an' => 9,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lqxt3zysj7h5f2@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 9
    ],
     [
        'id' => 37,
        'ten_mon_an' => 'Bánh Mì Thịt Nguội',
        'slug_mon_an' => 'banh-mi-thit-nguoi',
        'gia_ban' => '20000',
        'gia_khuyen_mai' => '18000',
        'mo_ta' => 'Bánh mì giòn rụm kẹp thịt nguội, pate và rau dưa chua.',
        'id_quan_an' => 10,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lx5g7a9texgbc7@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 10
    ],
    [
        'id' => 38,
        'ten_mon_an' => 'Bánh Mì Trứng Ốp La',
        'slug_mon_an' => 'banh-mi-trung-op-la',
        'gia_ban' => '18000',
        'gia_khuyen_mai' => '15000',
        'mo_ta' => 'Bánh mì kẹp trứng ốp la, pate, dưa leo và nước sốt đặc trưng.',
        'id_quan_an' => 10,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lqz2dhjcgtdwc2@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 10
    ],
    [
        'id' => 39,
        'ten_mon_an' => 'Bánh Mì Xíu Mại',
        'slug_mon_an' => 'banh-mi-xiu-mai',
        'gia_ban' => '25000',
        'gia_khuyen_mai' => '20000',
        'mo_ta' => 'Bánh mì kèm xíu mại nóng hổi, sốt cà chua đậm đà.',
        'id_quan_an' => 10,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134259-7ras8-m0shgmte5ywd24@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 10
    ],
    [
        'id' => 40,
        'ten_mon_an' => 'Bánh Mì Pate Chả Lụa',
        'slug_mon_an' => 'banh-mi-pate-cha-lua',
        'gia_ban' => '22000',
        'gia_khuyen_mai' => '18000',
        'mo_ta' => 'Bánh mì pate béo ngậy, chả lụa và rau dưa chua giòn.',
        'id_quan_an' => 10,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lsvfuets68jo7a@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 10
    ],

    // Quán 11: Dê Thuần
    [
        'id' => 41,
        'ten_mon_an' => 'Lẩu Dê',
        'slug_mon_an' => 'lau-de',
        'gia_ban' => '250000',
        'gia_khuyen_mai' => '220000',
        'mo_ta' => 'Lẩu dê hương vị đậm đà, ăn kèm rau và bún tươi.',
        'id_quan_an' => 11,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lr3i9l6jkkntd2@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 7
    ],
    [
        'id' => 42,
        'ten_mon_an' => 'Dê Nướng Ngũ Vị',
        'slug_mon_an' => 'de-nuong-ngu-vi',
        'gia_ban' => '180000',
        'gia_khuyen_mai' => '160000',
        'mo_ta' => 'Thịt dê tẩm ngũ vị hương, nướng trên than hồng thơm lừng.',
        'id_quan_an' => 11,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lr68dc598mfte9@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 7
    ],
    [
        'id' => 44,
        'ten_mon_an' => 'Dê Xào Lăn',
        'slug_mon_an' => 'de-xao-lan',
        'gia_ban' => '150000',
        'gia_khuyen_mai' => '130000',
        'mo_ta' => 'Thịt dê xào lăn với sả ớt, nước cốt dừa thơm béo.',
        'id_quan_an' => 11,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lqyab7dbrhl077@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 7
    ],

    // Quán 12: Quán Nhung - Cơm Hến & Mì Hến
    [
        'id' => 45,
        'ten_mon_an' => 'Cơm Hến',
        'slug_mon_an' => 'com-hen',
        'gia_ban' => '30000',
        'gia_khuyen_mai' => '25000',
        'mo_ta' => 'Cơm trộn cùng hến xào, rau sống và tóp mỡ giòn.',
        'id_quan_an' => 12,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lw70xqbkn6xl9c@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 46,
        'ten_mon_an' => 'Mì Hến',
        'slug_mon_an' => 'mi-hen',
        'gia_ban' => '30000',
        'gia_khuyen_mai' => '25000',
        'mo_ta' => 'Mì ăn cùng hến xào, chan nước dùng thanh ngọt.',
        'id_quan_an' => 12,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lqx4gs3inw611e@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 47,
        'ten_mon_an' => 'Cháo Hến',
        'slug_mon_an' => 'chao-hen',
        'gia_ban' => '28000',
        'gia_khuyen_mai' => '25000',
        'mo_ta' => 'Cháo hến nóng hổi, hương vị đậm đà, giàu dinh dưỡng.',
        'id_quan_an' => 12,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lqxpa0g7w3h52e@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 48,
        'ten_mon_an' => 'Bún Hến',
        'slug_mon_an' => 'bun-hen',
        'gia_ban' => '30000',
        'gia_khuyen_mai' => '25000',
        'mo_ta' => 'Bún ăn cùng hến xào thơm, rau sống và đậu phộng rang.',
        'id_quan_an' => 12,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lqx4l43ef4xwfc@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    // Quán 13: Hủ Tiếu Mỳ Sài Thành - Gỏi Cuốn - Âu Cơ
    [
        'id' => 49,
        'ten_mon_an' => 'Hủ Tiếu Nam Vang',
        'slug_mon_an' => 'hu-tieu-nam-vang',
        'gia_ban' => '45000',
        'gia_khuyen_mai' => '40000',
        'mo_ta' => 'Hủ tiếu nước ngọt thanh, ăn kèm tôm, thịt bằm và trứng cút.',
        'id_quan_an' => 13,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lsv3869k60m1a1@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 50,
        'ten_mon_an' => 'Hủ Tiếu Mì Khô',
        'slug_mon_an' => 'hu-tieu-mi-kho',
        'gia_ban' => '40000',
        'gia_khuyen_mai' => '35000',
        'mo_ta' => 'Mì khô trộn đậm vị, ăn kèm xá xíu và hoành thánh.',
        'id_quan_an' => 13,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7ras8-m3ppxbh37gz98e@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 51,
        'ten_mon_an' => 'Mì Hoành Thánh',
        'slug_mon_an' => 'mi-hoanh-thanh',
        'gia_ban' => '42000',
        'gia_khuyen_mai' => '38000',
        'mo_ta' => 'Mì tươi ăn kèm hoành thánh nhân tôm thịt thơm ngon.',
        'id_quan_an' => 13,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lr5xnllqig90b8@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 52,
        'ten_mon_an' => 'Gỏi Cuốn Tôm Thịt',
        'slug_mon_an' => 'goi-cuon-tom-thit',
        'gia_ban' => '30000',
        'gia_khuyen_mai' => '25000',
        'mo_ta' => 'Cuốn tôm thịt với rau sống và bún, chấm nước mắm pha.',
        'id_quan_an' => 13,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lsu62ayp655l08@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 8
    ],

    // Quán 14: Bánh Mỳ Cô Na
    [
        'id' => 53,
        'ten_mon_an' => 'Bánh Mì Thịt Nướng',
        'slug_mon_an' => 'banh-mi-thit-nuong',
        'gia_ban' => '20000',
        'gia_khuyen_mai' => '17000',
        'mo_ta' => 'Bánh mì giòn, nhân thịt nướng thơm, rau sống và đồ chua.',
        'id_quan_an' => 14,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lsvbpn5tjhjt6f@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 10
    ],
    [
        'id' => 54,
        'ten_mon_an' => 'Bánh Mì Gà Xé',
        'slug_mon_an' => 'banh-mi-ga-xe',
        'gia_ban' => '20000',
        'gia_khuyen_mai' => '17000',
        'mo_ta' => 'Bánh mì kẹp gà xé phay, pate và sốt mayonnaise.',
        'id_quan_an' => 14,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lsv1zblb1oec7e@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 10
    ],
    [
        'id' => 55,
        'ten_mon_an' => 'Bánh Mì Chả Cá',
        'slug_mon_an' => 'banh-mi-cha-ca',
        'gia_ban' => '18000',
        'gia_khuyen_mai' => '15000',
        'mo_ta' => 'Bánh mì kẹp chả cá chiên, rau dưa chua.',
        'id_quan_an' => 14,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lsvgmnx3s595d5@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 10
    ],
    [
        'id' => 56,
        'ten_mon_an' => 'Bánh Mì Pate Trứng',
        'slug_mon_an' => 'banh-mi-pate-trung',
        'gia_ban' => '18000',
        'gia_khuyen_mai' => '15000',
        'mo_ta' => 'Bánh mì pate béo ngậy ăn kèm trứng ốp la.',
        'id_quan_an' => 14,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lvjtzp6134b10a@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 10
    ],

    // Quán 15: Bún Chả Cá Bà Lữ
    [
        'id' => 57,
        'ten_mon_an' => 'Bún Chả Cá Nấu',
        'slug_mon_an' => 'bun-cha-ca-nau',
        'gia_ban' => '35000',
        'gia_khuyen_mai' => '30000',
        'mo_ta' => 'Bún chan nước lèo đậm vị, chả cá nấu mềm thơm.',
        'id_quan_an' => 15,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-tx-vn.img.susercontent.com/vn-11134513-7r98o-lstq0vm90fq125@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 58,
        'ten_mon_an' => 'Bún Chả Cá Chiên',
        'slug_mon_an' => 'bun-cha-ca-chien',
        'gia_ban' => '35000',
        'gia_khuyen_mai' => '30000',
        'mo_ta' => 'Chả cá chiên vàng giòn, ăn cùng bún và nước dùng trong.',
        'id_quan_an' => 15,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lr6e5wm1iax013@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 59,
        'ten_mon_an' => 'Bún Chả Cá Thập Cẩm',
        'slug_mon_an' => 'bun-cha-ca-thap-cam',
        'gia_ban' => '40000',
        'gia_khuyen_mai' => '35000',
        'mo_ta' => 'Bún ăn kèm chả cá nấu, chiên và rau sống.',
        'id_quan_an' => 15,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lr2r60qa3laxb0@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 60,
        'ten_mon_an' => 'Bún Cá Ngừ',
        'slug_mon_an' => 'bun-ca-ngu-ba-lu',
        'gia_ban' => '38000',
        'gia_khuyen_mai' => '33000',
        'mo_ta' => 'Cá ngừ kho ăn kèm bún, nước dùng ngọt dịu.',
        'id_quan_an' => 15,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lr2r61skjk5g8a@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 61,
        'ten_mon_an' => 'Bún Riêu Cua',
        'slug_mon_an' => 'bun-rieu-cua',
        'gia_ban' => '35000',
        'gia_khuyen_mai' => '30000',
        'mo_ta' => 'Bún riêu cua đồng thơm ngon, chan nước dùng chua thanh.',
        'id_quan_an' => 16,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7ra0g-m6c91k9j6qeu54@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 62,
        'ten_mon_an' => 'Bún Riêu Chả Cá',
        'slug_mon_an' => 'bun-rieu-cha-ca',
        'gia_ban' => '35000',
        'gia_khuyen_mai' => '30000',
        'mo_ta' => 'Nước dùng riêu thanh ngọt, ăn kèm chả cá chiên.',
        'id_quan_an' => 16,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7ra0g-m6c8wzj09e4885@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 63,
        'ten_mon_an' => 'Bún Riêu Thịt Bò',
        'slug_mon_an' => 'bun-rieu-thit-bo',
        'gia_ban' => '40000',
        'gia_khuyen_mai' => '35000',
        'mo_ta' => 'Bún riêu cua ăn kèm thịt bò tái, chan nước dùng nóng hổi.',
        'id_quan_an' => 16,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7ra0g-m6c917wr9m5354@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 64,
        'ten_mon_an' => 'Bún Riêu Giò Heo',
        'slug_mon_an' => 'bun-rieu-gio-heo',
        'gia_ban' => '42000',
        'gia_khuyen_mai' => '38000',
        'mo_ta' => 'Giò heo hầm mềm, ăn kèm bún riêu cua đậm đà.',
        'id_quan_an' => 16,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lr4orwcsb6boe2@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],

    // Quán 17: Hải Sản Năm Rảnh
    [
        'id' => 65,
        'ten_mon_an' => 'Tôm Hùm Nướng Phô Mai',
        'slug_mon_an' => 'tom-hum-nuong-pho-mai',
        'gia_ban' => '450000',
        'gia_khuyen_mai' => '400000',
        'mo_ta' => 'Tôm hùm tươi nướng phô mai béo ngậy.',
        'id_quan_an' => 17,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-luvrn6v4vm7940@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 7
    ],
    [
        'id' => 66,
        'ten_mon_an' => 'Sò Điệp Nướng Mỡ Hành',
        'slug_mon_an' => 'so-diep-nuong-mo-hanh',
        'gia_ban' => '90000',
        'gia_khuyen_mai' => '80000',
        'mo_ta' => 'Sò điệp nướng than, rưới mỡ hành thơm lừng.',
        'id_quan_an' => 17,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lr0pr3dbt8rd2b@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 7
    ],
    [
        'id' => 67,
        'ten_mon_an' => 'Ngao Hấp Thái',
        'slug_mon_an' => 'ngao-hap-thai',
        'gia_ban' => '120000',
        'gia_khuyen_mai' => '100000',
        'mo_ta' => 'Ngao hấp kiểu Thái cay cay chua chua hấp dẫn.',
        'id_quan_an' => 17,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lr0pv2dejnpg9a@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 7
    ],
    [
        'id' => 68,
        'ten_mon_an' => 'Cua Rang Me',
        'slug_mon_an' => 'cua-rang-me',
        'gia_ban' => '250000',
        'gia_khuyen_mai' => '220000',
        'mo_ta' => 'Cua rang sốt me chua ngọt đặc trưng, ngon khó cưỡng.',
        'id_quan_an' => 17,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lqz97vfqejkp2e@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 7
    ],

    // Quán 18: Bánh Mì Heo Nướng Lu An
    [
        'id' => 69,
        'ten_mon_an' => 'Bánh Mì Heo Nướng',
        'slug_mon_an' => 'banh-mi-heo-nuong',
        'gia_ban' => '20000',
        'gia_khuyen_mai' => '17000',
        'mo_ta' => 'Bánh mì kẹp thịt heo nướng, rau sống và nước sốt đặc biệt.',
        'id_quan_an' => 18,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-zl-vn.img.susercontent.com/vn-11134259-7ra0g-m9wujjcsxee2f0@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 10
    ],
    [
        'id' => 70,
        'ten_mon_an' => 'Bánh Mì Heo Quay',
        'slug_mon_an' => 'banh-mi-heo-quay',
        'gia_ban' => '22000',
        'gia_khuyen_mai' => '18000',
        'mo_ta' => 'Heo quay giòn da, ăn kèm bánh mì nóng giòn.',
        'id_quan_an' => 18,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-zl-vn.img.susercontent.com/vn-11134259-7ra0g-m9wujjcsxee2f0@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 10
    ],
    [
        'id' => 71,
        'ten_mon_an' => 'Bánh Mì Heo Xá Xíu',
        'slug_mon_an' => 'banh-mi-heo-xa-xiu',
        'gia_ban' => '25000',
        'gia_khuyen_mai' => '20000',
        'mo_ta' => 'Bánh mì heo xá xíu đậm vị, sốt đậm đà.',
        'id_quan_an' => 18,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-zl-vn.img.susercontent.com/vn-11134259-7ras8-m0shgmte5ywd24@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 10
    ],
    [
        'id' => 72,
        'ten_mon_an' => 'Bánh Mì Heo Rim',
        'slug_mon_an' => 'banh-mi-heo-rim',
        'gia_ban' => '20000',
        'gia_khuyen_mai' => '17000',
        'mo_ta' => 'Thịt heo rim mặn ngọt đưa cơm, kẹp trong bánh mì.',
        'id_quan_an' => 18,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-zl-vn.img.susercontent.com/vn-11134513-7r98o-lsv3tml5yt3899@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 10
    ],

    // Quán 19: Tiệm Cơm Cà Mèn - Gà Nướng Muối Ớt Lá Chanh
    [
        'id' => 73,
        'ten_mon_an' => 'Gà Nướng Muối Ớt',
        'slug_mon_an' => 'ga-nuong-muoi-ot',
        'gia_ban' => '150000',
        'gia_khuyen_mai' => '130000',
        'mo_ta' => 'Gà nguyên con nướng muối ớt lá chanh thơm ngon.',
        'id_quan_an' => 19,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-zl-vn.img.susercontent.com/vn-11134513-7r98o-lsvdenxktzfdd1@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 74,
        'ten_mon_an' => 'Cơm Cà Mèn Thịt Kho',
        'slug_mon_an' => 'com-ca-men-thit-kho',
        'gia_ban' => '40000',
        'gia_khuyen_mai' => '35000',
        'mo_ta' => 'Cơm cà mèn ăn kèm thịt kho tàu, trứng và rau củ.',
        'id_quan_an' => 19,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lr5jvxy4jikke9@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 75,
        'ten_mon_an' => 'Cơm Cà Mèn Cá Kho',
        'slug_mon_an' => 'com-ca-men-ca-kho',
        'gia_ban' => '38000',
        'gia_khuyen_mai' => '33000',
        'mo_ta' => 'Cơm cà mèn ăn cùng cá kho tộ, vị đậm đà.',
        'id_quan_an' => 19,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lqzi26clo7fd54@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],
    [
        'id' => 76,
        'ten_mon_an' => 'Cơm Cà Mèn Trứng Chiên',
        'slug_mon_an' => 'com-ca-men-trung-chien',
        'gia_ban' => '35000',
        'gia_khuyen_mai' => '30000',
        'mo_ta' => 'Cơm cà mèn ăn kèm trứng chiên và dưa leo.',
        'id_quan_an' => 19,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lr5j2s9ombpg2f@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 6
    ],

    // Quán 20: Chè Liên Đà Nẵng
    [
        'id' => 77,
        'ten_mon_an' => 'Chè Sầu Liên',
        'slug_mon_an' => 'che-sau-lien',
        'gia_ban' => '30000',
        'gia_khuyen_mai' => '25000',
        'mo_ta' => 'Chè sầu riêng đặc sản Đà Nẵng, béo ngậy thơm ngon.',
        'id_quan_an' => 20,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://down-zl-vn.img.susercontent.com/vn-11134513-7r98o-lsv7ct2zw5uhc3@resize_ss640x400!@crop_w640_h400_cT',
        'id_danh_muc' => 9
    ],
    [
        'id' => 78,
        'ten_mon_an' => 'Chè Thái Liên',
        'slug_mon_an' => 'che-thai-lien',
        'gia_ban' => '28000',
        'gia_khuyen_mai' => '23000',
        'mo_ta' => 'Chè Thái ngọt thanh, nhiều loại trái cây và thạch.',
        'id_quan_an' => 20,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lx9hpsy034rddf@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 9
    ],
    [
        'id' => 79,
        'ten_mon_an' => 'Chè Khúc Bạch',
        'slug_mon_an' => 'che-khuc-bach',
        'gia_ban' => '25000',
        'gia_khuyen_mai' => '20000',
        'mo_ta' => 'Chè khúc bạch thơm béo, hạnh nhân giòn rụm.',
        'id_quan_an' => 20,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://cdn.tgdd.vn/Files/2018/07/01/1100647/che-khuc-bach-201807011111598312.jpg',
        'id_danh_muc' => 9
    ],
    [
        'id' => 80,
        'ten_mon_an' => 'Chè Bưởi',
        'slug_mon_an' => 'che-buoi',
        'gia_ban' => '18000',
        'gia_khuyen_mai' => '15000',
        'mo_ta' => 'Chè bưởi thơm ngon, giòn giòn.',
        'id_quan_an' => 20,
        'tinh_trang' => 1,
        'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134517-7r98o-lx9hxkmwd1p7c2@resize_ss400x400!@crop_w400_h400_cT',
        'id_danh_muc' => 9
    ]
        ]);
    }
}
