<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On remet la table à zéro
        DB::table('users')->truncate();

        $date = Carbon::now();

        DB::table('users')->insert([
            [
                'name'              => "Jean-Luc Petelot",
                'email'             => "jlpetelot@madinici.org",
                'role'              => "administrateur",
                'imageprofil'       => "fastzibon-150x150.gif",
                'password'          => bcrypt('secret'),
                // 'panier_id'         => NULL,
                'api_token'         => bcrypt(rand(1,10)),
                'remember_token'    => bcrypt(rand(1,10)),
                'created_at'        => $date,
                'updated_at'        => $date,
            ],
            [
                'name'              => "Dominique Gourault",
                'email'             => "d.gourault@sirius-group.fr",
                'role'              => "administrateur",
                'imageprofil'       => "avatar-homme.jpg",
                'password'          => bcrypt('1234567'),
                // 'panier_id'         => NULL,
                'api_token'         => bcrypt(rand(1,10)),
                'remember_token'    => bcrypt(rand(1,10)),
                'created_at'        => $date,
                'updated_at'        => $date,
            ],
            [
                'name'              => "Kevin Van Noort",
                'email'             => "kevin@ordim-immo.com",
                'role'              => "administrateur",
                'imageprofil'       => "kevin-128x128.jpg",
                'password'          => bcrypt('1234567'),
                // 'panier_id'         => NULL,
                'api_token'         => bcrypt(rand(1,10)),
                'remember_token'    => bcrypt(rand(1,10)),
                'created_at'        => $date,
                'updated_at'        => $date,
            ],
            [
                'name'              => "Test Vigneron",
                'email'             => "test@vigneron.fr",
                'role'              => "vigneron",
                'imageprofil'       => "avatar-neutre.jpg",
                'password'          => bcrypt('1234567'),
                // 'panier_id'         => NULL,
                'api_token'         => bcrypt(rand(1,10)),
                'remember_token'    => bcrypt(rand(1,10)),
                'created_at'        => $date,
                'updated_at'        => $date,
            ],
            [
                'name'              => "Test Annonceur",
                'email'             => "test@annonceur.fr",
                'role'              => "annonceur",
                'imageprofil'       => "avatar-neutre.jpg",
                'password'          => bcrypt('1234567'),
                // 'panier_id'         => NULL,
                'api_token'         => bcrypt(rand(1,10)),
                'remember_token'    => bcrypt(rand(1,10)),
                'created_at'        => $date,
                'updated_at'        => $date,
            ],
            [
                'name'              => "Internaute Internaute",
                'email'             => "internaute@gmail.com",
                'role'              => "internaute",
                'imageprofil'       => "avatar-neutre.jpg",
                'password'          => bcrypt('1234567'),
                // 'panier_id'         => NULL,
                'api_token'         => bcrypt(rand(1,10)),
                'remember_token'    => bcrypt(rand(1,10)),
                'created_at'        => $date,
                'updated_at'        => $date,
            ],
            [
                'name'              => "Cognac Remy Couillebaud",
                'email'             => "cognac.couillebaud@wanadoo.fr",
                'role'              => "vigneron",
                'imageprofil'       => "avatar-neutre.jpg",
                'password'          => bcrypt('1234567'),
                // 'panier_id'         => NULL,
                'api_token'         => bcrypt(rand(1,10)),
                'remember_token'    => bcrypt(rand(1,10)),
                'created_at'        => $date,
                'updated_at'        => $date,
            ],
        ]);
    }
}
