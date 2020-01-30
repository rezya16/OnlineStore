<li>
    <a href="?id=<?=id;?>"><?=$category['title'];?></a>
    <?php if (isset($category['childs'])) : ?>
        <?= $this->getMenuHtml($category['childs']);?>
    <?php endif;?>
</li>