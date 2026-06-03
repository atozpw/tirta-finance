<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jul', key: 'jul_jurnal_no', keyType: 'string', incrementing: false)]

#[Fillable([
    'jul_jurnal_no',
    'jul_tgl',
    'jul_cabang_kd',
    'jul_uraian',
    'jul_do_it',
    'jul_do_at',
    'jul_do_by',
    'jul_do_sts',
])]

class GeneralLedger extends Model
{
    //
}
