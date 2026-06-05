<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrar_r', key: 'jrar_r_rec_id')]

#[Fillable([
    'jrar_r_jurnal_no',
    'jrar_r_golpel_kd',
    'jrar_r_lbr',
    'jrar_r_jualm3',
    'jrar_r_hargaair',
    'jrar_r_beban_adm',
    'jrar_r_beban_pajak',
    'jrar_r_do_it',
    'jrar_r_do_at',
    'jrar_r_do_at_verif',
    'jrar_r_do_by',
    'jrar_r_do_by_verif',
    'jrar_r_do_sts',
])]

class WaterBillDetail extends Model
{
    //
}
