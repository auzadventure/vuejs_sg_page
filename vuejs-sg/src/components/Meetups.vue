<template>
<div>
     <h1>VueJS Meetups in Singapore</h1>
   <ul>
     <li v-for="meetup in pastMeetups" :key="meetup.id">
       {{ meetup.name }}
     </li>
   </ul>
</div>
</template>


<script>
import pastMeetupsAPI from "../api-queries/meetups/past-meetups-query.js";

let meetupsModule = {
  name: "Meetups",
  mounted() {
    pastMeetupsAPI
      .execute()
      .then(data => {
        data.for(i => meetupsModule.data.pastMeetups.push(i));
      })
      .catch(err => {
      });
  },
  data() {
    return {
      pastMeetups: []
    };
  }
};

export default meetupsModule;
</script>

<style scoped>
</style>