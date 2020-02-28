<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render(){
        return [
            'errors' => 'Product not belongs to user!'
        ];
    }
}
