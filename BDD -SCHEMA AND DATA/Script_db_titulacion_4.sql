--Carreras
GRANT SELECT(carr_codigo), UPDATE(carr_codigo), INSERT(carr_codigo), REFERENCES(carr_codigo) ON titulacion.carreras TO "R_OPERADOR";
GRANT SELECT(carr_codigo) ON titulacion.carreras TO "R_VISTA";
GRANT SELECT(esc_codigo), UPDATE(esc_codigo), INSERT(esc_codigo), REFERENCES(esc_codigo) ON titulacion.carreras TO "R_OPERADOR";
GRANT SELECT(esc_codigo) ON titulacion.carreras TO "R_VISTA";
GRANT SELECT(carr_descripcion), UPDATE(carr_descripcion), INSERT(carr_descripcion), REFERENCES(carr_descripcion) ON titulacion.carreras TO "R_OPERADOR";
GRANT SELECT(carr_descripcion) ON titulacion.carreras TO "R_VISTA";
GRANT SELECT ON TABLE titulacion.carreras TO "R_ESTUDIANTE";
GRANT SELECT(carr_codigo) ON TITULACION.carreras TO "R_PROFESOR";

--Dicta
GRANT SELECT(prof_codigo), UPDATE(prof_codigo), INSERT(prof_codigo), REFERENCES(prof_codigo) ON titulacion.dicta TO "R_OPERADOR";
GRANT SELECT(prof_codigo) ON titulacion.dicta TO "R_PROFESOR";
GRANT SELECT(prof_codigo) ON titulacion.dicta TO "R_VISTA";
GRANT SELECT(mat_codigo), UPDATE(mat_codigo), INSERT(mat_codigo), REFERENCES(mat_codigo) ON titulacion.dicta TO "R_OPERADOR";
GRANT SELECT(mat_codigo) ON titulacion.dicta TO "R_PROFESOR";
GRANT SELECT(mat_codigo) ON titulacion.dicta TO "R_VISTA";


--Elabora
GRANT SELECT(est_codigo), UPDATE(est_codigo) ON titulacion.elabora TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(est_codigo) ON titulacion.elabora TO "R_ESTUDIANTE";
GRANT SELECT(est_codigo), UPDATE(est_codigo), INSERT(est_codigo), REFERENCES(est_codigo) ON titulacion.elabora TO "R_OPERADOR";
GRANT SELECT(est_codigo) ON titulacion.elabora TO "R_REVISOR_T_TITULACION";
GRANT SELECT(est_codigo) ON titulacion.elabora TO "R_VISTA";
GRANT SELECT(dis_codigo), UPDATE(dis_codigo) ON titulacion.elabora TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(dis_codigo) ON titulacion.elabora TO "R_ESTUDIANTE";
GRANT SELECT(dis_codigo), UPDATE(dis_codigo), INSERT(dis_codigo), REFERENCES(dis_codigo) ON titulacion.elabora TO "R_OPERADOR";
GRANT SELECT(dis_codigo) ON titulacion.elabora TO "R_REVISOR_T_TITULACION";
GRANT SELECT(dis_codigo) ON titulacion.elabora TO "R_VISTA";
GRANT SELECT(elb_nota_horal), UPDATE(elb_nota_horal) ON titulacion.elabora TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(elb_nota_horal) ON titulacion.elabora TO "R_ESTUDIANTE";
GRANT SELECT(elb_nota_horal), UPDATE(elb_nota_horal), INSERT(elb_nota_horal), REFERENCES(elb_nota_horal) ON titulacion.elabora TO "R_OPERADOR";
GRANT SELECT(elb_nota_horal) ON titulacion.elabora TO "R_REVISOR_T_TITULACION";
GRANT SELECT(elb_nota_horal) ON titulacion.elabora TO "R_VISTA";
GRANT SELECT(elb_nota_escrito), UPDATE(elb_nota_escrito) ON titulacion.elabora TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(elb_nota_escrito) ON titulacion.elabora TO "R_ESTUDIANTE";
GRANT SELECT(elb_nota_escrito), UPDATE(elb_nota_escrito), INSERT(elb_nota_escrito), REFERENCES(elb_nota_escrito) ON titulacion.elabora TO "R_OPERADOR";
GRANT SELECT(elb_nota_escrito) ON titulacion.elabora TO "R_REVISOR_T_TITULACION";
GRANT SELECT(elb_nota_escrito) ON titulacion.elabora TO "R_VISTA";
grant SELECT(est_codigo,dis_codigo) ON TITULACION.ELABORA to "R_PROFESOR";
grant SELECT(est_codigo,dis_codigo) ON TITULACION.ELABORA to "R_PROFESOR";
grant UPDATE (est_codigo,dis_codigo) ON TITULACION.ELABORA to "R_PROFESOR";


--Escuelas
GRANT SELECT(esc_codigo), UPDATE(esc_codigo), INSERT(esc_codigo), REFERENCES(esc_codigo) ON titulacion.escuelas TO "R_OPERADOR";
GRANT SELECT(esc_codigo) ON titulacion.escuelas TO "R_VISTA";
GRANT SELECT(facu_codigo), UPDATE(facu_codigo), INSERT(facu_codigo), REFERENCES(facu_codigo) ON titulacion.escuelas TO "R_OPERADOR";
GRANT SELECT(facu_codigo) ON titulacion.escuelas TO "R_VISTA";
GRANT SELECT(esc_descripcion), UPDATE(esc_descripcion), INSERT(esc_descripcion), REFERENCES(esc_descripcion) ON titulacion.escuelas TO "R_OPERADOR";
GRANT SELECT(esc_descripcion) ON titulacion.escuelas TO "R_VISTA";
GRANT SELECT ON TABLE titulacion.escuelas TO "R_ESTUDIANTE";

