/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     7/04/2017 9:52:51 p. m.                      */
/*==============================================================*/


drop table if exists CARRERAS;

drop table if exists DICTA;

drop table if exists ELABORA;

drop table if exists ESCUELAS;

drop table if exists ESTUDIANTE;

drop table if exists EVENTOS;

drop table if exists EVENTOS_X_ESTUDIANTE;

drop table if exists EXAMEN_COMPLEXIVO;

drop table if exists FACULTADES;

drop table if exists MATERIAS;

drop table if exists MATERIA_X_PLAN_DE_ESTUDIO;

drop table if exists MATSORTEADAS_X_EXAMEN;

drop table if exists MAT_AP_X_EST;

drop table if exists OPCION_GRADO;

drop table if exists PERIODOS_ACADEMICOS;

drop table if exists PLAN_DE_ESTUDIO;

drop table if exists PROFESOR;

drop table if exists PRORROGA;

drop table if exists RESPONSABLES_TITULACION;

drop table if exists REVDIR_X_DISERTACION;

drop table if exists TRABAJO_DISERTACION;

/*==============================================================*/
/* Table: CARRERAS                                              */
/*==============================================================*/
create table CARRERAS
(
   CARR_CODIGO          int not null auto_increment,
   ESC_CODIGO           int not null,
   CARR_DESCRIPCION     char(50) not null,
   primary key (CARR_CODIGO)
);

/*==============================================================*/
/* Table: DICTA                                                 */
/*==============================================================*/
create table DICTA
(
   PROF_CODIGO          int not null,
   MAT_CODIGO           int not null,
   primary key (PROF_CODIGO, MAT_CODIGO)
);

/*==============================================================*/
/* Table: ELABORA                                               */
/*==============================================================*/
create table ELABORA
(
   OPG_CODIGO           int not null,
   DIS_CODIGO           int not null,
   ELB_NOTA_ORAL        float,
   ELB_NOTA_ESCRITO     float,
   primary key (OPG_CODIGO, DIS_CODIGO)
);

/*==============================================================*/
/* Table: ESCUELAS                                              */
/*==============================================================*/
create table ESCUELAS
(
   ESC_CODIGO           int not null auto_increment,
   FACU_CODIGO          int not null,
   ESC_DESCRIPCION      char(50) not null,
   primary key (ESC_CODIGO)
);

/*==============================================================*/
/* Table: ESTUDIANTE                                            */
/*==============================================================*/
create table ESTUDIANTE
(
   EST_CODIGO           int not null auto_increment,
   CARR_CODIGO          int not null,
   EST_NOMBRE1          char(50) not null,
   EST_NOMBRE2          char(50),
   EST_APELLIDO1        char(50) not null,
   EST_APELLIDO2        char(50),
   EST_TIPOID           varchar(3) not null,
   EST_ID               char(15) not null,
   EST_DIRECCION        char(256) not null,
   EST_TELEFONO         char(10),
   EST_CELULAR          char(10) not null,
   EST_MAIL             char(256) not null,
   EST_MAILPUCE         char(256),
   EST_FECHANAC         date not null,
   EST_SEXO             varchar(1) not null,
   EST_FOTO             longblob,
   EST_FECHAINGRESO     date not null,
   EST_FECHAESTIMADAGRADUACION date,
   EST_FECHAGRADUACION  date,
   primary key (EST_CODIGO)
);

/*==============================================================*/
/* Table: EVENTOS                                               */
/*==============================================================*/
create table EVENTOS
(
   EVE_CODIGO           int not null auto_increment,
   EVE_FECHA            date,
   EVE_TEMA             char(256),
   EVE_DESCRIPCION      longtext,
   primary key (EVE_CODIGO)
);

/*==============================================================*/
/* Table: EVENTOS_X_ESTUDIANTE                                  */
/*==============================================================*/
create table EVENTOS_X_ESTUDIANTE
(
   EST_CODIGO           int not null,
   EVE_CODIGO           int not null,
   EXE_ASISTENCIA       bool,
   primary key (EST_CODIGO, EVE_CODIGO)
);

