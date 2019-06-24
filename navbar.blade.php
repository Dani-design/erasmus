<!DOCTYPE html>

<html lang="{{app()->getLocale() }}">
<div class="container" id = "navbar">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

            <!--Left Side Of Navbar -->
             <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                 <a class="nav-link" href="/">{{__('home.home_menu')}}<span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="/projectposts">{{__('home.projects_menu')}}</a>

               </li>
                            @if (!Auth::guest() && (Auth::user()->isAdmin() || Auth::user()->isOrganization()))

               <a class="nav-link" href="/partners">{{__('home.partners_menu')}}</a>
               </li>
               @endif
               <li class="nav-item dropdown">
                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       {{__('home.language_menu')}}
                   </a>

                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href= 'locale/en'>{{__('home.english')}}</a>
                     <a class="dropdown-item" href='locale/sp'>{{__('home.spanish')}}</a>
                     <a class="dropdown-item" href= 'locale/fr'>{{__('home.french')}}</a>

             </li>


            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                <@guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                     @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                @if (!Auth::guest() && (Auth::user()->isAdmin() || Auth::user()->isOrganization()))
                <li class="nav-item">
                <a class="nav-link" href="/projectposts/create"> Crate a project </a>
                </li>
                @endif
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href= "/userprofile/{{Auth::user()->id}}">{{__('home.profile')}}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
</div>
</htm>
