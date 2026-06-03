<?php

use App\Models\Transaction\Voucher;
use Livewire\Component;
use Livewire\Attributes\Computed;

new class extends Component {

    #[Computed]
    public function vouchers()
    {
        return Voucher::all();
    }

};
?>

<div>
    <x-page-header title="Voucher (DVHD)" description="Kelola data voucher yang harus dibayar" />

    <div class="flex justify-between items-center mb-4 gap-4">
        <flux:input placeholder="Pencarian" class="max-w-sm" />
        <flux:button variant="primary" icon="plus" :href="route('accountings.vouchers.create')" wire:navigate>
            Tambah Baru
        </flux:button>
    </div>

    <flux:card class="p-0">
        <flux:table>
            <flux:table.columns>
                <flux:table.column width="120px">Nomor</flux:table.column>
                <flux:table.column width="120px">Tanggal</flux:table.column>
                <flux:table.column>Uraian</flux:table.column>
                <flux:table.column width="200px">Jumlah</flux:table.column>
                <flux:table.column width="50px"></flux:table.column>
            </flux:table.columns>
            <flux:table.rows>
                @forelse ($this->vouchers as $voucher)
                    <flux:table.row wire:key="{{ $voucher->dvhd_jurnal_no }}">
                        <flux:table.cell>{{ $voucher->dvhd_jurnal_no }}</flux:table.cell>
                        <flux:table.cell>{{ $voucher->dvhd_tanggal }}</flux:table.cell>
                        <flux:table.cell>{{ $voucher->dvhd_uraian }}</flux:table.cell>
                        <flux:table.cell>Rp 0</flux:table.cell>
                        <flux:table.cell>
                            <flux:dropdown>
                                <flux:button variant="ghost" icon="ellipsis-horizontal" size="sm"></flux:button>
                                <flux:menu>
                                    <flux:menu.item icon="pencil-square">Edit / Ubah</flux:menu.item>
                                    <flux:menu.item icon="printer">Cetak</flux:menu.item>
                                </flux:menu>
                            </flux:dropdown>
                        </flux:table.cell>
                    </flux:table.row>
                @empty
                    <flux:table.row>
                        <flux:table.cell colspan="5" class="text-center">Tidak ada data yang ditampilkan</flux:table.cell>
                    </flux:table.row>
                @endforelse
            </flux:table.rows>
        </flux:table>
    </flux:card>
</div>