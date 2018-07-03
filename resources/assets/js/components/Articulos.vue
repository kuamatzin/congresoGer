<template>
<div>
    <img src="img/loader.gif" alt="" class="img-responsive center-block" v-show="loader">
    <div class="row" v-for="chunk in chunkedItems" v-show="!loader">
        <div class="col-md-3" v-for="articulo in chunk">
            <div class="thumbnail">
                <div class="thumbnail">

                <img src="https://fbinstantarticles.files.wordpress.com/2016/05/screen_fast_mobile.jpg" alt="book" width="242px" height="200px" v-if="articulo.imagen == 'https://fbinstantarticles.files.wordpress.com/2016/05/screen_fast_mobile.jpg'">

                <img :src="'uploads/' + articulo.imagen" alt="book" width="242px" height="200px" v-else>

                <div class="caption">
                    <p style="font-size: 15px; font-weight: bold">{{articulo.titulo}}</p>
                    <p style="font-size: 12px">{{articulo.subtitulo}}</p>
                    <br>
                    <a :href="articulo.url" class="btn btn-primary btn-sm" role="button" target="_blank">Leer Más</a>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-5">
        <paginator :dataSet="dataSet" @updated="fetchData"></paginator>
    </div>
</div>
</template>
<script>
    export default {
        props: ['tipo'],

        data(){
            return {
                dataSet: false,
                articulos: '',
                loader: false
            }
        },
        computed: {
            chunkedItems () {
                return _.chunk(_.toArray(this.articulos), 4);
            }
        },
        mounted(){
            this.fetchData();
        },
        methods: {
            url(page = 1){
                return '/articulos/fetch?page=' + page + '&tipo=' + this.tipo;
            },
            fetchData(page){
                this.loader = true;
                axios.get(this.url(page)).then(({data}) => {
                    this.loader = false;
                    this.dataSet = data;
                    this.articulos = data.data
                    }
                );
            }
        }

    }
</script>