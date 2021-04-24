<nav class="sidebar-nav pt-7">
    <div class="sidebar--sticky">
        <div class="top">
            <x-guardian-avatar :user="auth()->user()" uniqueId="sidebar" delete></x-guardian-avatar>

            <ul class="nav-links m-4">
                <x-guardian-sidebar-nav-button href="{{ route('guardian.dashboard') }}">
                    <x-slot name="icon">
                        <svg version="1.1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">

                <path d="M366.292,215.99L241.417,325.781c-0.167,0.146-0.333,0.292-0.479,0.448c-4.042,4.021-6.271,9.385-6.271,15.104
                    c0,11.76,9.563,21.333,21.333,21.333c5.667,0,11.021-2.208,15.563-6.75l109.792-124.875c3.708-4.219,3.5-10.604-0.479-14.583
                    C376.896,212.49,370.542,212.281,366.292,215.99z"/>
                            <path d="M256,85.333c-141.167,0-256,114.844-256,256c0,26.479,4.104,52.688,12.167,77.917c1.417,4.417,5.521,7.417,10.167,7.417
                    h467.333c4.646,0,8.75-3,10.167-7.417C507.896,394.021,512,367.813,512,341.333C512,200.177,397.167,85.333,256,85.333z
                     M458.667,352h10.126c-0.542,10.755-1.628,21.471-3.772,32H46.979c-2.145-10.529-3.23-21.245-3.772-32h10.126
                    C59.229,352,64,347.229,64,341.333c0-5.896-4.771-10.667-10.667-10.667H43.207c1.547-31.043,9.645-60.337,23.117-86.522
                    l8.822,5.095c1.688,0.969,3.521,1.427,5.333,1.427c3.667,0,7.271-1.906,9.229-5.333c2.958-5.104,1.208-11.625-3.896-14.573
                    l-8.81-5.089c16.421-25.323,38.02-46.919,63.342-63.339l5.092,8.823c1.958,3.417,5.563,5.333,9.229,5.333
                    c1.813,0,3.646-0.458,5.333-1.427c5.104-2.948,6.854-9.469,3.896-14.573l-5.095-8.827c26.188-13.477,55.487-21.576,86.533-23.122
                    v10.126c0,5.896,4.771,10.667,10.667,10.667s10.667-4.771,10.667-10.667V128.54c31.046,1.547,60.345,9.645,86.533,23.121
                    l-5.095,8.828c-2.958,5.104-1.208,11.625,3.896,14.573c1.688,0.969,3.521,1.427,5.333,1.427c3.667,0,7.271-1.917,9.229-5.333
                    l5.092-8.823c25.323,16.419,46.922,38.016,63.342,63.339l-8.81,5.089c-5.104,2.948-6.854,9.469-3.896,14.573
                    c1.958,3.427,5.563,5.333,9.229,5.333c1.812,0,3.646-0.458,5.333-1.427l8.823-5.095c13.473,26.185,21.569,55.479,23.116,86.522
                    h-10.126c-5.896,0-10.667,4.771-10.667,10.667C448,347.229,452.771,352,458.667,352z"/>
    </svg>
                    </x-slot>
                    Dashboard
                </x-guardian-sidebar-nav-button>

                <x-guardian-sidebar-nav-button  href="{{ route('guardian.profile') }}" >
                    <x-slot name="icon">
                        <svg fill="currentColor"
                             viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </x-slot>
                    Profile
                </x-guardian-sidebar-nav-button>

{{--                <x-guardian-sidebar-nav-button  href="{{ route('guardian.markdown.index') }}" >--}}
{{--                    <x-slot name="icon">--}}
{{--                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd"></path><path d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z"></path></svg>--}}
{{--                    </x-slot>--}}
{{--                    Markdowns--}}
{{--                </x-guardian-sidebar-nav-button>--}}

                {{ $slot }}
            </ul>
        </div>
        <div class="sidebar__power m-4">
            <span class="icon">
                <svg version="1.1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 489.888 489.888" style="enable-background:new 0 0 489.888 489.888;" xml:space="preserve">
                <path d="M25.383,290.5c-7.2-77.5,25.9-147.7,80.8-192.3c21.4-17.4,53.4-2.5,53.4,25l0,0c0,10.1-4.8,19.4-12.6,25.7
                            c-38.9,31.7-62.3,81.7-56.6,136.9c7.4,71.9,65,130.1,136.8,138.1c93.7,10.5,173.3-62.9,173.3-154.5c0-48.6-22.5-92.1-57.6-120.6
                            c-7.8-6.3-12.5-15.6-12.5-25.6l0,0c0-27.2,31.5-42.6,52.7-25.6c50.2,40.5,82.4,102.4,82.4,171.8c0,126.9-107.8,229.2-236.7,219.9
                            C122.183,481.8,35.283,396.9,25.383,290.5z M244.883,0c-18,0-32.5,14.6-32.5,32.5v149.7c0,18,14.6,32.5,32.5,32.5
                            s32.5-14.6,32.5-32.5V32.5C277.383,14.6,262.883,0,244.883,0z"/></svg>
            </span>
            <a onclick="event.preventDefault(); document.getElementById('logout').submit()" href="#">
                LOGOUT
            </a>

            <form style="display: none" id="logout" action="{{ route('logout') }}" method="post">
                @csrf
            </form>
        </div>
    </div>

</nav>
