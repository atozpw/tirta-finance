<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Connection('mariadb-transaction')]

#[Table('tt_jumkb_k', key: 'jumkb_k_rec_id')]

#[Fillable([
    'jumkb_k_jurnal_no',
    'jumkb_k_cabang_kd',
    'jumkb_k_perk_kd',
    'jumkb_k_stdk',
    'jumkb_k_j_debet',
    'jumkb_k_j_kredit',
    'jumkb_k_do_it',
    'jumkb_k_do_at',
    'jumkb_k_do_at_verif',
    'jumkb_k_do_by',
    'jumkb_k_do_by_verif',
    'jumkb_k_do_sts',
])]

class MutationCredit extends Model
{
    //
}
