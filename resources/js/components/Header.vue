<template>
  <header>
    <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Boolpress</a>
        
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item" v-for="menuItem in menuItems" :key="menuItem.routeName">
              <!-- <a class="nav-link" href="/">Home</a> -->
              <router-link class="nav-link" :to="{name: menuItem.routeName}">{{menuItem.label}}</router-link>
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

  data() {
    return {
      menuItems:[
        {
          routeName: 'home',
          label: 'Home',
        },
        {
          routeName: 'about',
          label: 'Chi Siamo',
        },
        {
          routeName: 'contact',
          label: 'Contatti',
        },
        {
          routeName: 'blog',
          label: 'Blog',
        },
      ]
    }
  }

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