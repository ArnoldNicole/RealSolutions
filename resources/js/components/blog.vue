<template>
<div>
<nav class="row justify-content-center">
<ul class="col-md-6 pagination">
	<li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
	<a class="page-link" href="#" @click="fetchArticles(pagination.prev_page_url)">Previous</a>
	</li>
	<li class="page-item disabled">
		<a class="page-link text-info font-weight-bold" href="#">Article {{ pagination.current_page}} of {{pagination.last_page}}</a>
	</li>
	<li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
		<a class="page-link" href="#" @click="fetchArticles(pagination.next_page_url)">More</a>
	</li>
</ul>
</nav>
<div class="card card-body w-100" v-for="article in articles" v-bind:key="article.id">
<div class="text-center h2">
{{article.title}}
</div>
<div v-html="article.body">
	{{article.body}}
</div>
</div>
</div>
</template>

<script>
export default{
	data(){
		return {
		articles:[],
		article:{
		id:'',
		title:'',
		body:''
		},
		article_id:'',
		pagination:{},
		edit: false
	     }
	},
	created(){
	this.fetchArticles();

	},
	methods:{
	fetchArticles(page_url){
	let vm = this;
	page_url = page_url || 'api/api_posts'
	fetch(page_url)
	.then(res => res.json())
	.then(res => {
		this.articles=res.data;
		vm.makePagination(res.meta, res.links);
	})
	.catch(err => console.log(err));

	},
	makePagination(meta, links){
	let pagination ={
		current_page:meta.current_page,
		last_page: meta.last_page,
		next_page_url:links.next,
		prev_page_url:links.prev
		};	

	this.pagination=pagination;
	}

	}

};
</script>