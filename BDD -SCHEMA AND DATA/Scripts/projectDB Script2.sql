--Creacion nuevo esquema con propietario titulacion_db_admin

CREATE SCHEMA titulacion
  AUTHORIZATION titulacion_db_admin;

GRANT ALL ON SCHEMA titulacion TO titulacion_db_admin;
GRANT USAGE ON SCHEMA titulacion TO "R_ADMINISTRADOR";
GRANT USAGE ON SCHEMA titulacion TO "R_AUDITOR";
GRANT USAGE ON SCHEMA titulacion TO "R_RESPONSABLE_U_TITULACION_I";
GRANT USAGE ON SCHEMA titulacion TO "R_ESTUDIANTE";
GRANT USAGE ON SCHEMA titulacion TO "R_SECRETARIA";
GRANT USAGE ON SCHEMA titulacion TO "R_RESPONSABLE_U_TITULACION_II";
GRANT USAGE ON SCHEMA titulacion TO "R_VISTA";

--Cargamos las tablas en el esquema titulacion

SET search_path TO titulacion;
SET ROLE titulacion_db_admin;

/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     20/04/2017 11:45:35 a. m.                    */
/*==============================================================*/

/*==============================================================*/
/* Domain: ZESTEXAM                                             */
/*==============================================================*/
create domain ZESTEXAM as CHAR(2);

comment on domain ZESTEXAM is
'Estado Examen
AP
RP
EP';

/*==============================================================*/
/* Domain: Z_INTENTO_EXAMEN                                     */
/*==============================================================*/
create domain Z_INTENTO_EXAMEN as CHAR(1);

comment on domain Z_INTENTO_EXAMEN is
'P=Primer intento
S=Segundo intento';

/*==============================================================*/
/* Domain: Z_OPCION_GRADO                                       */
/*==============================================================*/
create domain Z_OPCION_GRADO as CHAR(3);

comment on domain Z_OPCION_GRADO is
'TRD=Trabajo de disertacion
EXC=Examen complexivo';

/*==============================================================*/
/* Domain: Z_SEXO                                               */
/*==============================================================*/
create domain Z_SEXO as VARCHAR(1);

comment on domain Z_SEXO is
'M = Masculino
F = Femenino';

/*==============================================================*/
/* Domain: Z_TIPO_ID                                            */
/*==============================================================*/
create domain Z_TIPO_ID as VARCHAR(3);

comment on domain Z_TIPO_ID is
'CED = Cédula
PAS = Pasaporte
OTR = Otro';

/*==============================================================*/
/* Domain: Z_TIPO_RESPONSABLE_T                                 */
/*==============================================================*/
create domain Z_TIPO_RESPONSABLE_T as VARCHAR(2);

comment on domain Z_TIPO_RESPONSABLE_T is
'R1 = Responsable Titulación I
R2 = Responsable Titulación II';

/*==============================================================*/
/* Domain: Z_TIPO_REVISOR                                       */
/*==============================================================*/
create domain Z_TIPO_REVISOR as VARCHAR(3);

comment on domain Z_TIPO_REVISOR is
'Tipo de revisor
DIR = Director
R_1 = Revisor 1
R_2 = Revisor 2';

/*==============================================================*/
/* Table: CARRERA                                               */
/*==============================================================*/
create table CARRERA (
   CARR_CODIGO          SERIAL               not null,
   ESC_CODIGO           INT4                 not null,
   CARR_DESCRIPCION     CHAR(50)             not null,
   constraint PK_CARRERA primary key (CARR_CODIGO)
);

/*==============================================================*/
/* Index: CARRERA_PK                                            */
/*==============================================================*/
create unique index CARRERA_PK on CARRERA (
CARR_CODIGO
);

/*==============================================================*/
/* Index: CARR_ESC_FK                                           */
/*==============================================================*/
create  index CARR_ESC_FK on CARRERA (
ESC_CODIGO
);

/*==============================================================*/
/* Table: ESCUELA                                               */
/*==============================================================*/
create table ESCUELA (
   ESC_CODIGO           SERIAL               not null,
   FACU_CODIGO          INT4                 not null,
   ESC_DESCRIPCION      CHAR(50)             not null,
   constraint PK_ESCUELA primary key (ESC_CODIGO)
);

/*==============================================================*/
/* Index: ESCUELA_PK                                            */
/*==============================================================*/
create unique index ESCUELA_PK on ESCUELA (
ESC_CODIGO
);