/*==============================================================*/
/* Table: EXAMEN_COMPLEXIVO                                     */
/*==============================================================*/
create table EXAMEN_COMPLEXIVO
(
   EXA_CODIGO           int not null auto_increment,
   OPG_CODIGO           int,
   EXA_FECHAINICIO      date not null,
   EXA_ESTADO           char(2) not null,
   EXA_HORAS_DOCENCIA   int,
   EXA_HORAS_AUTONOMAS  int,
   primary key (EXA_CODIGO)
);

/*==============================================================*/
/* Table: FACULTADES                                            */
/*==============================================================*/
create table FACULTADES
(
   FACU_CODIGO          int not null auto_increment,
   FACU_DESCRIPCION     char(50) not null,
   primary key (FACU_CODIGO)
);

/*==============================================================*/
/* Table: MATERIAS                                              */
/*==============================================================*/
create table MATERIAS
(
   MAT_CODIGO           int not null auto_increment,
   MAT_NOMBRE           char(100) not null,
   MAT_NIVEL            int not null,
   MAT_PROFESIONALIZANTE bool not null,
   primary key (MAT_CODIGO)
);

/*==============================================================*/
/* Table: MATERIA_X_PLAN_DE_ESTUDIO                             */
/*==============================================================*/
create table MATERIA_X_PLAN_DE_ESTUDIO
(
   PLAN_CODIGO          int not null,
   MAT_CODIGO           int not null,
   PAC_CODIGO           int not null,
   primary key (PLAN_CODIGO, MAT_CODIGO, PAC_CODIGO)
);

/*==============================================================*/
/* Table: MATSORTEADAS_X_EXAMEN                                 */
/*==============================================================*/
create table MATSORTEADAS_X_EXAMEN
(
   MAT_CODIGO           int not null,
   EXA_CODIGO           int not null,
   MXE_FECHA_1          date,
   MXE_FECHA_2          date,
   MXE_NOTA_ORAL_1      float,
   MXE_NOTA_ESCRITA_1   float,
   MXE_NOTA_ORAL_2      float,
   MXE_NOTA_ESCRITA_2   float,
   MXE_INTENTO          char(1),
   primary key (MAT_CODIGO, EXA_CODIGO)
);

/*==============================================================*/
/* Table: MAT_AP_X_EST                                          */
/*==============================================================*/
create table MAT_AP_X_EST
(
   MAT_CODIGO           int not null,
   EST_CODIGO           int not null,
   primary key (MAT_CODIGO, EST_CODIGO)
);

/*==============================================================*/
/* Table: OPCION_GRADO                                          */
/*==============================================================*/
create table OPCION_GRADO
(
   OPG_CODIGO           int not null auto_increment,
   EST_CODIGO           int not null,
   OPG_ELECCION         char(3),
   primary key (OPG_CODIGO)
);

/*==============================================================*/
/* Table: PERIODOS_ACADEMICOS                                   */
/*==============================================================*/
create table PERIODOS_ACADEMICOS
(
   PAC_CODIGO           int not null auto_increment,
   PAC_DESCRIPCION      char(30) not null,
   PAC_FECHAINICIO      date not null,
   PAC_FECHAFINAL       date not null,
   PAC_PERIDO           int,
   primary key (PAC_CODIGO)
);

/*==============================================================*/
/* Table: PLAN_DE_ESTUDIO                                       */
/*==============================================================*/
create table PLAN_DE_ESTUDIO
(
   PLAN_CODIGO          int not null auto_increment,
   CARR_CODIGO          int not null,
   PLAN_DESCRIPCION     char(50) not null,
   PLAN_FECHAINICIO     date,
   PLAN_VIGENCIA        bool,
   primary key (PLAN_CODIGO)
);

