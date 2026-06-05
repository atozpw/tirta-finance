<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrar_tkr', key: 'jrar_tkr_rec_id')]

#[Fillable([
    'jrar_tkr_jurnal_no',
    'jrar_tkr_uraian',
    'jrar_tkr_golpel_kd',
    'jrar_tkr_lbr',
    'jrar_tkr_j_tambah',
    'jrar_tkr_j_kurang',
    'jrar_tkr_do_it',
    'jrar_tkr_do_at',
    'jrar_tkr_do_at_verif',
    'jrar_tkr_do_by',
    'jrar_tkr_do_by_verif',
    'jrar_tkr_do_sts',
])]

class WaterBillReconciliation extends Model
{
    //
}
