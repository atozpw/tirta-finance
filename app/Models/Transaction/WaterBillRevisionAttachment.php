<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jrra_l', key: 'jrra_l_rec_id')]

#[Fillable([
    'jrra_l_jurnal_no',
    'jrra_l_doc_kd',
    'jrra_l_alamat',
    'jrra_l_bukti_no',
    'jrra_l_do_it',
    'jrra_l_do_at',
    'jrra_l_do_at_verif',
    'jrra_l_do_by',
    'jrra_l_do_by_verif',
    'jrra_l_do_sts',
])]

class WaterBillRevisionAttachment extends Model
{
    //
}
