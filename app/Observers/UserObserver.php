<?php

namespace App\Observers;

use App\Enums\Role;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class UserObserver
{

    const ID_GENERATOR_TEMPLATE = [
        'table' => 'users',
        'length' => 10,
    ];

    /**
     * Handle the User "creating" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function creating(User $user): void
    {
        // Todo : Make it service
        match ($user->role) {
            Role::Lecturer => $user->lecturer_code = IdGenerator::generate(
                [
                    ...self::ID_GENERATOR_TEMPLATE,
                    'prefix' => 'L' .  date('y'),
                    'field' => 'lecturer_code'
                ]
            ),
            Role::Student => $user->student_code = IdGenerator::generate(
                [
                    ...self::ID_GENERATOR_TEMPLATE,
                    'prefix' => 'S' . date('y'),
                    'field' => 'student_code',
                ]
            ),
            default => null,
        };
    }

    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        //
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
