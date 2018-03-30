<?php

/**
 * Created by PhpStorm.
 * User: wrodrigues
 * Date: 28/03/2018
 * Time: 13:07
 */
require_once ('Users.php');
class Painel_admin extends Users
{

	public function table()
	{

		return $this->index;


	}

}
