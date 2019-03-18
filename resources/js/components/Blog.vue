<template>
<div class="equipe">
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Editar Informações da Página Blog</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form @submit.prevent="editarpags">
                            <div class="group">      
                                <input type="text" required v-model="titulo_pag_blog">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Titulo da Página</label>
                            </div>
                            <div class="group no-bottom">      
                                <textarea-autosize
                                placeholder="Type something here..."
                                ref="someName"
                                v-model="descricao_pag_blog"
                                :min-height="30"
                                :max-height="350"
                                ></textarea-autosize>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Descrição da Página</label>
                            </div>
                            <button type="submit" class="btn editarpag">Atualizar página</button>
                            <FlashMessage></FlashMessage>
                            </form>                           
                        </div>
                    </div>
                </div>
                
            </div>            
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Listagem de Posts Cadastrados</h3>
                </div>
                <div class="box-body">
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Miniatura</th>
                            <th scope="col">Título</th>
                            <th scope="col">Data de Publicação</th>
                            <th scope="col">Última Atualização</th>                            
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="u in blogs">
                            <th><img width="200px" :src="u.miniatura_blog"></th>
                            <td>{{ u.titulo_blog }}</td>
                            <td>{{ u.created_at }}</td>
                            <td>{{ u.updated_at }}</td>
                            <td>
                                <button class="btn btn-outline-primary"><a href="#" @click="editar(u.id)">Editar</a></button>
                                <button class="btn btn-outline-danger"><a href="#" @click="excluir(u.id)">Excluir</a></button>
                            </td>
                        </tr>
                    </tbody>
                    </table>                         
                </div>
            <button class="btn btn-success adicionarbtn" @click="adicionar()"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
        
</div>
</template>

<script>

    export default {
        data(){
            return{
                blogs:[],
                titulo_blog: '',
                miniatura_blog: '',
                imagem_blog: '',
                texto_blog: '',
                titulo_pag_blog:'',
                descricao_pag_blog:'',
                now: '',
                editarf: false,
                adicionarif: false,
            }
        },
        



        mounted: function mounted() {
            this.getVueItems();

            axios
            .get('http://www.m2center.com.br/admin/dashboard/lista')
            .then(response => (
                this.titulo_pag_blog = response.data[0].titulo_pag_blog,
                this.descricao_pag_blog = response.data[0].descricao_pag_blog                                                
                ))

        },     


        
        methods:{
            getVueItems: function getVueItems() {
                var _this = this;
                axios.get('http://www.m2center.com.br/admin/blog/lista').then(function (response) {
                    _this.blogs = response.data;
                });                

            },
            handleFilePondInit: function handleFilePondInit(){
                console.log('')
            },

            editarpags(e) {
                e.preventDefault();
                let currentObj = this;
                axios.post('http://www.m2center.com.br/admin/dashboard/atualizar', {
                    titulo_pag_blog: this.titulo_pag_blog,
                    descricao_pag_blog: this.descricao_pag_blog
                })
                .then(function (response) {
                    currentObj.output = response.data;
                    currentObj.flashMessage.show({status: 'success', title: 'Página atualizada com sucesso', message: 'a página Blog foi atualizada.'})
                })
                .catch(function (err) {
                    console.error("Error response:");
                    console.error(err.response);
                    console.error(err.response);
                    console.error(err.response);
                });
            },            

            adicionar(){
                window.location.href = "http://www.m2center.com.br/admin/blog/adicionar"               
            },                        
            editar(id){
                window.location.href = 'http://www.m2center.com.br/admin/blog/editar/'+id                                
            },
            excluir(id){
                var del=confirm("Tem certeza que quer remover este registro?");
                if (del==true){
                    axios
                    .post('http://www.m2center.com.br/admin/blog/excluir/'+id,{
                    })
                    .then(response => (
                        this.getVueItems()                    
                    ))
                    .catch(function (error) {
                        debugger;
                        console.log(error);
                    })                  
                }else{

                }                                              
            },                                 
        }

    }
</script>

