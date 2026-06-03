<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jpkb_pdreklain', key: 'jpkb_pdreklain_rec_id')]

#[Fillable([
    'jpkb_pdreklain_jurnal_no',
    'jpkb_pdreklain_uraian',
    'jpkb_pdreklain_j_lbr',
    'jpkb_pdreklain_j_uang',
    'jpkb_pdreklain_do_it',
    'jpkb_pdreklain_do_at',
    'jpkb_pdreklain_do_at_verif',
    'jpkb_pdreklain_do_by',
    'jpkb_pdreklain_do_by_verif',
    'jpkb_pdreklain_do_sts',
])]

class IncomeOther extends Model
{
    //
}
