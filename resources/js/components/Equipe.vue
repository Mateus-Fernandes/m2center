<template>
<div class="equipe">
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Listagem de Membros Cadastrados</h3>
                </div>
                <div class="box-body">
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Imagem</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="u in equipe">
                            <th><img width="200px" :src="u.foto_membro"></th>
                            <td>{{ u.nome_membro }}</td>
                            <td>{{ u.cargo_membro }}</td>
                            <td>{{ u.descricao_membro }}</td>
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
    
    <modal name="hello-world" width="900" height="auto" :resizable="true" :scrollable="true">
        <div class="modal-new-wrapper">
            <div class="modal-new-container">
                <div class="modal-new-header">
                    <span v-if="editarf">Editar</span> <span v-if="adicionarif">Adicionar</span> - {{nome_membro}}
                </div>
                <div class="modal-new-body">
                            <div class="group">      
                                <input type="text" required v-model="nome_membro">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nome:</label>
                            </div>
                            <div class="group">      
                                <input type="text" required v-model="cargo_membro">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Cargo:</label>
                            </div>
                            <div class="group">
                                <textarea-autosize
                                placeholder="Escreva a descrição aqui..."
                                ref="someName"
                                v-model="descricao_membro"
                                :min-height="30"
                                :max-height="350"
                                @blur.native="onBlurTextarea"
                                ></textarea-autosize>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Descrição</label>                                
                            </div>
                            <div class="group mb-0">
                                <p>Selecione a Imagem</p>
                                <file-pond
                                name="foto_membro"
                                ref="pond"
                                instantUpload=false
                                class-name="my-pond"
                                label-idle="Arraste os arquivos aqui..."
                                v-bind:files="foto_membro"/>                                
                            </div>                             
                </div>
                <div class="modal-new-footer">
                    <button class="btn btn-success" @click="atualizar(id)" v-if="editarf">
                        ATUALIZAR
                    </button>
                    <button class="btn btn-success" @click="adicionardb()" v-if="adicionarif">
                        ADICIONAR
                    </button>                    
                </div>
            </div>
        
        </div>
    </modal>      
</div>
</template>

<script>

    export default {
        props: ['equipes'],
        data(){
            return{
                equipe:[],
                nome_membro: '',
                cargo_membro: '',
                descricao_membro: '',
                foto_membro: '',
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
                axios.get('http://m2.local:8080/admin/equipe/lista').then(function (response) {
                    _this.equipe = response.data;
                });
            },
            adicionar(){
                this.nome_membro = '';
                this.cargo_membro = '',
                this.descricao_membro = '',
                this.foto_membro = '',  
                this.$modal.show('hello-world');
                this.editarf = false; 
                this.adicionarif = true;  
            },
            adicionardb(){
                var foto_membro_word = document.getElementsByName('foto_membro')[0].value;
                let foto_membro_wordres;
                if(foto_membro_word != '')
                    foto_membro_wordres = 'http://m2.local:8080/'+foto_membro_word.replace("public", "storage");
                else
                    foto_membro_wordres = this.foto_membro;
                
                axios
                .post('http://m2.local:8080/admin/equipe/adicionar',{
                    nome_membro: this.nome_membro,
                    cargo_membro: this.cargo_membro,
                    descricao_membro: this.descricao_membro,
                    user_id: 1,
                    foto_membro: foto_membro_wordres
                })
                .then(response => (
                    this.getVueItems(),
                    this.$modal.hide('hello-world'),
                    console.log(response)
                ))
                .catch(function (error) {
                    debugger;
                    console.log(error);
                })                                                
            },                        
            editar(id){
                this.$modal.show('hello-world');
                this.editarf = true;
                this.adicionarif = false;                  
                axios
                .get('http://m2.local:8080/admin/equipe/editar/'+id)
                .then(response => (
                    this.nome_membro = response.data.nome_membro,
                    this.cargo_membro = response.data.cargo_membro ,
                    this.descricao_membro = response.data.descricao_membro,
                    this.foto_membro = response.data.foto_membro,  
                    this.id = response.data.id                                                    
                    ))                               
            },
            atualizar(id){
                var foto_membro_word = document.getElementsByName('foto_membro')[0].value;
                let foto_membro_wordres;
                if(foto_membro_word != '')
                    foto_membro_wordres = 'http://m2.local:8080/'+foto_membro_word.replace("public", "storage");
                else
                    foto_membro_wordres = this.foto_membro;

                axios
                .post('http://m2.local:8080/admin/equipe/atualizar/'+id,{
                    nome_membro: this.nome_membro,
                    cargo_membro: this.cargo_membro,
                    descricao_membro: this.descricao_membro,
                    foto_membro: foto_membro_wordres
                })
                .then(response => (
                    this.getVueItems(),
                    this.$modal.hide('hello-world')
                ))
                .catch(function (error) {
                    debugger;
                    console.log(error);
                })                                                
            },
            excluir(id){
                var del=confirm("Tem certeza que quer remover este registro?");
                if (del==true){
                    axios
                    .post('http://m2.local:8080/admin/equipe/excluir/'+id,{
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

            fechar(event){
                this.$modal.hide('hello-world');  
            }           
        }

    }
</script>

