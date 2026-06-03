<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_dvhd_l', key: 'dvhd_l_rec_id')]

#[Fillable([
    'dvhd_l_jurnal_no',
    'dvhd_l_doc_kd',
    'dvhd_l_alamat',
    'dvhd_l_bukti_no',
    'dvhd_l_do_it',
    'dvhd_l_do_at',
    'dvhd_l_do_at_verif',
    'dvhd_l_do_by',
    'dvhd_l_do_by_verif',
    'dvhd_l_do_sts',
])]

class VoucherAttachment extends Model
{
    //
}
