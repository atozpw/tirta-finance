<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jul_l', key: 'jul_l_rec_id')]

#[Fillable([
    'jul_l_jurnal_no',
    'jul_l_doc_kd',
    'jul_l_alamat',
    'jul_l_bukti_no',
    'jul_l_do_it',
    'jul_l_do_at',
    'jul_l_do_at_verif',
    'jul_l_do_by',
    'jul_l_do_by_verif',
    'jul_l_do_sts',
])]

class GeneralLedgerAttachment extends Model
{
    //
}
