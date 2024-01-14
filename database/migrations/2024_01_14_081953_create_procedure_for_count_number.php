<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $procedure = "DROP PROCEDURE IF EXISTS `get_frequently_number`;
        CREATE PROCEDURE `get_frequently_number` ()
        BEGIN
        SELECT
            SUBSTRING_INDEX(SUBSTRING_INDEX(v.nopol, ' ', 2), ' ', -1) as frequently_number,
            COUNT(1) AS cnt
        FROM
            koltiva_techinical_test.vehicles v
        GROUP BY frequently_number
        ORDER BY cnt DESC
        LIMIT 1;
        END;";

        \DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
