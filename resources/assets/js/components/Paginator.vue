<template>
<div>
    <nav aria-label="Page navigation">
        <ul class="pagination" v-if="shouldPaginate">
            <li v-show="prevUrl" class="page-item">
                <a href="#" aria-label="Previous" rel="prev" @click.prevent="page--" class="page-link">
                    <span aria-hidden="true">&laquo; Anterior</span>
                </a>
            </li>
            <li v-for="n in dataSet.last_page" class="page-item" :class="{ active: dataSet.current_page == n }" @click="updatePage(n)"><a class="page-link">{{n}}</a></li>
            <li v-show="nextUrl" class="page-item">
                <a href="#" aria-label="Next" rel="next" @click.prevent="page++" class="page-link">
                    <span aria-hidden="true">&raquo; Siguiente</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
</template>
<script>
export default {
    props: ['dataSet'],
    data(){
        return {
            page: 1,
            prevUrl: false,
            nextUrl: false
        }
    },
    computed: {
        shouldPaginate() {
            return !! this.prevUrl || !! this.nextUrl;
        }
    },
    watch: {
        dataSet(){
            this.page = this.dataSet.current_page;
            this.prevUrl = this.dataSet.prev_page_url;
            this.nextUrl = this.dataSet.next_page_url;
        },
        page(){
            this.broadcast();
        }
    },
    methods: {
        broadcast(){
            this.$emit('updated', this.page);
        },
        updatePage(page){
            this.page = page;
        }
    }
}
</script>