<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jumrb_biaya', key: 'jumrb_biaya_rec_id')]

#[Fillable([
    'jumrb_biaya_jurnal_no',
    'jumrb_biaya_uraian',
    'jumrb_biaya_j_uang',
    'jumrb_biaya_do_it',
    'jumrb_biaya_do_at',
    'jumrb_biaya_do_at_verif',
    'jumrb_biaya_do_by',
    'jumrb_biaya_do_by_verif',
    'jumrb_biaya_do_sts',
])]

class ReconciliationExpense extends Model
{
    //
}
