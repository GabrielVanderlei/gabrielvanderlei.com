<?php

use Illuminate\Database\Seeder;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into produtos
            (slug, titulo, descricao, imagem, imagem_topo, detalhes)
            values (?,?,?,?,?,?)',
            array(
                "web",
                "Sites e serviços Web",
                "O seu negócio merece uma aparência digital adequada. Com os recursos que você necessitar.",
                "/assets/images/site.jpg",
                "/assets/images/site-top.jpg",
                ""));

        DB::insert('insert into produtos
        (slug, titulo, descricao, imagem, imagem_topo, detalhes)
        values (?,?,?,?,?,?)',
        array(
            "apps",
            "Desenvolvimento de aplicativos",
            "Você precisa de um aplicativo de e-commerce? Quer transformar uma ideia em realidade? Ou somente precisa de um cartão de visitas virtual?",
            "/assets/images/app.jpg",
            "/assets/images/app-top.jpg",
            ""));
    }
}
