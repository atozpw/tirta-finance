<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrar_k', key: 'jrar_k_rec_id')]

#[Fillable([
    'jrar_k_jurnal_no',
    'jrar_k_cabang_kd',
    'jrar_k_perk_kd',
    'jrar_k_stdk',
    'jrar_k_j_debet',
    'jrar_k_j_kredit',
    'jrar_k_do_it',
    'jrar_k_do_at',
    'jrar_k_do_at_verif',
    'jrar_k_do_by',
    'jrar_k_do_by_verif',
    'jrar_k_do_sts',
])]

class WaterBillCredit extends Model
{
    //
}
