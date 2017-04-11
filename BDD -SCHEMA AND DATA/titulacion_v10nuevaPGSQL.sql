/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     7/04/2017 9:51:38 p. m.                      */
/*==============================================================*/


drop index CARR_ESC_FK;

drop index CARRERAS_PK;

drop table CARRERAS;

drop index DICTA_FK;

drop index DICTA2_FK;

drop index DICTA_PK;

drop table DICTA;

drop index ELABORA_FK;

drop index ELABORA2_FK;

drop index ELABORA_PK;

drop table ELABORA;

drop index ESC_FACU_FK;

drop index ESCUELAS_PK;

drop table ESCUELAS;

drop index EST_CARR_FK;

drop index ESTUDIANTE_PK;

drop table ESTUDIANTE;

drop index EVENTOS_PK;

drop table EVENTOS;

drop index EVENTOS_X_ESTUDIANTE_FK;

drop index EVENTOS_X_ESTUDIANTE2_FK;

drop index EVENTOS_X_ESTUDIANTE_PK;

drop table EVENTOS_X_ESTUDIANTE;

drop index TOMA_FK;

drop index EXAMEN_COMPLEXIVO_PK;

drop table EXAMEN_COMPLEXIVO;

drop index FACULTADES_PK;

drop table FACULTADES;

drop index MATERIAS_PK;

drop table MATERIAS;

drop index MATERIA_X_PLAN_DE_ESTUDIO_FK;

drop index MATERIA_X_PLAN_DE_ESTUDIO3_FK;

drop index MATERIA_X_PLAN_DE_ESTUDIO2_FK;

drop index MATERIA_X_PLAN_DE_ESTUDIO_PK;

drop table MATERIA_X_PLAN_DE_ESTUDIO;

drop index MATSORTEADAS_X_EXAMEN_FK;

drop index MATSORTEADAS_X_EXAMEN2_FK;

drop index MATSORTEADAS_X_EXAMEN_PK;

drop table MATSORTEADAS_X_EXAMEN;

drop index MAT_AP_X_EST_FK;

drop index MAT_AP_X_EST2_FK;

drop index MAT_AP_X_EST_PK;

drop table MAT_AP_X_EST;

drop index OPTA_FK;

drop index OPCION_GRADO_PK;

drop table OPCION_GRADO;

drop index PERIODOS_ACADEMICOS_PK;

drop table PERIODOS_ACADEMICOS;

drop index MALL_CARR_FK;

drop index PLAN_DE_ESTUDIO_PK;

drop table PLAN_DE_ESTUDIO;

drop index PROFESOR_PK;

drop table PROFESOR;

drop index PRO_DISERTACION_FK;

drop index PRORROGA_PK;

drop table PRORROGA;

drop index RESPONSABLES_X_PERIODO_FK;

drop index ES_NOMBRADO_FK;

drop index RESPONSABLES_TITULACION_PK;

drop table RESPONSABLES_TITULACION;

drop index REVDIR_X_DISERTACION_FK;

drop index REVDIR_X_DISERTACION2_FK;

drop index REVDIR_X_DISERTACION_PK;

drop table REVDIR_X_DISERTACION;

drop index TRABAJO_DISERTACION_PK;

drop table TRABAJO_DISERTACION;

drop domain ZESTEXAM;

drop domain Z_INTENTO_EXAMEN;

drop domain Z_OPCION_GRADO;

drop domain Z_SEXO;

drop domain Z_TIPO_ID;

drop domain Z_TIPO_RESPONSABLE_T;

drop domain Z_TIPO_REVISOR;

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
/* Table: CARRERAS                                              */
/*==============================================================*/
create table CARRERAS (
   CARR_CODIGO          SERIAL               not null,
   ESC_CODIGO           INT4                 not null,
   CARR_DESCRIPCION     CHAR(50)             not null,
   constraint PK_CARRERAS primary key (CARR_CODIGO)
);

/*==============================================================*/
/* Index: CARRERAS_PK                                           */
/*==============================================================*/
create unique index CARRERAS_PK on CARRERAS (
CARR_CODIGO
);

/*==============================================================*/
/* Index: CARR_ESC_FK                                           */
/*==============================================================*/
create  index CARR_ESC_FK on CARRERAS (
ESC_CODIGO
);

/*==============================================================*/
/* Table: DICTA                                                 */
/*==============================================================*/
create table DICTA (
   PROF_CODIGO          INT4                 not null,
   MAT_CODIGO           INT4                 not null,
   constraint PK_DICTA primary key (PROF_CODIGO, MAT_CODIGO)
);

