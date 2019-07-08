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
        //$this->call('UsersTableSeeder');
        $this->call('PortfolioTableSeeder');
        $this->call('ProdutoTableSeeder');
        $this->call('PostagemTableSeeder');
        $this->call('ContatoTableSeeder');
    }
}
