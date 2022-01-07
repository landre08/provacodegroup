<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Client;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $mensagem = null;
        // If verifica se chegou aqui atraves de uma listagem sem utilizar o campo pesquisar, else é quando vem pelo pesquisar.
        if ( is_null($request->input('pesquisar'))) {
            $clients = Client::paginate(2);
            // Mensagem para exibir no alert da página para o cliente
            if (count($clients) == 0) { 
                $mensagem = "Não há clientes cadastrado no momento na base de dados";
            }            
        } else {
            $clients = Client::where('cpf','LIKE','%'.$request->input('pesquisar').'%')->paginate(2);
            // Mensagem para exibir no alert da página para o cliente
            $mensagem = "Não há clientes cadastrado os os dados enviado na pesquisa";
        }
        
        
        return view('index', compact('clients', 'mensagem'));
    }

    public function cadastrar(Request $request)
    {

        return view('cadastrar');
    }

    public function salvar(Request $request)
    {
        // Cria array de regras
        $regras = [
            'nome' => 'required',
            'sobrenome' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'rua' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cep' => 'required'
        ];

        // Cria as mensagem das regras
        $mensagens = [
            'nome.required' => 'O :attribute é obrigatório.',
            'sobrenome.required' => 'O :attribute é obrigatório.',
            'cpf.required' => 'O :attribute é obrigatório.',
            'email.required' => 'O :attribute é obrigatório.',
            'telefone.required' => 'O :attribute é obrigatório.',
            'rua.required' => 'A :attribute é obrigatório.',
            'numero.required' => 'O :attribute é obrigatório.',
            'bairro.required' => 'O :attribute é obrigatório.',
            'cep.required' => 'O :attribute é obrigatório.'
        ];

        // Faz a validação acontecer. Caso os campos do formulário tenha algum não preenchido, volta para tela e exibe a mensagem para o usuário.
        $request->validate($regras, $mensagens);

        // Prepara os dados para serem cadastrado no Banco de Dados.
        $dados = [
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cep' => $request->cep
        ];

        // Realiza o cadastro no Banco de Dados
        $client = Client::insert($dados);

        // Redireciona o usuário para a tela de listagem de cliente com base no nome da rota.
        return redirect()->route('index');
    }

    public function editar($id)
    {
        if ($id) {
            $client = Client::find($id);
        }
        
        return view('editar', compact('client'));
    }

    public function atualizar(Request $request) 
    {
        // Cria array de regras
        $regras = [
            'nome' => 'required',
            'sobrenome' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'rua' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cep' => 'required'
        ];

        // Cria as mensagem das regras
        $mensagens = [
            'nome.required' => 'O :attribute é obrigatório.',
            'sobrenome.required' => 'O :attribute é obrigatório.',
            'cpf.required' => 'O :attribute é obrigatório.',
            'email.required' => 'O :attribute é obrigatório.',
            'telefone.required' => 'O :attribute é obrigatório.',
            'rua.required' => 'A :attribute é obrigatório.',
            'numero.required' => 'O :attribute é obrigatório.',
            'bairro.required' => 'O :attribute é obrigatório.',
            'cep.required' => 'O :attribute é obrigatório.'
        ];

        // Faz a validação acontecer. Caso os campos do formulário tenha algum não preenchido, volta para tela e exibe a mensagem para o usuário.
        $request->validate($regras, $mensagens);

        // Prepara os dados para serem atualizados no Banco de Dados.
        $dados = [
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cep' => $request->cep
        ];


        // Realiza a atualização no Banco de Dados
        $client = Client::where('id', $request->id)->update($dados);

        // Redireciona o usuário para a tela de listagem de cliente com base no nome da rota.
        return redirect()->route('index');
    }

    public function excluir($id)
    {
        // Realizar a exclusão na base de dados
        Client::where('id', $id)->delete();

        // Retorna para o ajax ok para que pode ser feito o reload para a página de listagem de clientes.
        $sucesso = 'ok';
        return $sucesso;
    }
}
