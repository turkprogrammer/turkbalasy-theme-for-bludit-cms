<!-- Pagination -->
<?php if (Paginator::numberOfPages()>1) : ?>
<nav class="pagination justify-content-center" role="navigation" aria-label="pagination">
    <?php
    // Previous button
    if (!Paginator::showPrev()) {
        echo '<a class="page-link disabled" >« ' . $L->get('Previous') . '</a>';
    } else {
        echo '<a class="page-link" href="' . Paginator::previousPageUrl() .'">« ' . $L->get('Previous') . '</a>';
    }
    // Next button
    if (!Paginator::showNext()) {
        echo '<a class="page-link disabled" >' . $L->get('Next') . ' »</a>';
    } else {
        echo '<a class="page-link" href="' . Paginator::nextPageUrl() .'">' . $L->get('Next') . ' »</a>';
    }
    ?>
</nav>
<?php endif ?>