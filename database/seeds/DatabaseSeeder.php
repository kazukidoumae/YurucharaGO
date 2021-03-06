<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            RegionsTableSeeder::class,
            PrefecturesTableSeeder::class,
            AttributesTableSeeder::class,
            CardsTableSeeder::class,
            PRsTableSeeder::class,
            //EventsTableSeeder::class,
            UsersTableSeeder::class,
           ObtaincardTableSeeder::class,
        ]);
    }
}
