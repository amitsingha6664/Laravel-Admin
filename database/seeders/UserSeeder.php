<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run(): void{
        User::insert([
        [
            "username"   => "bmjkscentral",
            "phone_no"   => "0171000000",
            "account_type"   => "Super Admin",
            "password"   => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            "username"   => "bmjksbhanubil",
            "phone_no"   => "0172000000",
            "account_type"   => "Admin",
            "password"   => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            "username"   => "bmjksghuramara",
            "phone_no"   => "0173000000",
            "account_type"   => "Admin",
            "password"   => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            "username"   => "bmjksadompur",
            "phone_no"   => "0174000000",
            "account_type"   => "Admin",
            "password"   => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            "username"   => "bmjksdalua",
            "phone_no"   => "0175000000",
            "account_type"   => "Admin",
            "password"   => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            "username"   => "bmjkstilokpur",
            "phone_no"   => "0176000000",
            "account_type"   => "Admin",
            "password"   => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            "username"   => "bmjksmadhobpur",
            "phone_no"   => "0177000000",
            "account_type"   => "Admin",
            "password"   => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            "username"   => "bmjksmadhobpur-1",
            "phone_no"   => "0178000000",
            "account_type"   => "Admin",
            "password"   => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            "username"   => "bmjksbaligoan",
            "phone_no"   => "0179000000",
            "account_type"   => "Admin",
            "password"   => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            "username"   => "bmjksbishgoan",
            "phone_no"   => "0171100000",
            "account_type"   => "Admin",
            "password"   => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            "username"   => "bmjksmashimpur",
            "phone_no"   => "0171200000",
            "account_type"   => "Admin",
            "password"   => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            "username"   => "bmjksdhonitila",
            "phone_no"   => "0171300000",
            "account_type"   => "Admin",
            "password"   => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ],[
            "username"   => "bmjksmajhergoan",
            "phone_no"   => "0171400000",
            "account_type"   => "Admin",
            "password"   => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ]]);
    }
}
