<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-master')]

#[Table('tm_perk1', key: 'perk1_kd', keyType: 'string', incrementing: false)]

class CoaLevel1 extends Model
{
    //
}
