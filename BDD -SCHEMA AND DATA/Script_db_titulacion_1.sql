--Creacion administrador de la base de datos 

CREATE ROLE titulacion_db_admin LOGIN
  ENCRYPTED PASSWORD 'fb0c33a45'
  SUPERUSER INHERIT CREATEDB CREATEROLE REPLICATION;
  
--Creamos base de datos llamada db_titulacion
--con titulacion_db_admin como owner
CREATE DATABASE db_titulacion
  WITH ENCODING='UTF8'
       OWNER=titulacion_db_admin
       CONNECTION LIMIT=-1;
--Creamos roles

-- Role: R_PROFESOR

-- DROP ROLE "R_PROFESOR";

CREATE ROLE "R_PROFESOR"
  NOSUPERUSER NOINHERIT NOCREATEDB NOCREATEROLE NOREPLICATION;
  
-- Role: R_ESTUDIANTE

-- DROP ROLE "R_ESTUDIANTE";

CREATE ROLE "R_ESTUDIANTE"
  NOSUPERUSER NOINHERIT NOCREATEDB NOCREATEROLE NOREPLICATION;

-- Role: R_AUDITOR

-- DROP ROLE "R_AUDITOR";

CREATE ROLE "R_AUDITOR"
  NOSUPERUSER NOINHERIT NOCREATEDB NOCREATEROLE NOREPLICATION;
COMMENT ON ROLE "R_AUDITOR" IS 'Tiene acceso a la tabla log';

-- Role: R_ADMINISTRADOR

-- DROP ROLE "R_ADMINISTRADOR";

CREATE ROLE "R_ADMINISTRADOR"
  NOSUPERUSER NOINHERIT NOCREATEDB NOCREATEROLE NOREPLICATION;
COMMENT ON ROLE "R_ADMINISTRADOR" IS 'Administra los usuarios del sistema';

-- Role: R_DIRECTOR_T_TITULACION

-- DROP ROLE "R_DIRECTOR_T_TITULACION";

CREATE ROLE "R_DIRECTOR_T_TITULACION"
  NOSUPERUSER NOINHERIT NOCREATEDB NOCREATEROLE NOREPLICATION;
COMMENT ON ROLE "R_DIRECTOR_T_TITULACION" IS 'Director trabajo de titulacion';

-- Role: R_REVISOR_T_TITULACION

-- DROP ROLE "R_REVISOR_T_TITULACION";

CREATE ROLE "R_REVISOR_T_TITULACION"
  NOSUPERUSER NOINHERIT NOCREATEDB NOCREATEROLE NOREPLICATION;
COMMENT ON ROLE "R_REVISOR_T_TITULACION" IS 'Revisor trabajo de titulacion';

-- Role: R_OPERADOR

-- DROP ROLE "R_OPERADOR";

CREATE ROLE "R_OPERADOR"
  NOSUPERUSER NOINHERIT NOCREATEDB NOCREATEROLE NOREPLICATION;
COMMENT ON ROLE "R_OPERADOR" IS 'Puede insertar o actualizar ciertos elementos en el sistema.';

-- Role: R_VISTA

-- DROP ROLE "R_VISTA";

CREATE ROLE "R_VISTA"
  NOSUPERUSER NOINHERIT NOCREATEDB NOCREATEROLE NOREPLICATION;
COMMENT ON ROLE "R_VISTA" IS 'Unicamente puede ver informacion del sistema';