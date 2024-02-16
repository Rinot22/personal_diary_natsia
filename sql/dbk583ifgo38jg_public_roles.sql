create table roles
(
    id   integer      not null
        constraint roles_pk
            primary key,
    role varchar(100) not null
);

alter table roles
    owner to lvmikcipictwtf;

INSERT INTO public.roles (id, role) VALUES (1, 'user');
INSERT INTO public.roles (id, role) VALUES (2, 'admin');
