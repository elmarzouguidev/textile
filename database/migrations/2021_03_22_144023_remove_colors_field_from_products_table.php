<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColorsFieldFromProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            if (Schema::hasColumn('products', 'colors'))
            {
                Schema::table('products', function (Blueprint $table)
                {
                    $table->dropColumn('colors');
                });
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('products', 'colors'))
        {
            Schema::table('products', function (Blueprint $table)
            {
                $table->dropColumn('colors');
            });
        }
    }
}
