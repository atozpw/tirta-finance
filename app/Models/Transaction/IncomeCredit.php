<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jpkb_k', key: 'jpkb_k_rec_id')]

#[Fillable([
    'jpkb_k_jurnal_no',
    'jpkb_k_cabang_kd',
    'jpkb_k_perk_kd',
    'jpkb_k_stdk',
    'jpkb_k_j_debet',
    'jpkb_k_j_kredit',
    'jpkb_k_do_it',
    'jpkb_k_do_at',
    'jpkb_k_do_at_verif',
    'jpkb_k_do_by',
    'jpkb_k_do_by_verif',
    'jpkb_k_do_sts',
])]

class IncomeCredit extends Model
{
    //
}
