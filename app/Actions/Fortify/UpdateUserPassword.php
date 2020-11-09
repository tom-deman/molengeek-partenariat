<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;

class UpdateUserPassword implements UpdatesUserPasswords
{
    use PasswordValidationRules;

    /**
     * Validate and update the user's password.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'current_password' => ['required', 'string'],
            'password' => $this->passwordRules(),
        ])->after(function ($validator) use ($user, $input) {
            if (! Hash::check($input['current_password'], $user->password)) {
                $lang = \App::getLocale();
                switch( $lang ){
                    case 'fr':
                        $validator->errors()->add('current_password', __('Le mot de passe ne corresond pas à votre mot de passe actuel.'));
                    break;
                    case 'en':
                        $validator->errors()->add('current_password', __('The provided password does not match your current password.'));
                    break;
                    case 'nl':
                        $validator->errors()->add('current_password', __('The provided password does not match your current password.'));
                    break;
                };
            }
        })->validateWithBag('updatePassword');

        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
    }
}
