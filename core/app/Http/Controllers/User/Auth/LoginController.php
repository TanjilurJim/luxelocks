<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserLogin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    use AuthenticatesUsers;


    protected $username;


    public function __construct()
    {
        parent::__construct();
        $this->username = $this->findUsername();
    }

    public function showLoginForm()
    {
        $pageTitle = "Login";
        return view('Template::account.login', compact('pageTitle'));
    }

    public function login(Request $request)
{
    // Validate the input fields
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    // Retrieve the credentials from the request
    $credentials = $request->only('email', 'password');

    // Attempt to authenticate the user
    if (auth()->attempt($credentials, $request->filled('remember'))) {
        // Regenerate the session to prevent session fixation attacks
        $request->session()->regenerate();

        // Log the user's login details
        $this->authenticated($request, auth()->user());

        // Redirect with success message
        return redirect()->intended(route('home'))->with('success', 'You have successfully logged in.');
    }

    // If authentication fails, redirect back with an error message
    return back()->with('error', 'Invalid email or password.')->withInput($request->only('email', 'remember'));
}



    public function findUsername()
    {
        $login = request()->input('username');

        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$fieldType => $login]);
        return $fieldType;
    }

    public function username()
    {
        return $this->username;
    }

    protected function validateLogin($request)
    {

        $validator = Validator::make($request->all(), [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            $validator->validate();
        }
    }

    public function logout()
    {
        auth()->logout(); // Log out the user
        request()->session()->invalidate(); // Invalidate session
        request()->session()->regenerateToken(); // Prevent CSRF attacks

        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    }



    public function authenticated(Request $request, $user)
    {
        $user->save();
        $ip = getRealIP();
        $exist = UserLogin::where('user_ip', $ip)->first();
        $userLogin = new UserLogin();
        if ($exist) {
            $userLogin->longitude =  $exist->longitude;
            $userLogin->latitude =  $exist->latitude;
            $userLogin->city =  $exist->city;
            $userLogin->country_code = $exist->country_code;
            $userLogin->country =  $exist->country;
        } else {
            $info = json_decode(json_encode(getIpInfo()), true);
            $userLogin->longitude =  @implode(',', $info['long']);
            $userLogin->latitude =  @implode(',', $info['lat']);
            $userLogin->city =  @implode(',', $info['city']);
            $userLogin->country_code = @implode(',', $info['code']);
            $userLogin->country =  @implode(',', $info['country']);
        }

        $userAgent = osBrowser();
        $userLogin->user_id = $user->id;
        $userLogin->user_ip =  $ip;

        $userLogin->browser = @$userAgent['browser'];
        $userLogin->os = @$userAgent['os_platform'];
        $userLogin->save();


        cartManager()->insertUserToCart();

        return redirect()->intended(route('user.home'));
    }

    // this is just to view the login page,
    public function index()
    {

        $user = auth()->user();
        if ($user) {
            return redirect('/');
        }
        return view('Template::login');
    }
}
