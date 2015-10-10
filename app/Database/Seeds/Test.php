<?php

namespace App\Database\Seeds;

use Illuminate\Database\Eloquent\Model;
use Jumilla\Versionia\Laravel\Support\Seeder;
use Carbon\Carbon;

class Test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('todos') -> truncate();

        DB::table('todos') -> insert([
            'title' => 'CDを返す',
            'status' => 1,
        ]);

        DB::table('todos') -> insert([
            'title' => '勉強会の準備をする',
            'status' => 2,
        ]);

        Model::reguard();
    }
}
