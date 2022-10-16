<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
        ]);

        $this->call([
            UserSeeder::class,
        ]);

        $this->call([
            AgeCategorySeeder::class,
        ]);

        $this->call([
            NeedCategorySeeder::class,
        ]);

        $this->call([
            NeedSubCategorySeeder::class,
        ]);
        
        $this->call([
            RecipeSeeder::class,
        ]);
        
        $this->call([
            UserNeedSeeder::class,
        ]);

    }
}