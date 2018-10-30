<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>


    <?php echo form_tag_for($form, '@job') ?>
<?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="PUT" />
<?php endif; ?>

<?php echo link_to(
    'Delete',
    'job/delete?id='.$form->getObject()->getId(),
    array('method' => 'delete', 'confirm' => 'Are you sure?')
) ?>
    <table id="job_form">
        <tfoot>
        <tr>
            <td colspan="2">
                <input type="submit" value="Preview your job" />
            </td>
        </tr>
        </tfoot>
        <tbody>
        <?php echo $form ?>
        </tbody>
    </table>
</form>