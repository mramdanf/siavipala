--
-- PostgreSQL database dump
--

-- Dumped from database version 9.3.23
-- Dumped by pg_dump version 9.3.23
-- Started on 2018-10-13 06:11:00 WIB

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 1 (class 3079 OID 11789)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2425 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 217 (class 1259 OID 16800)
-- Name: aktivitas_harian; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.aktivitas_harian (
    id integer NOT NULL,
    nama character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.aktivitas_harian OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 16798)
-- Name: aktivitas_harian_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.aktivitas_harian_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.aktivitas_harian_id_seq OWNER TO postgres;

--
-- TOC entry 2426 (class 0 OID 0)
-- Dependencies: 216
-- Name: aktivitas_harian_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.aktivitas_harian_id_seq OWNED BY public.aktivitas_harian.id;


--
-- TOC entry 219 (class 1259 OID 16808)
-- Name: aktivitas_harian_patroli; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.aktivitas_harian_patroli (
    id integer NOT NULL,
    aktivitas_harian_id integer NOT NULL,
    kegiatan_patroli_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.aktivitas_harian_patroli OWNER TO postgres;

--
-- TOC entry 218 (class 1259 OID 16806)
-- Name: aktivitas_harian_patroli_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.aktivitas_harian_patroli_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.aktivitas_harian_patroli_id_seq OWNER TO postgres;

--
-- TOC entry 2427 (class 0 OID 0)
-- Dependencies: 218
-- Name: aktivitas_harian_patroli_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.aktivitas_harian_patroli_id_seq OWNED BY public.aktivitas_harian_patroli.id;


--
-- TOC entry 213 (class 1259 OID 16771)
-- Name: anggota; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.anggota (
    id integer NOT NULL,
    nama character varying(400) NOT NULL,
    kategori character varying(400) NOT NULL,
    email character varying(200) NOT NULL,
    no_telepon character varying(20) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.anggota OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 16769)
-- Name: anggota_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.anggota_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.anggota_id_seq OWNER TO postgres;

--
-- TOC entry 2428 (class 0 OID 0)
-- Dependencies: 212
-- Name: anggota_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.anggota_id_seq OWNED BY public.anggota.id;


--
-- TOC entry 215 (class 1259 OID 16782)
-- Name: anggota_patroli; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.anggota_patroli (
    id integer NOT NULL,
    anggota_id integer NOT NULL,
    kegiatan_patroli_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.anggota_patroli OWNER TO postgres;

--
-- TOC entry 214 (class 1259 OID 16780)
-- Name: anggota_patroli_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.anggota_patroli_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.anggota_patroli_id_seq OWNER TO postgres;

--
-- TOC entry 2429 (class 0 OID 0)
-- Dependencies: 214
-- Name: anggota_patroli_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.anggota_patroli_id_seq OWNED BY public.anggota_patroli.id;


--
-- TOC entry 235 (class 1259 OID 17953)
-- Name: cuaca; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.cuaca (
    id integer NOT NULL,
    nama character varying(500),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.cuaca OWNER TO postgres;

--
-- TOC entry 234 (class 1259 OID 17951)
-- Name: cuaca_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.cuaca_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cuaca_id_seq OWNER TO postgres;

--
-- TOC entry 2430 (class 0 OID 0)
-- Dependencies: 234
-- Name: cuaca_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.cuaca_id_seq OWNED BY public.cuaca.id;


--
-- TOC entry 233 (class 1259 OID 17942)
-- Name: curah_hujan; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.curah_hujan (
    id integer NOT NULL,
    nama character varying(500),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.curah_hujan OWNER TO postgres;

--
-- TOC entry 232 (class 1259 OID 17940)
-- Name: curah_hujan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.curah_hujan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.curah_hujan_id_seq OWNER TO postgres;

--
-- TOC entry 2431 (class 0 OID 0)
-- Dependencies: 232
-- Name: curah_hujan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.curah_hujan_id_seq OWNED BY public.curah_hujan.id;


--
-- TOC entry 181 (class 1259 OID 16526)
-- Name: daops; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.daops (
    id integer NOT NULL,
    provinsi_id integer NOT NULL,
    nama character varying(400) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.daops OWNER TO postgres;

--
-- TOC entry 180 (class 1259 OID 16524)
-- Name: daops_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.daops_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.daops_id_seq OWNER TO postgres;

--
-- TOC entry 2432 (class 0 OID 0)
-- Dependencies: 180
-- Name: daops_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.daops_id_seq OWNED BY public.daops.id;


--
-- TOC entry 189 (class 1259 OID 16586)
-- Name: desa_kelurahan; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.desa_kelurahan (
    id integer NOT NULL,
    posko_id integer,
    nama character varying(400),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    kecamatan_id integer
);


ALTER TABLE public.desa_kelurahan OWNER TO postgres;

--
-- TOC entry 188 (class 1259 OID 16584)
-- Name: desa_kelurahan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.desa_kelurahan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.desa_kelurahan_id_seq OWNER TO postgres;

--
-- TOC entry 2433 (class 0 OID 0)
-- Dependencies: 188
-- Name: desa_kelurahan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.desa_kelurahan_id_seq OWNED BY public.desa_kelurahan.id;


--
-- TOC entry 243 (class 1259 OID 18078)
-- Name: dokumentasi; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.dokumentasi (
    id integer NOT NULL,
    kegiatan_patroli_id integer,
    url_file character varying(500),
    tipe_file character varying(200),
    deskripsi character varying(900),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.dokumentasi OWNER TO postgres;

--
-- TOC entry 242 (class 1259 OID 18076)
-- Name: dokumentasi_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.dokumentasi_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.dokumentasi_id_seq OWNER TO postgres;

--
-- TOC entry 2434 (class 0 OID 0)
-- Dependencies: 242
-- Name: dokumentasi_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.dokumentasi_id_seq OWNED BY public.dokumentasi.id;


--
-- TOC entry 175 (class 1259 OID 16475)
-- Name: hak_akses; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.hak_akses (
    id integer NOT NULL,
    nama character varying(300) NOT NULL,
    menu character varying(400) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.hak_akses OWNER TO postgres;

--
-- TOC entry 174 (class 1259 OID 16473)
-- Name: hak_akses_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hak_akses_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hak_akses_id_seq OWNER TO postgres;

--
-- TOC entry 2435 (class 0 OID 0)
-- Dependencies: 174
-- Name: hak_akses_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hak_akses_id_seq OWNED BY public.hak_akses.id;


--
-- TOC entry 211 (class 1259 OID 16755)
-- Name: hasil_uji; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.hasil_uji (
    id integer NOT NULL,
    patroli_darat_id integer NOT NULL,
    nama_pengujian character varying(400) NOT NULL,
    hasil character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.hasil_uji OWNER TO postgres;

--
-- TOC entry 210 (class 1259 OID 16753)
-- Name: hasil_uji_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hasil_uji_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hasil_uji_id_seq OWNER TO postgres;

--
-- TOC entry 2436 (class 0 OID 0)
-- Dependencies: 210
-- Name: hasil_uji_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hasil_uji_id_seq OWNED BY public.hasil_uji.id;


--
-- TOC entry 223 (class 1259 OID 16834)
-- Name: hotspot; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.hotspot (
    id integer NOT NULL,
    satelit_id integer NOT NULL,
    kegiatan_patroli_id integer NOT NULL,
    deskripsi character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.hotspot OWNER TO postgres;

--
-- TOC entry 222 (class 1259 OID 16832)
-- Name: hotspot_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hotspot_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hotspot_id_seq OWNER TO postgres;

--
-- TOC entry 2437 (class 0 OID 0)
-- Dependencies: 222
-- Name: hotspot_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hotspot_id_seq OWNED BY public.hotspot.id;


--
-- TOC entry 225 (class 1259 OID 16879)
-- Name: inventori; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.inventori (
    id integer NOT NULL,
    nama character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.inventori OWNER TO postgres;

--
-- TOC entry 224 (class 1259 OID 16877)
-- Name: inventori_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.inventori_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.inventori_id_seq OWNER TO postgres;

--
-- TOC entry 2438 (class 0 OID 0)
-- Dependencies: 224
-- Name: inventori_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.inventori_id_seq OWNED BY public.inventori.id;


--
-- TOC entry 227 (class 1259 OID 16887)
-- Name: inventori_patroli; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.inventori_patroli (
    id integer NOT NULL,
    kegiatan_patroli_id integer NOT NULL,
    inventori_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.inventori_patroli OWNER TO postgres;

--
-- TOC entry 226 (class 1259 OID 16885)
-- Name: inventori_patroli_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.inventori_patroli_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.inventori_patroli_id_seq OWNER TO postgres;

--
-- TOC entry 2439 (class 0 OID 0)
-- Dependencies: 226
-- Name: inventori_patroli_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.inventori_patroli_id_seq OWNED BY public.inventori_patroli.id;


--
-- TOC entry 237 (class 1259 OID 18004)
-- Name: kategori_kondisi_vegetasi; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.kategori_kondisi_vegetasi (
    id integer NOT NULL,
    nama character varying(500),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.kategori_kondisi_vegetasi OWNER TO postgres;

--
-- TOC entry 236 (class 1259 OID 18002)
-- Name: kategori_kondisi_vegetasi_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.kategori_kondisi_vegetasi_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kategori_kondisi_vegetasi_id_seq OWNER TO postgres;

--
-- TOC entry 2440 (class 0 OID 0)
-- Dependencies: 236
-- Name: kategori_kondisi_vegetasi_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kategori_kondisi_vegetasi_id_seq OWNED BY public.kategori_kondisi_vegetasi.id;


--
-- TOC entry 191 (class 1259 OID 16599)
-- Name: kategori_patroli; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.kategori_patroli (
    id integer NOT NULL,
    nama character varying(400) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.kategori_patroli OWNER TO postgres;

--
-- TOC entry 190 (class 1259 OID 16597)
-- Name: kategori_patroli_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.kategori_patroli_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kategori_patroli_id_seq OWNER TO postgres;

--
-- TOC entry 2441 (class 0 OID 0)
-- Dependencies: 190
-- Name: kategori_patroli_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kategori_patroli_id_seq OWNED BY public.kategori_patroli.id;


--
-- TOC entry 185 (class 1259 OID 16552)
-- Name: kecamatan; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.kecamatan (
    id integer NOT NULL,
    kota_kab_id integer,
    nama character varying(400),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.kecamatan OWNER TO postgres;

--
-- TOC entry 184 (class 1259 OID 16550)
-- Name: kecamatan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.kecamatan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kecamatan_id_seq OWNER TO postgres;

--
-- TOC entry 2442 (class 0 OID 0)
-- Dependencies: 184
-- Name: kecamatan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kecamatan_id_seq OWNED BY public.kecamatan.id;


--
-- TOC entry 193 (class 1259 OID 16621)
-- Name: kegiatan_patroli; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.kegiatan_patroli (
    id integer NOT NULL,
    kategori_patroli_id integer,
    tanggal_patroli date,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.kegiatan_patroli OWNER TO postgres;

--
-- TOC entry 192 (class 1259 OID 16619)
-- Name: kegiatan_patroli_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.kegiatan_patroli_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kegiatan_patroli_id_seq OWNER TO postgres;

--
-- TOC entry 2443 (class 0 OID 0)
-- Dependencies: 192
-- Name: kegiatan_patroli_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kegiatan_patroli_id_seq OWNED BY public.kegiatan_patroli.id;


--
-- TOC entry 231 (class 1259 OID 17931)
-- Name: kondisi_karhutla; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.kondisi_karhutla (
    id integer NOT NULL,
    nama character varying(500),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.kondisi_karhutla OWNER TO postgres;

--
-- TOC entry 230 (class 1259 OID 17929)
-- Name: kondisi_karhutla_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.kondisi_karhutla_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kondisi_karhutla_id_seq OWNER TO postgres;

--
-- TOC entry 2444 (class 0 OID 0)
-- Dependencies: 230
-- Name: kondisi_karhutla_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kondisi_karhutla_id_seq OWNED BY public.kondisi_karhutla.id;


--
-- TOC entry 209 (class 1259 OID 16737)
-- Name: kondisi_sumber_air; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.kondisi_sumber_air (
    id integer NOT NULL,
    patroli_darat_id integer NOT NULL,
    sumber_air_id integer NOT NULL,
    latitude double precision NOT NULL,
    longitude double precision NOT NULL,
    panjang double precision NOT NULL,
    lebar double precision NOT NULL,
    kedalaman double precision NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.kondisi_sumber_air OWNER TO postgres;

--
-- TOC entry 208 (class 1259 OID 16735)
-- Name: kondisi_sumber_air_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.kondisi_sumber_air_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kondisi_sumber_air_id_seq OWNER TO postgres;

--
-- TOC entry 2445 (class 0 OID 0)
-- Dependencies: 208
-- Name: kondisi_sumber_air_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kondisi_sumber_air_id_seq OWNED BY public.kondisi_sumber_air.id;


--
-- TOC entry 205 (class 1259 OID 16710)
-- Name: kondisi_tanah; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.kondisi_tanah (
    id integer NOT NULL,
    patroli_darat_id integer NOT NULL,
    tanah_id integer NOT NULL,
    latitude double precision NOT NULL,
    longitude double precision NOT NULL,
    luas double precision NOT NULL,
    kedalaman_gambut double precision NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    potensi_karhutla_id integer,
    kondisi_karhutla_id integer
);


ALTER TABLE public.kondisi_tanah OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 16708)
-- Name: kondisi_tanah_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.kondisi_tanah_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kondisi_tanah_id_seq OWNER TO postgres;

--
-- TOC entry 2446 (class 0 OID 0)
-- Dependencies: 204
-- Name: kondisi_tanah_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kondisi_tanah_id_seq OWNED BY public.kondisi_tanah.id;


--
-- TOC entry 201 (class 1259 OID 16684)
-- Name: kondisi_vegetasi; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.kondisi_vegetasi (
    id integer NOT NULL,
    patroli_darat_id integer,
    vegetasi_id integer,
    latitude double precision NOT NULL,
    longitude double precision NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    kategori_kondisi_vegetasi_id integer,
    potensi_karhutla_id integer,
    kondisi_karhutla_id integer,
    luas_tanah double precision
);


ALTER TABLE public.kondisi_vegetasi OWNER TO postgres;

--
-- TOC entry 200 (class 1259 OID 16682)
-- Name: kondisi_vegetasi_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.kondisi_vegetasi_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kondisi_vegetasi_id_seq OWNER TO postgres;

--
-- TOC entry 2447 (class 0 OID 0)
-- Dependencies: 200
-- Name: kondisi_vegetasi_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kondisi_vegetasi_id_seq OWNED BY public.kondisi_vegetasi.id;


--
-- TOC entry 183 (class 1259 OID 16539)
-- Name: kota_kab; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.kota_kab (
    id integer NOT NULL,
    daops_id integer,
    nama character varying(400),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.kota_kab OWNER TO postgres;

--
-- TOC entry 182 (class 1259 OID 16537)
-- Name: kota_kab_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.kota_kab_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.kota_kab_id_seq OWNER TO postgres;

--
-- TOC entry 2448 (class 0 OID 0)
-- Dependencies: 182
-- Name: kota_kab_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.kota_kab_id_seq OWNED BY public.kota_kab.id;


--
-- TOC entry 177 (class 1259 OID 16486)
-- Name: level_pengguna; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.level_pengguna (
    id integer NOT NULL,
    pengguna_id integer NOT NULL,
    hak_akses_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.level_pengguna OWNER TO postgres;

--
-- TOC entry 176 (class 1259 OID 16484)
-- Name: level_pengguna_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.level_pengguna_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.level_pengguna_id_seq OWNER TO postgres;

--
-- TOC entry 2449 (class 0 OID 0)
-- Dependencies: 176
-- Name: level_pengguna_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.level_pengguna_id_seq OWNED BY public.level_pengguna.id;


--
-- TOC entry 171 (class 1259 OID 16425)
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.migrations (
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 16655)
-- Name: patroli_darat; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.patroli_darat (
    id integer NOT NULL,
    kegiatan_patroli_id integer,
    desa_kelurahan_id integer,
    suhu double precision,
    kelembaban double precision,
    kecepatan_angin double precision,
    dc_kk character varying(100),
    ffmc_kkas character varying(100),
    fwi character varying(100),
    aktivitas_masyarakat character varying(255),
    keterangan_lokasi character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    cuaca_pagi_id integer,
    cuaca_sore_id integer,
    cuaca_siang_id integer,
    curah_hujan_id integer
);


ALTER TABLE public.patroli_darat OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 16653)
-- Name: patroli_darat_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.patroli_darat_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.patroli_darat_id_seq OWNER TO postgres;

--
-- TOC entry 2450 (class 0 OID 0)
-- Dependencies: 196
-- Name: patroli_darat_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.patroli_darat_id_seq OWNED BY public.patroli_darat.id;


--
-- TOC entry 195 (class 1259 OID 16634)
-- Name: patroli_udara; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.patroli_udara (
    id integer NOT NULL,
    kegiatan_patroli_id integer,
    desa_kelurahan_id integer,
    latitude double precision,
    longitude double precision,
    confidence integer,
    distance integer,
    kegiatan character varying(255),
    radial integer,
    keterangan character varying(255),
    suhu double precision,
    kelembaban double precision,
    kecepatan_angin double precision,
    dc_kk character varying(100),
    ffmc_kkas character varying(100),
    fwi character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    cuaca_siang_id integer NOT NULL,
    cuaca_pagi_id integer NOT NULL,
    cuaca_sore_id integer NOT NULL,
    curah_hujan_id integer NOT NULL
);


ALTER TABLE public.patroli_udara OWNER TO postgres;

--
-- TOC entry 194 (class 1259 OID 16632)
-- Name: patroli_udara_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.patroli_udara_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.patroli_udara_id_seq OWNER TO postgres;

--
-- TOC entry 2451 (class 0 OID 0)
-- Dependencies: 194
-- Name: patroli_udara_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.patroli_udara_id_seq OWNED BY public.patroli_udara.id;


--
-- TOC entry 241 (class 1259 OID 18070)
-- Name: pemadaman; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.pemadaman (
    id integer NOT NULL,
    patroli_darat_id integer,
    latitude double precision,
    longitude double precision,
    luas_terbakar double precision,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.pemadaman OWNER TO postgres;

--
-- TOC entry 240 (class 1259 OID 18068)
-- Name: pemadaman_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.pemadaman_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pemadaman_id_seq OWNER TO postgres;

--
-- TOC entry 2452 (class 0 OID 0)
-- Dependencies: 240
-- Name: pemadaman_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.pemadaman_id_seq OWNED BY public.pemadaman.id;


--
-- TOC entry 173 (class 1259 OID 16464)
-- Name: pengguna; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.pengguna (
    id integer NOT NULL,
    nama character varying(255) NOT NULL,
    email character varying(300) NOT NULL,
    password character varying(200) NOT NULL,
    no_telepon character varying(20) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    remember_token character varying(100)
);


ALTER TABLE public.pengguna OWNER TO postgres;

--
-- TOC entry 172 (class 1259 OID 16462)
-- Name: pengguna_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.pengguna_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pengguna_id_seq OWNER TO postgres;

--
-- TOC entry 2453 (class 0 OID 0)
-- Dependencies: 172
-- Name: pengguna_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.pengguna_id_seq OWNED BY public.pengguna.id;


--
-- TOC entry 187 (class 1259 OID 16573)
-- Name: posko; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.posko (
    id integer NOT NULL,
    kecamatan_id integer NOT NULL,
    nama character varying(400) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.posko OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 16571)
-- Name: posko_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.posko_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.posko_id_seq OWNER TO postgres;

--
-- TOC entry 2454 (class 0 OID 0)
-- Dependencies: 186
-- Name: posko_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.posko_id_seq OWNED BY public.posko.id;


--
-- TOC entry 239 (class 1259 OID 18016)
-- Name: potensi_karhutla; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.potensi_karhutla (
    id integer NOT NULL,
    nama character varying(500),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.potensi_karhutla OWNER TO postgres;

--
-- TOC entry 238 (class 1259 OID 18014)
-- Name: potensi_karhutla_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.potensi_karhutla_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.potensi_karhutla_id_seq OWNER TO postgres;

--
-- TOC entry 2455 (class 0 OID 0)
-- Dependencies: 238
-- Name: potensi_karhutla_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.potensi_karhutla_id_seq OWNED BY public.potensi_karhutla.id;


--
-- TOC entry 179 (class 1259 OID 16505)
-- Name: provinsi; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.provinsi (
    id integer NOT NULL,
    nama character varying(400) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.provinsi OWNER TO postgres;

--
-- TOC entry 178 (class 1259 OID 16503)
-- Name: provinsi_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.provinsi_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.provinsi_id_seq OWNER TO postgres;

--
-- TOC entry 2456 (class 0 OID 0)
-- Dependencies: 178
-- Name: provinsi_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.provinsi_id_seq OWNED BY public.provinsi.id;


--
-- TOC entry 221 (class 1259 OID 16826)
-- Name: satelit; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.satelit (
    id integer NOT NULL,
    nama character varying(400) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.satelit OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 16824)
-- Name: satelit_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.satelit_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.satelit_id_seq OWNER TO postgres;

--
-- TOC entry 2457 (class 0 OID 0)
-- Dependencies: 220
-- Name: satelit_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.satelit_id_seq OWNED BY public.satelit.id;


--
-- TOC entry 207 (class 1259 OID 16729)
-- Name: sumber_air; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.sumber_air (
    id integer NOT NULL,
    name character varying(400) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.sumber_air OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 16727)
-- Name: sumber_air_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sumber_air_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sumber_air_id_seq OWNER TO postgres;

--
-- TOC entry 2458 (class 0 OID 0)
-- Dependencies: 206
-- Name: sumber_air_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sumber_air_id_seq OWNED BY public.sumber_air.id;


--
-- TOC entry 203 (class 1259 OID 16702)
-- Name: tanah; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.tanah (
    id integer NOT NULL,
    nama character varying(400) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.tanah OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 16700)
-- Name: tanah_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tanah_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tanah_id_seq OWNER TO postgres;

--
-- TOC entry 2459 (class 0 OID 0)
-- Dependencies: 202
-- Name: tanah_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tanah_id_seq OWNED BY public.tanah.id;


--
-- TOC entry 229 (class 1259 OID 16905)
-- Name: test; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.test (
    id integer NOT NULL,
    nama character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.test OWNER TO postgres;

--
-- TOC entry 228 (class 1259 OID 16903)
-- Name: test_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.test_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.test_id_seq OWNER TO postgres;

--
-- TOC entry 2460 (class 0 OID 0)
-- Dependencies: 228
-- Name: test_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.test_id_seq OWNED BY public.test.id;


--
-- TOC entry 199 (class 1259 OID 16676)
-- Name: vegetasi; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.vegetasi (
    id integer NOT NULL,
    nama character varying(400) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.vegetasi OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 16674)
-- Name: vegetasi_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.vegetasi_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.vegetasi_id_seq OWNER TO postgres;

--
-- TOC entry 2461 (class 0 OID 0)
-- Dependencies: 198
-- Name: vegetasi_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.vegetasi_id_seq OWNED BY public.vegetasi.id;


--
-- TOC entry 2110 (class 2604 OID 16803)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.aktivitas_harian ALTER COLUMN id SET DEFAULT nextval('public.aktivitas_harian_id_seq'::regclass);


--
-- TOC entry 2111 (class 2604 OID 16811)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.aktivitas_harian_patroli ALTER COLUMN id SET DEFAULT nextval('public.aktivitas_harian_patroli_id_seq'::regclass);


--
-- TOC entry 2108 (class 2604 OID 16774)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.anggota ALTER COLUMN id SET DEFAULT nextval('public.anggota_id_seq'::regclass);


--
-- TOC entry 2109 (class 2604 OID 16785)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.anggota_patroli ALTER COLUMN id SET DEFAULT nextval('public.anggota_patroli_id_seq'::regclass);


--
-- TOC entry 2119 (class 2604 OID 17956)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cuaca ALTER COLUMN id SET DEFAULT nextval('public.cuaca_id_seq'::regclass);


--
-- TOC entry 2118 (class 2604 OID 17945)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.curah_hujan ALTER COLUMN id SET DEFAULT nextval('public.curah_hujan_id_seq'::regclass);


--
-- TOC entry 2092 (class 2604 OID 16529)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.daops ALTER COLUMN id SET DEFAULT nextval('public.daops_id_seq'::regclass);


--
-- TOC entry 2096 (class 2604 OID 16589)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.desa_kelurahan ALTER COLUMN id SET DEFAULT nextval('public.desa_kelurahan_id_seq'::regclass);


--
-- TOC entry 2123 (class 2604 OID 18081)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.dokumentasi ALTER COLUMN id SET DEFAULT nextval('public.dokumentasi_id_seq'::regclass);


--
-- TOC entry 2089 (class 2604 OID 16478)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hak_akses ALTER COLUMN id SET DEFAULT nextval('public.hak_akses_id_seq'::regclass);


--
-- TOC entry 2107 (class 2604 OID 16758)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hasil_uji ALTER COLUMN id SET DEFAULT nextval('public.hasil_uji_id_seq'::regclass);


--
-- TOC entry 2113 (class 2604 OID 16837)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotspot ALTER COLUMN id SET DEFAULT nextval('public.hotspot_id_seq'::regclass);


--
-- TOC entry 2114 (class 2604 OID 16882)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.inventori ALTER COLUMN id SET DEFAULT nextval('public.inventori_id_seq'::regclass);


--
-- TOC entry 2115 (class 2604 OID 16890)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.inventori_patroli ALTER COLUMN id SET DEFAULT nextval('public.inventori_patroli_id_seq'::regclass);


--
-- TOC entry 2120 (class 2604 OID 18007)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kategori_kondisi_vegetasi ALTER COLUMN id SET DEFAULT nextval('public.kategori_kondisi_vegetasi_id_seq'::regclass);


--
-- TOC entry 2097 (class 2604 OID 16602)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kategori_patroli ALTER COLUMN id SET DEFAULT nextval('public.kategori_patroli_id_seq'::regclass);


--
-- TOC entry 2094 (class 2604 OID 16555)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kecamatan ALTER COLUMN id SET DEFAULT nextval('public.kecamatan_id_seq'::regclass);


--
-- TOC entry 2098 (class 2604 OID 16624)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kegiatan_patroli ALTER COLUMN id SET DEFAULT nextval('public.kegiatan_patroli_id_seq'::regclass);


--
-- TOC entry 2117 (class 2604 OID 17934)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_karhutla ALTER COLUMN id SET DEFAULT nextval('public.kondisi_karhutla_id_seq'::regclass);


--
-- TOC entry 2106 (class 2604 OID 16740)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_sumber_air ALTER COLUMN id SET DEFAULT nextval('public.kondisi_sumber_air_id_seq'::regclass);


--
-- TOC entry 2104 (class 2604 OID 16713)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_tanah ALTER COLUMN id SET DEFAULT nextval('public.kondisi_tanah_id_seq'::regclass);


--
-- TOC entry 2102 (class 2604 OID 16687)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_vegetasi ALTER COLUMN id SET DEFAULT nextval('public.kondisi_vegetasi_id_seq'::regclass);


--
-- TOC entry 2093 (class 2604 OID 16542)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kota_kab ALTER COLUMN id SET DEFAULT nextval('public.kota_kab_id_seq'::regclass);


--
-- TOC entry 2090 (class 2604 OID 16489)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.level_pengguna ALTER COLUMN id SET DEFAULT nextval('public.level_pengguna_id_seq'::regclass);


--
-- TOC entry 2100 (class 2604 OID 16658)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.patroli_darat ALTER COLUMN id SET DEFAULT nextval('public.patroli_darat_id_seq'::regclass);


--
-- TOC entry 2099 (class 2604 OID 16637)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.patroli_udara ALTER COLUMN id SET DEFAULT nextval('public.patroli_udara_id_seq'::regclass);


--
-- TOC entry 2122 (class 2604 OID 18073)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pemadaman ALTER COLUMN id SET DEFAULT nextval('public.pemadaman_id_seq'::regclass);


--
-- TOC entry 2088 (class 2604 OID 16467)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pengguna ALTER COLUMN id SET DEFAULT nextval('public.pengguna_id_seq'::regclass);


--
-- TOC entry 2095 (class 2604 OID 16576)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.posko ALTER COLUMN id SET DEFAULT nextval('public.posko_id_seq'::regclass);


--
-- TOC entry 2121 (class 2604 OID 18019)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.potensi_karhutla ALTER COLUMN id SET DEFAULT nextval('public.potensi_karhutla_id_seq'::regclass);


--
-- TOC entry 2091 (class 2604 OID 16508)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.provinsi ALTER COLUMN id SET DEFAULT nextval('public.provinsi_id_seq'::regclass);


--
-- TOC entry 2112 (class 2604 OID 16829)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.satelit ALTER COLUMN id SET DEFAULT nextval('public.satelit_id_seq'::regclass);


--
-- TOC entry 2105 (class 2604 OID 16732)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sumber_air ALTER COLUMN id SET DEFAULT nextval('public.sumber_air_id_seq'::regclass);


--
-- TOC entry 2103 (class 2604 OID 16705)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tanah ALTER COLUMN id SET DEFAULT nextval('public.tanah_id_seq'::regclass);


--
-- TOC entry 2116 (class 2604 OID 16908)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.test ALTER COLUMN id SET DEFAULT nextval('public.test_id_seq'::regclass);


--
-- TOC entry 2101 (class 2604 OID 16679)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.vegetasi ALTER COLUMN id SET DEFAULT nextval('public.vegetasi_id_seq'::regclass);


--
-- TOC entry 2390 (class 0 OID 16800)
-- Dependencies: 217
-- Data for Name: aktivitas_harian; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.aktivitas_harian (id, nama, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2462 (class 0 OID 0)
-- Dependencies: 216
-- Name: aktivitas_harian_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.aktivitas_harian_id_seq', 1, false);


--
-- TOC entry 2392 (class 0 OID 16808)
-- Dependencies: 219
-- Data for Name: aktivitas_harian_patroli; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.aktivitas_harian_patroli (id, aktivitas_harian_id, kegiatan_patroli_id, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2463 (class 0 OID 0)
-- Dependencies: 218
-- Name: aktivitas_harian_patroli_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.aktivitas_harian_patroli_id_seq', 1, false);


--
-- TOC entry 2386 (class 0 OID 16771)
-- Dependencies: 213
-- Data for Name: anggota; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.anggota (id, nama, kategori, email, no_telepon, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2464 (class 0 OID 0)
-- Dependencies: 212
-- Name: anggota_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.anggota_id_seq', 1, false);


--
-- TOC entry 2388 (class 0 OID 16782)
-- Dependencies: 215
-- Data for Name: anggota_patroli; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.anggota_patroli (id, anggota_id, kegiatan_patroli_id, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2465 (class 0 OID 0)
-- Dependencies: 214
-- Name: anggota_patroli_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.anggota_patroli_id_seq', 1, false);


--
-- TOC entry 2408 (class 0 OID 17953)
-- Dependencies: 235
-- Data for Name: cuaca; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.cuaca (id, nama, created_at, updated_at) FROM stdin;
1	cerah	\N	\N
2	berawan	\N	\N
3	mendung	\N	\N
\.


--
-- TOC entry 2466 (class 0 OID 0)
-- Dependencies: 234
-- Name: cuaca_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.cuaca_id_seq', 3, true);


--
-- TOC entry 2406 (class 0 OID 17942)
-- Dependencies: 233
-- Data for Name: curah_hujan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.curah_hujan (id, nama, created_at, updated_at) FROM stdin;
1	rendah	\N	\N
2	sedang	\N	\N
3	tinggi	\N	\N
\.


--
-- TOC entry 2467 (class 0 OID 0)
-- Dependencies: 232
-- Name: curah_hujan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.curah_hujan_id_seq', 3, true);


--
-- TOC entry 2354 (class 0 OID 16526)
-- Dependencies: 181
-- Data for Name: daops; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.daops (id, provinsi_id, nama, created_at, updated_at) FROM stdin;
336	54	ketapang	\N	\N
337	54	pontianak	\N	\N
338	54	sintang	\N	\N
339	54	sambas	\N	\N
340	54	bengkayan	\N	\N
341	54	kubu raya	\N	\N
342	54	singkawang	\N	\N
343	55	banyuasin	\N	\N
344	55	Muba	\N	\N
345	55	lahat	\N	\N
346	55	OKI	\N	\N
347	56	kapuas	\N	\N
348	56	muara teweh	\N	\N
349	56	pangkalan bun	\N	\N
350	56	kota palangkaraya	\N	\N
351	56	kota waringin barat	\N	\N
352	56	pulang pisau	\N	\N
353	55	muara enim	\N	\N
354	55	musi banyuasin	\N	\N
355	56	palangkaraya/kalampangan	\N	\N
356	56	palangkaraya/kereng bengkirai	\N	\N
357	56	palangkaraya/bukit tunggal	\N	\N
358	56	pangkalanbun	\N	\N
359	56	Muarateweh	\N	\N
360	55	OKI/Pulu Beruang	\N	\N
361	55	OKI/Deling	\N	\N
362	55	OKI/Pulau Geronggang	\N	\N
363	55	OKI/Sungai Menang	\N	\N
364	54	Sintang/Binjai Hilir	\N	\N
365	54	Sintang/ Baning Panjang	\N	\N
366	54	Sintang/Sungai Ukoi	\N	\N
367	54	Sintang/Nanga Tempunak	\N	\N
368	57	dumai	\N	\N
369	58	bukit tempurung	\N	\N
370	56	kota waringinbarat	\N	\N
371	58	kota jambi	\N	\N
372	58	muaro jambi	\N	\N
373	57	rokan hilir	\N	\N
374	54	kayong utara	\N	\N
375	57	siak	\N	\N
376	56	kobar	\N	\N
377	57	bengkalis	\N	\N
378	59	paser	\N	\N
379	59	kutai kertanegara	\N	\N
380	59	tana paser	\N	\N
381	56	japuas	\N	\N
382	58	muoaro jambi	\N	\N
383	59	kutai ketanegara	\N	\N
384	59	kutai kartanegara	\N	\N
385	55	Ogan Komering Ilir	\N	\N
386	55	Bayuasin	\N	\N
387	57	kampar	\N	\N
388	57	kota dumai	\N	\N
389	57	rengat	\N	\N
390	57	pekanbaru	\N	\N
391	57	rengat 	\N	\N
392	58	muara tebo	\N	\N
393	54	semitau	\N	\N
394	58	sarolangun	\N	\N
395	59	sangkima	\N	\N
396	57	indragiri hilir	\N	\N
397	54	bengkayang	\N	\N
398	60	banjar	\N	\N
399	60	barito kuala	\N	\N
400	60	tanah bumbu	\N	\N
401	56	barito utara	\N	\N
402	56	murung raya	\N	\N
403	57	rohil	\N	\N
404	60	tala	\N	\N
405	60	tanah laut	\N	\N
406	59	passer	\N	\N
407	56	barito selatan	\N	\N
408	58	Sarolangun 	\N	\N
409	58	Tanjung Jabung Timur	\N	\N
410	56	kota waringin timur	\N	\N
411	56	Barito Timur	\N	\N
412	60	tapin	\N	\N
413	55	pali	\N	\N
414	54	Sanggau	\N	\N
415	59	kutai timur	\N	\N
416	56	Kapuas 	\N	\N
417	54	Singkawang 	\N	\N
418	58	Tanjabtim	\N	\N
419	57	Siak 	\N	\N
420	60	Tanah Laut 	\N	\N
421	60	Bajar	\N	\N
422	56	Pulang Pisau 	\N	\N
423	55	banyasin	\N	\N
424	60	tanah bambu	\N	\N
425	58	batanghari	\N	\N
426	60	Tapin 	\N	\N
427	56	Barito Utara 	\N	\N
\.


--
-- TOC entry 2468 (class 0 OID 0)
-- Dependencies: 180
-- Name: daops_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.daops_id_seq', 427, true);


--
-- TOC entry 2362 (class 0 OID 16586)
-- Dependencies: 189
-- Data for Name: desa_kelurahan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.desa_kelurahan (id, posko_id, nama, created_at, updated_at, kecamatan_id) FROM stdin;
1079	\N	sungai pelang	\N	\N	576
1080	\N	Rasau Jaya Umum	\N	\N	577
1081	\N	limbung jaya	\N	\N	578
1082	\N	pancaroba	\N	\N	579
1083	\N	pembedilan	\N	\N	580
1084	\N	sungai awan	\N	\N	581
1085	\N	akcaya	\N	\N	582
1086	\N	kapuas kanan hilir	\N	\N	582
1087	\N	nibung	\N	\N	583
1088	\N	karimunting	\N	\N	584
1089	\N	Sungai Awan Kanan	\N	\N	581
1090	\N	Ds. Pancaroba	\N	\N	579
1091	\N	sungai rengit	\N	\N	586
1092	\N	Sebokor	\N	\N	587
1093	\N	Muara Medak 	\N	\N	\N
1094	\N	Mendis	\N	\N	\N
1095	\N	Sukadana	\N	\N	588
1096	\N	Rindu Ati	\N	\N	589
1097	\N	Riding	\N	\N	590
1098	\N	Cengal	\N	\N	591
1099	\N	Pulau Gerongan	\N	\N	592
1100	\N	Sungai Regit	\N	\N	586
1101	\N	paya bakal	\N	\N	588
1102	\N	tanjung raja	\N	\N	593
1103	\N	Jabiren	\N	\N	594
1104	\N	Pilang	\N	\N	594
1105	\N	Madara	\N	\N	595
1106	\N	Kubu	\N	\N	596
1107	\N	Sebuai	\N	\N	596
1108	\N	Keraya	\N	\N	596
1109	\N	Padang Muara Dua	\N	\N	593
1110	\N	Limbunga	\N	\N	578
1111	\N	Kareng Bengkirai	\N	\N	598
1112	\N	Bukit Tunggal	\N	\N	599
1113	\N	Jabiren 	\N	\N	594
1114	\N	Tumbang Nusa	\N	\N	594
1115	\N	Dandang	\N	\N	601
1116	\N	Talio	\N	\N	602
1117	\N	Sei Pitung	\N	\N	603
1118	\N	Bengkarek	\N	\N	579
1119	\N	Retok	\N	\N	604
1120	\N	Payabakal 	\N	\N	588
1121	\N	Tinggi Hari	\N	\N	605
1122	\N	Pulu Beruang	\N	\N	606
1123	\N	muara merang	\N	\N	\N
1124	\N	mendis laut	\N	\N	\N
1125	\N	berlian jaya	\N	\N	\N
1126	\N	Rantau Sialang Sekayu	\N	\N	\N
1127	\N	kalampangan	\N	\N	607
1128	\N	kereng bangkirai 	\N	\N	607
1129	\N	perajen	\N	\N	608
1130	\N	kereng bengkirai	\N	\N	607
1131	\N	Talang Daya	\N	\N	609
1132	\N	Kayu Labu	\N	\N	610
1133	\N	Kedondong	\N	\N	611
1134	\N	Binjai Hilir	\N	\N	612
1135	\N	Baning Panjang	\N	\N	613
1136	\N	Sungai Ukoi	\N	\N	614
1137	\N	Nanga Tempunak	\N	\N	615
1138	\N	Kelampangan	\N	\N	598
1139	\N	tanah putih	\N	\N	616
1140	\N	mekar sari	\N	\N	617
1141	\N	Tanjung Aur	\N	\N	593
1142	\N	Sebuai Timur	\N	\N	596
1143	\N	Saka Tamiang	\N	\N	603
1144	\N	Desa Dandang dan Desa Talio	\N	\N	601
1145	\N	Deling, Riding, Pulau Gerongan, Pulau Bulu, Cengal.	\N	\N	618
1146	\N	Harapan Baru  	\N	\N	619
1147	\N	Segatani	\N	\N	620
1148	\N	Wajok	\N	\N	621
1149	\N	Bening Panjang	\N	\N	613
1150	\N	Naga Tampunak	\N	\N	622
1151	\N	Desa Talio  hulu	\N	\N	601
1152	\N	Jatimulyo	\N	\N	623
1153	\N	Catur Rahayu	\N	\N	624
1154	\N	Kandan	\N	\N	625
1155	\N	Talio Hulu	\N	\N	601
1156	\N	Sei Saka Tamiang	\N	\N	603
1157	\N	Desa Tanjungraja	\N	\N	589
1158	\N	Desa Tumbang Nusa dkk	\N	\N	594
1159	\N	Sebuai Timr	\N	\N	596
1160	\N	Pematang Rahim	\N	\N	626
1161	\N	Arangan	\N	\N	627
1162	\N	Pematang Raman	\N	\N	627
1163	\N	Pulau Mentari	\N	\N	627
1164	\N	PT NSP bejarum	\N	\N	\N
1165	\N	Jati Mulyo	\N	\N	623
1166	\N	Rawasari	\N	\N	629
1167	\N	Rantau Karya	\N	\N	630
1168	\N	mencolok	\N	\N	626
1169	\N	arang arang	\N	\N	631
1170	\N	Talang Daya Samo, Ujung Tanjung, Kebon Cabe, Riding, Sungai Menang, Pulau Geronggang	\N	\N	\N
1171	\N	Sungai Kelik	\N	\N	632
1172	\N	Manis Mata	\N	\N	633
1173	\N	Mumugo	\N	\N	634
1174	\N	rasau jaya II	\N	\N	577
1175	\N	punggur kecil	\N	\N	635
1176	\N	teluk bakung	\N	\N	579
1177	\N	sungai mata mata	\N	\N	636
1178	\N	Kepulauan Teluk Mega	\N	\N	634
1179	\N	Pulai Gading	\N	\N	637
1180	\N	Kalampa-ngan	\N	\N	607
1181	\N	Tumbangnusa	\N	\N	594
1182	\N	Sungai Menang dkk	\N	\N	592
1183	\N	S. Rengit	\N	\N	586
1184	\N	Sidomulyo	\N	\N	640
1185	\N	Lebak Beriang	\N	\N	591
1186	\N	Mekarsari	\N	\N	578
1187	\N	Sungai Mata-mata	\N	\N	636
1188	\N	Seriam Jaya	\N	\N	580
1189	\N	Sungai Jaga	\N	\N	578
1190	\N	Sungai Jaga, Dusun Pajajaran	\N	\N	578
1191	\N	Pelimpaan	\N	\N	641
1192	\N	Seret Ayon	\N	\N	642
1193	\N	Trans	\N	\N	643
1194	\N	bukit kerikil	\N	\N	\N
1195	\N	Titi AKar	\N	\N	644
1196	\N	Mumugo/ Sintong	\N	\N	634
1197	\N	Bukit Timah	\N	\N	617
1198	\N	Biu	\N	\N	645
1199	\N	Muara Komam	\N	\N	646
1200	\N	Kerang	\N	\N	647
1201	\N	Liang Buaya dan Cagar Alam (CA) Sedulang	\N	\N	648
1202	\N	Tuana Tuha	\N	\N	649
1203	\N	Petangis	\N	\N	647
1204	\N	Muara Kaman Hilir	\N	\N	648
1205	\N	Sendulang	\N	\N	650
1206	\N	Lomu	\N	\N	651
1207	\N	Petanggis	\N	\N	652
1208	\N	tumbang busa	\N	\N	594
1209	\N	sebuai kumai	\N	\N	596
1210	\N	campa	\N	\N	\N
1211	\N	puding	\N	\N	\N
1212	\N	gambut jaya	\N	\N	\N
1213	\N	gedong karya	\N	\N	\N
1214	\N	sedulung hulu	\N	\N	648
1215	\N	sangkima	\N	\N	653
1216	\N	Sumber Sari	\N	\N	654
1217	\N	Lirik	\N	\N	657
1218	\N	Pelau Betung	\N	\N	658
1219	\N	Tanjung Raja  	\N	\N	593
1220	\N	Sungai  Rengit  	\N	\N	586
1221	\N	camba	\N	\N	\N
1222	\N	Karanganyar	\N	\N	659
1223	\N	Sungai Rengat	\N	\N	586
1224	\N	Tuana Tuha 	\N	\N	649
1225	\N	Kerang Dayo	\N	\N	647
1226	\N	Bayat Ilir	\N	\N	637
1227	\N	Buring	\N	\N	\N
1228	\N	Secondong	\N	\N	\N
1229	\N	Sunagi Rengit	\N	\N	586
1230	\N	Libur Dinding	\N	\N	645
1231	\N	Temiang	\N	\N	\N
1232	\N	Tanjung Belit	\N	\N	\N
1233	\N	Sukajadi	\N	\N	\N
1234	\N	Lubuk Harjo	\N	\N	\N
1235	\N	Palimbangan	\N	\N	591
1236	\N	Talangjaya	\N	\N	\N
1237	\N	Cinta Manis	\N	\N	\N
1238	\N	Gumai	\N	\N	588
1239	\N	Petanggau	\N	\N	647
1240	\N	rimbo panjang	\N	\N	663
1241	\N	dayun	\N	\N	\N
1242	\N	Tasik Serai	\N	\N	664
1243	\N	tasik betung	\N	\N	\N
1244	\N	Rantau Bais	\N	\N	634
1245	\N	Guntung dan Pelintung	\N	\N	665
1246	\N	bangsal aceh	\N	\N	666
1247	\N	air hitam	\N	\N	668
1248	\N	Desa Rantau Bais	\N	\N	669
1249	\N	Desa Guntung Pelintung	\N	\N	670
1250	\N	Kel. Bukit Timah	\N	\N	671
1251	\N	Desa Mamugo	\N	\N	669
1252	\N	tanjung palas	\N	\N	672
1253	\N	teluk meranti	\N	\N	\N
1254	\N	redang dan pekanheran	\N	\N	\N
1255	\N	Kel Tanjung Palas,	\N	\N	675
1256	\N	Tanjung Belit 	\N	\N	\N
1257	\N	sei rawa dan penyengat	\N	\N	\N
1258	\N	labuh baru barat	\N	\N	\N
1259	\N	ransu bais	\N	\N	634
1260	\N	Rantau Basis	\N	\N	634
1261	\N	Kel. Labuh Baru barat dan Desa Sunga Rawa	\N	\N	\N
1262	\N	desa redang dan pekanheran	\N	\N	\N
1263	\N	Kel. Tanjung Palas	\N	\N	676
1264	\N	sungai rawa	\N	\N	\N
1265	\N	rawa asri	\N	\N	\N
1266	\N	Desa Tanjung Palas	\N	\N	676
1267	\N	Desa Bukit Timah	\N	\N	671
1268	\N	dompas	\N	\N	\N
1269	\N	Desa. Rimbo Panjang	\N	\N	679
1270	\N	rawa sari	\N	\N	\N
1271	\N	Guntung  dan Pelintung	\N	\N	665
1272	\N	Dompas dan Tanjung belit	\N	\N	681
1273	\N	redang dan pekan heran	\N	\N	684
1274	\N	Pergam	\N	\N	644
1275	\N	Bagan Besar	\N	\N	617
1276	\N	Bumi Ayu	\N	\N	617
1277	\N	Desa Titik Akar	\N	\N	688
1278	\N	Desa Pergam	\N	\N	689
1279	\N	bangko bakti	\N	\N	690
1280	\N	sungai segajah jaya	\N	\N	691
1281	\N	karya indah	\N	\N	692
1282	\N	teluk bano	\N	\N	693
1283	\N	tanjung leban	\N	\N	691
1284	\N	bhatin betuah	\N	\N	664
1285	\N	pancer	\N	\N	\N
1286	\N	teluk nilap	\N	\N	\N
1287	\N	air hitam dan sidomulyo barat	\N	\N	695
1288	\N	bencah kelubi	\N	\N	\N
1289	\N	batin betuah	\N	\N	697
1290	\N	batin betuah dan tasik serai barat	\N	\N	698
1291	\N	rimbo panjang, pancer, air hitam	\N	\N	699
1292	\N	tuah indrapura	\N	\N	700
1293	\N	tuah indapura	\N	\N	701
1294	\N	sungai raawa	\N	\N	687
1295	\N	tuah indrapua	\N	\N	700
1296	\N	karya jaya bakti	\N	\N	613
1297	\N	nanga dedai	\N	\N	704
1298	\N	olak olak kubu/pelita jaya	\N	\N	577
1299	\N	rasau jaya 2	\N	\N	577
1300	\N	lubuk lancang	\N	\N	707
1301	\N	desa limbung	\N	\N	578
1302	\N	sarang burung danau	\N	\N	641
1303	\N	nanga biang	\N	\N	603
1304	\N	pendahara	\N	\N	709
1305	\N	bengko bakti	\N	\N	690
1306	\N	mekar utama, sungai pelang	\N	\N	580
1307	\N	katimunting	\N	\N	584
1308	\N	palem raya	\N	\N	710
1309	\N	tuah indrapura dan buantan lestari	\N	\N	711
1310	\N	paman jaya jl muslim II dan paman jaya jl datok maddon	\N	\N	\N
1311	\N	deli makmur	\N	\N	712
1312	\N	karya bakti	\N	\N	613
1313	\N	mekar utama,sungai pelang	\N	\N	580
1314	\N	sungai plang	\N	\N	576
1315	\N	kerumutan	\N	\N	716
1316	\N	nangabiang	\N	\N	603
1317	\N	ola olak kubu	\N	\N	691
1318	\N	rerumutan	\N	\N	718
1319	\N	mengkanan dan sei apit	\N	\N	705
1320	\N	tematu	\N	\N	720
1321	\N	guntul	\N	\N	720
1322	\N	seriang	\N	\N	721
1323	\N	sindur	\N	\N	722
1324	\N	bukit krikil	\N	\N	681
1325	\N	setungkup	\N	\N	723
1326	\N	nanga keberak	\N	\N	724
1327	\N	sei besar	\N	\N	576
1328	\N	sutra	\N	\N	726
1329	\N	santaban	\N	\N	727
1330	\N	jagoi babang	\N	\N	728
1331	\N	labuhan tangga baru	\N	\N	690
1332	\N	kota parit	\N	\N	729
1333	\N	sanatab	\N	\N	727
1334	\N	rasau jaya III	\N	\N	577
1335	\N	kayu ara	\N	\N	730
1336	\N	sehe lusur	\N	\N	731
1337	\N	lubuk gaung	\N	\N	666
1338	\N	pangkalan buton	\N	\N	726
1339	\N	payakabal	\N	\N	588
1340	\N	paya angus	\N	\N	733
1341	\N	tanjung pulih	\N	\N	710
1342	\N	sungai rambutan	\N	\N	710
1343	\N	bentayan	\N	\N	734
1344	\N	arisan jaya	\N	\N	736
1345	\N	teluk betung	\N	\N	737
1346	\N	nusa makmur	\N	\N	587
1347	\N	balai agung	\N	\N	738
1348	\N	pangkalan bulian	\N	\N	739
1349	\N	gunung sembilan	\N	\N	726
1350	\N	lorok	\N	\N	710
1351	\N	kualo puntian	\N	\N	741
1352	\N	selokor	\N	\N	587
1353	\N	nganti	\N	\N	742
1354	\N	toman	\N	\N	606
1355	\N	busa makmur	\N	\N	587
1356	\N	talang leban	\N	\N	739
1357	\N	sebubus	\N	\N	583
1358	\N	telang	\N	\N	637
1359	\N	mukti jaya	\N	\N	746
1360	\N	teluk pandan	\N	\N	747
1361	\N	bunsur dan lalang	\N	\N	705
1362	\N	bonti	\N	\N	748
1363	\N	sejahtera	\N	\N	726
1364	\N	kuala puntian	\N	\N	741
1365	\N	sangata selatan	\N	\N	749
1366	\N	petai	\N	\N	750
1367	\N	sedati	\N	\N	\N
1368	\N	sungai linau dan tanjung damai	\N	\N	\N
1369	\N	Desa Bunsur	\N	\N	687
1370	\N	bayas jaya	\N	\N	751
1371	\N	talang jerinjing	\N	\N	684
1372	\N	sepahat dan tegayun	\N	\N	681
1373	\N	sahan	\N	\N	752
1374	\N	sungai duri	\N	\N	578
1375	\N	malek	\N	\N	583
1376	\N	air hitam hulu	\N	\N	580
1377	\N	aranio	\N	\N	753
1378	\N	mandiangin	\N	\N	754
1379	\N	guntung payung	\N	\N	755
1380	\N	puntik tengah	\N	\N	756
1381	\N	kepayang	\N	\N	757
1382	\N	polewali marajae dan gunung tinggi	\N	\N	758
1383	\N	wonorejo	\N	\N	757
1384	\N	arang-arang	\N	\N	631
1385	\N	kandui	\N	\N	761
1386	\N	pendreh	\N	\N	762
1387	\N	Muara Laung	\N	\N	763
1388	\N	sanggata selatan	\N	\N	767
1389	\N	segati	\N	\N	768
1390	\N	cinta puri	\N	\N	769
1391	\N	sukamara	\N	\N	755
1392	\N	hiyung	\N	\N	771
1393	\N	alur	\N	\N	773
1394	\N	janju	\N	\N	774
1395	\N	tanah periuk	\N	\N	774
1396	\N	sepaku	\N	\N	775
1397	\N	babulu darat	\N	\N	776
1398	\N	kerang doyo dan bantala	\N	\N	647
1399	\N	lolo	\N	\N	777
1400	\N	kel.air htiam	\N	\N	668
1401	\N	rawan terbakarg air putih	\N	\N	681
1402	\N	pararapak	\N	\N	595
1403	\N	Ruhing Raya	\N	\N	779
1404	\N	Muara Dadahup	\N	\N	780
1405	\N	Gohong	\N	\N	781
1406	\N	Sigi	\N	\N	782
1407	\N	Taruna Jaya	\N	\N	594
1408	\N	Bahitom	\N	\N	783
1409	\N	Sungai Bulan	\N	\N	784
1410	\N	Teluk                        Kepayang	\N	\N	757
1411	\N	Rawa Asri 	\N	\N	732
1412	\N	Desa Sukajadi	\N	\N	681
1413	\N	Desa Penyengat	\N	\N	705
1414	\N	Tampakan	\N	\N	647
1415	\N	Muser	\N	\N	645
1416	\N	Bumi Harapan	\N	\N	775
1417	\N	Desa  Payabakal	\N	\N	588
1418	\N	Desa Paya Angus	\N	\N	733
1419	\N	Desa Tanjung Raja	\N	\N	593
1420	\N	Desa Lorok	\N	\N	710
1421	\N	Teluk Petung	\N	\N	737
1422	\N	Desa Bentayan	\N	\N	734
1423	\N	Dusun Dalam	\N	\N	785
1424	\N	Kesang Melintang	\N	\N	786
1425	\N	Balai Rajo	\N	\N	787
1426	\N	Mentangai	\N	\N	788
1427	\N	Bahaur Hulu	\N	\N	789
1428	\N	Tumbang Muroi	\N	\N	790
1429	\N	Pamalongan	\N	\N	772
1430	\N	Handil	\N	\N	791
1431	\N	Sungai Rutas Hulu	\N	\N	\N
1432	\N	Sukajadi dan Temiang	\N	\N	681
1433	\N	Sangatta Selatan	\N	\N	793
1434	\N	Seberang Boster	\N	\N	646
1435	\N	Rimba Jaya	\N	\N	654
1436	\N	Pulau Geronggang                         	\N	\N	740
1437	\N	Sungai Menang                         	\N	\N	795
1438	\N	Air Kumbang	\N	\N	796
1439	\N	Guruh Baru	\N	\N	797
1440	\N	Dusun Dalam 	\N	\N	785
1441	\N	Ketimpun	\N	\N	788
1442	\N	Mendawai Seberang	\N	\N	799
1443	\N	Teluk Pulai 	\N	\N	800
1444	\N	Baamang hulu 	\N	\N	801
1445	\N	Bambulung	\N	\N	802
1446	\N	Maluka Baulin	\N	\N	791
1447	\N	Katimpun	\N	\N	788
1448	\N	karya indah               	\N	\N	692
1449	\N	Desa Kuala Puntian	\N	\N	741
1450	\N	Selerong	\N	\N	646
1451	\N	Gunung Makmur	\N	\N	776
1452	\N	sepahat dan tenggayun	\N	\N	805
1453	\N	rawang air putih dan merempan hulu	\N	\N	681
1454	\N	Salatiga	\N	\N	806
1455	\N	Suka Rata	\N	\N	791
1456	\N	Bajuin	\N	\N	\N
1457	\N	Sei Rutas	\N	\N	807
1458	\N	Karang Rejo	\N	\N	773
1459	\N	Perambatan	\N	\N	764
1460	\N	Muara Payang	\N	\N	646
1461	\N	Batu Panjang	\N	\N	\N
1462	\N	Talang Jerinjing 	\N	\N	\N
1463	\N	Kurumutan	\N	\N	\N
1464	\N	Desa Bunsur dan Lalang	\N	\N	705
1465	\N	Rajang	\N	\N	614
1466	\N	Sungai Maram	\N	\N	613
1467	\N	Kelam Sejahtera	\N	\N	613
1468	\N	Sei Rutas Hulu	\N	\N	807
1469	\N	Jorong	\N	\N	773
1470	\N	Mandiangian Barat	\N	\N	754
1471	\N	Kersik Putih	\N	\N	758
1472	\N	mentawir	\N	\N	775
1473	\N	Pondong	\N	\N	777
1474	\N	Monterado	\N	\N	810
1475	\N	Batu Mak Jage	\N	\N	642
1476	\N	Rintik	\N	\N	776
1477	\N	Pepara	\N	\N	774
1478	\N	Sempulang	\N	\N	774
1479	\N	Rantau Panjang	\N	\N	774
1480	\N	Kedang Murung	\N	\N	654
1481	\N	Karta Bumi	\N	\N	777
1482	\N	Kandolo	\N	\N	811
1483	\N	Makarti	\N	\N	812
1484	\N	Tallo Hulu	\N	\N	602
1485	\N	Mangkalapi	\N	\N	757
1486	\N	Kota Bangun III	\N	\N	654
1487	\N	sri raharja	\N	\N	776
1488	\N	telemow	\N	\N	775
1489	\N	Jone	\N	\N	774
1490	\N	Muara Kuaro	\N	\N	646
1491	\N	doyam seriam desa modang	\N	\N	777
1492	\N	Batu kajang	\N	\N	813
1493	\N	Pemayungan	\N	\N	814
1494	\N	Semambu	\N	\N	814
1495	\N	Tirta Jaya	\N	\N	772
1496	\N	Desa Muara Dadahup	\N	\N	780
1497	\N	Maribas	\N	\N	642
1498	\N	rukmajaya	\N	\N	584
1499	\N	Bunsur Lalang	\N	\N	687
1500	\N	Pangkalan Terap	\N	\N	673
1501	\N	Tanjung Pule	\N	\N	710
1502	\N	Jerambah Rengas	\N	\N	\N
1503	\N	 Sungai Rambutan	\N	\N	710
1504	\N	Mengkudu	\N	\N	647
1505	\N	Long Kali	\N	\N	816
1506	\N	Longikis	\N	\N	817
1507	\N	Pasir Belengkong	\N	\N	818
1508	\N	Danau Rendan	\N	\N	811
1509	\N	Tanjung Limau	\N	\N	\N
1510	\N	Sukarahmat	\N	\N	\N
1511	\N	Sepaso	\N	\N	819
1512	\N	Menteren	\N	\N	781
1513	\N	Tahai Jaya	\N	\N	820
1514	\N	Panarung	\N	\N	821
1515	\N	Pulau Kaladan	\N	\N	788
1516	\N	Mantangai Hilir	\N	\N	809
1517	\N	Lungkuh Layang	\N	\N	822
1518	\N	Lahei Mangkutup	\N	\N	809
1519	\N	Timpah	\N	\N	822
1520	\N	Kelawa	\N	\N	781
1521	\N	Pulau Kaladan 	\N	\N	788
1522	\N	Mantangai Hilir 	\N	\N	823
1523	\N	Mentewe	\N	\N	825
1524	\N	Mantawakan Mulya	\N	\N	825
1525	\N	Batulicin Irigasi	\N	\N	826
1526	\N	Rejo Winangun	\N	\N	826
1527	\N	Harapan Tani	\N	\N	751
1528	\N	Aranio dan Awang Bangkal Timur	\N	\N	\N
1529	\N	Sungai Rangas Martapura Barat  	\N	\N	\N
1530	\N	Landasan Ulin Utara	\N	\N	\N
1531	\N	Banua Anyar	\N	\N	\N
1532	\N	Buantan Besar dan Tuah Indrapura	\N	\N	700
1533	\N	Pekan Heran dan Redang	\N	\N	684
1534	\N	mantewe	\N	\N	828
1535	\N	Kalawa	\N	\N	781
1536	\N	Sei Enau	\N	\N	641
1537	\N	Bunsur / Lalang	\N	\N	687
1538	\N	Segati dan Kusuma	\N	\N	768
1539	\N	Bontang Lestari	\N	\N	\N
1540	\N	Mentaren	\N	\N	781
1541	\N	Petai Jaya	\N	\N	\N
1542	\N	Danau Redan	\N	\N	\N
1543	\N	Desa Mendis	\N	\N	\N
1544	\N	Sebakung Makmur	\N	\N	776
1545	\N	Batu Butok	\N	\N	646
1546	\N	Bungku 	\N	\N	\N
1547	\N	Bahaur Hulu 	\N	\N	832
1548	\N	Sigi 	\N	\N	782
1549	\N	Ranyai Hilir	\N	\N	\N
1550	\N	Dangkan	\N	\N	833
1551	\N	Semitau Hilir	\N	\N	834
1552	\N	Galam	\N	\N	772
1553	\N	Sari Rejo	\N	\N	835
1554	\N	Gentong Kendis	\N	\N	776
1555	\N	Kendaro	\N	\N	777
1556	\N	Aur Cino	\N	\N	787
1557	\N	Kendui	\N	\N	761
1558	\N	Ketapang	\N	\N	772
1559	\N	Sungai ilnau dan Tanjung Damai	\N	\N	681
1560	\N	Seapahat dan Tenggayun	\N	\N	681
1561	\N	Suang Rengit	\N	\N	586
1562	\N	Longkis	\N	\N	817
1563	\N	Lehai Mangkutup	\N	\N	838
1564	\N	Kepenghuluan Tangga Besar	\N	\N	839
1565	\N	Kepenghuluan Air Hitam	\N	\N	840
1566	\N	Sei Rutas Hulu Dan Hilir	\N	\N	827
1567	\N	Parapak	\N	\N	595
1568	\N	Sungai Karangan dan Tambak Buluh	\N	\N	\N
1569	\N	Teluk Masjid	\N	\N	687
1570	\N	Sungai Bakar	\N	\N	772
1571	\N	Sarang Burung Kuala	\N	\N	\N
1572	\N	Landasan Ulin Timur	\N	\N	\N
1573	\N	Tanah Abang 	\N	\N	829
1574	\N	pulau keladan	\N	\N	788
1575	\N	Keay	\N	\N	849
1576	\N	Muara Pasir	\N	\N	774
1577	\N	Krayan	\N	\N	850
1578	\N	Desa Betung	\N	\N	764
1579	\N	Semoi	\N	\N	775
1580	\N	Tanah Priuk	\N	\N	774
1581	\N	Sumber Sari 	\N	\N	654
1582	\N	Rangan Timur	\N	\N	777
1583	\N	Desa Kempas jaya	\N	\N	751
1584	\N	Serumpun 	\N	\N	806
1585	\N	Swarangan	\N	\N	773
1586	\N	Desa Sungai Rutas	\N	\N	827
1587	\N	Sempulang dan Janju	\N	\N	774
1588	\N	Loleng	\N	\N	654
1589	\N	Binangon	\N	\N	646
1590	\N	Semoi II	\N	\N	775
1591	\N	Sungai Pinang	\N	\N	840
1592	\N	Jebak	\N	\N	\N
1593	\N	Mendik Makmur	\N	\N	853
1594	\N	Danau Embat	\N	\N	854
1595	\N	Tengin Baru	\N	\N	775
1596	\N	Desa bukit kerikil	\N	\N	681
1597	\N	Pandahan	\N	\N	771
1598	\N	Sempulang dan Tepian Batang	\N	\N	774
1599	\N	bunsur/lalang	\N	\N	687
1600	\N	Ampelu dan Karmeo	\N	\N	\N
1601	\N	Nganti 	\N	\N	855
1602	\N	Mak Teduh	\N	\N	716
1603	\N	Hajran dan Koto Boyo	\N	\N	\N
1604	\N	Sabuhur	\N	\N	773
1605	\N	Desa Rambutan	\N	\N	735
1606	\N	Rantau Keroya	\N	\N	\N
1607	\N	Keluang Lolo	\N	\N	777
1608	\N	Suweto	\N	\N	645
1609	\N	Wonosari	\N	\N	775
1610	\N	Kerang Dayu	\N	\N	647
1611	\N	Tanjung Marwo	\N	\N	859
1612	\N	Tapin	\N	\N	771
1613	\N	Pabenengan 	\N	\N	818
1614	\N	Mandastana	\N	\N	\N
1615	\N	Mendik Sebrang	\N	\N	853
1616	\N	Seroja	\N	\N	861
1617	\N	Muara Asam-Asam	\N	\N	773
\.


--
-- TOC entry 2469 (class 0 OID 0)
-- Dependencies: 188
-- Name: desa_kelurahan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.desa_kelurahan_id_seq', 1617, true);


--
-- TOC entry 2416 (class 0 OID 18078)
-- Dependencies: 243
-- Data for Name: dokumentasi; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.dokumentasi (id, kegiatan_patroli_id, url_file, tipe_file, deskripsi, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2470 (class 0 OID 0)
-- Dependencies: 242
-- Name: dokumentasi_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.dokumentasi_id_seq', 1, false);


--
-- TOC entry 2348 (class 0 OID 16475)
-- Dependencies: 175
-- Data for Name: hak_akses; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.hak_akses (id, nama, menu, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2471 (class 0 OID 0)
-- Dependencies: 174
-- Name: hak_akses_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hak_akses_id_seq', 1, false);


--
-- TOC entry 2384 (class 0 OID 16755)
-- Dependencies: 211
-- Data for Name: hasil_uji; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.hasil_uji (id, patroli_darat_id, nama_pengujian, hasil, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2472 (class 0 OID 0)
-- Dependencies: 210
-- Name: hasil_uji_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hasil_uji_id_seq', 1, false);


--
-- TOC entry 2396 (class 0 OID 16834)
-- Dependencies: 223
-- Data for Name: hotspot; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.hotspot (id, satelit_id, kegiatan_patroli_id, deskripsi, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2473 (class 0 OID 0)
-- Dependencies: 222
-- Name: hotspot_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hotspot_id_seq', 1, false);


--
-- TOC entry 2398 (class 0 OID 16879)
-- Dependencies: 225
-- Data for Name: inventori; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.inventori (id, nama, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2474 (class 0 OID 0)
-- Dependencies: 224
-- Name: inventori_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.inventori_id_seq', 1, false);


--
-- TOC entry 2400 (class 0 OID 16887)
-- Dependencies: 227
-- Data for Name: inventori_patroli; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.inventori_patroli (id, kegiatan_patroli_id, inventori_id, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2475 (class 0 OID 0)
-- Dependencies: 226
-- Name: inventori_patroli_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.inventori_patroli_id_seq', 1, false);


--
-- TOC entry 2410 (class 0 OID 18004)
-- Dependencies: 237
-- Data for Name: kategori_kondisi_vegetasi; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kategori_kondisi_vegetasi (id, nama, created_at, updated_at) FROM stdin;
1	kering	\N	\N
2	basah	\N	\N
\.


--
-- TOC entry 2476 (class 0 OID 0)
-- Dependencies: 236
-- Name: kategori_kondisi_vegetasi_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kategori_kondisi_vegetasi_id_seq', 2, true);


--
-- TOC entry 2364 (class 0 OID 16599)
-- Dependencies: 191
-- Data for Name: kategori_patroli; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kategori_patroli (id, nama, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2477 (class 0 OID 0)
-- Dependencies: 190
-- Name: kategori_patroli_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kategori_patroli_id_seq', 1, false);


--
-- TOC entry 2358 (class 0 OID 16552)
-- Dependencies: 185
-- Data for Name: kecamatan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kecamatan (id, kota_kab_id, nama, created_at, updated_at) FROM stdin;
580	\N	kendawangan	\N	\N
581	\N	muara pawan	\N	\N
582	\N	sintang	\N	\N
583	\N	paloh	\N	\N
584	\N	sungai raya kepulauan	\N	\N
585	\N	Sungai Raya-Bengkayang	\N	\N
586	254	talang kelapa	\N	\N
587	\N	Kec. Air Kumbang	\N	\N
588	\N	Gelumbang	\N	\N
589	\N	Gumai Ulu	\N	\N
590	\N	Pangkalan Lamban	\N	\N
591	\N	Cengal	\N	\N
592	\N	OKI	\N	\N
593	256	gumay ulu	\N	\N
594	\N	Jabiren Raya	\N	\N
595	\N	Dusun Selatan	\N	\N
596	\N	Kumai	\N	\N
597	\N	Paloh-Sambas	\N	\N
598	\N	Sebangau	\N	\N
599	\N	Jekan Raya	\N	\N
600	\N	Jabiren Raya 	\N	\N
601	\N	Pandih Batu	\N	\N
602	\N	Pendih Batu	\N	\N
603	\N	Kapuas Barat	\N	\N
604	\N	Kuala Mandor	\N	\N
605	\N	Pulau Pinang	\N	\N
606	\N	Tulung Selapan	\N	\N
607	\N	sabangau	\N	\N
608	\N	mariana	\N	\N
609	\N	Deling	\N	\N
610	\N	Pulau Geronggang	\N	\N
611	\N	Sungai menang	\N	\N
612	\N	Binjai Hulu	\N	\N
613	\N	Kelam Permai	\N	\N
614	\N	Sungai Tebelian	\N	\N
615	\N	Tempunak	\N	\N
616	\N	sedinginan	\N	\N
617	\N	dumai selatan	\N	\N
618	\N	Deling, Riding, Pulau Gerongan, Pulau Bulu, Cengal.	\N	\N
619	\N	Matan Hilir Selatan 	\N	\N
620	\N	Singkawang Selatan	\N	\N
621	\N	Siantan	\N	\N
622	\N	Tampunak 	\N	\N
623	261	Dendang	\N	\N
624	261	Dendang 	\N	\N
625	\N	Kotabesi	\N	\N
626	261	Mendahara Ulu	\N	\N
627	\N	Kota Jambi	\N	\N
628	\N	Sabangau 	\N	\N
629	261	Berbak	\N	\N
630	261	Geragai	\N	\N
631	\N	kumpeh ulu	\N	\N
632	265	Nanga Tayap	\N	\N
633	265	Manis Mata	\N	\N
634	\N	Tanah Putih	\N	\N
635	253	sungai kakap	\N	\N
636	264	simpang hilir	\N	\N
637	267	Bayung Lencir	\N	\N
638	260	Pandihbatu	\N	\N
639	\N	Pahandut	\N	\N
640	\N	Sei Menang	\N	\N
641	270	Jawai	\N	\N
642	270	Tebas	\N	\N
643	270	Seret Ayon	\N	\N
644	\N	Rupat	\N	\N
645	272	Muara Samu	\N	\N
646	272	Muara Komam	\N	\N
647	273	Batu Engau	\N	\N
648	272	Muara Kaman	\N	\N
649	272	Kenohan	\N	\N
650	\N	Dusun Serembuh	\N	\N
651	\N	Batu Engga	\N	\N
652	\N	Batu Enggau	\N	\N
653	\N	sangatta	\N	\N
654	273	Kota Bangun	\N	\N
655	\N	Kutai Kartanegara	\N	\N
656	\N	Muara Semu	\N	\N
657	275	Pangkalan Lampam	\N	\N
658	275	Pampangan	\N	\N
659	\N	Muara Padang	\N	\N
660	\N	Muara Koman	\N	\N
661	\N	Glumbang	\N	\N
662	\N	Gumay Ulu Tanjung Raja	\N	\N
663	\N	tambang	\N	\N
664	\N	Pinggir	\N	\N
665	\N	Medang Kampai	\N	\N
666	276	kec.sungai sembilan	\N	\N
667	277	kuala kampar	\N	\N
668	278	payung sekaki	\N	\N
669	\N	Kec. Tanah putih	\N	\N
670	\N	Kec. Medang  Kampai	\N	\N
671	\N	Kec. Dumai Selatan	\N	\N
672	\N	dumai timur	\N	\N
673	\N	Teluk Meranti	\N	\N
674	\N	Kec. Medang Kampai	\N	\N
675	\N	Kec Dumai Timur	\N	\N
676	\N	Kec. Dumai Timur	\N	\N
677	\N	medang kamai	\N	\N
678	\N	Kec. Pinggir	\N	\N
679	\N	Kec. Tambang	\N	\N
680	\N	tankerang labuai	\N	\N
681	280	Bukit Batu dan Siak Kecil	\N	\N
682	281	dayun	\N	\N
683	281	Sei. Apit	\N	\N
684	282	rengat barat	\N	\N
685	281	Sei. Apt	\N	\N
686	282	Indragiri Hulu	\N	\N
687	281	Sei Apit	\N	\N
688	280	Rupat Utara	\N	\N
689	280	Kec. Rupat	\N	\N
690	266	bangko pusako	\N	\N
691	266	kubu	\N	\N
692	\N	tapung	\N	\N
693	266	rimba melintang	\N	\N
694	\N	tanggkerang labuai	\N	\N
695	\N	tampan	\N	\N
696	\N	tampan purwodadi barat	\N	\N
697	280	mandau	\N	\N
698	280	mandau dan pinggir	\N	\N
699	\N	tambang, payung sekaki	\N	\N
700	281	bunga raya	\N	\N
701	281	bunga aya	\N	\N
702	281	dayun 	\N	\N
703	\N	sungai mandau	\N	\N
704	286	dedai	\N	\N
705	281	sungai apit	\N	\N
706	269	seui raya kepulauan	\N	\N
707	254	suak tapeh	\N	\N
708	269	sui raya kepulauan	\N	\N
709	290	twg.sangalang	\N	\N
710	287	indralaya utara	\N	\N
711	281	bungaraya	\N	\N
712	283	kampar timur	\N	\N
713	253	kubu olak olak kubu/pelita jaya	\N	\N
714	264	simpang ilir	\N	\N
715	276	tanjung palas	\N	\N
716	277	kerumutan	\N	\N
717	269	sungai raya kepulauan 	\N	\N
718	277	rerumutan	\N	\N
719	278	payung sekai	\N	\N
720	292	batang lupar	\N	\N
721	292	badau	\N	\N
722	292	bika	\N	\N
723	286	ketungau	\N	\N
724	293	belimbing	\N	\N
725	294	singkut	\N	\N
726	264	sukadana	\N	\N
727	270	sajingan besar	\N	\N
728	269	jagoi babang	\N	\N
729	266	simpang kanan	\N	\N
730	296	jelimpo	\N	\N
731	296	kuala behe	\N	\N
732	282	Kuala Cinaku	\N	\N
733	255	sungai rotan	\N	\N
734	254	tungkal ilir	\N	\N
735	254	rambutan	\N	\N
736	254	pemulutan	\N	\N
737	254	pulau rimau	\N	\N
577	253	Rasau Jaya	\N	\N
578	253	sungai raya	\N	\N
579	253	sungai ambawang	\N	\N
738	267	lawang wetan	\N	\N
739	267	batanghari leko	\N	\N
740	275	pedamaran timur	\N	\N
741	254	tanjung lago	\N	\N
742	295	lais	\N	\N
743	295	sekayu	\N	\N
744	298	penukal	\N	\N
745	275	pedamanran timur	\N	\N
746	299	rantau pulung	\N	\N
747	270	galing	\N	\N
748	288	bonti	\N	\N
749	299	sangata selatan	\N	\N
750	300	singingi hilir	\N	\N
751	\N	kempas	\N	\N
752	\N	seluas	\N	\N
753	\N	aranio	\N	\N
754	\N	karang intan	\N	\N
755	\N	landasan ulin	\N	\N
756	\N	mandastana	\N	\N
757	\N	kusan hulu	\N	\N
758	\N	batulicin	\N	\N
759	\N	simpang empat	\N	\N
760	\N	sungai gelem	\N	\N
761	\N	gunung timang	\N	\N
762	\N	teweh tengah	\N	\N
763	\N	Laung Tuhup	\N	\N
764	298	abab	\N	\N
765	287	inderalaya utara	\N	\N
766	287	pemulutan barat	\N	\N
767	299	sanggata selatan	\N	\N
768	277	langgam	\N	\N
769	\N	cinta putri darulsalam	\N	\N
770	\N	batu licin	\N	\N
771	\N	tapin tengah	\N	\N
772	\N	bajuin	\N	\N
773	\N	jorong	\N	\N
774	303	tanah grogot	\N	\N
775	303	sepaku	\N	\N
776	304	babulu	\N	\N
777	303	kuaro	\N	\N
778	295	btanghari leko	\N	\N
779	\N	Gunung Bintang Awai	\N	\N
780	\N	Kapuas Murung	\N	\N
781	\N	Kahayan Hilir	\N	\N
782	\N	Kahayan Tengah	\N	\N
783	\N	Murung Raya	\N	\N
784	\N	Singkawang Utara	\N	\N
785	\N	Bathin VIII	\N	\N
786	\N	Pauh	\N	\N
787	\N	VII Koto	\N	\N
788	\N	Mentangai	\N	\N
789	\N	Kahayan Kuala	\N	\N
790	\N	Mentangai Kuala	\N	\N
791	\N	Kurau	\N	\N
792	281	Sungai  Apit	\N	\N
793	299	Sangatta Selatan	\N	\N
794	299	Sangkima	\N	\N
795	275	Sungai Menang                         	\N	\N
796	254	Nusa Makmur	\N	\N
797	\N	Mandiangin	\N	\N
798	\N	Kahayan Tengah 	\N	\N
799	\N	Arus Selatan	\N	\N
800	\N	Kumai 	\N	\N
801	\N	Bamaang	\N	\N
802	\N	Pematang karau	\N	\N
803	275	Pkl. Lampam                         	\N	\N
804	280	siakkecil	\N	\N
805	280	bukitbatu	\N	\N
806	\N	Salatiga Pop	\N	\N
807	306	Candi	\N	\N
808	254	Air Kumbang 	\N	\N
809	\N	Mantangai	\N	\N
810	\N	Monterado	\N	\N
811	299	Teluk Pandan	\N	\N
812	272	Marangkayu	\N	\N
813	273	Batu Sopang	\N	\N
814	\N	Sumay	\N	\N
815	281	Siak kecil 	\N	\N
816	273	Long Kali	\N	\N
817	273	Longkis	\N	\N
818	273	Pasir Belengkong	\N	\N
819	\N	Bengalon	\N	\N
820	\N	Maliku	\N	\N
821	\N	Basarang	\N	\N
822	\N	Timpah	\N	\N
823	\N	Mantangai 	\N	\N
824	\N	Timpah 	\N	\N
825	311	Mentewe	\N	\N
826	311	Karang Bintang	\N	\N
827	\N	Candi Laras Selatan	\N	\N
828	\N	mantewe	\N	\N
829	295	Batang Hari	\N	\N
830	\N	Bangalon	\N	\N
831	\N	Garaai	\N	\N
832	\N	Kahayan Kuala 	\N	\N
833	292	Silat Hulu	\N	\N
834	\N	Semitau	\N	\N
835	273	Lebak Cilong	\N	\N
836	287	Indralaya Utara 	\N	\N
837	273	Kuaro 	\N	\N
838	\N	Mentanggai	\N	\N
839	316	Bangko Pusako 	\N	\N
840	316	Pujud	\N	\N
841	317	Guntung Pelintung	\N	\N
842	\N	Sukamara	\N	\N
843	\N	Muser	\N	\N
844	323	Tasik Betung	\N	\N
845	281	Bunga RayaBuantan Besar 	\N	\N
846	316	Bangko Pusako dan Bagan Sinembah	\N	\N
847	312	Taping Tengah	\N	\N
848	325	Maluka Baulin	\N	\N
849	\N	Damai	\N	\N
850	\N	Longikis	\N	\N
851	\N	Tanah Putih Tanjung Melawan	\N	\N
852	\N	Dusun Seletan	\N	\N
853	\N	Longkali	\N	\N
854	\N	Bajubang	\N	\N
855	\N	sanga desa	\N	\N
856	\N	Penajam Paser Utara	\N	\N
857	\N	Tanah  Tanjung Melawan	\N	\N
858	\N	Singkawang Utara.	\N	\N
859	\N	Muara Tambesi	\N	\N
860	\N	Kubu Desa	\N	\N
861	\N	Kedang Murung	\N	\N
862	\N	Tapin tengah 	\N	\N
576	265	matan hilir selatan	\N	\N
\.


--
-- TOC entry 2478 (class 0 OID 0)
-- Dependencies: 184
-- Name: kecamatan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kecamatan_id_seq', 862, true);


--
-- TOC entry 2366 (class 0 OID 16621)
-- Dependencies: 193
-- Data for Name: kegiatan_patroli; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kegiatan_patroli (id, kategori_patroli_id, tanggal_patroli, created_at, updated_at) FROM stdin;
1	\N	2016-02-24	\N	\N
4	\N	2016-02-25	\N	\N
5	\N	2016-02-26	\N	\N
\.


--
-- TOC entry 2479 (class 0 OID 0)
-- Dependencies: 192
-- Name: kegiatan_patroli_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kegiatan_patroli_id_seq', 5, true);


--
-- TOC entry 2404 (class 0 OID 17931)
-- Dependencies: 231
-- Data for Name: kondisi_karhutla; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kondisi_karhutla (id, nama, created_at, updated_at) FROM stdin;
1	rawan karhutla	\N	\N
2	bekas karhutla	\N	\N
\.


--
-- TOC entry 2480 (class 0 OID 0)
-- Dependencies: 230
-- Name: kondisi_karhutla_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kondisi_karhutla_id_seq', 2, true);


--
-- TOC entry 2382 (class 0 OID 16737)
-- Dependencies: 209
-- Data for Name: kondisi_sumber_air; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kondisi_sumber_air (id, patroli_darat_id, sumber_air_id, latitude, longitude, panjang, lebar, kedalaman, created_at, updated_at) FROM stdin;
8	12203	1	-1.96355555599999998	110.1340833	0	3	1.5	\N	\N
9	12203	1	-1.992166667	110.135638900000004	0	3	1.5	\N	\N
10	12204	1	-0.282027778000000007	109.340416700000006	0	2	1	\N	\N
11	12204	1	-0.273694443999999981	109.340388899999994	0	2	1	\N	\N
13	12204	1	-0.269944444000000006	109.339222199999995	0	2	1.5	\N	\N
14	12204	1	-0.269249999999999989	109.339749999999995	0	2	1.19999999999999996	\N	\N
15	12205	1	-0.0297000000000000007	109.609279999999998	0	2	1.5	\N	\N
16	12205	1	-0.0271699999999999997	109.608890000000002	0	2	1.5	\N	\N
17	12207	1	-1.96355555599999998	110.1340833	0	3	1.5	\N	\N
18	12207	1	-2.82652777799999999	110.558583299999995	0	2	1.5	\N	\N
19	12208	1	-1.96355555599999998	110.1340833	0	3	1.5	\N	\N
\.


--
-- TOC entry 2481 (class 0 OID 0)
-- Dependencies: 208
-- Name: kondisi_sumber_air_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kondisi_sumber_air_id_seq', 19, true);


--
-- TOC entry 2378 (class 0 OID 16710)
-- Dependencies: 205
-- Data for Name: kondisi_tanah; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kondisi_tanah (id, patroli_darat_id, tanah_id, latitude, longitude, luas, kedalaman_gambut, created_at, updated_at, potensi_karhutla_id, kondisi_karhutla_id) FROM stdin;
4	12204	1	-0.282027778000000007	109.340416700000006	1.5	1	\N	\N	\N	2
6	12204	1	-0.273694443999999981	109.340388899999994	50	0	\N	\N	\N	2
8	12204	1	-0.269944444000000006	109.339222199999995	3	0	\N	\N	\N	1
9	12204	1	-0.266055556000000026	109.344083299999994	1.5	0	\N	\N	\N	1
12	12204	1	-0.269249999999999989	109.339749999999995	0	0	\N	\N	\N	2
13	12205	1	-0.0297000000000000007	109.609279999999998	0	0	\N	\N	\N	\N
15	12207	1	-2.82666666700000002	110.558444399999999	0	0	\N	\N	\N	1
16	12208	1	-1.92866666699999989	110.127027799999993	0	0	\N	\N	1	1
17	12208	1	-1.93955555599999996	110.128	0	0	\N	\N	1	\N
18	12208	1	-1.92605555599999989	110.133111099999994	0	0	\N	\N	1	\N
\.


--
-- TOC entry 2482 (class 0 OID 0)
-- Dependencies: 204
-- Name: kondisi_tanah_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kondisi_tanah_id_seq', 18, true);


--
-- TOC entry 2374 (class 0 OID 16684)
-- Dependencies: 201
-- Data for Name: kondisi_vegetasi; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kondisi_vegetasi (id, patroli_darat_id, vegetasi_id, latitude, longitude, created_at, updated_at, kategori_kondisi_vegetasi_id, potensi_karhutla_id, kondisi_karhutla_id, luas_tanah) FROM stdin;
7	12203	1	-1.9922222220000001	110.135527800000006	\N	\N	\N	\N	1	\N
8	12204	2	-0.282027778000000007	109.340416700000006	\N	\N	\N	\N	2	\N
9	12204	3	-0.273694443999999981	109.340388899999994	\N	\N	\N	\N	1	\N
12	12204	4	-0.273694443999999981	109.340388899999994	\N	\N	\N	\N	1	\N
13	12204	3	-0.266055556000000026	109.344083299999994	\N	\N	\N	\N	1	\N
14	12207	3	-1.96383333299999996	110.134222199999996	\N	\N	\N	\N	\N	\N
15	12207	1	-1.9922222220000001	110.135527800000006	\N	\N	\N	\N	1	\N
16	12207	4	-2.82666666700000002	110.558444399999999	\N	\N	\N	\N	1	\N
18	12207	3	-2.82666666700000002	110.558444399999999	\N	\N	\N	\N	1	\N
19	12207	5	-2.82816666700000008	110.554805599999995	\N	\N	\N	\N	2	0.5
20	12208	6	-1.92866666699999989	110.127027799999993	\N	\N	\N	1	1	\N
21	12208	3	-1.92866666699999989	110.127027799999993	\N	\N	\N	1	1	\N
22	12208	1	-1.93955555599999996	110.128	\N	\N	\N	1	\N	\N
23	12208	3	-1.93955555599999996	110.128	\N	\N	\N	1	\N	\N
25	12208	3	-1.92605555599999989	110.133111099999994	\N	\N	\N	1	\N	\N
26	12208	1	-1.75194444400000005	109.987499999999997	\N	\N	\N	\N	2	0.5
27	12208	5	-1.75194444400000005	109.987499999999997	\N	\N	\N	\N	2	0.5
28	12208	3	-1.96383333299999996	110.134222199999996	\N	\N	\N	1	\N	\N
29	12208	1	-1.9922222220000001	110.135527800000006	\N	\N	\N	1	1	\N
\.


--
-- TOC entry 2483 (class 0 OID 0)
-- Dependencies: 200
-- Name: kondisi_vegetasi_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kondisi_vegetasi_id_seq', 29, true);


--
-- TOC entry 2356 (class 0 OID 16539)
-- Dependencies: 183
-- Data for Name: kota_kab; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.kota_kab (id, daops_id, nama, created_at, updated_at) FROM stdin;
253	337	kubu raya	\N	\N
254	343	banyuasin	\N	\N
255	345	muara enim	\N	\N
256	345	lahat	\N	\N
257	359	barito selatan	\N	\N
258	358	kota waringin barat	\N	\N
259	347	kapuas	\N	\N
260	347	pulang pisau	\N	\N
261	369	tanjung jabung timur	\N	\N
262	349	kota waringinbarat	\N	\N
263	358	kotawaringin barat	\N	\N
264	336	kayong utara	\N	\N
265	336	ketapang	\N	\N
266	368	rokan hilir	\N	\N
267	354	musi banyuasin	\N	\N
268	350	palangkaraya	\N	\N
269	342	bengkayang	\N	\N
270	342	sambas	\N	\N
271	376	pangkalan bun	\N	\N
272	378	kutai kartanegara	\N	\N
273	378	paser	\N	\N
274	378	kutai kertanegara	\N	\N
275	346	oki	\N	\N
276	368	kota dumai	\N	\N
277	389	pelalawan	\N	\N
278	390	kota pekanbaru	\N	\N
279	368	kab.dumai	\N	\N
280	375	kab.bengkalis	\N	\N
281	375	siak	\N	\N
282	\N	indragiri hulu	\N	\N
283	\N	kampar	\N	\N
284	389	indragilir hulu	\N	\N
285	\N	rokan hilil	\N	\N
286	338	sintang	\N	\N
287	343	ogan ilir	\N	\N
288	338	sanggau	\N	\N
289	392	tebo	\N	\N
290	350	katingan	\N	\N
291	336	ketaapang	\N	\N
292	393	kapuas hulu	\N	\N
293	338	melawi	\N	\N
294	394	sarolangun	\N	\N
295	344	muba	\N	\N
296	\N	landak	\N	\N
297	353	gelumbang	\N	\N
298	345	pali	\N	\N
299	395	kutai timur	\N	\N
300	389	kuantan singingi	\N	\N
301	389	inhu	\N	\N
302	389	rengat	\N	\N
303	406	passer	\N	\N
304	406	penajam paser utara	\N	\N
305	378	kutai arat	\N	\N
306	412	Tanah Laut	\N	\N
307	378	pebajam paser utara	\N	\N
308	378	kutai barat	\N	\N
309	389	kuansing	\N	\N
310	348	barito utara	\N	\N
311	400	tanah bumbu	\N	\N
312	405	tapin	\N	\N
313	395	kutai kaartanegara	\N	\N
314	345	Muara Ennim	\N	\N
315	419	Kab. Siak	\N	\N
316	368	Rohil	\N	\N
317	368	Medang Kampai	\N	\N
318	389	Inhil	\N	\N
319	348	Kab.  Barito Selatan	\N	\N
320	395	Kab. Kutai Timur	\N	\N
321	375	Kab.Siak	\N	\N
322	345	Kab. Lahat	\N	\N
323	375	mandau	\N	\N
324	342	Singkawang	\N	\N
325	405	Kurau	\N	\N
326	424	tanah bambu	\N	\N
\.


--
-- TOC entry 2484 (class 0 OID 0)
-- Dependencies: 182
-- Name: kota_kab_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.kota_kab_id_seq', 326, true);


--
-- TOC entry 2350 (class 0 OID 16486)
-- Dependencies: 177
-- Data for Name: level_pengguna; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.level_pengguna (id, pengguna_id, hak_akses_id, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2485 (class 0 OID 0)
-- Dependencies: 176
-- Name: level_pengguna_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.level_pengguna_id_seq', 1, false);


--
-- TOC entry 2344 (class 0 OID 16425)
-- Dependencies: 171
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.migrations (migration, batch) FROM stdin;
2018_09_20_230340_create_pengguna_table	1
2018_09_20_230559_create_hak_akses_table	1
2018_09_20_231507_create_level_pengguna_table	1
2018_09_25_155238_create_provinsi_table	2
2018_09_25_231219_create_daops_table	3
2018_09_25_231446_create_kota_kab_table	3
2018_09_25_231805_create_kecamatan_table	4
2018_09_25_231937_create_posko_table	5
2018_09_25_232107_create_desa_kelurahan_table	6
2018_09_25_232249_create_kategori_patroli_table	7
2018_09_25_232356_create_kegiatan_patroli_table	8
2018_09_25_233241_create_patroli_udara_table	9
2018_09_25_234331_create_patroli_darat_table	10
2018_09_26_054007_create_vegetasi_table	11
2018_09_26_054100_create_konidisi_vegetasi_table	12
2018_09_26_054420_create_tanah_table	13
2018_09_26_054501_create_konidisi_tanah_table	14
2018_09_26_054905_create_sumber_air_table	15
2018_09_26_055017_create_kondisi_sumber_air_table	16
2018_09_26_055322_create_kondisi_hasil_uji_table	17
2018_09_26_055928_create_anggota_table	18
2018_09_26_060047_create_anggota_patroli_table	19
2018_09_26_060328_create_aktivitas_harian_table	20
2018_09_26_060400_create_aktivitas_harian_patroli_table	21
2018_09_26_060626_create_satelit_table	22
2018_09_26_060819_create_hotspot_table	23
2018_09_26_061021_create_inventori_table	24
2018_09_26_061225_create_inventori_patroli_table	24
2018_09_28_082811_create_test_table	25
2018_09_30_083927_add_remember_token_to_pengguna_table	26
2018_10_03_140845_nullable_tabel_kegiatan_patroli	27
2018_10_04_133645_nullable_table_kota_kab	28
2018_10_04_133908_nullable_table_kecamatan	29
2018_10_04_134109_nullable_table_desa_kelurahan	29
2018_10_04_140632_add_kecamatan_id_to_table_desa_kelurahan	30
2018_10_06_035239_nullable_table_kondisi_vegetasi	31
2018_10_06_042518_add_kondisi_karhutla_colum	32
2018_10_06_043442_create_table_kategori_kondisi_karhutla	33
2018_10_06_052419_create_table_curah_hujan	34
2018_10_06_052505_create_table_cuaca	35
2018_10_06_054152_drop_kategorikal_column_patroli_darat	36
2018_10_06_054352_add_kategorikal_column_patroli_darat	37
2018_10_06_054733_drop_kategorikal_colum_patroli_udara	38
2018_10_06_054855_add_kategorikal_column_patroli_udara	39
2018_10_06_055245_create_table_kondisi_vegetasi	40
2018_10_06_055600_create_table_potensi_karhutla	41
2018_10_06_065544_drop_colum_kategorikal_kondisi_vegetasi	42
2018_10_06_065826_add_kategorikal_column_kondisi_vegetasi	43
2018_10_06_070944_drop_kategorikal_column_kondisi_tanah	44
2018_10_06_071332_drop_column_kategorikal_kondisi_tanah	45
2018_10_10_114536_add_luas_tanah_tabel_kondisi_vegetasi	46
2018_10_10_140724_create_table_pemadaman	47
2018_10_10_141052_drop_colum_tipe_kebakaran_pemadaman	48
2018_10_12_144902_create_table_dokumentasi	49
\.


--
-- TOC entry 2370 (class 0 OID 16655)
-- Dependencies: 197
-- Data for Name: patroli_darat; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.patroli_darat (id, kegiatan_patroli_id, desa_kelurahan_id, suhu, kelembaban, kecepatan_angin, dc_kk, ffmc_kkas, fwi, aktivitas_masyarakat, keterangan_lokasi, created_at, updated_at, cuaca_pagi_id, cuaca_sore_id, cuaca_siang_id, curah_hujan_id) FROM stdin;
12203	1	1079	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N
12204	1	1080	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N
12205	1	1081	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	1	1	1	1
12206	1	1082	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	1	1	1	2
12207	4	1079	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N
12208	5	1079	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N
\.


--
-- TOC entry 2486 (class 0 OID 0)
-- Dependencies: 196
-- Name: patroli_darat_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.patroli_darat_id_seq', 12208, true);


--
-- TOC entry 2368 (class 0 OID 16634)
-- Dependencies: 195
-- Data for Name: patroli_udara; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.patroli_udara (id, kegiatan_patroli_id, desa_kelurahan_id, latitude, longitude, confidence, distance, kegiatan, radial, keterangan, suhu, kelembaban, kecepatan_angin, dc_kk, ffmc_kkas, fwi, created_at, updated_at, cuaca_siang_id, cuaca_pagi_id, cuaca_sore_id, curah_hujan_id) FROM stdin;
\.


--
-- TOC entry 2487 (class 0 OID 0)
-- Dependencies: 194
-- Name: patroli_udara_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.patroli_udara_id_seq', 14, true);


--
-- TOC entry 2414 (class 0 OID 18070)
-- Dependencies: 241
-- Data for Name: pemadaman; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.pemadaman (id, patroli_darat_id, latitude, longitude, luas_terbakar, created_at, updated_at) FROM stdin;
1	12203	1111	2222	12	\N	\N
2	12204	333	4444	13	\N	\N
\.


--
-- TOC entry 2488 (class 0 OID 0)
-- Dependencies: 240
-- Name: pemadaman_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.pemadaman_id_seq', 2, true);


--
-- TOC entry 2346 (class 0 OID 16464)
-- Dependencies: 173
-- Data for Name: pengguna; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.pengguna (id, nama, email, password, no_telepon, created_at, updated_at, remember_token) FROM stdin;
3	ramdan	ramdan@gmail.com	$2y$10$3xcNyzMWb8A.Lu31RuZyq.xgdpXl2oCQtx1ifnNB.YwMxBBiljO0K	081223445566	\N	\N	gEbphICnr1
\.


--
-- TOC entry 2489 (class 0 OID 0)
-- Dependencies: 172
-- Name: pengguna_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.pengguna_id_seq', 3, true);


--
-- TOC entry 2360 (class 0 OID 16573)
-- Dependencies: 187
-- Data for Name: posko; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.posko (id, kecamatan_id, nama, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2490 (class 0 OID 0)
-- Dependencies: 186
-- Name: posko_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.posko_id_seq', 1, false);


--
-- TOC entry 2412 (class 0 OID 18016)
-- Dependencies: 239
-- Data for Name: potensi_karhutla; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.potensi_karhutla (id, nama, created_at, updated_at) FROM stdin;
1	rendah	\N	\N
2	sedang	\N	\N
3	tinggi	\N	\N
\.


--
-- TOC entry 2491 (class 0 OID 0)
-- Dependencies: 238
-- Name: potensi_karhutla_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.potensi_karhutla_id_seq', 3, true);


--
-- TOC entry 2352 (class 0 OID 16505)
-- Dependencies: 179
-- Data for Name: provinsi; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.provinsi (id, nama, created_at, updated_at) FROM stdin;
54	Kalimantan Barat	\N	\N
55	Sumatera Selatan	\N	\N
56	Kalimantan Tengah	\N	\N
57	Riau	\N	\N
58	Jambi	\N	\N
59	Kalimantan Timur	\N	\N
60	Kalimantan Selatan	\N	\N
\.


--
-- TOC entry 2492 (class 0 OID 0)
-- Dependencies: 178
-- Name: provinsi_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.provinsi_id_seq', 60, true);


--
-- TOC entry 2394 (class 0 OID 16826)
-- Dependencies: 221
-- Data for Name: satelit; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.satelit (id, nama, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2493 (class 0 OID 0)
-- Dependencies: 220
-- Name: satelit_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.satelit_id_seq', 1, false);


--
-- TOC entry 2380 (class 0 OID 16729)
-- Dependencies: 207
-- Data for Name: sumber_air; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sumber_air (id, name, created_at, updated_at) FROM stdin;
1	parit	\N	\N
\.


--
-- TOC entry 2494 (class 0 OID 0)
-- Dependencies: 206
-- Name: sumber_air_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sumber_air_id_seq', 1, true);


--
-- TOC entry 2376 (class 0 OID 16702)
-- Dependencies: 203
-- Data for Name: tanah; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tanah (id, nama, created_at, updated_at) FROM stdin;
1	gambut	\N	\N
\.


--
-- TOC entry 2495 (class 0 OID 0)
-- Dependencies: 202
-- Name: tanah_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tanah_id_seq', 1, true);


--
-- TOC entry 2402 (class 0 OID 16905)
-- Dependencies: 229
-- Data for Name: test; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.test (id, nama, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 2496 (class 0 OID 0)
-- Dependencies: 228
-- Name: test_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.test_id_seq', 1, false);


--
-- TOC entry 2372 (class 0 OID 16676)
-- Dependencies: 199
-- Data for Name: vegetasi; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.vegetasi (id, nama, created_at, updated_at) FROM stdin;
1	ilalang	\N	\N
2	palawija	\N	\N
3	semak belukar	\N	\N
4	pakis	\N	\N
5	galam	\N	\N
6	sempuk	\N	\N
\.


--
-- TOC entry 2497 (class 0 OID 0)
-- Dependencies: 198
-- Name: vegetasi_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.vegetasi_id_seq', 6, true);


--
-- TOC entry 2171 (class 2606 OID 16813)
-- Name: aktivitas_harian_patroli_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.aktivitas_harian_patroli
    ADD CONSTRAINT aktivitas_harian_patroli_pkey PRIMARY KEY (id);


--
-- TOC entry 2169 (class 2606 OID 16805)
-- Name: aktivitas_harian_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.aktivitas_harian
    ADD CONSTRAINT aktivitas_harian_pkey PRIMARY KEY (id);


--
-- TOC entry 2167 (class 2606 OID 16787)
-- Name: anggota_patroli_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.anggota_patroli
    ADD CONSTRAINT anggota_patroli_pkey PRIMARY KEY (id);


--
-- TOC entry 2165 (class 2606 OID 16779)
-- Name: anggota_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.anggota
    ADD CONSTRAINT anggota_pkey PRIMARY KEY (id);


--
-- TOC entry 2187 (class 2606 OID 17961)
-- Name: cuaca_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.cuaca
    ADD CONSTRAINT cuaca_pkey PRIMARY KEY (id);


--
-- TOC entry 2185 (class 2606 OID 17950)
-- Name: curah_hujan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.curah_hujan
    ADD CONSTRAINT curah_hujan_pkey PRIMARY KEY (id);


--
-- TOC entry 2133 (class 2606 OID 16531)
-- Name: daops_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.daops
    ADD CONSTRAINT daops_pkey PRIMARY KEY (id);


--
-- TOC entry 2141 (class 2606 OID 16591)
-- Name: desa_kelurahan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.desa_kelurahan
    ADD CONSTRAINT desa_kelurahan_pkey PRIMARY KEY (id);


--
-- TOC entry 2195 (class 2606 OID 18086)
-- Name: dokumentasi_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.dokumentasi
    ADD CONSTRAINT dokumentasi_pkey PRIMARY KEY (id);


--
-- TOC entry 2127 (class 2606 OID 16483)
-- Name: hak_akses_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.hak_akses
    ADD CONSTRAINT hak_akses_pkey PRIMARY KEY (id);


--
-- TOC entry 2163 (class 2606 OID 16763)
-- Name: hasil_uji_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.hasil_uji
    ADD CONSTRAINT hasil_uji_pkey PRIMARY KEY (id);


--
-- TOC entry 2175 (class 2606 OID 16839)
-- Name: hotspot_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.hotspot
    ADD CONSTRAINT hotspot_pkey PRIMARY KEY (id);


--
-- TOC entry 2179 (class 2606 OID 16892)
-- Name: inventori_patroli_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.inventori_patroli
    ADD CONSTRAINT inventori_patroli_pkey PRIMARY KEY (id);


--
-- TOC entry 2177 (class 2606 OID 16884)
-- Name: inventori_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.inventori
    ADD CONSTRAINT inventori_pkey PRIMARY KEY (id);


--
-- TOC entry 2189 (class 2606 OID 18012)
-- Name: kategori_kondisi_vegetasi_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.kategori_kondisi_vegetasi
    ADD CONSTRAINT kategori_kondisi_vegetasi_pkey PRIMARY KEY (id);


--
-- TOC entry 2143 (class 2606 OID 16604)
-- Name: kategori_patroli_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.kategori_patroli
    ADD CONSTRAINT kategori_patroli_pkey PRIMARY KEY (id);


--
-- TOC entry 2137 (class 2606 OID 16557)
-- Name: kecamatan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.kecamatan
    ADD CONSTRAINT kecamatan_pkey PRIMARY KEY (id);


--
-- TOC entry 2145 (class 2606 OID 16626)
-- Name: kegiatan_patroli_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.kegiatan_patroli
    ADD CONSTRAINT kegiatan_patroli_pkey PRIMARY KEY (id);


--
-- TOC entry 2183 (class 2606 OID 17939)
-- Name: kondisi_karhutla_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.kondisi_karhutla
    ADD CONSTRAINT kondisi_karhutla_pkey PRIMARY KEY (id);


--
-- TOC entry 2161 (class 2606 OID 16742)
-- Name: kondisi_sumber_air_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.kondisi_sumber_air
    ADD CONSTRAINT kondisi_sumber_air_pkey PRIMARY KEY (id);


--
-- TOC entry 2157 (class 2606 OID 16715)
-- Name: kondisi_tanah_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.kondisi_tanah
    ADD CONSTRAINT kondisi_tanah_pkey PRIMARY KEY (id);


--
-- TOC entry 2153 (class 2606 OID 16689)
-- Name: kondisi_vegetasi_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.kondisi_vegetasi
    ADD CONSTRAINT kondisi_vegetasi_pkey PRIMARY KEY (id);


--
-- TOC entry 2135 (class 2606 OID 16544)
-- Name: kota_kab_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.kota_kab
    ADD CONSTRAINT kota_kab_pkey PRIMARY KEY (id);


--
-- TOC entry 2129 (class 2606 OID 16491)
-- Name: level_pengguna_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.level_pengguna
    ADD CONSTRAINT level_pengguna_pkey PRIMARY KEY (id);


--
-- TOC entry 2149 (class 2606 OID 16663)
-- Name: patroli_darat_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.patroli_darat
    ADD CONSTRAINT patroli_darat_pkey PRIMARY KEY (id);


--
-- TOC entry 2147 (class 2606 OID 16642)
-- Name: patroli_udara_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.patroli_udara
    ADD CONSTRAINT patroli_udara_pkey PRIMARY KEY (id);


--
-- TOC entry 2193 (class 2606 OID 18075)
-- Name: pemadaman_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.pemadaman
    ADD CONSTRAINT pemadaman_pkey PRIMARY KEY (id);


--
-- TOC entry 2125 (class 2606 OID 16472)
-- Name: pengguna_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.pengguna
    ADD CONSTRAINT pengguna_pkey PRIMARY KEY (id);


--
-- TOC entry 2139 (class 2606 OID 16578)
-- Name: posko_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.posko
    ADD CONSTRAINT posko_pkey PRIMARY KEY (id);


--
-- TOC entry 2191 (class 2606 OID 18024)
-- Name: potensi_karhutla_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.potensi_karhutla
    ADD CONSTRAINT potensi_karhutla_pkey PRIMARY KEY (id);


--
-- TOC entry 2131 (class 2606 OID 16510)
-- Name: provinsi_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.provinsi
    ADD CONSTRAINT provinsi_pkey PRIMARY KEY (id);


--
-- TOC entry 2173 (class 2606 OID 16831)
-- Name: satelit_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.satelit
    ADD CONSTRAINT satelit_pkey PRIMARY KEY (id);


--
-- TOC entry 2159 (class 2606 OID 16734)
-- Name: sumber_air_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.sumber_air
    ADD CONSTRAINT sumber_air_pkey PRIMARY KEY (id);


--
-- TOC entry 2155 (class 2606 OID 16707)
-- Name: tanah_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.tanah
    ADD CONSTRAINT tanah_pkey PRIMARY KEY (id);


--
-- TOC entry 2181 (class 2606 OID 16910)
-- Name: test_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.test
    ADD CONSTRAINT test_pkey PRIMARY KEY (id);


--
-- TOC entry 2151 (class 2606 OID 16681)
-- Name: vegetasi_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.vegetasi
    ADD CONSTRAINT vegetasi_pkey PRIMARY KEY (id);


--
-- TOC entry 2231 (class 2606 OID 16814)
-- Name: aktivitas_harian_patroli_aktivitas_harian_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.aktivitas_harian_patroli
    ADD CONSTRAINT aktivitas_harian_patroli_aktivitas_harian_id_foreign FOREIGN KEY (aktivitas_harian_id) REFERENCES public.aktivitas_harian(id);


--
-- TOC entry 2232 (class 2606 OID 16819)
-- Name: aktivitas_harian_patroli_kegiatan_patroli_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.aktivitas_harian_patroli
    ADD CONSTRAINT aktivitas_harian_patroli_kegiatan_patroli_id_foreign FOREIGN KEY (kegiatan_patroli_id) REFERENCES public.kegiatan_patroli(id);


--
-- TOC entry 2229 (class 2606 OID 16788)
-- Name: anggota_patroli_anggota_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.anggota_patroli
    ADD CONSTRAINT anggota_patroli_anggota_id_foreign FOREIGN KEY (anggota_id) REFERENCES public.anggota(id);


--
-- TOC entry 2230 (class 2606 OID 16793)
-- Name: anggota_patroli_kegiatan_patroli_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.anggota_patroli
    ADD CONSTRAINT anggota_patroli_kegiatan_patroli_id_foreign FOREIGN KEY (kegiatan_patroli_id) REFERENCES public.kegiatan_patroli(id);


--
-- TOC entry 2198 (class 2606 OID 16532)
-- Name: daops_provinsi_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.daops
    ADD CONSTRAINT daops_provinsi_id_foreign FOREIGN KEY (provinsi_id) REFERENCES public.provinsi(id);


--
-- TOC entry 2203 (class 2606 OID 17795)
-- Name: desa_kelurahan_kecamatan_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.desa_kelurahan
    ADD CONSTRAINT desa_kelurahan_kecamatan_id_foreign FOREIGN KEY (kecamatan_id) REFERENCES public.kecamatan(id);


--
-- TOC entry 2202 (class 2606 OID 16592)
-- Name: desa_kelurahan_posko_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.desa_kelurahan
    ADD CONSTRAINT desa_kelurahan_posko_id_foreign FOREIGN KEY (posko_id) REFERENCES public.posko(id);


--
-- TOC entry 2228 (class 2606 OID 16764)
-- Name: hasil_uji_patroli_darat_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hasil_uji
    ADD CONSTRAINT hasil_uji_patroli_darat_id_foreign FOREIGN KEY (patroli_darat_id) REFERENCES public.patroli_darat(id);


--
-- TOC entry 2234 (class 2606 OID 16845)
-- Name: hotspot_kegiatan_patroli_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotspot
    ADD CONSTRAINT hotspot_kegiatan_patroli_id_foreign FOREIGN KEY (kegiatan_patroli_id) REFERENCES public.kegiatan_patroli(id);


--
-- TOC entry 2233 (class 2606 OID 16840)
-- Name: hotspot_satelit_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotspot
    ADD CONSTRAINT hotspot_satelit_id_foreign FOREIGN KEY (satelit_id) REFERENCES public.satelit(id);


--
-- TOC entry 2236 (class 2606 OID 16898)
-- Name: inventori_patroli_inventori_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.inventori_patroli
    ADD CONSTRAINT inventori_patroli_inventori_id_foreign FOREIGN KEY (inventori_id) REFERENCES public.inventori(id);


--
-- TOC entry 2235 (class 2606 OID 16893)
-- Name: inventori_patroli_kegiatan_patroli_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.inventori_patroli
    ADD CONSTRAINT inventori_patroli_kegiatan_patroli_id_foreign FOREIGN KEY (kegiatan_patroli_id) REFERENCES public.kegiatan_patroli(id);


--
-- TOC entry 2200 (class 2606 OID 16558)
-- Name: kecamatan_kota_kab_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kecamatan
    ADD CONSTRAINT kecamatan_kota_kab_id_foreign FOREIGN KEY (kota_kab_id) REFERENCES public.kota_kab(id);


--
-- TOC entry 2204 (class 2606 OID 16627)
-- Name: kegiatan_patroli_kategori_patroli_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kegiatan_patroli
    ADD CONSTRAINT kegiatan_patroli_kategori_patroli_id_foreign FOREIGN KEY (kategori_patroli_id) REFERENCES public.kategori_patroli(id);


--
-- TOC entry 2226 (class 2606 OID 16743)
-- Name: kondisi_sumber_air_patroli_darat_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_sumber_air
    ADD CONSTRAINT kondisi_sumber_air_patroli_darat_id_foreign FOREIGN KEY (patroli_darat_id) REFERENCES public.patroli_darat(id);


--
-- TOC entry 2227 (class 2606 OID 16748)
-- Name: kondisi_sumber_air_sumber_air_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_sumber_air
    ADD CONSTRAINT kondisi_sumber_air_sumber_air_id_foreign FOREIGN KEY (sumber_air_id) REFERENCES public.sumber_air(id);


--
-- TOC entry 2225 (class 2606 OID 18063)
-- Name: kondisi_tanah_kondisi_karhutla_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_tanah
    ADD CONSTRAINT kondisi_tanah_kondisi_karhutla_id_foreign FOREIGN KEY (kondisi_karhutla_id) REFERENCES public.kondisi_karhutla(id);


--
-- TOC entry 2222 (class 2606 OID 16716)
-- Name: kondisi_tanah_patroli_darat_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_tanah
    ADD CONSTRAINT kondisi_tanah_patroli_darat_id_foreign FOREIGN KEY (patroli_darat_id) REFERENCES public.patroli_darat(id);


--
-- TOC entry 2224 (class 2606 OID 18058)
-- Name: kondisi_tanah_potensi_karhutla_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_tanah
    ADD CONSTRAINT kondisi_tanah_potensi_karhutla_id_foreign FOREIGN KEY (potensi_karhutla_id) REFERENCES public.potensi_karhutla(id);


--
-- TOC entry 2223 (class 2606 OID 16721)
-- Name: kondisi_tanah_tanah_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_tanah
    ADD CONSTRAINT kondisi_tanah_tanah_id_foreign FOREIGN KEY (tanah_id) REFERENCES public.tanah(id);


--
-- TOC entry 2219 (class 2606 OID 18043)
-- Name: kondisi_vegetasi_kategori_kondisi_vegetasi_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_vegetasi
    ADD CONSTRAINT kondisi_vegetasi_kategori_kondisi_vegetasi_id_foreign FOREIGN KEY (kategori_kondisi_vegetasi_id) REFERENCES public.kategori_kondisi_vegetasi(id);


--
-- TOC entry 2221 (class 2606 OID 18053)
-- Name: kondisi_vegetasi_kondisi_karhutla_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_vegetasi
    ADD CONSTRAINT kondisi_vegetasi_kondisi_karhutla_id_foreign FOREIGN KEY (kondisi_karhutla_id) REFERENCES public.kondisi_karhutla(id);


--
-- TOC entry 2217 (class 2606 OID 16690)
-- Name: kondisi_vegetasi_patroli_darat_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_vegetasi
    ADD CONSTRAINT kondisi_vegetasi_patroli_darat_id_foreign FOREIGN KEY (patroli_darat_id) REFERENCES public.patroli_darat(id);


--
-- TOC entry 2220 (class 2606 OID 18048)
-- Name: kondisi_vegetasi_potensi_karhutla_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_vegetasi
    ADD CONSTRAINT kondisi_vegetasi_potensi_karhutla_id_foreign FOREIGN KEY (potensi_karhutla_id) REFERENCES public.potensi_karhutla(id);


--
-- TOC entry 2218 (class 2606 OID 16695)
-- Name: kondisi_vegetasi_vegetasi_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kondisi_vegetasi
    ADD CONSTRAINT kondisi_vegetasi_vegetasi_id_foreign FOREIGN KEY (vegetasi_id) REFERENCES public.vegetasi(id);


--
-- TOC entry 2199 (class 2606 OID 16545)
-- Name: kota_kab_daops_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.kota_kab
    ADD CONSTRAINT kota_kab_daops_id_foreign FOREIGN KEY (daops_id) REFERENCES public.daops(id);


--
-- TOC entry 2197 (class 2606 OID 16497)
-- Name: level_pengguna_hak_akses_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.level_pengguna
    ADD CONSTRAINT level_pengguna_hak_akses_id_foreign FOREIGN KEY (hak_akses_id) REFERENCES public.hak_akses(id);


--
-- TOC entry 2196 (class 2606 OID 16492)
-- Name: level_pengguna_pengguna_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.level_pengguna
    ADD CONSTRAINT level_pengguna_pengguna_id_foreign FOREIGN KEY (pengguna_id) REFERENCES public.pengguna(id);


--
-- TOC entry 2213 (class 2606 OID 17962)
-- Name: patroli_darat_cuaca_pagi_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.patroli_darat
    ADD CONSTRAINT patroli_darat_cuaca_pagi_id_foreign FOREIGN KEY (cuaca_pagi_id) REFERENCES public.cuaca(id);


--
-- TOC entry 2215 (class 2606 OID 17972)
-- Name: patroli_darat_cuaca_siang_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.patroli_darat
    ADD CONSTRAINT patroli_darat_cuaca_siang_id_foreign FOREIGN KEY (cuaca_siang_id) REFERENCES public.cuaca(id);


--
-- TOC entry 2214 (class 2606 OID 17967)
-- Name: patroli_darat_cuaca_sore_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.patroli_darat
    ADD CONSTRAINT patroli_darat_cuaca_sore_id_foreign FOREIGN KEY (cuaca_sore_id) REFERENCES public.cuaca(id);


--
-- TOC entry 2216 (class 2606 OID 17977)
-- Name: patroli_darat_curah_hujan_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.patroli_darat
    ADD CONSTRAINT patroli_darat_curah_hujan_id_foreign FOREIGN KEY (curah_hujan_id) REFERENCES public.curah_hujan(id);


--
-- TOC entry 2212 (class 2606 OID 16669)
-- Name: patroli_darat_desa_kelurahan_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.patroli_darat
    ADD CONSTRAINT patroli_darat_desa_kelurahan_id_foreign FOREIGN KEY (desa_kelurahan_id) REFERENCES public.desa_kelurahan(id);


--
-- TOC entry 2211 (class 2606 OID 16664)
-- Name: patroli_darat_kegiatan_patroli_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.patroli_darat
    ADD CONSTRAINT patroli_darat_kegiatan_patroli_id_foreign FOREIGN KEY (kegiatan_patroli_id) REFERENCES public.kegiatan_patroli(id);


--
-- TOC entry 2208 (class 2606 OID 17987)
-- Name: patroli_udara_cuaca_pagi_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.patroli_udara
    ADD CONSTRAINT patroli_udara_cuaca_pagi_id_foreign FOREIGN KEY (cuaca_pagi_id) REFERENCES public.cuaca(id);


--
-- TOC entry 2207 (class 2606 OID 17982)
-- Name: patroli_udara_cuaca_siang_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.patroli_udara
    ADD CONSTRAINT patroli_udara_cuaca_siang_id_foreign FOREIGN KEY (cuaca_siang_id) REFERENCES public.cuaca(id);


--
-- TOC entry 2209 (class 2606 OID 17992)
-- Name: patroli_udara_cuaca_sore_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.patroli_udara
    ADD CONSTRAINT patroli_udara_cuaca_sore_id_foreign FOREIGN KEY (cuaca_sore_id) REFERENCES public.cuaca(id);


--
-- TOC entry 2210 (class 2606 OID 17997)
-- Name: patroli_udara_curah_hujan_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.patroli_udara
    ADD CONSTRAINT patroli_udara_curah_hujan_id_foreign FOREIGN KEY (curah_hujan_id) REFERENCES public.curah_hujan(id);


--
-- TOC entry 2206 (class 2606 OID 16648)
-- Name: patroli_udara_desa_kelurahan_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.patroli_udara
    ADD CONSTRAINT patroli_udara_desa_kelurahan_id_foreign FOREIGN KEY (desa_kelurahan_id) REFERENCES public.desa_kelurahan(id);


--
-- TOC entry 2205 (class 2606 OID 16643)
-- Name: patroli_udara_kegiatan_patroli_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.patroli_udara
    ADD CONSTRAINT patroli_udara_kegiatan_patroli_id_foreign FOREIGN KEY (kegiatan_patroli_id) REFERENCES public.kegiatan_patroli(id);


--
-- TOC entry 2201 (class 2606 OID 16579)
-- Name: posko_kecamatan_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.posko
    ADD CONSTRAINT posko_kecamatan_id_foreign FOREIGN KEY (kecamatan_id) REFERENCES public.kecamatan(id);


--
-- TOC entry 2424 (class 0 OID 0)
-- Dependencies: 6
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2018-10-13 06:11:01 WIB

--
-- PostgreSQL database dump complete
--

