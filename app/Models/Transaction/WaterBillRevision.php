<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Connection('mariadb-transaction')]

#[Table('tt_jrra', key: 'jrra_jurnal_no', keyType: 'string', incrementing: false)]

#[Fillable([
    'jrra_jurnal_no',
    'jrra_tanggal_dari',
    'jrra_tanggal_sampai',
    'jrra_uraian',
    'jrra_revisi_kel',
    'jrra_do_it',
    'jrra_do_at',
    'jrra_do_by',
    'jrra_do_sts',
])]

class WaterBillRevision extends Model
{
    public function debits(): HasMany
    {
        return $this->hasMany(WaterBillRevisionDebit::class, 'jrra_jurnal_no');
    }

    public function credits(): HasMany
    {
        return $this->hasMany(WaterBillRevisionCredit::class, 'jrra_jurnal_no');
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(WaterBillRevisionAttachment::class, 'jrra_jurnal_no');
    }
}
