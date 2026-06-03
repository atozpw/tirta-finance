<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-master')]

#[Table('tm_perk4', key: 'perk4_kd', keyType: 'string', incrementing: false)]

class CoaLevel4 extends Model
{
    //
}
