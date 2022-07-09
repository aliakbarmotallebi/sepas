<?php

namespace App\Http\Livewire\Dashboard;

use App\Http\Livewire\Modal;
use App\Models\User;
use Livewire\Component;

class EditProfile extends Modal
{

    public $user;

    public $fullname;

    public $username;

    public $old_password;

    public $password;

    public $password_confirmation;

    public function mount()
    {
        $this->user = auth()->user();

        $this->fullname = $this->user->fullname;
        $this->username = $this->user->username;
    }
    
    public function update()
    {
        $user = auth()->user();

        $this->validate([
            'username'             => "required|unique:users,username,{$user->id}",
            'old_password'         => 'required',
            'fullname'             => 'required',
            'password' => 'nullable|min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'nullable|min:6'
        ]);

        $user->fullname = $this->fullname;
        $user->username = $this->username;

        if(! \Hash::check(
                $this->old_password,
                $user->password
            )){

            alert()->error('گذرواژه جاری اشتباه می باشد');

            return redirect()->back();
       }

       if( !empty($this->password) ){
            $user->password =  $this->password;
       }
       

        $user->save();

        $this->show();
    }

    public function render()
    {

        return view('livewire.dashboard.edit-profile', [
            'user' => $this->user
        ]);
    }
}
