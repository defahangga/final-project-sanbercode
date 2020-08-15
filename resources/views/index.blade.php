@extends('layouts.master')

@section('content')

<div class="ml-4 mr-4">

    @foreach($question as $key => $post)

    <div class="media">
            <div class="media-body">
                <h5 class="mt-0" style="font-weight: bold;">{{ $post->judul }}</h5>
                <p>Author  &nbsp;:&nbsp;  </p>
                {{ $post->isi }}
                <br><br><h6>Tags : </h6>
                <a href="#" class="btn btn-outline-secondary btn-sm">Secondary</a><br>

                <div class="mt-2" style="display: flex;">
                    <a href="" class="btn btn-light btn-sm">Upvote</a>
                    <a href="" class="btn btn-light btn-sm ml-2">Downvote</a>
                    <a href="/pertanyaan/{{$post->id}}/edit" class="btn btn-light btn-sm ml-2">edit</a>
                    <form method="POST" class="ml-3" action="/pertanyaan/{{$post->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-light btn-sm">Delete</button>
                    </form>
                </div>
        
                <div class="media mt-3">
                <div class="media-body ml-5">
                    <h5 class="mt-0">Answers :</h5>
                    <ul>
                        @foreach($jawaban as $key => $answers)
                            @if($answers->question_id==$post->id)
                                <li>{{$answers->isi}}</li>
                            @endif
                        @endforeach
                    </ul>
                    
                    
                    <form action="/jawaban/{{$post->id}}" method="POST">
                        @csrf
                        <!-- jawaban -->
                        <textarea class="form-control" rows="3" name="isi_jawaban"></textarea>
                        <button type="submit" class="btn btn-primary mt-2">Reply</button>
                    </form>
                    
                <br><br>
                </div>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
</div>


@endsection