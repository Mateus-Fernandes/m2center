<template>
<div class="equipe">
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Solicitações de Contato enviadas pelo formulário</h3>
                </div>
                <div class="box-body">
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Mensagem</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="u in lead">
                            <th>{{ u.nome_lead }}</th>
                            <td>{{ u.email_lead }}</td>
                            <td>{{ u.telefone_lead }}</td>
                            <td>{{ u.mensagem_lead }}</td>
                            <td>
                                <button class="btn btn-outline-danger"><a href="#" @click="excluir(u.id)">Excluir</a></button>
                            </td>
                        </tr>
                    </tbody>
                    </table>                         
                </div>
            </div>
        </div>
    </div>
     
</div>
</template>

<script>

    export default {
        data(){
            return{
                lead:[],
            }
        },
        



        mounted: function mounted() {
            this.getVueItems();        
        },

        
        methods:{
            getVueItems: function getVueItems() {
                var _this = this;
                axios.get('http://www.m2center.com.br/lead/lista').then(function (response) {
                    _this.lead = response.data;
                });
            },           
            excluir(id){
                var del=confirm("Tem certeza que quer remover este registro?");
                if (del==true){
                    axios
                    .post('http://www.m2center.com.br/lead/excluir/'+id,{
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

