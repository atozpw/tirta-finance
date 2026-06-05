<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jumrb_k', key: 'jumrb_k_rec_id')]

#[Fillable([
    'jumrb_k_jurnal_no',
    'jumrb_k_cabang_kd',
    'jumrb_k_perk_kd',
    'jumrb_k_stdk',
    'jumrb_k_j_debet',
    'jumrb_k_j_kredit',
    'jumrb_k_do_it',
    'jumrb_k_do_at',
    'jumrb_k_do_at_verif',
    'jumrb_k_do_by',
    'jumrb_k_do_by_verif',
    'jumrb_k_do_sts',
])]

class ReconciliationCredit extends Model
{
    //
}