/*==============================================================*/
/* Index: ESC_FACU_FK                                           */
/*==============================================================*/
create  index ESC_FACU_FK on ESCUELA (
FACU_CODIGO
);

/*==============================================================*/
/* Table: ESTUDIANTE                                            */
/*==============================================================*/
create table ESTUDIANTE (
   EST_CODIGO           SERIAL               not null,
   CARR_CODIGO          INT4                 not null,
   EST_NOMBRE1          CHAR(50)             not null,
   EST_NOMBRE2          CHAR(50)             null,
   EST_APELLIDO1        CHAR(50)             not null,
   EST_APELLIDO2        CHAR(50)             null,
   EST_TIPOID           Z_TIPO_ID            not null,
   EST_ID               CHAR(15)             not null,
   EST_DIRECCION        CHAR(256)            not null,
   EST_TELEFONO         CHAR(10)             null,
   EST_CELULAR          CHAR(10)             not null,
   EST_MAIL             CHAR(256)            not null,
   EST_MAILPUCE         CHAR(256)            null,
   EST_FECHANAC         DATE                 not null,
   EST_SEXO             Z_SEXO               not null,
   EST_FOTO             CHAR(254)            null,
   EST_FECHAINGRESO     DATE                 not null,
   EST_FECHAESTIMADAGRADUACION DATE                 null,
   EST_FECHAGRADUACION  DATE                 null,
   constraint PK_ESTUDIANTE primary key (EST_CODIGO)
);

/*==============================================================*/
/* Index: ESTUDIANTE_PK                                         */
/*==============================================================*/
create unique index ESTUDIANTE_PK on ESTUDIANTE (
EST_CODIGO
);

/*==============================================================*/
/* Index: EST_CARR_FK                                           */
/*==============================================================*/
create  index EST_CARR_FK on ESTUDIANTE (
CARR_CODIGO
);

/*==============================================================*/
/* Table: EVENTO                                                */
/*==============================================================*/
create table EVENTO (
   EVE_CODIGO           SERIAL               not null,
   EVE_FECHA            DATE                 null,
   EVE_TEMA             CHAR(256)            null,
   EVE_DESCRIPCION      VARCHAR(1024)        null,
   constraint PK_EVENTO primary key (EVE_CODIGO)
);

/*==============================================================*/
/* Index: EVENTO_PK                                             */
/*==============================================================*/
create unique index EVENTO_PK on EVENTO (
EVE_CODIGO
);

/*==============================================================*/
/* Table: EVE_X_EST                                             */
/*==============================================================*/
create table EVE_X_EST (
   EST_CODIGO           INT4                 not null,
   EVE_CODIGO           INT4                 not null,
   EXE_ASISTENCIA       BOOL                 null,
   constraint PK_EVE_X_EST primary key (EST_CODIGO, EVE_CODIGO)
);

/*==============================================================*/
/* Index: EVE_X_EST_PK                                          */
/*==============================================================*/
create unique index EVE_X_EST_PK on EVE_X_EST (
EST_CODIGO,
EVE_CODIGO
);

/*==============================================================*/
/* Index: EVE_X_EST2_FK                                         */
/*==============================================================*/
create  index EVE_X_EST2_FK on EVE_X_EST (
EST_CODIGO
);

/*==============================================================*/
/* Index: EVE_X_EST_FK                                          */
/*==============================================================*/
create  index EVE_X_EST_FK on EVE_X_EST (
EVE_CODIGO
);

/*==============================================================*/
/* Table: EXAMEN_COMPLEXIVO                                     */
/*==============================================================*/
create table EXAMEN_COMPLEXIVO (
   EXA_CODIGO           SERIAL               not null,
   OPG_CODIGO           INT4                 null,
   EXA_FECHAINICIO      DATE                 not null,
   EXA_ESTADO           ZESTEXAM             not null,
   EXA_HORAS_DOCENCIA   INT4                 null,
   EXA_HORAS_AUTONOMAS  INT4                 null,
   constraint PK_EXAMEN_COMPLEXIVO primary key (EXA_CODIGO)
);

/*==============================================================*/
/* Index: EXAMEN_COMPLEXIVO_PK                                  */
/*==============================================================*/
create unique index EXAMEN_COMPLEXIVO_PK on EXAMEN_COMPLEXIVO (
EXA_CODIGO
);

