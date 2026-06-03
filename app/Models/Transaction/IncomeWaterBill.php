<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jpkb_pdrekair', key: 'jpkb_pdrekair_rec_id')]

#[Fillable([
    'jpkb_pdrekair_jurnal_no',
    'jpkb_pdrekair_bulan_kel',
    'jpkb_pdrekair_cabang_kd',
    'jpkb_pdrekair_j_lbr',
    'jpkb_pdrekair_j_uangair',
    'jpkb_pdrekair_j_btadm',
    'jpkb_pdrekair_j_btmtr',
    'jpkb_pdrekair_j_denda',
    'jpkb_pdrekair_j_angs',
    'jpkb_pdrekair_materai',
    'jpkb_pdrekair_do_it',
    'jpkb_pdrekair_do_at',
    'jpkb_pdrekair_do_at_verif',
    'jpkb_pdrekair_do_by',
    'jpkb_pdrekair_do_by_verif',
    'jpkb_pdrekair_do_sts',
])]

class IncomeWaterBill extends Model
{
    //
}
