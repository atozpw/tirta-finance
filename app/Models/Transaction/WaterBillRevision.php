<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrra', key: 'jrra_jurnal_no', keyType: 'string', incrementing: false)]

class WaterBillRevision extends Model
{
    //
}
