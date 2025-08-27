<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\KhachHang;

class FacebookController extends Controller
{
    /**
     * Trả về URL đăng nhập Facebook cho khách hàng
     */
    public function getKhachHangUrl()
    {
        $url = Socialite::driver('facebook')
            ->stateless()
            ->redirect()
            ->getTargetUrl();

        return response()->json(['url' => $url]);
    }

    /**
     * Callback sau khi login Facebook thành công cho khách hàng
     */
    public function khachHangCallback()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->stateless()->user();

            // Kiểm tra email có tồn tại không
            if (!$facebookUser->getEmail()) {
                return redirect("http://localhost:5173/khach-hang/dang-nhap?error=no_email&message=" . urlencode("Tài khoản Facebook không có email công khai"));
            }

            // Tìm hoặc tạo khách hàng mới
            $khachHang = KhachHang::where('email', $facebookUser->getEmail())->first();

            if ($khachHang) {
                // Cập nhật thông tin từ Facebook nếu đã có tài khoản
                $khachHang->update([
                    'avatar' => $facebookUser->getAvatar(),
                    'is_active' => 1, // Kích hoạt tài khoản khi đăng nhập bằng Facebook
                ]);
            } else {
                // Tạo tài khoản mới
                $khachHang = KhachHang::create([
                    'ho_va_ten'    => $facebookUser->getName(),
                    'email'        => $facebookUser->getEmail(),
                    'avatar'       => $facebookUser->getAvatar(),
                    'password'     => bcrypt(uniqid()), // random password
                    'is_active'    => 1,
                    'is_block'     => 0,
                    'so_dien_thoai' => '', // Để trống, khách hàng có thể cập nhật sau
                ]);
            }

            // Tạo token Sanctum
            $token = $khachHang->createToken('token_khach_hang_facebook')->plainTextToken;

            // Redirect về FE kèm token
            return redirect("http://localhost:5173/khach-hang/facebook-login-success?token={$token}&name=" . urlencode($khachHang->ho_va_ten));

        } catch (\Exception $e) {
            return redirect("http://localhost:5173/khach-hang/dang-nhap?error=facebook_error&message=" . urlencode("Đăng nhập Facebook thất bại: " . $e->getMessage()));
        }
    }

    /**
     * Callback sau khi login Facebook thành công (cho User - giữ nguyên)
     */
    // public function callback()
    // {
    //     try {
    //         $facebookUser = Socialite::driver('facebook')->stateless()->user();

    //         // Tìm hoặc tạo user mới
    //         $user = User::updateOrCreate(
    //             ['email' => $facebookUser->getEmail()],
    //             [
    //                 'name'        => $facebookUser->getName(),
    //                 'facebook_id' => $facebookUser->getId(),
    //                 'avatar'      => $facebookUser->getAvatar(),
    //                 'password'    => bcrypt(uniqid()), // random password
    //             ]
    //         );

    //         // Tạo token Sanctum
    //         $token = $user->createToken('auth_token')->plainTextToken;

    //         // Redirect về FE kèm token
    //         return redirect("http://localhost:5173/social-login?token={$token}");
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'status'  => false,
    //             'message' => 'Đăng nhập Facebook thất bại',
    //             'error'   => $e->getMessage(),
    //         ], 500);
    //     }
    // }
}
