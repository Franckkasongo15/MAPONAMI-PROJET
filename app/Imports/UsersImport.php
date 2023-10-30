<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {

        return new User([
            'name'  => $row['nom'],
            'email' => $row['email'],
            'promotion' => $row['promotion'],
            'password' => Hash::make($row['mot_de_passe']),
        ]);
    }
}
