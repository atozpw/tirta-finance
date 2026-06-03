<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrar_l', key: 'jrar_l_rec_id')]

#[Fillable([
    'jrar_l_jurnal_no',
    'jrar_l_doc_kd',
    'jrar_l_alamat',
    'jrar_l_bukti_no',
    'jrar_l_do_it',
    'jrar_l_do_at',
    'jrar_l_do_at_verif',
    'jrar_l_do_by',
    'jrar_l_do_by_verif',
    'jrar_l_do_sts',
])]

class WaterBillAttachment extends Model
{
    //
}