/*==============================================================*/
/* Index: DICTA_PK                                              */
/*==============================================================*/
create unique index DICTA_PK on DICTA (
PROF_CODIGO,
MAT_CODIGO
);

/*==============================================================*/
/* Index: DICTA2_FK                                             */
/*==============================================================*/
create  index DICTA2_FK on DICTA (
MAT_CODIGO
);

/*==============================================================*/
/* Index: DICTA_FK                                              */
/*==============================================================*/
create  index DICTA_FK on DICTA (
PROF_CODIGO
);

/*==============================================================*/
/* Table: ELABORA                                               */
/*==============================================================*/
create table ELABORA (
   OPG_CODIGO           INT4                 not null,
   DIS_CODIGO           INT4                 not null,
   ELB_NOTA_ORAL        FLOAT8               null,
   ELB_NOTA_ESCRITO     FLOAT8               null,
   constraint PK_ELABORA primary key (OPG_CODIGO, DIS_CODIGO)
);

/*==============================================================*/
/* Index: ELABORA_PK                                            */
/*==============================================================*/
create unique index ELABORA_PK on ELABORA (
OPG_CODIGO,
DIS_CODIGO
);

/*==============================================================*/
/* Index: ELABORA2_FK                                           */
/*==============================================================*/
create  index ELABORA2_FK on ELABORA (
OPG_CODIGO
);

/*==============================================================*/
/* Index: ELABORA_FK                                            */
/*==============================================================*/
create  index ELABORA_FK on ELABORA (
DIS_CODIGO
);

/*==============================================================*/
/* Table: ESCUELAS                                              */
/*==============================================================*/
create table ESCUELAS (
   ESC_CODIGO           SERIAL               not null,
   FACU_CODIGO          INT4                 not null,
   ESC_DESCRIPCION      CHAR(50)             not null,
   constraint PK_ESCUELAS primary key (ESC_CODIGO)
);

/*==============================================================*/
/* Index: ESCUELAS_PK                                           */
/*==============================================================*/
create unique index ESCUELAS_PK on ESCUELAS (
ESC_CODIGO
);

