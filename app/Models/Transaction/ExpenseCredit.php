<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jbkb_k', key: 'jbkb_k_rec_id')]

#[Fillable([
    'jbkb_k_jurnal_no',
    'jbkb_k_tgl',
    'jbkb_k_bukti_no',
    'jbkb_k_cabang_kd',
    'jbkb_k_perk_kd',
    'jbkb_k_stdk',
    'jbkb_k_j_debet',
    'jbkb_k_j_kredit',
    'jbkb_k_do_it',
    'jbkb_k_do_at',
    'jbkb_k_do_at_verif',
    'jbkb_k_do_by',
    'jbkb_k_do_by_verif',
    'jbkb_k_do_sts',
])]

class ExpenseCredit extends Model
{
    //
}