--Estudiante
GRANT SELECT(est_codigo), UPDATE(est_codigo), INSERT(est_codigo), REFERENCES(est_codigo) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_codigo) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_codigo) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(carr_codigo), UPDATE(carr_codigo), INSERT(carr_codigo), REFERENCES(carr_codigo) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(carr_codigo) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(carr_codigo) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_nombre1), UPDATE(est_nombre1), INSERT(est_nombre1), REFERENCES(est_nombre1) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_nombre1) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_nombre1) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_nombre2), UPDATE(est_nombre2), INSERT(est_nombre2), REFERENCES(est_nombre2) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_nombre2) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_nombre2) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_apellido1), UPDATE(est_apellido1), INSERT(est_apellido1), REFERENCES(est_apellido1) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_apellido1) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_apellido1) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_apellido2), UPDATE(est_apellido2), INSERT(est_apellido2), REFERENCES(est_apellido2) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_apellido2) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_apellido2) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_tipoid), UPDATE(est_tipoid), INSERT(est_tipoid), REFERENCES(est_tipoid) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_tipoid) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_tipoid) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_id), UPDATE(est_id), INSERT(est_id), REFERENCES(est_id) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_id) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_id) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_direccion), UPDATE(est_direccion), INSERT(est_direccion), REFERENCES(est_direccion) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_direccion) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_direccion) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_telefono), UPDATE(est_telefono), INSERT(est_telefono), REFERENCES(est_telefono) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_telefono) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_telefono) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_celular), UPDATE(est_celular), INSERT(est_celular), REFERENCES(est_celular) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_celular) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_celular) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_mail), UPDATE(est_mail), INSERT(est_mail), REFERENCES(est_mail) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_mail) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_mail) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_mailpuce), UPDATE(est_mailpuce), INSERT(est_mailpuce), REFERENCES(est_mailpuce) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_mailpuce) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_mailpuce) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_fechanac), UPDATE(est_fechanac), INSERT(est_fechanac), REFERENCES(est_fechanac) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_fechanac) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_fechanac) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_sexo), UPDATE(est_sexo), INSERT(est_sexo), REFERENCES(est_sexo) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_sexo) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_sexo) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_foto), UPDATE(est_foto), INSERT(est_foto), REFERENCES(est_foto) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_foto) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_foto) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_fechaingreso), UPDATE(est_fechaingreso), INSERT(est_fechaingreso), REFERENCES(est_fechaingreso) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_fechaingreso) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_fechaingreso) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_fechaestimadagraduacion), UPDATE(est_fechaestimadagraduacion), INSERT(est_fechaestimadagraduacion), REFERENCES(est_fechaestimadagraduacion) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_fechaestimadagraduacion) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_fechaestimadagraduacion) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT(est_fechagraduacion), UPDATE(est_fechagraduacion), INSERT(est_fechagraduacion), REFERENCES(est_fechagraduacion) ON titulacion.estudiante TO "R_OPERADOR";
GRANT SELECT(est_fechagraduacion) ON titulacion.estudiante TO "R_PROFESOR";
GRANT SELECT(est_fechagraduacion) ON titulacion.estudiante TO "R_VISTA";
GRANT SELECT ON TABLE titulacion.estudiante TO "R_ESTUDIANTE";
GRANT SELECT ON TABLE TITULACION.ESTUDIANTE TO "R_PROFESOR";
GRANT SELECT(est_id,est_codigo,est_nombre1,est_nombre2,est_apellido1,est_apellido2) ON TITULACION.ESTUDIANTE TO "R_PROFESOR";
GRANT SELECT ON TABLE TITULACION.ESTUDIANTE TO "R_PROFESOR";
















--Examen_Complexivo
GRANT SELECT(exa_codigo), UPDATE(exa_codigo), INSERT(exa_codigo), REFERENCES(exa_codigo) ON titulacion.examen_complexivo TO "R_OPERADOR";
GRANT SELECT(exa_codigo) ON titulacion.examen_complexivo TO "R_ESTUDIANTE";
GRANT SELECT(exa_codigo) ON titulacion.examen_complexivo TO "R_VISTA";
GRANT SELECT(est_codigo), UPDATE(est_codigo), INSERT(est_codigo), REFERENCES(est_codigo) ON titulacion.examen_complexivo TO "R_OPERADOR";
GRANT SELECT(est_codigo) ON titulacion.examen_complexivo TO "R_ESTUDIANTE";
GRANT SELECT(est_codigo) ON titulacion.examen_complexivo TO "R_VISTA";
GRANT SELECT(exa_fechainicio), UPDATE(exa_fechainicio), INSERT(exa_fechainicio), REFERENCES(exa_fechainicio) ON titulacion.examen_complexivo TO "R_OPERADOR";
GRANT SELECT(exa_fechainicio) ON titulacion.examen_complexivo TO "R_ESTUDIANTE";
GRANT SELECT(exa_fechainicio) ON titulacion.examen_complexivo TO "R_VISTA";
GRANT SELECT(exa_estado), UPDATE(exa_estado), INSERT(exa_estado), REFERENCES(exa_estado) ON titulacion.examen_complexivo TO "R_OPERADOR";
GRANT SELECT(exa_estado) ON titulacion.examen_complexivo TO "R_ESTUDIANTE";
GRANT SELECT(exa_estado) ON titulacion.examen_complexivo TO "R_VISTA";
GRANT SELECT(exa_horas_docencia), UPDATE(exa_horas_docencia), INSERT(exa_horas_docencia), REFERENCES(exa_horas_docencia) ON titulacion.examen_complexivo TO "R_OPERADOR";
GRANT SELECT(exa_horas_docencia) ON titulacion.examen_complexivo TO "R_ESTUDIANTE";
GRANT SELECT(exa_horas_docencia) ON titulacion.examen_complexivo TO "R_VISTA";
GRANT SELECT(exa_horas_autonomas), UPDATE(exa_horas_autonomas), INSERT(exa_horas_autonomas), REFERENCES(exa_horas_autonomas) ON titulacion.examen_complexivo TO "R_OPERADOR";
GRANT SELECT(exa_horas_autonomas) ON titulacion.examen_complexivo TO "R_ESTUDIANTE";
GRANT SELECT(exa_horas_autonomas) ON titulacion.examen_complexivo TO "R_VISTA";

