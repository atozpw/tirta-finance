<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jpkb_l', key: 'jpkb_l_rec_id')]

#[Fillable([
    'jpkb_l_jurnal_no',
    'jpkb_l_doc_kd',
    'jpkb_l_alamat',
    'jpkb_l_bukti_no',
    'jpkb_l_do_it',
    'jpkb_l_do_at',
    'jpkb_l_do_at_verif',
    'jpkb_l_do_by',
    'jpkb_l_do_by_verif',
    'jpkb_l_do_sts',
])]

class IncomeAttachment extends Model
{
    //
}
