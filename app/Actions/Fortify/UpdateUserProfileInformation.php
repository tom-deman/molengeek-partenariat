<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation {
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update( $user, array $input ) {
        Validator::make( $input, [
            'first_name' => [ 'required', 'string', 'max:255' ],
            'last_name'  => [ 'required', 'string', 'max:255' ],
            'birthday'   => [ 'required', 'string', 'max:255' ],
            'profession' => [ 'required', 'string', 'max:255' ],
            'photo'      => [ 'nullable', 'image', 'max:1024' ],
            'email'      => [ 'required', 'email', 'max:255', Rule::unique( 'users' ) -> ignore( $user -> id ) ],
            'country'    => [ 'required', 'string', 'max:255' ]
            ]) -> validateWithBag( 'updateProfileInformation' );

        if( isset( $input[ 'photo' ] ) ) {
            $user -> updateProfilePhoto( $input[ 'photo' ] );
        }

        if( $input[ 'email' ] !== $user -> email && $user instanceof MustVerifyEmail ) {
            $this -> updateVerifiedUser( $user, $input );
        }
        else {
            $user -> forceFill( [
                'birthday'   => $input[ 'birthday'   ],
                'profession' => $input[ 'profession' ],
                'first_name' => $input[ 'first_name' ],
                'last_name'  => $input[ 'last_name'  ],
                'email'      => $input[ 'email'      ],
                'country'    => $input[ 'country'    ]
            ] ) -> save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser( $user, array $input ) {
        $user -> forceFill( [
            'birthday'          => $input[ 'birthday'    ],
            'profession'        => $input[ 'profession'  ],
            'first_name'        => $input[ 'first_name'  ],
            'last_name'         => $input[ 'last_name'   ],
            'country'           => $input[ 'country'     ],
            'email'             => $input[ 'email'       ],
            'email_verified_at' => null
        ] ) -> save();

        $user -> sendEmailVerificationNotification();
    }
}
