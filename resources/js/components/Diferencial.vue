<template>
<div class="equipe">
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Editar Informações de Texto do item</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form @submit.prevent="editarpags">
                            <div class="group no-bottom">      
                                <textarea-autosize
                                placeholder="Type something here..."
                                ref="someName"
                                v-model="texto_diferencial_i"
                                :min-height="30"
                                :max-height="350"
                                ></textarea-autosize>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Resumo Diferencial ( Página Inicial )</label>
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
                    <h3 class="box-title">Listagem de Diferenciais Cadastrados</h3>
                </div>
                <div class="box-body">
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Ícone</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="u in diferencial">
                            <th><object type="image/svg+xml" :data="u.icone_dif" class="iconePrimeiro"></object></th>
                            <td>{{ u.resumo_dif }}</td>
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
                    <span v-if="editarf">Editar</span> <span v-if="adicionarif">Adicionar</span>
                </div>
                <div class="modal-new-body">
                            <div class="group">
                                <textarea-autosize
                                placeholder="Escreva a descrição aqui..."
                                ref="someName"
                                v-model="resumo_dif"
                                :min-height="30"
                                :max-height="350"
                                @blur.native="onBlurTextarea"
                                ></textarea-autosize>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Descrição do Diferencial</label>                                
                            </div>
                            <div class="group mb-0">
                                <p>Selecione o Ícone do Diferencial</p>
                                <file-pond
                                name="icone_dif"
                                ref="pond"
                                instantUpload=false
                                class-name="my-pond"
                                accepted-file-types="image/svg+xml"
                                label-idle="Arraste os arquivos aqui..."
                                v-bind:files="icone_dif"/>                                
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
        props: ['diferencials'],
        data(){
            return{
                diferencial:[],
                icone_dif: '',
                resumo_dif: '',
                texto_diferencial_i: '',
                editarf: false,
                adicionarif: false,
            }
        },
        



        mounted: function mounted() {
            this.getVueItems();
            axios
            .get('http://www.m2center.com.br/admin/dashboard/lista')
            .then(response => (
                this.texto_diferencial_i = response.data[0].texto_diferencial_i                                            
                ))            
        },

        
        methods:{
            getVueItems: function getVueItems() {
                var _this = this;
                axios.get('http://www.m2center.com.br/admin/diferencial/lista').then(function (response) {
                    _this.diferencial = response.data;
                });
            },
            editarpags(e) {
                e.preventDefault();
                let currentObj = this;
                axios.post('http://www.m2center.com.br/admin/dashboard/atualizar', {
                    texto_diferencial_i: this.texto_diferencial_i
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
                this.icone_dif = '',
                this.resumo_dif = '',                  
                this.$modal.show('hello-world');
                this.editarf = false; 
                this.adicionarif = true;  
            },
            adicionardb(){
                var icone_dif_word = document.getElementsByName('icone_dif')[0].value;
                let icone_dif_wordres;
                if(icone_dif_word != '')
                    icone_dif_wordres = 'http://www.m2center.com.br/'+icone_dif_word.replace("public", "storage");
                else
                    icone_dif_wordres = this.icone_dif;
                       
                axios
                .post('http://www.m2center.com.br/admin/diferencial/adicionar',{
                    resumo_dif: this.resumo_dif,
                    user_id: 1,
                    icone_dif: icone_dif_wordres,
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
                .get('http://www.m2center.com.br/admin/diferencial/editar/'+id)
                .then(response => (
                    this.resumo_dif = response.data.resumo_dif,
                    this.icone_dif = response.data.icone_dif,   
                    this.id = response.data.id                                                    
                    ))                               
            },
            atualizar(id){
                var icone_dif_word = document.getElementsByName('icone_dif')[0].value;
                let icone_dif_wordres;
                if(icone_dif_word != '')
                    icone_dif_wordres = 'http://www.m2center.com.br/'+icone_dif_word.replace("public", "storage");
                else
                    icone_dif_wordres = this.icone_dif;                  

                axios
                .post('http://www.m2center.com.br/admin/diferencial/atualizar/'+id,{
                    resumo_dif: this.resumo_dif,
                    icone_dif: icone_dif_wordres,
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
                    .post('http://www.m2center.com.br/admin/diferencial/excluir/'+id,{
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

