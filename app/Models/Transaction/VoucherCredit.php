<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_dvhd_k', key: 'dvhd_k_rec_id')]

#[Fillable([
    'dvhd_k_jurnal_no',
    'dvhd_k_cabang_kd',
    'dvhd_k_perk_kd',
    'dvhd_k_stdk',
    'dvhd_k_j_debet',
    'dvhd_k_j_kredit',
    'dvhd_k_do_it',
    'dvhd_k_do_at',
    'dvhd_k_do_at_verif',
    'dvhd_k_do_by',
    'dvhd_k_do_by_verif',
    'dvhd_k_do_sts',
])]

class VoucherCredit extends Model
{
    //
}
