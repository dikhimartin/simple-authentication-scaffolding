<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [
            [1, 1],
            [2, 1],
            [3, 1],
            [4, 1],
            [5, 1],
            [6, 1],
            [7, 1],
            [8, 1],
            [9, 1],
            [10, 1],
            [11, 1],
            [12, 1],
            [1, 2],
            [5, 2],
            [9, 2]
        ];

        foreach ($records as $record) {
            DB::table('permission_role')->insert([
                'permission_id' => $record[0],
                'role_id' => $record[1],
            ]);
        }
    }
}
