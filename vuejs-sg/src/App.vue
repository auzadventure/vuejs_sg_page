<template>
  <div id="app" class="container">
    <div class="navbar row">
      <div class="four columns">
        <img class="navbar-logo" src="./assets/VueSGLogo.png">
      </div>
      <nav class="eight columns">
        <ul class="navbar-nav">
          <li class="navbar-nav-item"><router-link to="/">Home</router-link></li>
          <li class="navbar-nav-item"><router-link to="/jobs">Jobs</router-link></li>
          <li class="navbar-nav-item"><router-link to="/companies">Companies</router-link></li>
          <li class="navbar-nav-item"><router-link to="/meetups">Meetups</router-link></li>
          <li class="navbar-nav-item"><router-link to="/sponsors">Sponsors</router-link></li>
          <li class="navbar-nav-item"><router-link to="/contributors">Contributors</router-link></li>
        </ul>
      </nav>
    </div>
    <router-view/>
  </div>
</template>

<script>
export default {
  name: "App"
};
</script>

<style>
#app {
  font-family: "Avenir Next", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 30px;
}

a {
  color: #2c3e50;
  text-decoration: unset;
}

a.router-link-exact-active {
  color: #42b983;
}

nav, .navbar {
  display: flex;
  justify-content: space-between;
}

img.navbar-logo {
  width: 220px;
  height: 70px;
}

ul.navbar-nav {
  text-align: right;
  margin: auto auto;
  list-style: none;
}

li.navbar-nav-item {
  display: inline-block;
  padding-left: 25px;
  text-transform: uppercase;
  font-weight: normal;
}

</style>
