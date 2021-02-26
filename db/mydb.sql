CREATE TABLE public.purchase
(
    id integer NOT NULL DEFAULT nextval('statement_id_seq'::regclass),
    userid integer NOT NULL,
    address character varying(255) COLLATE pg_catalog."default",
    amount character varying(255) COLLATE pg_catalog."default",
    credit_card character varying(255) COLLATE pg_catalog."default",
    CONSTRAINT statement_pkey PRIMARY KEY (id),
    CONSTRAINT statement_userid_fkey FOREIGN KEY (userid)
        REFERENCES public.users (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
CREATE TABLE public.users
(
    id integer NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 12341234 CACHE 1 ),
    username character varying(50) COLLATE pg_catalog."default",
    password character varying(255) COLLATE pg_catalog."default",
    fname character varying(255) COLLATE pg_catalog."default",
    lname character varying(255) COLLATE pg_catalog."default",
    street_name character varying(255) COLLATE pg_catalog."default",
    city_name character varying(255) COLLATE pg_catalog."default",
    zipcode character varying(255) COLLATE pg_catalog."default",
    CONSTRAINT users_pkey PRIMARY KEY (id)
)