CREATE OR REPLACE FUNCTION titulacion.if_modified_func() RETURNS TRIGGER AS $body$
DECLARE
    v_old_data TEXT;
    v_new_data TEXT;
BEGIN
    /*  If this actually for real titulacioning (where you need to log EVERY action),
        then you would need to use something like dblink or plperl that could log outside the transaction,
        regardless of whether the transaction committed or rolled back.
    */
 
    /* This dance with casting the NEW and OLD values to a ROW is not necessary in pg 9.0+ */
 
    IF (TG_OP = 'UPDATE') THEN
        v_old_data := ROW(OLD.*);
        v_new_data := ROW(NEW.*);
        INSERT INTO titulacion.logged_actions (schema_name,table_name,user_name,action,original_data,new_data,query) 
        VALUES (TG_TABLE_SCHEMA::TEXT,TG_TABLE_NAME::TEXT,session_user::TEXT,substring(TG_OP,1,1),v_old_data,v_new_data, current_query());
        RETURN NEW;
    ELSIF (TG_OP = 'DELETE') THEN
        v_old_data := ROW(OLD.*);
        INSERT INTO titulacion.logged_actions (schema_name,table_name,user_name,action,original_data,query)
        VALUES (TG_TABLE_SCHEMA::TEXT,TG_TABLE_NAME::TEXT,session_user::TEXT,substring(TG_OP,1,1),v_old_data, current_query());
        RETURN OLD;
    ELSIF (TG_OP = 'INSERT') THEN
        v_new_data := ROW(NEW.*);
        INSERT INTO titulacion.logged_actions (schema_name,table_name,user_name,action,new_data,query)
        VALUES (TG_TABLE_SCHEMA::TEXT,TG_TABLE_NAME::TEXT,session_user::TEXT,substring(TG_OP,1,1),v_new_data, current_query());
        RETURN NEW;
    ELSE
        RAISE WARNING '[titulacion.IF_MODIFIED_FUNC] - Other action occurred: %, at %',TG_OP,now();
        RETURN NULL;
    END IF;
 
EXCEPTION
    WHEN data_exception THEN
        RAISE WARNING '[titulacion.IF_MODIFIED_FUNC] - UDF ERROR [DATA EXCEPTION] - SQLSTATE: %, SQLERRM: %',SQLSTATE,SQLERRM;
        RETURN NULL;
    WHEN unique_violation THEN
        RAISE WARNING '[titulacion.IF_MODIFIED_FUNC] - UDF ERROR [UNIQUE] - SQLSTATE: %, SQLERRM: %',SQLSTATE,SQLERRM;
        RETURN NULL;
    WHEN OTHERS THEN
        RAISE WARNING '[titulacion.IF_MODIFIED_FUNC] - UDF ERROR [OTHER] - SQLSTATE: %, SQLERRM: %',SQLSTATE,SQLERRM;
        RETURN NULL;
END;
$body$
LANGUAGE plpgsql
SECURITY DEFINER
SET search_path = pg_catalog, titulacion;





 
 CREATE TRIGGER carreras_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.carreras
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER dicta_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.dicta
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER elabora_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.elabora
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER escuelas_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.escuelas
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER estudiante_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.estudiante
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER examen_complexivo_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.examen_complexivo
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER facultades_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.facultades
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER mat_ap_x_est_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.mat_ap_x_est
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER materia_x_plan_de_estudio_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.materia_x_plan_de_estudio
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER materias_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.materias
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER matsorteadas_x_examen_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.matsorteadas_x_examen
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER periodos_academicos_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.periodos_academicos
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER plan_de_estudio_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.plan_de_estudio
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER profesor_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.profesor
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER prorroga_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.prorroga
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER responsables_titulacion_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.responsables_titulacion
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER revdir_x_disertacion_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.revdir_x_disertacion
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER revisiones_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.revisiones
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();
 
 CREATE TRIGGER trabajo_disertacion_if_modified_trg 
 AFTER INSERT OR UPDATE OR DELETE ON titulacion.trabajo_disertacion
 FOR EACH ROW EXECUTE PROCEDURE titulacion.if_modified_func();