/*==============================================================*/
/* Index: EXA_OPC_FK                                            */
/*==============================================================*/
create  index EXA_OPC_FK on EXAMEN_COMPLEXIVO (
OPG_CODIGO
);

/*==============================================================*/
/* Table: FACULTAD                                              */
/*==============================================================*/
create table FACULTAD (
   FACU_CODIGO          SERIAL               not null,
   FACU_DESCRIPCION     CHAR(50)             not null,
   constraint PK_FACULTAD primary key (FACU_CODIGO)
);

/*==============================================================*/
/* Index: FACULTAD_PK                                           */
/*==============================================================*/
create unique index FACULTAD_PK on FACULTAD (
FACU_CODIGO
);


/*==============================================================*/
/* Table: LOGGED_ACTIONS                                        */
/*==============================================================*/

CREATE TABLE logged_actions (
    schema_name text NOT NULL,
    TABLE_NAME text NOT NULL,
    user_name text,
    action_tstamp TIMESTAMP WITH TIME zone NOT NULL DEFAULT CURRENT_TIMESTAMP,
    action TEXT NOT NULL CHECK (action IN ('I','D','U')),
    original_data text,
    new_data text,
    query text
) WITH (fillfactor=100);

/*==============================================================*/
/* Table: MATERIA                                               */
/*==============================================================*/
create table MATERIA (
   MAT_CODIGO           SERIAL               not null,
   MAT_NOMBRE           CHAR(100)            not null,
   MAT_NIVEL            INT4                 not null,
   MAT_PROFESIONALIZANTE BOOL                 not null,
   constraint PK_MATERIA primary key (MAT_CODIGO)
);

/*==============================================================*/
/* Index: MATERIA_PK                                            */
/*==============================================================*/
create unique index MATERIA_PK on MATERIA (
MAT_CODIGO
);

/*==============================================================*/
/* Table: MAT_AP_X_EST                                          */
/*==============================================================*/
create table MAT_AP_X_EST (
   MAT_CODIGO           INT4                 not null,
   EST_CODIGO           INT4                 not null,
   constraint PK_MAT_AP_X_EST primary key (MAT_CODIGO, EST_CODIGO)
);

/*==============================================================*/
/* Index: MAT_AP_X_EST_PK                                       */
/*==============================================================*/
create unique index MAT_AP_X_EST_PK on MAT_AP_X_EST (
MAT_CODIGO,
EST_CODIGO
);

/*==============================================================*/
/* Index: MAT_AP_X_EST2_FK                                      */
/*==============================================================*/
create  index MAT_AP_X_EST2_FK on MAT_AP_X_EST (
EST_CODIGO
);

/*==============================================================*/
/* Index: MAT_AP_X_EST_FK                                       */
/*==============================================================*/
create  index MAT_AP_X_EST_FK on MAT_AP_X_EST (
MAT_CODIGO
);

/*==============================================================*/
/* Table: MAT_X_EXA                                             */
/*==============================================================*/
create table MAT_X_EXA (
   MAT_CODIGO           INT4                 not null,
   EXA_CODIGO           INT4                 not null,
   MXE_FECHA_1          DATE                 null,
   MXE_FECHA_2          DATE                 null,
   MXE_NOTA_ORAL_1      FLOAT8               null,
   MXE_NOTA_ESCRITA_1   FLOAT8               null,
   MXE_NOTA_ORAL_2      FLOAT8               null,
   MXE_NOTA_ESCRITA_2   FLOAT8               null,
   MXE_INTENTO          Z_INTENTO_EXAMEN     null,
   constraint PK_MAT_X_EXA primary key (MAT_CODIGO, EXA_CODIGO)
);

/*==============================================================*/
/* Index: MAT_X_EXA_PK                                          */
/*==============================================================*/
create unique index MAT_X_EXA_PK on MAT_X_EXA (
MAT_CODIGO,
EXA_CODIGO
);

/*==============================================================*/
/* Index: MAT_X_EXA2_FK                                         */
/*==============================================================*/
create  index MAT_X_EXA2_FK on MAT_X_EXA (
MAT_CODIGO
);

/*==============================================================*/
/* Index: MAT_X_EXA_FK                                          */
/*==============================================================*/
create  index MAT_X_EXA_FK on MAT_X_EXA (
EXA_CODIGO
);

