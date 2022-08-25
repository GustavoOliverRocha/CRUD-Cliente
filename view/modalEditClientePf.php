<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar um Cliente Pessoa Fisica</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form method="POST" action="" name="editClientePfForm">
            <input type="hidden" id="editCliente_id" name="cliente_id">
            <label for="cliente_nome">Nome:</label>
            <input type="text" id="editCliente_nome" name="cliente_nome" required>
            <br><br>
            <label for="cliente_cpf">CPF:</label>
            <input type="text" id="editCliente_cpf" class="cpf" name="cliente_cpf" maxlength="11" required>
            <br><br>
            <label for="cliente_pj_email">E-mail:</label>
            <input type="email" id="editCliente_email" name="cliente_email" required>

         </form>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="$('[name=editClientePfForm]').submit()">Salvar Mudanças</button>
      </div>
    </div>
  </div>
</div>