<?php
/**
 * Template Name: Vue 
 *
 * This is the template that displays information from a web service.
 *
 * @package foundationwp
 */

get_header(); ?>
<style>
    .fade-enter-active,
    .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter,
    .fade-leave-to {
      opacity: 0
    }
</style>
    <div class="container">
        <div class="row">
        	<div id="primary" class="col-lg-9 col-md-9">
        		<main id="main" class="site-main" role="main">
				  <div id="app">
					<wpvue-posts></wpvue-posts>
				</div>
        		</main><!-- #main -->
        	</div><!-- #primary -->

<script src="https://unpkg.com/vue"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script type="text/x-template" id="wpvue-posts-template">
	<div>
	<h1>Posts</h1>
	<transition name="fade">
		<div v-if="isLoading">Loading...</div>
	</transition>
	<transition name="fade">
	<ul v-if="!isLoading">
		<li v-for="team in teams">
		<strong>{{ team }}</strong>
        </li>
        <li v-for="post in posts">
        <strong>{{ post.title.rendered }}</strong>
        <p>{{ post.content.rendered }}</p>
		</li>
	</ul>
	</transition>
	</div>
</script>
<script>
Vue.component('wpvue-posts', {
	template: '#wpvue-posts-template',
    data() {
    return {
        posts: [],
        isLoading: true,
        name: '',
        email: '',
        caps: '',
        teams: [
            'Dallas Cowboys',
            'New York Rangers',
            'Boston Red Sox',
            'Dallas Mavericks'
            ]
        }
    },
    mounted: function(){
        this.pageLoad();
    },
    methods: {
        pageLoad(){
            axios.get('http://localhost/hyperdrivedesigns/wp-json/wp/v2/posts', {
                
                // name: this.name,
                // email: this.email,
                // caps: this.caps
            }).then(response => {
                this.response = JSON.stringify(response, null, 2)
                console.log(response.data);
                this.posts = response.data;
                this.isLoading = false;
            })
        }
        
    }
});
new Vue({
	el: '#app'
});
</script>

<?php get_footer(); ?>