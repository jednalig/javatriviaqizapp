@inject('request', 'Illuminate\Http\Request')
<style>
    .back2{
       background-color: maroon;
    
    }
   </style>
<div class="page-sidebar-wrapper back2">
    <div class="page-sidebar navbar-collapse collapse back2">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">

            <li class="{{ $request->segment(1) == 'tests' ? 'active' : '' }}">
                <a href="{{ route('tests.index') }}">
                    {{-- <i class="fa fa-quiz"></i> --}}
                    <span class="title">@lang('Quizes')</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'results' ? 'active' : '' }}">
                <a href="{{ route('results.index') }}">
                    {{-- <i class="fa fa-list"></i> --}}
                    <span class="title">@lang('Quiz Results')</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'tview' ? 'active' : '' }}">
                <a href="{{ route('tview.index') }}">
                    {{-- <i class="fa fa-address-card-o"></i> --}}
                    <span class="title">@lang('Trivia and Facts')</span>
                </a>
            </li>

            @if(Auth::user()->isAdmin())
            <li class="{{ $request->segment(1) == 'topics' ? 'active' : '' }}">
                <a href="{{ route('topics.index') }}">
                    {{-- <i class="fa fa-gears"></i> --}}
                    <span class="title">@lang('quickadmin.topics.title')</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'questions' ? 'active' : '' }}">
                <a href="{{ route('questions.index') }}">
                    {{-- <i class="fa fa-gears"></i> --}}
                    <span class="title">@lang('quickadmin.questions.title')</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'uploads' ? 'active' : '' }}">
                <a href="{{ route('uploads.index') }}">
                    {{-- <i class="fa fa-address-card-o"></i> --}}
                    <span class="title">@lang('Manage Trivia and Facts')</span>
                </a>
            </li>
           
            <li class="{{ $request->segment(1) == 'questions_options' ? 'active' : '' }}">
                <a href="{{ route('questions_options.index') }}">
                    {{-- <i class="fa fa-gears"></i> --}}
                    <span class="title">@lang('quickadmin.questions-options.title')</span>
                </a>
            </li>
            <li>
                <a href="#">
                    {{-- <i class="fa fa-users"></i> --}}
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ $request->segment(1) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('roles.index') }}">
                            {{-- <i class="fa fa-briefcase"></i> --}}
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(1) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('users.index') }}">
                            {{-- <i class="fa fa-user"></i> --}}
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(1) == 'user_actions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('user_actions.index') }}">
                            {{-- <i class="fa fa-th-list"></i> --}}
                            <span class="title">
                                @lang('quickadmin.user-actions.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    {{-- <i class="fa fa-arrow-left"></i> --}}
                    <span class="title">@lang('quickadmin.logout')</span>
                </a>
            </li>
        </ul>

      
    </div>
</div>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}
