<?php echo $form->renderFormTag('job/contacto') ?>
<?php include_javascripts('main.js') ?>
<table>
    <?php echo $form['nombre']->renderRow(array('class'=>'miclase')) ?>
    <?php echo $form['email']->renderRow(array('class'=>'miemail') )?>
    <?php echo $form['asunto']->renderRow() ?>
    <?php echo $form['mensaje']->renderRow() ?>
    <?php echo $form['asunto']->renderRow(array('size'=>100,'class'=>'asunt')) ?>
    <tr>
        <td colspan="2">
            <input type="button" onclick="abrir()" />
            <input type="submit"  />
        </td>
    </tr>
</table>