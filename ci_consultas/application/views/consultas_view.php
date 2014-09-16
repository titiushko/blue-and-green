<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="css/960.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <style type="text/css">

        body{
            background: #ffefef;
        }
        #consulta{
            display: none;
            font-size: 12px;
            background: #d5d8dd;
            margin-bottom: 15px;
        }
        .container_12{
            background: #1b89da;
            border: 5px solid #fff;
        }
        #cuerpo{
            margin-top: 10px;
        }
        #cabecera{
            margin-top: 10px;
            background: #111;
            color: #fff;
            margin-left: 0px;
        }
        .mostrar{
            color: #fff;
            font-weight: bold;
            text-align: center;
            font-size: 22px;
            cursor: pointer;
        }
        pre{
            border: 1px solid #111;
            background: #fff;
            margin-left: -60px;
            margin-right: 30px;
        }
        #consulta_sql{
            margin: 20px 0px;
        }
        h3{
            font-size: 18px;
            text-align: center;
            color: #9e0606;
        }
    </style>
</head>
<script type="text/javascript">
    $(document).ready(function(){
        $(".mostrar").click(function(){
            $(this).next('#consulta').slideToggle();
        });
    })
</script>
<body>
    <div class="container_12">

        <div class="mostrar grid_12">Inner join de un usuario y sus entradas</div>
        <div class="grid_12" id="consulta">

            <div class="grid_12" id="cabecera">
                <div class="grid_1">Username</div>
                <div class="grid_1">First name</div>
                <div class="grid_1">Last name</div>
                <div class="grid_2">Register user</div>
                <div class="grid_2">Título</div>
                <div class="grid_2">Entrada</div>
                <div class="grid_2">Publicación</div>
            </div>
            <?php
            foreach($user_entrys as $fila)
            {
            ?>
            <div class="grid_12" id="cuerpo">
                <div class="grid_1"><?=$fila->username?></div>
                <div class="grid_1"><?=$fila->fname?></div>
                <div class="grid_1"><?=$fila->lname?></div>
                <div class="grid_2"><?=$fila->register_date?></div>
                <div class="grid_2"><?=$fila->titulo?></div>
                <div class="grid_2"><?=$fila->entrada?></div>
                <div class="grid_2"><?=$fila->publish_date?></div>
            </div>
            <?php
            }
            ?>
            <div class="grid_11 push_1" id="consulta_sql">
                <pre>
                    $this->db->select('u.username,u.fname,u.lname,u.register_date,e.titulo,e.entrada,e.publish_date');
                    $this->db->from('users u');
                    $this->db->join('entradas e', 'u.id = e.id_user');
                    $this->db->where('u.id',1);
                    $query = $this->db->get();
                    return $query->result();
                     <h3>Obtenemos los datos y entradas del usuario con u.id = 1</h3>
                </pre><br />
                <h3></h3>
            </div>
            </div>
        </div>

    <div class="container_12">
        <div class="mostrar">Inner join de todos los usuarios y sus entradas</div>
        <div class="grid_12" id="consulta">

            <div class="grid_12" id="cabecera">
                <div class="grid_1">Username</div>
                <div class="grid_1">First name</div>
                <div class="grid_1">Last name</div>
                <div class="grid_2">Register user</div>
                <div class="grid_2">Título</div>
                <div class="grid_2">Entrada</div>
                <div class="grid_2">Publicación</div>
            </div>
            <?php
            foreach($users_entrys as $fila)
            {
                ?>
                <div class="grid_12" id="cuerpo">
                    <div class="grid_1"><?=$fila->username?></div>
                    <div class="grid_1"><?=$fila->fname?></div>
                    <div class="grid_1"><?=$fila->lname?></div>
                    <div class="grid_2"><?=$fila->register_date?></div>
                    <div class="grid_2"><?=$fila->titulo?></div>
                    <div class="grid_2"><?=$fila->entrada?></div>
                    <div class="grid_2"><?=$fila->publish_date?></div>
                </div>
                <?php
            }
            ?>
            <div class="grid_11 push_1" id="consulta_sql">
                <pre>
                    $this->db->select('u.username,u.fname,u.lname,u.register_date,e.titulo,e.entrada,e.publish_date');
                    $this->db->from('users u');
                    $this->db->join('entradas e', 'u.id = e.id_user');
                    $query = $this->db->get();
                    return $query->result();
                </pre><br />
                <h3>Obtenemos todas las entradas de todos los usuario y sus datos</h3>
            </div>
        </div>
    </div>

    <div class="container_12">
        <div class="mostrar grid_12">Inner join de todos los usuarios y sus comentarios</div>
        <div class="grid_12" id="consulta">

            <div class="grid_12" id="cabecera">
                <div class="grid_1">Username</div>
                <div class="grid_3">Título comentario</div>
                <div class="grid_5">Comentario</div>
                <div class="grid_2">Fecha comentario</div>
            </div>
            <?php
            foreach($users_comments as $fila)
            {
                ?>
                <div class="grid_12" id="cuerpo">
                    <div class="grid_1"><?=$fila->username?></div>
                    <div class="grid_3"><?=$fila->titulo_comentario?></div>
                    <div class="grid_5"><?=$fila->comentario?></div>
                    <div class="grid_2"><?=$fila->comment_date?></div>
                </div>
                <?php
            }
            ?>
            <div class="grid_11 push_1" id="consulta_sql">
                <pre>
                    $this->db->select('u.username,c.titulo_comentario,c.comentario,c.comment_date');
                    $this->db->from('comentarios c');
                    $this->db->join('users u', 'c.id_user = u.id');
                    $query = $this->db->get();
                    return $query->result();
                     <h3>Obtenemos los datos y comentarios de todos los usuarios</h3>
                </pre><br />
                <h3></h3>
            </div>
        </div>
    </div>

    <div class="container_12">
        <div class="mostrar grid_12">Inner join de un  usuario y sus comentarios</div>
        <div class="grid_12" id="consulta">
            <div class="grid_12" id="cabecera">
                <div class="grid_1">Username</div>
                <div class="grid_3">Título comentario</div>
                <div class="grid_5">Comentario</div>
                <div class="grid_2">Fecha comentario</div>
            </div>
            <?php
            foreach($user_comments as $fila)
            {
                ?>
                <div class="grid_12" id="cuerpo">
                    <div class="grid_1"><?=$fila->username?></div>
                    <div class="grid_3"><?=$fila->titulo_comentario?></div>
                    <div class="grid_5"><?=$fila->comentario?></div>
                    <div class="grid_2"><?=$fila->comment_date?></div>
                </div>
                <?php
            }
            ?>
            <div class="grid_11 push_1" id="consulta_sql">
                <pre>
                    $this->db->select('u.username,c.titulo_comentario,c.comentario,c.comment_date');
                    $this->db->from('comentarios c');
                    $this->db->join('users u', 'c.id_user = u.id');
                    $this->db->where('u.id',1);
                    $query = $this->db->get();
                    return $query->result();
                     <h3>Obtenemos los datos y comentarios del usuario con u.id = 1</h3>
                </pre><br />
                <h3></h3>
            </div>
        </div>
    </div>

    <div class="container_12">
        <div class="mostrar">Consulta usando el operador like con after</div>
        <div class="grid_12" id="consulta">

            <div class="grid_12" id="cabecera">
                <div class="grid_3">Username</div>
                <div class="grid_5">First name</div>
                <div class="grid_3">Register data</div>
            </div>
            <?php
            foreach($search_after_users as $fila)
            {
                ?>
                <div class="grid_12" id="cuerpo">
                    <div class="grid_3"><?=$fila->username?></div>
                    <div class="grid_5"><?=$fila->fname?></div>
                    <div class="grid_3"><?=$fila->register_date?></div>
                </div>
                <?php
            }
            ?>
            <div class="grid_11 push_1" id="consulta_sql">
                <pre>
                    $this->db->like('username','I','after');
                    $query = $this->db->get('users');
                    return $query->result();
                </pre><br>
                <h3>Obtenemos los usuarios cuyo username empiza con I</h3>
            </div>
        </div>
    </div>

    <div class="container_12">
        <div class="mostrar">Consulta usando el operador like con before</div>
        <div class="grid_12" id="consulta">

            <div class="grid_12" id="cabecera">
                <div class="grid_3">Username</div>
                <div class="grid_5">First name</div>
                <div class="grid_3">Register data</div>
            </div>
            <?php
            foreach($search_before_users as $fila)
            {
                ?>
                <div class="grid_12" id="cuerpo">
                    <div class="grid_3"><?=$fila->username?></div>
                    <div class="grid_5"><?=$fila->fname?></div>
                    <div class="grid_3"><?=$fila->register_date?></div>
                </div>
                <?php
            }
            ?>
            <div class="grid_11 push_1" id="consulta_sql">
                <pre>
                    $this->db->like('username','5','before');
                    $query = $this->db->get('users');
                    return $query->result();
                </pre><br>
                <h3>Obtenemos los usuarios cuyo username termina en 5</h3>
            </div>
        </div>
    </div>


    <div class="container_12">
        <div class="mostrar">Contamos los registros con count_all_results</div>
        <div class="grid_12" id="consulta">

            <div class="grid_12" id="cabecera">
                <div class="grid_3">Número de registros</div>
            </div>

                <div class="grid_12" id="cuerpo">
                    <div class="grid_3"><?=$count_data?></div>
                </div>
            <div class="grid_11 push_1" id="consulta_sql">
                <pre>
                    return $this->db->count_all_results('users');
                </pre><br>
                <h3>Contamos los registros de la tabla users</h3>
            </div>
        </div>
    </div>

    <div class="container_12">
        <div class="mostrar">Quinta consulta usando get_where</div>
        <div class="grid_12" id="consulta">

            <div class="grid_12" id="cabecera">
                <div class="grid_2">Username</div>
                <div class="grid_3">First name</div>
                <div class="grid_3">Last name</div>
                <div class="grid_3">Register date</div>
            </div>
            <?php
            foreach($search_before_users as $fila)
            {
                ?>
                <div class="grid_12" id="cuerpo">
                    <div class="grid_2"><?=$consulta_get_where->username?></div>
                    <div class="grid_3"><?=$consulta_get_where->fname?></div>
                    <div class="grid_3"><?=$consulta_get_where->lname?></div>
                    <div class="grid_3"><?=$consulta_get_where->register_date?></div>
                </div>
                <?php
            }
            ?>
            <div class="grid_11 push_1" id="consulta_sql">
                <pre>
                    $query = $this->db->get_where('users',array('id' => 1));
                    return $query->row();
                </pre><br>
                <h3>Obtenemos los datos del usuario con id 1 en la misma línea con get_where</h3>
            </div>
        </div>
    </div>

        <div class="container_12">
            <div class="mostrar">Consulta para insertar datos con un array asociativo</div>
            <div class="grid_12" id="consulta">
                <div class="grid_11 push_1" id="consulta_sql">
                <pre>
                    $data = array(
                               'username'       =>   'Juan68',
                               'fname'          =>   'Juan,
                               'lname'          =>   'Pérez',
                               'register_date'  =>   2013-01-19 10:00:00
                            );
                    $this->db->insert('users',$data);
                </pre><br>
                    <h3>Hacemos un insert en la tabla users</h3>
                </div>
            </div>
        </div>


    <div class="container_12">
        <div class="mostrar">Consulta para insertar datos con un array asociativo</div>
        <div class="grid_12" id="consulta">
            <div class="grid_11 push_1" id="consulta_sql">
                <pre>
                    $data = array(
                        'username'       =>   'Juan68',
                        'fname'          =>   'Juan',
                        'lname'          =>   'Pérez',
                        'register_date'  =>    '2013-01-19 10:00:00'
                        );
                        $this->db->insert('users',$data);
                </pre><br>
                <h3>Hacemos un insert en la tabla users</h3>
            </div>
        </div>
    </div>

        <div class="container_12">
            <div class="mostrar">Consulta para eliminar un registro</div>
            <div class="grid_12" id="consulta">
                <div class="grid_11 push_1" id="consulta_sql">
                <pre>
                    $this->db->delete('users', array('id' => 1));
                </pre><br>
                    <h3>Hacemos un delete en la tabla users del usuario con id 1</h3>
                </div>
            </div>
        </div>

    <div class="container_12">
        <div class="mostrar">Consulta para actualizar un registro</div>
        <div class="grid_12" id="consulta">
            <div class="grid_11 push_1" id="consulta_sql">
                <pre>
                    $data = array(
                    'username' => 'silvia',
                    'fname' => 'madrejo',
                    'lname' => 'sánchez'
                    );
                    $this->db->where('id', 3);
                    $this->db->update('users', $data);
                </pre><br>
                <h3>Hacemos un update en la tabla users del usuario con id 3</h3>
            </div>
        </div>
    </div>

    <div class="container_12">
        <div class="mostrar">Consulta para eliminar registros de varias tablas</div>
        <div class="grid_12" id="consulta">
            <div class="grid_11 push_1" id="consulta_sql">
                <pre>
                    $tablas = array('users', 'entradas', 'comentarios');
                    $this->db->where('id', '2');
                    $this->db->delete($tablas);
                </pre><br>
                <h3>Eliminamos todos los registros de la tabla users, entradas y comentarios cuya id es 2</h3>
            </div>
        </div>
    </div>
</body>
</html>