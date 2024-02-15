<!--table-->
<?php if(@count($projects ?? []) > 0): ?>
<div class="table-responsive report-results-table-container" id="report-results-container">
    <table class="table table-hover no-wrap" id="report-results-table">
        <thead>
            <tr>

                <!--project_id-->
                <th class="col_project_id"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.id'); ?><span class="sorting-icons"><i
                                class="ti-arrows-vertical"></i></span></a></th>

                <!--project_title-->
                <th class="col_project_title"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.project'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                <!--project_date_ini-->
                <th class="col_due_date"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.due_date'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

                 <!--project_date_due-->
                 <th class="col_due_date"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.due_date'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

  
                <!--project_status-->
                <th class="col_project_status"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.status'); ?><span
                            class="sorting-icons"><i class="ti-arrows-vertical"></i></span></a></th>

            </tr>
        </thead>
        <tbody id="report-results-ajax-container">
            <!--rows-->
            <?php echo $__env->make('pages.reports.projects.overview.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </tbody>
        <tfoot>
            <!--rows-->
            <?php echo $__env->make('pages.reports.projects.overview.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </tfoot>
    </table>

</div>
<?php else: ?>
<div id="report-results-container">
    <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php endif; ?><?php /**PATH E:\Wamp\www\GumaCompras\application\resources\views/pages/reports/projects/overview/table.blade.php ENDPATH**/ ?>