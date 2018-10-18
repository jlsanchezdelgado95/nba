<?php

return array(
    "routes" => array(
        "/" => array(
            "route" => "/",
            "page" => "main.php"
        ),

        "historia" => array(
            "route" => "/historia",
            "page" => "historia.php"
        ),

        "todosLosJugadores" => array(
            "route" => "/jugadores",
            "page" => "jugadores.php"
        ),

        "jugadores" => array(
            "route" => "/jugadores/:idjugador",
            "page" => "jugadores.php"
        ),
        "Login" => array(
            "route" => "/login",
            "page" => "login.html"
        ),
        "compruebaLogin" => array(
            "route" => "/compruebaLogin",
            "page" => "compruebaLogin.php"
        ),
        "logout" => array(
			"route" => "/logout",
			"page" => "logout.php"
		),
		"preferencias" => array(
			"route" => "/preferencias",
			"page" => "preferencias.php"
        ),
        "formularioAvatar" => array(
            "route" => "formularioAvatar",
            "page" => "formularioAvatar.html"
        ),
		"cambiarAvatar" => array(
			"route" => "/cambiarAvatar",
			"page" => "cambiarAvatar.php"
		),
    ),
    "error" => "error.php"
);
?>