<?php

use Illuminate\Database\Seeder;

class ContatoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into contatos
        (nome, email, celular, motivo, mensagem)
        values (?,?,?,?,?)',
        array(
            "Gabriel Vanderlei",
            "gabrielvanderlei10@hotmail.com.",
            "5581996629296",
            "Dúvida",
            "Como eu posso entrar em contato?"));
    }
}
