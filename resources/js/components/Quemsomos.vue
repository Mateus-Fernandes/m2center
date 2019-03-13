<template>
    <form @submit.prevent="editar">
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Informações da Página</h3>
                    </div>
                    <div class="box-body">
                            <div class="group">      
                                <input type="text" required v-model="titulo_qs">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Titulo da Página</label>
                            </div>
                            <div class="group">      
                                <input type="text" required v-model="subtitulo_qs">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Subtítulo da Página</label>
                            </div>                             
                    </div>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">História</h3>
                    </div>
                    <div class="box-body">
                            <div class="group">
                                <textarea id="historia" name="historia" class="form-control" v-bind="historia"></textarea>
                                <input type="hidden" id="historiatexto" name="historiatexto">  
                            </div>                                  
                    </div>
                </div>                
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Vídeo em Destaque</h3>
                    </div>
                    <div class="box-body">
                            <file-pond
                            name="video"
                            ref="pond"
                            class-name="my-pond"
                            v-bind:files="video"
                            instantUpload=false
                            label-idle="Arraste os arquivos aqui..."
                            v-on:init="handleFilePondInit"/>
                    </div>
                </div>
                <div class="box">
                    <div class="box-header d-flex"> 
                        <h3 class="box-title mr-auto">Missão</h3>
                        <div class="ml-auto"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                    </div>
                    <transition name="staggered-fade">
                    <div class="box-body">
                            <div class="group no-bottom">      
                                <textarea-autosize
                                placeholder="Type something here..."
                                ref="someName"
                                v-model="missao"
                                :min-height="30"
                                :max-height="350"
                                @blur.native="onBlurTextarea"
                                ></textarea-autosize>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Missão</label>
                            </div>
                            <div class="group">
                                <p>Selecione o Ícone</p>
                                <file-pond
                                name="i_missao"
                                ref="pond"
                                instantUpload=false
                                class-name="my-pond"
                                label-idle="Arraste os arquivos aqui..."
                                v-bind:files="i_missao"
                                v-on:init="handleFilePondInit"/>                                
                            </div>                        
                    </div>
                    </transition>
                </div>
                <div class="box">
                    <div class="box-header d-flex">
                        <h3 class="box-title mr-auto">Valores</h3>
                        <div class="ml-auto"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                    </div>
                    <transition name="staggered-fade">
                        <div class="box-body">
                            <div class="group no-bottom">      
                                <textarea-autosize
                                placeholder="Type something here..."
                                ref="someName"
                                v-model="valores"
                                :min-height="30"
                                :max-height="350"
                                @blur.native="onBlurTextarea"
                                ></textarea-autosize>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Valores</label>
                            </div>
                            <div class="group">
                                <p>Selecione o Ícone</p>
                                <file-pond
                                name="i_valores"
                                ref="pond"
                                instantUpload=false
                                class-name="my-pond"
                                label-idle="Arraste os arquivos aqui..."
                                v-bind:files="i_valores"
                                v-on:init="handleFilePondInit"/>                                
                            </div>                        
                        </div>
                    </transition>
                </div>
                <div class="box">
                    <div class="box-header d-flex">
                        <h3 class="box-title mr-auto">Objetivo</h3>
                        <div class="ml-auto"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                    </div>
                    <transition name="staggered-fade">
                        <div class="box-body">
                            <div class="group no-bottom">      
                                <textarea-autosize
                                placeholder="Type something here..."
                                ref="someName"
                                v-model="objetivo"
                                :min-height="30"
                                :max-height="350"
                                @blur.native="onBlurTextarea"
                                ></textarea-autosize>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Objetivo</label>
                            </div>
                            <div class="group">
                                <p>Selecione o Ícone</p>
                                <file-pond
                                name="i_objetivo"
                                ref="pond"
                                instantUpload=false
                                class-name="my-pond"
                                label-idle="Arraste os arquivos aqui..."
                                v-bind:files="i_objetivo"
                                v-on:init="handleFilePondInit"/>                                
                            </div>                        
                        </div>
                    </transition>
                </div>
                <div class="box">
                    <div class="box-header d-flex">
                        <h3 class="box-title mr-auto">Meta</h3>
                        <div class="ml-auto"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                    </div>
                    <transition name="staggered-fade">
                        <div class="box-body">
                            <div class="group no-bottom">      
                                <textarea-autosize
                                placeholder="Type something here..."
                                ref="someName"
                                v-model="meta"
                                :min-height="30"
                                :max-height="350"
                                @blur.native="onBlurTextarea"
                                ></textarea-autosize>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Meta</label>
                            </div>
                            <div class="group">
                                <p>Selecione o Ícone</p>
                                <file-pond
                                name="i_meta"
                                ref="pond"
                                instantUpload=false
                                class-name="my-pond"
                                label-idle="Arraste os arquivos aqui..."
                                v-bind:files="i_meta"
                                v-on:init="handleFilePondInit"/>                                
                            </div>                        
                        </div>
                    </transition>
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
                historia: '',
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
                show3: false,                                                                   
            };
        },
        mounted() {
          
                axios
                .get('http://18.228.42.180/admin/quemsomos/lista')
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
                    document.getElementById("historia").value = response.data[0].historia                                                                            
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
                
                var videoword = document.getElementsByName('video')[0].value;
                let videowordres;

                if(videoword != '')
                    videowordres = 'http://18.228.42.180/'+ videoword.replace("public", "storage");
                else
                    videowordres = this.video;
                
                var i_missaoword = document.getElementsByName('i_missao')[0].value;
                let i_missaowordres;
                if(i_missaoword != '')
                    i_missaowordres = i_missaoword.replace("public", "storage");
                else
                    i_missaowordres = this.i_missao;
                
                var i_valoresword = document.getElementsByName('i_valores')[0].value;
                let i_valoreswordres;
                if(i_valoresword != '')
                    i_valoreswordres = i_valoresword.replace("public", "storage");
                else
                    i_valoreswordres = this.i_valores;

                var i_objetivoword = document.getElementsByName('i_objetivo')[0].value;
                let i_objetivowordres;
                if(i_objetivoword != '')
                    i_objetivowordres = i_objetivoword.replace("public", "storage");
                else
                    i_objetivowordres = this.i_objetivo;                    

                var i_metaword = document.getElementsByName('i_meta')[0].value;
                let i_metawordres;
                if(i_metaword != '')
                    i_metawordres = i_metaword.replace("public", "storage");
                else
                    i_metawordres = this.i_meta;    

                axios.post('http://18.228.42.180/admin/quemsomos/atualizar', {
                    titulo_qs: this.titulo_qs,
                    subtitulo_qs: this.subtitulo_qs,
                    historia: document.getElementsByName('historiatexto')[0].value,
                    video: videowordres,
                    missao: this.missao,
                    i_missao: i_missaowordres,
                    valores: this.valores,
                    i_valores: i_valoreswordres,
                    objetivo: this.objetivo,
                    i_objetivo: i_objetivowordres,
                    meta: this.meta,
                    i_meta: i_metawordres
                })
                .then(function (response) {
                    currentObj.output = response.data;
                    currentObj.flashMessage.show({status: 'success', title: 'Página atualizada com sucesso', message: 'a página quem somos foi atualizada.'})
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