/*==============================================================*/
/* Table: MAT_X_PLAN                                            */
/*==============================================================*/
create table MAT_X_PLAN (
   PLAN_CODIGO          INT4                 not null,
   MAT_CODIGO           INT4                 not null,
   PAC_CODIGO           INT4                 not null,
   constraint PK_MAT_X_PLAN primary key (PLAN_CODIGO, MAT_CODIGO, PAC_CODIGO)
);

/*==============================================================*/
/* Index: MAT_X_PLAN_PK                                         */
/*==============================================================*/
create unique index MAT_X_PLAN_PK on MAT_X_PLAN (
PLAN_CODIGO,
MAT_CODIGO,
PAC_CODIGO
);

/*==============================================================*/
/* Index: MAT_X_PLAN2_FK                                        */
/*==============================================================*/
create  index MAT_X_PLAN2_FK on MAT_X_PLAN (
PLAN_CODIGO
);

/*==============================================================*/
/* Index: MAT_X_PLAN3_FK                                        */
/*==============================================================*/
create  index MAT_X_PLAN3_FK on MAT_X_PLAN (
MAT_CODIGO
);

/*==============================================================*/
/* Index: MAT_X_PLAN_FK                                         */
/*==============================================================*/
create  index MAT_X_PLAN_FK on MAT_X_PLAN (
PAC_CODIGO
);

/*==============================================================*/
/* Table: MAT_X_PROF                                            */
/*==============================================================*/
create table MAT_X_PROF (
   PROF_CODIGO          INT4                 not null,
   MAT_CODIGO           INT4                 not null,
   constraint PK_MAT_X_PROF primary key (PROF_CODIGO, MAT_CODIGO)
);

/*==============================================================*/
/* Index: MAT_X_PROF_PK                                         */
/*==============================================================*/
create unique index MAT_X_PROF_PK on MAT_X_PROF (
PROF_CODIGO,
MAT_CODIGO
);

/*==============================================================*/
/* Index: DICTA2_FK                                             */
/*==============================================================*/
create  index DICTA2_FK on MAT_X_PROF (
MAT_CODIGO
);

/*==============================================================*/
/* Index: DICTA_FK                                              */
/*==============================================================*/
create  index DICTA_FK on MAT_X_PROF (
PROF_CODIGO
);

/*==============================================================*/
/* Table: OPCION_GRADO                                          */
/*==============================================================*/
create table OPCION_GRADO (
   OPG_CODIGO           SERIAL               not null,
   EST_CODIGO           INT4                 not null,
   OPG_ELECCION         Z_OPCION_GRADO       null,
   constraint PK_OPCION_GRADO primary key (OPG_CODIGO)
);

/*==============================================================*/
/* Index: OPCION_GRADO_PK                                       */
/*==============================================================*/
create unique index OPCION_GRADO_PK on OPCION_GRADO (
OPG_CODIGO
);

/*==============================================================*/
/* Index: OPC_EST_FK                                            */
/*==============================================================*/
create  index OPC_EST_FK on OPCION_GRADO (
EST_CODIGO
);

/*==============================================================*/
/* Table: PERIODO_ACADEMICO                                     */
/*==============================================================*/
create table PERIODO_ACADEMICO (
   PAC_CODIGO           SERIAL               not null,
   PAC_DESCRIPCION      CHAR(30)             not null,
   PAC_FECHAINICIO      DATE                 not null,
   PAC_FECHAFINAL       DATE                 not null,
   PAC_PERIDO           INT4                 null,
   constraint PK_PERIODO_ACADEMICO primary key (PAC_CODIGO)
);

/*==============================================================*/
/* Index: PERIODO_ACADEMICO_PK                                  */
/*==============================================================*/
create unique index PERIODO_ACADEMICO_PK on PERIODO_ACADEMICO (
PAC_CODIGO
);

/*==============================================================*/
/* Table: PLAN_DE_ESTUDIO                                       */
/*==============================================================*/
create table PLAN_DE_ESTUDIO (
   PLAN_CODIGO          SERIAL               not null,
   CARR_CODIGO          INT4                 not null,
   PLAN_DESCRIPCION     CHAR(50)             not null,
   PLAN_FECHAINICIO     DATE                 null,
   PLAN_VIGENCIA        BOOL                 null,
   constraint PK_PLAN_DE_ESTUDIO primary key (PLAN_CODIGO)
);

