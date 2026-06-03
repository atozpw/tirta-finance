<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jumkb_d', key: 'jumkb_d_rec_id')]

#[Fillable([
    'jumkb_d_jurnal_no',
    'jumkb_d_cabang_kd',
    'jumkb_d_perk_kd',
    'jumkb_d_stdk',
    'jumkb_d_j_debet',
    'jumkb_d_j_kredit',
    'jumkb_d_do_it',
    'jumkb_d_do_at',
    'jumkb_d_do_at_verif',
    'jumkb_d_do_by',
    'jumkb_d_do_by_verif',
    'jumkb_d_do_sts',
])]

class MutationDebit extends Model
{
    //
}
