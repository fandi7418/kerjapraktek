<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("INSERT INTO `admin` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
        (4, 'admin', 'admin@gmail.com', '$2y$10$6L08lLWSex3nsJM5Pc.Ge.LiSoWR8z/YvWeiBbd8ypj9cJXDi40qO', NULL, '2020-02-07 03:21:44', '2020-02-07 03:21:44');
        ");
    }
}
