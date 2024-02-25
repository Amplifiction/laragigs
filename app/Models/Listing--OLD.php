<?php //made manually
namespace App\Models; //Purpose: acces this model from other files

class Listing {
    public static function all (){
        return [ //comes from DB in practice
            [
                'id' => 1,
                'title' => 'title 1',
                'description' => 'description 1',
            ],
            [
                'id' => 2,
                'title' => 'title 2',
                'description' => 'lorem ipsum dolor sit amet, consectetur adip',
            ]
        ];
    }
    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}


