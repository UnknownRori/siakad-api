<?php

namespace App\Enum;

enum Role: string
{
    case Admin          = "Admin";
    case Supervisor     = "Supervisor";
    case Lecturer       = "Lecturer";
    case Student        = "Student";

    /**
     * Return an ["Admin", "Supervisor", "Lecturer", "Siswa"]
     *
     * @return array<string>
     */
    public static function toArray(): array
    {
        return array_map(fn (Role $role) => $role->name, Role::cases());
    }


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
