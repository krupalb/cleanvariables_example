create table cleanVariables_users
(
    id         int(6) unsigned auto_increment primary key,
    name       varchar(100) not null,
    email      varchar(100) not null,
    password   varchar(255) not null,
    created_at timestamp default CURRENT_TIMESTAMP not null
);
