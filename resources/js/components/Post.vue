<template>
    <div class="card " style="width: 25rem;">
        <div class="card-body">
            <h2 class="card-title">{{title}}</h2>
            <h4 class="card-text">Categoria: {{ category ? category.name :'&nbsp;'}}</h4>
            <div class="d-flex mb-2">
                <span class="mr-2">Tag: </span>
                <h5 class="mr-2">
                    <span v-for="tag in tags" :key="tag.id" class="badge rounded-pill bg-primary text-light">
                        {{tag.name}}
                    </span>
                </h5>
            </div>
            <p class="card-text">{{truncateText(content)}}</p>
            <!-- <a href="#" class="btn btn-primary">Vedi articolo completo</a> -->
            <router-link class="btn btn-primary" :to="{name: 'single-post', params: {slug: slug}}">Vedi articolo completo</router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Post',
    props: ['title', 'content', 'slug', 'category', 'tags'],

    data() {
        return {
            strTruncateLen: 50
        }
    },

    methods: {
        truncateText(text) {

            if (text.length > this.strTruncateLen) {
                return text.substring(0,50) + '...';
            }
                return text

        },
    }
}
</script>

<style>

</style>