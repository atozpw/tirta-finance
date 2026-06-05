<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Connection('mariadb-transaction')]

#[Table('tt_jrna', key: 'jrna_jurnal_no', keyType: 'string', incrementing: false)]

#[Fillable([
    'jrna_jurnal_no',
    'jrna_mulai_tagih_tgl',
    'jrna_piutang_tgl',
    'jrna_jenisna_kd',
    'jrna_cabang_kd',
    'jrna_uraian',
    'jrna_do_it',
    'jrna_do_at',
    'jrna_do_by',
    'jrna_do_sts',
])]

class NonWaterBill extends Model
{
    public function debits(): HasMany
    {
        return $this->hasMany(NonWaterBillDebit::class, 'jrna_jurnal_no');
    }

    public function credits(): HasMany
    {
        return $this->hasMany(NonWaterBillCredit::class, 'jrna_jurnal_no');
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(NonWaterBillAttachment::class, 'jrna_jurnal_no');
    }
}
