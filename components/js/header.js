class Header extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
      this.innerHTML = `

<style>
.buscador{
  margin-right: 30px;
}

.nav-item :hover{
  text-decoration:underline;
}
</style>



    <nav class="navbar navbar-expand-md navbar-dark bg-primary" aria-label="Menu de navegacion">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
  <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
</svg></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsops" aria-controls="navbarsops" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsops">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">CITAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../persoas/index.php">PERSOAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../empresas/index.php">EMPRESAS</a>        
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../login/logout.php">SAÍR</a>        
          </li>
        </ul>
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>

      `;
    }
  }
  
  customElements.define('header-component', Header);