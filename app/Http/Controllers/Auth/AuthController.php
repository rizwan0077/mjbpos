<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use App\Models\Business;

class AuthController extends Controller
{

    public function __construct() {
            // $this->middleware('guest')->except('logout');
            //  $this->middleware('guest')->except('logout');
            // $this->middleware('guest', ['except' => 'logout']);
        }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        // dd($request);
        $request->validate([
                'name' => 'required|regex:/^[a-zA-Z ]*$/',
                'email' => 'required|email',
                'personal_phone_number' => 'required|unique:users|numeric|regex:/^((\+92)?(0092)?(92)?(0)?)(3)([0-9]{9})$/',
                'cnic' => 'required|unique:users|numeric|regex:/^([0-9]{13})$/',
                'password' => 'required',
                'business_name' => 'required|regex:/^[a-zA-Z ]*$/',
                'business_email' => 'required',
                'business_license' => 'required|numeric',
                'business_phone_number' => 'required|unique:business|numeric|regex:/^((\+92)?(0092)?(92)?(0)?)(3)([0-9]{9})$/',
                'business_type' => 'required'
            ],
            [
                'name.required' => 'Name is required and must be text only',
                'email.required' => 'Email is required and must be a valid Email',
                'personal_phone_number.required' => 'Enter mobile number without dashes',
                'cnic.required' => 'CNIC Number is required',
                'password.required' => 'Password is required',
                'business_name.required' => 'Business Name is requred',
                'business_email.required' => 'Business email is required',
                'business_license.required' => 'Busniess License is required',
                'business_phone_number.required' => 'Enter mobile number without dashes',
                'business_type.required' => 'Business type is required'
            ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            if(Auth::user()->role_id == 1) {
                return view('admin.dashboard');
            } else {
                return view('user.dashboard');
            }
            
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
    //   return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password'])
    //   ]);
        $save = new User();
        $save->name = $data['name'];
        $save->email = $data['email'];
        $save->personal_phone_number = $data['personal_phone_number'];
        $save->cnic = $data['cnic'];
        $save->password = Hash::make($data['password']);
        $save->save();
        if($save) {
            $business = Business::create([
                'business_name' => $data['business_name'],
                'business_email' => $data['business_email'],
                'business_license' => $data['business_license'],
                'business_phone_number' => $data['business_phone_number'],
                'business_type' => $data['business_type'],
                'user_id' => $save->id,
            ]);

            if($business) {
                return back()->with('message', 'Business registered successfully');
            } else {
                return back()->with('error', 'Something went wrong');
            }
        } else {
            return back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
