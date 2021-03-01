@extends('layouts.main_layout')

@section('content')
<section class="projects">
    <div class="projects-overlay overlay cool-overlay-full-width"></div>
    <div class="projects__container flex flex-column align-items-stretch justify-content-space-around">
        <div class="projects__header">
            <div class="heading__container flex flex-column align-items-flex-start justify-content-flex-start">
                <span class="heading__subtext subtext">Check these out</span>
                <h1 class="section__heading">All Projects</h1>
            </div>
        </div>

        <div class="projects__cards-flat">
            <div class="cards-flat__container">

            @forelse ($projects as $project)
                <a href="{{route('projects.show',['id'=>$project->id])}}">
                    <div class="card-flat card">
                        @if ($project->image_url)
                        <img src="{{$project->image_url}}" class="cool-box-shadow" />
                        @else
                        <span class="material-icons">book_online</span>
                        @endif
                        
                        <div class="card-flat__content">
                            <h3>{{$project->title}}</h3>
                            <span>{{$project->excerpt}}</span>
                        </div>
                    </div>
                </a>

                @empty
                <div>No projects found</div>
                @endforelse
            </div>
        </div>

        
    </div>
</section>
@endsection