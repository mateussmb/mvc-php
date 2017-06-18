<script src="/public/js/jquery.maskMoney.min.js"></script>
<script src="/public/js/jquery-ui.js"></script>
<link href="/public/css/jquery-ui.min.css" rel="stylesheet">

<div class="row">
    <br>
    <div class="col-md-12">
        <h3>Editar Produto</h3>
    </div>
    <div class="col-md-12">
        <form action="/produto/atualizar" method="post">
            <input type="hidden" class="form-control" name="co_produto" id="co_produto" value="<?php echo $aViewVar['aProduto']['co_produto']; ?>">

            <div class="form-group">
                <label for="no_produto">Nome</label>
                <input type="text" class="form-control" name="no_produto" id="no_produto" placeholder="" value="<?php echo $aViewVar['aProduto']['no_produto']; ?>">
            </div>
            <div class="form-group">
                <label for="vl_produto">Valor R$</label>
                <input type="text" class="form-control" data-affixes-stay="true" data-thousands="." data-decimal="," id="vl_produto" name="vl_produto" placeholder="R$ " value="<?php echo Util::formatMoney($aViewVar['aProduto']['vl_produto'],"pt"); ?>">
            </div>

            <div class="form-group">
                <label for="ds_produto">Descrição</label>
                <textarea class="form-control" id="ds_produto" name="ds_produto" ><?php echo $aViewVar['aProduto']['ds_produto']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="dt_validade">Data Validade</label>
                <input type="text" class="form-control" id="dt_validade" name="dt_validade" value="<?php echo Util::convertDate($aViewVar['aProduto']['dt_validade'],"pt"); ?>">
            </div>

            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            <a href="/produto" class="btn btn-info btn-sm">Voltar</a>
        </form>
    </div>
</div>

<script>
    $(function() {
        $('#vl_produto').maskMoney();
        $( "#dt_validade" ).datepicker({
            firstDay: 1,
            dateFormat: 'dd/mm/yy',
            dayNames: [
                'DOMINGO','SEGUNDA','TERÇA','QUARTA','QUINTA','SEXTA','SÁBADO','DOMINGO'
            ],
            dayNamesMin: [
                'D','S','T','Q','Q','S','S','D'
            ],
            dayNamesShort: [
                'Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'
            ],
            monthNames: [
                'JANEIRO','FEVEREIRO','MARÇO','ABRIL','MAIO','JUNHO','JULHO','AGOSTO','SETEMBRO',
                'OUTUBRO','NOVEMBRO','DEZEMBRO'
            ],
            monthNamesShort: [
                'JAN','FEV','MAR','ABR','MAI','JUN','JUL','AGO','SET',
                'OUT','NOV','DEZ'
            ],
            nextText: 'Próximo',
            prevText: 'Anterior',
        });
    })
</script>