<?php  
function ActionModal($action, $modal) {
if (!empty(session()->getFlashdata($action))) : ?>
    <script>
        var modal = "opentoast";
        $(`#${modal}`).click();
    </script>
<?php endif; }?>