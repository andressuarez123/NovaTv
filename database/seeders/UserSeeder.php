<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->fullname = 'andres';
        $user->email = 'andres.12@gmail.com';
        $user->phone = '3104344232';
        $user->photo = 'aimagen\no-photo.png';
        $user->password= '12345667';
        
        $user->role_id =1;
        $user->save();

        $user = new User;
        $user->fullname = 'homero';
        $user->email = 'homeropipe@gmail.com';
        $user->phone = '31099232';
        $user->photo = 'aimagen\no-photo.png';
        $user->password= '0987654';
        
        $user->role_id =2;
        $user->save();

        // for($i=0; $i < 100; $i++){

        //     $user= new User;
        //     $user->fullname = "User $i";
        //     $user->email = "$i@gmnail.com";
        //     $user-> phone = "123456$i";
        //     $user->photo = "images$i";
        //     $user->password= "13455";
        //     $user->role_id=2;
        //     $user->save();


        // }
        
      //  for($i=0; )

            user::factory(10)->create();
            

    }
}
