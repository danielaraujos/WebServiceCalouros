<footer class="main-footer">
    <?php /*
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.3
    </div>
    */ ?>
    <strong>
        Copyright &copy; <?php copyright('2016') ?>

    </strong>
    Todos direitos reservados.
</footer>

<?php
function copyright($year = 'auto')
{
    if(intval($year) == 'auto') $year = date('Y');
    if(intval($year) == date('Y')) echo intval($year);
    if(intval($year) < date('Y')) echo intval($year) . ' - ' . date('Y');
    if(intval($year) > date('Y')) echo date('Y');
}