create table articles
(
    id         integer      not null
        constraint articles_pk
            primary key,
    title      varchar(250) not null,
    acontent   text         not null,
    subcontent text         not null
);

alter table articles
    owner to lvmikcipictwtf;

INSERT INTO public.articles (id, title, acontent, subcontent) VALUES (1710631782, 'title', 'it''s a content', 'it''s a subcontent');
