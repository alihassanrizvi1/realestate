PGDMP                          {            immoheld    15.1    15.1     ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            ?           1262    16397    immoheld    DATABASE     |   CREATE DATABASE immoheld WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_Sweden.1252';
    DROP DATABASE immoheld;
                postgres    false            ?            1259    16398 
   properties    TABLE     ?   CREATE TABLE public.properties (
    id integer NOT NULL,
    title character varying,
    address character varying(200),
    price double precision,
    size character varying(10)
);
    DROP TABLE public.properties;
       public         heap    postgres    false            ?            1259    16401    properties_id_seq    SEQUENCE     ?   ALTER TABLE public.properties ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.properties_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    214            ?          0    16398 
   properties 
   TABLE DATA           E   COPY public.properties (id, title, address, price, size) FROM stdin;
    public          postgres    false    214   ?       ?           0    0    properties_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.properties_id_seq', 13, true);
          public          postgres    false    215            ?   G  x?}??r?0?ϛ??t??=8=?P??,4c?8!hy?.H??-?????V??q<a?V??kx?Na?????SxW?h"I?	K!??{???A??RQ?',?/??n?}???d?z|?-۰???-`۝??r<?6Xu??1lTZl?c݆KI??IȞa?Q ??rX?S?g???D?*~???;?XJ?????݂f0?䒭?S]Lק??鬘_t<Ps?G5???}y,^{?G??V?'*?h?f?bX?H??vG????y??)V?q?????tt&R?V?զ{??DSy7??D??D6??QdUy?w??(V???7??/Y ??     