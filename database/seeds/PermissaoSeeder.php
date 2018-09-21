<?php 

use Illuminate\Database\Seeder;
use App\Permissao;

class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios1 = Permissao::firstOrCreate([
        	'nome' => 'usuario-view',
        	'descricao' => 'Acesso a lista de Usuários'
        ]);

        $usuarios2 = Permissao::firstOrCreate([
        	'nome' => 'usuario-create',
        	'descricao' => 'Adicionar Usuários'
        ]);

        $usuarios2 = Permissao::firstOrCreate([
        	'nome' => 'usuario-edit',
        	'descricao' => 'Editar Usuários'
        ]);

        $usuarios3 = Permissao::firstOrCreate([
        	'nome' => 'usuario-delete',
        	'descricao' => 'Deletar Usuários'
        ]);

        $papeis1 = Permissao::firstOrCreate([
        	'nome' => 'papel-view',
        	'descricao' => 'Listar Papéis'
        ]);

        $papeis2 = Permissao::firstOrCreate([
        	'nome' => 'papel-create',
        	'descricao' => 'Adicionar Papéis'
        ]);

        $papeis3 = Permissao::firstOrCreate([
        	'nome' => 'papel-edit',
        	'descricao' => 'Editar Papéis'
        ]);

        $papeis4 = Permissao::firstOrCreate([
        	'nome' => 'papel-delete',
        	'descricao' => 'Deletar Papéis'
        ]);

        $infratores1 = Permissao::firstOrCreate([
            'nome' => 'infrator-view',
            'descricao' => 'Acesso a lista de Infratores'
        ]);

        $infratores2 = Permissao::firstOrCreate([
            'nome' => 'infrator-create',
            'descricao' => 'Adicionar Infratores'
        ]);

        $infratores3 = Permissao::firstOrCreate([
            'nome' => 'infrator-edit',
            'descricao' => 'Editar Infratores'
        ]);

        $infratores4 = Permissao::firstOrCreate([
            'nome' => 'infrator-delete',
            'descricao' => 'Deletar Infratores'
        ]);

        $processos1 = Permissao::firstOrCreate([
            'nome' => 'processo-view',
            'descricao' => 'Acesso a lista de Processos'
        ]);

        $processos2 = Permissao::firstOrCreate([
            'nome' => 'processo-create',
            'descricao' => 'Adicionar Processos'
        ]);

        $processos3 = Permissao::firstOrCreate([
            'nome' => 'processo-edit',
            'descricao' => 'Editar Processos'
        ]);

        $processos4 = Permissao::firstOrCreate([
            'nome' => 'processo-delete',
            'descricao' => 'Deletar Processos'
        ]);

        echo "Registros de Permissoes criados no sistema";

    }
}
