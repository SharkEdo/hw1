DROP DATABASE IF EXISTS HW1;
Create DATABASE hw1;
USE hw1;

CREATE TABLE users (
    id integer primary key auto_increment,
    username varchar(16) not null unique,
    password varchar(255) not null,
    email varchar(255) not null unique,
    name varchar(255) not null,
    surname varchar(255) not null,
    propic varchar(255)
) Engine = InnoDB;

CREATE TABLE C (
    id integer,
    user integer not null,
    content json,
    
    primary key (id, user)
) Engine = InnoDB;

CREATE TABLE Html (
    id integer,
    user integer not null,
    content json,
    
	primary key (id, user)
) Engine = InnoDB;