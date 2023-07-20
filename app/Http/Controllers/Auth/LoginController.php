<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // views
    public function showLoginForm()
    {
        return view('fontend.login');
    }

    // Đăng nhập
    public function login(Request $request)
    {
        // Kết nối đến cơ sở dữ liệu tkb
        $conn = mysqli_connect('localhost','root','123456','tkb');
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        // Truy vấn kiểm tra thông tin đăng nhập
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        // Kiểm tra đăng nhập
        if ($result->num_rows > 0) {
            return redirect()->intended('/home');
        } else {
            return redirect()->back()->withErrors(['login' => 'Tên đăng nhập hoặc mật khẩu không đúng!']);
        }
    }
}
