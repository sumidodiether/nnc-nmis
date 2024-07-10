--
-- PostgreSQL database cluster dump
--

SET default_transaction_read_only = off;

SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;

--
-- Roles
--

CREATE ROLE nnc_dbuser;
ALTER ROLE nnc_dbuser WITH NOSUPERUSER INHERIT NOCREATEROLE NOCREATEDB LOGIN NOREPLICATION NOBYPASSRLS PASSWORD 'SCRAM-SHA-256$4096:FARKkqf+JeZJx2Vo+R9X3Q==$Ly3DhrYvlak3G+tCY87gygEfIhN2qvHip9WxCeh8MFE=:ihDDR9JyOhcJ/K8qoTCy/eKXpTyLjnL9qjof/wr5FMw=';
CREATE ROLE postgres;
ALTER ROLE postgres WITH SUPERUSER INHERIT CREATEROLE CREATEDB LOGIN REPLICATION BYPASSRLS;




--
-- PostgreSQL database cluster dump complete
--

