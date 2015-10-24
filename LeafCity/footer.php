<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="card footer">
    <p>
	    <a href="<?php $this->options->siteUrl(); ?>">©  2015 <?php $this->options->title() ?>. </a> &nbsp;&nbsp; / &nbsp;&nbsp;
	    <a href="<?php $this->options->feedUrl(); ?>"><i class="icon-rss"></i>RSS</a>
    </p>
    <p class="s"># <a href="javascript:void(0)" id="hitokoto">Loading...</a></p>
    <p class="s">
        <a href="http://typecho.org/">Powered by Typecho</a> &nbsp;&nbsp; / &nbsp;&nbsp;
        <a href="http://blog.html5cc.com/">Theme LeafCity by 叶城</a> &nbsp;&nbsp; 
    </p>
</div>

<?php $this->footer(); ?>