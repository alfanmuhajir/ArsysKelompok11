{{-- blade menu --}}
<div>
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm bg-warning">

        <!-- Links -->
        <ul class="navbar-nav">
            <li wire:click="setMenu('announcement')" style="cursor: pointer;"class="nav-item">
                <a class="nav-link"  >Announcement</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" >Link 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" >Link 3</a>
            </li>
        </ul>
    
    </nav>
</div>
