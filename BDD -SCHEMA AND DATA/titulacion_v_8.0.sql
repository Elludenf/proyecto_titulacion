/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     24/01/2017 10:36:04 a. m.                    */
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
'CED = C�dula
PAS = Pasaporte
OTR = Otro';

/*==============================================================*/
/* Domain: Z_TIPO_RESPONSABLE_T                                 */
/*==============================================================*/
create domain Z_TIPO_RESPONSABLE_T as VARCHAR(2);

comment on domain Z_TIPO_RESPONSABLE_T is
'R1 = Responsable Titulaci�n I
R2 = Responsable Titulaci�n II';

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
   CARR_CODIGO          INT4                 not null,
   ESC_CODIGO           INT4                 not null,
   CARR_DESCRIPCION     VARCHAR(50)          not null,
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
/* Table: ELABORA                                               */
/*==============================================================*/
create table ELABORA (
   DIS_CODIGO           INT4                 not null,
   EST_CODIGO           INT4                 not null,
   constraint PK_ELABORA primary key (DIS_CODIGO, EST_CODIGO)
);

/*==============================================================*/
/* Index: ELABORA_PK                                            */
/*==============================================================*/
create unique index ELABORA_PK on ELABORA (
DIS_CODIGO,
EST_CODIGO
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
   ESC_CODIGO           INT4                 not null,
   FACU_CODIGO          INT4                 not null,
   ESC_DESCRIPCION      VARCHAR(50)          not null,
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
/* Table: EXAMEN_COMPLEXIVO                                     */
/*==============================================================*/
create table EXAMEN_COMPLEXIVO (
   EXA_CODIGO           INT4                 not null,
   EST_CODIGO           INT4                 null,
   EXA_FECHAINICIO      DATE                 not null,
   EXA_ESTADO           ZESTEXAM             not null,
   constraint PK_EXAMEN_COMPLEXIVO primary key (EXA_CODIGO)
);

/*==============================================================*/
/* Index: EXAMEN_COMPLEXIVO_PK                                  */
/*==============================================================*/
create unique index EXAMEN_COMPLEXIVO_PK on EXAMEN_COMPLEXIVO (
EXA_CODIGO
);

/*==============================================================*/
/* Table: FACULTADES                                            */
/*==============================================================*/
create table FACULTADES (
   FACU_CODIGO          INT4                 not null,
   FACU_DESCRIPCION     VARCHAR(50)          not null,
   constraint PK_FACULTADES primary key (FACU_CODIGO)
);

/*==============================================================*/
/* Index: FACULTADES_PK                                         */
/*==============================================================*/
create unique index FACULTADES_PK on FACULTADES (
FACU_CODIGO
);

/*==============================================================*/
/* Table: INTENTOS                                              */
/*==============================================================*/
create table INTENTOS (
   INT_CODIGO           INT4                 not null,
   EXA_CODIGO           INT4                 null,
   INT_FECHAINT         DATE                 not null,
   constraint PK_INTENTOS primary key (INT_CODIGO)
);

/*==============================================================*/
/* Index: INTENTOS_PK                                           */
/*==============================================================*/
create unique index INTENTOS_PK on INTENTOS (
INT_CODIGO
);

/*==============================================================*/
/* Index: EXA_INT_FK                                            */
/*==============================================================*/
create  index EXA_INT_FK on INTENTOS (
EXA_CODIGO
);

/*==============================================================*/
/* Table: MATERIAS                                              */
/*==============================================================*/
create table MATERIAS (
   MAT_CODIGO           INT4                 not null,
   MAT_NOMBRE           VARCHAR(100)         not null,
   MAT_NIVEL            INT4                 not null,
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
/* Index: MAT_AP_X_EST_FK                                       */
/*==============================================================*/
create  index MAT_AP_X_EST_FK on MAT_AP_X_EST (
MAT_CODIGO
);

/*==============================================================*/
/* Table: PERIODOS_ACADEMICOS                                   */
/*==============================================================*/
create table PERIODOS_ACADEMICOS (
   PAC_CODIGO           INT4                 not null,
   PAC_DESCRIPCION      VARCHAR(30)          not null,
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
   PLAN_CODIGO          INT4                 not null,
   CARR_CODIGO          INT4                 not null,
   PLAN_DESCRIPCION     VARCHAR(50)          not null,
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
/* Table: PRORROGA                                              */
/*==============================================================*/
create table PRORROGA (
   PRO_CODIGO           INT4                 not null,
   DIS_CODIGO           INT4                 not null,
   PRO_FECHAINT         DATE                 not null,
   PRO_FECHAINICIO      DATE                 not null,
   PRO_FECHAFIN         DATE                 not null,
   PRO_DESCRIPCION      VARCHAR(30)          not null,
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
   RES_CODIGO           INT4                 not null,
   PROF_CODIGO          INT4                 null,
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
/* Table: REVDIR_X_DISERTACION                                  */
/*==============================================================*/
create table REVDIR_X_DISERTACION (
   RED_CODIGO           INT4                 not null,
   DIS_CODIGO           INT4                 not null,
   constraint PK_REVDIR_X_DISERTACION primary key (RED_CODIGO, DIS_CODIGO)
);

/*==============================================================*/
/* Index: REVDIR_X_DISERTACION_PK                               */
/*==============================================================*/
create unique index REVDIR_X_DISERTACION_PK on REVDIR_X_DISERTACION (
RED_CODIGO,
DIS_CODIGO
);

/*==============================================================*/
/* Index: REVDIR_X_DISERTACION2_FK                              */
/*==============================================================*/
create  index REVDIR_X_DISERTACION2_FK on REVDIR_X_DISERTACION (
RED_CODIGO
);

/*==============================================================*/
/* Index: REVDIR_X_DISERTACION_FK                               */
/*==============================================================*/
create  index REVDIR_X_DISERTACION_FK on REVDIR_X_DISERTACION (
DIS_CODIGO
);

/*==============================================================*/
/* Table: REVISIONES                                            */
/*==============================================================*/
create table REVISIONES (
   OBS_CODIGO           INT4                 not null,
   DIS_CODIGO           INT4                 not null,
   RED_CODIGO           INT4                 null,
   OBS_FECHA            DATE                 not null,
   OBS_DESCRIPCION      VARCHAR(1024)        not null,
   constraint PK_REVISIONES primary key (OBS_CODIGO)
);

/*==============================================================*/
/* Index: REVISIONES_PK                                         */
/*==============================================================*/
create unique index REVISIONES_PK on REVISIONES (
OBS_CODIGO
);

/*==============================================================*/
/* Index: RELATIONSHIP_3_FK                                     */
/*==============================================================*/
create  index RELATIONSHIP_3_FK on REVISIONES (
DIS_CODIGO
);

/*==============================================================*/
/* Index: REALIZA_FK                                            */
/*==============================================================*/
create  index REALIZA_FK on REVISIONES (
RED_CODIGO
);

/*==============================================================*/
/* Table: REV_DIR_TRAB_TITULACION                               */
/*==============================================================*/
create table REV_DIR_TRAB_TITULACION (
   RED_CODIGO           INT4                 not null,
   PROF_CODIGO          INT4                 null,
   RED_TIPO             Z_TIPO_REVISOR       not null,
   RED_FECHANOMBRAMIENTO DATE                 not null,
   constraint PK_REV_DIR_TRAB_TITULACION primary key (RED_CODIGO)
);

/*==============================================================*/
/* Index: REV_DIR_TRAB_TITULACION_PK                            */
/*==============================================================*/
create unique index REV_DIR_TRAB_TITULACION_PK on REV_DIR_TRAB_TITULACION (
RED_CODIGO
);

/*==============================================================*/
/* Table: TRABAJO_DISERTACION                                   */
/*==============================================================*/
create table TRABAJO_DISERTACION (
   DIS_CODIGO           INT4                 not null,
   DIS_FECHAINICIO      DATE                 not null,
   DIS_FECHAPRESENTACIONPLAN DATE                 not null,
   DIS_FECHAAPROBACION  DATE                 not null,
   DIS_TITULO           VARCHAR(1024)        not null,
   DIS_ESTADO           BOOL                 not null,
   DIS_FECHAFIN         DATE                 null,
   DIS_DEFENSA          DATE                 null,
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
   add constraint FK_DICTA_DICTA2_MATERIAS foreign key (MAT_CODIGO)
      references MATERIAS (MAT_CODIGO)
      on delete restrict on update restrict;

alter table ELABORA
   add constraint FK_ELABORA_ELABORA_TRABAJO_ foreign key (DIS_CODIGO)
      references TRABAJO_DISERTACION (DIS_CODIGO)
      on delete restrict on update restrict;

alter table ESCUELAS
   add constraint FK_ESCUELAS_ESC_FACU_FACULTAD foreign key (FACU_CODIGO)
      references FACULTADES (FACU_CODIGO)
      on delete restrict on update restrict;

alter table INTENTOS
   add constraint FK_INTENTOS_EXA_INT_EXAMEN_C foreign key (EXA_CODIGO)
      references EXAMEN_COMPLEXIVO (EXA_CODIGO)
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

alter table PLAN_DE_ESTUDIO
   add constraint FK_PLAN_DE__MALL_CARR_CARRERAS foreign key (CARR_CODIGO)
      references CARRERAS (CARR_CODIGO)
      on delete restrict on update restrict;

alter table PRORROGA
   add constraint FK_PRORROGA_PRO_DISER_TRABAJO_ foreign key (DIS_CODIGO)
      references TRABAJO_DISERTACION (DIS_CODIGO)
      on delete restrict on update restrict;

alter table REVDIR_X_DISERTACION
   add constraint FK_REVDIR_X_REVDIR_X__TRABAJO_ foreign key (DIS_CODIGO)
      references TRABAJO_DISERTACION (DIS_CODIGO)
      on delete restrict on update restrict;

alter table REVDIR_X_DISERTACION
   add constraint FK_REVDIR_X_REVDIR_X__REV_DIR_ foreign key (RED_CODIGO)
      references REV_DIR_TRAB_TITULACION (RED_CODIGO)
      on delete restrict on update restrict;

alter table REVISIONES
   add constraint FK_REVISION_REALIZA_REV_DIR_ foreign key (RED_CODIGO)
      references REV_DIR_TRAB_TITULACION (RED_CODIGO)
      on delete restrict on update restrict;

alter table REVISIONES
   add constraint FK_REVISION_RELATIONS_TRABAJO_ foreign key (DIS_CODIGO)
      references TRABAJO_DISERTACION (DIS_CODIGO)
      on delete restrict on update restrict;
