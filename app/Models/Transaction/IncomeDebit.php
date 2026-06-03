<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jpkb_d', key: 'jpkb_d_rec_id')]

#[Fillable([
    'jpkb_d_jurnal_no',
    'jpkb_d_setor_tgl',
    'jpkb_d_cabang_kd',
    'jpkb_d_perk_kd',
    'jpkb_d_stdk',
    'jpkb_d_j_debet',
    'jpkb_d_j_kredit',
    'jpkb_d_do_it',
    'jpkb_d_do_at',
    'jpkb_d_do_at_verif',
    'jpkb_d_do_by',
    'jpkb_d_do_by_verif',
    'jpkb_d_do_sts',
])]

class IncomeDebit extends Model
{
    //
}
