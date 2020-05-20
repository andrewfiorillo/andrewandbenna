<div id="nav" class="<?= $page ?>">
	<div id="nav-left">
		<a <?= $page == 'rsvp' ? 'class="selected"' : '' ?> href="/rsvp">rsvp</a>
		<a <?= $page == 'schedule' ? 'class="selected"' : '' ?> href="/schedule" >schedule</a>
		<a <?= $page == 'home' ? 'class="selected"' : '' ?> href="/">home</a>
	</div>
	<div id="nav-logo" onclick="window.location.href = '/';">
		<span class="logo-a">A</span><span class="logo-amp">&</span><span class="logo-b">B</span>
	</div>
	<div id="nav-right">
		<a <?= $page =='stay'?'class="selected"' : '' ?> href="/stay">where to stay</a>
		<a <?= $page == 'location' ? 'class="selected"' : '' ?> href="/location" >location</a>
	</div>
</div>