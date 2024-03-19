<?php 
if (!isset($app)) {
    die();
}

require('includes/04_scripts_orthor.php');

?>


<script>
    function initGoogleApi() {
        // Diese Funktion ist zum Überschreiben gedacht
    }
</script>

<script>
    // Only for Develop Purpose
    setTimeout(function() {
        checkForDuplicates();
    }, 3000);

    function checkForDuplicates() {
        $('[id]').each(function() {
            var id = $('[id="' + this.id + '"]');
            if (id.length > 1 && id[0] == this) {
                console.warn('[DOM] Duplicate id #' + this.id);
            }
        });
    }
</script>