<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use DB;
class UserController extends Controller
{
    // views
    public function showRegisterForm(){
      return view('fontend.register');
    }
    public function storeUser(Request $request){
      //dd($request->all());
      $messages = [
        'required' => 'Trường :attribute bắt buộc nhập.',
        'email'    => 'Trường :attribute phải có định dạng email'
    ];
    $validator = Validator::make($request->all(), [
        'name'     => 'required|max:255',
        'email'    => 'required|email',
        'password' => 'required|numeric|min:5|confirmed',
    ], $messages);
    //Kiểm tra dữ liệu nhập vào
    if ($validator->fails()) {
        return redirect('register')
                ->withErrors($validator)
                ->withInput();
    } else {
      // Thông tin hợp lệ 
      $name = $request->input('name');
      $email = $request->input('email');
      $password = $request->input('password');

      //Lưu vào database
      DB::insert('insert into users (name, email, password) values (?, ?, ?)', [$name, $email, $password]);
      return \Redirect::to('/login')->with('status','Đăng ký thành công');
    }
}

}

