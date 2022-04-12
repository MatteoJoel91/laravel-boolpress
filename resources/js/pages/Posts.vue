<template>
  <main>
      <div class="container">
        <h1 class="my-4 text-center">Elenco dei post</h1>

        <div class="row">
            <div class="col-4 d-flex flex-wrap justify-content-center m-auto" v-for="post in posts" :key="post.id">
                <div class="card " style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{post.title}}</h5>
                        <p class="card-text">{{post.content}}</p>
                        <a href="#" class="btn btn-primary">Vedi articolo intero</a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="my-4">
            <ul class="pagination d-flex justify-content-center">
                <li class="page-item mr-2 cursore mx-2" :class="(currentPage == 1) ? 'disabled' : '' " ><span class="page-link" @click="getPosts(currentPage - 1)">Precedente</span></li>

                <li class="page-item cursore mx-2" :class="(currentPage == lastPage) ? 'disabled' : '' "><span class="page-link" @click="getPosts(currentPage + 1)">Successivo</span></li>
            </ul>
        </nav>
        
      </div>
      
  </main>
</template>

<script>
export default {
    name: 'Main',

    data(){
        return{
            posts: [],
            currentPage: 1,
            lastPage: null,
        }
    },

    methods: {
        getPosts(apiPage) {
            axios.get('/api/posts',{
                'params':{
                    'page': apiPage
                }
            })
            .then((response)=>{
            console.log(response);

            this.currentPage = response.data.result.current_page;

            this.posts = response.data.result.data;

            this.lastPage = response.data.result.last_page;
        });
        }
    },

    created(){
        this.getPosts(1);
    },
}
</script>


<style>

.cursore{
    cursor: pointer;
}

</style>