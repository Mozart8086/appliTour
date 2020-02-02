<?php 

	switch ($rooi["DepartementActuelMissionnaire"]) {
		case "Compassion":
			echo "Actes de compassion";
			break;
		case "Prophetique":
			echo "Action prophétique";
			break;
		case "direction_campagne":
			echo "Direction de campagne";
			break;
		case "EnfanceDeVie":
			echo "Enfance de vie";
			break;
		case "Evangelisation":
			echo "Evangélisation plein air porte à porte";
			break;
		case "EventManager":
			echo "Event manager";
			break;
		case "FlammesDeVie":
			echo "Flammes de vie";
			break;
		case "Healing":
			echo "Healing team";
			break;
		case "MedecineDeVie":
			echo "Médecine de vie";
			break;
		case "Sono":
			echo "Régie technique";
			break;
		case "RestaurationLeaman":
			echo "Restauration Leaman";
			break;
		case "SmalahEnAction":
			echo "Smalah en mission";
			break;
		case "Boutique":
			echo "Sociales (boutique 931)";
			break;
		case "Temoignage":
			echo "Témoignage de vie";
			break;
		case "Temoins":
			echo "Témoins et conseillers";
			break;
		default:
			echo $rooi["DepartementActuelMissionnaire"];
			break;
		}