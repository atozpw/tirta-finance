<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Attributes\Connection;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Connection('mariadb-master')]

#[Table('tm_oto_trans', key: 'oto_trans_kd', keyType: 'string', incrementing: false)]

class DoItCoa extends Model
{
    public function coaLevel4(): BelongsTo
    {
        return $this->belongsTo(CoaLevel4::class, 'oto_trans_perk4_kd');
    }
}