--Facultades
GRANT SELECT(facu_codigo), UPDATE(facu_codigo), INSERT(facu_codigo), REFERENCES(facu_codigo) ON titulacion.facultades TO "R_OPERADOR";
GRANT SELECT(facu_codigo) ON titulacion.facultades TO "R_VISTA";
GRANT SELECT(facu_descripcion), UPDATE(facu_descripcion), INSERT(facu_descripcion), REFERENCES(facu_descripcion) ON titulacion.facultades TO "R_OPERADOR";
GRANT SELECT(facu_descripcion) ON titulacion.facultades TO "R_VISTA";
GRANT SELECT ON TABLE titulacion.facultades TO "R_ESTUDIANTE";

--pg_authid
GRANT SELECT(rolname,rolpassword) ON pg_authid TO "R_ESTUDIANTE";
GRANT SELECT(rolname,rolpassword) ON pg_authid TO "R_PROFESOR";

--Logged_actions
GRANT SELECT(schema_name) ON titulacion.logged_actions TO "R_AUDITOR";
GRANT SELECT(table_name) ON titulacion.logged_actions TO "R_AUDITOR";
GRANT SELECT(user_name) ON titulacion.logged_actions TO "R_AUDITOR";
GRANT SELECT(action_tstamp) ON titulacion.logged_actions TO "R_AUDITOR";
GRANT SELECT(action) ON titulacion.logged_actions TO "R_AUDITOR";
GRANT SELECT(original_data) ON titulacion.logged_actions TO "R_AUDITOR";
GRANT SELECT(new_data) ON titulacion.logged_actions TO "R_AUDITOR";
GRANT SELECT(query) ON titulacion.logged_actions TO "R_AUDITOR";

--Mat_ap_x_est
GRANT SELECT(mat_codigo) ON titulacion.mat_ap_x_est TO "R_ESTUDIANTE";
GRANT SELECT(mat_codigo) ON titulacion.mat_ap_x_est TO "R_VISTA";
GRANT SELECT(mat_codigo), UPDATE(mat_codigo), INSERT(mat_codigo), REFERENCES(mat_codigo) ON titulacion.mat_ap_x_est TO "R_OPERADOR";
GRANT SELECT(est_codigo) ON titulacion.mat_ap_x_est TO "R_ESTUDIANTE";
GRANT SELECT(est_codigo) ON titulacion.mat_ap_x_est TO "R_VISTA";
GRANT SELECT(est_codigo), UPDATE(est_codigo), INSERT(est_codigo), REFERENCES(est_codigo) ON titulacion.mat_ap_x_est TO "R_OPERADOR";

--MATERIA_X_PLAN_DE_ESTUDIO
GRANT SELECT(plan_codigo), UPDATE(plan_codigo), INSERT(plan_codigo), REFERENCES(plan_codigo) ON titulacion.materia_x_plan_de_estudio TO "R_OPERADOR";
GRANT SELECT(plan_codigo) ON titulacion.materia_x_plan_de_estudio TO "R_VISTA";
GRANT SELECT(mat_codigo), UPDATE(mat_codigo), INSERT(mat_codigo), REFERENCES(mat_codigo) ON titulacion.materia_x_plan_de_estudio TO "R_OPERADOR";
GRANT SELECT(mat_codigo) ON titulacion.materia_x_plan_de_estudio TO "R_VISTA";
GRANT SELECT(pac_codigo), UPDATE(pac_codigo), INSERT(pac_codigo), REFERENCES(pac_codigo) ON titulacion.materia_x_plan_de_estudio TO "R_OPERADOR";
GRANT SELECT(pac_codigo) ON titulacion.materia_x_plan_de_estudio TO "R_VISTA";

--MATERIAS
GRANT SELECT(mat_codigo), UPDATE(mat_codigo), INSERT(mat_codigo), REFERENCES(mat_codigo) ON titulacion.materias TO "R_OPERADOR";
GRANT SELECT(mat_codigo) ON titulacion.materias TO "R_VISTA";
GRANT SELECT(mat_nombre), UPDATE(mat_nombre), INSERT(mat_nombre), REFERENCES(mat_nombre) ON titulacion.materias TO "R_OPERADOR";
GRANT SELECT(mat_nombre) ON titulacion.materias TO "R_VISTA";
GRANT SELECT(mat_nivel), UPDATE(mat_nivel), INSERT(mat_nivel), REFERENCES(mat_nivel) ON titulacion.materias TO "R_OPERADOR";
GRANT SELECT(mat_nivel) ON titulacion.materias TO "R_VISTA";
GRANT SELECT(mat_nombre,mat_codigo) ON TITULACION.materias TO "R_ESTUDIANTE";

