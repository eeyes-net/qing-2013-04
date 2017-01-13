<?php $options = get_option('otaku_options'); ?>
<div id="footer" class="cf">
	<div id="followus" class="left">
    	<ul class="cf">
        <?php if($options['feedrss'] && $options['feedrss_content']) : ?>
        	<li><a href="<?php echo($options['feedrss_content']); ?>" class="rss" title="订阅宅谈" target="_blank">RSS</a></li>
        <?php else : ?>
         	<li><a href="<?php bloginfo('url'); ?>/feed" class="rss" title="订阅宅谈" target="_blank">RSS</a></li>
        <?php endif; ?>
        <?php if($options['twitter'] && $options['twitter_url']) : ?>
            <li><a href="<?php echo($options['twitter_url']); ?>" class="twitter" title="推特" target="_blank">twitter</a></li>
        <?php else : ?><?php endif; ?>
        <?php if($options['gplus'] && $options['gplus_url']) : ?>
            <li><a href="<?php echo($options['gplus_url']); ?>" class="gplus" title="Google+" target="_blank">google+</a></li>
        <?php else : ?><?php endif; ?>
        <?php if($options['bgm'] && $options['bgm_url']) : ?>
            <li><a href="<?php echo($options['bgm_url']); ?>" class="bangumi" title="Bangumi" target="_blank">Bangumi</a></li>
		<?php else : ?><?php endif; ?>
        <?php if($options['douban'] && $options['douban_url']) : ?>
            <li><a href="<?php echo($options['douban_url']); ?>" class="dou" title="豆瓣" target="_blank">豆瓣</a></li><br />
		<?php else : ?><?php endif; ?>
        </ul>
    </div>
	<div id="copyright" class="right">
    	<p>Copyright © 2010-<?php $hourdiff = "8"; $timeadjust = ($hourdiff * 60 * 60); $melbdate = date("Y",time() + $timeadjust);
print ("$melbdate")?> <a href="http://www.eeyes.net">e瞳网</a><!--a href="<?php bloginfo('url'); ?>"><?php echo($options['site_name']); ?></a--> | All Rights Reserved.</p>
        <!--p>Themed by Hermit, codename: Steins;Gate</p-->
    </div>
    <div class="ding">顶</div>
    <div class="none"><?php echo($options['footercode']); ?></div>
</div>
</div> <!-- End #wapper -->
<script src="<?php bloginfo( 'template_url' ); ?>/all.js"></script>
<?php wp_footer(); ?>
<div style="display:none;">
<script src="http://www.eeyes.net/public/load.js"></script><script>$(eeyesLoad("body","H","static","hide"));</script>
<style>	#eeyes_header{background: #555;color: #aaa;} #eeyes_header a{color: #ccc;} #eeyes_header a:hover{color:#3BA0FF}</style>
<script>
	//Baidu
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F2b48204fe5fc74209e567ac3ff5d3a9e' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>
</body>
</html>
