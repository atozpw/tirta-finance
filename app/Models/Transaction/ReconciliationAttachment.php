<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jumrb_l', key: 'jumrb_l_rec_id')]

#[Fillable([
    'jumrb_l_jurnal_no',
    'jumrb_l_doc_kd',
    'jumrb_l_alamat',
    'jumrb_l_bukti_no',
    'jumrb_l_do_it',
    'jumrb_l_do_at',
    'jumrb_l_do_at_verif',
    'jumrb_l_do_by',
    'jumrb_l_do_by_verif',
    'jumrb_l_do_sts',
])]

class ReconciliationAttachment extends Model
{
    //
}
