/*==============================================================*/
/* dbms name:      mysql 5.0                                    */
/* created on:     10/1/2017 10:09:28                           */
/*==============================================================*/

/*==============================================================*/
/* table: carreras                                              */
/*==============================================================*/
create table carreras
(
   carr_codigo          int not null,
   esc_codigo           int not null,
   carr_descripcion     varchar(50) not null,
   primary key (carr_codigo)
);

/*==============================================================*/
/* table: escuelas                                              */
/*==============================================================*/
create table escuelas
(
   esc_codigo           int not null,
   facu_codigo          int not null,
   esc_descripcion      varchar(50) not null,
   primary key (esc_codigo)
);

/*==============================================================*/
/* table: estudiante                                            */
/*==============================================================*/
create table estudiante
(
   per_codigo           int not null,
   rol_codigo           int not null,
   per_nombre1          varchar(50) not null,
   per_nombre2          varchar(50),
   per_apellido1        varchar(50) not null,
   per_apellido2        varchar(50),
   per_tipoid           varchar(3) not null,
   per_id               varchar(15) not null,
   per_direccion        varchar(1024) not null,
   per_telefono         varchar(10),
   per_celular          varchar(10) not null,
   per_mail             varchar(254) not null,
   per_mailpuce         varchar(254),
   per_fechanac         date not null,
   per_sexo             varchar(1) not null,
   per_foto             longblob,
   per_clave            varchar(15),
   carr_codigo          int not null,
   est_fechaingreso     date not null,
   est_fechaestimadagraduacion date,
   est_fechagraduacion  date,
   primary key (per_codigo)
);

/*==============================================================*/
/* table: examen_complexivo                                     */
/*==============================================================*/
create table examen_complexivo
(
   exa_codigo           int not null,
   per_codigo           int,
   exa_fechainicio      date not null,
   exa_estado           char(2) not null,
   primary key (exa_codigo)
);

/*==============================================================*/
/* table: facultades                                            */
/*==============================================================*/
create table facultades
(
   facu_codigo          int not null,
   facu_descripcion     varchar(50) not null,
   primary key (facu_codigo)
);

/*==============================================================*/
/* table: intentos                                              */
/*==============================================================*/
create table intentos
(
   int_codigo           int not null,
   exa_codigo           int,
   int_fechaint         date not null,
   primary key (int_codigo)
);

/*==============================================================*/
/* table: materias                                              */
/*==============================================================*/
create table materias
(
   mat_codigo           int not null,
   mat_nombre           varchar(100) not null,
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
   primary key (mat_codigo, exa_codigo)
);

/*==============================================================*/
/* table: mat_ap_x_est                                          */
/*==============================================================*/
create table mat_ap_x_est
(
   per_codigo           int not null,
   mat_codigo           int not null,
   primary key (per_codigo, mat_codigo)
);

/*==============================================================*/
/* table: modulo                                                */
/*==============================================================*/
create table modulo
(
   mod_codigo           int not null,
   mod_descripcion      varchar(100) not null,
   primary key (mod_codigo)
);

/*==============================================================*/
/* table: modxrol                                               */
/*==============================================================*/
create table modxrol
(
   mod_codigo           int not null,
   rol_codigo           int not null,
   primary key (mod_codigo, rol_codigo)
);

/*==============================================================*/
/* table: periodos_academicos                                   */
/*==============================================================*/
create table periodos_academicos
(
   pac_codigo           int not null,
   pac_descripcion      varchar(30) not null,
   pac_fechainicio      date not null,
   pac_fechafinal       date not null,
   pac_perido           int,
   primary key (pac_codigo)
);

/*==============================================================*/
/* table: permisos                                              */
/*==============================================================*/
create table permisos
(
   perm_codigo          int not null,
   perm_estado          bool not null,
   perm_creat           bool not null,
   perm_read            bool not null,
   perm_update          bool not null,
   perm_delete          bool not null,
   primary key (perm_codigo)
);

/*==============================================================*/
/* table: permxrol                                              */
/*==============================================================*/
create table permxrol
(
   perm_codigo          int not null,
   rol_codigo           int not null,
   primary key (perm_codigo, rol_codigo)
);

/*==============================================================*/
/* table: plan_de_estudio                                       */
/*==============================================================*/
create table plan_de_estudio
(
   plan_codigo          int not null,
   carr_codigo          int not null,
   plan_descripcion     varchar(50) not null,
   plan_fechainicio     date,
   plan_vigencia        bool,
   primary key (plan_codigo)
);

/*==============================================================*/
/* table: profesor                                              */
/*==============================================================*/
create table profesor
(
   per_codigo           int not null,
   rol_codigo           int not null,
   per_nombre1          varchar(50) not null,
   per_nombre2          varchar(50),
   per_apellido1        varchar(50) not null,
   per_apellido2        varchar(50),
   per_tipoid           varchar(3) not null,
   per_id               varchar(15) not null,
   per_direccion        varchar(1024) not null,
   per_telefono         varchar(10),
   per_celular          varchar(10) not null,
   per_mail             varchar(254) not null,
   per_mailpuce         varchar(254),
   per_fechanac         date not null,
   per_sexo             varchar(1) not null,
   per_foto             longblob,
   per_clave            varchar(15),
   pro_oficina          varchar(15),
   primary key (per_codigo)
);

