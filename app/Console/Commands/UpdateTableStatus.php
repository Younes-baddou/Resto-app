<?php

namespace App\Console\Commands;

use App\Models\Table;

use Illuminate\Console\Command;


class UpdateTableStatus extends Command
{
    protected $signature = 'tables:updatestatus';
protected $description = 'Update table status if unavaliable for more than 2 hours';

public function handle()
{
    $twoHoursAgo = now()->subHours(2);

    // Sélectionnez toutes les tables avec le statut "unavailable" et modifiées il y a plus de 2 heures
    $tables = Table::where('status', 'unavaliable')
                   ->where('status_changed_at', '<', $twoHoursAgo)
                   ->get();

    foreach ($tables as $table) {
        $table->status = 'avaliable';
        $table->status_changed_at = now();
        $table->save();
    }

    $this->info(count($tables) . ' table(s) updated.');
}

}
