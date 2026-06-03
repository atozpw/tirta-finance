<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jbkb_l', key: 'jbkb_l_rec_id')]

#[Fillable([
    'jbkb_l_jurnal_no',
    'jbkb_l_doc_kd',
    'jbkb_l_alamat',
    'jbkb_l_bukti_no',
    'jbkb_l_do_it',
    'jbkb_l_do_at',
    'jbkb_l_do_at_verif',
    'jbkb_l_do_by',
    'jbkb_l_do_by_verif',
    'jbkb_l_do_sts',
])]

class ExpenseAttachment extends Model
{
    //
}