/*==============================================================*/
/* table: prorroga                                              */
/*==============================================================*/
create table prorroga
(
   pro_codigo           int not null,
   dis_codigo           int not null,
   pro_fechaint         date not null,
   pro_fechainicio      date not null,
   pro_fechafin         date not null,
   pro_descripcion      varchar(30) not null,
   pro_detalle          varchar(1024) not null,
   primary key (pro_codigo)
);

/*==============================================================*/
/* table: responsables_titulacion                               */
/*==============================================================*/
create table responsables_titulacion
(
   res_codigo           int not null,
   per_codigo           int,
   res_tipo             varchar(2) not null,
   res_fechanombramiento date not null,
   primary key (res_codigo)
);

/*==============================================================*/
/* table: revdir_x_disertacion                                  */
/*==============================================================*/
create table revdir_x_disertacion
(
   red_codigo           int not null,
   dis_codigo           int not null,
   primary key (red_codigo, dis_codigo)
);

/*==============================================================*/
/* table: revision                                            */
/*==============================================================*/
create table revisiones
(
   obs_codigo           int not null,
   dis_codigo           int not null,
   red_codigo           int,
   obs_fecha            date not null,
   obs_descripcion      varchar(1024) not null,
   primary key (obs_codigo)
);

/*==============================================================*/
/* table: rev_dir_trab_titulacion                               */
/*==============================================================*/
create table rev_dir_trab_titulacion
(
   red_codigo           int not null,
   per_codigo           int,
   red_tipo             varchar(3) not null,
   red_fechanombramiento date not null,
   primary key (red_codigo)
);

/*==============================================================*/
/* table: roles                                                 */
/*==============================================================*/
create table roles
(
   rol_codigo           int not null,
   rol_descripcion      varchar(50) not null,
   primary key (rol_codigo)
);

alter table roles comment 'rol::
es la funcion generica otorgada a un empleado
                          -';

/*==============================================================*/
/* table: trabajo_disertacion                                   */
/*==============================================================*/
create table trabajo_disertacion
(
   dis_codigo           int not null,
   per_codigo           int,
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

alter table escuelas add constraint fk_esc_facu foreign key (facu_codigo)
      references facultades (facu_codigo) on delete restrict on update restrict;

alter table estudiante add constraint fk_est_carr foreign key (carr_codigo)
      references carreras (carr_codigo) on delete restrict on update restrict;

alter table estudiante add constraint fk_rolxpersona foreign key (rol_codigo)
      references roles (rol_codigo) on delete restrict on update restrict;

alter table examen_complexivo add constraint fk_toma foreign key (per_codigo)
      references estudiante (per_codigo) on delete restrict on update restrict;

alter table intentos add constraint fk_exa_int foreign key (exa_codigo)
      references examen_complexivo (exa_codigo) on delete restrict on update restrict;

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

alter table mat_ap_x_est add constraint fk_mat_ap_x_est2 foreign key (per_codigo)
      references estudiante (per_codigo) on delete restrict on update restrict;

alter table modxrol add constraint fk_modxrol foreign key (mod_codigo)
      references modulo (mod_codigo) on delete restrict on update restrict;

alter table modxrol add constraint fk_modxrol2 foreign key (rol_codigo)
      references roles (rol_codigo) on delete restrict on update restrict;

alter table permxrol add constraint fk_permxrol foreign key (perm_codigo)
      references permisos (perm_codigo) on delete restrict on update restrict;

alter table permxrol add constraint fk_permxrol2 foreign key (rol_codigo)
      references roles (rol_codigo) on delete restrict on update restrict;

alter table plan_de_estudio add constraint fk_mall_carr foreign key (carr_codigo)
      references carreras (carr_codigo) on delete restrict on update restrict;

alter table profesor add constraint fk_rolxpersona2 foreign key (rol_codigo)
      references roles (rol_codigo) on delete restrict on update restrict;

alter table prorroga add constraint fk_pro_disertacion foreign key (dis_codigo)
      references trabajo_disertacion (dis_codigo) on delete restrict on update restrict;

alter table responsables_titulacion add constraint fk_es_nombrado foreign key (per_codigo)
      references profesor (per_codigo) on delete restrict on update restrict;

alter table revdir_x_disertacion add constraint fk_revdir_x_disertacion foreign key (dis_codigo)
      references trabajo_disertacion (dis_codigo) on delete restrict on update restrict;

alter table revdir_x_disertacion add constraint fk_revdir_x_disertacion2 foreign key (red_codigo)
      references rev_dir_trab_titulacion (red_codigo) on delete restrict on update restrict;

alter table revisiones add constraint fk_realiza foreign key (red_codigo)
      references rev_dir_trab_titulacion (red_codigo) on delete restrict on update restrict;

alter table revisiones add constraint fk_relationship_3 foreign key (dis_codigo)
      references trabajo_disertacion (dis_codigo) on delete restrict on update restrict;

alter table rev_dir_trab_titulacion add constraint fk_es_designado foreign key (per_codigo)
      references profesor (per_codigo) on delete restrict on update restrict;

alter table trabajo_disertacion add constraint fk_elabora foreign key (per_codigo)
      references estudiante (per_codigo) on delete restrict on update restrict;

