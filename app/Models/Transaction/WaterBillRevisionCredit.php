<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrra_k', key: 'jrra_k_rec_id')]

#[Fillable([
    'jrra_k_jurnal_no',
    'jrra_k_cabang_kd',
    'jrra_k_perk_kd',
    'jrra_k_stdk',
    'jrra_k_j_debet',
    'jrra_k_j_kredit',
    'jrra_k_do_it',
    'jrra_k_do_at',
    'jrra_k_do_at_verif',
    'jrra_k_do_by',
    'jrra_k_do_by_verif',
    'jrra_k_do_sts',
])]

class WaterBillRevisionCredit extends Model
{
    //
}
