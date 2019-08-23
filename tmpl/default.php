<?php
/**
 * @package     Module minigallery
 * @subpackage  mod_minigallery
 *
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
// $slider = json_decode($params->get('slider')); 
$slider = $params->get('slider'); 
?>

<div class="slider<?php echo $moduleclass_sfx ?>">

<span class="slider_desc"><?php echo $module->content; ?></span>

<?php foreach ($slider as $key => $item) : ?>
    <div class="slider_block">
    <?php if(!empty($item->imgmini) && !empty($item->imgbig)): ?>
        <a href="<?=$item->imgmini; ?>" class="link">
    <?php endif; ?>
    <?php if(!empty($item->imgmini) || !empty($item->imgbig)): ?>
        <img 
        <?php if(!empty($item->imgbig)): ?>
            src="<?=$item->imgbig; ?>"
        <?php else : ?>
            src="<?=$item->imgmini; ?>"
        <?php endif; ?>
        <?php if(!empty($item->alt)): ?>
            alt="<?=$item->alt; ?>"
        <?php else : ?>
            alt="img_slider_<?=$key; ?>"
        <?php endif; ?>
        <?php if(!empty($item->alt)): ?>
            title="<?=$item->title; ?>"
        <?php endif; ?>
        >
    <?php endif; ?>
    <?php if(!empty($item->imgmini) && !empty($item->imgbig)): ?>       
        </a>
    <?php endif; ?>
    <?php if(!empty($item->header)): ?>
        <h2 class="header"><?=$item->header; ?></h2>
    <?php endif; ?> 
    <?php if(!empty($item->text)): ?>
        <p class="text"><?=$item->text; ?></p>
    <?php endif; ?>
    <?php if(!empty($item->url)): ?>
        <a class="btn" href="<?=$item->url; ?>" role="button"><?=$item->texturl; ?></a>
    <?php endif; ?>
    </div>
<?php endforeach; ?>

</div>