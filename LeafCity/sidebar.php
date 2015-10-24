<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="sidebar">
    <a href="<?php $this->options->siteUrl(); ?>"><div class="my clear">
        <h1><?php $this->options->title() ?></h1>
        <h2><?php $this->options->description() ?></h2>
    </div></a>
    <div class="nav">
        <div class="half">
            <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while ($category->next()): ?><a href="<?php $category->permalink(); ?>"><?php $category->name(); ?></a><?php endwhile; ?>
        </div>
        <a href="http://html5cc.com/"><i class="icon-info"></i>歪闹订阅器</a>
        <a href="http://lab.html5cc.com/"><i class="icon-beaker"></i>实验室</a>
        <a href="http://html5cc.com/friends"><i class="icon-link"></i>小伙伴们</a>
        <a>
            <form id="search" method="post" action="./" role="search">
            <i class="icon-search"></i><input name="s" value="" placeholder="why not so so" class="search">
            </form>
        </a>
    </div>
</div>