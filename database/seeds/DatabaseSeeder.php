<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(MovieTableSeeder::class);
        self::seedUsers();
        $this->command->info("Tabla 'usuarios' inicializada con datos!");
    }

    private function seedUsers() {
        DB::table("users")->truncate();
        
        $user = new User();
        $user->name = "ripruna";
        $user->email = "ripruna@cipfpbatoi.es";
        $user->password = bcrypt("1234");
        $user->save();

        $user = new User();
        $user->name = "igmullor";
        $user->email = "igmullor@cipfpbatoi.es";
        $user->password = bcrypt("1234");
        $user->save();
        
        $user = new User();
        $user->name = "jasvasco";
        $user->email = "jasvasco@cipfpbatoi.es";
        $user->password = bcrypt("1234");
        $user->save();
    }

}
