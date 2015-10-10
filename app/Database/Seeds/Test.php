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

        //

        Model::reguard();
    }
}
