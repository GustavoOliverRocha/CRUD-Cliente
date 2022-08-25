<div class="modal fade" id="clientePjModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar um Cliente Pessoa Juridica</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

         <form method="POST" action="" name="editClientePjForm">

            <input type="hidden" id="editCliente_pj_id" name="cliente_pj_id">

            <label for="editCliente_nome">Razão Social:</label>
            <input type="text" id="editCliente_pj_razao" name="cliente_pj_razao" required>
            <br><br>
            <label for="editCliente_cpf">CNPJ:</label>
            <input type="text" id="editCliente_pj_cnpj" class="cnpj" name="cliente_pj_cnpj" maxlength="14" required>
            <br><br>
            <label for="editCliente_email">E-mail:</label>
            <input type="email" id="editCliente_pj_email" name="cliente_pj_email" required>

         </form>

       </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="$('[name=editClientePjForm]').submit()">Salvar Mudanças</button>
      </div>
    </div>
  </div>
</div>