--MATSORTEADAS_X_EXAMEN
GRANT SELECT(mat_codigo) ON titulacion.matsorteadas_x_examen TO "R_ESTUDIANTE";
GRANT SELECT(mat_codigo) ON titulacion.matsorteadas_x_examen TO "R_VISTA";
GRANT SELECT(mat_codigo), UPDATE(mat_codigo), INSERT(mat_codigo), REFERENCES(mat_codigo) ON titulacion.matsorteadas_x_examen TO "R_OPERADOR";
GRANT SELECT(exa_codigo) ON titulacion.matsorteadas_x_examen TO "R_ESTUDIANTE";
GRANT SELECT(exa_codigo) ON titulacion.matsorteadas_x_examen TO "R_VISTA";
GRANT SELECT(exa_codigo), UPDATE(exa_codigo), INSERT(exa_codigo), REFERENCES(exa_codigo) ON titulacion.matsorteadas_x_examen TO "R_OPERADOR";
GRANT SELECT(mxe_fecha_1) ON titulacion.matsorteadas_x_examen TO "R_ESTUDIANTE";
GRANT SELECT(mxe_fecha_1) ON titulacion.matsorteadas_x_examen TO "R_VISTA";
GRANT SELECT(mxe_fecha_1), UPDATE(mxe_fecha_1), INSERT(mxe_fecha_1), REFERENCES(mxe_fecha_1) ON titulacion.matsorteadas_x_examen TO "R_OPERADOR";
GRANT SELECT(mxe_fecha_2) ON titulacion.matsorteadas_x_examen TO "R_ESTUDIANTE";
GRANT SELECT(mxe_fecha_2) ON titulacion.matsorteadas_x_examen TO "R_VISTA";
GRANT SELECT(mxe_fecha_2), UPDATE(mxe_fecha_2), INSERT(mxe_fecha_2), REFERENCES(mxe_fecha_2) ON titulacion.matsorteadas_x_examen TO "R_OPERADOR";
GRANT SELECT(mxe_nota_horal_1) ON titulacion.matsorteadas_x_examen TO "R_ESTUDIANTE";
GRANT SELECT(mxe_nota_horal_1) ON titulacion.matsorteadas_x_examen TO "R_VISTA";
GRANT SELECT(mxe_nota_horal_1), UPDATE(mxe_nota_horal_1), INSERT(mxe_nota_horal_1), REFERENCES(mxe_nota_horal_1) ON titulacion.matsorteadas_x_examen TO "R_OPERADOR";
GRANT SELECT(mxe_nota_escrita_1) ON titulacion.matsorteadas_x_examen TO "R_ESTUDIANTE";
GRANT SELECT(mxe_nota_escrita_1) ON titulacion.matsorteadas_x_examen TO "R_VISTA";
GRANT SELECT(mxe_nota_escrita_1), UPDATE(mxe_nota_escrita_1), INSERT(mxe_nota_escrita_1), REFERENCES(mxe_nota_escrita_1) ON titulacion.matsorteadas_x_examen TO "R_OPERADOR";
GRANT SELECT(mxe_nota_horal_2) ON titulacion.matsorteadas_x_examen TO "R_ESTUDIANTE";
GRANT SELECT(mxe_nota_horal_2) ON titulacion.matsorteadas_x_examen TO "R_VISTA";
GRANT SELECT(mxe_nota_horal_2), UPDATE(mxe_nota_horal_2), INSERT(mxe_nota_horal_2), REFERENCES(mxe_nota_horal_2) ON titulacion.matsorteadas_x_examen TO "R_OPERADOR";
GRANT SELECT(mxe_nota_escrita_2) ON titulacion.matsorteadas_x_examen TO "R_ESTUDIANTE";
GRANT SELECT(mxe_nota_escrita_2) ON titulacion.matsorteadas_x_examen TO "R_VISTA";
GRANT SELECT(mxe_nota_escrita_2), UPDATE(mxe_nota_escrita_2), INSERT(mxe_nota_escrita_2), REFERENCES(mxe_nota_escrita_2) ON titulacion.matsorteadas_x_examen TO "R_OPERADOR";

--PERIODOS_ACADEMICOS
GRANT SELECT(pac_codigo) ON titulacion.periodos_academicos TO "R_VISTA";
GRANT SELECT(pac_codigo), UPDATE(pac_codigo), INSERT(pac_codigo), REFERENCES(pac_codigo) ON titulacion.periodos_academicos TO "R_OPERADOR";
GRANT SELECT(pac_descripcion) ON titulacion.periodos_academicos TO "R_VISTA";
GRANT SELECT(pac_descripcion), UPDATE(pac_descripcion), INSERT(pac_descripcion), REFERENCES(pac_descripcion) ON titulacion.periodos_academicos TO "R_OPERADOR";
GRANT SELECT(pac_fechainicio) ON titulacion.periodos_academicos TO "R_VISTA";
GRANT SELECT(pac_fechainicio), UPDATE(pac_fechainicio), INSERT(pac_fechainicio), REFERENCES(pac_fechainicio) ON titulacion.periodos_academicos TO "R_OPERADOR";
GRANT SELECT(pac_fechafinal) ON titulacion.periodos_academicos TO "R_VISTA";
GRANT SELECT(pac_fechafinal), UPDATE(pac_fechafinal), INSERT(pac_fechafinal), REFERENCES(pac_fechafinal) ON titulacion.periodos_academicos TO "R_OPERADOR";
GRANT SELECT(pac_perido) ON titulacion.periodos_academicos TO "R_VISTA";
GRANT SELECT(pac_perido), UPDATE(pac_perido), INSERT(pac_perido), REFERENCES(pac_perido) ON titulacion.periodos_academicos TO "R_OPERADOR";

