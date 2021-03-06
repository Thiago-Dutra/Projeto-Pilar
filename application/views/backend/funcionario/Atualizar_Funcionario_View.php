<h3> Atualizar informações </h3>
<?php foreach($resultado as $funcionario){?>
    <?php
        echo validation_errors('<div class="alert alert-danger">','</div>');
        echo form_open('salvar');
        ?>
        <div class="form-group col-md-6">
            <label id="txt-nome">Nome completo</label>
            <input type="text" id="txt-nome" name="txt-nome" class="form-control" value="<?php echo $funcionario->nome ?>" >
        </div>
        <div class="form-group col-md-3">
            <label id="txt-senha">Senha</label>
            <input type="password" id="txt-senha" name="txt-senha" class="form-control" placeholder="Senha" value="">
        </div>
        <div class="form-group col-md-3">
            <label id="txt-confirmar-senha">Confirmar senha</label>
            <input type="password" id="txt-confirmar-senha" name="txt-confirmar-senha" class="form-control" placeholder="Confirmar senha" value="">
        </div>
        <div class="form-group col-md-3">
            <label id="txt-cpf">CPF</label>
            <input type="text" id="txt-cpf" name="txt-cpf" class="form-control" value="<?php echo $funcionario->cpf ?>">
        </div>
        <div class="form-group col-md-5">
            <label id="txt-email">Email</label>
            <input type="text" id="txt-email" name="txt-email" class="form-control" value="<?php echo $funcionario->email ?>">
        </div>


        <div class="form-group col-md-5">
            <input type="hidden" id="txt-tipo" name="txt-tipo" class="form-control" value="<?php echo $funcionario->id_tipoFuncionario ?>">
        </div>
        <div class="form-group col-md-5">
            <input type="hidden" id="txt-situacao" name="txt-situacao" class="form-control" value="<?php echo $funcionario->situacao ?>">
        </div>
        <div class="form-group col-md-5">
            <input type="hidden" id="txt-id" name="txt-id" class="form-control" value="<?php echo $funcionario->id_funcionario ?>">
        </div>

        <button type="submit" class="btn btn-default"> Atualizar Informações </button>
    <?php
    echo form_close();
    ?>
<?php }?>