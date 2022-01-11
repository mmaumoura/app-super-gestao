<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    public function run()
    {
        factory(SiteContato::class,100)->create();
    }
}
