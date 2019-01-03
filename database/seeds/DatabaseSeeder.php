<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        // disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(UsersTableSeeder::class);
        $this->call(VigneronsTableSeeder::class);
        $this->call(PubsTableSeeder::class);
        $this->call(Remplace1sTableSeeder::class);
        $this->call(Remplace2sTableSeeder::class);
        $this->call(Remplace3sTableSeeder::class);
        $this->call(DepartementsTableSeeder::class);
        $this->call(RegionvinicolesTableSeeder::class);
        $this->call(CommunevinicolesTableSeeder::class);
        $this->call(LocalitevinicolesTableSeeder::class);
        $this->call(SortedevinsTableSeeder::class);
        $this->call(ZoomsTableSeeder::class);
        $this->call(RolepourmoiTableSeeder::class);
        $this->call(QualitesTableSeeder::class);
        $this->call(ProfilTableSeeder::class);
        $this->call(LinesTableSeeder::class);
        $this->call(PaiementsTableSeeder::class);
        $this->call(PaiementpaypalsTableSeeder::class);
        $this->call(PaniersTableSeeder::class);
        $this->call(PedefsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(TachesSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(AnnonceursTableSeeder::class);
        $this->call(FacturesTableSeeder::class);
    }
}
