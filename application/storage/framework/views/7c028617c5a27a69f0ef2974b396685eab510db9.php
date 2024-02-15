<!--rows-->
<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>

    <!--project_id-->
    <td><a href="<?php echo e(url('projects/'.$project->project_id)); ?>"><?php echo e($project->project_id); ?></a>
    </td>

    <!--project_title-->
    <td><a href="<?php echo e(url('projects/'.$project->project_id)); ?>"><?php echo e(str_limit_reports($project->project_title ?? '---', 40)); ?></a>
    </td>

    <!--project_date_ini-->
    <td><span class="hidden used-for-sorting"><?php echo e($project->timestamp_project_date_due); ?></span><?php echo e(runtimeDate($project->project_date_due)); ?></td>

    <!--project_date_due-->
    <td><span class="hidden used-for-sorting"><?php echo e($project->timestamp_project_date_due); ?></span><?php echo e(runtimeDate($project->project_date_due)); ?></td>




    <!--project_status-->
    <td> <span class="label <?php echo e(runtimeProjectStatusColors($project->project_status, 'label')); ?>"><?php echo e(runtimeLang($project->project_status)); ?></span></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH E:\Wamp\www\GumaCompras\application\resources\views/pages/reports/projects/overview/ajax.blade.php ENDPATH**/ ?>