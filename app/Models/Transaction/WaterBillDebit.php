<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrar_d', key: 'jrar_d_rec_id')]

#[Fillable([
    'jrar_d_jurnal_no',
    'jrar_d_cabang_kd',
    'jrar_d_perk_kd',
    'jrar_d_stdk',
    'jrar_d_j_debet',
    'jrar_d_j_kredit',
    'jrar_d_do_it',
    'jrar_d_do_at',
    'jrar_d_do_at_verif',
    'jrar_d_do_by',
    'jrar_d_do_by_verif',
    'jrar_d_do_sts',
])]

class WaterBillDebit extends Model
{
    //
}
