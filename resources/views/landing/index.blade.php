@extends('layouts.main_layout')

@section('content')
<section class="landing-banner">
    <div class="landing-banner__container flex flex-column align-items-center justify-content-space-between">
        <div class="landing-banner__profile flex flex-column align-items-center">
            <img src="images/profile.jpg" class="profile-image"/>
            <span>Hi, I'm Armaan 🤟</span>
        </div>

        <div class="landing-banner__banner">
            <div class="landing-banner__banner__banner-text">
                Building fluid front-end and scalable back-end
            </div>
        </div>
        <a href="/resume.pdf" class="download-button flex flex-row align-items-center justify-content-space-between" target="_blank">
            <span>Resume</span>
            <span class="material-icons">launch</span> 
        </a>

        <div class="landing-banner__scroll-down">
            <span class="material-icons">keyboard_arrow_down</span>
        </div>
    </div>
</section>

<section class="skills">
    <div class="skills-overlay overlay cool-overlay-right-aligned"></div>
    <div class="skills__container flex flex-column align-items-stretch justify-content-space-around">
        <div class="skills__header">
            <div class="heading__container flex flex-column align-items-flex-start justify-content-flex-start">
                <span class="heading__subtext subtext">Nice to meet you</span>
                <h1 class="section__heading">Areas of interest</h1>
            </div>
        </div>

        <div class="skills__cards">
            <div class="skills__cards__container flex flex-row justify-content-space-around align-items: center">
                <div class="skills__card card flex flex-column align-items-center justify-content-space-around">
                    <img src="https://img.icons8.com/officel/80/000000/react.png"/>
                    <span class="card__info flex flex-column align-items-center">
                        <h3>React</h6>
                        <span style="text-align:center;line-height:1;">The modern way to build fast interfaces</span>
                    </span>
                </div>

                <div class="skills__card card flex flex-column align-items-center justify-content-space-around">
                        <img src="https://img.icons8.com/fluent/80/000000/laravel.png"/>
                        <span class="card__info flex flex-column align-items-center">
                        <h3>Laravel</h6>
                        <span style="text-align:center;line-height:1;">PHP's MVC framework</span>
                    </span>
                </div>
                <div class="skills__card card flex flex-column align-items-center justify-content-space-around">
                        <img src="https://img.icons8.com/color/80/000000/java-coffee-cup-logo.png"/>
                        <span class="card__info flex flex-column align-items-center">
                        <h3>Java2E & JPA</h6>
                        <span style="text-align:center;line-height:1;">Building Scalable enterprise application</span>
                    </span>
                </div>
                <div class="skills__card card flex flex-column align-items-center justify-content-space-around">
                    <img src="https://img.icons8.com/color/80/000000/chemical-test.png"/>
                    <span class="card__info flex flex-column align-items-center">
                        <h3>Testable & Efficient</h6>
                        <span style="text-align:center;line-height:1;">SDLC cycle and building secure & tested apps</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="projects">
    <div class="projects-overlay overlay cool-overlay-left-aligned"></div>
    <div class="projects__container flex flex-column align-items-stretch justify-content-space-around">
        <div class="projects__header">
            <div class="heading__container flex flex-column align-items-flex-end justify-content-flex-start">
                <span class="heading__subtext subtext">Check this out</span>
                <h1 class="section__heading">Recent projects</h1>
            </div>
        </div>

        <div class="projects__cards">
            <div class="projects__cards__container">
                @forelse ($projects as $project)
                <a href="{{route('projects.show',['id'=>$project->id])}}">
                    <div class="projects__card flex flex-column align-items-flex-start justify-content-flex-start">
                        <img src="{{$project->image_url}}" class="cool-box-shadow" />
                        <h3>{{$project->title}}</h3>
                        <span>{{$project->excerpt}}</span>
                    </div>
                </a>
                @empty
                @endforelse
            </div>
        </div>

        <div class="projects-cta__container flex flex-row justify-content-center align-items-center">
            <a href="projects/index" class="projects-cta see-more">See all</a>
        </div>
    </div>
</section>
@endsection
