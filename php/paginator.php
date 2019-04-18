<!-- Pagination -->
<?php if (Paginator::numberOfPages()>1) : ?>
<nav class="pagination justify-content-center" role="navigation" aria-label="pagination">
    <?php
    // Previous button
    if (!Paginator::showPrev()) {
        echo '<a class="page-link disabled" ><i class="fa fa-arrow-left" aria-hidden="true"></i> ' . $L->get('Previous') . '</a>';
    } else {
        echo '<a class="page-link" href="' . Paginator::previousPageUrl() .'"> <i class="fa fa-arrow-left" aria-hidden="true"></i> ' . $L->get('Previous') . '</a>';
    }
    // Next button
    if (!Paginator::showNext()) {
        echo '<a class="page-link disabled" >' . $L->get('Next') . ' <i class="fa fa-arrow-right" aria-hidden="true"></i></a>';
    } else {
        echo '<a class="page-link" href="' . Paginator::nextPageUrl() .'">' . $L->get('Next') . ' <i class="fa fa-arrow-right" aria-hidden="true"></i></a>';
    }
    ?>
</nav>
<?php endif ?>