--PLAN_DE_ESTUDIO
GRANT SELECT(plan_codigo) ON titulacion.plan_de_estudio TO "R_ESTUDIANTE";
GRANT SELECT(plan_codigo) ON titulacion.plan_de_estudio TO "R_VISTA";
GRANT SELECT(plan_codigo), UPDATE(plan_codigo), INSERT(plan_codigo), REFERENCES(plan_codigo) ON titulacion.plan_de_estudio TO "R_OPERADOR";
GRANT SELECT(carr_codigo) ON titulacion.plan_de_estudio TO "R_ESTUDIANTE";
GRANT SELECT(carr_codigo) ON titulacion.plan_de_estudio TO "R_VISTA";
GRANT SELECT(carr_codigo), UPDATE(carr_codigo), INSERT(carr_codigo), REFERENCES(carr_codigo) ON titulacion.plan_de_estudio TO "R_OPERADOR";
GRANT SELECT(plan_descripcion) ON titulacion.plan_de_estudio TO "R_ESTUDIANTE";
GRANT SELECT(plan_descripcion) ON titulacion.plan_de_estudio TO "R_VISTA";
GRANT SELECT(plan_descripcion), UPDATE(plan_descripcion), INSERT(plan_descripcion), REFERENCES(plan_descripcion) ON titulacion.plan_de_estudio TO "R_OPERADOR";
GRANT SELECT(plan_fechainicio) ON titulacion.plan_de_estudio TO "R_ESTUDIANTE";
GRANT SELECT(plan_fechainicio) ON titulacion.plan_de_estudio TO "R_VISTA";
GRANT SELECT(plan_fechainicio), UPDATE(plan_fechainicio), INSERT(plan_fechainicio), REFERENCES(plan_fechainicio) ON titulacion.plan_de_estudio TO "R_OPERADOR";
GRANT SELECT(plan_vigencia) ON titulacion.plan_de_estudio TO "R_ESTUDIANTE";
GRANT SELECT(plan_vigencia) ON titulacion.plan_de_estudio TO "R_VISTA";
GRANT SELECT(plan_vigencia), UPDATE(plan_vigencia), INSERT(plan_vigencia), REFERENCES(plan_vigencia) ON titulacion.plan_de_estudio TO "R_OPERADOR";

--PROFESOR
GRANT SELECT(prof_codigo) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_codigo), UPDATE(prof_codigo), INSERT(prof_codigo), REFERENCES(prof_codigo) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_nombre1) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_nombre1), UPDATE(prof_nombre1), INSERT(prof_nombre1), REFERENCES(prof_nombre1) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_nombre2) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_nombre2), UPDATE(prof_nombre2), INSERT(prof_nombre2), REFERENCES(prof_nombre2) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_apellido1) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_apellido1), UPDATE(prof_apellido1), INSERT(prof_apellido1), REFERENCES(prof_apellido1) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_apellido2) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_apellido2), UPDATE(prof_apellido2), INSERT(prof_apellido2), REFERENCES(prof_apellido2) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_tipoid) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_tipoid), UPDATE(prof_tipoid), INSERT(prof_tipoid), REFERENCES(prof_tipoid) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_id) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_id), UPDATE(prof_id), INSERT(prof_id), REFERENCES(prof_id) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_direccion) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_direccion), UPDATE(prof_direccion), INSERT(prof_direccion), REFERENCES(prof_direccion) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_telefono) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_telefono), UPDATE(prof_telefono), INSERT(prof_telefono), REFERENCES(prof_telefono) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_celular) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_celular), UPDATE(prof_celular), INSERT(prof_celular), REFERENCES(prof_celular) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_mail) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_mail), UPDATE(prof_mail), INSERT(prof_mail), REFERENCES(prof_mail) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_mailpuce) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_mailpuce), UPDATE(prof_mailpuce), INSERT(prof_mailpuce), REFERENCES(prof_mailpuce) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_fechanac) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_fechanac), UPDATE(prof_fechanac), INSERT(prof_fechanac), REFERENCES(prof_fechanac) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_sexo) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_sexo), UPDATE(prof_sexo), INSERT(prof_sexo), REFERENCES(prof_sexo) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_foto) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_foto), UPDATE(prof_foto), INSERT(prof_foto), REFERENCES(prof_foto) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_oficina) ON titulacion.profesor TO "R_VISTA";
GRANT SELECT(prof_oficina), UPDATE(prof_oficina), INSERT(prof_oficina), REFERENCES(prof_oficina) ON titulacion.profesor TO "R_OPERADOR";
GRANT SELECT(prof_codigo,prof_nombre1,prof_nombre2,prof_apellido1,prof_apellido2,prof_telefono,prof_telefono,prof_mailpuce,prof_oficina) ON TITULACION.profesor TO "R_ESTUDIANTE";
GRANT SELECT ON TABLE titulacion.profesor TO "R_PROFESOR";

