<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::livewire('accountings/general-ledgers', 'pages::accountings.general-ledgers.index')->name('accountings.general-ledgers.index');
    Route::livewire('accountings/general-ledgers/create', 'pages::accountings.general-ledgers.create')->name('accountings.general-ledgers.create');
    Route::livewire('accountings/general-ledgers/{id}/edit', 'pages::accountings.general-ledgers.edit')->name('accountings.general-ledgers.edit');
    Route::livewire('accountings/non-water-bills', 'pages::accountings.non-water-bills.index')->name('accountings.non-water-bills.index');
    Route::livewire('accountings/non-water-bills/create', 'pages::accountings.non-water-bills.create')->name('accountings.non-water-bills.create');
    Route::livewire('accountings/non-water-bills/{id}/edit', 'pages::accountings.non-water-bills.edit')->name('accountings.non-water-bills.edit');
    Route::livewire('accountings/vouchers', 'pages::accountings.vouchers.index')->name('accountings.vouchers.index');
    Route::livewire('accountings/vouchers/create', 'pages::accountings.vouchers.create')->name('accountings.vouchers.create');
    Route::livewire('accountings/vouchers/{id}/edit', 'pages::accountings.vouchers.edit')->name('accountings.vouchers.edit');
    Route::livewire('accountings/water-bills', 'pages::accountings.water-bills.index')->name('accountings.water-bills.index');
    Route::livewire('accountings/water-bills/create', 'pages::accountings.water-bills.create')->name('accountings.water-bills.create');
    Route::livewire('accountings/water-bills/{id}/edit', 'pages::accountings.water-bills.edit')->name('accountings.water-bills.edit');
    Route::livewire('accountings/water-bill-revisions', 'pages::accountings.water-bill-revisions.index')->name('accountings.water-bill-revisions.index');
    Route::livewire('accountings/water-bill-revisions/create', 'pages::accountings.water-bill-revisions.create')->name('accountings.water-bill-revisions.create');
    Route::livewire('accountings/water-bill-revisions/{id}/edit', 'pages::accountings.water-bill-revisions.edit')->name('accountings.water-bill-revisions.edit');
    Route::livewire('cash-banks/incomes', 'pages::cash-banks.incomes.index')->name('cash-banks.incomes.index');
    Route::livewire('cash-banks/incomes/create', 'pages::cash-banks.incomes.create')->name('cash-banks.incomes.create');
    Route::livewire('cash-banks/incomes/{id}/edit', 'pages::cash-banks.incomes.edit')->name('cash-banks.incomes.edit');
    Route::livewire('cash-banks/expenses', 'pages::cash-banks.expenses.index')->name('cash-banks.expenses.index');
    Route::livewire('cash-banks/expenses/create', 'pages::cash-banks.expenses.create')->name('cash-banks.expenses.create');
    Route::livewire('cash-banks/expenses/{id}/edit', 'pages::cash-banks.expenses.edit')->name('cash-banks.expenses.edit');
    Route::livewire('cash-banks/mutations', 'pages::cash-banks.mutations.index')->name('cash-banks.mutations.index');
    Route::livewire('cash-banks/mutations/create', 'pages::cash-banks.mutations.create')->name('cash-banks.mutations.create');
    Route::livewire('cash-banks/mutations/{id}/edit', 'pages::cash-banks.mutations.edit')->name('cash-banks.mutations.edit');
    Route::livewire('cash-banks/reconciliations', 'pages::cash-banks.reconciliations.index')->name('cash-banks.reconciliations.index');
    Route::livewire('cash-banks/reconciliations/create', 'pages::cash-banks.reconciliations.create')->name('cash-banks.reconciliations.create');
    Route::livewire('cash-banks/reconciliations/{id}/edit', 'pages::cash-banks.reconciliations.edit')->name('cash-banks.reconciliations.edit');
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('masters/coas', 'dashboard')->name('masters.coas.index');
    Route::view('masters/branches', 'dashboard')->name('masters.branches.index');
    Route::view('masters/service-areas', 'dashboard')->name('masters.service-areas.index');
    Route::view('masters/partners', 'dashboard')->name('masters.partners.index');
    Route::view('reports/ledgers', 'dashboard')->name('reports.ledgers.index');
    Route::view('reports/balance-sheets', 'dashboard')->name('reports.balance-sheets.index');
    Route::view('reports/profit-losses', 'dashboard')->name('reports.profit-losses.index');
    Route::view('reports/cash-flows', 'dashboard')->name('reports.cash-flows.index');
    Route::view('settings/users', 'dashboard')->name('settings.users.index');
    Route::view('settings/roles', 'dashboard')->name('settings.roles.index');
});

require __DIR__ . '/settings.php';
