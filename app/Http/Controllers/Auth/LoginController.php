<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\Models\User;
use App\Models\Customer;
use App\Models\Cart;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    /*protected $redirectTo = '/';*/


    /**
      * Redirect the user to the Google authentication page.
      *
      * @return \Illuminate\Http\Response
      */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $request, $provider)
    {
        try {
            if($provider == 'twitter'){
                $user = Socialite::driver('twitter')->user();
            }
            else{
                $user = Socialite::driver($provider)->stateless()->user();
            }
        } catch (\Exception $e) {
            flash("Something Went wrong. Please try again.")->error();
            return redirect()->route('user.login');
        }

        $existingUser = User::where('email', $user->email)->first();

if ($existingUser) {
    // If user exists but no provider_id yet, update it
    if (!$existingUser->provider_id) {
        $existingUser->provider_id = $user->id;
        $existingUser->save();
    }

    auth()->login($existingUser, true);

} else {
    // Create new user
    $newUser = new User;
    $newUser->name = $user->name;
    $newUser->email = $user->email;
    $newUser->email_verified_at = now();
    $newUser->provider_id = $user->id;
    $newUser->save();

    $customer = new Customer;
    $customer->user_id = $newUser->id;
    $customer->save();

    auth()->login($newUser, true);
}
		
		if(session('temp_user_id') != null){
            Cart::where('temp_user_id', session('temp_user_id'))
                    ->update([
                                'user_id' => auth()->user()->id,
                                'temp_user_id' => null
                            ]);

            Session::forget('temp_user_id');
        }
		
        if(session('link') != null){
            return redirect(session('link'));
        }
        else{
            return redirect()->route('dashboard');
        }
    }


    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email'    => 'required_without:phone',
            'phone'    => 'required_without:email',
            'password' => 'required|string',
        ]);
    }

    /**
    * Get the needed authorization credentials from the request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return array
    */
    protected function credentials(Request $request)
    {
        if($request->get('phone') != null){
            return ['phone'=>"+{$request['country_code']}{$request['phone']}", 'password'=>$request->get('password')];
        }
        elseif($request->get('email') != null){
            return $request->only($this->username(), 'password');
        }
    }

    /**
     * Check user's role and redirect user based on their role
     * @return
     */
    public function authenticated()
    {
        if(session('temp_user_id') != null){
            Cart::where('temp_user_id', session('temp_user_id'))
                    ->update(
                            [
                                'user_id' => auth()->user()->id,
                                'temp_user_id' => null
                            ]
            );

            Session::forget('temp_user_id');
        }
        
        if(auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'staff')
        {
            return redirect()->route('admin.dashboard');
        } else {

            if(session('link') != null){
                return redirect(session('link'));
            }
            else{
                return redirect()->route('dashboard');
            }
        }
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        flash(translate('Invalid login credentials'))->error();
        return back();
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function logout(Request $request)
{
    $user = auth()->user();

    if ($user && ($user->user_type == 'admin' || $user->user_type == 'staff')) {
        $redirect_route = 'login';
    } else {
        $redirect_route = 'home';
    }

    $this->guard()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route($redirect_route);
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
