<div class="sidebar">

    <div class="sidebar-header">

        <h3>White Ivy</h3>

        <small>Admin Panel</small>

    </div>

    <ul class="sidebar-menu">

        <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}">
                <i class="bi bi-speedometer2"></i>
                Dashboard
            </a>
        </li>

        <li class="{{ request()->routeIs('games.*') ? 'active' : '' }}">
            <a href="{{ route('games.index') }}">
                <i class="bi bi-controller"></i>
                Games
            </a>
        </li>

        <li class="{{ request()->routeIs('schedules.*') ? 'active' : '' }}">
            <a href="{{ route('schedules.index') }}">
                <i class="bi bi-calendar-event"></i>
                Schedule
            </a>
        </li>

        <li class="{{ request()->routeIs('about.*') ? 'active' : '' }}">
            <a href="{{ route('about.edit') }}">
                <i class="bi bi-person-vcard"></i>
                About Channel
            </a>
        </li>

        <li class="{{ request()->routeIs('socials.*') ? 'active' : '' }}">
            <a href="{{ route('socials.index') }}">
                <i class="bi bi-share"></i>
                Social Media
            </a>
        </li>

    </ul>

</div>