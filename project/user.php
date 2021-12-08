<?php

function isUser()
	{
		if (!empty($_SESSION['username']) && !empty($_SESSION['id']))
		{
			return true;
		}

		return false;
	}
?>