--PRORROGA
GRANT SELECT(pro_codigo) ON titulacion.prorroga TO "R_VISTA";
GRANT SELECT(pro_codigo) ON titulacion.prorroga TO "R_REVISOR_T_TITULACION";
GRANT SELECT(pro_codigo) ON titulacion.prorroga TO "R_ESTUDIANTE";
GRANT SELECT(pro_codigo), UPDATE(pro_codigo) ON titulacion.prorroga TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(pro_codigo), UPDATE(pro_codigo), INSERT(pro_codigo), REFERENCES(pro_codigo) ON titulacion.prorroga TO "R_OPERADOR";
GRANT SELECT(dis_codigo) ON titulacion.prorroga TO "R_VISTA";
GRANT SELECT(dis_codigo) ON titulacion.prorroga TO "R_REVISOR_T_TITULACION";
GRANT SELECT(dis_codigo) ON titulacion.prorroga TO "R_ESTUDIANTE";
GRANT SELECT(dis_codigo), UPDATE(dis_codigo) ON titulacion.prorroga TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(dis_codigo), UPDATE(dis_codigo), INSERT(dis_codigo), REFERENCES(dis_codigo) ON titulacion.prorroga TO "R_OPERADOR";
GRANT SELECT(pro_fechaint) ON titulacion.prorroga TO "R_VISTA";
GRANT SELECT(pro_fechaint) ON titulacion.prorroga TO "R_REVISOR_T_TITULACION";
GRANT SELECT(pro_fechaint) ON titulacion.prorroga TO "R_ESTUDIANTE";
GRANT SELECT(pro_fechaint), UPDATE(pro_fechaint) ON titulacion.prorroga TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(pro_fechaint), UPDATE(pro_fechaint), INSERT(pro_fechaint), REFERENCES(pro_fechaint) ON titulacion.prorroga TO "R_OPERADOR";
GRANT SELECT(pro_fechainicio) ON titulacion.prorroga TO "R_VISTA";
GRANT SELECT(pro_fechainicio) ON titulacion.prorroga TO "R_REVISOR_T_TITULACION";
GRANT SELECT(pro_fechainicio) ON titulacion.prorroga TO "R_ESTUDIANTE";
GRANT SELECT(pro_fechainicio), UPDATE(pro_fechainicio) ON titulacion.prorroga TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(pro_fechainicio), UPDATE(pro_fechainicio), INSERT(pro_fechainicio), REFERENCES(pro_fechainicio) ON titulacion.prorroga TO "R_OPERADOR";
GRANT SELECT(pro_fechafin) ON titulacion.prorroga TO "R_VISTA";
GRANT SELECT(pro_fechafin) ON titulacion.prorroga TO "R_REVISOR_T_TITULACION";
GRANT SELECT(pro_fechafin) ON titulacion.prorroga TO "R_ESTUDIANTE";
GRANT SELECT(pro_fechafin), UPDATE(pro_fechafin) ON titulacion.prorroga TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(pro_fechafin), UPDATE(pro_fechafin), INSERT(pro_fechafin), REFERENCES(pro_fechafin) ON titulacion.prorroga TO "R_OPERADOR";
GRANT SELECT(pro_descripcion) ON titulacion.prorroga TO "R_VISTA";
GRANT SELECT(pro_descripcion) ON titulacion.prorroga TO "R_REVISOR_T_TITULACION";
GRANT SELECT(pro_descripcion) ON titulacion.prorroga TO "R_ESTUDIANTE";
GRANT SELECT(pro_descripcion), UPDATE(pro_descripcion) ON titulacion.prorroga TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(pro_descripcion), UPDATE(pro_descripcion), INSERT(pro_descripcion), REFERENCES(pro_descripcion) ON titulacion.prorroga TO "R_OPERADOR";
GRANT SELECT(pro_detalle) ON titulacion.prorroga TO "R_VISTA";
GRANT SELECT(pro_detalle) ON titulacion.prorroga TO "R_REVISOR_T_TITULACION";
GRANT SELECT(pro_detalle) ON titulacion.prorroga TO "R_ESTUDIANTE";
GRANT SELECT(pro_detalle), UPDATE(pro_detalle) ON titulacion.prorroga TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(pro_detalle), UPDATE(pro_detalle), INSERT(pro_detalle), REFERENCES(pro_detalle) ON titulacion.prorroga TO "R_OPERADOR";

--RESPONSABLES_TITULACION
GRANT SELECT(res_codigo) ON titulacion.responsables_titulacion TO "R_VISTA";
GRANT SELECT(res_codigo) ON titulacion.responsables_titulacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(res_codigo) ON titulacion.responsables_titulacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(res_codigo), UPDATE(res_codigo), INSERT(res_codigo), REFERENCES(res_codigo) ON titulacion.responsables_titulacion TO "R_OPERADOR";
GRANT SELECT(prof_codigo) ON titulacion.responsables_titulacion TO "R_VISTA";
GRANT SELECT(prof_codigo) ON titulacion.responsables_titulacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(prof_codigo) ON titulacion.responsables_titulacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(prof_codigo), UPDATE(prof_codigo), INSERT(prof_codigo), REFERENCES(prof_codigo) ON titulacion.responsables_titulacion TO "R_OPERADOR";
GRANT SELECT(res_tipo) ON titulacion.responsables_titulacion TO "R_VISTA";
GRANT SELECT(res_tipo) ON titulacion.responsables_titulacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(res_tipo) ON titulacion.responsables_titulacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(res_tipo), UPDATE(res_tipo), INSERT(res_tipo), REFERENCES(res_tipo) ON titulacion.responsables_titulacion TO "R_OPERADOR";
GRANT SELECT(res_fechanombramiento) ON titulacion.responsables_titulacion TO "R_VISTA";
GRANT SELECT(res_fechanombramiento) ON titulacion.responsables_titulacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(res_fechanombramiento) ON titulacion.responsables_titulacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(res_fechanombramiento), UPDATE(res_fechanombramiento), INSERT(res_fechanombramiento), REFERENCES(res_fechanombramiento) ON titulacion.responsables_titulacion TO "R_OPERADOR";
GRANT SELECT ON TABLE titulacion.responsables_titulacion TO "R_ESTUDIANTE";
GRANT SELECT ON TABLE titulacion.responsables_titulacion TO "R_PROFESOR";


