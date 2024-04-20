<h6 class="navbar-heading text-muted">Gestionar Datos</h6>
 <ul class="navbar-nav">
           <li class="nav-item">
             <a class="nav-link" href="./index.html">
               <i class="ni ni-tv-2 text-red"></i> Dashboard
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="./examples/icons.html">
               <i class="ni ni-planet text-blue"></i> Especialidades
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="./examples/maps.html">
               <i class="ni ni-single-02 text-red"></i> Medicos
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="./examples/profile.html">
               <i class="ni ni-satisfied text-info"></i> Pacientes
             </a>
           </li>

          
          <li class="nav-item">
            <a class="nav-link" href="" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
              <i class="ni ni-key-25 text-inf"></i> Cerrar Sesión
            
            </a>
          
            
              <form role="form" method="POST" action="{{ route('logout') }}" Style="display:none;" id="formLogout">
               @csrf
</form>
          </li>


        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Reportes</h6>
           <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
              <i class="ni ni-chart-pie-35 text-yellow"></i> Frecuencia de citas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
              <i class="ni ni-palette text-orange"></i> Medicos mas activos
            </a>
          </li>
          
        </ul>
       