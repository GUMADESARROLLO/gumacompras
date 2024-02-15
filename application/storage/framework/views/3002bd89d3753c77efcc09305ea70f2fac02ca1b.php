<div class="reports-list-page-filter-container">
    <form class="form-inline row gy-2 gx-3 align-items-center" id="reports-list-page-filter-form">

        <!--period-->
        <div class="form-group row">
            <select class="select2-basic form-control form-control-sm select2-preselected" id="filter_report_date_range"
                style="width:170px;" name="filter_report_date_range" data-preselected="all" data-width="resolve">
                <option></option>
                <optgroup label="<?php echo app('translator')->get('lang.date_range'); ?>">
                    <option value="all"><?php echo app('translator')->get('lang.all'); ?></option>
                    <option value="this_year"><?php echo app('translator')->get('lang.this_year'); ?></option>
                    <option value="last_year"><?php echo app('translator')->get('lang.last_year'); ?></option>
                    <option value="this_month"><?php echo app('translator')->get('lang.this_month'); ?></option>
                    <option value="last_month"><?php echo app('translator')->get('lang.last_month'); ?></option>
                    <option value="custom_range"><?php echo app('translator')->get('lang.custom_range'); ?></option>
                </optgroup>
            </select>
        </div>


        <!--start_date-->
        <div class="reports-date-range hidden">
            <div class="form-group row">
                <input type="text" class="form-control form-control-sm pickadate" autocomplete="off"
                    name="filter_report_date_start" placeholder="<?php echo app('translator')->get('lang.start_date'); ?>">
                <input class="mysql-date" type="hidden" name="filter_report_date_start" id="filter_report_date_start">
            </div>
        </div>

        <!--end_date-->
        <div class="reports-date-range hidden">
            <div class="form-group row">
                <input type="text" class="form-control form-control-sm pickadate" autocomplete="off"
                    name="filter_report_date_end" placeholder="<?php echo app('translator')->get('lang.start_date'); ?>">
                <input class="mysql-date" type="hidden" name="filter_report_date_end" id="filter_report_date_end">
            </div>
        </div>

        <!--form buttons-->
        <div class="col-auto">
            <input type="hidden" name="report-form" value="filter">
            <button type="submit" id="submitButton" class="btn btn-info btn-sm waves-effect text-left ajax-request"
                data-url="<?php echo e(url('report/projects/category?action=load')); ?>"
                data-loading-target="report-results-container" data-ajax-type="POST"
                data-form-id="reports-list-page-filter-form"
                data-on-start-submit-button="disable"><?php echo app('translator')->get('lang.update_report'); ?></button>
        </div>
    </form>
</div><?php /**PATH E:\Wamp\www\GumaCompras\application\resources\views/pages/reports/projects/category/filter.blade.php ENDPATH**/ ?>