--REVDIR_X_DISERTACION
GRANT SELECT(dis_codigo) ON titulacion.revdir_x_disertacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(dis_codigo) ON titulacion.revdir_x_disertacion TO "R_ESTUDIANTE";
GRANT SELECT(dis_codigo) ON titulacion.revdir_x_disertacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(dis_codigo) ON titulacion.revdir_x_disertacion TO "R_VISTA";
GRANT SELECT(dis_codigo), UPDATE(dis_codigo), INSERT(dis_codigo), REFERENCES(dis_codigo) ON titulacion.revdir_x_disertacion TO "R_OPERADOR";
GRANT SELECT(prof_codigo) ON titulacion.revdir_x_disertacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(prof_codigo) ON titulacion.revdir_x_disertacion TO "R_ESTUDIANTE";
GRANT SELECT(prof_codigo) ON titulacion.revdir_x_disertacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(prof_codigo) ON titulacion.revdir_x_disertacion TO "R_VISTA";
GRANT SELECT(prof_codigo), UPDATE(prof_codigo), INSERT(prof_codigo), REFERENCES(prof_codigo) ON titulacion.revdir_x_disertacion TO "R_OPERADOR";
GRANT SELECT(rxd_tipo) ON titulacion.revdir_x_disertacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(rxd_tipo) ON titulacion.revdir_x_disertacion TO "R_ESTUDIANTE";
GRANT SELECT(rxd_tipo) ON titulacion.revdir_x_disertacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(rxd_tipo) ON titulacion.revdir_x_disertacion TO "R_VISTA";
GRANT SELECT(rxd_tipo), UPDATE(rxd_tipo), INSERT(rxd_tipo), REFERENCES(rxd_tipo) ON titulacion.revdir_x_disertacion TO "R_OPERADOR";
GRANT SELECT(rxd_fechanombramiento) ON titulacion.revdir_x_disertacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(rxd_fechanombramiento) ON titulacion.revdir_x_disertacion TO "R_ESTUDIANTE";
GRANT SELECT(rxd_fechanombramiento) ON titulacion.revdir_x_disertacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(rxd_fechanombramiento) ON titulacion.revdir_x_disertacion TO "R_VISTA";
GRANT SELECT(rxd_fechanombramiento), UPDATE(rxd_fechanombramiento), INSERT(rxd_fechanombramiento), REFERENCES(rxd_fechanombramiento) ON titulacion.revdir_x_disertacion TO "R_OPERADOR";
grant SELECT(prof_codigo,dis_codigo) ON TITULACION.revdir_x_disertacion to "R_PROFESOR";

--REVISIONES
GRANT SELECT(dis_codigo) ON titulacion.revisiones TO "R_VISTA";
GRANT SELECT(dis_codigo) ON titulacion.revisiones TO "R_ESTUDIANTE";
GRANT SELECT(dis_codigo), UPDATE(dis_codigo), INSERT(dis_codigo) ON titulacion.revisiones TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(dis_codigo), UPDATE(dis_codigo), INSERT(dis_codigo) ON titulacion.revisiones TO "R_REVISOR_T_TITULACION";
GRANT SELECT(dis_codigo), REFERENCES(dis_codigo) ON titulacion.revisiones TO "R_OPERADOR";
GRANT SELECT(prof_codigo) ON titulacion.revisiones TO "R_VISTA";
GRANT SELECT(prof_codigo) ON titulacion.revisiones TO "R_ESTUDIANTE";
GRANT SELECT(prof_codigo), UPDATE(prof_codigo), INSERT(prof_codigo) ON titulacion.revisiones TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(prof_codigo), UPDATE(prof_codigo), INSERT(prof_codigo) ON titulacion.revisiones TO "R_REVISOR_T_TITULACION";
GRANT SELECT(prof_codigo), REFERENCES(prof_codigo) ON titulacion.revisiones TO "R_OPERADOR";
GRANT SELECT(obs_codigo) ON titulacion.revisiones TO "R_VISTA";
GRANT SELECT(obs_codigo) ON titulacion.revisiones TO "R_ESTUDIANTE";
GRANT SELECT(obs_codigo), UPDATE(obs_codigo), INSERT(obs_codigo) ON titulacion.revisiones TO "R_REVISOR_T_TITULACION";
GRANT SELECT(obs_codigo), UPDATE(obs_codigo), INSERT(obs_codigo) ON titulacion.revisiones TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(obs_codigo), REFERENCES(obs_codigo) ON titulacion.revisiones TO "R_OPERADOR";
GRANT SELECT(obs_fecha) ON titulacion.revisiones TO "R_VISTA";
GRANT SELECT(obs_fecha) ON titulacion.revisiones TO "R_ESTUDIANTE";
GRANT SELECT(obs_fecha), UPDATE(obs_fecha), INSERT(obs_fecha) ON titulacion.revisiones TO "R_REVISOR_T_TITULACION";
GRANT SELECT(obs_fecha), UPDATE(obs_fecha), INSERT(obs_fecha) ON titulacion.revisiones TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(obs_fecha), REFERENCES(obs_fecha) ON titulacion.revisiones TO "R_OPERADOR";
GRANT SELECT(obs_descripcion) ON titulacion.revisiones TO "R_VISTA";
GRANT SELECT(obs_descripcion) ON titulacion.revisiones TO "R_ESTUDIANTE";
GRANT SELECT(obs_descripcion), UPDATE(obs_descripcion), INSERT(obs_descripcion) ON titulacion.revisiones TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(obs_descripcion), UPDATE(obs_descripcion), INSERT(obs_descripcion) ON titulacion.revisiones TO "R_REVISOR_T_TITULACION";
GRANT SELECT(obs_descripcion), REFERENCES(obs_descripcion) ON titulacion.revisiones TO "R_OPERADOR";

