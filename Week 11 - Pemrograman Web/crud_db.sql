create database crud_db;

use crud_db;

create table `users` (
    `id` int(11) not null auto_increment,
    `name` varchar(30),
    `email` varchar(50),
    `mobile` varchar(15),
    primary key (`id`)
)