<template>

<div class='container'>

   <h5>{{ msg }} Powered By Vuejobs.com</h5>
	<button @click='getData'>Get Jobs</button>
	<button @click='clearData'>Clear Data</button>
 <table class="u-full-width">
  <thead>
    <tr>
      <th>Company</th>
      <th>Position / Location</th>
      <th style='width:15%'>Days Ago</th>

    </tr>
  </thead>  
   <tbody>

    
	
	<tr v-for="job in jobs">
      <td>
	  <img class='logo' :src="job.company.avatar"></img>
	  {{job.company.name}}</td>
      <td><a :href="job.url" class='b-green'>{{job.title}}</a> <br>
	      <b>{{job.location}}</b>
		  
	  </td>
      <td><span class='font-small'>{{job.published_at.for_humans}}</span></td>
    </tr>

  </tbody>
</table>
  
  </div>   
   
</template>


<script>
import axios from 'axios';

export default {
  name: "Jobs",
  data() {
    return {
      msg: "Vue.js Jobs",
	  jobs: {},
    };
  },
  
  mounted() {
	this.getData();
  
  },
  
  methods: {
  
	getData() {
	
	let url = 'https://vuejobs.com/api/jobs';
	let self = this;
	
	axios.get(url)
		  .then(function (response) {
			let jobs = response.data; 
			jobs = jobs.slice(0,10);
			self.jobs = jobs;
			
			console.log(response.data);
		  })
		  .catch(function (error) {
			console.log(error);
		  });

	},
	
	clearData() {
		this.jobs = {}
		}
  
  }  
  
};
</script>

<style scoped>
.logo {

	height:25px;
	margin: 2px 5px;
	display:block;
}

.list-enter-active, .list-leave-active {
  transition: all 1s;
}
.list-enter, .list-leave-to {
  opacity: 0;
  transform: translateY(30px);
}

</style>