<template>
<div>
    <section class="headerinterna" style="background-image:url(http://www.m2center.com.br/images/assets/blog.jpg);">
        <div class="container">
            <div class="dozecenter tituloInterna" data-aos="flip-down">
                <h2>{{titulo_pag_blog}}</h2>
                <p>{{descricao_pag_blog}}</p>
            </div>
        </div>
    </section>

    <section class="blogListagem">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="1603.68" viewBox="0 0 1920 2157.68" xml:space="preserve" preserveAspectRatio="none">
                <path id="forma02" data-name="Forma 1" width="1920" height="1603.68" class="cls-1" d="M-3,2063s537-542.58,840-84c0,0,330,684.42,612,702,0,0,234,87.42,501-66V3896s-318,177.42-807-96c0,0-381-200.58-552-474,0,0-396-482.58-597-486Z" transform="translate(-2 -1794.91)"/>
            </svg>      <!-- SVG do fundo branco-->
        <div class="centralizar">
            <div class="dozecenter titulo">
                <h2>M2</h2>
            </div>
            <div class="cadaPost" v-for="u in blog" data-aos="fade-left">
                <div class="bolaBlog">
                    <img :src="u.miniatura_blog" alt="">
                </div>
                <div class="textoBlog">
                    <h3>{{u.titulo_blog}}</h3>
                    <p v-html="u.texto_blog">{{ u.texto_blog }}</p>
                    <a @click="visualizar(u.id)" class="botaoPrincipal leiamore" style="cursor:pointer;">Leia Mais</a>
                </div>
            </div>
        </div>
    </section>



    <section class="box caixainterna">
        <!-- <div class="container boxpadding">
            <div class="dozecenter caixa">
                <div class="textocaixa">
                    <h4>Conheça mais nossos Serviços</h4>
                </div>
                <router-link :to="{ name: 'servicos' }"><div class="logocaixa">
                    <a href="#" class="calltoaction">Call to action</a>
                </div></router-link>
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
                blog:[],
                descricao_pag_blog: '',
                titulo_pag_blog: ''                                                             
            };
        },
        mounted() {
                var _this = this;
                axios.get('http://www.m2center.com.br/api/blog/lista').then(function (response) {
                    _this.blog = response.data;
                });

                axios
                .get('http://www.m2center.com.br/api/dashboard/lista')
                .then(response => (
                    this.titulo_pag_blog = response.data[0].titulo_pag_blog,
                     this.descricao_pag_blog = response.data[0].descricao_pag_blog                                                                     
                    ));                                         
        },
        methods: {
            visualizar(id){
                window.location = "http://www.m2center.com.br/blog/" + id;      
            }
        }
}
</script>