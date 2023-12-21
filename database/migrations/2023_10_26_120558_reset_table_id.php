<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function handle()
    {
        DB::statement("ALTER TABLE fruits AUTO_INCREMENT = 1");
        $this->info('Auto-increment reset for fruits.');
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
