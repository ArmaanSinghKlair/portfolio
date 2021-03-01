@extends('layouts.main_layout')

@section('content')
<section class="project">
    <div class="project__container flex flex-column align-items-stretch justify-content-space-around">
        <div class="project__header">
            <a href="{{route('projects.index')}}"><span class="material-icons back-button">keyboard_backspace</span></a>
            <div class="heading__container flex flex-column align-items-flex-start justify-content-flex-start">
                <span class="heading__subtext subtext">project</span>
                <h1 class="section__heading">{{$project->title}}</h1>
            </div>
        </div>
        <div class="project">
            <div class="project__container">
                    <img src="{{$project->image_url}}" class="cool-box-shadow" />
                    
                    <div class="card-flat__content">
                        <h3>{{$project->title}}</h3>
                        <span>
                            {{$project->body}}
                        </span>
                    </div>

                    <div class="project-links flex flex-column align-items-flex-start justify-content-space-around">
                        @forelse ($project->links as $project_link)
                        <div class="project-link flex flex-row justify-content-space-between">
                            <div class="link-name">{{$project_link->name}} 👉 </div>
                            <a href="{{$project_link->link}}" target="_blank" class="link-link">{{$project_link->link}}</a>
                        </div>
                        @empty
                        @endforelse
                    </div>
            </div>
        </div>
        

        
    </div>
</section>
@endsection