@extends('layouts.main')

@section('content')

<main class="blog-post">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
        <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">• {{ $date->translatedFormat('F') }}, {{ $date->day }}, {{ $date->year }} • {{ $date->format('H:i') }} • {{ $post->comments->count()}} Комментариев</p>
        <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/' . $post->main_image) }}" alt="featured image" class="w-100">
        </section>
        <section class="post-content">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    {!! $post->content !!}    
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-9 mx-auto">

                <section class="py-3">
                    @auth()
                    <form action="{{route('post.like.store', $post->id)}}" method="post">
                        @csrf
                        <span>{{$post->liked_users_count}}</span>
                        <button type="submit" class="border-0 bg-transparent">
                            @if(auth()->user()->likedPosts->contains($post->id))
                                <i class="fas fa-heart"></i>
                            @else
                                <i class="far fa-heart"></i>
                            @endif
                        </button>
                    </form>
                    @endauth
                    @guest()
                    <div class="justify-content-center">
                        <span>{{$post->liked_users_count}}</span>
                        <i class="far fa-heart"></i>
                    </div>
                    @endguest
                </section>

                @if($relatedPosts->count() >0)
                <section class="related-posts">
                    <h2 class="section-title mb-4" data-aos="fade-up">Похоже на то что вы ищете</h2>
                    <div class="row">
                        @foreach($relatedPosts as $relatedPost)
                        <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                            <a href="{{ route('post.show', $relatedPost->id) }}" class="post-permalink ">
                                <img src="{{ asset('storage/' . $relatedPost->preview_image) }}" alt="related post" class="post-thumbnail">
                                <p class="post-category">{{ $relatedPost->category->title }}</p>
                                <h5 class="post-title">{{ $relatedPost->title }}</h5>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </section>
                @endif

                <section class="comment-list">
                    <h2 class="section-title mb-5" data-aos="fade-up">Комментарии({{$post->comments->count()}})</h2>
                    @foreach($post->comments as $comment)
                    <div class="d-flex flex-start mb-4">
                        <div class="card w-100">
                            <div class="card-body p-4">
                                <h5>{{$comment->user->name}}</h5>
                                <p class="small">{{ $comment->dateAsCarbon->diffForHumans() }}</p>
                                <p>{{$comment->message}}</p>
                                <!-- <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>132</a>
                                        <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>15</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </section>
                @auth()
                <section class="comment-section">
                    <h2 class="section-title mb-5" data-aos="fade-up">Отправить комментарий</h2>
                    <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12" data-aos="fade-up">
                                <label for="comment" class="sr-only">Комментарий</label>
                                <textarea name="message" id="comment" class="form-control" placeholder="Ваше сообщение" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12" data-aos="fade-up">
                                <input type="submit" value="Отправить сообщение" class="btn btn-warning">
                            </div>
                        </div>
                    </form>
                </section>
                @endauth
                @guest()
                <section class="text-danger" ">
                    <p class="pl-5" data-aos="fade-up">Для отправки коментария необходимо <a href="{{route('personal.main.index')}}">авторизоваться</a></p>
                </section>
                @endguest
            </div>
        </div>
    </div>
</main>


@endsection