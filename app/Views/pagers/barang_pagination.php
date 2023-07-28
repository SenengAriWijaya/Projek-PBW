<!-- <div class="row">
    <div class="col-lg-12 text-center">
        <div class="pagination-wrap">
            <ul>
                <li><a href="#">Prev</a></li>
                <li><a class="#" href="#">1</a></li>
                <li><a class="#" href="#">2</a></li>
                <li><a class="#" href="#">3</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
</div> -->

<?php $pager->setSurroundCount(2) ?>

<div class="row">
    <div class="col-lg-12 text-center">
        <nav class="pagination-wrap">
            <ul>
                <?php if ($pager->hasPrevious()) : ?>
                    <li>
                        <a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                            <span aria-hidden="true"><?= lang('Pager.first') ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                            <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
                        </a>
                    </li>
                <?php endif ?>

                <?php foreach ($pager->links() as $link) : ?>
                    <li <?= $link['active'] ? 'class="active"' : '' ?>>
                        <a href="<?= $link['uri'] ?>">
                            <?= $link['title'] ?>
                        </a>
                    </li>
                <?php endforeach ?>

                <?php if ($pager->hasNext()) : ?>
                    <li>
                        <a href=" <?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                            <span aria-hidden="true"><?= lang('Pager.next') ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                            <span aria-hidden="true"><?= lang('Pager.last') ?></span>
                        </a>
                    </li>
                <?php endif ?>
            </ul>
        </nav>
    </div>
</div>