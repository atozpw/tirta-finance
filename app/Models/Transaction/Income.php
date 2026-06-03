<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jpkb', key: 'jpkb_jurnal_no', keyType: 'string', incrementing: false)]

#[Fillable([
    'jpkb_jurnal_no',
    'jpkb_tgl',
    'jpkb_bukti_no',
    'jpkb_cabang_kd',
    'jpkb_kasir_id',
    'jpkb_rekanan_kd',
    'jpkb_uraian',
    'jpkb_do_it',
    'jpkb_do_at',
    'jpkb_do_by',
    'jpkb_do_sts',
])]

class Income extends Model
{
    //
}
