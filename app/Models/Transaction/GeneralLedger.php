<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Connection('mariadb-transaction')]

#[Table('tt_jul', key: 'jul_jurnal_no', keyType: 'string', incrementing: false)]

#[Fillable([
    'jul_jurnal_no',
    'jul_tgl',
    'jul_cabang_kd',
    'jul_uraian',
    'jul_do_it',
    'jul_do_at',
    'jul_do_by',
    'jul_do_sts',
])]

class GeneralLedger extends Model
{
    public function debits(): HasMany
    {
        return $this->hasMany(GeneralLedgerDebit::class, 'jul_jurnal_no');
    }

    public function credits(): HasMany
    {
        return $this->hasMany(GeneralLedgerCredit::class, 'jul_jurnal_no');
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(GeneralLedgerAttachment::class, 'jul_jurnal_no');
    }
}
