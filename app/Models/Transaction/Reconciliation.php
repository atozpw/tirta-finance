<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jumrb', key: 'jumrb_jurnal_no', keyType: 'string', incrementing: false)]

class Reconciliation extends Model
{
    //
}
