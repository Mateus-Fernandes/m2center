<template>
    <div class="group mb-0">
        <p>Selecione a miniatura do Post</p>
        <file-pond
        name="miniatura_blog"
        ref="pond"
        instantUpload=false
        class-name="my-pond"
        label-idle="Arraste os arquivos aqui..."
        v-bind:files="miniatura_blog"/>                                
    </div>
</template>
<script>




export default {
    props: ['miniatura_blogs'],
    data(){
        return{

            
            miniatura_blog: '',


        }
    },
        mounted() {
        this.miniatura_blog = this.miniatura_blogs;


    }
}
</script>