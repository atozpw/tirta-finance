<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <flux:sidebar sticky collapsible="mobile"
        class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.header>
            <x-app-logo :sidebar="true" href="{{ route('dashboard') }}" wire:navigate />
            <flux:sidebar.collapse class="lg:hidden" />
        </flux:sidebar.header>

        <flux:sidebar.nav>
            <flux:sidebar.group :heading="__('Platform')" class="grid">
                <flux:sidebar.item icon="chart-bar" :href="route('dashboard')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Dashboard') }}
                </flux:sidebar.item>
                <flux:sidebar.group icon="banknotes" expandable heading="Akuntansi" class="grid"
                    :expanded="request()->routeIs('accountings.*') ? true : false">
                    <flux:sidebar.item :href="route('accountings.vouchers.index')"
                        :current="request()->routeIs('accountings.vouchers.*')" wire:navigate>
                        Voucher (DVHD)
                    </flux:sidebar.item>
                    <flux:sidebar.item :href="route('accountings.water-bills.index')"
                        :current="request()->routeIs('accountings.water-bills.*')" wire:navigate>
                        Rekening Air
                    </flux:sidebar.item>
                    <flux:sidebar.item :href="route('accountings.water-bill-revisions.index')"
                        :current="request()->routeIs('accountings.water-bill-revisions.*')" wire:navigate>
                        Revisi Rekening Air
                    </flux:sidebar.item>
                    <flux:sidebar.item :href="route('accountings.non-water-bills.index')"
                        :current="request()->routeIs('accountings.non-water-bills.*')" wire:navigate>
                        Rekening Non Air
                    </flux:sidebar.item>
                    <flux:sidebar.item :href="route('accountings.general-ledgers.index')"
                        :current="request()->routeIs('accountings.general-ledgers.*')" wire:navigate>
                        Jurnal Umum Lainnya
                    </flux:sidebar.item>
                </flux:sidebar.group>
                <flux:sidebar.group icon="currency-dollar" expandable heading="Kas & Bank" class="grid"
                    :expanded="request()->routeIs('cash-banks.*') ? true : false">
                    <flux:sidebar.item :href="route('cash-banks.incomes.index')"
                        :current="request()->routeIs('cash-banks.incomes.*')" wire:navigate>
                        Penerimaan
                    </flux:sidebar.item>
                    <flux:sidebar.item :href="route('cash-banks.expenses.index')"
                        :current="request()->routeIs('cash-banks.expenses.*')" wire:navigate>
                        Pengeluaran
                    </flux:sidebar.item>
                    <flux:sidebar.item :href="route('cash-banks.mutations.index')"
                        :current="request()->routeIs('cash-banks.mutations.*')" wire:navigate>
                        Mutasi
                    </flux:sidebar.item>
                    <flux:sidebar.item :href="route('cash-banks.reconciliations.index')"
                        :current="request()->routeIs('cash-banks.reconciliations.*')" wire:navigate>
                        Rekonsiliasi
                    </flux:sidebar.item>
                </flux:sidebar.group>
                <flux:sidebar.group icon="inbox-stack" expandable heading="Master Data" class="grid"
                    :expanded="request()->routeIs('masters.*') ? true : false">
                    <flux:sidebar.item :href="route('masters.coas.index')"
                        :current="request()->routeIs('masters.coas.*')" wire:navigate>
                        Kode Perkiraan (COA)
                    </flux:sidebar.item>
                    <flux:sidebar.item :href="route('masters.branches.index')"
                        :current="request()->routeIs('masters.branches.*')" wire:navigate>
                        Cabang
                    </flux:sidebar.item>
                    <flux:sidebar.item :href="route('masters.service-areas.index')"
                        :current="request()->routeIs('masters.service-areas.*')" wire:navigate>
                        Kota Pelayanan
                    </flux:sidebar.item>
                    <flux:sidebar.item :href="route('masters.partners.index')"
                        :current="request()->routeIs('masters.partners.*')" wire:navigate>
                        Rekanan
                    </flux:sidebar.item>
                </flux:sidebar.group>
                <flux:sidebar.group icon="document-duplicate" expandable heading="Laporan" class="grid"
                    :expanded="request()->routeIs('reports.*') ? true : false">
                    <flux:sidebar.item :href="route('reports.ledgers.index')"
                        :current="request()->routeIs('reports.ledgers.*')" wire:navigate>
                        Buku Besar
                    </flux:sidebar.item>
                    <flux:sidebar.item :href="route('reports.balance-sheets.index')"
                        :current="request()->routeIs('reports.balance-sheets.*')" wire:navigate>
                        Neraca
                    </flux:sidebar.item>
                    <flux:sidebar.item :href="route('reports.profit-losses.index')"
                        :current="request()->routeIs('reports.profit-losses.*')" wire:navigate>
                        Laba Rugi
                    </flux:sidebar.item>
                    <flux:sidebar.item :href="route('reports.cash-flows.index')"
                        :current="request()->routeIs('reports.cash-flows.*')" wire:navigate>
                        Arus Kas
                    </flux:sidebar.item>
                </flux:sidebar.group>
                <flux:sidebar.group icon="cog-8-tooth" expandable heading="Pengaturan" class="grid"
                    :expanded="request()->routeIs('settings.*') ? true : false">
                    <flux:sidebar.item :href="route('settings.users.index')"
                        :current="request()->routeIs('settings.users.*')" wire:navigate>
                        Pengguna
                    </flux:sidebar.item>
                    <flux:sidebar.item :href="route('settings.roles.index')"
                        :current="request()->routeIs('settings.roles.*')" wire:navigate>
                        Grup Pengguna
                    </flux:sidebar.item>
                </flux:sidebar.group>
            </flux:sidebar.group>
        </flux:sidebar.nav>

        <flux:spacer />

        <flux:sidebar.nav>
            <flux:sidebar.item icon="folder-git-2" href="https://github.com/laravel/livewire-starter-kit"
                target="_blank">
                {{ __('Repository') }}
            </flux:sidebar.item>

            <flux:sidebar.item icon="book-open-text" href="https://laravel.com/docs/starter-kits#livewire"
                target="_blank">
                {{ __('Documentation') }}
            </flux:sidebar.item>
        </flux:sidebar.nav>

        <x-desktop-user-menu class="hidden lg:block" :name="auth()->user()->name" />
    </flux:sidebar>

    <!-- Mobile User Menu -->
    <flux:header class="lg:hidden">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:spacer />

        <flux:dropdown position="top" align="end">
            <flux:profile :initials="auth()->user()->initials()" icon-trailing="chevron-down" />

            <flux:menu>
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <flux:avatar :name="auth()->user()->name" :initials="auth()->user()->initials()" />

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <flux:heading class="truncate">{{ auth()->user()->name }}</flux:heading>
                                <flux:text class="truncate">{{ auth()->user()->email }}</flux:text>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>
                        {{ __('Settings') }}
                    </flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle"
                        class="w-full cursor-pointer" data-test="logout-button">
                        {{ __('Log out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:header>

    {{ $slot }}

    @persist('toast')
    <flux:toast.group>
        <flux:toast />
    </flux:toast.group>
    @endpersist

    @fluxScripts
</body>

</html>