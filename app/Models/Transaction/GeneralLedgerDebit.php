<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jul_d', key: 'jul_d_rec_id')]

#[Fillable([
    'jul_d_jurnal_no',
    'jul_d_perk_kd',
    'jul_d_stdk',
    'jul_d_j_debet',
    'jul_d_j_kredit',
    'jul_d_do_it',
    'jul_d_do_at',
    'jul_d_do_at_verif',
    'jul_d_do_by',
    'jul_d_do_by_verif',
    'jul_d_do_sts',
])]

class GeneralLedgerDebit extends Model
{
    //
}
