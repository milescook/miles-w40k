<?php

class WeaponBolter extends Weapon
{
	use WeaponRapidFire;
	
	private $strength = 4;
	private $ap = 5;
	private $id = "bolter";
	private $shotsCount=2;
	private $maxDistance = 24;
	
	
	
}
