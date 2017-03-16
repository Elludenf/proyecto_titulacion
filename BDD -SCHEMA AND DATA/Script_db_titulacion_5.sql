ALTER TABLE titulacion.estudiante ADD CONSTRAINT constraint_est_id UNIQUE (est_id);
ALTER TABLE titulacion.estudiante ADD CONSTRAINT constraint_est_mailpuce UNIQUE (est_mailpuce);
ALTER TABLE titulacion.estudiante ADD CONSTRAINT constraint_est_mail UNIQUE (est_mail);

ALTER TABLE titulacion.profesor ADD CONSTRAINT constraint_prof_id UNIQUE (prof_id);
ALTER TABLE titulacion.profesor ADD CONSTRAINT constraint_prof_mailpuce UNIQUE (prof_mailpuce);
ALTER TABLE titulacion.profesor ADD CONSTRAINT constraint_prof_mail UNIQUE (prof_mail);

ALTER TABLE titulacion.trabajo_disertacion ADD CONSTRAINT constraint_dis_titulo UNIQUE (dis_titulo);

ALTER TABLE titulacion.carreras ADD CONSTRAINT constraint_carr_descripcion UNIQUE (carr_descripcion);

ALTER TABLE titulacion.escuelas ADD CONSTRAINT constraint_esc_descripcion UNIQUE (esc_descripcion);

ALTER TABLE titulacion.facultades ADD CONSTRAINT constraint_facu_descripcion UNIQUE (facu_descripcion);

ALTER TABLE titulacion.materias ADD CONSTRAINT constraint_mat_nombre UNIQUE (mat_nombre);

ALTER TABLE titulacion.periodos_academicos ADD CONSTRAINT constraint_pac_descripcion UNIQUE (pac_descripcion);

ALTER TABLE titulacion.plan_de_estudio ADD CONSTRAINT constraint_plan_descripcion UNIQUE (plan_descripcion);