/*==============================================================*/
/* Table: PROFESOR                                              */
/*==============================================================*/
create table PROFESOR
(
   PROF_CODIGO          int not null auto_increment,
   PROF_NOMBRE1         char(50) not null,
   PROF_NOMBRE2         char(50),
   PROF_APELLIDO1       char(50) not null,
   PROF_APELLIDO2       char(50),
   PROF_TIPOID          varchar(3) not null,
   PROF_ID              char(15) not null,
   PROF_DIRECCION       char(256) not null,
   PROF_TELEFONO        char(10),
   PROF_CELULAR         char(10) not null,
   PROF_MAIL            char(256) not null,
   PROF_MAILPUCE        char(256),
   PROF_FECHANAC        date not null,
   PROF_SEXO            varchar(1) not null,
   PROF_FOTO            longblob,
   PROF_OFICINA         char(15),
   primary key (PROF_CODIGO)
);

/*==============================================================*/
/* Table: PRORROGA                                              */
/*==============================================================*/
create table PRORROGA
(
   PRO_CODIGO           int not null auto_increment,
   DIS_CODIGO           int not null,
   PRO_FECHAINT         date not null,
   PRO_FECHAINICIO      date not null,
   PRO_FECHAFIN         date not null,
   PRO_DESCRIPCION      char(30) not null,
   PRO_DETALLE          varchar(1024) not null,
   primary key (PRO_CODIGO)
);

/*==============================================================*/
/* Table: RESPONSABLES_TITULACION                               */
/*==============================================================*/
create table RESPONSABLES_TITULACION
(
   RES_CODIGO           int not null auto_increment,
   PROF_CODIGO          int,
   PAC_CODIGO           int not null,
   RES_TIPO             varchar(2) not null,
   RES_FECHANOMBRAMIENTO date not null,
   primary key (RES_CODIGO)
);

/*==============================================================*/
/* Table: REVDIR_X_DISERTACION                                  */
/*==============================================================*/
create table REVDIR_X_DISERTACION
(
   DIS_CODIGO           int not null,
   PROF_CODIGO          int not null,
   RXD_TIPO             varchar(3) not null,
   RXD_FECHANOMBRAMIENTO date not null,
   primary key (DIS_CODIGO, PROF_CODIGO)
);

/*==============================================================*/
/* Table: TRABAJO_DISERTACION                                   */
/*==============================================================*/
create table TRABAJO_DISERTACION
(
   DIS_CODIGO           int not null auto_increment,
   DIS_FECHAINICIO      date not null,
   DIS_FECHAPRESENTACIONPLAN date not null,
   DIS_FECHAAPROBACION  date not null,
   DIS_TITULO           varchar(1024) not null,
   DIS_ESTADO           bool not null,
   DIS_FECHAFIN         date,
   DIS_DEFENSA          date,
   DIS_APROBACIONREVISOR1 date,
   DIS_APROBACIONREVISOR2 date,
   primary key (DIS_CODIGO)
);

alter table CARRERAS add constraint FK_CARR_ESC foreign key (ESC_CODIGO)
      references ESCUELAS (ESC_CODIGO) on delete restrict on update restrict;

alter table DICTA add constraint FK_DICTA foreign key (PROF_CODIGO)
      references PROFESOR (PROF_CODIGO) on delete restrict on update restrict;

alter table DICTA add constraint FK_DICTA2 foreign key (MAT_CODIGO)
      references MATERIAS (MAT_CODIGO) on delete restrict on update restrict;

alter table ELABORA add constraint FK_ELABORA foreign key (DIS_CODIGO)
      references TRABAJO_DISERTACION (DIS_CODIGO) on delete restrict on update restrict;

alter table ELABORA add constraint FK_ELABORA2 foreign key (OPG_CODIGO)
      references OPCION_GRADO (OPG_CODIGO) on delete restrict on update restrict;

alter table ESCUELAS add constraint FK_ESC_FACU foreign key (FACU_CODIGO)
      references FACULTADES (FACU_CODIGO) on delete restrict on update restrict;

alter table ESTUDIANTE add constraint FK_EST_CARR foreign key (CARR_CODIGO)
      references CARRERAS (CARR_CODIGO) on delete restrict on update restrict;

