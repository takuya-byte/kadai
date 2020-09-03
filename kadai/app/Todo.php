<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

const STATUS = [
    
false => [ 'label' => ' 完了' ],
true => [ 'label' => ' 作業中' ], 
];

public function getStatusLabelAttribute()
{
    
    $status = $this->attributes['status'];
    
    if(!isset(self::STATUS[$status])){
        return '';
    }
    return self::STATUS[$status]['label'];
}

}