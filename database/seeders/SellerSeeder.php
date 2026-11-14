<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seller;
use App\Models\User;



class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       $users = User::doesntHave('seller')->get()->random(5);

       foreach($users as $user){

        Seller::factory()->for($user,'user')->create();
       }
    }
}
