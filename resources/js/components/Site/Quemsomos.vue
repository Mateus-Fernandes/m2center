<template>
<div>
    <modal name="hello-world" width="900" height="auto" :resizable="true" :scrollable="true">
            <video :src="video" controls>
            Seu navegador não suporta o elemento <code>video</code>.
            </video>
    </modal>  
    <section class="headerinterna" style="background-image:url(http://18.228.42.180/images/assets/quem-somos.jpg);">
        <div class="container">
            <div class="dozecenter tituloInterna" data-aos="flip-down">
                <h2>{{titulo_qs}}</h2>
                <p>{{subtitulo_qs}}</p>
            </div>
        </div>
    </section>

    <section class="video">
        <div class="container">
            <div class="dozecenter imagemVideo" data-aos="flip-up">
                <img src="http://18.228.42.180/images/assets/video.jpg" alt="" >
                <div class="play" @click="abremodal()"><a href="#"><i class="far fa-play-circle"></i></a></div>
            </div>
        </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="1603.68" viewBox="0 0 1920 2157.68" xml:space="preserve" preserveAspectRatio="none">
                <path id="forma02" data-name="Forma 1" width="1920" height="1603.68" class="cls-1" d="M-3,2063s537-542.58,840-84c0,0,330,684.42,612,702,0,0,234,87.42,501-66V3896s-318,177.42-807-96c0,0-381-200.58-552-474,0,0-396-482.58-597-486Z" transform="translate(-2 -1794.91)"/>
            </svg>      <!-- SVG do fundo branco-->
    </section>

    <section class="quem">
        <div class="centralizar" v-html="historia" data-aos="fade-up">
            {{historia}}
        </div>
    </section>

    <section class="missao">
        <div class="container">
            <div class="dozecenter titulo" data-aos="flip-up">
                <h2>m2</h2>
            </div>
            <div class="dozecenter cadaMissao" data-aos="fade-left">
                <div class="bolaMissao">
                    <object type="image/svg+xml" :data="i_missao" class="iconePrimeiro"></object>
                </div>
                <div class="textoMissao">
                    <h3>Missão</h3>
                    <p>{{missao}}</p>
                </div>
            </div>
            <div class="dozecenter cadaMissao" data-aos="fade-right">
                <div class="bolaMissao">
                    <object type="image/svg+xml" :data="i_valores" class="iconePrimeiro"></object>
                </div>
                <div class="textoMissao">
                    <h3>Valores</h3>
                    <p>{{valores}}</p>
                </div>
            </div>
            <div class="dozecenter cadaMissao" data-aos="fade-left">
                <div class="bolaMissao">
                    <object type="image/svg+xml" :data="i_objetivo" class="iconePrimeiro"></object>
                </div>
                <div class="textoMissao">
                    <h3>Objetivo</h3>
                    <p>{{objetivo}}</p>
                </div>
            </div>
            <div class="dozecenter cadaMissao" data-aos="fade-right">
                <div class="bolaMissao">
                    <object type="image/svg+xml" :data="i_meta" class="iconePrimeiro"></object>
                </div>
                <div class="textoMissao">
                    <h3>Meta</h3>
                    <p>{{meta}}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="equipe">
            <svg 
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            width="100%" height="1772px">
           <path fill-rule="evenodd"  fill="#FFF"
            d="M0.000,0.000 C0.000,0.000 359.000,39.627 620.000,112.000 C620.000,112.000 948.000,175.554 1219.000,92.000 C1219.000,92.000 1552.250,-20.421 1960.000,24.000 L1960.000,1772.000 C1960.000,1772.000 1491.000,1687.751 1012.000,1088.000 C1012.000,1088.000 628.250,551.807 0.000,588.000 L0.000,0.000 Z"/>
           </svg>
        <div class="centralizar equipeCol">
            <div class="membro" v-for="u in equipe" data-aos="zoom-in">
                <div class="imagemMembro">
                    <img :src="u.foto_membro" alt="">
                </div>
                <div class="textoMembro">
                        <svg 
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 806 478">
                        <defs>
                                <linearGradient id="meugradiente" x1="0%" y1="0%" x2="0%" y2="100%">
                                <stop offset="0%" stop-color="#ff4614" />
                                <stop offset="100%" stop-color="#ff8214" />
                                </linearGradient>
                        </defs>
                       <path fill-rule="evenodd"  stroke="url(#meugradiente)" stroke-width="3px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
                        d="M11.500,1.500 L793.500,1.500 C799.023,1.500 803.500,5.977 803.500,11.500 L803.500,465.500 C803.500,471.023 799.023,475.500 793.500,475.500 L11.500,475.500 C5.977,475.500 1.500,471.023 1.500,465.500 L1.500,11.500 C1.500,5.977 5.977,1.500 11.500,1.500 Z"/>
                       </svg>
                    <h3>{{u.nome_membro}}, {{u.cargo_membro}} </h3>
                    <p>{{u.descricao_membro}}</p>
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
                <div class="logocaixa">
                    <router-link :to="{ name: 'servicos' }"><a href="#" class="botaoPrincipal">Call to action</a></router-link>
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
export default {
        data() {
            return {
                historia: '',
                equipe:[],
                titulo_qs: '',
                subtitulo_qs: '',
                video: '',
                missao: '',
                i_missao: '',
                valores: '',
                i_valores: '',
                objetivo: '',
                i_objetivo: '',
                meta: '',
                i_meta: '',                                                                 
            };
        },
        mounted() {
                axios
                .get('http://18.228.42.180/api/quemsomos/lista')
                .then(response => (
                    this.titulo_qs = response.data[0].titulo_qs,
                    this.subtitulo_qs = response.data[0].subtitulo_qs,
                    this.historia = response.data[0].historia,
                    this.video = response.data[0].video,
                    this.missao = response.data[0].missao,
                    this.i_missao = response.data[0].i_missao,
                    this.valores = response.data[0].valores,
                    this.i_valores = response.data[0].i_valores,
                    this.objetivo = response.data[0].objetivo,
                    this.i_objetivo = response.data[0].i_objetivo,
                    this.meta = response.data[0].meta,
                    this.i_meta = response.data[0].i_meta,
                    this.historia = response.data[0].historia                                                                            
                    ));

                var _this = this;
                axios.get('http://18.228.42.180/api/equipe/lista').then(function (response) {
                    _this.equipe = response.data;
                });                         
        },
        methods: {
            abremodal(){
                this.$modal.show('hello-world');
                console.log('clquei');                             
            },
        }
}
</script>