/*==============================================================*/
/* Index: ESC_FACU_FK                                           */
/*==============================================================*/
create  index ESC_FACU_FK on ESCUELAS (
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
/* Table: EVENTOS                                               */
/*==============================================================*/
create table EVENTOS (
   EVE_CODIGO           SERIAL               not null,
   EVE_FECHA            DATE                 null,
   EVE_TEMA             CHAR(256)            null,
   EVE_DESCRIPCION      VARCHAR(1024)        null,
   constraint PK_EVENTOS primary key (EVE_CODIGO)
);

/*==============================================================*/
/* Index: EVENTOS_PK                                            */
/*==============================================================*/
create unique index EVENTOS_PK on EVENTOS (
EVE_CODIGO
);

/*==============================================================*/
/* Table: EVENTOS_X_ESTUDIANTE                                  */
/*==============================================================*/
create table EVENTOS_X_ESTUDIANTE (
   EST_CODIGO           INT4                 not null,
   EVE_CODIGO           INT4                 not null,
   EXE_ASISTENCIA       BOOL                 null,
   constraint PK_EVENTOS_X_ESTUDIANTE primary key (EST_CODIGO, EVE_CODIGO)
);

/*==============================================================*/
/* Index: EVENTOS_X_ESTUDIANTE_PK                               */
/*==============================================================*/
create unique index EVENTOS_X_ESTUDIANTE_PK on EVENTOS_X_ESTUDIANTE (
EST_CODIGO,
EVE_CODIGO
);

/*==============================================================*/
/* Index: EVENTOS_X_ESTUDIANTE2_FK                              */
/*==============================================================*/
create  index EVENTOS_X_ESTUDIANTE2_FK on EVENTOS_X_ESTUDIANTE (
EST_CODIGO
);

/*==============================================================*/
/* Index: EVENTOS_X_ESTUDIANTE_FK                               */
/*==============================================================*/
create  index EVENTOS_X_ESTUDIANTE_FK on EVENTOS_X_ESTUDIANTE (
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
/* Index: TOMA_FK                                               */
/*==============================================================*/
create  index TOMA_FK on EXAMEN_COMPLEXIVO (
OPG_CODIGO
);

/*==============================================================*/
/* Table: FACULTADES                                            */
/*==============================================================*/
create table FACULTADES (
   FACU_CODIGO          SERIAL               not null,
   FACU_DESCRIPCION     CHAR(50)             not null,
   constraint PK_FACULTADES primary key (FACU_CODIGO)
);

/*==============================================================*/
/* Index: FACULTADES_PK                                         */
/*==============================================================*/
create unique index FACULTADES_PK on FACULTADES (
FACU_CODIGO
);

/*==============================================================*/
/* Table: MATERIAS                                              */
/*==============================================================*/
create table MATERIAS (
   MAT_CODIGO           SERIAL               not null,
   MAT_NOMBRE           CHAR(100)            not null,
   MAT_NIVEL            INT4                 not null,
   MAT_PROFESIONALIZANTE BOOL                 not null,
   constraint PK_MATERIAS primary key (MAT_CODIGO)
);

/*==============================================================*/
/* Index: MATERIAS_PK                                           */
/*==============================================================*/
create unique index MATERIAS_PK on MATERIAS (
MAT_CODIGO
);

/*==============================================================*/
/* Table: MATERIA_X_PLAN_DE_ESTUDIO                             */
/*==============================================================*/
create table MATERIA_X_PLAN_DE_ESTUDIO (
   PLAN_CODIGO          INT4                 not null,
   MAT_CODIGO           INT4                 not null,
   PAC_CODIGO           INT4                 not null,
   constraint PK_MATERIA_X_PLAN_DE_ESTUDIO primary key (PLAN_CODIGO, MAT_CODIGO, PAC_CODIGO)
);

/*==============================================================*/
/* Index: MATERIA_X_PLAN_DE_ESTUDIO_PK                          */
/*==============================================================*/
create unique index MATERIA_X_PLAN_DE_ESTUDIO_PK on MATERIA_X_PLAN_DE_ESTUDIO (
PLAN_CODIGO,
MAT_CODIGO,
PAC_CODIGO
);

/*==============================================================*/
/* Index: MATERIA_X_PLAN_DE_ESTUDIO2_FK                         */
/*==============================================================*/
create  index MATERIA_X_PLAN_DE_ESTUDIO2_FK on MATERIA_X_PLAN_DE_ESTUDIO (
PLAN_CODIGO
);

/*==============================================================*/
/* Index: MATERIA_X_PLAN_DE_ESTUDIO3_FK                         */
/*==============================================================*/
create  index MATERIA_X_PLAN_DE_ESTUDIO3_FK on MATERIA_X_PLAN_DE_ESTUDIO (
MAT_CODIGO
);

/*==============================================================*/
/* Index: MATERIA_X_PLAN_DE_ESTUDIO_FK                          */
/*==============================================================*/
create  index MATERIA_X_PLAN_DE_ESTUDIO_FK on MATERIA_X_PLAN_DE_ESTUDIO (
PAC_CODIGO
);

/*==============================================================*/
/* Table: MATSORTEADAS_X_EXAMEN                                 */
/*==============================================================*/
create table MATSORTEADAS_X_EXAMEN (
   MAT_CODIGO           INT4                 not null,
   EXA_CODIGO           INT4                 not null,
   MXE_FECHA_1          DATE                 null,
   MXE_FECHA_2          DATE                 null,
   MXE_NOTA_ORAL_1      FLOAT8               null,
   MXE_NOTA_ESCRITA_1   FLOAT8               null,
   MXE_NOTA_ORAL_2      FLOAT8               null,
   MXE_NOTA_ESCRITA_2   FLOAT8               null,
   MXE_INTENTO          Z_INTENTO_EXAMEN     null,
   constraint PK_MATSORTEADAS_X_EXAMEN primary key (MAT_CODIGO, EXA_CODIGO)
);

/*==============================================================*/
/* Index: MATSORTEADAS_X_EXAMEN_PK                              */
/*==============================================================*/
create unique index MATSORTEADAS_X_EXAMEN_PK on MATSORTEADAS_X_EXAMEN (
MAT_CODIGO,
EXA_CODIGO
);

/*==============================================================*/
/* Index: MATSORTEADAS_X_EXAMEN2_FK                             */
/*==============================================================*/
create  index MATSORTEADAS_X_EXAMEN2_FK on MATSORTEADAS_X_EXAMEN (
MAT_CODIGO
);

/*==============================================================*/
/* Index: MATSORTEADAS_X_EXAMEN_FK                              */
/*==============================================================*/
create  index MATSORTEADAS_X_EXAMEN_FK on MATSORTEADAS_X_EXAMEN (
EXA_CODIGO
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
/* Index: OPTA_FK                                               */
/*==============================================================*/
create  index OPTA_FK on OPCION_GRADO (
EST_CODIGO
);

/*==============================================================*/
/* Table: PERIODOS_ACADEMICOS                                   */
/*==============================================================*/
create table PERIODOS_ACADEMICOS (
   PAC_CODIGO           SERIAL               not null,
   PAC_DESCRIPCION      CHAR(30)             not null,
   PAC_FECHAINICIO      DATE                 not null,
   PAC_FECHAFINAL       DATE                 not null,
   PAC_PERIDO           INT4                 null,
   constraint PK_PERIODOS_ACADEMICOS primary key (PAC_CODIGO)
);

/*==============================================================*/
/* Index: PERIODOS_ACADEMICOS_PK                                */
/*==============================================================*/
create unique index PERIODOS_ACADEMICOS_PK on PERIODOS_ACADEMICOS (
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
/* Index: PRO_DISERTACION_FK                                    */
/*==============================================================*/
create  index PRO_DISERTACION_FK on PRORROGA (
DIS_CODIGO
);

/*==============================================================*/
/* Table: RESPONSABLES_TITULACION                               */
/*==============================================================*/
create table RESPONSABLES_TITULACION (
   RES_CODIGO           SERIAL               not null,
   PROF_CODIGO          INT4                 null,
   PAC_CODIGO           INT4                 not null,
   RES_TIPO             Z_TIPO_RESPONSABLE_T not null,
   RES_FECHANOMBRAMIENTO DATE                 not null,
   constraint PK_RESPONSABLES_TITULACION primary key (RES_CODIGO)
);

/*==============================================================*/
/* Index: RESPONSABLES_TITULACION_PK                            */
/*==============================================================*/
create unique index RESPONSABLES_TITULACION_PK on RESPONSABLES_TITULACION (
RES_CODIGO
);

/*==============================================================*/
/* Index: ES_NOMBRADO_FK                                        */
/*==============================================================*/
create  index ES_NOMBRADO_FK on RESPONSABLES_TITULACION (
PROF_CODIGO
);

/*==============================================================*/
/* Index: RESPONSABLES_X_PERIODO_FK                             */
/*==============================================================*/
create  index RESPONSABLES_X_PERIODO_FK on RESPONSABLES_TITULACION (
PAC_CODIGO
);

/*==============================================================*/
/* Table: REVDIR_X_DISERTACION                                  */
/*==============================================================*/
create table REVDIR_X_DISERTACION (
   DIS_CODIGO           INT4                 not null,
   PROF_CODIGO          INT4                 not null,
   RXD_TIPO             Z_TIPO_REVISOR       not null,
   RXD_FECHANOMBRAMIENTO DATE                 not null,
   constraint PK_REVDIR_X_DISERTACION primary key (DIS_CODIGO, PROF_CODIGO)
);

/*==============================================================*/
/* Index: REVDIR_X_DISERTACION_PK                               */
/*==============================================================*/
create unique index REVDIR_X_DISERTACION_PK on REVDIR_X_DISERTACION (
DIS_CODIGO,
PROF_CODIGO
);

/*==============================================================*/
/* Index: REVDIR_X_DISERTACION2_FK                              */
/*==============================================================*/
create  index REVDIR_X_DISERTACION2_FK on REVDIR_X_DISERTACION (
DIS_CODIGO
);

/*==============================================================*/
/* Index: REVDIR_X_DISERTACION_FK                               */
/*==============================================================*/
create  index REVDIR_X_DISERTACION_FK on REVDIR_X_DISERTACION (
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

alter table CARRERAS
   add constraint FK_CARRERAS_CARR_ESC_ESCUELAS foreign key (ESC_CODIGO)
      references ESCUELAS (ESC_CODIGO)
      on delete restrict on update restrict;

alter table DICTA
   add constraint FK_DICTA_DICTA_PROFESOR foreign key (PROF_CODIGO)
      references PROFESOR (PROF_CODIGO)
      on delete restrict on update restrict;

alter table DICTA
   add constraint FK_DICTA_DICTA2_MATERIAS foreign key (MAT_CODIGO)
      references MATERIAS (MAT_CODIGO)
      on delete restrict on update restrict;

alter table ELABORA
   add constraint FK_ELABORA_ELABORA_TRABAJO_ foreign key (DIS_CODIGO)
      references TRABAJO_DISERTACION (DIS_CODIGO)
      on delete restrict on update restrict;

alter table ELABORA
   add constraint FK_ELABORA_ELABORA2_OPCION_G foreign key (OPG_CODIGO)
      references OPCION_GRADO (OPG_CODIGO)
      on delete restrict on update restrict;

alter table ESCUELAS
   add constraint FK_ESCUELAS_ESC_FACU_FACULTAD foreign key (FACU_CODIGO)
      references FACULTADES (FACU_CODIGO)
      on delete restrict on update restrict;

alter table ESTUDIANTE
   add constraint FK_ESTUDIAN_EST_CARR_CARRERAS foreign key (CARR_CODIGO)
      references CARRERAS (CARR_CODIGO)
      on delete restrict on update restrict;

alter table EVENTOS_X_ESTUDIANTE
   add constraint FK_EVENTOS__EVENTOS_X_EVENTOS foreign key (EVE_CODIGO)
      references EVENTOS (EVE_CODIGO)
      on delete restrict on update restrict;

alter table EVENTOS_X_ESTUDIANTE
   add constraint FK_EVENTOS__EVENTOS_X_ESTUDIAN foreign key (EST_CODIGO)
      references ESTUDIANTE (EST_CODIGO)
      on delete restrict on update restrict;

alter table EXAMEN_COMPLEXIVO
   add constraint FK_EXAMEN_C_TOMA_OPCION_G foreign key (OPG_CODIGO)
      references OPCION_GRADO (OPG_CODIGO)
      on delete restrict on update restrict;

alter table MATERIA_X_PLAN_DE_ESTUDIO
   add constraint FK_MATERIA__MATERIA_X_PERIODOS foreign key (PAC_CODIGO)
      references PERIODOS_ACADEMICOS (PAC_CODIGO)
      on delete restrict on update restrict;

alter table MATERIA_X_PLAN_DE_ESTUDIO
   add constraint FK_MATERIA__MATERIA_X_PLAN_DE_ foreign key (PLAN_CODIGO)
      references PLAN_DE_ESTUDIO (PLAN_CODIGO)
      on delete restrict on update restrict;

alter table MATERIA_X_PLAN_DE_ESTUDIO
   add constraint FK_MATERIA__MATERIA_X_MATERIAS foreign key (MAT_CODIGO)
      references MATERIAS (MAT_CODIGO)
      on delete restrict on update restrict;

alter table MATSORTEADAS_X_EXAMEN
   add constraint FK_MATSORTE_MATSORTEA_EXAMEN_C foreign key (EXA_CODIGO)
      references EXAMEN_COMPLEXIVO (EXA_CODIGO)
      on delete restrict on update restrict;

alter table MATSORTEADAS_X_EXAMEN
   add constraint FK_MATSORTE_MATSORTEA_MATERIAS foreign key (MAT_CODIGO)
      references MATERIAS (MAT_CODIGO)
      on delete restrict on update restrict;

alter table MAT_AP_X_EST
   add constraint FK_MAT_AP_X_MAT_AP_X__MATERIAS foreign key (MAT_CODIGO)
      references MATERIAS (MAT_CODIGO)
      on delete restrict on update restrict;

alter table MAT_AP_X_EST
   add constraint FK_MAT_AP_X_MAT_AP_X__ESTUDIAN foreign key (EST_CODIGO)
      references ESTUDIANTE (EST_CODIGO)
      on delete restrict on update restrict;

alter table OPCION_GRADO
   add constraint FK_OPCION_G_OPTA_ESTUDIAN foreign key (EST_CODIGO)
      references ESTUDIANTE (EST_CODIGO)
      on delete restrict on update restrict;

alter table PLAN_DE_ESTUDIO
   add constraint FK_PLAN_DE__MALL_CARR_CARRERAS foreign key (CARR_CODIGO)
      references CARRERAS (CARR_CODIGO)
      on delete restrict on update restrict;

alter table PRORROGA
   add constraint FK_PRORROGA_PRO_DISER_TRABAJO_ foreign key (DIS_CODIGO)
      references TRABAJO_DISERTACION (DIS_CODIGO)
      on delete restrict on update restrict;

alter table RESPONSABLES_TITULACION
   add constraint FK_RESPONSA_ES_NOMBRA_PROFESOR foreign key (PROF_CODIGO)
      references PROFESOR (PROF_CODIGO)
      on delete restrict on update restrict;

alter table RESPONSABLES_TITULACION
   add constraint FK_RESPONSA_RESPONSAB_PERIODOS foreign key (PAC_CODIGO)
      references PERIODOS_ACADEMICOS (PAC_CODIGO)
      on delete restrict on update restrict;

alter table REVDIR_X_DISERTACION
   add constraint FK_REVDIR_X_REVDIR_X__PROFESOR foreign key (PROF_CODIGO)
      references PROFESOR (PROF_CODIGO)
      on delete restrict on update restrict;

alter table REVDIR_X_DISERTACION
   add constraint FK_REVDIR_X_REVDIR_X__TRABAJO_ foreign key (DIS_CODIGO)
      references TRABAJO_DISERTACION (DIS_CODIGO)
      on delete restrict on update restrict;

