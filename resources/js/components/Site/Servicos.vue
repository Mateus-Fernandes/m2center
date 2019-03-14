<template>
<div>
    <section class="headerinterna" style="background-image:url(http://18.228.42.180/images/assets/nossos-servicos.jpg);">
        <div class="container">
            <div class="dozecenter tituloInterna" data-aos="flip-down">
                <h2>{{titulo_pag_servicos}}</h2>
                <p>{{descricao_pag_servicos}}</p>
            </div>
        </div>
    </section>

    <section class="listagemServicos">
        <div class="centralizar">
            <div class="cadaServicos" v-for="u in servico" data-aos="flip-up">
                <div class="imagemServicos">
                    <img :src="u.imagem_serv" alt="">
                    <h2>{{u.titulo_serv}}</h2>
                </div>
                <div class="textoServicos">
                    <p>{{u.descricao_serv}}</p>
                    <svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1187 464" xml:space="preserve" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="meugradiente" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" stop-color="#ff4614"></stop> <stop offset="100%" stop-color="#ff8214"></stop></linearGradient>
                    </defs>
                    <path fill-rule="evenodd" class="servicospath" width="100%"  stroke="url(#meugradiente)" stroke-width="3px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
                    d="M11.500,1.500 L1174.500,1.500 C1180.023,1.500 1184.500,5.977 1184.500,11.500 L1184.500,451.500 C1184.500,457.023 1180.023,461.500 1174.500,461.500 L11.500,461.500 C5.977,461.500 1.500,457.023 1.500,451.500 L1.500,11.500 C1.500,5.977 5.977,1.500 11.500,1.500 Z"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>



    <section class="box caixainterna">
        <!-- <div class="container boxpadding">
            <div class="dozecenter caixa">
                <div class="textocaixa">
                    <h4>Conheça mais nossa história</h4>
                </div>
                <div class="logocaixa">
                    <router-link :to="{ name: 'quemsomos' }"><a href="#" class="calltoaction">Call to action</a></router-link>
                </div>
            </div>
        </div> -->

        <svg xmlns="http://www.w3.org/2000/svg" class="boxrodape" width="100%" height="441.47" viewBox="0 0 1920 594.12" xml:space="preserve" preserveAspectRatio="none">
            <path id="boxrodape" data-name="Forma 1" class="cls-1" width="1920" height="441.47" d="M-15,4643s294-56.5,948,312c0,0,541.5,243.5,1014-66v345H0Z" transform="translate(-2 -4639.88)"/>
        </svg>
              
    </section>
</div>
</template>
<script>
export default {
        data() {
            return {
                servico:[],                                                                
            };
        },
        mounted() {
                var _this = this;
                axios.get('http://18.228.42.180/api/servico/lista').then(function (response) {
                    _this.servico = response.data;
                });
                axios
                .get('http://18.228.42.180/api/dashboard/lista')
                .then(response => (
                    this.titulo_pag_servicos = response.data[0].titulo_pag_servicos,
                     this.descricao_pag_servicos = response.data[0].descricao_pag_servicos                                                                     
                    ));                                           
        }
}
</script>