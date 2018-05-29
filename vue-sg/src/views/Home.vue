<template>
  <div class="home">
    <img src="../assets/logo.png">
    <LandingPage msg="Welcome to VueJS Singapore Community"/>
  </div>
</template>

<script>
// @ is an alias to /src
import LandingPage from '@/components/LandingPage.vue'

export default {
  name: 'home',
  components: {
    LandingPage
  }
}
</script>
