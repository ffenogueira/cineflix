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
         $this->call(UserSeed::class);
         $this->call(CategoriaSeed::class);
         $this->call(IdiomaSeed::class);
    }
}
