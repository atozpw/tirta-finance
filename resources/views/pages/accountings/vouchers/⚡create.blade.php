<?php

use App\Models\Master\DoItCoa;
use Livewire\Component;
use Livewire\Attributes\Computed;

new class extends Component {

    #[Computed]
    public function debitCoas()
    {
        return DoItCoa::query()
            ->where('oto_trans_for_do_it', '8001')
            ->where('oto_trans_do_sts', '1')
            ->get();
    }

    #[Computed]
    public function creditCoas()
    {
        return DoItCoa::query()
            ->where('oto_trans_for_do_it', '8002')
            ->where('oto_trans_do_sts', '1')
            ->get();
    }

    public array $debits = [
        ['coa' => '', 'amount' => ''],
    ];

    public array $credits = [
        ['coa' => '', 'amount' => ''],
    ];

    public function addDebit(): void
    {
        $this->debits[] = ['coa' => '', 'amount' => ''];
    }

    public function removeDebit(int $index): void
    {
        if (count($this->debits) > 1) {
            unset($this->debits[$index]);
        }
    }

    public function addCredit(): void
    {
        $this->credits[] = ['coa' => '', 'amount' => ''];
    }

    public function removeCredit(int $index): void
    {
        if (count($this->credits) > 1) {
            unset($this->credits[$index]);
            $this->credits = array_values($this->credits);
        }
    }

    #[Computed]
    public function totalDebit(): float
    {
        return collect($this->debits)->sum(fn($item) => (float) str_replace(['.', ','], ['', '.'], $item['amount']));
    }

    #[Computed]
    public function totalCredit(): float
    {
        return collect($this->credits)->sum(fn($item) => (float) str_replace(['.', ','], ['', '.'], $item['amount']));
    }

    public function save(): void
    {
        // TODO: implement save logic
    }
};
?>

