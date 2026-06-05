<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Connection('mariadb-transaction')]

#[Table('tt_dvhd', key: 'dvhd_jurnal_no', keyType: 'string', incrementing: false)]

#[Fillable([
    'dvhd_jurnal_no',
    'dvhd_tanggal',
    'dvhd_agenda_no',
    'dvhd_cabang_kd',
    'dvhd_beban_bayar_kd',
    'dvhd_jabatan_kd',
    'dvhd_nipp_jabatan',
    'dvhd_rekanan_kd',
    'dvhd_uraian',
    'dvhd_cara_bayar_kd',
    'dvhd_kontrak_kd',
    'dvhd_do_it',
    'dvhd_do_at',
    'dvhd_do_by',
    'dvhd_do_sts',
    'dvhd_sts_jbkb',
])]

class Voucher extends Model
{
    public function debits(): HasMany
    {
        return $this->hasMany(VoucherDebit::class, 'dvhd_jurnal_no');
    }

    public function credits(): HasMany
    {
        return $this->hasMany(VoucherCredit::class, 'dvhd_jurnal_no');
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(VoucherAttachment::class, 'dvhd_jurnal_no');
    }
}
