<template>
<div class="equipe">
    <div class="row">
        <div class="col-lg-12">
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
                now: '',
                editarf: false,
                adicionarif: false,
            }
        },
        


        
        mounted: function mounted() {
            this.getVueItems();
        },     
        methods:{
            getVueItems: function getVueItems() {
                var _this = this;
                axios.get('http://18.228.42.180/admin/blog/lista').then(function (response) {
                    _this.blogs = response.data;
                });
            },
            handleFilePondInit: function handleFilePondInit(){
                console.log('')
            },

            adicionar(){
                window.location.href = "http://18.228.42.180/admin/blog/adicionar"               
            },                        
            editar(id){
                window.location.href = 'http://18.228.42.180/admin/blog/editar/'+id                                
            },
            excluir(id){
                var del=confirm("Tem certeza que quer remover este registro?");
                if (del==true){
                    axios
                    .post('http://18.228.42.180/admin/blog/excluir/'+id,{
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

