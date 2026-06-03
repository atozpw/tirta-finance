<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jbkb_d', key: 'jbkb_d_rec_id')]

#[Fillable([
    'jbkb_d_jurnal_no',
    'jbkb_d_dvhd_jurnal_no',
    'jbkb_d_cabang_kd',
    'jbkb_d_cara_bayar_kd',
    'jbkb_d_rek_bank_no',
    'jbkb_d_perk_kd',
    'jbkb_d_stdk',
    'jbkb_d_j_debet',
    'jbkb_d_j_kredit',
    'jbkb_d_do_it',
    'jbkb_d_do_at',
    'jbkb_d_do_at_verif',
    'jbkb_d_do_by',
    'jbkb_d_do_by_verif',
    'jbkb_d_do_sts',
])]

class ExpenseDebit extends Model
{
    //
}
