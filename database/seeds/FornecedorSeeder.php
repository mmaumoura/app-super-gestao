<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome= 'Fornecedor 100';
        $fornecedor->site= 'www.fornecedor100.com.br';
        $fornecedor->uf= 'MG';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();
    }
}
