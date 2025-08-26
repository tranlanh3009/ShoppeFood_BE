<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\KhachHang;

class FacebookController extends Controller
{
    /**
     * Trả về URL đăng nhập Facebook để FE redirect
     */
    // public function getUrl()
    // {
    //     $url = Socialite::driver('facebook')
    //         ->stateless()
    //         ->redirect()
    //         ->getTargetUrl();

    //     return response()->json(['url' => $url]);
    // }

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

            // Tìm hoặc tạo user mới
            $user = User::updateOrCreate(
                ['email' => $facebookUser->getEmail()],
                [
                    'name'        => $facebookUser->getName(),
                    'facebook_id' => $facebookUser->getId(),
                    'avatar'      => $facebookUser->getAvatar(),
                    'password'    => bcrypt(uniqid()), // random password
                ]
            );

            // Tạo token Sanctum
            $token = $user->createToken('auth_token')->plainTextToken;

            // Redirect về FE kèm token
            return redirect("http://localhost:5173/auth/khach-hang/callback?token={$token}");
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Đăng nhập Facebook thất bại',
                'error'   => $e->getMessage(),
            ], 500);
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
