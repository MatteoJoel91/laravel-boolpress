<template>
  <header>
    <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Boolpress</a>
        
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <!-- <a class="nav-link" href="/">Home</a> -->
              <router-link class="nav-link" :to="{name: 'home'}">Home</router-link>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="/chi-siamo">Chi siamo</a> -->
              <router-link class="nav-link" :to="{name: 'about'}">Chi siamo</router-link>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="/contatti">Contatti</a> -->
              <router-link class="nav-link" :to="{name: 'contact'}">Contatti</router-link>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="/posts">Post</a> -->
              <router-link class="nav-link" :to="{name: 'blog'}">Blog</router-link>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/admin">Accesso Admin</a>
            </li>
          </ul>

      </div>
    </nav>
  </header>
</template>

<script>
export default {
    name: 'Header',

}
</script>


<style>
  .navbar{
    height: 10vh;
    background-color: lightgray!important;;
  }
  .router-link-exact-active{
    color: rgb(61, 61, 244)!important;
  }
</style>