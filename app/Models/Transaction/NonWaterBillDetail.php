<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrna_r', key: 'jrna_r_rec_id')]

#[Fillable([
    'jrna_r_jurnal_no',
    'jrna_r_cabang_kd',
    'jrna_r_pel_id',
    'jrna_r_j_lbr',
    'jrna_r_j_jumlah',
    'jrna_r_do_it',
    'jrna_r_do_at',
    'jrna_r_do_at_verif',
    'jrna_r_do_by',
    'jrna_r_do_by_verif',
    'jrna_r_do_sts',
])]

class NonWaterBillDetail extends Model
{
    //
}
