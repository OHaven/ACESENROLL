<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        if(strcmp($input['role'], "Student") == 0){
      
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'role' => $input['role'],
            'status' => 1,
            'password' => Hash::make($input['password']),
        ]);

    }


    else
    {
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'role' => $input['role'],
            'status' => 0,
            'password' => Hash::make($input['password']),
        ]);
    }


    }
}
