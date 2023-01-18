<?php  
function ActionModal($action, $modal) {
if (!empty(session()->getFlashdata($action))) : ?>
    <script>
        window.addEventListener('load', function() {
            document.getElementById('<?=$modal?>').click();
        })
    </script>
<?php endif; }?>