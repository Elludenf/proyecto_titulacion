/*==============================================================*/
/* dbms name:      mysql 5.0                                    */
/* created on:     26/01/2017 9:01:54 p. m.                     */
/*==============================================================*/


/*==============================================================*/
/* table: carreras                                              */
/*==============================================================*/
create table carreras
(
   carr_codigo          int not null auto_increment,
   esc_codigo           int not null,
   carr_descripcion     char(50) not null,
   primary key (carr_codigo)
);

/*==============================================================*/
/* table: dicta                                                 */
/*==============================================================*/
create table dicta
(
   prof_codigo          int not null,
   mat_codigo           int not null,
   primary key (prof_codigo, mat_codigo)
);

/*==============================================================*/
/* table: elabora                                               */
/*==============================================================*/
create table elabora
(
   est_codigo           int not null,
   dis_codigo           int not null,
   elb_nota_horal       float,
   elb_nota_escrito     float,
   primary key (est_codigo, dis_codigo)
);

/*==============================================================*/
/* table: escuelas                                              */
/*==============================================================*/
create table escuelas
(
   esc_codigo           int not null auto_increment,
   facu_codigo          int not null,
   esc_descripcion      char(50) not null,
   primary key (esc_codigo)
);

/*==============================================================*/
/* table: estudiante                                            */
/*==============================================================*/
create table estudiante
(
   est_codigo           int not null auto_increment,
   carr_codigo          int not null,
   est_nombre1          char(50) not null,
   est_nombre2          char(50),
   est_apellido1        char(50) not null,
   est_apellido2        char(50),
   est_tipoid           varchar(3) not null,
   est_id               char(15) not null,
   est_direccion        char(256) not null,
   est_telefono         char(10),
   est_celular          char(10) not null,
   est_mail             char(256) not null,
   est_mailpuce         char(256),
   est_fechanac         date not null,
   est_sexo             varchar(1) not null,
   est_foto             longblob,
   est_fechaingreso     date not null,
   est_fechaestimadagraduacion date,
   est_fechagraduacion  date,
   primary key (est_codigo)
);

/*==============================================================*/
/* table: examen_complexivo                                     */
/*==============================================================*/
create table examen_complexivo
(
   exa_codigo           int not null auto_increment,
   est_codigo           int,
   exa_fechainicio      date not null,
   exa_estado           char(2) not null,
   exa_horas_docencia   int,
   exa_horas_autonomas  int,
   primary key (exa_codigo)
);

/*==============================================================*/
/* table: facultades                                            */
/*==============================================================*/
create table facultades
(
   facu_codigo          int not null auto_increment,
   facu_descripcion     char(50) not null,
   primary key (facu_codigo)
);

/*==============================================================*/
/* table: materias                                              */
/*==============================================================*/
create table materias
(
   mat_codigo           int not null auto_increment,
   mat_nombre           char(100) not null,
   mat_nivel            int not null,
   primary key (mat_codigo)
);

/*==============================================================*/
/* table: materia_x_plan_de_estudio                             */
/*==============================================================*/
create table materia_x_plan_de_estudio
(
   plan_codigo          int not null,
   mat_codigo           int not null,
   pac_codigo           int not null,
   primary key (plan_codigo, mat_codigo, pac_codigo)
);

/*==============================================================*/
/* table: matsorteadas_x_examen                                 */
/*==============================================================*/
create table matsorteadas_x_examen
(
   mat_codigo           int not null,
   exa_codigo           int not null,
   mxe_fecha_1          date,
   mxe_fecha_2          date,
   mxe_nota_horal_1     float,
   mxe_nota_escrita_1   float,
   mxe_nota_horal_2     float,
   mxe_nota_escrita_2   float,
   primary key (mat_codigo, exa_codigo)
);

/*==============================================================*/
/* table: mat_ap_x_est                                          */
/*==============================================================*/
create table mat_ap_x_est
(
   mat_codigo           int not null,
   est_codigo           int not null,
   primary key (mat_codigo, est_codigo)
);

/*==============================================================*/
/* table: periodos_academicos                                   */
/*==============================================================*/
create table periodos_academicos
(
   pac_codigo           int not null auto_increment,
   pac_descripcion      char(30) not null,
   pac_fechainicio      date not null,
   pac_fechafinal       date not null,
   pac_perido           int,
   primary key (pac_codigo)
);

/*==============================================================*/
/* table: plan_de_estudio                                       */
/*==============================================================*/
create table plan_de_estudio
(
   plan_codigo          int not null auto_increment,
   carr_codigo          int not null,
   plan_descripcion     char(50) not null,
   plan_fechainicio     date,
   plan_vigencia        bool,
   primary key (plan_codigo)
);

/*==============================================================*/
/* table: profesor                                              */
/*==============================================================*/
create table profesor
(
   prof_codigo          int not null auto_increment,
   prof_nombre1         char(50) not null,
   prof_nombre2         char(50),
   prof_apellido1       char(50) not null,
   prof_apellido2       char(50),
   prof_tipoid          varchar(3) not null,
   prof_id              char(15) not null,
   prof_direccion       char(256) not null,
   prof_telefono        char(10),
   prof_celular         char(10) not null,
   prof_mail            char(256) not null,
   prof_mailpuce        char(256),
   prof_fechanac        date not null,
   prof_sexo            varchar(1) not null,
   prof_foto            longblob,
   prof_oficina         char(15),
   primary key (prof_codigo)
);

