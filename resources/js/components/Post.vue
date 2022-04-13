<template>
    <div class="card " style="width: 25rem;">
        <div class="card-body">
            <h2 class="card-title">{{title}}</h2>
            <h4 class="card-text">{{ category ? category:'&nbsp;'}}</h4>
            <p class="card-text">{{content}}</p>
            <!-- <a href="#" class="btn btn-primary">Vedi articolo completo</a> -->
            <router-link class="btn btn-primary" :to="{name: 'single-post', params: {slug: slug}}">Vedi articolo completo</router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Post',
    props: ['title', 'content', 'slug', 'category', 'tags'],
}
</script>

<style>

</style>