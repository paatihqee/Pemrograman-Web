create table if not exists `user` (
    `id` int(11) not null auto_increment,
    `nama` varchar(50) not null,
    `alamat` text not null,
    `pekerjaan` varchar(50) not null,
    primary key (`id`) 
) ENGINE=InnoDB default CHARSET=latini auto_increment=64;

insert into `user` (`id`, `nama`, `alamat`, `pekerjaan`) values
(1, 'Andi', 'Surabaya', 'web programmer')
(2, 'Santoso', 'Jakarta', 'web designer')
(6, 'Samsul', 'Sumedang', 'pegawai');