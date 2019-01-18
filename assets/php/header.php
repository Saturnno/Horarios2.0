<?php
    function get_header(){
        echo '<div class="container-fluid">
           
            <div class="nav row">
               <div class="container">
                   <div class="col-lg-3 menu-item">
                       <h4>Carga Academica</h4>
                   </div>
                   <div class="col-lg-3
                       menu-item item-button menu-submenu">
                       <h5>Capturas</h5>
                       <ul class="submenu shadow p-3 mb-5 bg-white rounded">
                           <li>Unidades</li>
                           <li>Departamentos</li>
                           <li>Programas Educativos</li>
                           <li>Meses</li>
                           <li>Trimestres</li>
                           <li>Turnos</li>
                           <li>Categorias</li>
                           <li>Modulos</li>
                           <li>Modulos Grupo</li>
                           <li>Nombramientos</li>
                           <li>Maestros</li>
                           <li>Materias</li>
                           <li>Perfil Docente</li>
                           <li>Grupos</li>
                           <li>Programa educativo detalle</li>
                           <li>Disponibilidades de grupos</li>
                       </ul>
                       
                   </div>
                   <div class="col-lg-3 menu-item item-button">
                       <h5>Generar Carga Academica</h5>
                   </div>
               </div>
                
            </div>
        </div>';
    }
    function get_footer() {
        echo '<footer>
            <div class="container">
                 <p>&copy; 2019 - Aplicación Cargas Academicas</p>
            </div>
            
         </footer>';
    }
?>
