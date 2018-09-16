<template>
    <div>
        <h2 class="title tarzan__motto is-3">News</h2>
        <div v-if="this.news">
            <a :href="this.news.link"><img class="news__image" :src="this.thumb"></a>
            <h3 class="subtitle is-4 news__title"><a :href="news.link">{{news.title.rendered}}</a></h3>
            <p v-html="this.excerpt"></p>
        </div>
        <div v-else>
            <div style="margin-bottom:1em;width:200px;height:120px;background-color:silver"></div>
            <h3 class="subtitle is-4 news__title">( Loading News... )</h3>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
              news: null
            }
          },
        computed: {
            excerpt: function(){
                return this.news.excerpt.rendered + '&mdash;<a href="' + this.news.link + '"> read > </a>' ;
            },
            thumb: function(){
                if (this.news) {
                    return this.news._embedded['wp:featuredmedia'][0].media_details.sizes.medium.source_url
                }
            }
        },
        mounted() {
            Axios.get('https://news.tarzan.com.gh/wp-json/wp/v2/posts/?_embed')
            .then((response)=> this.news = (response.data)[0])
            console.log('Component ready.')
        },

    }
</script>