<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jumrb_d', key: 'jumrb_d_rec_id')]

#[Fillable([
    'jumrb_d_jurnal_no',
    'jumrb_d_cabang_kd',
    'jumrb_d_perk_kd',
    'jumrb_d_stdk',
    'jumrb_d_j_debet',
    'jumrb_d_j_kredit',
    'jumrb_d_do_it',
    'jumrb_d_do_at',
    'jumrb_d_do_at_verif',
    'jumrb_d_do_by',
    'jumrb_d_do_by_verif',
    'jumrb_d_do_sts',
])]

class ReconciliationDebit extends Model
{
    //
}
