<?php 


namespace App\Models;

class Listing{

    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Lisitng One',
                'description' => 'Lorem Ipsum'
            ],
            [
                'id' => 2,
                'title' => 'Lisitng Two',
                'description' => 'Lorem Ipsum Two'
            ]

            ];

    }

    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;

            } 

        }


    }
}