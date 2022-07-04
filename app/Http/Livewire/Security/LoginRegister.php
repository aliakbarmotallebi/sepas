<?php

namespace App\Http\Livewire\Security;

use App\Models\Country;
use App\Models\User;
use Livewire\Component;
use Validator;

class LoginRegister extends Component
{
    /**
     * @var
     */
    public $username;

    /**
     * @var
     */
    public $mobile;

    /**
     * @var
     */
    public $email;

    /**
     * @var
     */
    public $password;

    /**
     * @var array
     */
    public $countries = [];

    /**
     * @var
     */
    public $country;

    /**
     * @var
     */
    public $password_confirmation;

    /**
     * @var bool
     */
    public $registerForm = false;

    /**
     * @var bool
     */
    public $displayFieldEmail = true;

    /**
     * @param bool $registerForm
     */
    public function setRegisterForm(bool $display): void
    {
        $this->registerForm = $display;
    }

    private function resetInputFields()
    {
        $this->mobile = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
    }

    public function register()
    {
        $this->setRegisterForm(! $this->registerForm);
        $this->getCountries();
    }

    // Gets the countries.
    protected function getCountries(): void
    {
        if ($this->registerForm) {
            $this->countries = Country::get();
        }
    }

    // When the country is updated update the email field
    public function updatedCountry()
    {
        $display = true;

        if ($this->country === 'IR') {
            $display = false;
        }

        $this->displayFieldEmail = $display;
    }

    /**
     * @return bool
     */
    public function hasRegister()
    {
        return (bool) $this->registerForm;
    }

    /**
     * @param $login
     * @return array
     */
    protected function username($login)
    {
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';

        return [$field => $login];
    }

    // Returns true if the request was successful.
    public function login()
    {
        $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = array_merge(
            ['password' => $this->password],
            $this->username($this->username)
        );

        if (auth()->attempt($user)) {
            if (auth()->user()->hasAdmin()) {
                $this->redirect(route('dashboard.index'));
            }

            return true;

            $this->redirect(route('panel.profile.index'));

            return true;
        }

        return toast('نام کاربری یا گذرواژه اشتباه می باشد', 'error');
    }

    // Returns true if the request was successful.
    public function registerStore()
    {
        $this->setRegisterForm(true);

        $validator = Validator::make([
            'mobile'                => 'required_if:country,IR|regex:/(09)[0-9]{9}/|digits:11|numeric|unique:users,mobile',
            'email'                 => 'sometimes|required_unless:country,IR|email|unique:users,email',
            'password'              => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
        ]);

        if ($validator->fails()) {
            dd(request()->all());
            dd($validator->getMessageBag());
        }

        User::create([
           'email'    => $this->email,
           'mobile'   => $this->mobile,
           'password' => $this->password,
       ]);

        $this->resetInputFields();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.security.login-register');
    }
}
