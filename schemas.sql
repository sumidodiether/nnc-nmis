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
-- Databases
--

--
-- Database "template1" dump
--

\connect template1

--
-- PostgreSQL database dump
--

-- Dumped from database version 14.12 (Ubuntu 14.12-0ubuntu0.22.04.1)
-- Dumped by pg_dump version 14.12 (Ubuntu 14.12-0ubuntu0.22.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- PostgreSQL database dump complete
--

--
-- Database "nnc_db" dump
--

--
-- PostgreSQL database dump
--

-- Dumped from database version 14.12 (Ubuntu 14.12-0ubuntu0.22.04.1)
-- Dumped by pg_dump version 14.12 (Ubuntu 14.12-0ubuntu0.22.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: nnc_db; Type: DATABASE; Schema: -; Owner: nnc_dbuser
--

CREATE DATABASE nnc_db WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'en_US.UTF-8';


ALTER DATABASE nnc_db OWNER TO nnc_dbuser;

\connect nnc_db

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: barangays; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.barangays (
    id integer NOT NULL,
    barangay character varying(100) NOT NULL,
    brgytype character varying(100) NOT NULL,
    brgynumber integer NOT NULL,
    municipal_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    psgccode_id integer NOT NULL,
    city_id integer NOT NULL
);


ALTER TABLE public.barangays OWNER TO nnc_dbuser;

--
-- Name: barangays_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.barangays_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.barangays_id_seq OWNER TO nnc_dbuser;

--
-- Name: barangays_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.barangays_id_seq OWNED BY public.barangays.id;


--
-- Name: barangaytracking; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.barangaytracking (
    id integer NOT NULL,
    status integer NOT NULL,
    barangay_id integer NOT NULL,
    municipal_id integer NOT NULL,
    user_id integer NOT NULL,
    lguprofilebarangay_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.barangaytracking OWNER TO nnc_dbuser;

--
-- Name: barangaytracking_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.barangaytracking_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.barangaytracking_id_seq OWNER TO nnc_dbuser;

--
-- Name: barangaytracking_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.barangaytracking_id_seq OWNED BY public.barangaytracking.id;


--
-- Name: barangaytracking_lnfp; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.barangaytracking_lnfp (
);


ALTER TABLE public.barangaytracking_lnfp OWNER TO nnc_dbuser;

--
-- Name: bnss; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.bnss (
    id integer NOT NULL,
    "Barangay" character varying(100) NOT NULL,
    statusemployment character varying(100) NOT NULL,
    beneficiaryname character varying(100) NOT NULL,
    relationship character varying(255) NOT NULL,
    periodactivefrom date NOT NULL,
    periodactiveto date NOT NULL,
    lastupdate date NOT NULL,
    bnsstatus character varying(100) NOT NULL,
    personnel_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.bnss OWNER TO nnc_dbuser;

--
-- Name: bnss_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.bnss_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bnss_id_seq OWNER TO nnc_dbuser;

--
-- Name: bnss_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.bnss_id_seq OWNED BY public.bnss.id;


--
-- Name: brgy; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.brgy (
    id integer,
    brgycode integer,
    brgyname character varying(255),
    regcode integer,
    provcode integer,
    citymuncode integer
);


ALTER TABLE public.brgy OWNER TO nnc_dbuser;

--
-- Name: changes_ns; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.changes_ns (
    id integer NOT NULL,
    lgu_profile_id integer NOT NULL,
    underweight_child_rating integer NOT NULL,
    underweight_child_remarks character varying(255) NOT NULL,
    stundent_child_rating integer NOT NULL,
    stundent_child_remarks character varying(255) NOT NULL,
    wasted_child_rating integer NOT NULL,
    wasted_child_remarks character varying(255) NOT NULL,
    obese_child_rating integer NOT NULL,
    obese_child_remarks character varying(255) NOT NULL,
    wasted_school_rating integer NOT NULL,
    wasted_school_remarks character varying(255) NOT NULL,
    obese_school_rating integer NOT NULL,
    obese_school_remarks character varying(255) NOT NULL,
    risk_pregnant_rating integer NOT NULL,
    risk_pregnant_remarks character varying(255) NOT NULL,
    timbang_plus_rating integer NOT NULL,
    timbang_plus_remarks character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.changes_ns OWNER TO nnc_dbuser;

--
-- Name: changes_ns_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.changes_ns_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.changes_ns_id_seq OWNER TO nnc_dbuser;

--
-- Name: changes_ns_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.changes_ns_id_seq OWNED BY public.changes_ns.id;


--
-- Name: cities; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.cities (
    id integer NOT NULL,
    psgccode integer,
    cityname character varying(255),
    regdesc integer,
    provcode integer,
    citymuncode integer
);


ALTER TABLE public.cities OWNER TO nnc_dbuser;

--
-- Name: citys; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.citys (
    id bigint NOT NULL,
    city character varying(100) NOT NULL,
    cityclass character varying(100) NOT NULL,
    citynumber integer NOT NULL,
    "cityIncomeClass" character varying(100) NOT NULL,
    region_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    psgccode_id integer NOT NULL
);


ALTER TABLE public.citys OWNER TO nnc_dbuser;

--
-- Name: citys_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.citys_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.citys_id_seq OWNER TO nnc_dbuser;

--
-- Name: citys_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.citys_id_seq OWNED BY public.citys.id;


--
-- Name: discussion_questions; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.discussion_questions (
    id integer NOT NULL,
    lgu_profile_id integer NOT NULL,
    vision_good_practices_remarks character varying(255) NOT NULL,
    vision_issues_problems_remarks character varying(255) NOT NULL,
    vision_local_initiatives_remarks character varying(255) NOT NULL,
    vision_immediate_actions_remarks character varying(255) NOT NULL,
    policies_good_practices_remarks character varying(255) NOT NULL,
    policies_issues_problems_remarks character varying(255) NOT NULL,
    policies_local_initiatives_remarks character varying(255) NOT NULL,
    policies_immediate_actions_remarks character varying(255) NOT NULL,
    governance_good_practices_remarks character varying(255) NOT NULL,
    governance_issues_problems_remarks character varying(255) NOT NULL,
    governance_local_initiatives_remarks character varying(255) NOT NULL,
    governance_immediate_actions_remarks character varying(255) NOT NULL,
    nutri_good_practices_remarks character varying(255) NOT NULL,
    nutri_issues_problems_remarks character varying(255) NOT NULL,
    nuti_local_initiatives_remarks character varying(255) NOT NULL,
    nutri_immediate_actions_remarks character varying(255) NOT NULL,
    services_good_practices_remarks character varying(255) NOT NULL,
    services_issues_problems_remarks character varying(255) NOT NULL,
    services_local_initiatives_remarks character varying(255) NOT NULL,
    services_immediate_actions_remarks character varying(255) NOT NULL,
    changes_good_practices_remarks character varying(255) NOT NULL,
    changes_issues_problems_remarks character varying(255) NOT NULL,
    changes_local_initiatives_remarks character varying(255) NOT NULL,
    changes_immediate_actions_remarks character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.discussion_questions OWNER TO nnc_dbuser;

--
-- Name: discussion_questions_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.discussion_questions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.discussion_questions_id_seq OWNER TO nnc_dbuser;

--
-- Name: discussion_questions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.discussion_questions_id_seq OWNED BY public.discussion_questions.id;


--
-- Name: equipment_inventory; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.equipment_inventory (
    id bigint NOT NULL,
    "totalBarangay" integer NOT NULL,
    "woodenHB" integer NOT NULL,
    "nonWoodenHB" integer NOT NULL,
    "defectiveHB" double precision NOT NULL,
    "totalHB" double precision NOT NULL,
    "availabilityHB" double precision NOT NULL,
    "steelRules" integer NOT NULL,
    microtoise integer NOT NULL,
    infantometer integer NOT NULL,
    "remarksHB" character varying(255) NOT NULL,
    "hangingType" integer NOT NULL,
    "defectiveWS" integer NOT NULL,
    "totalWS" double precision NOT NULL,
    "availabilityWS" double precision NOT NULL,
    "infatScale" integer NOT NULL,
    "beamBalance" integer NOT NULL,
    "remarksWS" character varying(255) NOT NULL,
    child integer NOT NULL,
    "defectiveMUAC_child" integer NOT NULL,
    "totalMUAC_Child" double precision NOT NULL,
    "availabilityMUAC_child" double precision NOT NULL,
    adults integer NOT NULL,
    "defectiveMUAC_adults" integer NOT NULL,
    "totalMUAC_adults" double precision NOT NULL,
    "availabilityMUAC_adults" double precision NOT NULL,
    "remarksMUAC" character varying(255) NOT NULL,
    psgccode_id integer NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    municipal_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.equipment_inventory OWNER TO nnc_dbuser;

--
-- Name: equipment_inventory_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.equipment_inventory_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.equipment_inventory_id_seq OWNER TO nnc_dbuser;

--
-- Name: equipment_inventory_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.equipment_inventory_id_seq OWNED BY public.equipment_inventory.id;


--
-- Name: form_fields; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.form_fields (
    id bigint NOT NULL,
    form_id bigint NOT NULL,
    label character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    type character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.form_fields OWNER TO nnc_dbuser;

--
-- Name: form_fields_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.form_fields_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.form_fields_id_seq OWNER TO nnc_dbuser;

--
-- Name: form_fields_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.form_fields_id_seq OWNED BY public.form_fields.id;


--
-- Name: form_submissions; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.form_submissions (
    id bigint NOT NULL,
    form_id bigint NOT NULL,
    data json NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.form_submissions OWNER TO nnc_dbuser;

--
-- Name: form_submissions_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.form_submissions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.form_submissions_id_seq OWNER TO nnc_dbuser;

--
-- Name: form_submissions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.form_submissions_id_seq OWNED BY public.form_submissions.id;


--
-- Name: formbuilder; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.formbuilder (
    id bigint NOT NULL,
    formname character varying(255) NOT NULL,
    datecreated date NOT NULL,
    lastupdate date NOT NULL,
    status character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.formbuilder OWNER TO nnc_dbuser;

--
-- Name: formbuilder_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.formbuilder_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.formbuilder_id_seq OWNER TO nnc_dbuser;

--
-- Name: formbuilder_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.formbuilder_id_seq OWNED BY public.formbuilder.id;


--
-- Name: forms; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.forms (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.forms OWNER TO nnc_dbuser;

--
-- Name: forms_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.forms_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.forms_id_seq OWNER TO nnc_dbuser;

--
-- Name: forms_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.forms_id_seq OWNED BY public.forms.id;


--
-- Name: governances; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.governances (
    id integer NOT NULL,
    rating3a integer NOT NULL,
    rating3b integer NOT NULL,
    rating3c integer NOT NULL,
    remarks3a character varying(255) NOT NULL,
    remarks3b character varying(255) NOT NULL,
    remarks3c character varying(255) NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    municipal_id integer NOT NULL,
    barangay_id integer NOT NULL,
    lguprofile_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.governances OWNER TO nnc_dbuser;

--
-- Name: governances_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.governances_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.governances_id_seq OWNER TO nnc_dbuser;

--
-- Name: governances_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.governances_id_seq OWNED BY public.governances.id;


--
-- Name: lguprofilebarangay; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.lguprofilebarangay (
    id integer NOT NULL,
    "dateMonitoring" date NOT NULL,
    "periodCovereda" character varying(10) NOT NULL,
    "totalPopulation" integer NOT NULL,
    "noHousehold" integer NOT NULL,
    "noPuroks" integer NOT NULL,
    "householdWater" integer NOT NULL,
    "householdToilets" integer NOT NULL,
    "dayCareCenter" integer NOT NULL,
    elementary integer NOT NULL,
    "secondarySchool" integer NOT NULL,
    "healthStations" integer NOT NULL,
    "retailOutlets" integer NOT NULL,
    bakeries integer NOT NULL,
    markets integer NOT NULL,
    "transportTerminals" integer NOT NULL,
    breastfeeding integer NOT NULL,
    terrain character varying(255) NOT NULL,
    hazards character varying(255) NOT NULL,
    "affectedLGU" character varying(255) NOT NULL,
    "populationA" integer NOT NULL,
    "populationB" integer NOT NULL,
    "populationC" integer NOT NULL,
    "populationD" integer NOT NULL,
    "populationE" integer NOT NULL,
    "populationF" integer NOT NULL,
    "actualA" integer NOT NULL,
    "actualB" integer NOT NULL,
    "actualC" integer NOT NULL,
    "actualD" integer NOT NULL,
    "actualE" integer NOT NULL,
    "actualF" integer NOT NULL,
    "psnormalAAA" integer NOT NULL,
    "psunderweightAAA" integer NOT NULL,
    "pssevereUnderweightAAA" integer NOT NULL,
    "psoverweightAAA" integer NOT NULL,
    "psnormalBAA" integer NOT NULL,
    "psunderweightBAA" integer NOT NULL,
    "pssevereUnderweightBAA" integer NOT NULL,
    "psoverweightBAA" integer NOT NULL,
    "psnormalCAA" integer NOT NULL,
    "psunderweightCAA" integer NOT NULL,
    "pssevereUnderweightCAA" integer NOT NULL,
    "psoverweightCAA" integer NOT NULL,
    "psnormalABA" integer NOT NULL,
    "pswastedABA" integer NOT NULL,
    "psseverelyWastedABA" integer NOT NULL,
    "psoverweightABA" integer NOT NULL,
    "psobeseABA" integer NOT NULL,
    "psnormalBBA" integer NOT NULL,
    "pswastedBBA" integer NOT NULL,
    "psseverelyWastedBBA" integer NOT NULL,
    "psoverweightBBA" integer NOT NULL,
    "psobeseBBA" integer NOT NULL,
    "psnormalCCA" integer NOT NULL,
    "pswastedCCA" integer NOT NULL,
    "psseverelyWastedCCA" integer NOT NULL,
    "psoverweightCCA" integer NOT NULL,
    "psobeseCCA" integer NOT NULL,
    "psnormalAAB" integer NOT NULL,
    "psstuntedAAB" integer NOT NULL,
    "pssevereStuntedAAB" integer NOT NULL,
    "pstallAAB" integer NOT NULL,
    "psnormalBBB" integer NOT NULL,
    "psstuntedBBB" integer NOT NULL,
    "pssevereStuntedBBB" integer NOT NULL,
    "pstallBBB" integer NOT NULL,
    "psnormalCCC" integer NOT NULL,
    "psstuntedCCC" integer NOT NULL,
    "pssevereStuntedCCC" integer NOT NULL,
    "pstallCCC" integer NOT NULL,
    "scnormalABA" integer NOT NULL,
    "scwastedABA" integer NOT NULL,
    "scseverelyWastedABA" integer NOT NULL,
    "scoverweightABA" integer NOT NULL,
    "scobeseABA" integer NOT NULL,
    "scnormalBBA" integer NOT NULL,
    "scwastedBBA" integer NOT NULL,
    "scseverelyWastedBBA" integer NOT NULL,
    "scoverweightBBA" integer NOT NULL,
    "scobeseBBA" integer NOT NULL,
    "scnormalCCA" integer NOT NULL,
    "scwastedCCA" integer NOT NULL,
    "scseverelyWastedCCA" integer NOT NULL,
    "scoverweightCCA" integer NOT NULL,
    "scobeseCCA" integer NOT NULL,
    "pwnormalAAA" integer NOT NULL,
    "pwnutritionllyatriskAAA" integer NOT NULL,
    "pwoverweightAAA" integer NOT NULL,
    "pwobeseAAA" integer NOT NULL,
    "pwnormalBAA" integer NOT NULL,
    "pwnutritionllyatriskBAA" integer NOT NULL,
    "pwoverweightBAA" integer NOT NULL,
    "pwobeseBAA" integer NOT NULL,
    "pwnormalCAA" integer NOT NULL,
    "pwnutritionllyatriskCAA" integer NOT NULL,
    "pwoverweightCAA" integer NOT NULL,
    "pwobeseCAA" integer NOT NULL,
    "landAreaResidential" character varying(255) NOT NULL,
    "remarksResidential" character varying(255) NOT NULL,
    "landAreaCommercial" character varying(255) NOT NULL,
    "remarksCommercial" character varying(255) NOT NULL,
    "landAreaIndustrial" character varying(255) NOT NULL,
    "remarksIndustrial" character varying(255) NOT NULL,
    "landAreaAgricultural" character varying(255) NOT NULL,
    "remarksAgricultural" character varying(255) NOT NULL,
    "landAreaFLMLNP" character varying(255) NOT NULL,
    "remarksFLMLNP" character varying(255) NOT NULL,
    "Isource" character varying(255) NOT NULL,
    "Iavailreceived" character varying(255) NOT NULL,
    "Idatereceived" date NOT NULL,
    "Ivolumepax" integer NOT NULL,
    "Iremarks" character varying(255) NOT NULL,
    "IIAsource" character varying(255) NOT NULL,
    "IIAavailreceived" character varying(255) NOT NULL,
    "IIAdatereceived" date NOT NULL,
    "IIAvolumepax" integer NOT NULL,
    "IIAremarks" character varying(255) NOT NULL,
    "IIBsource" character varying(255) NOT NULL,
    "IIBavailreceived" character varying(255) NOT NULL,
    "IIBdatereceived" date NOT NULL,
    "IIBvolumepax" integer NOT NULL,
    "IIBremarks" character varying(255) NOT NULL,
    "IIIAsource" character varying(255) NOT NULL,
    "IIIAavailreceived" character varying(255) NOT NULL,
    "IIIAdatereceived" date NOT NULL,
    "IIIAvolumepax" integer NOT NULL,
    "IIIAremarks" character varying(255) NOT NULL,
    "IIIBsource" character varying(255) NOT NULL,
    "IIIBavailreceived" character varying(255) NOT NULL,
    "IIIBdatereceived" date NOT NULL,
    "IIIBvolumepax" integer NOT NULL,
    "IIIBremarks" character varying(255) NOT NULL,
    "IIICsource" character varying(255) NOT NULL,
    "IIICavailreceived" character varying(255) NOT NULL,
    "IIICdatereceived" date NOT NULL,
    "IIICvolumepax" integer NOT NULL,
    "IIICremarks" character varying(255) NOT NULL,
    "IIIDsource" character varying(255) NOT NULL,
    "IIIDavailreceived" character varying(255) NOT NULL,
    "IIIDdatereceived" date NOT NULL,
    "IIIDvolumepax" integer NOT NULL,
    "IIIDremarks" character varying(255) NOT NULL,
    "IIIEsource" character varying(255) NOT NULL,
    "IIIEavailreceived" character varying(255) NOT NULL,
    "IIIEdatereceived" date NOT NULL,
    "IIIEvolumepax" integer NOT NULL,
    "IIIEremarks" character varying(255) NOT NULL,
    "IIIFsource" character varying(255) NOT NULL,
    "IIIFavailreceived" character varying(255) NOT NULL,
    "IIIFdatereceived" date NOT NULL,
    "IIIFvolumepax" integer NOT NULL,
    "IIIFremarks" character varying(255) NOT NULL,
    "IVAsource" character varying(255) NOT NULL,
    "IVAavailreceived" character varying(255) NOT NULL,
    "IVAdatereceived" date NOT NULL,
    "IVAvolumepax" integer NOT NULL,
    "IVAremarks" character varying(255) NOT NULL,
    "VAsource" character varying(255) NOT NULL,
    "VAavailreceived" character varying(255) NOT NULL,
    "VAdatereceived" date NOT NULL,
    "VAvolumepax" integer NOT NULL,
    "VAremarks" character varying(255) NOT NULL,
    status integer NOT NULL,
    "dateCreated" date NOT NULL,
    "dateUpdates" date NOT NULL,
    barangay_id integer NOT NULL,
    municipal_id integer NOT NULL,
    province_id integer NOT NULL,
    region_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.lguprofilebarangay OWNER TO nnc_dbuser;

--
-- Name: lguprofilebarangay_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.lguprofilebarangay_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.lguprofilebarangay_id_seq OWNER TO nnc_dbuser;

--
-- Name: lguprofilebarangay_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.lguprofilebarangay_id_seq OWNED BY public.lguprofilebarangay.id;


--
-- Name: lnc_management_function; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.lnc_management_function (
    id bigint NOT NULL,
    rating4a integer NOT NULL,
    rating4b integer NOT NULL,
    rating4c integer NOT NULL,
    rating4d integer NOT NULL,
    rating4e integer NOT NULL,
    rating4f integer NOT NULL,
    remarks4a character varying(255) NOT NULL,
    remarks4b character varying(255) NOT NULL,
    remarks4c character varying(255) NOT NULL,
    remarks4d character varying(255) NOT NULL,
    remarks4e character varying(255) NOT NULL,
    remarks4f character varying(255) NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    municipal_id integer NOT NULL,
    barangay_id integer NOT NULL,
    lguprofile_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    rating4g integer NOT NULL,
    remarks4g character varying(255) NOT NULL
);


ALTER TABLE public.lnc_management_function OWNER TO nnc_dbuser;

--
-- Name: lnc_management_function_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.lnc_management_function_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.lnc_management_function_id_seq OWNER TO nnc_dbuser;

--
-- Name: lnc_management_function_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.lnc_management_function_id_seq OWNED BY public.lnc_management_function.id;


--
-- Name: lncdata; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.lncdata (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.lncdata OWNER TO nnc_dbuser;

--
-- Name: lncdata_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.lncdata_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.lncdata_id_seq OWNER TO nnc_dbuser;

--
-- Name: lncdata_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.lncdata_id_seq OWNED BY public.lncdata.id;


--
-- Name: lnfp_form5a; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.lnfp_form5a (
    id bigint NOT NULL,
    "YearPeriod" character varying(999),
    "namePNAO" character varying(999),
    address character varying(999),
    "provOfDeployment" character varying(999),
    "numOfYears_as" character varying(999),
    "position" character varying(999),
    fulltime character varying(999),
    "withContProfAct" character varying(999),
    "capDevAct" character varying(999),
    "trainingAttended" character varying(999),
    birthday character varying(999),
    sex character varying(999),
    "dateOfDesignation" character varying(999),
    "dateOfAppointment" character varying(999),
    "educationAttainment" character varying(999),
    "secondedFromTheOffice" character varying(999),
    "elementsA" character varying(999),
    "performanceA1" character varying(999),
    "performanceA2" character varying(999),
    "performanceA3" character varying(999),
    "performanceA4" character varying(999),
    "performanceA5" character varying(999),
    "documentSourceA" character varying(999),
    "elementsB" character varying(999),
    "performanceB1" character varying(999),
    "performanceB2" character varying(999),
    "performanceB3" character varying(999),
    "performanceB4" character varying(999),
    "performanceB5" character varying(999),
    "documentSourceB" character varying(999),
    "performanceBB1" character varying(999),
    "performanceBB2" character varying(999),
    "performanceBB3" character varying(999),
    "performanceBB4" character varying(999),
    "performanceBB5" character varying(999),
    "documentSourceBB" character varying(999),
    "elementsC" character varying(999),
    "performanceC1" character varying(999),
    "performanceC2" character varying(999),
    performancec3 character varying(999),
    "performanceC4" character varying(999),
    "performanceC5" character varying(999),
    "documentSourceC" character varying(999),
    "elementsD" character varying(999),
    "performanceD1" character varying(999),
    "performanceD2" character varying(999),
    "performanceD3" character varying(999),
    "performanceD4" character varying(999),
    "performanceD5" character varying(999),
    "documentSourceD" character varying(999),
    "elementsE" character varying(999),
    "performanceE1" character varying(999),
    "performanceE2" character varying(999),
    "performanceE3" character varying(999),
    "performanceE4" character varying(999),
    "performanceE5" character varying(999),
    "documentSourceE" character varying(999),
    "elementsF" character varying(999),
    "performanceF1" character varying(999),
    "performanceF2" character varying(999),
    "performanceF3" character varying(999),
    "performanceF4" character varying(999),
    "performanceF5" character varying(999),
    "documentSourceF" character varying(999),
    "elementsG" character varying(999),
    "performanceG1" character varying(999),
    "performanceG2" character varying(999),
    "performanceG3" character varying(999),
    "performanceG4" character varying(999),
    "performanceG5" character varying(999),
    "documentSourceG" character varying(999),
    "elementsGG" character varying(999),
    "performanceGG1" character varying(999),
    "performanceGG2" character varying(999),
    "performanceGG3" character varying(999),
    "performanceGG4" character varying(999),
    "performanceGG5" character varying(999),
    "elementsH" character varying(999),
    "performanceH1" character varying(999),
    "performanceH2" character varying(999),
    "performanceH3" character varying(999),
    "performanceH4" character varying(999),
    "performanceH5" character varying(999),
    "documentSourceH" character varying(999),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    "elementsBB" character varying(999),
    "documentSourceGG" character varying(999)
);


ALTER TABLE public.lnfp_form5a OWNER TO nnc_dbuser;

--
-- Name: lnfp_form5a_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.lnfp_form5a_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.lnfp_form5a_id_seq OWNER TO nnc_dbuser;

--
-- Name: lnfp_form5a_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.lnfp_form5a_id_seq OWNED BY public.lnfp_form5a.id;


--
-- Name: lnfp_form5a_pnao; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.lnfp_form5a_pnao (
    id bigint NOT NULL,
    "YearPeriod" integer NOT NULL,
    "namePNAO" character varying(255) NOT NULL,
    address character varying(255) NOT NULL,
    "areaOfDeployment" character varying(255) NOT NULL,
    "numOfYears_as" integer NOT NULL,
    "position" character varying(255) NOT NULL,
    fulltime character varying(255) NOT NULL,
    "withContProfAct" character varying(255) NOT NULL,
    "capDevAct1" character varying(255) NOT NULL,
    "capDevAct2" character varying(255) NOT NULL,
    "capDevAct3" character varying(255) NOT NULL,
    "trainingAttended1" character varying(255) NOT NULL,
    "trainingAttended2" character varying(255) NOT NULL,
    "trainingAttended3" character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.lnfp_form5a_pnao OWNER TO nnc_dbuser;

--
-- Name: lnfp_form5a_pnao_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.lnfp_form5a_pnao_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.lnfp_form5a_pnao_id_seq OWNER TO nnc_dbuser;

--
-- Name: lnfp_form5a_pnao_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.lnfp_form5a_pnao_id_seq OWNED BY public.lnfp_form5a_pnao.id;


--
-- Name: lnfp_form5a_rr; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.lnfp_form5a_rr (
    id bigint NOT NULL,
    "nameofPnao" character varying(255),
    address character varying(255),
    "provDeploy" character varying(255),
    "numYearPnao" integer,
    fulltime character varying(255),
    "profAct" character varying(255),
    bdate date,
    sex character varying(255),
    "dateDesignation" date,
    "secondedOffice" character varying(255),
    "devActnum1" character varying(255),
    "devActnum2" character varying(255),
    "devActnum3" character varying(255),
    "ratingA" integer,
    "ratingB" integer,
    "ratingBB" integer,
    "ratingC" integer,
    "ratingD" integer,
    "ratingE" integer,
    "ratingF" integer,
    "ratingG" integer,
    "ratingGG" integer,
    "ratingH" integer,
    "remarksA" text,
    "remarksB" text,
    "remarksBB" text,
    "remarksC" text,
    "remarksD" text,
    "remarksE" text,
    "remarksF" text,
    "remarksG" text,
    "remarksGG" text,
    "remarksH" text,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    "forThePeriod" integer NOT NULL
);


ALTER TABLE public.lnfp_form5a_rr OWNER TO nnc_dbuser;

--
-- Name: lnfp_form5a_rr_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.lnfp_form5a_rr_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.lnfp_form5a_rr_id_seq OWNER TO nnc_dbuser;

--
-- Name: lnfp_form5a_rr_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.lnfp_form5a_rr_id_seq OWNED BY public.lnfp_form5a_rr.id;


--
-- Name: location_pivot; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.location_pivot (
    id bigint NOT NULL,
    psgc_id integer NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    city_id integer NOT NULL,
    municipal_id integer NOT NULL,
    barangay_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.location_pivot OWNER TO nnc_dbuser;

--
-- Name: location_pivot_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.location_pivot_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.location_pivot_id_seq OWNER TO nnc_dbuser;

--
-- Name: location_pivot_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.location_pivot_id_seq OWNED BY public.location_pivot.id;


--
-- Name: mellpi_pro_lnfps; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.mellpi_pro_lnfps (
    id bigint NOT NULL,
    barangay character varying(255) NOT NULL,
    "cityMun" character varying(255) NOT NULL,
    province character varying(255) NOT NULL,
    date_of_monitoring date NOT NULL,
    "periodCoveredyear1" date NOT NULL,
    "periodCoveredbyear2" date NOT NULL,
    "totalPopulation" integer NOT NULL,
    "noHousehold" integer NOT NULL,
    "householdWater" integer NOT NULL,
    "householdToilets" integer NOT NULL,
    "dayCareCenter" integer NOT NULL,
    elementary integer NOT NULL,
    "secondarySchool" integer NOT NULL,
    "healthStations" integer NOT NULL,
    "retailOutlets" integer NOT NULL,
    bakeries integer NOT NULL,
    markets integer NOT NULL,
    "transportTerminals" integer NOT NULL,
    at_risk_pregnantwomen integer NOT NULL,
    breastfeeding integer NOT NULL,
    "idd_Pregnant" integer NOT NULL,
    idd_lactating integer NOT NULL,
    terrain character varying(255) NOT NULL,
    hazzard character varying(255) NOT NULL,
    "affectedLGU" character varying(255) NOT NULL,
    population_estimated_6_11mos integer NOT NULL,
    population_estimated_6_23mos integer NOT NULL,
    population_estimated_12_59mos integer NOT NULL,
    population_estimated_0_59months integer NOT NULL,
    population_estimated_pregnant integer NOT NULL,
    population_estimated_lactating integer NOT NULL,
    population_actual_6_11mons integer NOT NULL,
    population_actual_6_23mos integer NOT NULL,
    population_actual_12_59mos integer NOT NULL,
    population_actual_0_59mos integer NOT NULL,
    population_actual_pregnant integer NOT NULL,
    population_actual_lactating integer NOT NULL,
    "nsps_1_Normal_y1" integer NOT NULL,
    "nsps_1_Underweight_y1" integer NOT NULL,
    "nsps_1_SeverelyUnderweight_y1" integer NOT NULL,
    "nsps_1_Overweight_y1" integer NOT NULL,
    "nsps_1_Normal_y2" integer NOT NULL,
    "nsps_1_Underweight_y2" integer NOT NULL,
    "nsps_1_SeverelyUnderweight_y2" integer NOT NULL,
    "nsps_1_Overweight_y2" integer NOT NULL,
    "nsps_1_Normal_y3" integer NOT NULL,
    "nsps_1_Underweight_y3" integer NOT NULL,
    "nsps_1_SeverelyUnderweight_y3" integer NOT NULL,
    "nsps_1_Overweight_y3" integer NOT NULL,
    "nsps_2_Normal_y1" integer NOT NULL,
    "nsps_2_Wasted_y1" integer NOT NULL,
    "nsps_2_SeverelyWasted_y1" integer NOT NULL,
    "nsps_2_Overweight_y1" integer NOT NULL,
    "nsps_2_Obese_y1" integer NOT NULL,
    "nsps_2_Normal_y2" integer NOT NULL,
    "nsps_2_Wasted_y2" integer NOT NULL,
    "nsps_2_SeverelyWasted_y2" integer NOT NULL,
    "nsps_2_Overweight_y2" integer NOT NULL,
    "nsps_2_Obese_y2" integer NOT NULL,
    "nsps_2_Normal_y3" integer NOT NULL,
    "nsps_2_Wasted_y3" integer NOT NULL,
    "nsps_2_SeverelyWasted_y3" integer NOT NULL,
    "nsps_2_Overweight_y3" integer NOT NULL,
    "nsps_2_Obese_y3" integer NOT NULL,
    "nsps_3_Normal_y1" integer NOT NULL,
    "nsps_3_Stunted_y1" integer NOT NULL,
    "nsps_3_SeverelyStunted_y1" integer NOT NULL,
    "nsps_3_Tall_y1" integer NOT NULL,
    "nsps_3_Normal_y2" integer NOT NULL,
    "nsps_3_Stunted_y2" integer NOT NULL,
    "nsps_3_SeverelyStunted_y2" integer NOT NULL,
    "nsps_3_Tall_y2" integer NOT NULL,
    "nsps_3_Normal_y3" integer NOT NULL,
    "nsps_3_Stunted_y3" integer NOT NULL,
    "nsps_3_SeverelyStunted_y3" integer NOT NULL,
    "nsps_3_Tall_y3" integer NOT NULL,
    "nsscNormal_y1" integer NOT NULL,
    "nsscWasted_y1" integer NOT NULL,
    "nsscSeverelyWasted_y1" integer NOT NULL,
    "nsscOverweight_y1" integer NOT NULL,
    "nsscObese_y1" integer NOT NULL,
    "nsscNormal_y2" integer NOT NULL,
    "nsscWasted_y2" integer NOT NULL,
    "nsscSeverelyWasted_y2" integer NOT NULL,
    "nsscOverweight_y2" integer NOT NULL,
    "nsscObese_y2" integer NOT NULL,
    "nsscNormal_y3" integer NOT NULL,
    "nsscWasted_y3" integer NOT NULL,
    "nsscSeverelyWasted_y3" integer NOT NULL,
    "nsscOverweight_y3" integer NOT NULL,
    "nsscObese_y3" integer NOT NULL,
    "nspwNormal_y1" integer NOT NULL,
    "nspwNutritionallyAtRisk_y1" integer NOT NULL,
    "nspwOverweight_y1" integer NOT NULL,
    "nspwObese_y1" integer NOT NULL,
    "nspwNormal_y2" integer NOT NULL,
    "nspwNutritionallyAtRisk_y2" integer NOT NULL,
    "nspwOverweight_y2" integer NOT NULL,
    "nspwObese_y2" integer NOT NULL,
    "nspwNormal_y3" integer NOT NULL,
    "nspwNutritionallyAtRisk_y3" integer NOT NULL,
    "nspwOverweight_y3" integer NOT NULL,
    "nspwObese_y3" integer NOT NULL,
    "totalNumBrgyScholar_New" integer NOT NULL,
    "totalNumBrgyScholar_Existing" integer NOT NULL,
    "landAreaResidential" character varying(255) NOT NULL,
    "remarksResidential" character varying(255) NOT NULL,
    "landAreaCommercial" character varying(255) NOT NULL,
    "remarksCommercial" character varying(255) NOT NULL,
    "landAreaIndustrial" character varying(255) NOT NULL,
    "remarksIndustrial" character varying(255) NOT NULL,
    "landAreaAgricultural" character varying(255) NOT NULL,
    "remarksAgricultural" character varying(255) NOT NULL,
    "landAreaFLMLNP" character varying(255) NOT NULL,
    "remarksFLMLNP" character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.mellpi_pro_lnfps OWNER TO nnc_dbuser;

--
-- Name: mellpi_pro_lnfps_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.mellpi_pro_lnfps_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mellpi_pro_lnfps_id_seq OWNER TO nnc_dbuser;

--
-- Name: mellpi_pro_lnfps_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.mellpi_pro_lnfps_id_seq OWNED BY public.mellpi_pro_lnfps.id;


--
-- Name: mellpiprobarangaynationalpolicies; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.mellpiprobarangaynationalpolicies (
    id bigint NOT NULL,
    rating2b integer NOT NULL,
    rating2c integer NOT NULL,
    rating2d integer NOT NULL,
    rating2e integer NOT NULL,
    rating2f integer NOT NULL,
    rating2g integer NOT NULL,
    rating2h integer NOT NULL,
    rating2i integer NOT NULL,
    rating2j integer NOT NULL,
    rating2k integer NOT NULL,
    rating2l integer NOT NULL,
    remarks2a character varying(255) NOT NULL,
    remarks2b character varying(255) NOT NULL,
    remarks2c character varying(255) NOT NULL,
    remarks2d character varying(255) NOT NULL,
    remarks2e character varying(255) NOT NULL,
    remarks2f character varying(255) NOT NULL,
    remarks2g character varying(255) NOT NULL,
    remarks2h character varying(255) NOT NULL,
    remarks2i character varying(255) NOT NULL,
    remarks2j character varying(255) NOT NULL,
    remarks2k character varying(255) NOT NULL,
    remarks2l character varying(255) NOT NULL,
    "dateCreated" character varying(255) NOT NULL,
    "dateUpdates" date NOT NULL,
    "dateMonitoring" date NOT NULL,
    "periodCovereda" date NOT NULL,
    "periodCoveredb" date NOT NULL,
    status integer NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    municipal_id integer NOT NULL,
    barangay_id integer NOT NULL,
    user_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    rating2a integer
);


ALTER TABLE public.mellpiprobarangaynationalpolicies OWNER TO nnc_dbuser;

--
-- Name: mellpiprobarangaynationalpolicies_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.mellpiprobarangaynationalpolicies_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mellpiprobarangaynationalpolicies_id_seq OWNER TO nnc_dbuser;

--
-- Name: mellpiprobarangaynationalpolicies_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.mellpiprobarangaynationalpolicies_id_seq OWNED BY public.mellpiprobarangaynationalpolicies.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO nnc_dbuser;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO nnc_dbuser;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: model_has_permissions; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.model_has_permissions (
    permission_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);


ALTER TABLE public.model_has_permissions OWNER TO nnc_dbuser;

--
-- Name: model_has_roles; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.model_has_roles (
    role_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);


ALTER TABLE public.model_has_roles OWNER TO nnc_dbuser;

--
-- Name: mpbrgynationalPoliciestracking; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public."mpbrgynationalPoliciestracking" (
    id integer NOT NULL,
    status integer NOT NULL,
    barangay_id integer NOT NULL,
    municipal_id integer NOT NULL,
    user_id integer NOT NULL,
    mellpiprobarangaynationalpolicies_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."mpbrgynationalPoliciestracking" OWNER TO nnc_dbuser;

--
-- Name: mpbrgynationalPoliciestracking_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public."mpbrgynationalPoliciestracking_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."mpbrgynationalPoliciestracking_id_seq" OWNER TO nnc_dbuser;

--
-- Name: mpbrgynationalPoliciestracking_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public."mpbrgynationalPoliciestracking_id_seq" OWNED BY public."mpbrgynationalPoliciestracking".id;


--
-- Name: mplgubrgychangeNS; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public."mplgubrgychangeNS" (
    id integer NOT NULL,
    rating6a integer NOT NULL,
    rating6b integer NOT NULL,
    rating6c integer NOT NULL,
    rating6d integer NOT NULL,
    rating6e integer NOT NULL,
    rating6f integer NOT NULL,
    rating6g integer NOT NULL,
    rating6h integer NOT NULL,
    remarks6a character varying(255) NOT NULL,
    remarks6b character varying(255) NOT NULL,
    remarks6c character varying(255) NOT NULL,
    remarks6d character varying(255) NOT NULL,
    remarks6e character varying(255) NOT NULL,
    remarks6f character varying(255) NOT NULL,
    remarks6g character varying(255) NOT NULL,
    remarks6h character varying(255) NOT NULL,
    status integer NOT NULL,
    "dateCreated" date NOT NULL,
    "dateUpdates" date NOT NULL,
    "dateMonitoring" date NOT NULL,
    "periodCovereda" date NOT NULL,
    "periodCoveredb" date NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    municipal_id integer NOT NULL,
    barangay_id integer NOT NULL,
    user_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."mplgubrgychangeNS" OWNER TO nnc_dbuser;

--
-- Name: mplgubrgychangeNS_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public."mplgubrgychangeNS_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."mplgubrgychangeNS_id_seq" OWNER TO nnc_dbuser;

--
-- Name: mplgubrgychangeNS_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public."mplgubrgychangeNS_id_seq" OWNED BY public."mplgubrgychangeNS".id;


--
-- Name: mplgubrgychangeNStracking; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public."mplgubrgychangeNStracking" (
    id integer NOT NULL,
    status integer NOT NULL,
    barangay_id integer NOT NULL,
    municipal_id integer NOT NULL,
    user_id integer NOT NULL,
    "mplgubrgychangeNS_id" integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."mplgubrgychangeNStracking" OWNER TO nnc_dbuser;

--
-- Name: mplgubrgychangeNStracking_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public."mplgubrgychangeNStracking_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."mplgubrgychangeNStracking_id_seq" OWNER TO nnc_dbuser;

--
-- Name: mplgubrgychangeNStracking_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public."mplgubrgychangeNStracking_id_seq" OWNED BY public."mplgubrgychangeNStracking".id;


--
-- Name: mplgubrgydiscussionquestion; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.mplgubrgydiscussionquestion (
    id integer NOT NULL,
    practice7aa character varying(255) NOT NULL,
    practice7ab character varying(255) NOT NULL,
    practice7ac character varying(255) NOT NULL,
    practice7ad character varying(255) NOT NULL,
    practice7ba character varying(255) NOT NULL,
    practice7bb character varying(255) NOT NULL,
    practice7bc character varying(255) NOT NULL,
    practice7bd character varying(255) NOT NULL,
    practice7ca character varying(255) NOT NULL,
    practice7cb character varying(255) NOT NULL,
    practice7cc character varying(255) NOT NULL,
    practice7cd character varying(255) NOT NULL,
    practice7da character varying(255) NOT NULL,
    practice7db character varying(255) NOT NULL,
    practice7dc character varying(255) NOT NULL,
    practice7dd character varying(255) NOT NULL,
    practice7ea character varying(255) NOT NULL,
    practice7eb character varying(255) NOT NULL,
    practice7ec character varying(255) NOT NULL,
    practice7ed character varying(255) NOT NULL,
    practice7fa character varying(255) NOT NULL,
    practice7fb character varying(255) NOT NULL,
    practice7fc character varying(255) NOT NULL,
    practice7fd character varying(255) NOT NULL,
    status integer NOT NULL,
    "dateCreated" date NOT NULL,
    "dateUpdates" date NOT NULL,
    "dateMonitoring" date NOT NULL,
    "periodCovered" integer NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    municipal_id integer NOT NULL,
    barangay_id integer NOT NULL,
    user_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.mplgubrgydiscussionquestion OWNER TO nnc_dbuser;

--
-- Name: mplgubrgydiscussionquestion_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.mplgubrgydiscussionquestion_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mplgubrgydiscussionquestion_id_seq OWNER TO nnc_dbuser;

--
-- Name: mplgubrgydiscussionquestion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.mplgubrgydiscussionquestion_id_seq OWNED BY public.mplgubrgydiscussionquestion.id;


--
-- Name: mplgubrgydiscussionquestiontracking; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.mplgubrgydiscussionquestiontracking (
    id integer NOT NULL,
    status integer NOT NULL,
    barangay_id integer NOT NULL,
    municipal_id integer NOT NULL,
    user_id integer NOT NULL,
    mplgubrgydiscussionquestion_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.mplgubrgydiscussionquestiontracking OWNER TO nnc_dbuser;

--
-- Name: mplgubrgydiscussionquestiontracking_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.mplgubrgydiscussionquestiontracking_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mplgubrgydiscussionquestiontracking_id_seq OWNER TO nnc_dbuser;

--
-- Name: mplgubrgydiscussionquestiontracking_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.mplgubrgydiscussionquestiontracking_id_seq OWNED BY public.mplgubrgydiscussionquestiontracking.id;


--
-- Name: mplgubrgygovernance; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.mplgubrgygovernance (
    id integer NOT NULL,
    rating3a integer NOT NULL,
    rating3b integer NOT NULL,
    rating3c integer NOT NULL,
    remarks3a character varying(255) NOT NULL,
    remarks3b character varying(255) NOT NULL,
    remarks3c character varying(255) NOT NULL,
    status integer NOT NULL,
    "dateCreated" date NOT NULL,
    "dateUpdates" date NOT NULL,
    "dateMonitoring" date NOT NULL,
    "periodCovereda" date NOT NULL,
    "periodCoveredb" date NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    municipal_id integer NOT NULL,
    barangay_id integer NOT NULL,
    user_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.mplgubrgygovernance OWNER TO nnc_dbuser;

--
-- Name: mplgubrgygovernance_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.mplgubrgygovernance_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mplgubrgygovernance_id_seq OWNER TO nnc_dbuser;

--
-- Name: mplgubrgygovernance_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.mplgubrgygovernance_id_seq OWNED BY public.mplgubrgygovernance.id;


--
-- Name: mplgubrgygovernancetracking; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.mplgubrgygovernancetracking (
    id integer NOT NULL,
    status integer NOT NULL,
    barangay_id integer NOT NULL,
    municipal_id integer NOT NULL,
    user_id integer NOT NULL,
    mplgubrgygovernance_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.mplgubrgygovernancetracking OWNER TO nnc_dbuser;

--
-- Name: mplgubrgygovernancetracking_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.mplgubrgygovernancetracking_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mplgubrgygovernancetracking_id_seq OWNER TO nnc_dbuser;

--
-- Name: mplgubrgygovernancetracking_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.mplgubrgygovernancetracking_id_seq OWNED BY public.mplgubrgygovernancetracking.id;


--
-- Name: mplgubrgylncmanagement; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.mplgubrgylncmanagement (
    id integer NOT NULL,
    rating4a integer NOT NULL,
    rating4b integer NOT NULL,
    rating4c integer NOT NULL,
    rating4d integer NOT NULL,
    rating4e integer NOT NULL,
    rating4f integer NOT NULL,
    rating4g integer NOT NULL,
    remarks4a character varying(255) NOT NULL,
    remarks4b character varying(255) NOT NULL,
    remarks4c character varying(255) NOT NULL,
    remarks4d character varying(255) NOT NULL,
    remarks4e character varying(255) NOT NULL,
    remarks4f character varying(255) NOT NULL,
    remarks4g character varying(255) NOT NULL,
    status integer NOT NULL,
    "dateCreated" date NOT NULL,
    "dateUpdates" date NOT NULL,
    "dateMonitoring" date NOT NULL,
    "periodCovereda" date NOT NULL,
    "periodCoveredb" date NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    municipal_id integer NOT NULL,
    barangay_id integer NOT NULL,
    user_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.mplgubrgylncmanagement OWNER TO nnc_dbuser;

--
-- Name: mplgubrgylncmanagement_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.mplgubrgylncmanagement_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mplgubrgylncmanagement_id_seq OWNER TO nnc_dbuser;

--
-- Name: mplgubrgylncmanagement_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.mplgubrgylncmanagement_id_seq OWNED BY public.mplgubrgylncmanagement.id;


--
-- Name: mplgubrgylncmanagementtracking; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.mplgubrgylncmanagementtracking (
    id integer NOT NULL,
    status integer NOT NULL,
    barangay_id integer NOT NULL,
    municipal_id integer NOT NULL,
    user_id integer NOT NULL,
    mplgubrgylncmanagement_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.mplgubrgylncmanagementtracking OWNER TO nnc_dbuser;

--
-- Name: mplgubrgylncmanagementtracking_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.mplgubrgylncmanagementtracking_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mplgubrgylncmanagementtracking_id_seq OWNER TO nnc_dbuser;

--
-- Name: mplgubrgylncmanagementtracking_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.mplgubrgylncmanagementtracking_id_seq OWNED BY public.mplgubrgylncmanagementtracking.id;


--
-- Name: mplgubrgynutritionservice; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.mplgubrgynutritionservice (
    id integer NOT NULL,
    rating5aa integer NOT NULL,
    rating5ab integer NOT NULL,
    rating5ac integer NOT NULL,
    rating5b integer NOT NULL,
    rating5ca integer NOT NULL,
    rating5cb integer NOT NULL,
    rating5cc integer NOT NULL,
    rating5cd integer NOT NULL,
    rating5da integer NOT NULL,
    rating5db integer NOT NULL,
    rating5ea integer NOT NULL,
    rating5eb integer NOT NULL,
    rating5ec integer NOT NULL,
    rating5ed integer NOT NULL,
    rating5ee integer NOT NULL,
    rating5ef integer NOT NULL,
    rating5fa integer NOT NULL,
    rating5fb integer NOT NULL,
    rating5fc integer NOT NULL,
    rating5ga integer NOT NULL,
    rating5ha integer NOT NULL,
    rating5hb integer NOT NULL,
    rating5ia integer NOT NULL,
    rating5ib integer NOT NULL,
    rating5ic integer NOT NULL,
    rating5id integer NOT NULL,
    rating5ie integer NOT NULL,
    rating5if integer NOT NULL,
    rating5ig integer NOT NULL,
    rating5ih integer NOT NULL,
    remarks5aa character varying(255) NOT NULL,
    remarks5ab character varying(255) NOT NULL,
    remarks5ac character varying(255) NOT NULL,
    remarks5b character varying(255) NOT NULL,
    remarks5ca character varying(255) NOT NULL,
    remarks5cb character varying(255) NOT NULL,
    remarks5cc character varying(255) NOT NULL,
    remarks5cd character varying(255) NOT NULL,
    remarks5da character varying(255) NOT NULL,
    remarks5db character varying(255) NOT NULL,
    remarks5ea character varying(255) NOT NULL,
    remarks5eb character varying(255) NOT NULL,
    remarks5ec character varying(255) NOT NULL,
    remarks5ed character varying(255) NOT NULL,
    remarks5ee character varying(255) NOT NULL,
    remarks5ef character varying(255) NOT NULL,
    remarks5fa character varying(255) NOT NULL,
    remarks5fb character varying(255) NOT NULL,
    remarks5fc character varying(255) NOT NULL,
    remarks5ga character varying(255) NOT NULL,
    remarks5ha character varying(255) NOT NULL,
    remarks5hb character varying(255) NOT NULL,
    remarks5ia character varying(255) NOT NULL,
    remarks5ib character varying(255) NOT NULL,
    remarks5ic character varying(255) NOT NULL,
    remarks5id character varying(255) NOT NULL,
    remarks5ie character varying(255) NOT NULL,
    remarks5if character varying(255) NOT NULL,
    remarks5ig character varying(255) NOT NULL,
    remarks5ih character varying(255) NOT NULL,
    status integer NOT NULL,
    "dateCreated" date NOT NULL,
    "dateUpdates" date NOT NULL,
    "dateMonitoring" date NOT NULL,
    "periodCovereda" date NOT NULL,
    "periodCoveredb" date NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    municipal_id integer NOT NULL,
    barangay_id integer NOT NULL,
    user_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.mplgubrgynutritionservice OWNER TO nnc_dbuser;

--
-- Name: mplgubrgynutritionservice_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.mplgubrgynutritionservice_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mplgubrgynutritionservice_id_seq OWNER TO nnc_dbuser;

--
-- Name: mplgubrgynutritionservice_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.mplgubrgynutritionservice_id_seq OWNED BY public.mplgubrgynutritionservice.id;


--
-- Name: mplgubrgynutritionservicetracking; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.mplgubrgynutritionservicetracking (
    id integer NOT NULL,
    status integer NOT NULL,
    barangay_id integer NOT NULL,
    municipal_id integer NOT NULL,
    user_id integer NOT NULL,
    mplgubrgynutritionservice_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.mplgubrgynutritionservicetracking OWNER TO nnc_dbuser;

--
-- Name: mplgubrgynutritionservicetracking_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.mplgubrgynutritionservicetracking_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mplgubrgynutritionservicetracking_id_seq OWNER TO nnc_dbuser;

--
-- Name: mplgubrgynutritionservicetracking_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.mplgubrgynutritionservicetracking_id_seq OWNED BY public.mplgubrgynutritionservicetracking.id;


--
-- Name: mplgubrgyvisionmissions; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.mplgubrgyvisionmissions (
    id integer NOT NULL,
    rating1a integer NOT NULL,
    rating1b integer NOT NULL,
    rating1c integer NOT NULL,
    remarks1a character varying(255) NOT NULL,
    remarks1b character varying(255) NOT NULL,
    remarks1c character varying(255) NOT NULL,
    status integer NOT NULL,
    "dateCreated" date NOT NULL,
    "dateUpdates" date NOT NULL,
    "dateMonitoring" date NOT NULL,
    "periodCovereda" date NOT NULL,
    "periodCoveredb" date NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    municipal_id integer NOT NULL,
    barangay_id integer NOT NULL,
    user_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.mplgubrgyvisionmissions OWNER TO nnc_dbuser;

--
-- Name: mplgubrgyvisionmissions_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.mplgubrgyvisionmissions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mplgubrgyvisionmissions_id_seq OWNER TO nnc_dbuser;

--
-- Name: mplgubrgyvisionmissions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.mplgubrgyvisionmissions_id_seq OWNED BY public.mplgubrgyvisionmissions.id;


--
-- Name: mplgubrgyvisionmissionstracking; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.mplgubrgyvisionmissionstracking (
    id integer NOT NULL,
    status integer NOT NULL,
    barangay_id integer NOT NULL,
    municipal_id integer NOT NULL,
    user_id integer NOT NULL,
    mplgubrgyvisionmissions_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.mplgubrgyvisionmissionstracking OWNER TO nnc_dbuser;

--
-- Name: mplgubrgyvisionmissionstracking_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.mplgubrgyvisionmissionstracking_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mplgubrgyvisionmissionstracking_id_seq OWNER TO nnc_dbuser;

--
-- Name: mplgubrgyvisionmissionstracking_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.mplgubrgyvisionmissionstracking_id_seq OWNED BY public.mplgubrgyvisionmissionstracking.id;


--
-- Name: municipals; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.municipals (
    id integer NOT NULL,
    municipal character varying(100) NOT NULL,
    munclass character varying(100) NOT NULL,
    munnumber integer NOT NULL,
    province_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    psgccode_id integer NOT NULL
);


ALTER TABLE public.municipals OWNER TO nnc_dbuser;

--
-- Name: municipals_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.municipals_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.municipals_id_seq OWNER TO nnc_dbuser;

--
-- Name: municipals_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.municipals_id_seq OWNED BY public.municipals.id;


--
-- Name: naos; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.naos (
    id integer NOT NULL,
    "nameGovMayor" character varying(100) NOT NULL,
    typenao character varying(100) NOT NULL,
    typedesignation character varying(100) NOT NULL,
    datedesignation date NOT NULL,
    typeappointment character varying(100) NOT NULL,
    "position" character varying(100) NOT NULL,
    department character varying(100) NOT NULL,
    personnel_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.naos OWNER TO nnc_dbuser;

--
-- Name: naos_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.naos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.naos_id_seq OWNER TO nnc_dbuser;

--
-- Name: naos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.naos_id_seq OWNED BY public.naos.id;


--
-- Name: nationalpolicies; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.nationalpolicies (
    id integer NOT NULL,
    rating2a integer NOT NULL,
    rating2b integer NOT NULL,
    rating2c integer NOT NULL,
    rating2d integer NOT NULL,
    rating2e integer NOT NULL,
    rating2f integer NOT NULL,
    rating2g integer NOT NULL,
    rating2h integer NOT NULL,
    rating2i integer NOT NULL,
    rating2j integer NOT NULL,
    rating2k integer NOT NULL,
    rating2l integer NOT NULL,
    rating2m integer NOT NULL,
    remarks2a character varying(255) NOT NULL,
    remarks2b character varying(255) NOT NULL,
    remarks2c character varying(255) NOT NULL,
    remarks2d character varying(255) NOT NULL,
    remarks2e character varying(255) NOT NULL,
    remarks2f character varying(255) NOT NULL,
    remarks2g character varying(255) NOT NULL,
    remarks2h character varying(255) NOT NULL,
    remarks2i character varying(255) NOT NULL,
    remarks2j character varying(255) NOT NULL,
    remarks2k character varying(255) NOT NULL,
    remarks2l character varying(255) NOT NULL,
    remarks2m character varying(255) NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    municipal_id integer NOT NULL,
    barangay_id integer NOT NULL,
    lguprofile_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.nationalpolicies OWNER TO nnc_dbuser;

--
-- Name: nationalpolicies_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.nationalpolicies_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.nationalpolicies_id_seq OWNER TO nnc_dbuser;

--
-- Name: nationalpolicies_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.nationalpolicies_id_seq OWNED BY public.nationalpolicies.id;


--
-- Name: npcs; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.npcs (
    id integer NOT NULL,
    "nameGovMayor" character varying(100) NOT NULL,
    typenpc character varying(100) NOT NULL,
    typedesignation character varying(100) NOT NULL,
    datedesignation date NOT NULL,
    typeappointment character varying(100) NOT NULL,
    "position" character varying(100) NOT NULL,
    department character varying(100) NOT NULL,
    dcnpcapmembership character varying(100) NOT NULL,
    dcnpcapposition character varying(100) NOT NULL,
    dcnpcapofficer character varying(100) NOT NULL,
    personnel_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.npcs OWNER TO nnc_dbuser;

--
-- Name: npcs_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.npcs_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.npcs_id_seq OWNER TO nnc_dbuser;

--
-- Name: npcs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.npcs_id_seq OWNED BY public.npcs.id;


--
-- Name: nutrition_intervention; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.nutrition_intervention (
    id integer NOT NULL,
    rating5a1 integer NOT NULL,
    rating5a2 integer NOT NULL,
    rating5a3 integer NOT NULL,
    rating5a4 integer NOT NULL,
    rating5a5 integer NOT NULL,
    rating5b6 integer NOT NULL,
    rating5b7 integer NOT NULL,
    rating5c8 integer NOT NULL,
    rating5c9 integer NOT NULL,
    rating5c10 integer NOT NULL,
    rating5c11 integer NOT NULL,
    rating5d12 integer NOT NULL,
    rating5d13 integer NOT NULL,
    rating5d14 integer NOT NULL,
    rating5e15 integer NOT NULL,
    rating5e16 integer NOT NULL,
    rating5e17 integer NOT NULL,
    rating5e18 integer NOT NULL,
    rating5e19 integer NOT NULL,
    rating5e20 integer NOT NULL,
    rating5f21 integer NOT NULL,
    rating5f22 integer NOT NULL,
    rating5f23 integer NOT NULL,
    rating5g24 integer NOT NULL,
    rating5g25 integer NOT NULL,
    rating5g26 integer NOT NULL,
    rating5h27 integer NOT NULL,
    rating5h28 integer NOT NULL,
    rating5h29 integer NOT NULL,
    rating5h30 integer NOT NULL,
    rating5i31 integer NOT NULL,
    rating5i32 integer NOT NULL,
    rating5i33 integer NOT NULL,
    rating5i34 integer NOT NULL,
    rating5i35 integer NOT NULL,
    rating5i36 integer NOT NULL,
    rating5i37 integer NOT NULL,
    rating5i38 integer NOT NULL,
    remarks5a1 character varying(255) NOT NULL,
    remarks5a2 character varying(255) NOT NULL,
    remarks5a3 character varying(255) NOT NULL,
    remarks5a4 character varying(255) NOT NULL,
    remarks5a5 character varying(255) NOT NULL,
    remarks5b6 character varying(255) NOT NULL,
    remarks5b7 character varying(255) NOT NULL,
    remarks5c8 character varying(255) NOT NULL,
    remarks5c9 character varying(255) NOT NULL,
    remarks5c10 character varying(255) NOT NULL,
    remarks5c11 character varying(255) NOT NULL,
    remarks5d12 character varying(255) NOT NULL,
    remarks5d13 character varying(255) NOT NULL,
    remarks5d14 character varying(255) NOT NULL,
    remarks5e15 character varying(255) NOT NULL,
    remarks5e16 character varying(255) NOT NULL,
    remarks5e17 character varying(255) NOT NULL,
    remarks5e18 character varying(255) NOT NULL,
    remarks5e19 character varying(255) NOT NULL,
    remarks5e20 character varying(255) NOT NULL,
    remarks5f21 character varying(255) NOT NULL,
    remarks5f22 character varying(255) NOT NULL,
    remarks5f23 character varying(255) NOT NULL,
    remarks5g24 character varying(255) NOT NULL,
    remarks5g25 character varying(255) NOT NULL,
    remarks5g26 character varying(255) NOT NULL,
    remarks5h27 character varying(255) NOT NULL,
    remarks5h28 character varying(255) NOT NULL,
    remarks5h29 character varying(255) NOT NULL,
    remarks5h30 character varying(255) NOT NULL,
    remarks5i31 character varying(255) NOT NULL,
    remarks5i32 character varying(255) NOT NULL,
    remarks5i33 character varying(255) NOT NULL,
    remarks5i34 character varying(255) NOT NULL,
    remarks5i35 character varying(255) NOT NULL,
    remarks5i36 character varying(255) NOT NULL,
    remarks5i37 character varying(255) NOT NULL,
    remarks5i38 character varying(255) NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    municipal_id integer NOT NULL,
    barangay_id integer NOT NULL,
    lguprofile_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.nutrition_intervention OWNER TO nnc_dbuser;

--
-- Name: nutrition_intervention_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.nutrition_intervention_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.nutrition_intervention_id_seq OWNER TO nnc_dbuser;

--
-- Name: nutrition_intervention_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.nutrition_intervention_id_seq OWNED BY public.nutrition_intervention.id;


--
-- Name: nutrition_offices; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.nutrition_offices (
    id bigint NOT NULL,
    "nutritionOffice" character varying(255) NOT NULL,
    "separateNutritionBudget" character varying(255) NOT NULL,
    "underWhatOffice" character varying(255) NOT NULL,
    pcnao_position character varying(255) NOT NULL,
    "pcnao_jobTitle" character varying(255) NOT NULL,
    "pcnao_emplStat" character varying(255) NOT NULL,
    "pcnao_othersEmpStat" character varying(255) NOT NULL,
    "pcnao_salaryGrade" integer NOT NULL,
    "pcnao_moreThanOne" character varying(255) NOT NULL,
    "pcnao_moreThanOneNumber" integer NOT NULL,
    dcnpc_position character varying(255) NOT NULL,
    "dcnpc_jobTitle" character varying(255) NOT NULL,
    "dcnpc_emplStat" character varying(255) NOT NULL,
    "dcnpc_othersEmpStat" character varying(255) NOT NULL,
    "dcnpc_salaryGrade" integer NOT NULL,
    "dcnpc_moreThanOne" character varying(255) NOT NULL,
    "dcnpc_moreThanOneNumber" integer NOT NULL,
    "numTechSupp" integer NOT NULL,
    "numAdminSupp" integer NOT NULL,
    psgccode_id integer NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    municipal_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    "geoLevel" character varying(255) NOT NULL,
    income_class character varying(255) NOT NULL,
    "separateNutritionBudgetAmount" integer NOT NULL,
    "underWhatOfficeOther" character varying(255) NOT NULL
);


ALTER TABLE public.nutrition_offices OWNER TO nnc_dbuser;

--
-- Name: nutrition_offices_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.nutrition_offices_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.nutrition_offices_id_seq OWNER TO nnc_dbuser;

--
-- Name: nutrition_offices_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.nutrition_offices_id_seq OWNED BY public.nutrition_offices.id;


--
-- Name: nutrition_services; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.nutrition_services (
    id integer NOT NULL,
    lgu_profile_id integer NOT NULL,
    young_child_feeding_rating1 integer NOT NULL,
    young_child_feeding_remarks1 character varying(255) NOT NULL,
    young_child_feeding_rating2 integer NOT NULL,
    young_child_feeding_remarks2 character varying(255) NOT NULL,
    young_child_feeding_rating3 integer NOT NULL,
    young_child_feeding_remarks3 character varying(255) NOT NULL,
    acute_malnutrition_rating4 integer NOT NULL,
    acute_malnutrition_remarks4 character varying(255) NOT NULL,
    national_dietary_rating5 integer NOT NULL,
    national_dietary_remarks5 character varying(255) NOT NULL,
    national_dietary_rating6 integer NOT NULL,
    national_dietary_remarks6 character varying(255) NOT NULL,
    national_dietary_rating7 integer NOT NULL,
    national_dietary_remarks7 character varying(255) NOT NULL,
    national_dietary_rating8 integer NOT NULL,
    national_dietary_remarks8 character varying(255) NOT NULL,
    behavioral_change_rating9 integer NOT NULL,
    behavioral_change_remarks9 character varying(255) NOT NULL,
    behavioral_change_rating10 integer NOT NULL,
    behavioral_change_remarks10 character varying(255) NOT NULL,
    micro_supplement_rating11 integer NOT NULL,
    micro_supplement_remark11 character varying(255) NOT NULL,
    micro_supplement_rating12 integer NOT NULL,
    micro_supplement_remark12 character varying(255) NOT NULL,
    micro_supplement_rating13 integer NOT NULL,
    micro_supplement_remark13 character varying(255) NOT NULL,
    micro_supplement_rating14 integer NOT NULL,
    micro_supplement_remark14 character varying(255) NOT NULL,
    micro_supplement_rating15 integer NOT NULL,
    micro_supplement_remark15 character varying(255) NOT NULL,
    micro_supplement_rating16 integer NOT NULL,
    micro_supplement_remark16 character varying(255) NOT NULL,
    mandatory_food_rating17 integer NOT NULL,
    mandatory_food_remarks17 character varying(255) NOT NULL,
    mandatory_food_rating18 integer NOT NULL,
    mandatory_food_remarks18 character varying(255) NOT NULL,
    mandatory_food_rating19 integer NOT NULL,
    mandatory_food_remarks19 character varying(255) NOT NULL,
    emergencies_program_rating20 integer NOT NULL,
    emergencies_program_remarks20 character varying(255) NOT NULL,
    prevention_program_rating21 integer NOT NULL,
    prevention_program_remarks21 character varying(255) NOT NULL,
    prevention_program_rating22 integer NOT NULL,
    prevention_program_remarks22 character varying(255) NOT NULL,
    nutri_sensitive_rating23 integer NOT NULL,
    nutri_sensitive_remarks23 character varying(255) NOT NULL,
    nutri_sensitive_rating24 integer NOT NULL,
    nutri_sensitive_remarks24 character varying(255) NOT NULL,
    nutri_sensitive_rating25 integer NOT NULL,
    nutri_sensitive_remarks25 character varying(255) NOT NULL,
    nutri_sensitive_rating26 integer NOT NULL,
    nutri_sensitive_remarks26 character varying(255) NOT NULL,
    nutri_sensitive_rating27 integer NOT NULL,
    nutri_sensitive_remarks27 character varying(255) NOT NULL,
    nutri_sensitive_rating28 integer NOT NULL,
    nutri_sensitive_remarks28 character varying(255) NOT NULL,
    nutri_sensitive_rating29 integer NOT NULL,
    nutri_sensitive_remarks29 character varying(255) NOT NULL,
    nutri_sensitive_rating30 integer NOT NULL,
    nutri_sensitive_remarks30 character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    young_child_feeding_average double precision DEFAULT '0'::double precision,
    acute_malnutrition_average double precision DEFAULT '0'::double precision,
    national_dietary_average double precision DEFAULT '0'::double precision,
    behavioral_change_average double precision DEFAULT '0'::double precision,
    micro_supplement_average double precision DEFAULT '0'::double precision,
    mandatory_food_average double precision DEFAULT '0'::double precision,
    emergencies_program_average double precision DEFAULT '0'::double precision,
    prevention_program_average double precision DEFAULT '0'::double precision,
    nutri_sensitive_average double precision DEFAULT '0'::double precision
);


ALTER TABLE public.nutrition_services OWNER TO nnc_dbuser;

--
-- Name: nutrition_services_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.nutrition_services_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.nutrition_services_id_seq OWNER TO nnc_dbuser;

--
-- Name: nutrition_services_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.nutrition_services_id_seq OWNED BY public.nutrition_services.id;


--
-- Name: password_reset_tokens; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_reset_tokens OWNER TO nnc_dbuser;

--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO nnc_dbuser;

--
-- Name: permissions; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.permissions (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    guard_name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.permissions OWNER TO nnc_dbuser;

--
-- Name: permissions_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.permissions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.permissions_id_seq OWNER TO nnc_dbuser;

--
-- Name: permissions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.permissions_id_seq OWNED BY public.permissions.id;


--
-- Name: personal_access_tokens; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.personal_access_tokens OWNER TO nnc_dbuser;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.personal_access_tokens_id_seq OWNER TO nnc_dbuser;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;


--
-- Name: personnels; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.personnels (
    id integer NOT NULL,
    lastname character varying(100) NOT NULL,
    firstname character varying(100) NOT NULL,
    middlename character varying(100) NOT NULL,
    suffix character varying(100) NOT NULL,
    sex character varying(100) NOT NULL,
    age character varying(100) NOT NULL,
    birthdate date NOT NULL,
    educationalbackground character varying(100) NOT NULL,
    "degreeCourse" character varying(100) NOT NULL,
    address character varying(100) NOT NULL,
    civilstatus character varying(100) NOT NULL,
    email character varying(100) NOT NULL,
    cellphonenumer character varying(100) NOT NULL,
    telephonenumber character varying(100) NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_number character varying(100),
    cities_id integer NOT NULL
);


ALTER TABLE public.personnels OWNER TO nnc_dbuser;

--
-- Name: personnels_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.personnels_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.personnels_id_seq OWNER TO nnc_dbuser;

--
-- Name: personnels_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.personnels_id_seq OWNED BY public.personnels.id;


--
-- Name: population; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.population (
    id integer NOT NULL,
    psgccode integer NOT NULL,
    year date NOT NULL,
    correspondencecode integer NOT NULL,
    geolevel character varying(100) NOT NULL,
    incomeclass character varying(100) NOT NULL,
    psgccode_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.population OWNER TO nnc_dbuser;

--
-- Name: population_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.population_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.population_id_seq OWNER TO nnc_dbuser;

--
-- Name: population_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.population_id_seq OWNED BY public.population.id;


--
-- Name: provinces; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.provinces (
    id integer NOT NULL,
    province character varying(100) NOT NULL,
    proclass character varying(100) NOT NULL,
    provnumber integer NOT NULL,
    region_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    psgccode_id integer NOT NULL,
    provcode integer
);


ALTER TABLE public.provinces OWNER TO nnc_dbuser;

--
-- Name: provinces_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.provinces_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.provinces_id_seq OWNER TO nnc_dbuser;

--
-- Name: provinces_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.provinces_id_seq OWNED BY public.provinces.id;


--
-- Name: psgcs; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.psgcs (
    id integer NOT NULL,
    psgccode character varying(255) NOT NULL,
    correspondencecode character varying(255) NOT NULL,
    geolevel character varying(100) NOT NULL,
    oldname character varying(100) NOT NULL,
    incomeclass character varying(100) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.psgcs OWNER TO nnc_dbuser;

--
-- Name: psgcs_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.psgcs_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.psgcs_id_seq OWNER TO nnc_dbuser;

--
-- Name: psgcs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.psgcs_id_seq OWNED BY public.psgcs.id;


--
-- Name: regions; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.regions (
    id integer NOT NULL,
    region character varying(100) NOT NULL,
    regclass character varying(100) NOT NULL,
    regnumber integer NOT NULL,
    psgccode_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.regions OWNER TO nnc_dbuser;

--
-- Name: regions_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.regions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.regions_id_seq OWNER TO nnc_dbuser;

--
-- Name: regions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.regions_id_seq OWNED BY public.regions.id;


--
-- Name: request_portal; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.request_portal (
    id bigint NOT NULL,
    "fullName" character varying(225) NOT NULL,
    email character varying(255) NOT NULL,
    "requestReport" text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.request_portal OWNER TO nnc_dbuser;

--
-- Name: request_portal_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.request_portal_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.request_portal_id_seq OWNER TO nnc_dbuser;

--
-- Name: request_portal_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.request_portal_id_seq OWNED BY public.request_portal.id;


--
-- Name: role_has_permissions; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.role_has_permissions (
    permission_id bigint NOT NULL,
    role_id bigint NOT NULL
);


ALTER TABLE public.role_has_permissions OWNER TO nnc_dbuser;

--
-- Name: roles; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.roles (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    codename character varying(255) NOT NULL,
    guard_name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.roles OWNER TO nnc_dbuser;

--
-- Name: roles_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.roles_id_seq OWNER TO nnc_dbuser;

--
-- Name: roles_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.roles_id_seq OWNED BY public.roles.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    "Firstname" character varying(255) NOT NULL,
    "Middlename" character varying(255) NOT NULL,
    "Lastname" character varying(255) NOT NULL,
    "Region" character varying(255) NOT NULL,
    "Province" character varying(255) NOT NULL,
    city_municipal character varying(255) NOT NULL,
    agency_office_lgu character varying(255) NOT NULL,
    "Division_unit" character varying(255) NOT NULL,
    role character varying(255) NOT NULL,
    status character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    barangay character varying(20)
);


ALTER TABLE public.users OWNER TO nnc_dbuser;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO nnc_dbuser;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: visionmissions; Type: TABLE; Schema: public; Owner: nnc_dbuser
--

CREATE TABLE public.visionmissions (
    id integer NOT NULL,
    rating1a character varying(255) NOT NULL,
    rating1b integer NOT NULL,
    rating1c integer NOT NULL,
    remarks1a character varying(255) NOT NULL,
    remarks1b character varying(255) NOT NULL,
    remarks1c character varying(255) NOT NULL,
    region_id integer NOT NULL,
    province_id integer NOT NULL,
    municipal_id integer NOT NULL,
    barangay_id integer NOT NULL,
    lguprofile_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.visionmissions OWNER TO nnc_dbuser;

--
-- Name: visionmissions_id_seq; Type: SEQUENCE; Schema: public; Owner: nnc_dbuser
--

CREATE SEQUENCE public.visionmissions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.visionmissions_id_seq OWNER TO nnc_dbuser;

--
-- Name: visionmissions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: nnc_dbuser
--

ALTER SEQUENCE public.visionmissions_id_seq OWNED BY public.visionmissions.id;


--
-- Name: barangays id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.barangays ALTER COLUMN id SET DEFAULT nextval('public.barangays_id_seq'::regclass);


--
-- Name: barangaytracking id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.barangaytracking ALTER COLUMN id SET DEFAULT nextval('public.barangaytracking_id_seq'::regclass);


--
-- Name: bnss id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.bnss ALTER COLUMN id SET DEFAULT nextval('public.bnss_id_seq'::regclass);


--
-- Name: changes_ns id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.changes_ns ALTER COLUMN id SET DEFAULT nextval('public.changes_ns_id_seq'::regclass);


--
-- Name: citys id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.citys ALTER COLUMN id SET DEFAULT nextval('public.citys_id_seq'::regclass);


--
-- Name: discussion_questions id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.discussion_questions ALTER COLUMN id SET DEFAULT nextval('public.discussion_questions_id_seq'::regclass);


--
-- Name: equipment_inventory id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.equipment_inventory ALTER COLUMN id SET DEFAULT nextval('public.equipment_inventory_id_seq'::regclass);


--
-- Name: form_fields id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.form_fields ALTER COLUMN id SET DEFAULT nextval('public.form_fields_id_seq'::regclass);


--
-- Name: form_submissions id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.form_submissions ALTER COLUMN id SET DEFAULT nextval('public.form_submissions_id_seq'::regclass);


--
-- Name: formbuilder id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.formbuilder ALTER COLUMN id SET DEFAULT nextval('public.formbuilder_id_seq'::regclass);


--
-- Name: forms id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.forms ALTER COLUMN id SET DEFAULT nextval('public.forms_id_seq'::regclass);


--
-- Name: governances id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.governances ALTER COLUMN id SET DEFAULT nextval('public.governances_id_seq'::regclass);


--
-- Name: lguprofilebarangay id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lguprofilebarangay ALTER COLUMN id SET DEFAULT nextval('public.lguprofilebarangay_id_seq'::regclass);


--
-- Name: lnc_management_function id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lnc_management_function ALTER COLUMN id SET DEFAULT nextval('public.lnc_management_function_id_seq'::regclass);


--
-- Name: lncdata id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lncdata ALTER COLUMN id SET DEFAULT nextval('public.lncdata_id_seq'::regclass);


--
-- Name: lnfp_form5a id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lnfp_form5a ALTER COLUMN id SET DEFAULT nextval('public.lnfp_form5a_id_seq'::regclass);


--
-- Name: lnfp_form5a_pnao id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lnfp_form5a_pnao ALTER COLUMN id SET DEFAULT nextval('public.lnfp_form5a_pnao_id_seq'::regclass);


--
-- Name: lnfp_form5a_rr id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lnfp_form5a_rr ALTER COLUMN id SET DEFAULT nextval('public.lnfp_form5a_rr_id_seq'::regclass);


--
-- Name: location_pivot id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.location_pivot ALTER COLUMN id SET DEFAULT nextval('public.location_pivot_id_seq'::regclass);


--
-- Name: mellpi_pro_lnfps id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mellpi_pro_lnfps ALTER COLUMN id SET DEFAULT nextval('public.mellpi_pro_lnfps_id_seq'::regclass);


--
-- Name: mellpiprobarangaynationalpolicies id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mellpiprobarangaynationalpolicies ALTER COLUMN id SET DEFAULT nextval('public.mellpiprobarangaynationalpolicies_id_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: mpbrgynationalPoliciestracking id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mpbrgynationalPoliciestracking" ALTER COLUMN id SET DEFAULT nextval('public."mpbrgynationalPoliciestracking_id_seq"'::regclass);


--
-- Name: mplgubrgychangeNS id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mplgubrgychangeNS" ALTER COLUMN id SET DEFAULT nextval('public."mplgubrgychangeNS_id_seq"'::regclass);


--
-- Name: mplgubrgychangeNStracking id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mplgubrgychangeNStracking" ALTER COLUMN id SET DEFAULT nextval('public."mplgubrgychangeNStracking_id_seq"'::regclass);


--
-- Name: mplgubrgydiscussionquestion id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgydiscussionquestion ALTER COLUMN id SET DEFAULT nextval('public.mplgubrgydiscussionquestion_id_seq'::regclass);


--
-- Name: mplgubrgydiscussionquestiontracking id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgydiscussionquestiontracking ALTER COLUMN id SET DEFAULT nextval('public.mplgubrgydiscussionquestiontracking_id_seq'::regclass);


--
-- Name: mplgubrgygovernance id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgygovernance ALTER COLUMN id SET DEFAULT nextval('public.mplgubrgygovernance_id_seq'::regclass);


--
-- Name: mplgubrgygovernancetracking id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgygovernancetracking ALTER COLUMN id SET DEFAULT nextval('public.mplgubrgygovernancetracking_id_seq'::regclass);


--
-- Name: mplgubrgylncmanagement id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgylncmanagement ALTER COLUMN id SET DEFAULT nextval('public.mplgubrgylncmanagement_id_seq'::regclass);


--
-- Name: mplgubrgylncmanagementtracking id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgylncmanagementtracking ALTER COLUMN id SET DEFAULT nextval('public.mplgubrgylncmanagementtracking_id_seq'::regclass);


--
-- Name: mplgubrgynutritionservice id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgynutritionservice ALTER COLUMN id SET DEFAULT nextval('public.mplgubrgynutritionservice_id_seq'::regclass);


--
-- Name: mplgubrgynutritionservicetracking id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgynutritionservicetracking ALTER COLUMN id SET DEFAULT nextval('public.mplgubrgynutritionservicetracking_id_seq'::regclass);


--
-- Name: mplgubrgyvisionmissions id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgyvisionmissions ALTER COLUMN id SET DEFAULT nextval('public.mplgubrgyvisionmissions_id_seq'::regclass);


--
-- Name: mplgubrgyvisionmissionstracking id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgyvisionmissionstracking ALTER COLUMN id SET DEFAULT nextval('public.mplgubrgyvisionmissionstracking_id_seq'::regclass);


--
-- Name: municipals id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.municipals ALTER COLUMN id SET DEFAULT nextval('public.municipals_id_seq'::regclass);


--
-- Name: naos id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.naos ALTER COLUMN id SET DEFAULT nextval('public.naos_id_seq'::regclass);


--
-- Name: nationalpolicies id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nationalpolicies ALTER COLUMN id SET DEFAULT nextval('public.nationalpolicies_id_seq'::regclass);


--
-- Name: npcs id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.npcs ALTER COLUMN id SET DEFAULT nextval('public.npcs_id_seq'::regclass);


--
-- Name: nutrition_intervention id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nutrition_intervention ALTER COLUMN id SET DEFAULT nextval('public.nutrition_intervention_id_seq'::regclass);


--
-- Name: nutrition_offices id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nutrition_offices ALTER COLUMN id SET DEFAULT nextval('public.nutrition_offices_id_seq'::regclass);


--
-- Name: nutrition_services id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nutrition_services ALTER COLUMN id SET DEFAULT nextval('public.nutrition_services_id_seq'::regclass);


--
-- Name: permissions id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.permissions ALTER COLUMN id SET DEFAULT nextval('public.permissions_id_seq'::regclass);


--
-- Name: personal_access_tokens id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);


--
-- Name: personnels id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.personnels ALTER COLUMN id SET DEFAULT nextval('public.personnels_id_seq'::regclass);


--
-- Name: population id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.population ALTER COLUMN id SET DEFAULT nextval('public.population_id_seq'::regclass);


--
-- Name: provinces id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.provinces ALTER COLUMN id SET DEFAULT nextval('public.provinces_id_seq'::regclass);


--
-- Name: psgcs id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.psgcs ALTER COLUMN id SET DEFAULT nextval('public.psgcs_id_seq'::regclass);


--
-- Name: regions id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.regions ALTER COLUMN id SET DEFAULT nextval('public.regions_id_seq'::regclass);


--
-- Name: request_portal id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.request_portal ALTER COLUMN id SET DEFAULT nextval('public.request_portal_id_seq'::regclass);


--
-- Name: roles id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.roles ALTER COLUMN id SET DEFAULT nextval('public.roles_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Name: visionmissions id; Type: DEFAULT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.visionmissions ALTER COLUMN id SET DEFAULT nextval('public.visionmissions_id_seq'::regclass);


--
-- Name: barangays barangays_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.barangays
    ADD CONSTRAINT barangays_pkey PRIMARY KEY (id);


--
-- Name: barangaytracking barangaytracking_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.barangaytracking
    ADD CONSTRAINT barangaytracking_pkey PRIMARY KEY (id);


--
-- Name: bnss bnss_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.bnss
    ADD CONSTRAINT bnss_pkey PRIMARY KEY (id);


--
-- Name: changes_ns changes_ns_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.changes_ns
    ADD CONSTRAINT changes_ns_pkey PRIMARY KEY (id);


--
-- Name: cities cities_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.cities
    ADD CONSTRAINT cities_pkey PRIMARY KEY (id);


--
-- Name: citys citys_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.citys
    ADD CONSTRAINT citys_pkey PRIMARY KEY (id);


--
-- Name: discussion_questions discussion_questions_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.discussion_questions
    ADD CONSTRAINT discussion_questions_pkey PRIMARY KEY (id);


--
-- Name: equipment_inventory equipment_inventory_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.equipment_inventory
    ADD CONSTRAINT equipment_inventory_pkey PRIMARY KEY (id);


--
-- Name: form_fields form_fields_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.form_fields
    ADD CONSTRAINT form_fields_pkey PRIMARY KEY (id);


--
-- Name: form_submissions form_submissions_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.form_submissions
    ADD CONSTRAINT form_submissions_pkey PRIMARY KEY (id);


--
-- Name: formbuilder formbuilder_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.formbuilder
    ADD CONSTRAINT formbuilder_pkey PRIMARY KEY (id);


--
-- Name: forms forms_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.forms
    ADD CONSTRAINT forms_pkey PRIMARY KEY (id);


--
-- Name: governances governances_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.governances
    ADD CONSTRAINT governances_pkey PRIMARY KEY (id);


--
-- Name: lguprofilebarangay lguprofilebarangay_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lguprofilebarangay
    ADD CONSTRAINT lguprofilebarangay_pkey PRIMARY KEY (id);


--
-- Name: lnc_management_function lnc_management_function_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lnc_management_function
    ADD CONSTRAINT lnc_management_function_pkey PRIMARY KEY (id);


--
-- Name: lncdata lncdata_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lncdata
    ADD CONSTRAINT lncdata_pkey PRIMARY KEY (id);


--
-- Name: lnfp_form5a lnfp_form5a_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lnfp_form5a
    ADD CONSTRAINT lnfp_form5a_pkey PRIMARY KEY (id);


--
-- Name: lnfp_form5a_pnao lnfp_form5a_pnao_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lnfp_form5a_pnao
    ADD CONSTRAINT lnfp_form5a_pnao_pkey PRIMARY KEY (id);


--
-- Name: lnfp_form5a_rr lnfp_form5a_rr_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lnfp_form5a_rr
    ADD CONSTRAINT lnfp_form5a_rr_pkey PRIMARY KEY (id);


--
-- Name: location_pivot location_pivot_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.location_pivot
    ADD CONSTRAINT location_pivot_pkey PRIMARY KEY (id);


--
-- Name: mellpi_pro_lnfps mellpi_pro_lnfps_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mellpi_pro_lnfps
    ADD CONSTRAINT mellpi_pro_lnfps_pkey PRIMARY KEY (id);


--
-- Name: mellpiprobarangaynationalpolicies mellpiprobarangaynationalpolicies_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mellpiprobarangaynationalpolicies
    ADD CONSTRAINT mellpiprobarangaynationalpolicies_pkey PRIMARY KEY (id);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: model_has_permissions model_has_permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_pkey PRIMARY KEY (permission_id, model_id, model_type);


--
-- Name: model_has_roles model_has_roles_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_pkey PRIMARY KEY (role_id, model_id, model_type);


--
-- Name: mpbrgynationalPoliciestracking mpbrgynationalPoliciestracking_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mpbrgynationalPoliciestracking"
    ADD CONSTRAINT "mpbrgynationalPoliciestracking_pkey" PRIMARY KEY (id);


--
-- Name: mplgubrgychangeNS mplgubrgychangeNS_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mplgubrgychangeNS"
    ADD CONSTRAINT "mplgubrgychangeNS_pkey" PRIMARY KEY (id);


--
-- Name: mplgubrgychangeNStracking mplgubrgychangeNStracking_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mplgubrgychangeNStracking"
    ADD CONSTRAINT "mplgubrgychangeNStracking_pkey" PRIMARY KEY (id);


--
-- Name: mplgubrgydiscussionquestion mplgubrgydiscussionquestion_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgydiscussionquestion
    ADD CONSTRAINT mplgubrgydiscussionquestion_pkey PRIMARY KEY (id);


--
-- Name: mplgubrgydiscussionquestiontracking mplgubrgydiscussionquestiontracking_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgydiscussionquestiontracking
    ADD CONSTRAINT mplgubrgydiscussionquestiontracking_pkey PRIMARY KEY (id);


--
-- Name: mplgubrgygovernance mplgubrgygovernance_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgygovernance
    ADD CONSTRAINT mplgubrgygovernance_pkey PRIMARY KEY (id);


--
-- Name: mplgubrgygovernancetracking mplgubrgygovernancetracking_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgygovernancetracking
    ADD CONSTRAINT mplgubrgygovernancetracking_pkey PRIMARY KEY (id);


--
-- Name: mplgubrgylncmanagement mplgubrgylncmanagement_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgylncmanagement
    ADD CONSTRAINT mplgubrgylncmanagement_pkey PRIMARY KEY (id);


--
-- Name: mplgubrgylncmanagementtracking mplgubrgylncmanagementtracking_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgylncmanagementtracking
    ADD CONSTRAINT mplgubrgylncmanagementtracking_pkey PRIMARY KEY (id);


--
-- Name: mplgubrgynutritionservice mplgubrgynutritionservice_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgynutritionservice
    ADD CONSTRAINT mplgubrgynutritionservice_pkey PRIMARY KEY (id);


--
-- Name: mplgubrgynutritionservicetracking mplgubrgynutritionservicetracking_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgynutritionservicetracking
    ADD CONSTRAINT mplgubrgynutritionservicetracking_pkey PRIMARY KEY (id);


--
-- Name: mplgubrgyvisionmissions mplgubrgyvisionmissions_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgyvisionmissions
    ADD CONSTRAINT mplgubrgyvisionmissions_pkey PRIMARY KEY (id);


--
-- Name: mplgubrgyvisionmissionstracking mplgubrgyvisionmissionstracking_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgyvisionmissionstracking
    ADD CONSTRAINT mplgubrgyvisionmissionstracking_pkey PRIMARY KEY (id);


--
-- Name: municipals municipals_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.municipals
    ADD CONSTRAINT municipals_pkey PRIMARY KEY (id);


--
-- Name: naos naos_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.naos
    ADD CONSTRAINT naos_pkey PRIMARY KEY (id);


--
-- Name: nationalpolicies nationalpolicies_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nationalpolicies
    ADD CONSTRAINT nationalpolicies_pkey PRIMARY KEY (id);


--
-- Name: npcs npcs_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.npcs
    ADD CONSTRAINT npcs_pkey PRIMARY KEY (id);


--
-- Name: nutrition_intervention nutrition_intervention_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nutrition_intervention
    ADD CONSTRAINT nutrition_intervention_pkey PRIMARY KEY (id);


--
-- Name: nutrition_offices nutrition_offices_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nutrition_offices
    ADD CONSTRAINT nutrition_offices_pkey PRIMARY KEY (id);


--
-- Name: nutrition_services nutrition_services_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nutrition_services
    ADD CONSTRAINT nutrition_services_pkey PRIMARY KEY (id);


--
-- Name: password_reset_tokens password_reset_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);


--
-- Name: permissions permissions_name_guard_name_unique; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_name_guard_name_unique UNIQUE (name, guard_name);


--
-- Name: permissions permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_token_unique; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);


--
-- Name: personnels personnels_email_unique; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.personnels
    ADD CONSTRAINT personnels_email_unique UNIQUE (email);


--
-- Name: personnels personnels_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.personnels
    ADD CONSTRAINT personnels_pkey PRIMARY KEY (id);


--
-- Name: population population_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.population
    ADD CONSTRAINT population_pkey PRIMARY KEY (id);


--
-- Name: provinces provinces_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.provinces
    ADD CONSTRAINT provinces_pkey PRIMARY KEY (id);


--
-- Name: psgcs psgcs_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.psgcs
    ADD CONSTRAINT psgcs_pkey PRIMARY KEY (id);


--
-- Name: regions regions_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.regions
    ADD CONSTRAINT regions_pkey PRIMARY KEY (id);


--
-- Name: request_portal request_portal_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.request_portal
    ADD CONSTRAINT request_portal_pkey PRIMARY KEY (id);


--
-- Name: role_has_permissions role_has_permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_pkey PRIMARY KEY (permission_id, role_id);


--
-- Name: roles roles_name_guard_name_unique; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_name_guard_name_unique UNIQUE (name, guard_name);


--
-- Name: roles roles_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: visionmissions visionmissions_pkey; Type: CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.visionmissions
    ADD CONSTRAINT visionmissions_pkey PRIMARY KEY (id);


--
-- Name: model_has_permissions_model_id_model_type_index; Type: INDEX; Schema: public; Owner: nnc_dbuser
--

CREATE INDEX model_has_permissions_model_id_model_type_index ON public.model_has_permissions USING btree (model_id, model_type);


--
-- Name: model_has_roles_model_id_model_type_index; Type: INDEX; Schema: public; Owner: nnc_dbuser
--

CREATE INDEX model_has_roles_model_id_model_type_index ON public.model_has_roles USING btree (model_id, model_type);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: nnc_dbuser
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- Name: personal_access_tokens_tokenable_type_tokenable_id_index; Type: INDEX; Schema: public; Owner: nnc_dbuser
--

CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);


--
-- Name: barangays barangays_city_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.barangays
    ADD CONSTRAINT barangays_city_id_foreign FOREIGN KEY (city_id) REFERENCES public.citys(id);


--
-- Name: barangays barangays_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.barangays
    ADD CONSTRAINT barangays_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: barangays barangays_psgccode_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.barangays
    ADD CONSTRAINT barangays_psgccode_id_foreign FOREIGN KEY (psgccode_id) REFERENCES public.psgcs(id);


--
-- Name: barangaytracking barangaytracking_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.barangaytracking
    ADD CONSTRAINT barangaytracking_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: barangaytracking barangaytracking_lguprofilebarangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.barangaytracking
    ADD CONSTRAINT barangaytracking_lguprofilebarangay_id_foreign FOREIGN KEY (lguprofilebarangay_id) REFERENCES public.lguprofilebarangay(id);


--
-- Name: barangaytracking barangaytracking_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.barangaytracking
    ADD CONSTRAINT barangaytracking_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: barangaytracking barangaytracking_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.barangaytracking
    ADD CONSTRAINT barangaytracking_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: bnss bnss_personnel_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.bnss
    ADD CONSTRAINT bnss_personnel_id_foreign FOREIGN KEY (personnel_id) REFERENCES public.personnels(id);


--
-- Name: citys citys_psgccode_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.citys
    ADD CONSTRAINT citys_psgccode_id_foreign FOREIGN KEY (psgccode_id) REFERENCES public.psgcs(id);


--
-- Name: citys citys_region_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.citys
    ADD CONSTRAINT citys_region_id_foreign FOREIGN KEY (region_id) REFERENCES public.regions(id);


--
-- Name: equipment_inventory equipment_inventory_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.equipment_inventory
    ADD CONSTRAINT equipment_inventory_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: equipment_inventory equipment_inventory_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.equipment_inventory
    ADD CONSTRAINT equipment_inventory_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: equipment_inventory equipment_inventory_psgccode_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.equipment_inventory
    ADD CONSTRAINT equipment_inventory_psgccode_id_foreign FOREIGN KEY (psgccode_id) REFERENCES public.psgcs(id);


--
-- Name: equipment_inventory equipment_inventory_region_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.equipment_inventory
    ADD CONSTRAINT equipment_inventory_region_id_foreign FOREIGN KEY (region_id) REFERENCES public.regions(id);


--
-- Name: form_fields form_fields_form_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.form_fields
    ADD CONSTRAINT form_fields_form_id_foreign FOREIGN KEY (form_id) REFERENCES public.forms(id) ON DELETE CASCADE;


--
-- Name: form_submissions form_submissions_form_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.form_submissions
    ADD CONSTRAINT form_submissions_form_id_foreign FOREIGN KEY (form_id) REFERENCES public.forms(id) ON DELETE CASCADE;


--
-- Name: governances governances_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.governances
    ADD CONSTRAINT governances_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: governances governances_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.governances
    ADD CONSTRAINT governances_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: governances governances_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.governances
    ADD CONSTRAINT governances_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: lguprofilebarangay lguprofilebarangay_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lguprofilebarangay
    ADD CONSTRAINT lguprofilebarangay_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: lguprofilebarangay lguprofilebarangay_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lguprofilebarangay
    ADD CONSTRAINT lguprofilebarangay_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: lguprofilebarangay lguprofilebarangay_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lguprofilebarangay
    ADD CONSTRAINT lguprofilebarangay_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: lguprofilebarangay lguprofilebarangay_region_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lguprofilebarangay
    ADD CONSTRAINT lguprofilebarangay_region_id_foreign FOREIGN KEY (region_id) REFERENCES public.regions(id);


--
-- Name: lnc_management_function lnc_management_function_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lnc_management_function
    ADD CONSTRAINT lnc_management_function_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: lnc_management_function lnc_management_function_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lnc_management_function
    ADD CONSTRAINT lnc_management_function_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: lnc_management_function lnc_management_function_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.lnc_management_function
    ADD CONSTRAINT lnc_management_function_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: location_pivot location_pivot_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.location_pivot
    ADD CONSTRAINT location_pivot_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: location_pivot location_pivot_city_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.location_pivot
    ADD CONSTRAINT location_pivot_city_id_foreign FOREIGN KEY (city_id) REFERENCES public.citys(id);


--
-- Name: location_pivot location_pivot_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.location_pivot
    ADD CONSTRAINT location_pivot_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: location_pivot location_pivot_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.location_pivot
    ADD CONSTRAINT location_pivot_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: location_pivot location_pivot_psgc_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.location_pivot
    ADD CONSTRAINT location_pivot_psgc_id_foreign FOREIGN KEY (psgc_id) REFERENCES public.psgcs(id);


--
-- Name: location_pivot location_pivot_region_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.location_pivot
    ADD CONSTRAINT location_pivot_region_id_foreign FOREIGN KEY (region_id) REFERENCES public.regions(id);


--
-- Name: mellpiprobarangaynationalpolicies mellpiprobarangaynationalpolicies_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mellpiprobarangaynationalpolicies
    ADD CONSTRAINT mellpiprobarangaynationalpolicies_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: mellpiprobarangaynationalpolicies mellpiprobarangaynationalpolicies_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mellpiprobarangaynationalpolicies
    ADD CONSTRAINT mellpiprobarangaynationalpolicies_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: mellpiprobarangaynationalpolicies mellpiprobarangaynationalpolicies_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mellpiprobarangaynationalpolicies
    ADD CONSTRAINT mellpiprobarangaynationalpolicies_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: mellpiprobarangaynationalpolicies mellpiprobarangaynationalpolicies_region_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mellpiprobarangaynationalpolicies
    ADD CONSTRAINT mellpiprobarangaynationalpolicies_region_id_foreign FOREIGN KEY (region_id) REFERENCES public.regions(id);


--
-- Name: mellpiprobarangaynationalpolicies mellpiprobarangaynationalpolicies_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mellpiprobarangaynationalpolicies
    ADD CONSTRAINT mellpiprobarangaynationalpolicies_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: model_has_permissions model_has_permissions_permission_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;


--
-- Name: model_has_roles model_has_roles_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;


--
-- Name: mpbrgynationalPoliciestracking mpbrgynationalpoliciestracking_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mpbrgynationalPoliciestracking"
    ADD CONSTRAINT mpbrgynationalpoliciestracking_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: mpbrgynationalPoliciestracking mpbrgynationalpoliciestracking_mellpiprobarangaynationalpolicie; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mpbrgynationalPoliciestracking"
    ADD CONSTRAINT mpbrgynationalpoliciestracking_mellpiprobarangaynationalpolicie FOREIGN KEY (mellpiprobarangaynationalpolicies_id) REFERENCES public.mellpiprobarangaynationalpolicies(id);


--
-- Name: mpbrgynationalPoliciestracking mpbrgynationalpoliciestracking_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mpbrgynationalPoliciestracking"
    ADD CONSTRAINT mpbrgynationalpoliciestracking_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: mpbrgynationalPoliciestracking mpbrgynationalpoliciestracking_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mpbrgynationalPoliciestracking"
    ADD CONSTRAINT mpbrgynationalpoliciestracking_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: mplgubrgychangeNS mplgubrgychangens_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mplgubrgychangeNS"
    ADD CONSTRAINT mplgubrgychangens_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: mplgubrgychangeNS mplgubrgychangens_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mplgubrgychangeNS"
    ADD CONSTRAINT mplgubrgychangens_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: mplgubrgychangeNS mplgubrgychangens_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mplgubrgychangeNS"
    ADD CONSTRAINT mplgubrgychangens_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: mplgubrgychangeNS mplgubrgychangens_region_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mplgubrgychangeNS"
    ADD CONSTRAINT mplgubrgychangens_region_id_foreign FOREIGN KEY (region_id) REFERENCES public.regions(id);


--
-- Name: mplgubrgychangeNS mplgubrgychangens_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mplgubrgychangeNS"
    ADD CONSTRAINT mplgubrgychangens_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: mplgubrgychangeNStracking mplgubrgychangenstracking_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mplgubrgychangeNStracking"
    ADD CONSTRAINT mplgubrgychangenstracking_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: mplgubrgychangeNStracking mplgubrgychangenstracking_mplgubrgychangens_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mplgubrgychangeNStracking"
    ADD CONSTRAINT mplgubrgychangenstracking_mplgubrgychangens_id_foreign FOREIGN KEY ("mplgubrgychangeNS_id") REFERENCES public."mplgubrgychangeNS"(id);


--
-- Name: mplgubrgychangeNStracking mplgubrgychangenstracking_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mplgubrgychangeNStracking"
    ADD CONSTRAINT mplgubrgychangenstracking_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: mplgubrgychangeNStracking mplgubrgychangenstracking_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public."mplgubrgychangeNStracking"
    ADD CONSTRAINT mplgubrgychangenstracking_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: mplgubrgydiscussionquestion mplgubrgydiscussionquestion_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgydiscussionquestion
    ADD CONSTRAINT mplgubrgydiscussionquestion_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: mplgubrgydiscussionquestion mplgubrgydiscussionquestion_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgydiscussionquestion
    ADD CONSTRAINT mplgubrgydiscussionquestion_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: mplgubrgydiscussionquestion mplgubrgydiscussionquestion_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgydiscussionquestion
    ADD CONSTRAINT mplgubrgydiscussionquestion_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: mplgubrgydiscussionquestion mplgubrgydiscussionquestion_region_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgydiscussionquestion
    ADD CONSTRAINT mplgubrgydiscussionquestion_region_id_foreign FOREIGN KEY (region_id) REFERENCES public.regions(id);


--
-- Name: mplgubrgydiscussionquestion mplgubrgydiscussionquestion_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgydiscussionquestion
    ADD CONSTRAINT mplgubrgydiscussionquestion_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: mplgubrgydiscussionquestiontracking mplgubrgydiscussionquestiontracking_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgydiscussionquestiontracking
    ADD CONSTRAINT mplgubrgydiscussionquestiontracking_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: mplgubrgydiscussionquestiontracking mplgubrgydiscussionquestiontracking_mplgubrgydiscussionquestion; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgydiscussionquestiontracking
    ADD CONSTRAINT mplgubrgydiscussionquestiontracking_mplgubrgydiscussionquestion FOREIGN KEY (mplgubrgydiscussionquestion_id) REFERENCES public.mplgubrgydiscussionquestion(id);


--
-- Name: mplgubrgydiscussionquestiontracking mplgubrgydiscussionquestiontracking_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgydiscussionquestiontracking
    ADD CONSTRAINT mplgubrgydiscussionquestiontracking_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: mplgubrgydiscussionquestiontracking mplgubrgydiscussionquestiontracking_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgydiscussionquestiontracking
    ADD CONSTRAINT mplgubrgydiscussionquestiontracking_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: mplgubrgygovernance mplgubrgygovernance_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgygovernance
    ADD CONSTRAINT mplgubrgygovernance_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: mplgubrgygovernance mplgubrgygovernance_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgygovernance
    ADD CONSTRAINT mplgubrgygovernance_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: mplgubrgygovernance mplgubrgygovernance_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgygovernance
    ADD CONSTRAINT mplgubrgygovernance_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: mplgubrgygovernance mplgubrgygovernance_region_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgygovernance
    ADD CONSTRAINT mplgubrgygovernance_region_id_foreign FOREIGN KEY (region_id) REFERENCES public.regions(id);


--
-- Name: mplgubrgygovernance mplgubrgygovernance_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgygovernance
    ADD CONSTRAINT mplgubrgygovernance_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: mplgubrgygovernancetracking mplgubrgygovernancetracking_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgygovernancetracking
    ADD CONSTRAINT mplgubrgygovernancetracking_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: mplgubrgygovernancetracking mplgubrgygovernancetracking_mplgubrgygovernance_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgygovernancetracking
    ADD CONSTRAINT mplgubrgygovernancetracking_mplgubrgygovernance_id_foreign FOREIGN KEY (mplgubrgygovernance_id) REFERENCES public.mplgubrgygovernance(id);


--
-- Name: mplgubrgygovernancetracking mplgubrgygovernancetracking_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgygovernancetracking
    ADD CONSTRAINT mplgubrgygovernancetracking_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: mplgubrgygovernancetracking mplgubrgygovernancetracking_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgygovernancetracking
    ADD CONSTRAINT mplgubrgygovernancetracking_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: mplgubrgylncmanagement mplgubrgylncmanagement_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgylncmanagement
    ADD CONSTRAINT mplgubrgylncmanagement_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: mplgubrgylncmanagement mplgubrgylncmanagement_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgylncmanagement
    ADD CONSTRAINT mplgubrgylncmanagement_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: mplgubrgylncmanagement mplgubrgylncmanagement_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgylncmanagement
    ADD CONSTRAINT mplgubrgylncmanagement_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: mplgubrgylncmanagement mplgubrgylncmanagement_region_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgylncmanagement
    ADD CONSTRAINT mplgubrgylncmanagement_region_id_foreign FOREIGN KEY (region_id) REFERENCES public.regions(id);


--
-- Name: mplgubrgylncmanagement mplgubrgylncmanagement_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgylncmanagement
    ADD CONSTRAINT mplgubrgylncmanagement_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: mplgubrgylncmanagementtracking mplgubrgylncmanagementtracking_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgylncmanagementtracking
    ADD CONSTRAINT mplgubrgylncmanagementtracking_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: mplgubrgylncmanagementtracking mplgubrgylncmanagementtracking_mplgubrgylncmanagement_id_foreig; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgylncmanagementtracking
    ADD CONSTRAINT mplgubrgylncmanagementtracking_mplgubrgylncmanagement_id_foreig FOREIGN KEY (mplgubrgylncmanagement_id) REFERENCES public.mplgubrgylncmanagement(id);


--
-- Name: mplgubrgylncmanagementtracking mplgubrgylncmanagementtracking_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgylncmanagementtracking
    ADD CONSTRAINT mplgubrgylncmanagementtracking_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: mplgubrgylncmanagementtracking mplgubrgylncmanagementtracking_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgylncmanagementtracking
    ADD CONSTRAINT mplgubrgylncmanagementtracking_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: mplgubrgynutritionservice mplgubrgynutritionservice_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgynutritionservice
    ADD CONSTRAINT mplgubrgynutritionservice_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: mplgubrgynutritionservice mplgubrgynutritionservice_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgynutritionservice
    ADD CONSTRAINT mplgubrgynutritionservice_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: mplgubrgynutritionservice mplgubrgynutritionservice_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgynutritionservice
    ADD CONSTRAINT mplgubrgynutritionservice_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: mplgubrgynutritionservice mplgubrgynutritionservice_region_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgynutritionservice
    ADD CONSTRAINT mplgubrgynutritionservice_region_id_foreign FOREIGN KEY (region_id) REFERENCES public.regions(id);


--
-- Name: mplgubrgynutritionservice mplgubrgynutritionservice_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgynutritionservice
    ADD CONSTRAINT mplgubrgynutritionservice_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: mplgubrgynutritionservicetracking mplgubrgynutritionservicetracking_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgynutritionservicetracking
    ADD CONSTRAINT mplgubrgynutritionservicetracking_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: mplgubrgynutritionservicetracking mplgubrgynutritionservicetracking_mplgubrgynutritionservice_id_; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgynutritionservicetracking
    ADD CONSTRAINT mplgubrgynutritionservicetracking_mplgubrgynutritionservice_id_ FOREIGN KEY (mplgubrgynutritionservice_id) REFERENCES public.mplgubrgynutritionservice(id);


--
-- Name: mplgubrgynutritionservicetracking mplgubrgynutritionservicetracking_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgynutritionservicetracking
    ADD CONSTRAINT mplgubrgynutritionservicetracking_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: mplgubrgynutritionservicetracking mplgubrgynutritionservicetracking_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgynutritionservicetracking
    ADD CONSTRAINT mplgubrgynutritionservicetracking_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: mplgubrgyvisionmissions mplgubrgyvisionmissions_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgyvisionmissions
    ADD CONSTRAINT mplgubrgyvisionmissions_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: mplgubrgyvisionmissions mplgubrgyvisionmissions_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgyvisionmissions
    ADD CONSTRAINT mplgubrgyvisionmissions_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: mplgubrgyvisionmissions mplgubrgyvisionmissions_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgyvisionmissions
    ADD CONSTRAINT mplgubrgyvisionmissions_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: mplgubrgyvisionmissions mplgubrgyvisionmissions_region_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgyvisionmissions
    ADD CONSTRAINT mplgubrgyvisionmissions_region_id_foreign FOREIGN KEY (region_id) REFERENCES public.regions(id);


--
-- Name: mplgubrgyvisionmissions mplgubrgyvisionmissions_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgyvisionmissions
    ADD CONSTRAINT mplgubrgyvisionmissions_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: mplgubrgyvisionmissionstracking mplgubrgyvisionmissionstracking_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgyvisionmissionstracking
    ADD CONSTRAINT mplgubrgyvisionmissionstracking_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: mplgubrgyvisionmissionstracking mplgubrgyvisionmissionstracking_mplgubrgyvisionmissions_id_fore; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgyvisionmissionstracking
    ADD CONSTRAINT mplgubrgyvisionmissionstracking_mplgubrgyvisionmissions_id_fore FOREIGN KEY (mplgubrgyvisionmissions_id) REFERENCES public.mplgubrgyvisionmissions(id);


--
-- Name: mplgubrgyvisionmissionstracking mplgubrgyvisionmissionstracking_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgyvisionmissionstracking
    ADD CONSTRAINT mplgubrgyvisionmissionstracking_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: mplgubrgyvisionmissionstracking mplgubrgyvisionmissionstracking_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.mplgubrgyvisionmissionstracking
    ADD CONSTRAINT mplgubrgyvisionmissionstracking_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: municipals municipals_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.municipals
    ADD CONSTRAINT municipals_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: municipals municipals_psgccode_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.municipals
    ADD CONSTRAINT municipals_psgccode_id_foreign FOREIGN KEY (psgccode_id) REFERENCES public.psgcs(id);


--
-- Name: naos naos_personnel_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.naos
    ADD CONSTRAINT naos_personnel_id_foreign FOREIGN KEY (personnel_id) REFERENCES public.personnels(id);


--
-- Name: nationalpolicies nationalpolicies_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nationalpolicies
    ADD CONSTRAINT nationalpolicies_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: nationalpolicies nationalpolicies_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nationalpolicies
    ADD CONSTRAINT nationalpolicies_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: nationalpolicies nationalpolicies_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nationalpolicies
    ADD CONSTRAINT nationalpolicies_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: npcs npcs_personnel_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.npcs
    ADD CONSTRAINT npcs_personnel_id_foreign FOREIGN KEY (personnel_id) REFERENCES public.personnels(id);


--
-- Name: nutrition_intervention nutrition_intervention_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nutrition_intervention
    ADD CONSTRAINT nutrition_intervention_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: nutrition_intervention nutrition_intervention_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nutrition_intervention
    ADD CONSTRAINT nutrition_intervention_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: nutrition_intervention nutrition_intervention_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nutrition_intervention
    ADD CONSTRAINT nutrition_intervention_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: nutrition_offices nutrition_offices_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nutrition_offices
    ADD CONSTRAINT nutrition_offices_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: nutrition_offices nutrition_offices_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nutrition_offices
    ADD CONSTRAINT nutrition_offices_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: nutrition_offices nutrition_offices_psgccode_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nutrition_offices
    ADD CONSTRAINT nutrition_offices_psgccode_id_foreign FOREIGN KEY (psgccode_id) REFERENCES public.psgcs(id);


--
-- Name: nutrition_offices nutrition_offices_region_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.nutrition_offices
    ADD CONSTRAINT nutrition_offices_region_id_foreign FOREIGN KEY (region_id) REFERENCES public.regions(id);


--
-- Name: personnels personnels_cities_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.personnels
    ADD CONSTRAINT personnels_cities_id_foreign FOREIGN KEY (cities_id) REFERENCES public.cities(id);


--
-- Name: personnels personnels_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.personnels
    ADD CONSTRAINT personnels_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- Name: personnels personnels_region_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.personnels
    ADD CONSTRAINT personnels_region_id_foreign FOREIGN KEY (region_id) REFERENCES public.regions(id);


--
-- Name: population population_psgccode_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.population
    ADD CONSTRAINT population_psgccode_id_foreign FOREIGN KEY (psgccode_id) REFERENCES public.psgcs(id);


--
-- Name: provinces provinces_psgccode_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.provinces
    ADD CONSTRAINT provinces_psgccode_id_foreign FOREIGN KEY (psgccode_id) REFERENCES public.psgcs(id);


--
-- Name: provinces provinces_region_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.provinces
    ADD CONSTRAINT provinces_region_id_foreign FOREIGN KEY (region_id) REFERENCES public.regions(id);


--
-- Name: regions regions_psgccode_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.regions
    ADD CONSTRAINT regions_psgccode_id_foreign FOREIGN KEY (psgccode_id) REFERENCES public.psgcs(id);


--
-- Name: role_has_permissions role_has_permissions_permission_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;


--
-- Name: role_has_permissions role_has_permissions_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;


--
-- Name: visionmissions visionmissions_barangay_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.visionmissions
    ADD CONSTRAINT visionmissions_barangay_id_foreign FOREIGN KEY (barangay_id) REFERENCES public.barangays(id);


--
-- Name: visionmissions visionmissions_municipal_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.visionmissions
    ADD CONSTRAINT visionmissions_municipal_id_foreign FOREIGN KEY (municipal_id) REFERENCES public.municipals(id);


--
-- Name: visionmissions visionmissions_province_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: nnc_dbuser
--

ALTER TABLE ONLY public.visionmissions
    ADD CONSTRAINT visionmissions_province_id_foreign FOREIGN KEY (province_id) REFERENCES public.provinces(id);


--
-- PostgreSQL database dump complete
--

--
-- Database "postgres" dump
--

\connect postgres

--
-- PostgreSQL database dump
--

-- Dumped from database version 14.12 (Ubuntu 14.12-0ubuntu0.22.04.1)
-- Dumped by pg_dump version 14.12 (Ubuntu 14.12-0ubuntu0.22.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- PostgreSQL database dump complete
--

--
-- PostgreSQL database cluster dump complete
--

