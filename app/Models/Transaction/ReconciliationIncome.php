<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jumrb_pend', key: 'jumrb_pend_rec_id')]

#[Fillable([
    'jumrb_pend_jurnal_no',
    'jumrb_pend_uraian',
    'jumrb_pend_j_uang',
    'jumrb_pend_do_it',
    'jumrb_pend_do_at',
    'jumrb_pend_do_at_verif',
    'jumrb_pend_do_by',
    'jumrb_pend_do_by_verif',
    'jumrb_pend_do_sts',
])]

class ReconciliationIncome extends Model
{
    //
}
