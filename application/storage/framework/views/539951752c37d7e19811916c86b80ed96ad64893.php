
<!--totals-->
<tr class="report-results-table-totals">
    <td colspan="5"><?php echo app('translator')->get('lang.page_totals'); ?></td>


</tr>

<!--pagination-->
<tr>
    <td class="pagination-container" data-tableexport-display="none" colspan="11">
        <div class="pagination">
            <?php echo e($projects->links('pages.reports.components.misc.pagination')); ?>

        </div>
    </td>
</tr><?php /**PATH E:\Wamp\www\GumaCompras\application\resources\views/pages/reports/projects/overview/footer.blade.php ENDPATH**/ ?>