<template>
<div class="equipe">
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Listagem de Serviços Cadastrados</h3>
                </div>
                <div class="box-body">
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Imagem</th>
                            <th scope="col">Título</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="u in servico">
                            <th><img width="200px" :src="u.imagem_serv"></th>
                            <td>{{ u.titulo_serv }}</td>
                            <td>{{ u.descricao_serv }}</td>
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
                    <span v-if="editarf">Editar</span> <span v-if="adicionarif">Adicionar</span> - {{titulo_serv}}
                </div>
                <div class="modal-new-body">
                            <div class="group">      
                                <input type="text" required v-model="titulo_serv">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Título do Serviço:</label>
                            </div>
                            <div class="group">      
                                <input type="text" required v-model="resumo_serv">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Resumo do Serviço:</label>
                            </div>
                            <div class="group">
                                <textarea-autosize
                                placeholder="Escreva a descrição aqui..."
                                ref="someName"
                                v-model="descricao_serv"
                                :min-height="30"
                                :max-height="350"
                                @blur.native="onBlurTextarea"
                                ></textarea-autosize>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Descrição</label>                                
                            </div>
                            <div class="group mb-0">
                                <p>Selecione a Imagem do Serviço</p>
                                <file-pond
                                name="imagem_serv"
                                ref="pond"
                                instantUpload=false
                                class-name="my-pond"
                                label-idle="Arraste os arquivos aqui..."
                                v-bind:files="imagem_serv"/>                                
                            </div>
                            <div class="group mb-0">
                                <p>Selecione o Ícone do Serviço</p>
                                <file-pond
                                name="icone_serv"
                                ref="pond"
                                instantUpload=false
                                class-name="my-pond"
                                label-idle="Arraste os arquivos aqui..."
                                v-bind:files="icone_serv"/>                                
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
        props: ['servico'],
        data(){
            return{
                servico:[],
                titulo_serv: '',
                descricao_serv: '',
                imagem_serv: '',
                icone_serv: '',
                resumo_serv: '',
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
                axios.get('http://m2.local:8080/admin/servico/lista').then(function (response) {
                    _this.servico = response.data;
                });
            },
            adicionar(){
                this.titulo_serv = '';
                this.descricao_serv = '',
                this.imagem_serv = '',
                this.icone_serv = '',
                this.resumo_serv = '',                  
                this.$modal.show('hello-world');
                this.editarf = false; 
                this.adicionarif = true;  
            },
            adicionardb(){
                var imagem_serv_word = document.getElementsByName('imagem_serv')[0].value;
                let imagem_serv_wordres;
                if(imagem_serv_word != '')
                    imagem_serv_wordres = 'http://m2.local:8080/'+imagem_serv_word.replace("public", "storage");
                else
                    imagem_serv_wordres = this.imagem_serv;

                var icone_serv_word = document.getElementsByName('icone_serv')[0].value;
                let icone_serv_wordres;
                if(icone_serv_word != '')
                    icone_serv_wordres = 'http://m2.local:8080/'+icone_serv_word.replace("public", "storage");
                else
                    icone_serv_wordres = this.icone_serv;                             
                axios
                .post('http://m2.local:8080/admin/servico/adicionar',{
                    titulo_serv: this.titulo_serv,
                    descricao_serv: this.descricao_serv,
                    resumo_serv: this.resumo_serv,
                    user_id: 1,
                    imagem_serv: imagem_serv_wordres,
                    icone_serv: icone_serv_wordres,
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
                .get('http://m2.local:8080/admin/servico/editar/'+id)
                .then(response => (
                    this.titulo_serv = response.data.titulo_serv,
                    this.descricao_serv = response.data.descricao_serv ,
                    this.resumo_serv = response.data.resumo_serv,
                    this.imagem_serv = response.data.imagem_serv,
                    this.icone_serv = response.data.icone_serv,   
                    this.id = response.data.id                                                    
                    ))                               
            },
            atualizar(id){
                var imagem_serv_word = document.getElementsByName('imagem_serv')[0].value;
                let imagem_serv_wordres;
                if(imagem_serv_word != '')
                    imagem_serv_wordres = 'http://m2.local:8080/'+imagem_serv_word.replace("public", "storage");
                else
                    imagem_serv_wordres = this.imagem_serv;

                var icone_serv_word = document.getElementsByName('icone_serv')[0].value;
                let icone_serv_wordres;
                if(icone_serv_word != '')
                    icone_serv_wordres = 'http://m2.local:8080/'+icone_serv_word.replace("public", "storage");
                else
                    icone_serv_wordres = this.icone_serv;                    

                axios
                .post('http://m2.local:8080/admin/servico/atualizar/'+id,{
                    titulo_serv: this.titulo_serv,
                    descricao_serv: this.descricao_serv,
                    resumo_serv: this.resumo_serv,
                    imagem_serv: imagem_serv_wordres,
                    icone_serv: icone_serv_wordres,
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
                    .post('http://m2.local:8080/admin/servico/excluir/'+id,{
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

