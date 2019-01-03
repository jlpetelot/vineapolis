<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        $date = Carbon::now();

        DB::table('products')->insert([

            [
                'name'          => "option lisibilité et détail de votre activité",
                'prix'          => 25.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "option lisibilité, détail de votre activité et reportage",
                'prix'          => 40.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de France, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de France, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de France, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de France, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de France, annonce en bas à gauche et d'un format de (382px) x (440px)",
                'prix'          => 7990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de France, annonce en haut à droite et d'un format de (382px) x (238px)",
                'prix'          => 5490.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de France, annonce au milieu à droite et d'un format de (382px) x (238px)",
                'prix'          => 5490.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de France, annonce en bas à droite et d'un format de (382px) x (440px)",
                'prix'          => 7990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de Bourgogne, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bourgogne, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bourgogne, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bourgogne, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bourgogne, annonce en bas à gauche et d'un format de (382px) x (440px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bourgogne, annonce en haut à droite et d'un format de (382px) x (238px)",
                'prix'          => 3490.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bourgogne, annonce au milieu à droite et d'un format de (382px) x (238px)",
                'prix'          => 3490.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bourgogne, annonce en bas à droite et d'un format de (382px) x (440px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de Bordeaux, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bordeaux, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bordeaux, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bordeaux, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bordeaux, annonce en bas à gauche et d'un format de (382px) x (440px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bordeaux, annonce en haut à droite et d'un format de (382px) x (238px)",
                'prix'          => 3490.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bordeaux, annonce au milieu à droite et d'un format de (382px) x (238px)",
                'prix'          => 3490.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bordeaux, annonce en bas à droite et d'un format de (382px) x (440px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Champagne, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Champagne, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Champagne, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Champagne, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Champagne, annonce en bas à gauche et d'un format de (382px) x (440px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Champagne, annonce en haut à droite et d'un format de (382px) x (238px)",
                'prix'          => 3490.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Champagne, annonce au milieu à droite et d'un format de (382px) x (238px)",
                'prix'          => 3490.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Champagne, annonce en bas à droite et d'un format de (382px) x (440px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de la Loire, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Loire, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Loire, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Loire, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Loire, annonce en bas à gauche et d'un format de (382px) x (440px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Loire, annonce en haut à droite et d'un format de (382px) x (238px)",
                'prix'          => 3490.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Loire, annonce au milieu à droite et d'un format de (382px) x (238px)",
                'prix'          => 3490.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Loire, annonce en bas à droite et d'un format de (382px) x (440px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region des Côtes du Rhône Septentrional, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes du Rhône Septentrional, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes du Rhône Septentrional, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes du Rhône Septentrional, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes du Rhône Septentrional, annonce en bas à gauche et d'un format de (382px) x (440px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes du Rhône Septentrional, annonce en haut à droite et d'un format de (382px) x (238px)",
                'prix'          => 3490.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes du Rhône Septentrional, annonce au milieu à droite et d'un format de (382px) x (238px)",
                'prix'          => 3490.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes du Rhône Septentrional, annonce en bas à droite et d'un format de (382px) x (440px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region du Sud-Ouest, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Sud-Ouest, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Sud-Ouest, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Sud-Ouest, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Sud-Ouest, annonce en bas à gauche et d'un format de (382px) x (440px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Sud-Ouest, annonce en haut à droite et d'un format de (382px) x (238px)",
                'prix'          => 3490.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Sud-Ouest, annonce au milieu à droite et d'un format de (382px) x (238px)",
                'prix'          => 3490.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Sud-Ouest, annonce en bas à droite et d'un format de (382px) x (440px)",
                'prix'          => 3990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Beaune et Côtes de Beaune, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Beaune et Côtes de Beaune, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Beaune et Côtes de Beaune, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Beaune et Côtes de Beaune, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Beaune et Côtes de Beaune, annonce en bas à gauche et d'un format de (382px) x (440px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Beaune et Côtes de Beaune, annonce en haut à droite et d'un format de (382px) x (238px)",
                'prix'          => 1990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Beaune et Côtes de Beaune, annonce au milieu à droite et d'un format de (382px) x (238px)",
                'prix'          => 1990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Beaune et Côtes de Beaune, annonce en bas à droite et d'un format de (382px) x (440px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Chablis, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chablis, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chablis, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chablis, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chablis, annonce en bas à gauche et d'un format de (382px) x (440px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chablis, annonce en haut à droite et d'un format de (382px) x (238px)",
                'prix'          => 1990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chablis, annonce au milieu à droite et d'un format de (382px) x (238px)",
                'prix'          => 1990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chablis, annonce en bas à droite et d'un format de (382px) x (440px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "Tous les vins, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 1990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "Tous les vins, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 1990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "Tous les vins, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 1990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "Tous les vins, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 1990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "Tous les vins, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 1990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "Tous les vins, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 1990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "Tous les vins, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 1990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "Tous les vins, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 1990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region des Côtes de Nuits, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes de Nuits, annonce en haut, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes de Nuits, annonce au milieu, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes de Nuits, annonce au milieu, 2ème à gauche et d'un format de (191px) x (238px)",
                'prix'          => 990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes de Nuits, annonce en bas à gauche et d'un format de (382px) x (440px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes de Nuits, annonce en haut à droite et d'un format de (382px) x (238px)",
                'prix'          => 1990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes de Nuits, annonce au milieu à droite et d'un format de (382px) x (238px)",
                'prix'          => 1990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes de Nuits, annonce en bas à droite et d'un format de (382px) x (440px)",
                'prix'          => 2990.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de la Côte Chalonnaise et Couchoise, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Côte Chalonnaise et Couchoise, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Côte Chalonnaise et Couchoise, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Côte Chalonnaise et Couchoise, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Côte Chalonnaise et Couchoise, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Côte Chalonnaise et Couchoise, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Côte Chalonnaise et Couchoise, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Côte Chalonnaise et Couchoise, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region des Grands Crus de Chablis, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Grands Crus de Chablis, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Grands Crus de Chablis, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Grands Crus de Chablis, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Grands Crus de Chablis, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Grands Crus de Chablis, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Grands Crus de Chablis, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Grands Crus de Chablis, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de Mâcon, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Mâcon, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Mâcon, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Mâcon, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Mâcon, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Mâcon, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Mâcon, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Mâcon, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Gevrey-Chambertin, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Gevrey-Chambertin, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Gevrey-Chambertin, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Gevrey-Chambertin, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Gevrey-Chambertin, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Gevrey-Chambertin, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Gevrey-Chambertin, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Gevrey-Chambertin, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de Chambolle-Musigny et Morey-Saint-Denis, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chambolle-Musigny et Morey-Saint-Denis, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chambolle-Musigny et Morey-Saint-Denis, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chambolle-Musigny et Morey-Saint-Denis, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chambolle-Musigny et Morey-Saint-Denis, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chambolle-Musigny et Morey-Saint-Denis, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chambolle-Musigny et Morey-Saint-Denis, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chambolle-Musigny et Morey-Saint-Denis, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Vougeot, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Vougeot, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Vougeot, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Vougeot, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Vougeot, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Vougeot, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Vougeot, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Vougeot, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de Vosne-Romanée, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Vosne-Romanée, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Vosne-Romanée, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Vosne-Romanée, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Vosne-Romanée, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Vosne-Romanée, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Vosne-Romanée, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Vosne-Romanée, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Nuits-Saint-Georges, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Nuits-Saint-Georges, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Nuits-Saint-Georges, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Nuits-Saint-Georges, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Nuits-Saint-Georges, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Nuits-Saint-Georges, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Nuits-Saint-Georges, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Nuits-Saint-Georges, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region d'Aloxe-Corton, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region d'Aloxe-Corton, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region d'Aloxe-Corton, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region d'Aloxe-Corton, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region d'Aloxe-Corton, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region d'Aloxe-Corton, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region d'Aloxe-Corton, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region d'Aloxe-Corton, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region des 1ers crus et Grands Crus de Beaune, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des 1ers crus et Grands Crus de Beaune, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des 1ers crus et Grands Crus de Beaune, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des 1ers crus et Grands Crus de Beaune, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des 1ers crus et Grands Crus de Beaune, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des 1ers crus et Grands Crus de Beaune, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des 1ers crus et Grands Crus de Beaune, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des 1ers crus et Grands Crus de Beaune, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Pommard, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pommard, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pommard, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pommard, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pommard, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pommard, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pommard, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pommard, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Volnay, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Volnay, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Volnay, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Volnay, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Volnay, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Volnay, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Volnay, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Volnay, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Puligny-Montrachet, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Puligny-Montrachet, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Puligny-Montrachet, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Puligny-Montrachet, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Puligny-Montrachet, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Puligny-Montrachet, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Puligny-Montrachet, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Puligny-Montrachet, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Chassagne-Montrachet, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chassagne-Montrachet, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chassagne-Montrachet, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chassagne-Montrachet, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chassagne-Montrachet, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chassagne-Montrachet, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chassagne-Montrachet, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Chassagne-Montrachet, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region du Médoc, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Médoc, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Médoc, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Médoc, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Médoc, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Médoc, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Médoc, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Médoc, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de Margaux, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Margaux, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Margaux, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Margaux, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Margaux, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Margaux, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Margaux, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Margaux, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de Moulis-Listrac, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Moulis-Listrac, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Moulis-Listrac, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Moulis-Listrac, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Moulis-Listrac, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Moulis-Listrac, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Moulis-Listrac, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Moulis-Listrac, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Pauillac, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pauillac, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pauillac, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pauillac, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pauillac, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pauillac, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pauillac, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pauillac, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de Saint-Estèphe, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Estèphe, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Estèphe, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Estèphe, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Estèphe, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Estèphe, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Estèphe, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Estèphe, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Saint-Julien, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Julien, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Julien, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Julien, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Julien, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Julien, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Julien, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Julien, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Bugey, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bugey, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bugey, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bugey, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bugey, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bugey, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bugey, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Bugey, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region des Côtes du Rhône Méridional, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes du Rhône Méridional, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes du Rhône Méridional, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes du Rhône Méridional, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes du Rhône Méridional, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes du Rhône Méridional, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes du Rhône Méridional, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Côtes du Rhône Méridional, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de Pessac-Léognan, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pessac-Léognan, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pessac-Léognan, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pessac-Léognan, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pessac-Léognan, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pessac-Léognan, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pessac-Léognan, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pessac-Léognan, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de Pomerol, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pomerol, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pomerol, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pomerol, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pomerol, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pomerol, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pomerol, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pomerol, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Saint-Émilion, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Émilion, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Émilion, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Émilion, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Émilion, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Émilion, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Émilion, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Émilion, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Sauternes, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Sauternes, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Sauternes, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Sauternes, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Sauternes, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Sauternes, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Sauternes, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Sauternes, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Champagnes de la Montagne de Reims et Côte des Blancs, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region des Champagnes de la Vallée de la Marne, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Champagnes de la Vallée de la Marne, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Champagnes de la Vallée de la Marne, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Champagnes de la Vallée de la Marne, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Champagnes de la Vallée de la Marne, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Champagnes de la Vallée de la Marne, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Champagnes de la Vallée de la Marne, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region des Champagnes de la Vallée de la Marne, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region d'Alsace, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region d'Alsace, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region d'Alsace, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region d'Alsace, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region d'Alsace, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region d'Alsace, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region d'Alsace, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region d'Alsace, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de Pouilly, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pouilly, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pouilly, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pouilly, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pouilly, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pouilly, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pouilly, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Pouilly, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Quincy et Reuilly, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Quincy et Reuilly, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Quincy et Reuilly, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Quincy et Reuilly, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Quincy et Reuilly, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Quincy et Reuilly, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Quincy et Reuilly, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Quincy et Reuilly, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Sancerre et Menetou-Salon, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Sancerre et Menetou-Salon, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Sancerre et Menetou-Salon, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Sancerre et Menetou-Salon, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Sancerre et Menetou-Salon, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Sancerre et Menetou-Salon, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Sancerre et Menetou-Salon, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Sancerre et Menetou-Salon, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Saumur-Champigny, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saumur-Champigny, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saumur-Champigny, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saumur-Champigny, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saumur-Champigny, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saumur-Champigny, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saumur-Champigny, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saumur-Champigny, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Jura, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Jura, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Jura, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Jura, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Jura, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Jura, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Jura, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Jura, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region du Languedoc-Roussillon, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Languedoc-Roussillon, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Languedoc-Roussillon, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Languedoc-Roussillon, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Languedoc-Roussillon, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Languedoc-Roussillon, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Languedoc-Roussillon, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Languedoc-Roussillon, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region du Beaujolais, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Beaujolais, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Beaujolais, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Beaujolais, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Beaujolais, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Beaujolais, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Beaujolais, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region du Beaujolais, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de la Lorraine, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Lorraine, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Lorraine, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Lorraine, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Lorraine, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Lorraine, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Lorraine, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Lorraine, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de Cognac, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Cognac, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Cognac, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Cognac, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Cognac, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Cognac, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Cognac, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Cognac, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de l'Armagnac, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Armagnac, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Armagnac, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Armagnac, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Armagnac, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Armagnac, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Armagnac, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Armagnac, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de l'Aveyron, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Aveyron, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Aveyron, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Aveyron, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Aveyron, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Aveyron, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Aveyron, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Aveyron, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de l'Auvergne, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Auvergne, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Auvergne, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Auvergne, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Auvergne, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Auvergne, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Auvergne, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de l'Auvergne, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de la Savoie, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Savoie, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Savoie, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Savoie, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Savoie, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Savoie, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Savoie, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Savoie, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de la Corse, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Corse, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Corse, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Corse, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Corse, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Corse, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Corse, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Corse, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],



            [
                'name'          => "region de la Provence, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Provence, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Provence, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Provence, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Provence, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Provence, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Provence, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de la Provence, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


            [
                'name'          => "region de Saint-Peray et Cornas, annonce en haut, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Peray et Cornas, annonce à gauche, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Peray et Cornas, annonce à gauche, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Peray et Cornas, annonce en bas, tout à gauche et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Peray et Cornas, annonce en haut, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Peray et Cornas, annonce à droite, le 1er au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Peray et Cornas, annonce à droite, le 2nd au milieu et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],
            [
                'name'          => "region de Saint-Peray et Cornas, annonce en bas, tout à droite et d'un format de (191px) x (238px)",
                'prix'          => 790.00,
                'created_at'    => $date,
                'updated_at'    => $date
            ],


        ]);
    }
}
