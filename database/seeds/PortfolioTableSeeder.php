<?php

use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into portfolio
            (slug, titulo, descricao, imagem, detalhes)
            values (?,?,?,?,?)',
            array(
                "iidv-site",
                "Site do Instituto Internacional Despertando Vocações", 
                "", 
                "https://gabrielvanderlei.com/quem-sou-eu/assets/screenshots/institutoidv.jpeg",
                ""));

        DB::insert('insert into portfolio
        (slug, titulo, descricao, imagem, detalhes)
        values (?,?,?,?,?)',
        array(
            "iidv-pdv",
            "Site do Programa Internacional Despertando Vocações", 
            "", 
            "https://gabrielvanderlei.com/quem-sou-eu/assets/screenshots/pdv.jpeg",
            ""));


        DB::insert('insert into portfolio
        (slug, titulo, descricao, imagem, detalhes)
        values (?,?,?,?,?)',
        array(
            "iidv-cointer",
            "Site do Congresso Internacional Despertando Vocações", 
            "", 
            "https://gabrielvanderlei.com/quem-sou-eu/assets/screenshots/cpdvg.jpeg",
            ""));

        DB::insert('insert into portfolio
        (slug, titulo, descricao, imagem, detalhes)
        values (?,?,?,?,?)',
        array(
            "iidv-aplicativos",
            "Aplicativo Roleta Atômica", 
            "", 
            "https://gabrielvanderlei.com/quem-sou-eu/assets/screenshots/ratomica.jpeg",
            ""));

        DB::insert('insert into portfolio
        (slug, titulo, descricao, imagem, detalhes)
        values (?,?,?,?,?)',
        array(
            "iidv-smart-event",
            "Desenvolvimento do Projeto SMART Event", 
            "", 
            "https://gabrielvanderlei.com/quem-sou-eu/assets/screenshots/spdvl.jpeg",
            ""));

        DB::insert('insert into portfolio
        (slug, titulo, descricao, imagem, detalhes)
        values (?,?,?,?,?)',
        array(
            "iidv-sistemas",
            "Sistema de Associados do Instituto Internacional Despertando Vocações", 
            "", 
            "https://gabrielvanderlei.com/quem-sou-eu/assets/screenshots/associados.jpeg",
            ""));
    }
}
