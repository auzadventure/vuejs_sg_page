<template>

<div class="container">

<h5>{{msg}}</h5>

<div class="row">

<div class="three columns panel">

<img class='placeholder'>
<h5 class='b-green'>Company</h5>
ddd
</div>

</div>
   
</div>   
</template>


<script>
import axios from 'axios';


export default {
  name: "Sponsors",
  data() {
    return {
      msg: "VueJS Community Sponsors",
	  rows: {},
    };
  },
  
  methods: {
  
	getData() {
	
		let url = 'http://localhost/wesvault.com/bpo/vuejs-sg/ff-api/coy/all';
		
		let self = this;
		
		axios.get(url)
			  .then(function (response) {
				self.rows = response.data; 
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
.panel {
	height: 150px;
	padding:5px;

	}
.panel h5 {
	text-align: center;
	}
</style>