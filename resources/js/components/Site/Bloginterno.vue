<template>
<div>
    <section class="conteudoBlog">
        <div class="centralizar">
            <div class="titulo" data-aos="flip-down">
                <h2>{{titulo_blog}}</h2>
                <p>Data da publicação: {{data}}</p>
            </div>
            <div class="imagemdaPublicacao">
                <img :src="imagem_blog" alt="">
            </div>
            <div class="conteudodaPublicacao">
                <div class="textodaPublicacao">
                    <p v-html="texto_blog">{{texto_blog}} </p>
                </div>
                <div class="sidebar">
                    <div class="cadaSidebar" v-for="u in blog">
                        <div class="bolaSidebar">
                            <img :src="u.imagem_blog" alt="">
                        </div>
                        <h3>{{u.titulo_blog}}</h3>
                        <p v-html="u.texto_blog">{{u.texto_blog}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="box caixainterna">
        <div class="container boxpadding">
            <div class="dozecenter caixa">
                <div class="textocaixa">
                    <h4>Conheça mais nossos Serviços</h4>
                </div>
                <router-link :to="{ name: 'servicos' }"><div class="logocaixa">
                    <a href="#" class="botaoPrincipal">Call to action</a>
                </div></router-link>
            </div>
        </div>

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
                blog: [],                 
                titulo_blog: '',
                data: '',
                texto_blog: '',
                imagem_blog:''                                        
            }
        },
        mounted() {
                var _this = this;
                let rota = this.$route.params.id;
                axios.get('http://m2.local:8080/api/blog/lista/'+ rota).then(function (response) {
                    _this.titulo_blog = response.data.titulo_blog,
                    _this.data = response.data.created_at,
                    _this.texto_blog = response.data.texto_blog,                    
                    _this.imagem_blog = response.data.imagem_blog
                });
                axios.get('http://m2.local:8080/api/blog/lista').then(function (response) {
                    _this.blog = response.data.slice(0, 2)
                });                
                
        },
        methods: {
            visualizar(id){
                window.location = "http://m2.local:8080/blog/" + id;      
            }
        }
}
</script>