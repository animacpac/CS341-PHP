CREATE TABLE public."production.categories"
(
    category_id smallint NOT NULL,
    category_name text COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "production.categories_pkey" PRIMARY KEY (category_id)
)

TABLESPACE pg_default;


CREATE TABLE public."production.products"
(
    product_id smallint NOT NULL,
    product_name text COLLATE pg_catalog."default" NOT NULL,
    type_id integer NOT NULL,
    category_id integer NOT NULL,
    list_price numeric(10,2) NOT NULL,
    CONSTRAINT "production.products_category_id_fkey" FOREIGN KEY (category_id)
        REFERENCES public."production.categories" (category_id) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT "production.types_type_id_fkey" FOREIGN KEY (type_id)
        REFERENCES public."production.types" (type_id) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE CASCADE
        NOT VALID
)

CREATE INDEX "fki_production.types_type_id_fkey"
    ON public."production.products" USING btree
    (type_id ASC NULLS LAST)
    TABLESPACE pg_default;


CREATE TABLE public."production.types"
(
    type_id smallint NOT NULL,
    type_name text COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "production.types_pkey" PRIMARY KEY (type_id)
)


CREATE TABLE public."sale.staff"
(
    staff_id smallint NOT NULL,
    first_name text COLLATE pg_catalog."default" NOT NULL,
    last_name text COLLATE pg_catalog."default" NOT NULL,
    email text COLLATE pg_catalog."default" NOT NULL,
    phone text COLLATE pg_catalog."default" NOT NULL,
    active smallint NOT NULL,
    store_id integer NOT NULL,
    manager_id integer,
    CONSTRAINT "sale.staff_pkey" PRIMARY KEY (staff_id),
    CONSTRAINT "sale.staff_store_id_fkey" FOREIGN KEY (store_id)
        REFERENCES public."sales.stores" (store_id) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE CASCADE
        NOT VALID
)

CREATE TABLE public."sales.customers"
(
    customer_id smallint NOT NULL,
    first_name text COLLATE pg_catalog."default" NOT NULL,
    last_name text COLLATE pg_catalog."default" NOT NULL,
    phone text COLLATE pg_catalog."default" NOT NULL,
    email text COLLATE pg_catalog."default" NOT NULL,
    street text COLLATE pg_catalog."default" NOT NULL,
    city text COLLATE pg_catalog."default" NOT NULL,
    state text COLLATE pg_catalog."default" NOT NULL,
    zip_code text COLLATE pg_catalog."default",
    CONSTRAINT "sales.customers_pkey" PRIMARY KEY (customer_id)
)

CREATE TABLE public."sales.order_items"
(
    order_id integer NOT NULL,
    item_id integer,
    product_id integer NOT NULL,
    quantity integer NOT NULL,
    list_price numeric(10,2) NOT NULL,
    discount numeric(4,2),
    CONSTRAINT "sales.order_items_pkey" PRIMARY KEY (order_id)
)

CREATE TABLE public."sales.orders"
(
    order_id integer NOT NULL DEFAULT nextval('"sales.orders_order_id_seq"'::regclass),
    order_date date NOT NULL,
    delivery_date date NOT NULL,
    store_id integer NOT NULL,
    staff_id integer NOT NULL,
    customer_id integer,
    CONSTRAINT "sales.orders_pkey" PRIMARY KEY (order_id),
    CONSTRAINT "sales.orders_customer_id_fkey" FOREIGN KEY (customer_id)
        REFERENCES public."sales.customers" (customer_id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT "sales.orders_staff_id_fkey" FOREIGN KEY (staff_id)
        REFERENCES public."sale.staff" (staff_id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT "sales.orders_store_id_fkey" FOREIGN KEY (store_id)
        REFERENCES public."sales.stores" (store_id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)

CREATE TABLE public."sales.stores"
(
    store_id smallint NOT NULL,
    store_name text COLLATE pg_catalog."default" NOT NULL,
    phone text COLLATE pg_catalog."default" NOT NULL,
    email text COLLATE pg_catalog."default" NOT NULL,
    city text COLLATE pg_catalog."default" NOT NULL,
    state text COLLATE pg_catalog."default" NOT NULL,
    zip_code text COLLATE pg_catalog."default",
    CONSTRAINT "sales.stores_pkey" PRIMARY KEY (store_id)
)