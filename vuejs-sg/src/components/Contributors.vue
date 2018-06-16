<template>
   <div class="container">
   <h5>{{msg}}</h5>
   
   <div class="row">
		<div v-for="row in rows" class="three columns panel">
		<img class='placeholder'> 
		<h6 class='b-green'>{{row.name}}</h6>
		<span class='font-small'>{{row.position}}</span></b>
		
		</div>
   </div>
   
   </div>
</template>


<script>
import axios from 'axios';

export default {
  name: "Contributors",
  data() {
    return {
      msg: "Contributors",
	  rows: {},
    };
  },
  mounted() {
	this.getData();
  
  },  
  methods: {
  
	getData() {
	
	let url = 'http://localhost/wesvault.com/bpo/vuejs-sg/ff-api/contributor/all';
	let self = this;
	
	axios.get(url)
		  .then(function (response) {		
			console.log(response.data);
			self.rows = response.data;
		  })
		  .catch(function (error) {
			console.log(error);
		  });
  
	}
  
  }    
  
};
</script>

<style scoped>
.panel {
	padding:10px;
	text-align: center;
	border: 1px solid #ececec;
	height: 180px;
}


h6 {
	margin-bottom:0;
	}



</style>