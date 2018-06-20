<template>

<div class="container">
	
  <h5>{{ msg }}</h5>
  <div class="row">
    
  <div class="three columns">
	
	

  </div>
  
  <div class="nine columns">
	<h5>{{ meetup.name}}</h5>
	<p>
	<span v-html="meetup.description"></span>
	{{ meetup.venue.address_1 }}
	{{ meetup.description | toUsd}}
	</p>  
  </div>  
  
  </div>
  



  
  
</div>
</template>


<script>
import axios from 'axios';

Vue.filter('toUSD', function (value) {
    return `$${value}`;
});


export default {
  name: "Meetups",
  data() {
    return {
      msg: "Upcoming VueJS Meetups",
	  meetup: {}
    };
  },

  mounted() {
	this.getData();
  
  },  

  
  methods: {  
  
	getData() {
	
		let url = 'http://localhost/wesvault.com/bpo/vuejs-sg/ff-api/meetup/latest';
		
		let self = this;
		
		axios.get(url)
			  .then(function (response) {
				self.meetup = response.data; 
				console.log(response.data);
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