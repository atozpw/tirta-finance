<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jul_k', key: 'jul_k_rec_id')]

#[Fillable([
    'jul_k_jurnal_no',
    'jul_k_perk_kd',
    'jul_k_stdk',
    'jul_k_j_debet',
    'jul_k_j_kredit',
    'jul_k_do_it',
    'jul_k_do_at',
    'jul_k_do_at_verif',
    'jul_k_do_by',
    'jul_k_do_by_verif',
    'jul_k_do_sts',
])]

class GeneralLedgerCredit extends Model
{
    //
}
