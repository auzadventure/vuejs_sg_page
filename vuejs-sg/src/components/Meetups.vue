<template>

<div class="container">
  
  <div class="three columns">
	<h4>Our Meetup</h4>
	

  </div>
  
  <div class="nine columns">
	<h5>{{ msg }}</h5>	
	<p>
	We are proud to announce that Opensource DB MariaDB 
	will be food sponsor for this event. (This means we get to eat!!!) We are also excited that the event will be held at Google's HQ in Singapore. This is once again a joint event with our fellow meetup group, FullStack Developers. (yeah!) - Welcome & Networking
	</p>  
  </div>


  
  
</div>
</template>


<script>
export default {
  name: "Meetups",
  data() {
    return {
      msg: "Upcoming VueJS Meetups"
    };
  }
};
</script>

<style scoped>
</style>