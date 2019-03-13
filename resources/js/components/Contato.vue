<template>
    <form @submit.prevent="editar">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Informações da Página</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="group">      
                                    <input type="text" required v-model="titulo_contato">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Titulo da Página</label>
                                </div>
                                <div class="group">      
                                    <input type="text" required v-model="cidade">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Cidade</label>
                                </div>
                                <div class="group">      
                                    <input type="text" required v-model="endereco">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Endereço</label>
                                </div>
                                <div class="group">      
                                    <input type="text" required v-model="bairro">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Bairro</label>
                                </div>                                                                  
                            </div>
                            <div class="col-md-6">
                                <div class="group">      
                                    <input type="text" required v-model="cep">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>CEP</label>
                                </div>
                                <div class="group">      
                                    <input type="text" required v-model="email">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>E-mail</label>
                                </div>
                                <div class="group">      
                                    <input type="text" required v-model="funcionamento_semana">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Horário de Funcionamento (dias da semana)</label>
                                </div>
                                <div class="group">      
                                    <input type="text" required v-model="funcionamento_hora">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Horário de Funcionamento (horário)</label>
                                </div>                                                                
                            </div>
                        </div>
                            
                    </div>
                </div>               
            </div>          
           
        <FlashMessage></FlashMessage>
        </div>
        <button type="submit"><a href="#" class="float">
        <i class="fa fa-check my-float"></i>
        </a></button>        
    </form>         
</template>

<script>

    export default {

        props: ['quemsomos'],
        data() {
            return {
                titulo_contato: '',
                endereco: '',
                cidade: '',
                bairro: '',
                cep: '',
                email: '',
                funcionamento_semana: '',
                funcionamento_hora: '',                                                                  
            };
        },
        mounted() {
                
                axios
                .get('http://18.228.42.180/admin/contato/lista')
                .then(response => (
                    this.titulo_contato = response.data[0].titulo_contato,
                    this.endereco = response.data[0].endereco,
                    this.cidade = response.data[0].cidade,
                    this.bairro = response.data[0].bairro,
                    this.cep = response.data[0].cep,
                    this.email = response.data[0].email,
                    this.funcionamento_semana = response.data[0].funcionamento_semana,
                    this.funcionamento_hora = response.data[0].funcionamento_hora                                                    
                    ))
                      
        }, 
        methods: {
            handleFilePondInit: function() {
                console.log('FilePond has initialized');
                const pond = document.querySelector('.filepond--root');
            },
            editar(e) {
                e.preventDefault();
                let currentObj = this;

                axios.post('http://18.228.42.180/admin/contato/atualizar', {
                    titulo_contato: this.titulo_contato,
                    endereco: this.endereco,
                    cidade: this.cidade,
                    bairro: this.bairro,
                    cep: this.cep,
                    email: this.email,
                    funcionamento_semana: this.funcionamento_semana,
                    funcionamento_hora: this.funcionamento_hora,
                })
                .then(function (response) {
                    currentObj.output = response.data;
                    currentObj.flashMessage.show({status: 'success', title: 'Página atualizada com sucesso', message: 'a página contato foi atualizada.'})
                })
                .catch(function (err) {
                    console.error("Error response:");
                    console.error(err.response.data);    // ***
                    console.error(err.response.status);  // ***
                    console.error(err.response.headers);
                });
            }            
        },
            

    }
</script>
