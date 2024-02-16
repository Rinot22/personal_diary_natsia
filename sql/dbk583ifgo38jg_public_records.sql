create table records
(
    id               integer not null
        constraint records_pk
            primary key,
    date             date    not null,
    body_temperature integer not null,
    blood_pressure   integer not null,
    well_being       integer not null,
    comment          varchar(250),
    image            bytea,
    user_id          integer not null
        constraint records_users_id_fk
            references users
            on update cascade on delete cascade
);

alter table records
    owner to lvmikcipictwtf;

create unique index records_id_uindex
    on records (id);

INSERT INTO public.records (id, date, body_temperature, blood_pressure, well_being, comment, image, user_id) VALUES (1, '2024-02-16', 34, 324, 1, 'fghgfhdfgh', null, 1710630281);
INSERT INTO public.records (id, date, body_temperature, blood_pressure, well_being, comment, image, user_id) VALUES (1710630716, '2024-02-15', 39, 180, 1, 'im dying', '', 1710630281);
