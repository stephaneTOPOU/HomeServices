<?php

namespace App\Actions\Fortify;

use App\Models\ServiceProvider;
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
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'telefon' => ['required', 'string', 'max:255'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $registeras = $input['registeras'] === 'SVP' ? 'SVP' : 'CST';

        $user = User::create([
            'name' => $input['name'],
            'firstname' => $input['firstname'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'phone' => $input['telefon'],
            'utype' => $registeras,
        ]);

        if ($registeras === 'SVP') {
            ServiceProvider::create([
                'user_id' => $user->id,
            ]);
        }

        return $user;
    }
}
