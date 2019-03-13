<template>
                            <div class="group mb-0">
                                <p>Selecione a Imagem Destacada do Post</p>
                                <file-pond
                                name="imagem_blog"
                                ref="pond"
                                instantUpload=false
                                class-name="my-pond"
                                label-idle="Arraste os arquivos aqui..."
                                v-bind:files="imagem_blog"/>                                
                            </div>
</template>
<script>

export default {
    props: ['imagem_blogs'],
    data(){
        
        return{
            
            imagem_blog: '',
        }
    },
    mounted() {
        this.imagem_blog = this.imagem_blogs;
    }
}
</script>