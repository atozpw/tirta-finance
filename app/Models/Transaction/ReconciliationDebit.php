<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jumrb_d', key: 'jumrb_d_rec_id')]

class ReconciliationDebit extends Model
{
    //
}
