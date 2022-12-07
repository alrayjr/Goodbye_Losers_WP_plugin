
<?php

function goodbye_loser_get_lyric() {
$lyrics = "Goodbye, Loser
Well, Hello, Weirdo
I cant believe your not working rn.
You're lookin' bad today
I can tell your stuggling
You're still dyin', you're still cryin
You're not gonna make it
I feel your pulse getting weaker
You should probably give up
Deadlines already passed
Give up while you can
Dreams always go away
Goodbye Loser
Well, hello, Loser
Why are you hear again?
You smell, BAD
I can tell your failing, Loser
You're still tryin', you're still lyin
You're Still here?
I feel the room closing in
Minimal effort, Minimal results
Welp you tired... sorta
I have a little faith in me, currently
Cant believe your still here
Promise, you'll go away soon
Dreams always fade, dont forget
You dont look so good
Are you even trying
Try Harder
Ugh, this again
Do something else
This is so not cash money
Kinda sus ngl
Got anything else to do";

// Here we split it into lines.
$lyrics = explode( "\n", $lyrics );

// Randomly choose a line.
return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// Echoes the chosen line,
function goodbye_loser() {
	$chosen = goodbye_loser_get_lyric();
	$lang   = '';
	if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
		$lang = ' lang="en"';
	}

	printf(
		'<p id="loser"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
		__( 'Words to make you lose' ),
		$lang,
		$chosen
	);
}
// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'goodbye_loser' );

