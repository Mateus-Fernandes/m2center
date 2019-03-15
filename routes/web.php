<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$this->group(['middleware' => ['auth'], 'namespace'=>'Admin', 'prefix' => 'admin'], function(){
    $this->get('/', 'AdminController@index')->name('admin.home');
    $this->get('quemsomos', 'QuemsomosController@index')->name('admin.quemsomos');
    $this->get('quemsomos/lista', 'QuemsomosController@lista')->name('quemsomos.lista');
    $this->post('quemsomos/atualizar', 'QuemsomosController@atualizar')->name('quemsomos.atualizar');
    $this->post('quemsomos/upload', 'QuemsomosController@upload')->name('quemsomos.upload');

    $this->get('equipe', 'EquipeController@index')->name('admin.equipe');
    $this->get('equipe/lista', 'EquipeController@lista')->name('equipe.lista');
    $this->get('equipe/editar/{id}', 'EquipeController@editar')->name('equipe.editar');
    $this->post('equipe/atualizar/{id}', 'EquipeController@atualizar')->name('equipe.editar');
    $this->post('equipe/excluir/{id}', 'EquipeController@excluir')->name('equipe.excluir');
    $this->post('equipe/adicionar', 'EquipeController@adicionar')->name('equipe.adicionar');

    $this->get('servico', 'ServicoController@index')->name('admin.servico');
    $this->get('servico/lista', 'ServicoController@lista')->name('servico.lista');
    $this->get('servico/editar/{id}', 'ServicoController@editar')->name('servico.editar');
    $this->post('servico/atualizar/{id}', 'ServicoController@atualizar')->name('servico.editar');
    $this->post('servico/excluir/{id}', 'ServicoController@excluir')->name('servico.excluir');
    $this->post('servico/adicionar', 'ServicoController@adicionar')->name('servico.adicionar');

    $this->get('blog', 'BlogController@index')->name('admin.blog');
    $this->get('blog/lista', 'BlogController@lista')->name('blog.lista');
    $this->get('blog/lista/{id}', 'BlogController@listapost')->name('blog.listapost');
    $this->get('blog/editar/{id}', 'BlogController@editar')->name('blog.editar');
    $this->post('blog/editarbanco/{id}', 'BlogController@editarbanco')->name('blog.editarbanco');    
    $this->post('blog/atualizar/{id}', 'BlogController@atualizar')->name('blog.editar');
    $this->post('blog/excluir/{id}', 'BlogController@excluir')->name('blog.excluir');
    $this->get('blog/adicionar', 'BlogController@adicionar')->name('blog.adicionar');
    $this->post('blog/adicionarbanco', 'BlogController@adicionarbanco')->name('blog.adicionarbanco');
    
    $this->get('diferencial', 'DiferencialController@index')->name('admin.diferencial');
    $this->get('diferencial/lista', 'DiferencialController@lista')->name('diferencial.lista');
    $this->get('diferencial/editar/{id}', 'DiferencialController@editar')->name('diferencial.editar');
    $this->post('diferencial/atualizar/{id}', 'DiferencialController@atualizar')->name('diferencial.editar');
    $this->post('diferencial/excluir/{id}', 'DiferencialController@excluir')->name('diferencial.excluir');
    $this->post('diferencial/adicionar', 'DiferencialController@adicionar')->name('diferencial.adicionar');
    $this->post('diferencial/upload', 'DiferencialController@upload')->name('diferencial.upload');    
    
    $this->get('contato', 'ContatoController@index')->name('admin.contato');
    $this->get('contato/lista', 'ContatoController@lista')->name('contato.lista');
    $this->post('contato/atualizar', 'ContatoController@atualizar')->name('contato.atualizar');
    
    $this->get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    $this->get('dashboard/lista', 'DashboardController@lista')->name('dashboard.lista');
    $this->post('dashboard/atualizar', 'DashboardController@atualizar')->name('dashboard.atualizar');    
    
});


$this->group(['namespace'=>'Admin', 'prefix' => 'api'], function(){
    $this->get('quemsomos/lista', 'QuemsomosController@lista')->name('quemsomos.lista');
    $this->get('equipe/lista', 'EquipeController@lista')->name('equipe.lista');
    $this->get('servico/lista', 'ServicoController@lista')->name('servico.lista');
    $this->get('blog/lista', 'BlogController@lista')->name('blog.lista');
    $this->get('blog/lista/{id}', 'BlogController@listapost')->name('blog.listapost');
    $this->get('diferencial/lista', 'DiferencialController@lista')->name('diferencial.lista');;
    $this->get('contato/lista', 'ContatoController@lista')->name('contato.lista');
    $this->get('dashboard/lista', 'DashboardController@lista')->name('dashboard.lista');  
});



$this->get('/', 'Site\SiteController@index');
$this->get('/quemsomos', 'Site\SiteController@index');
$this->get('/blog', 'Site\SiteController@index');
$this->get('/servicos', 'Site\SiteController@index');
$this->get('/contato', 'Site\SiteController@index');
$this->post('/envia', 'Site\SiteController@envia');
$this->get('/blog/{id}', 'Site\SiteController@index');

Auth::routes();


