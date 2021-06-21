<x-app-layout>
    <x-slot name="title">
        Article
    </x-slot>
    
    <x-slot name="header">
        
    </x-slot>

    <section id="mc-article" class="section">
        <div class="has-text-centered mb-6">
            <p class="title is-3">
                Article
            </p>
        </div>
        <div class="columns is-centered is-multiline">
            @foreach ($article as $item)   
            <div class="column is-4-desktop is-5-tablet is-8-mobile is-12-mobile-xs article-item">
                <a href="{{route('articledetail.show',$item->id)}}">
                    <figure>
                        <img src="{{asset('/img/article/'.$item->gambar)}}" alt="">
                        <figcaption>
                            <div>
                                <h4 class="title is-size-4-desktop is-size-5-touch"><a href="{{route('articledetail.show',$item->id)}}" class="is-bolded">{{$item->judul}}</a></h4>
                                <p class="subtitle">{{substr ("$item->isi", 0,50)}}</p>
                            </div>
                            <span>{{$item->created_at}}</span>
                        </figcaption>
                    </figure>
                </a>
            </div>
            @endforeach
        </div>
    </section>
</x-app-layout>