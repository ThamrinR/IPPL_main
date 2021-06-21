<x-app-layout>
	<x-slot name="title">
        Article
    </x-slot>
	<x-slot name="header">
        
    </x-slot>
	<section id="article-detail" class="section">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-8">
					<h2 class="title is-size-2-desktop is-size-3-tablet is-size-4-mobile">{{$article->judul}}</h2>
					<p class="subtitle is-size-6"><span class="has-text-primary is-bolded">Published on </span>{{$article->created_at}}</p>
					<img src="{{asset('/img/article/'.$article->gambar)}}" alt="" width="100%">
					<article class="is-size-5-desktop is-size-6-touch has-text-justified">
						{{substr($article->isi,20)}}
					</article>
				</div>
			</div>
		</div>
	</section>
</x-app-layout>




