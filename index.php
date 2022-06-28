<?php
	include 'config.inc.php';

	if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
		extract($_POST);
		$validate = function( $saveur, $quantite ) {
			return is_string( $saveur )
				&& !empty( trim( $saveur ) )
				&& is_numeric( intval( $quantite ) );
		};

		if ( isset( $saveur ) && isset( $quantite ) && $validate( $saveur, $quantite ) ) {
			include_once './db/insert-into-ventes.php';
			$success_message = 'Operation success!';
		} else {
			$error_message = "Error: fields values wrong format.";
		}
	}
	include_once './db/select-ventes.php';
	include "views/app.html.php";
