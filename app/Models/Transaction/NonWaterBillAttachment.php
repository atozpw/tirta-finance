<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrna_l', key: 'jrna_l_rec_id')]

#[Fillable([
    'jrna_l_rec_id',
    'jrna_l_jurnal_no',
    'jrna_l_doc_kd',
    'jrna_l_alamat',
    'jrna_l_bukti_no',
    'jrna_l_do_it',
    'jrna_l_do_at',
    'jrna_l_do_at_verif',
    'jrna_l_do_by',
    'jrna_l_do_by_verif',
    'jrna_l_do_sts',
])]

class NonWaterBillAttachment extends Model
{
    //
}