alter table EVENTOS_X_ESTUDIANTE add constraint FK_EVENTOS_X_ESTUDIANTE foreign key (EVE_CODIGO)
      references EVENTOS (EVE_CODIGO) on delete restrict on update restrict;

alter table EVENTOS_X_ESTUDIANTE add constraint FK_EVENTOS_X_ESTUDIANTE2 foreign key (EST_CODIGO)
      references ESTUDIANTE (EST_CODIGO) on delete restrict on update restrict;

alter table EXAMEN_COMPLEXIVO add constraint FK_TOMA foreign key (OPG_CODIGO)
      references OPCION_GRADO (OPG_CODIGO) on delete restrict on update restrict;

alter table MATERIA_X_PLAN_DE_ESTUDIO add constraint FK_MATERIA_X_PLAN_DE_ESTUDIO foreign key (PAC_CODIGO)
      references PERIODOS_ACADEMICOS (PAC_CODIGO) on delete restrict on update restrict;

alter table MATERIA_X_PLAN_DE_ESTUDIO add constraint FK_MATERIA_X_PLAN_DE_ESTUDIO2 foreign key (PLAN_CODIGO)
      references PLAN_DE_ESTUDIO (PLAN_CODIGO) on delete restrict on update restrict;

alter table MATERIA_X_PLAN_DE_ESTUDIO add constraint FK_MATERIA_X_PLAN_DE_ESTUDIO3 foreign key (MAT_CODIGO)
      references MATERIAS (MAT_CODIGO) on delete restrict on update restrict;

alter table MATSORTEADAS_X_EXAMEN add constraint FK_MATSORTEADAS_X_EXAMEN foreign key (EXA_CODIGO)
      references EXAMEN_COMPLEXIVO (EXA_CODIGO) on delete restrict on update restrict;

alter table MATSORTEADAS_X_EXAMEN add constraint FK_MATSORTEADAS_X_EXAMEN2 foreign key (MAT_CODIGO)
      references MATERIAS (MAT_CODIGO) on delete restrict on update restrict;

alter table MAT_AP_X_EST add constraint FK_MAT_AP_X_EST foreign key (MAT_CODIGO)
      references MATERIAS (MAT_CODIGO) on delete restrict on update restrict;

alter table MAT_AP_X_EST add constraint FK_MAT_AP_X_EST2 foreign key (EST_CODIGO)
      references ESTUDIANTE (EST_CODIGO) on delete restrict on update restrict;

alter table OPCION_GRADO add constraint FK_OPTA foreign key (EST_CODIGO)
      references ESTUDIANTE (EST_CODIGO) on delete restrict on update restrict;

alter table PLAN_DE_ESTUDIO add constraint FK_MALL_CARR foreign key (CARR_CODIGO)
      references CARRERAS (CARR_CODIGO) on delete restrict on update restrict;

alter table PRORROGA add constraint FK_PRO_DISERTACION foreign key (DIS_CODIGO)
      references TRABAJO_DISERTACION (DIS_CODIGO) on delete restrict on update restrict;

alter table RESPONSABLES_TITULACION add constraint FK_ES_NOMBRADO foreign key (PROF_CODIGO)
      references PROFESOR (PROF_CODIGO) on delete restrict on update restrict;

alter table RESPONSABLES_TITULACION add constraint FK_RESPONSABLES_X_PERIODO foreign key (PAC_CODIGO)
      references PERIODOS_ACADEMICOS (PAC_CODIGO) on delete restrict on update restrict;

alter table REVDIR_X_DISERTACION add constraint FK_REVDIR_X_DISERTACION foreign key (PROF_CODIGO)
      references PROFESOR (PROF_CODIGO) on delete restrict on update restrict;

alter table REVDIR_X_DISERTACION add constraint FK_REVDIR_X_DISERTACION2 foreign key (DIS_CODIGO)
      references TRABAJO_DISERTACION (DIS_CODIGO) on delete restrict on update restrict;

