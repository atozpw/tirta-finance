<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_dvhd_d', key: 'dvhd_d_rec_id')]

#[Fillable([
    'dvhd_d_jurnal_no',
    'dvhd_d_cabang_kd',
    'dvhd_d_perk_kd',
    'dvhd_d_stdk',
    'dvhd_d_j_debet',
    'dvhd_d_j_kredit',
    'dvhd_d_do_it',
    'dvhd_d_do_at',
    'dvhd_d_do_at_verif',
    'dvhd_d_do_by',
    'dvhd_d_do_by_verif',
    'dvhd_d_do_sts',
])]

class VoucherDebit extends Model
{
    //
}
