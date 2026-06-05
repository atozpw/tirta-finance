<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Connection('mariadb-transaction')]

#[Table('tt_jumkb', key: 'jumkb_jurnal_no', keyType: 'string', incrementing: false)]

#[Fillable([
    'jumkb_jurnal_no',
    'jumkb_tgl_ajuan',
    'jumkb_tgl_realisasi',
    'jumkb_cabang_kd',
    'jumkb_uraian',
    'jumkb_do_it',
    'jumkb_do_at',
    'jumkb_do_by',
    'jumkb_do_sts',
])]

class Mutation extends Model
{
    public function debits(): HasMany
    {
        return $this->hasMany(MutationDebit::class, 'jumkb_jurnal_no');
    }

    public function credits(): HasMany
    {
        return $this->hasMany(MutationCredit::class, 'jumkb_jurnal_no');
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(MutationAttachment::class, 'jumkb_jurnal_no');
    }
}
