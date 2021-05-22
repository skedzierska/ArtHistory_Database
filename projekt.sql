create database art_project;
use art_project;

create table art_period1
(
		Art_movement varchar (20) not null,
        Origin varchar (20) not null,
        Period varchar (20) not null,
        Artist varchar (200) not null,
        Name_ofp varchar (200) not null
);
insert into art_period1 values ( "Średniowiecze", "Europa", "400-1350", "Jan van Eyck","Portret małżonków Arnolfinich");
insert into art_period1 values ( "Renesans", "Włochy", "1350-1510", "Michał Anioł", "Stworzenie Adama");
insert into art_period1 values ( "Barok", "Włochy", "1590-1680", "Rembrandt Harmenszoon van Rĳn", "Lekcja anatomii doktora Tulpa");
insert into art_period1 values ( "Romantyzm", "Niemcy", "1790-1840", "Caspar David Friedrich", "Wędrowiec nad morzem mgły");
insert into art_period1 values ( "Impresjonizm", "Francja", "1886-1905", "Claude Monet", "Impresja, wschód słońca");
insert into art_period1 values ( "Ekspresjonizm", "Nimecy", "1905-1924", "Amedeo Modigliani", "Kobieta w kapeluszu");
insert into art_period1 values ( "Surrealizm", "Francja", "1924-1950", "Salvador Dali", "Trwałość pamięci");

select * from art_period1;


create table users(
	Usernames varchar (200) not null,
    Passwords varchar (200) not null
);
select * from users;

create table comments(
	id int,
    Usernames varchar (200) not null,
    Comments text
);
select * from comments;
DROP TABLE comments ;
