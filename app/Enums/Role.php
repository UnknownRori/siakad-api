<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum Role: string
{
    use EnumToArray;

    case Admin          = "Admin";
    case Supervisor     = "Supervisor";
    case Lecturer       = "Lecturer";
    case Student        = "Student";


    public function isStudent(): bool
    {
        return $this == Role::Student;
    }

    public function isLecturer(): bool
    {
        return $this == Role::Lecturer;
    }

    public function isSupervisor(): bool
    {
        return $this == Role::Supervisor;
    }

    public function isAdmin(): bool
    {
        return $this == Role::Admin;
    }
}
