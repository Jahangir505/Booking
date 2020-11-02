<?php

use Illuminate\Database\Migrations\Migration;

class CharifyCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return  void
	 */
	public function up()
	{
            Schema::table(\Config::get('countries.table_name'), function($table)
            {
                if(Schema::getConnection()->getDriverName() != 'sqlite') {
                    DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " MODIFY country_code CHAR(3) NOT NULL DEFAULT ''");
                    DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " MODIFY iso_3166_2 CHAR(2) NOT NULL DEFAULT ''");
                    DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " MODIFY iso_3166_3 CHAR(3) NOT NULL DEFAULT ''");
                    DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " MODIFY region_code CHAR(3) NOT NULL DEFAULT ''");
                    DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " MODIFY sub_region_code CHAR(3) NOT NULL DEFAULT ''");
                }
                
            });
        }
	/**
	 * Reverse the migrations.
	 *
	 * @return  void
	 */
	public function down()
	{
            Schema::table(\Config::get('countries.table_name'), function($table)
            {
                if(Schema::getConnection()->getDriverName() != 'sqlite') {
                    DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " MODIFY country_code CHAR(3) NOT NULL DEFAULT ''");
                    DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " MODIFY iso_3166_2 CHAR(2) NOT NULL DEFAULT ''");
                    DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " MODIFY iso_3166_3 CHAR(3) NOT NULL DEFAULT ''");
                    DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " MODIFY region_code CHAR(3) NOT NULL DEFAULT ''");
                    DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " MODIFY sub_region_code CHAR(3) NOT NULL DEFAULT ''");
                }
            });
	}

}
