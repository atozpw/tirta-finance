<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Connection('mariadb-transaction')]

#[Table('tt_jpkb', key: 'jpkb_jurnal_no', keyType: 'string', incrementing: false)]

#[Fillable([
    'jpkb_jurnal_no',
    'jpkb_tgl',
    'jpkb_bukti_no',
    'jpkb_cabang_kd',
    'jpkb_kasir_id',
    'jpkb_rekanan_kd',
    'jpkb_uraian',
    'jpkb_do_it',
    'jpkb_do_at',
    'jpkb_do_by',
    'jpkb_do_sts',
])]

class Income extends Model
{
    public function debits(): HasMany
    {
        return $this->hasMany(IncomeDebit::class, 'jpkb_jurnal_no');
    }

    public function credits(): HasMany
    {
        return $this->hasMany(IncomeCredit::class, 'jpkb_jurnal_no');
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(IncomeAttachment::class, 'jpkb_jurnal_no');
    }
}
