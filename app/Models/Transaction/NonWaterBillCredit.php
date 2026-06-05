<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrna_k', key: 'jrna_k_rec_id')]

#[Fillable([
    'jrna_k_jurnal_no',
    'jrna_k_cabang_kd',
    'jrna_k_perk_kd',
    'jrna_k_stdk',
    'jrna_k_j_debet',
    'jrna_k_j_kredit',
    'jrna_k_do_it',
    'jrna_k_do_at',
    'jrna_k_do_at_verif',
    'jrna_k_do_by',
    'jrna_k_do_by_verif',
    'jrna_k_do_sts',
])]

class NonWaterBillCredit extends Model
{
    //
}
