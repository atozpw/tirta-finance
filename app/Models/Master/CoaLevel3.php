<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-master')]

#[Table('tm_perk3', key: 'perk3_kd', keyType: 'string', incrementing: false)]

class CoaLevel3 extends Model
{
    //
}