/*==============================================================*/
/* table: prorroga                                              */
/*==============================================================*/
create table prorroga
(
   pro_codigo           int not null auto_increment,
   dis_codigo           int not null,
   pro_fechaint         date not null,
   pro_fechainicio      date not null,
   pro_fechafin         date not null,
   pro_descripcion      char(30) not null,
   pro_detalle          varchar(1024) not null,
   primary key (pro_codigo)
);

/*==============================================================*/
/* table: responsables_titulacion                               */
/*==============================================================*/
create table responsables_titulacion
(
   res_codigo           int not null auto_increment,
   prof_codigo          int,
   res_tipo             varchar(2) not null,
   res_fechanombramiento date not null,
   primary key (res_codigo)
);

/*==============================================================*/
/* table: revdir_x_disertacion                                  */
/*==============================================================*/
create table revdir_x_disertacion
(
   dis_codigo           int not null,
   prof_codigo          int not null,
   rxd_tipo             varchar(3) not null,
   rxd_fechanombramiento date not null,
   primary key (dis_codigo, prof_codigo)
);

/*==============================================================*/
/* table: revisiones                                            */
/*==============================================================*/
create table revisiones
(
   dis_codigo           int not null,
   prof_codigo          int not null,
   obs_codigo           int not null auto_increment,
   obs_fecha            date not null,
   obs_descripcion      varchar(1024) not null,
   primary key (obs_codigo)
);

/*==============================================================*/
/* table: trabajo_disertacion                                   */
/*==============================================================*/
create table trabajo_disertacion
(
   dis_codigo           int not null auto_increment,
   dis_fechainicio      date not null,
   dis_fechapresentacionplan date not null,
   dis_fechaaprobacion  date not null,
   dis_titulo           varchar(1024) not null,
   dis_estado           bool not null,
   dis_fechafin         date,
   dis_defensa          date,
   primary key (dis_codigo)
);

alter table carreras add constraint fk_carr_esc foreign key (esc_codigo)
      references escuelas (esc_codigo) on delete restrict on update restrict;

alter table dicta add constraint fk_dicta foreign key (prof_codigo)
      references profesor (prof_codigo) on delete restrict on update restrict;

alter table dicta add constraint fk_dicta2 foreign key (mat_codigo)
      references materias (mat_codigo) on delete restrict on update restrict;

alter table elabora add constraint fk_elabora foreign key (dis_codigo)
      references trabajo_disertacion (dis_codigo) on delete restrict on update restrict;

alter table elabora add constraint fk_elabora2 foreign key (est_codigo)
      references estudiante (est_codigo) on delete restrict on update restrict;

alter table escuelas add constraint fk_esc_facu foreign key (facu_codigo)
      references facultades (facu_codigo) on delete restrict on update restrict;

alter table estudiante add constraint fk_est_carr foreign key (carr_codigo)
      references carreras (carr_codigo) on delete restrict on update restrict;

alter table examen_complexivo add constraint fk_toma foreign key (est_codigo)
      references estudiante (est_codigo) on delete restrict on update restrict;

alter table materia_x_plan_de_estudio add constraint fk_materia_x_plan_de_estudio foreign key (pac_codigo)
      references periodos_academicos (pac_codigo) on delete restrict on update restrict;

alter table materia_x_plan_de_estudio add constraint fk_materia_x_plan_de_estudio2 foreign key (plan_codigo)
      references plan_de_estudio (plan_codigo) on delete restrict on update restrict;

alter table materia_x_plan_de_estudio add constraint fk_materia_x_plan_de_estudio3 foreign key (mat_codigo)
      references materias (mat_codigo) on delete restrict on update restrict;

alter table matsorteadas_x_examen add constraint fk_matsorteadas_x_examen foreign key (exa_codigo)
      references examen_complexivo (exa_codigo) on delete restrict on update restrict;

alter table matsorteadas_x_examen add constraint fk_matsorteadas_x_examen2 foreign key (mat_codigo)
      references materias (mat_codigo) on delete restrict on update restrict;

alter table mat_ap_x_est add constraint fk_mat_ap_x_est foreign key (mat_codigo)
      references materias (mat_codigo) on delete restrict on update restrict;

alter table mat_ap_x_est add constraint fk_mat_ap_x_est2 foreign key (est_codigo)
      references estudiante (est_codigo) on delete restrict on update restrict;

alter table plan_de_estudio add constraint fk_mall_carr foreign key (carr_codigo)
      references carreras (carr_codigo) on delete restrict on update restrict;

alter table prorroga add constraint fk_pro_disertacion foreign key (dis_codigo)
      references trabajo_disertacion (dis_codigo) on delete restrict on update restrict;

alter table responsables_titulacion add constraint fk_es_nombrado foreign key (prof_codigo)
      references profesor (prof_codigo) on delete restrict on update restrict;

alter table revdir_x_disertacion add constraint fk_revdir_x_disertacion2 foreign key (dis_codigo)
      references trabajo_disertacion (dis_codigo) on delete restrict on update restrict;

alter table revdir_x_disertacion add constraint fk_revdir_x_disertacion3 foreign key (prof_codigo)
      references profesor (prof_codigo) on delete restrict on update restrict;

alter table revisiones add constraint fk_revdir_x_disertacion foreign key (dis_codigo, prof_codigo)
      references revdir_x_disertacion (dis_codigo, prof_codigo) on delete restrict on update restrict;

