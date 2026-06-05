<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrra_d', key: 'jrra_d_rec_id')]

#[Fillable([
    'jrra_d_jurnal_no',
    'jrra_d_cabang_kd',
    'jrra_d_perk_kd',
    'jrra_d_stdk',
    'jrra_d_j_debet',
    'jrra_d_j_kredit',
    'jrra_d_do_it',
    'jrra_d_do_at',
    'jrra_d_do_at_verif',
    'jrra_d_do_by',
    'jrra_d_do_by_verif',
    'jrra_d_do_sts',
])]

class WaterBillRevisionDebit extends Model
{
    //
}
