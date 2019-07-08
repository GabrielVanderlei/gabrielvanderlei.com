<?php

use Illuminate\Database\Seeder;

class PostagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into postagens
        (slug, titulo, descricao, imagem, detalhes, tags)
        values (?,?,?,?,?,?)',
        array(
            "a-plataforma-smart-event",
            "O desenvolvimento da plataforma SMART Event.",
            "A plataforma SMART Event representa uma grande conquista pessoal já que foi o primeiro grande sistema que desenvolvi de forma...",
            "/assets/images/app.jpg",
            "",
            "site, sistema"));
    }
}
