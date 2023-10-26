<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('test_data')->insert([
            ['id' => 1, '0' =>'1'],
            ['id' => 2, '0' => '2'],
            ['id' => 3, '0' =>'3'],
            ['id' => 4, '0' => '4'],
            ['id' => 5, '0' => '5'],
            ['id' => 6, '0' => '6'],
            ['id' => 7, '0' => '7'],
            ['id' => 8, '0' => '8'],
            ['id' => 9, '0' => '9'],
            ['id' => 10, '0' =>'10']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove the inserted data if you want to rollback the migration
        DB::table('test_data')->whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10])->delete();
    }
};
