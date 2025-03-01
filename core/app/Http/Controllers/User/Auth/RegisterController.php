<?php

namespace App\Http\Controllers\User\Auth;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\AdminNotification;
use App\Models\User;
use App\Models\UserLogin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    use RegistersUsers;

    public function __construct()
    {
        parent::__construct();
    }

    public function showRegistrationForm()
    {
        $pageTitle = "Register";
        return view('Template::account.registration', compact('pageTitle'));
    }

    protected function validator(array $data)
    {
        $passwordValidation = Password::min(6);

        if (gs('secure_password')) {
            $passwordValidation = $passwordValidation->mixedCase()->numbers()->symbols()->uncompromised();
        }

        $agree = 'nullable';
        if (gs('agree')) {
            $agree = 'required';
        }

        $validate = Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'phone' => 'required|string|max:20',
            'password' => ['required'],
            'business_name' => 'required|string|max:255',
            'business_type' => 'required|string|max:255',
            'product_type' => 'required|string|max:255',
            'business_year' => 'required|string|max:255',
            'license_type' => 'required|string|max:255',
            'license_number' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'license_file' => 'nullable',
            'description' => 'nullable|string',
            'contact_type' => 'required|string|max:255',
            'contact_time' => 'required|string|max:255',
        ]);

        return $validate;
    }

    public function register(Request $request)
{
    if (!gs('registration')) {
        return back()->with('error', 'Registration not allowed.');
    }

    $this->validator($request->all())->validate();
    $request->session()->regenerateToken();

    if (!verifyCaptcha()) {
        return back()->with('error', 'Invalid captcha provided.');
    }

    event(new Registered($user = $this->create($request->all())));

    $this->guard()->login($user);

    // 🔹 Add a success flash message
    session()->flash('success', 'Registration successful! Welcome to the platform.');

    return $this->registered($request, $user)
        ?: redirect($this->redirectPath());
}

    protected function create(array $data)
    {
        // Handle file upload


        $licenseFilePath = null;

if (isset($data['license_file'])) {
    $licenseFile = $data['license_file'];
    $fileName = time() . '_' . $licenseFile->getClientOriginalName(); // Unique filename


   $destinationPath = base_path('assets/license_file');

// Ensure the directory exists
if (!file_exists($destinationPath)) {
    mkdir($destinationPath, 0777, true);
}

// Move file to the assets/license_file directory
$licenseFile->move($destinationPath, $fileName);



    // Save relative path for DB storage
    $licenseFilePath = 'assets/license_file/' . $fileName;
}



        // User Create
        $user = new User();
        $user->firstname = $data['first_name'];
        $user->lastname = $data['last_name'];
        $user->email = strtolower($data['email']);
        $user->mobile = $data['phone'];
        $user->password = Hash::make($data['password']);
        $user->business_name = $data['business_name'];
        $user->business_type = $data['business_type'];
        $user->product_type = $data['product_type'];
        $user->business_year = $data['business_year'];
        $user->license_type = $data['license_type'];
        $user->license_number = $data['license_number'];
        $user->country_name = $data['country'];
        $user->laicense_file = $licenseFilePath;
        $user->description = $data['description'];
        $user->contact_type = $data['contact_type'];
        $user->contact_time = $data['contact_time'];
        $user->ev = gs('ev') ? Status::NO : Status::YES;
        $user->sv = gs('sv') ? Status::NO : Status::YES;
        $user->save();

        $adminNotification = new AdminNotification();
        $adminNotification->user_id = $user->id;
        $adminNotification->title = 'New member registered';
        $adminNotification->click_url = urlPath('admin.users.detail', $user->id);
        $adminNotification->save();

        // Login Log Create
        $ip = getRealIP();
        $exist = UserLogin::where('user_ip', $ip)->first();
        $userLogin = new UserLogin();

        if ($exist) {
            $userLogin->longitude = $exist->longitude;
            $userLogin->latitude = $exist->latitude;
            $userLogin->city = $exist->city;
            $userLogin->country_code = $exist->country_code;
            $userLogin->country = $exist->country;
        } else {
            $info = json_decode(json_encode(getIpInfo()), true);
            $userLogin->longitude = @implode(',', $info['long']);
            $userLogin->latitude = @implode(',', $info['lat']);
            $userLogin->city = @implode(',', $info['city']);
            $userLogin->country_code = @implode(',', $info['code']);
            $userLogin->country = @implode(',', $info['country']);
        }

        $userAgent = osBrowser();
        $userLogin->user_id = $user->id;
        $userLogin->user_ip = $ip;
        $userLogin->browser = @$userAgent['browser'];
        $userLogin->os = @$userAgent['os_platform'];
        $userLogin->save();

        notify($user, 'WELCOME_MESSAGE', [
            'fullname' => $user->fullname
        ]);

        return $user;
    }

    public function checkUser(Request $request)
    {
        $exist['data'] = false;
        $exist['type'] = null;
        if ($request->email) {
            $exist['data'] = User::where('email', $request->email)->exists();
            $exist['type'] = 'email';
            $exist['field'] = 'Email';
        }
        if ($request->mobile) {
            $exist['data'] = User::where('mobile', $request->mobile)->where('dial_code', $request->mobile_code)->exists();
            $exist['type'] = 'mobile';
            $exist['field'] = 'Mobile';
        }
        if ($request->username) {
            $exist['data'] = User::where('username', $request->username)->exists();
            $exist['type'] = 'username';
            $exist['field'] = 'Username';
        }
        return response($exist);
    }

    public function registered()
    {
        cartManager()->insertUserToCart();
        return redirect('/');
    }
}