/*==============================================================*/
/* Index: PLAN_DE_ESTUDIO_PK                                    */
/*==============================================================*/
create unique index PLAN_DE_ESTUDIO_PK on PLAN_DE_ESTUDIO (
PLAN_CODIGO
);

/*==============================================================*/
/* Index: MALL_CARR_FK                                          */
/*==============================================================*/
create  index MALL_CARR_FK on PLAN_DE_ESTUDIO (
CARR_CODIGO
);

/*==============================================================*/
/* Table: PROFESOR                                              */
/*==============================================================*/
create table PROFESOR (
   PROF_CODIGO          SERIAL               not null,
   PROF_NOMBRE1         CHAR(50)             not null,
   PROF_NOMBRE2         CHAR(50)             null,
   PROF_APELLIDO1       CHAR(50)             not null,
   PROF_APELLIDO2       CHAR(50)             null,
   PROF_TIPOID          Z_TIPO_ID            not null,
   PROF_ID              CHAR(15)             not null,
   PROF_DIRECCION       CHAR(256)            not null,
   PROF_TELEFONO        CHAR(10)             null,
   PROF_CELULAR         CHAR(10)             not null,
   PROF_MAIL            CHAR(256)            not null,
   PROF_MAILPUCE        CHAR(256)            null,
   PROF_FECHANAC        DATE                 not null,
   PROF_SEXO            Z_SEXO               not null,
   PROF_FOTO            CHAR(254)            null,
   PROF_OFICINA         CHAR(15)             null,
   constraint PK_PROFESOR primary key (PROF_CODIGO)
);

/*==============================================================*/
/* Index: PROFESOR_PK                                           */
/*==============================================================*/
create unique index PROFESOR_PK on PROFESOR (
PROF_CODIGO
);

/*==============================================================*/
/* Table: PRORROGA                                              */
/*==============================================================*/
create table PRORROGA (
   PRO_CODIGO           SERIAL               not null,
   DIS_CODIGO           INT4                 not null,
   PRO_FECHAINT         DATE                 not null,
   PRO_FECHAINICIO      DATE                 not null,
   PRO_FECHAFIN         DATE                 not null,
   PRO_DESCRIPCION      CHAR(30)             not null,
   PRO_DETALLE          VARCHAR(1024)        not null,
   constraint PK_PRORROGA primary key (PRO_CODIGO)
);

/*==============================================================*/
/* Index: PRORROGA_PK                                           */
/*==============================================================*/
create unique index PRORROGA_PK on PRORROGA (
PRO_CODIGO
);

/*==============================================================*/
/* Index: PRO_DIS_FK                                            */
/*==============================================================*/
create  index PRO_DIS_FK on PRORROGA (
DIS_CODIGO
);

/*==============================================================*/
/* Table: RESPONSABLE_TITULACION                                */
/*==============================================================*/
create table RESPONSABLE_TITULACION (
   RES_CODIGO           SERIAL               not null,
   PROF_CODIGO          INT4                 null,
   PAC_CODIGO           INT4                 not null,
   RES_TIPO             Z_TIPO_RESPONSABLE_T not null,
   RES_FECHANOMBRAMIENTO DATE                 not null,
   constraint PK_RESPONSABLE_TITULACION primary key (RES_CODIGO)
);

/*==============================================================*/
/* Index: RESPONSABLE_TITULACION_PK                             */
/*==============================================================*/
create unique index RESPONSABLE_TITULACION_PK on RESPONSABLE_TITULACION (
RES_CODIGO
);

/*==============================================================*/
/* Index: RES_PROF_FK                                           */
/*==============================================================*/
create  index RES_PROF_FK on RESPONSABLE_TITULACION (
PROF_CODIGO
);

/*==============================================================*/
/* Index: RES_X_PER_FK                                          */
/*==============================================================*/
create  index RES_X_PER_FK on RESPONSABLE_TITULACION (
PAC_CODIGO
);

/*==============================================================*/
/* Table: REVDIR_X_DIS                                          */
/*==============================================================*/
create table REVDIR_X_DIS (
   DIS_CODIGO           INT4                 not null,
   PROF_CODIGO          INT4                 not null,
   RXD_TIPO             Z_TIPO_REVISOR       not null,
   RXD_FECHANOMBRAMIENTO DATE                 not null,
   constraint PK_REVDIR_X_DIS primary key (DIS_CODIGO, PROF_CODIGO)
);

