<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrna', key: 'jrna_jurnal_no', keyType: 'string', incrementing: false)]

#[Fillable([
    'jrna_jurnal_no',
    'jrna_mulai_tagih_tgl',
    'jrna_piutang_tgl',
    'jrna_jenisna_kd',
    'jrna_cabang_kd',
    'jrna_uraian',
    'jrna_do_it',
    'jrna_do_at',
    'jrna_do_by',
    'jrna_do_sts',
])]

class NonWaterBill extends Model
{
    //
}
