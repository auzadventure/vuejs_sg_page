<template>

<div class="">
   <h1>{{ msg }}</h1>

   <h4>A whole bunch of code</h4>
   
   <p>Time {{time.time}}</p>
   
   <button @click='getData'>Click Me</button>
</div>   
</template>


<script>
import axios from 'axios';


export default {
  name: "Sponsors",
  data() {
    return {
      msg: "VueJS Community Sponsors",
	  time: {}
    };
  },
  
  methods: {
  
	getData() {
	
	let url = 'http://date.jsontest.com/';
	
	let self = this;
	
	axios.get(url)
		  .then(function (response) {
			self.time = response.data; 
			console.log(response);
		  })
		  .catch(function (error) {
			console.log(error);
		  });

	
		alert('get date');
	}
  
  }
};
</script>

<style scoped>
</style>