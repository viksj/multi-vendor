<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class AdminstablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'id'=>1,
            'name'=>'Super Admin',
            'type'=>'superadmin',
            'vendor_id'=>'0',
            'mobile'=>'9587159311',
            'email'=>'admin@admins.com',
            'password'=> Hash::make('12345678'),
            'image'=>'',
            'status'=>'1'
        ]);
    }
}
