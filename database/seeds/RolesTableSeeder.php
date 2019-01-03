<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// On remet la table à zéro
        DB::table('roles')->truncate();

        // disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Création du rôle de l'administrateur
        $administrateur = new Role();
        $administrateur->name = "administrateur";
        $administrateur->display_name = "administrateur";
        $administrateur->save();

        // Création du rôle du Vigneron
        $vigneron = new Role();
        $vigneron->name = "vigneron";
        $vigneron->display_name = "vigneron";
        $vigneron->save();

        // Création du rôle de l'annonceur
        $annonceur = new Role();
        $annonceur->name = "annonceur";
        $annonceur->display_name = "annonceur";
        $annonceur->save();

        // Création du rôle du l'internaute
        $internaute = new Role();
        $internaute->name = "internaute";
        $internaute->display_name = "internaute";
        $internaute->save();

        // Attribution des rôles
        // Admin/Administrateur
        $user1 = User::find(1);
        $user1->detachRole($administrateur);
        $user1->attachRole($administrateur);

        // Admin/Administrateur
        $user2 = User::find(2);
        $user2->detachRole($administrateur);
        $user2->attachRole($administrateur);

        // Admin/Administrateur
        $user3 = User::find(3);
        $user3->detachRole($administrateur);
        $user3->attachRole($administrateur);

        // Vigneron
        $user4 = User::find(4);
        $user4->detachRole($vigneron);
        $user4->attachRole($vigneron);

        // Annonceur
        $user5 = User::find(5);
        $user5->detachRole($annonceur);
        $user5->attachRole($annonceur);

        // Lembda
        $user6 = User::find(6);
        $user6->detachRole($internaute);
        $user6->attachRole($internaute);

    }
}
