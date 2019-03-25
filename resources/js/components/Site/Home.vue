<template>
<div>
        <div class="banner">
            <div class="example-slide">
                <picture>
                  <source srcset="http://www.m2center.com.br/images/banner01.jpg" media="(min-width: 1400px)">
                  <source srcset="http://www.m2center.com.br/images/banner01.jpg" media="(min-width: 1200px)">
                  <source srcset="http://www.m2center.com.br/images/banner01.jpg" media="(min-width: 760px)">
                  <source srcset="http://www.m2center.com.br/images/banner01-mobile.jpg" media="(min-width: 400px)">
                  <img src="http://www.m2center.com.br/images/banner01-mobile.jpg" srcset="http://www.m2center.com.br/images/banner01-mobile.jpg" alt="responsive image" class="abs">
                </picture>                
                
                <div class="container"><div class="dozecenter dentroBanner"><h1><span>Inovação</span> e <span>Inteligência</span> de mercado <br> para alavancar suas vendas</h1></div></div></div>
        </div>

    <section class="historia">
        <div class="container">
            <div class="dozecenter conteudoHistoria">
                <h2 data-aos="zoom-in">Nossa História</h2>
                <p data-aos="zoom-out">{{historia_inicial}}</p>
                <!-- <router-link :to="{ name: 'quemsomos' }"><a href="#" class="calltoaction fundopreto" data-aos="fade-in">Call to Action</a></router-link> -->
            </div>
        </div>
    </section>

    <svg class="separador1"
    xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink"
    width="100%" height="252px" viewBox="0 0 1935 252" preserveAspectRatio="none">
   <path fill-rule="evenodd" width="1935" height="252"
    d="M3.000,105.000 C3.000,105.000 444.000,-27.356 1074.000,6.000 C1074.000,6.000 1731.000,62.644 1935.000,30.000 L1935.000,252.000 L-0.000,252.000 L3.000,105.000 Z"/>
   </svg>     
    <section class="diferencial">
        <div class="container">
            <div class="dozecenter titulo">
                <h2 class="preenchendo" data-aos="fade-in" data-aos-id="super-duper">Diferencial</h2>
                <p>{{texto_diferencial_i}}</p>
            </div>
            <div class="quatro cadaDiferencial" data-aos="fade-right" v-for="u in diferencial">
                <div class="bola">
                    <object type="image/svg+xml" :data="u.icone_dif" class="iconePrimeiro"></object>
                </div>
                <p>{{u.resumo_dif}}</p>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="1603.68" viewBox="0 0 1920 2157.68" xml:space="preserve" preserveAspectRatio="none">
            <path id="forma02" data-name="Forma 1" width="1920" height="1603.68" class="cls-1" d="M-3,2063s537-542.58,840-84c0,0,330,684.42,612,702,0,0,234,87.42,501-66V3896s-318,177.42-807-96c0,0-381-200.58-552-474,0,0-396-482.58-597-486Z" transform="translate(-2 -1794.91)"/>
        </svg> 
    </section>

    <section class="servicos">
        <div class="container">
            <div class="dozecenter titulo">
                <h2 class="preenchendo" data-aos="fade-in" data-aos-id="super-duper">Serviços</h2>
            </div>
            <div class="dozecenter cadaServico" data-aos="fade-left" v-for="s in servico">
                <div class="bolaServico">
                    <router-link :to="{ name: 'servicos'}"><object type="image/svg+xml" :data="s.icone_serv" class="iconePrimeiro"></object></router-link>
                </div>
               
                <div class="descricaoServico">
                     <router-link to="/servicos#contato"><h3>{{s.titulo_serv}}</h3></router-link>
                    <router-link :to="{ name: 'servicos'}"><p>{{s.resumo_serv}}</p></router-link>
                </div>
                
            </div>
            
            <div class="dozecenter botaomargin">
                     <!-- <router-link :to="{ name: 'servicos' }"><a href="#" class="calltoaction" data-aos="fade-in">Call to Action </a></router-link> -->
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container espacamentoblog">
            <div class="dozecenter titulo">
                <h2 class="preenchendo" data-aos="fade-in">Blog</h2>
            </div>
            <div class="cadaBlog" v-for="b in blog" data-aos="flip-right">
                <img :src="b.miniatura_blog" alt="">
                <h3>{{b.titulo_blog}}</h3>
                <a href="#" @click="visualizar(b.id)" class="botaoPrincipal leiamais">Leia Mais</a>
            </div>
            <div class="dozecenter" style="margin-top: 45px;" data-aos="flip-up">
                    <!-- <router-link :to="{ name: 'blog' }"><a href="#" class="calltoaction" data-aos="fade-in">Call to Action</a></router-link> -->
            </div>
        </div>
    </section>

    <section class="box">
        <div class="container boxpadding">
            <div class="dozecenter caixa">
                <div class="textocaixa" data-aos="fade-left">
                    <h2 data-aos="fade-left">Somos todos por um mesmo ideal!</h2>
                    <h3 data-aos="fade-right">#somostodosm2</h3>
                </div>
                <div class="logocaixa" data-aos="fade-right">
                    <img src="http://www.m2center.com.br/images/assets/logo-caixa.png" alt="">
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" class="boxrodape" width="100%" height="441.47" viewBox="0 0 1920 594.12" xml:space="preserve" preserveAspectRatio="none">
            <path id="boxrodape" data-name="Forma 1" class="cls-1" width="1920" height="441.47" d="M-15,4643s294-56.5,948,312c0,0,541.5,243.5,1014-66v345H0Z" transform="translate(-2 -4639.88)"/>
        </svg>
              
    </section>   
</div>
</template>
<script>
import SVGInjector from 'svg-injector';
export default {
        data() {
            return {
                diferencial:[],
                servico:[],
                blog:[],
                texto_diferencial_i: '',
                historia_inicial: '',
                data: [
                '',
                '<div class="example-slide"><img class="abs" src="http://www.m2center.com.br/images/banner02.jpg" alt=""><div class="container"><div class="dozecenter dentroBanner"><h1 class="segundo"><span>Ninguém vende como a M2</span><br><br></h1></div></div></div>',
                ],                                                                                  
            };
        },       
        mounted() {
            
                axios
                .get('http://www.m2center.com.br/api/diferencial/lista')
                .then(response => (
                    this.diferencial = response.data                                                                      
                    ));
                    
                axios
                .get('http://www.m2center.com.br/api/servico/lista')
                .then(response => (
                    
                    this.servico =  response.data.slice(0, 4)                                                                      
                    ));

                axios
                .get('http://www.m2center.com.br/api/blog/lista')
                .then(response => (
                    this.blog = response.data                                                                      
                    ));

                axios
                .get('http://www.m2center.com.br/api/dashboard/lista')
                .then(response => (
                    this.texto_diferencial_i = response.data[0].texto_diferencial_i                                                                      
                    ));
                    
                axios
                .get('http://www.m2center.com.br/api/quemsomos/lista')
                .then(response => (
                    this.historia_inicial = response.data[0].historia_inicial                                                                      
                    ));                    
                                                                                  
        },        
        methods: {
            visualizar(id){
                window.location = "http://www.m2center.com.br/blog/" + id;      
            }
        }
}
</script>