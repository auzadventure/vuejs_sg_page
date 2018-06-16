<template>
  <div id="app">
  
	<div id="main-container">
	
	<div class="container">
	
		<div class="four columns">
			<img src="./assets/logo.png">
		</div>
		<div class="eight columns" style='padding:20px 0; text-align:left;'>
			<h2>VUE.JS Singapore Community</h2>
			<h5>For All Your Vue.js</h5>
		</div>
	</div>
	<hr>
	
	<app-meetups></app-meetups>
	
	<hr>
	
	<app-jobs></app-jobs>
	
	<hr>
	
	<app-contributors></app-contributors>
	
	<hr>
	
		
	<app-sponsors></app-sponsors>
	
	</div>
  </div>
</template>

<script>
import Jobs from '@/components/Jobs'
import Meetups from '@/components/Meetups'
import Contributors from '@/components/Contributors'
import Sponsors from '@/components/Sponsors'

export default {
  name: "App",
  
  components: {
	'app-jobs': Jobs,
	'app-meetups':Meetups,
	'app-contributors': Contributors,
	'app-sponsors': Sponsors,
  
  }
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
