<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jumkb_l', key: 'jumkb_l_rec_id')]

#[Fillable([
    'jumkb_l_jurnal_no',
    'jumkb_l_doc_kd',
    'jumkb_l_alamat',
    'jumkb_l_bukti_no',
    'jumkb_l_do_it',
    'jumkb_l_do_at',
    'jumkb_l_do_at_verif',
    'jumkb_l_do_by',
    'jumkb_l_do_by_verif',
    'jumkb_l_do_sts',
])]

class MutationAttachment extends Model
{
    //
}