/*==============================================================*/
/* Index: REVDIR_X_DIS_PK                                       */
/*==============================================================*/
create unique index REVDIR_X_DIS_PK on REVDIR_X_DIS (
DIS_CODIGO,
PROF_CODIGO
);

/*==============================================================*/
/* Index: REVDIR_X_DIS2_FK                                      */
/*==============================================================*/
create  index REVDIR_X_DIS2_FK on REVDIR_X_DIS (
DIS_CODIGO
);

/*==============================================================*/
/* Index: REVDIR_X_DIS_FK                                       */
/*==============================================================*/
create  index REVDIR_X_DIS_FK on REVDIR_X_DIS (
PROF_CODIGO
);

/*==============================================================*/
/* Table: TRABAJO_DISERTACION                                   */
/*==============================================================*/
create table TRABAJO_DISERTACION (
   DIS_CODIGO           SERIAL               not null,
   DIS_FECHAINICIO      DATE                 not null,
   DIS_FECHAPRESENTACIONPLAN DATE                 not null,
   DIS_FECHAAPROBACION  DATE                 not null,
   DIS_TITULO           VARCHAR(1024)        not null,
   DIS_ESTADO           BOOL                 not null,
   DIS_FECHAFIN         DATE                 null,
   DIS_DEFENSA          DATE                 null,
   DIS_APROBACIONREVISOR1 DATE                 null,
   DIS_APROBACIONREVISOR2 DATE                 null,
   constraint PK_TRABAJO_DISERTACION primary key (DIS_CODIGO)
);

/*==============================================================*/
/* Index: TRABAJO_DISERTACION_PK                                */
/*==============================================================*/
create unique index TRABAJO_DISERTACION_PK on TRABAJO_DISERTACION (
DIS_CODIGO
);

/*==============================================================*/
/* Table: TRAB_X_OPC                                            */
/*==============================================================*/
create table TRAB_X_OPC (
   OPG_CODIGO           INT4                 not null,
   DIS_CODIGO           INT4                 not null,
   ELB_NOTA_ORAL        FLOAT8               null,
   ELB_NOTA_ESCRITO     FLOAT8               null,
   constraint PK_TRAB_X_OPC primary key (OPG_CODIGO, DIS_CODIGO)
);

/*==============================================================*/
/* Index: TRAB_X_OPC_PK                                         */
/*==============================================================*/
create unique index TRAB_X_OPC_PK on TRAB_X_OPC (
OPG_CODIGO,
DIS_CODIGO
);

/*==============================================================*/
/* Index: TRAB_X_OPC2_FK                                        */
/*==============================================================*/
create  index TRAB_X_OPC2_FK on TRAB_X_OPC (
OPG_CODIGO
);

/*==============================================================*/
/* Index: TRAB_X_OPC_FK                                         */
/*==============================================================*/
create  index TRAB_X_OPC_FK on TRAB_X_OPC (
DIS_CODIGO
);

alter table CARRERA
   add constraint FK_CARRERA_CARR_ESC_ESCUELA foreign key (ESC_CODIGO)
      references ESCUELA (ESC_CODIGO)
      on delete restrict on update restrict;

alter table ESCUELA
   add constraint FK_ESCUELA_ESC_FACU_FACULTAD foreign key (FACU_CODIGO)
      references FACULTAD (FACU_CODIGO)
      on delete restrict on update restrict;

alter table ESTUDIANTE
   add constraint FK_ESTUDIAN_EST_CARR_CARRERA foreign key (CARR_CODIGO)
      references CARRERA (CARR_CODIGO)
      on delete restrict on update restrict;

alter table EVE_X_EST
   add constraint FK_EVE_X_ES_EVE_X_EST_EVENTO foreign key (EVE_CODIGO)
      references EVENTO (EVE_CODIGO)
      on delete restrict on update restrict;

alter table EVE_X_EST
   add constraint FK_EVE_X_ES_EVE_X_EST_ESTUDIAN foreign key (EST_CODIGO)
      references ESTUDIANTE (EST_CODIGO)
      on delete restrict on update restrict;

alter table EXAMEN_COMPLEXIVO
   add constraint FK_EXAMEN_C_EXA_OPC_OPCION_G foreign key (OPG_CODIGO)
      references OPCION_GRADO (OPG_CODIGO)
      on delete restrict on update restrict;

