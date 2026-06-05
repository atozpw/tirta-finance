<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Connection('mariadb-transaction')]

#[Table('tt_jbkb', key: 'jbkb_jurnal_no', keyType: 'string', incrementing: false)]

#[Fillable([
    'jbkb_jurnal_no',
    'jbkb_tgl_ajuan',
    'jbkb_tgl_realisasi',
    'jbkb_do_it',
    'jbkb_do_at',
    'jbkb_do_by',
    'jbkb_do_sts',
])]

class Expense extends Model
{
    public function debits(): HasMany
    {
        return $this->hasMany(ExpenseDebit::class, 'jbkb_jurnal_no');
    }

    public function credits(): HasMany
    {
        return $this->hasMany(ExpenseCredit::class, 'jbkb_jurnal_no');
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(ExpenseAttachment::class, 'jbkb_jurnal_no');
    }
}
