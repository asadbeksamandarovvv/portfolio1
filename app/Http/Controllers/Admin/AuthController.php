<?php
namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Mail;
use Session;
use Auth;
use App\Models\User;
use App\Models\Contact;
use App\Models\About;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\DB;
class AuthController extends Controller
{
    public function login(Request $request)
    {
    //    $password = '123456789';
    //    $dd = Hash::make($password);
    //    dd($dd);
        return view('admin.auth.login');
    }
    public function forgot(Request $request)
    {
        return view('forgot');
    }
    public function forgot_admin(Request $request)
    {
        // $dd($request);
        $random_password = rand(1111111111,9999999999);
        $user = User::where('email', '=',$request->email)->first();
        if (!empty($user)) {
            $user->password = Hash::make($random_password);
            $user->save();
            $user->password_random = $random_password;

            Mail::to($user->email)->send(new ForgotPasswordMail());

            return redirect()->back()->with('success', 'Password seccessfuly send Your email box. please check your inbox');
        } else {
            return redirect()->back()->with('error', 'Email Topilmadi!');
        }
    }
    public function admin_login(Request $request)
    {
        // $users = User::query()->get();
        // dd($users->toArray());
        // $users = DB::table('users')->get();
        // $user = User::query()->where('email', $request->email)->first();
        // dd($users);
         if (Auth::attempt(['email' => $request->email,'password' => $request->password])){
            if (!empty(Auth::User()->status)){
                // dd($request);
                if (Auth::user()->is_role == '1') {
                    return redirect()->intended('admin/dashboard');
                    
                }else{
                    return redirect('login')->with('error','not admin');
                }
            }else{
                // dd($request);
                $user_id = Auth::user()->id;
                // Auth::logout();
                $user = User::find($user_id);
                return redirect('login')->with('success', 'You are not allowed to access this page');
            }
        }
        else{
            // dd($request);
            return redirect()->back()->with('error', 'You are not allowed to access this page');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
     }
} 
<?php
namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Mail;
use Session;
use Auth;
use App\Models\User;
use App\Models\Contact;
use App\Models\About;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\DB;
class AuthController extends Controller
{
    public function login(Request $request)
    {
    //    $password = '123456789';
    //    $dd = Hash::make($password);
    //    dd($dd);
        return view('admin.auth.login');
    }
    public function forgot(Request $request)
    {
        return view('forgot');
    }
    public function forgot_admin(Request $request)
    {
        // $dd($request);
        $random_password = rand(1111111111,9999999999);
        $user = User::where('email', '=',$request->email)->first();
        if (!empty($user)) {
            $user->password = Hash::make($random_password);
            $user->save();
            $user->password_random = $random_password;

            Mail::to($user->email)->send(new ForgotPasswordMail());

            return redirect()->back()->with('success', 'Password seccessfuly send Your email box. please check your inbox');
        } else {
            return redirect()->back()->with('error', 'Email Topilmadi!');
        }
    }
    public function admin_login(Request $request)
    {
        // $users = User::query()->get();
        // dd($users->toArray());
        // $users = DB::table('users')->get();
        // $user = User::query()->where('email', $request->email)->first();
        // dd($users);
         if (Auth::attempt(['email' => $request->email,'password' => $request->password])){
            if (!empty(Auth::User()->status)){
                // dd($request);
                if (Auth::user()->is_role == '1') {
                    return redirect()->intended('admin/dashboard');
                    
                }else{
                    return redirect('login')->with('error','not admin');
                }
            }else{
                // dd($request);
                $user_id = Auth::user()->id;
                // Auth::logout();
                $user = User::find($user_id);
                return redirect('login')->with('success', 'You are not allowed to access this page');
            }
        }
        else{
            // dd($request);
            return redirect()->back()->with('error', 'You are not allowed to access this page');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
     }
} 