alter table MAT_AP_X_EST
   add constraint FK_MAT_AP_X_MAT_AP_X__MATERIA foreign key (MAT_CODIGO)
      references MATERIA (MAT_CODIGO)
      on delete restrict on update restrict;

alter table MAT_AP_X_EST
   add constraint FK_MAT_AP_X_MAT_AP_X__ESTUDIAN foreign key (EST_CODIGO)
      references ESTUDIANTE (EST_CODIGO)
      on delete restrict on update restrict;

alter table MAT_X_EXA
   add constraint FK_MAT_X_EX_MAT_X_EXA_EXAMEN_C foreign key (EXA_CODIGO)
      references EXAMEN_COMPLEXIVO (EXA_CODIGO)
      on delete restrict on update restrict;

alter table MAT_X_EXA
   add constraint FK_MAT_X_EX_MAT_X_EXA_MATERIA foreign key (MAT_CODIGO)
      references MATERIA (MAT_CODIGO)
      on delete restrict on update restrict;

alter table MAT_X_PLAN
   add constraint FK_MAT_X_PL_MAT_X_PLA_PERIODO_ foreign key (PAC_CODIGO)
      references PERIODO_ACADEMICO (PAC_CODIGO)
      on delete restrict on update restrict;

alter table MAT_X_PLAN
   add constraint FK_MAT_X_PL_MAT_X_PLA_PLAN_DE_ foreign key (PLAN_CODIGO)
      references PLAN_DE_ESTUDIO (PLAN_CODIGO)
      on delete restrict on update restrict;

alter table MAT_X_PLAN
   add constraint FK_MAT_X_PL_MAT_X_PLA_MATERIA foreign key (MAT_CODIGO)
      references MATERIA (MAT_CODIGO)
      on delete restrict on update restrict;

alter table MAT_X_PROF
   add constraint FK_MAT_X_PR_DICTA_PROFESOR foreign key (PROF_CODIGO)
      references PROFESOR (PROF_CODIGO)
      on delete restrict on update restrict;

alter table MAT_X_PROF
   add constraint FK_MAT_X_PR_DICTA2_MATERIA foreign key (MAT_CODIGO)
      references MATERIA (MAT_CODIGO)
      on delete restrict on update restrict;

alter table OPCION_GRADO
   add constraint FK_OPCION_G_OPC_EST_ESTUDIAN foreign key (EST_CODIGO)
      references ESTUDIANTE (EST_CODIGO)
      on delete restrict on update restrict;

alter table PLAN_DE_ESTUDIO
   add constraint FK_PLAN_DE__MALL_CARR_CARRERA foreign key (CARR_CODIGO)
      references CARRERA (CARR_CODIGO)
      on delete restrict on update restrict;

alter table PRORROGA
   add constraint FK_PRORROGA_PRO_DIS_TRABAJO_ foreign key (DIS_CODIGO)
      references TRABAJO_DISERTACION (DIS_CODIGO)
      on delete restrict on update restrict;

alter table RESPONSABLE_TITULACION
   add constraint FK_RESPONSA_RES_PROF_PROFESOR foreign key (PROF_CODIGO)
      references PROFESOR (PROF_CODIGO)
      on delete restrict on update restrict;

alter table RESPONSABLE_TITULACION
   add constraint FK_RESPONSA_RES_X_PER_PERIODO_ foreign key (PAC_CODIGO)
      references PERIODO_ACADEMICO (PAC_CODIGO)
      on delete restrict on update restrict;

alter table REVDIR_X_DIS
   add constraint FK_REVDIR_X_REVDIR_X__PROFESOR foreign key (PROF_CODIGO)
      references PROFESOR (PROF_CODIGO)
      on delete restrict on update restrict;

alter table REVDIR_X_DIS
   add constraint FK_REVDIR_X_REVDIR_X__TRABAJO_ foreign key (DIS_CODIGO)
      references TRABAJO_DISERTACION (DIS_CODIGO)
      on delete restrict on update restrict;

alter table TRAB_X_OPC
   add constraint FK_TRAB_X_O_TRAB_X_OP_TRABAJO_ foreign key (DIS_CODIGO)
      references TRABAJO_DISERTACION (DIS_CODIGO)
      on delete restrict on update restrict;

alter table TRAB_X_OPC
   add constraint FK_TRAB_X_O_TRAB_X_OP_OPCION_G foreign key (OPG_CODIGO)
      references OPCION_GRADO (OPG_CODIGO)
      on delete restrict on update restrict;


