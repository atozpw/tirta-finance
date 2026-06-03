<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrna_l', key: 'jrna_l_rec_id')]

class NonWaterBillAttachment extends Model
{
    //
}
