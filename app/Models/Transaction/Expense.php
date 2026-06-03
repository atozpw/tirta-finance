<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jbkb', key: 'jbkb_jurnal_no', keyType: 'string', incrementing: false)]

#[Fillable([
    'jbkb_jurnal_no',
    'jbkb_tgl_ajuan',
    'jbkb_tgl_realisasi',
    'jbkb_do_it',
    'jbkb_do_at',
    'jbkb_do_by',
    'jbkb_do_sts',
])]

class Expense extends Model
{
    //
}