<div>
    <x-page-header title="Voucher (DVHD)" description="Kelola data voucher yang harus dibayar" />

    <flux:heading size="lg" class="mb-3 bg-zinc-100 py-3 px-4 rounded-lg dark:bg-white/10">
        Form Tambah Voucher Baru
    </flux:heading>

    <flux:card class="mb-6 pb-2">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-4">
            <div class="space-y-4">
                <flux:input label="Nomor" />
                <flux:input type="date" label="Tanggal" />
                <flux:input label="No. Agenda" />
                <flux:textarea label="Uraian" rows="9" />
            </div>

            <div class="space-y-4">
                <flux:select label="Cabang" variant="listbox" placeholder="Pilih Cabang">
                    <flux:select.option>Cabang 1</flux:select.option>
                    <flux:select.option>Cabang 2</flux:select.option>
                    <flux:select.option>Cabang 3</flux:select.option>
                </flux:select>
                <flux:select label="Beban Bayar" variant="listbox" placeholder="Pilih Beban Bayar">
                    <flux:select.option>Beban 1</flux:select.option>
                    <flux:select.option>Beban 2</flux:select.option>
                    <flux:select.option>Beban 3</flux:select.option>
                </flux:select>
                <flux:select label="Cara Bayar" variant="listbox" placeholder="Pilih Cara Bayar">
                    <flux:select.option>Tunai</flux:select.option>
                    <flux:select.option>BCA</flux:select.option>
                    <flux:select.option>BRI</flux:select.option>
                </flux:select>
                <flux:tab.group>
                    <flux:tabs variant="segmented" class="w-full mt-6">
                        <flux:tab name="intern">Intern</flux:tab>
                        <flux:tab name="extern">Extern</flux:tab>
                    </flux:tabs>
                    <flux:tab.panel name="intern" class="pt-4">
                        <flux:select label="Jabatan" variant="listbox" placeholder="Pilih Jabatan">
                            <flux:select.option>Jabatan 1</flux:select.option>
                            <flux:select.option>Jabatan 2</flux:select.option>
                        </flux:select>
                    </flux:tab.panel>
                    <flux:tab.panel name="extern" class="pt-4 space-y-4">
                        <flux:select label="Rekanan" variant="listbox" placeholder="Pilih Rekanan">
                            <flux:select.option>Rekanan 1</flux:select.option>
                            <flux:select.option>Rekanan 2</flux:select.option>
                        </flux:select>
                        <flux:select label="Kontrak" variant="listbox" placeholder="Pilih Kontrak">
                            <flux:select.option>Kontrak 1</flux:select.option>
                            <flux:select.option>Kontrak 2</flux:select.option>
                        </flux:select>
                    </flux:tab.panel>
                </flux:tab.group>
            </div>
        </div>
    </flux:card>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div>
            <flux:heading size="lg" class="mb-3 bg-zinc-100 py-3 px-4 rounded-lg dark:bg-white/10">
                Debet
            </flux:heading>

            <flux:card class="p-0">
                <flux:table>
                    <flux:table.columns>
                        <flux:table.column class="w-8/12">
                            Kode Perkiraan
                        </flux:table.column>
                        <flux:table.column class="w-3/12">
                            Jumlah
                        </flux:table.column>
                        <flux:table.column class="w-1/12"></flux:table.column>
                    </flux:table.columns>
                    <flux:table.rows>
                        @foreach ($this->debits as $index => $debet)
                            <flux:table.row wire:key="debit.{{ $index }}">
                                <flux:table.cell>
                                    <flux:select variant="listbox" searchable placeholder="Pilih Kode Perkiraan">
                                        @foreach ($this->debitCoas as $debitCoa)
                                            <flux:select.option value="{{ $debitCoa->oto_trans_perk4_kd }}"
                                                wire:key="debit.{{ $index }}.{{ $debitCoa->oto_trans_perk4_kd }}">
                                                {{ $debitCoa->coaLevel4->perk4_kd . ' - ' . $debitCoa->coaLevel4->perk4_nama }}
                                            </flux:select.option>
                                        @endforeach
                                    </flux:select>
                                </flux:table.cell>
                                <flux:table.cell>
                                    <flux:input type="number" placeholder="0" input:class="text-end" />
                                </flux:table.cell>
                                <flux:table.cell>
                                    <flux:button variant="ghost" icon="trash" size="sm" class="text-red-500!"
                                        wire:click="removeDebit({{ $index }})">
                                    </flux:button>
                                </flux:table.cell>
                            </flux:table.row>
                        @endforeach
                        <flux:table.row>
                            <flux:table.cell>
                                <flux:button icon="plus" wire:click="addDebit">Tambah Baris</flux:button>
                            </flux:table.cell>
                            <flux:table.cell>
                                <flux:input type="number" placeholder="0" input:class="text-end" readonly />
                            </flux:table.cell>
                            <flux:table.cell></flux:table.cell>
                        </flux:table.row>
                    </flux:table.rows>
                </flux:table>
            </flux:card>
        </div>

        <div>
            <flux:heading size="lg" class="mb-3 bg-zinc-100 py-3 px-4 rounded-lg dark:bg-white/10">
                Kredit
            </flux:heading>

            <flux:card class="p-0">
                <flux:table>
                    <flux:table.columns>
                        <flux:table.column class="w-8/12">
                            Kode Perkiraan
                        </flux:table.column>
                        <flux:table.column class="w-3/12">
                            Jumlah
                        </flux:table.column>
                        <flux:table.column class="w-1/12"></flux:table.column>
                    </flux:table.columns>
                    <flux:table.rows>
                        <flux:table.row>
                            <flux:table.cell>
                                <flux:select variant="listbox" searchable placeholder="Pilih Kode Perkiraan">
                                    @foreach ($this->creditCoas as $creditCoa)
                                        <flux:select.option value="{{ $creditCoa->oto_trans_perk4_kd }}"
                                            wire:key="{{ $creditCoa->oto_trans_perk4_kd }}">
                                            {{ $creditCoa->coaLevel4->perk4_kd . ' - ' . $creditCoa->coaLevel4->perk4_nama }}
                                        </flux:select.option>
                                    @endforeach
                                </flux:select>
                            </flux:table.cell>
                            <flux:table.cell>
                                <flux:input type="number" placeholder="0" input:class="text-end" />
                            </flux:table.cell>
                            <flux:table.cell>
                                <flux:button variant="ghost" icon="trash" size="sm" class="text-red-500!"></flux:button>
                            </flux:table.cell>
                        </flux:table.row>
                        <flux:table.row>
                            <flux:table.cell>
                                <flux:button icon="plus">Tambah Baris</flux:button>
                            </flux:table.cell>
                            <flux:table.cell>
                                <flux:input type="number" placeholder="0" input:class="text-end" readonly />
                            </flux:table.cell>
                            <flux:table.cell></flux:table.cell>
                        </flux:table.row>
                    </flux:table.rows>
                </flux:table>
            </flux:card>
        </div>
    </div>

    <flux:separator variant="subtle" class="my-6" />

    <div class="flex justify-end gap-4">
        <flux:button icon="x-mark" :href="route('accountings.vouchers.index')" wire:navigate>Batal</flux:button>
        <flux:button variant="primary" icon="check">Simpan Voucher</flux:button>
    </div>
</div>