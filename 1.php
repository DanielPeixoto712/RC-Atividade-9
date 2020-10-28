<?php
$media=rand(1,20);
switch ($media) {
	case ($media >=9.5):
	print("A média do aluno é $media, O aluno está aprovado");
		break;

	case ($media >8 && $media <9.5):
			print("A média do aluno é $media, O aluno foi admitido a recuperação");
			break;	

	case ($media >=8):
			print("A nota do aluno é $media, O aluno foi aprovado");
			break;
		}
		?>