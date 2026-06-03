<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <x-page-header title="Rekening Non Air" description="Kelola data jurnal rekening non air" />

    <div class="flex justify-between items-center mb-4 gap-4">
        <flux:input placeholder="Pencarian" class="max-w-sm" />
        <flux:button variant="primary" icon="plus">
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
                <flux:table.row>
                    <flux:table.cell colspan="5" class="text-center">Tidak ada data yang ditampilkan</flux:table.cell>
                </flux:table.row>
            </flux:table.rows>
        </flux:table>
    </flux:card>
</div>