--TRABAJO_DISERTACION
GRANT SELECT(dis_codigo) ON titulacion.trabajo_disertacion TO "R_ESTUDIANTE";
GRANT SELECT(dis_codigo) ON titulacion.trabajo_disertacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(dis_codigo) ON titulacion.trabajo_disertacion TO "R_VISTA";
GRANT SELECT(dis_codigo), UPDATE(dis_codigo) ON titulacion.trabajo_disertacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(dis_codigo), UPDATE(dis_codigo), INSERT(dis_codigo), REFERENCES(dis_codigo) ON titulacion.trabajo_disertacion TO "R_OPERADOR";
GRANT SELECT(dis_fechainicio) ON titulacion.trabajo_disertacion TO "R_ESTUDIANTE";
GRANT SELECT(dis_fechainicio) ON titulacion.trabajo_disertacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(dis_fechainicio) ON titulacion.trabajo_disertacion TO "R_VISTA";
GRANT SELECT(dis_fechainicio), UPDATE(dis_fechainicio) ON titulacion.trabajo_disertacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(dis_fechainicio), UPDATE(dis_fechainicio), INSERT(dis_fechainicio), REFERENCES(dis_fechainicio) ON titulacion.trabajo_disertacion TO "R_OPERADOR";
GRANT SELECT(dis_fechapresentacionplan) ON titulacion.trabajo_disertacion TO "R_ESTUDIANTE";
GRANT SELECT(dis_fechapresentacionplan) ON titulacion.trabajo_disertacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(dis_fechapresentacionplan) ON titulacion.trabajo_disertacion TO "R_VISTA";
GRANT SELECT(dis_fechapresentacionplan), UPDATE(dis_fechapresentacionplan) ON titulacion.trabajo_disertacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(dis_fechapresentacionplan), UPDATE(dis_fechapresentacionplan), INSERT(dis_fechapresentacionplan), REFERENCES(dis_fechapresentacionplan) ON titulacion.trabajo_disertacion TO "R_OPERADOR";
GRANT SELECT(dis_fechaaprobacion) ON titulacion.trabajo_disertacion TO "R_ESTUDIANTE";
GRANT SELECT(dis_fechaaprobacion) ON titulacion.trabajo_disertacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(dis_fechaaprobacion) ON titulacion.trabajo_disertacion TO "R_VISTA";
GRANT SELECT(dis_fechaaprobacion), UPDATE(dis_fechaaprobacion) ON titulacion.trabajo_disertacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(dis_fechaaprobacion), UPDATE(dis_fechaaprobacion), INSERT(dis_fechaaprobacion), REFERENCES(dis_fechaaprobacion) ON titulacion.trabajo_disertacion TO "R_OPERADOR";
GRANT SELECT(dis_titulo) ON titulacion.trabajo_disertacion TO "R_ESTUDIANTE";
GRANT SELECT(dis_titulo) ON titulacion.trabajo_disertacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(dis_titulo) ON titulacion.trabajo_disertacion TO "R_VISTA";
GRANT SELECT(dis_titulo), UPDATE(dis_titulo) ON titulacion.trabajo_disertacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(dis_titulo), UPDATE(dis_titulo), INSERT(dis_titulo), REFERENCES(dis_titulo) ON titulacion.trabajo_disertacion TO "R_OPERADOR";
GRANT SELECT(dis_estado) ON titulacion.trabajo_disertacion TO "R_ESTUDIANTE";
GRANT SELECT(dis_estado) ON titulacion.trabajo_disertacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(dis_estado) ON titulacion.trabajo_disertacion TO "R_VISTA";
GRANT SELECT(dis_estado), UPDATE(dis_estado) ON titulacion.trabajo_disertacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(dis_estado), UPDATE(dis_estado), INSERT(dis_estado), REFERENCES(dis_estado) ON titulacion.trabajo_disertacion TO "R_OPERADOR";
GRANT SELECT(dis_fechafin) ON titulacion.trabajo_disertacion TO "R_ESTUDIANTE";
GRANT SELECT(dis_fechafin) ON titulacion.trabajo_disertacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(dis_fechafin) ON titulacion.trabajo_disertacion TO "R_VISTA";
GRANT SELECT(dis_fechafin), UPDATE(dis_fechafin) ON titulacion.trabajo_disertacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(dis_fechafin), UPDATE(dis_fechafin), INSERT(dis_fechafin), REFERENCES(dis_fechafin) ON titulacion.trabajo_disertacion TO "R_OPERADOR";
GRANT SELECT(dis_defensa) ON titulacion.trabajo_disertacion TO "R_ESTUDIANTE";
GRANT SELECT(dis_defensa) ON titulacion.trabajo_disertacion TO "R_REVISOR_T_TITULACION";
GRANT SELECT(dis_defensa) ON titulacion.trabajo_disertacion TO "R_VISTA";
GRANT SELECT(dis_defensa), UPDATE(dis_defensa) ON titulacion.trabajo_disertacion TO "R_DIRECTOR_T_TITULACION";
GRANT SELECT(dis_defensa), UPDATE(dis_defensa), INSERT(dis_defensa), REFERENCES(dis_defensa) ON titulacion.trabajo_disertacion TO "R_OPERADOR";
grant SELECT(dis_codigo,dis_titulo) ON  titulacion.trabajo_disertacion to "R_PROFESOR";