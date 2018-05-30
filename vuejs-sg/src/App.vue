<template>
  <div id="app">
    <img src="./assets/logo.png">
    <hr />
    <router-link to="/">Home</router-link>
    <router-link to="/jobs">Jobs</router-link>
    <router-link to="/companies">Companies</router-link>
    <router-link to="/meetups">Meetups</router-link>
    <router-link to="/sponsors">Sponsors</router-link>
    <router-link to="/contributors">Contributors</router-link>
    <hr />
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
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

a {
  font-weight: bold;
  color: #2c3e50;
}

a.router-link-exact-active {
  color: #42b983;
}
</style>
