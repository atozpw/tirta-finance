<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jpkb_pdrekna', key: 'jpkb_pdrekna_rec_id')]

#[Fillable([
    'jpkb_pdrekna_jurnal_no',
    'jpkb_pdrekna_uraian',
    'jpkb_pdrekna_j_lbr',
    'jpkb_pdrekna_j_uang',
    'jpkb_pdrekna_do_it',
    'jpkb_pdrekna_do_at',
    'jpkb_pdrekna_do_at_verif',
    'jpkb_pdrekna_do_by',
    'jpkb_pdrekna_do_by_verif',
    'jpkb_pdrekna_do_sts',
])]

class IncomeNonWaterBill extends Model
{
    //
}
