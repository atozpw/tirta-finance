<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jumrb', key: 'jumrb_jurnal_no', keyType: 'string', incrementing: false)]

#[Fillable([
    'jumrb_jurnal_no',
    'jumrb_tgl_ajuan',
    'jumrb_tgl_realisasi',
    'jumrb_cabang_kd',
    'jumrb_uraian',
    'jumrb_do_it',
    'jumrb_do_at',
    'jumrb_do_by',
    'jumrb_do_sts',
])]

class Reconciliation extends Model
{
    //
}
