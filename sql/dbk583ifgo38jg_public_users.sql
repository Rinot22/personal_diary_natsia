create table users
(
    id       integer           not null
        constraint users_pk
            primary key,
    email    varchar(250)      not null,
    password varchar(250)      not null,
    name     varchar(250)      not null,
    role     integer default 1 not null
        constraint users_roles_id_fk
            references roles
);

alter table users
    owner to lvmikcipictwtf;

create unique index users_email_uindex
    on users (email);

create unique index users_id_uindex
    on users (id);

create unique index users_password_uindex
    on users (password);

INSERT INTO public.users (id, email, password, name, role) VALUES (1710622389, 'jarik@gmail.com', '$2y$10$CPo.bAf9k5N8gvOl9374y.rI8YfANNS49Vn1wdCPT2UmICSdCx7Va', 'Jarik', 2);
INSERT INTO public.users (id, email, password, name, role) VALUES (1710622936, 'smala@gmail.com', '$2y$10$TVNRUvTIv6oWBGx2ainFAuWH2iYZQAgl7QAagkyCaf6rTLGJuVOiG', 'Sasha', 1);
INSERT INTO public.users (id, email, password, name, role) VALUES (1710630281, 'dashamartynyuk3@gmail.com', '$2y$10$IzcH8jNfBUZ9QqLJsuP//umRNdNlxJRuErVX4ThNCWQbACb.u2/Ve', 'Darya', 2);
