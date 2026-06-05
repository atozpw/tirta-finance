<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrna_d', key: 'jrna_d_rec_id')]

#[Fillable([
    'jrna_d_jurnal_no',
    'jrna_d_cabang_kd',
    'jrna_d_perk_kd',
    'jrna_d_stdk',
    'jrna_d_j_debet',
    'jrna_d_j_kredit',
    'jrna_d_do_it',
    'jrna_d_do_at',
    'jrna_d_do_at_verif',
    'jrna_d_do_by',
    'jrna_d_do_by_verif',
    'jrna_d_do_sts',
])]

class NonWaterBillDebit extends Model
{
    //
}
