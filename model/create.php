<?php
$BDD->query('

CREATE TABLE USER
(
    id INT PRIMARY KEY NOT NULL,
    username VARCHAR(100),
    email VARCHAR(255),
    password VARCHAR(255),
)
CREATE TABLE FORMS
(
    id INT PRIMARY KEY NOT NULL,
    question VARCHAR (),
    reponse VARCHAR(),
    email VARCHAR(255),
)');

?>
