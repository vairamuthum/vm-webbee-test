<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model {
    protected $_table = 'menu_items';

    protected $_primaryKey = 'id';

    public function children() {
        return $this->hasMany(MenuItem::class, 'parent_id')->with('children');
    }
}
