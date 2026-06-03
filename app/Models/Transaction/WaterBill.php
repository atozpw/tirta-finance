<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrar', key: 'jrar_jurnal_no', keyType: 'string', incrementing: false)]

#[Fillable([
    'jrar_jurnal_no',
    'jrar_mulai_tagih_tgl',
    'jrar_piutang_tgl',
    'jrar_cab_kd',
    'jrar_uraian',
    'jrar_do_it',
    'jrar_do_at',
    'jrar_do_by',
    'jrar_do_sts',
])]

class WaterBill extends Model
{
    //
}
