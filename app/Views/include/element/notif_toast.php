<?php $success = session()->getFlashdata('success');
$failed = session()->getFlashdata('failed'); ?>
<div class="toast-container toast-top-right">
    <div class="toast mb-3" id="notif-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-<?= isset($failed)  ? "danger" : "success"; ?> text-white"><i class="czi-check-circle mr-2"></i>
            <h6 class="font-size-sm text-white mb-0 mr-auto"><?= isset($failed)  ? "failed" : "success"; ?></h6>
            <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="toast-body"><?= isset($failed) ? $failed : $success; ?>.</div>
    </div>
</div>