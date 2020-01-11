<?php
	echo('123: '.password_hash('123', PASSWORD_ARGON2I));
	echo('<br>');
	echo(password_hash('Junior12', PASSWORD_ARGON2I));
	echo('<br>');
	echo(password_hash('Aluno13', PASSWORD_ARGON2I));
?>