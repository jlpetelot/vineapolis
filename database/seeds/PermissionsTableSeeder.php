<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On remet à zéro les permissions
        DB::table('permissions')->truncate();

        // crud user
        $crudUser = new Permission();
        $crudUser->name = "crud-user";
        $crudUser->save();

        // crud vignerons
        $crudVigneron = new Permission();
        $crudVigneron->name = "crud-vigneron";
        $crudVigneron->save();

        // crud annonceurs
        $crudAnnonceur = new Permission();
        $crudAnnonceur->name = "crud-annonceur";
        $crudAnnonceur->save();

        // crud profils
        $crudProfil = new Permission();
        $crudProfil->name = "crud-profil";
        $crudProfil->save();

        // update autres vignerons
        $updateOthersVigneron = new Permission();
        $updateOthersVigneron->name = "update-others-vigneron";
        $updateOthersVigneron->save();

        // delete autres vignerons
        $deleteOthersVigneron = new Permission();
        $deleteOthersVigneron->name = "delete-others-vigneron";
        $deleteOthersVigneron->save();

        // update autres annonceurs
        $updateOthersAnnonceur = new Permission();
        $updateOthersAnnonceur->name = "update-others-annonceur";
        $updateOthersAnnonceur->save();

        // delete autres annonceurs
        $deleteOthersAnnonceur = new Permission();
        $deleteOthersAnnonceur->name = "delete-others-annonceur";
        $deleteOthersAnnonceur->save();

        // update autre profils
        $updateOthersProfil = new Permission();
        $updateOthersProfil->name = "update-others-profil";
        $updateOthersProfil->save();

        // delete autres profils
        $deleteOthersProfil = new Permission();
        $deleteOthersProfil->name = "delete-others-profil";
        $deleteOthersProfil->save();

        // Assignation des permissions aux roles
        $administrateur = Role::whereName('administrateur')->first();
        $administrateur2 = Role::where('id', 2)->first();
        $administrateur3 = Role::where('id', 3)->first();
        $vigneron       = Role::whereName('vigneron')->first();
        $annonceur      = Role::whereName('annonceur')->first();
        $internaute     = Role::whereName('internaute')->first();

        $administrateur->detachPermissions([$crudUser, $crudVigneron, $crudAnnonceur, $crudProfil, $updateOthersVigneron, $deleteOthersVigneron, $updateOthersAnnonceur, $deleteOthersAnnonceur, $updateOthersProfil, $deleteOthersProfil]);
        $administrateur->attachPermissions([$crudUser, $crudVigneron, $crudAnnonceur, $crudProfil, $updateOthersVigneron, $deleteOthersVigneron, $updateOthersAnnonceur, $deleteOthersAnnonceur, $updateOthersProfil, $deleteOthersProfil]);

        $administrateur2->detachPermissions([$crudUser, $crudVigneron, $crudAnnonceur, $crudProfil, $updateOthersVigneron, $deleteOthersVigneron, $updateOthersAnnonceur, $deleteOthersAnnonceur, $updateOthersProfil, $deleteOthersProfil]);
        $administrateur2->attachPermissions([$crudUser, $crudVigneron, $crudAnnonceur, $crudProfil, $updateOthersVigneron, $deleteOthersVigneron, $updateOthersAnnonceur, $deleteOthersAnnonceur, $updateOthersProfil, $deleteOthersProfil]);

        $administrateur3->detachPermissions([$crudUser, $crudVigneron, $crudAnnonceur, $crudProfil, $updateOthersVigneron, $deleteOthersVigneron, $updateOthersAnnonceur, $deleteOthersAnnonceur, $updateOthersProfil, $deleteOthersProfil]);
        $administrateur3->attachPermissions([$crudUser, $crudVigneron, $crudAnnonceur, $crudProfil, $updateOthersVigneron, $deleteOthersVigneron, $updateOthersAnnonceur, $deleteOthersAnnonceur, $updateOthersProfil, $deleteOthersProfil]);

        $vigneron->detachPermissions([$updateOthersVigneron, $deleteOthersVigneron, $updateOthersProfil, $deleteOthersProfil]);
        $vigneron->attachPermissions([$updateOthersVigneron, $deleteOthersVigneron, $updateOthersProfil, $deleteOthersProfil]);

        $annonceur->detachPermissions([$updateOthersAnnonceur, $deleteOthersAnnonceur, $updateOthersProfil, $deleteOthersProfil]);
        $annonceur->attachPermissions([$updateOthersAnnonceur, $deleteOthersAnnonceur, $updateOthersProfil, $deleteOthersProfil]);

        $internaute->detachPermissions([$updateOthersProfil, $deleteOthersProfil]);
        $internaute->attachPermissions([$updateOthersProfil, $deleteOthersProfil]);
    }
}
